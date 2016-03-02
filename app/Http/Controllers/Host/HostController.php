<?php namespace App\Http\Controllers\Host;

use Auth;
use Redirect;
use App\User;
use App\Host_info;
use App\Http\Requests\HostMesRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HostController extends Controller {

	/**
     * 只允许登录用户访问
     */
    public function __construct()
    {

        $this->middleware('auth');
        
        $this->middleware('host');
    }

    /**
     * 返回Host主页
     */
	public function profile()
    {
        $user_id = Auth::user()->id;
        $res = Host_info::where('user_id', $user_id);
        $host_info = $res->get()->first();
        $host_info->language = explode(",", $host_info->language);
        return view('host.profile', compact('host_info'));
    }

    /**
     * 返回修改资料页面
     * @return [type] [description]
     */
    public function edit()
    {
        return view('host.edit');
    }

    public function update(HostMesRequest $request)
    {
        Auth::user()->update($request->all());

        session()->flash('message', '个人信息修改成功');

        return Redirect::route('host_home');
    }


    public function update_info(Request $request)
    {
        $this->validate($request, Host_info::update_info_rules());     
        $info = Host_info::where('id', $request->user_id)->first();
        $languageString = implode(",", $request->get('language'));

        $info->fName = $request->fName;
        $info->lName = $request->lName;
        $info->gender = $request->gender;
        $info->ethnicity = $request->ethnicity;
        $info->age = $request->age;
        $info->occupation = $request->occupation;
        $info->phone = $request->phone;
        //$info->mobile = $request->mobile;
        $info->language = $languageString;

        $info->save();
        
        session()->flash('message', 'Saved!');
        return Redirect::back();
    }

}


