<?php namespace App\Http\Controllers\Host;

use Auth;
use File;
use App\User;
use App\Room;
use App\Photo;
use App\Host_info;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Input;
use Validator;
use Response;

class RoomController extends Controller {

	public function __construct()
    {

        $this->middleware('auth', ['except' => ['preview']]);
        
        $this->middleware('host');
    }

	/**
	 * Display a listing of the Host's room.
	 *
	 * @return Response
	 */
	public function rooms()
	{
		$user_id = Auth::user()->id;
		$res = Room::where('user_id', $user_id);
		$rooms = $res->paginate(10);
		$count = $res->count();
		return view('host.room.rooms', compact('count', 'rooms'));
	}

	/**
	 * Show the form for creating a new Room.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user_id = Auth::user()->id;
		$res = Room::where('user_id', $user_id);
        $count = $res->count();
        return view('host.room.create', compact('count'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$this->validate($request, [
            //'id' => 'required|digits:4|unique:users',
            //'email' => 'required',
            ]);
		$user_id = Auth::user()->id;
        $room = new Room; 
        $room->user_id = $user_id;  
        $room->room_type = $request->room_type;
        $room->house_type = $request->house_type;
        $room->city = $request->city;
        $room->save(); 

        flash()->overlay('successfully!', 'Complete your new listing');

        $id = $room->id;   
        session()->flash('message', $room->title."Added new room, please complete your listing");     
        return Redirect::to('rooms/'.$id);
	}

	/**
	 * Show Host's specific room infomation.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user_id = Auth::user()->id;
		$room = Room::where('id', $id)->where('user_id', $user_id)->first();
        $room->amenities = explode(",", $room->amenities);
        return view('host.room.manage-listing', compact('room'));
	}

    public function show_accommodation($id)
    {
        $user_id = Auth::user()->id;
        $room = Room::find($id)->where('id', $id)->where('user_id', $user_id)->first();
        return view('host.room.show_accommodation', compact('room'));
    }

    public function preview($id)
    {
        $user_id = Auth::user()->id;
        $room = Room::find($id)->where('id', $id)->where('user_id', $user_id)->first();
        //$host_info = Host_info::find($id)->where('id', $id)->where('user_id', $user_id)->first();
        //$room->amenities = explode(",", $room->amenities);
        //print_r($host_info);exit;
        return view('host.room.preview', compact('room', 'host_info'));
    }

    public function show_location($id)
    {
        $user_id = Auth::user()->id;
        $room = Room::find($id)->where('id', $id)->where('user_id', $user_id)->first();
        return view('host.room.show_location', compact('room'));
    }

	/**
	 * Display a specific room page.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// print_r($id);exit;
		// $user_id = Auth::user()->id;
		// //print_r($user_id);exit;
  //       $res = Room::where('user_id', $user_id);
  //       $room = $res->get()->first();
		// return view('host.room.edit', compact('room'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$res = Room::where('id', $id)->first();
        $res->delete();
        session()->flash('message', "Deleted successfully");
        return Redirect::back();
	}

    // public function delRoom($id)
    // {
    //     $res = Room::where('id', $id)->first();
    //     $res->delete();
    //     session()->flash('message', "该房源已经被移除");
    //     return Redirect::back();
    // }

	public function update_room(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $room->title = $request->title;
        $room->room_type = $request->room_type;
        $room->bed_type = $request->bed_type;
        $room->intro = $request->intro;
        $room->save();
        session()->flash('message', '房源更新成功');
        return Redirect::back();
    }

    public function update_accommodation(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $room->room_type = $request->room_type;
        $room->house_type = $request->house_type;
        $room->adult_num = $request->adult_num;
        $room->child_num = $request->child_num;
        $room->save();
        session()->flash('message', 'Accommodation update successfully!');
        return Redirect::back();
    }

    public function update_description(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $room->title = $request->title;
        $room->intro = $request->intro;
        $room->save();
        session()->flash('message', 'Description update successfully!');
        return Redirect::back();
    }

    public function update_location(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $room->country = $request->country;
        $room->state = $request->state;
        $room->city = $request->city;
        $room->zip = $request->zip;
        $room->address1 = $request->address1;
        $room->address2 = $request->address2;
        $room->save();
        session()->flash('message', 'Location update successfully!');
        return Redirect::back();
    }

    public function update_calendarPrice(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $room->avail_from = $request->avail_from;
        $room->min_days = $request->min_days;
        $room->m_price = $request->m_price;
        $room->d_price = $request->d_price;
        $room->save();
        session()->flash('message', 'Calendar and Price update successfully!');
        return Redirect::back();
    }

    public function update_amenities(Request $request)
    {
        $this->validate($request, Room::rules());
        $room = Room::where('id', $request->user_id)->first();
        $amenitiesString = implode(",", $request->get('amenities'));

        $room->amenities = $amenitiesString;

        $room->save();

        session()->flash('message', 'Amenities update successfully!');
        return Redirect::back();
    }


    public function changeStatus(Request $request)
    {
    	
    	$room = Room::where('id', $request->id)->first();
    	//print_r($room->id);exit;
    	$status=$request->status;
    	$room->status = $status;
    	// if ($status == 1) {
    	// 	$room->status = 0;
    	// }
    	// else {
    	// 	$room->status = 1;
    	// }
    	$room->save();
    	return Redirect::back();
    }


    public function addPhoto($id, Request $request)
    {

        $input = Input::all();
 
        $rules = array(
            //'file' => 'image|max:3000',
            'file' => 'required|mimes:jpg,jpeg,png,bmp|max:3000',
        );
 
        $validation = Validator::make($input, $rules);
 
        if ($validation->fails()) {
            return Response::make($validation->errors->first(), 400);
        }

        $destinationPath = 'uploads/rooms/' . $id; // upload path

        if (!file_exists($destinationPath)) {
            $gallery_folder_path = File::makeDirectory($destinationPath, 0777, true, true);
            $distinationPath = $gallery_folder_path;
        }

        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
        $fileName = rand(100, 999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

        $room = Room::where('id', $id)->first();
        $room->photos()->create(['path' => "uploads/rooms/{$id}/{$fileName}"]);
 
        if ($upload_success) {
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }

        

    }

    public function delPhoto($id)
    {

        $fileName = Photo::where('id', $id)->first();

        $filePath = $fileName->path;
        //print_r($filePath);exit;
        $photo = Photo::findOrFail($id)->delete();

        File::delete($filePath);

        return Redirect::back();

    }

    

}
