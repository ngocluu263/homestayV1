@extends('master')

@section('title')
    管理员
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                @include('errors.list')

                <h3 align="center">Total of Students:{{ $count }}</h3>
                <table class="table table-hover">
                    <tr>
                        <td>用户类型</td>
                        <td>姓名</td>
                        <td>邮箱</td>
                        <td>性别</td>
                        <td>手机</td>
                        <td>班级</td>                     
                        <td>操作</td>
                    </tr>
                    @if (count($users))
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->user_type == 1 ? 'Host' : 'Student' }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->sex }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->pro_class }}</td>                            
                                <td>
                                    <a href="{{ '/admin/stu/profile/'.$user->id }}"><button class="btn btn-sm btn-info">View Detail</button></a>
                                    <form action="{{ url('admin/'.$user->id) }}" style='display: inline' method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button class="btn btn-sm btn-danger" onclick="return confirm('确定删除?')">删除</button>
                                    </form>
                                </td>
                            </tr>

                            @include('Admin.upload_grade')

                        @endforeach
                    @else
                        <h1>没有学生名单,请管理员添加</h1>
                    @endif
                </table>
                <?php echo $users->render(); ?>
            </div>
            @include('Admin.right_bar')
        </div>

    </div>
@stop