@extends('host.host-master')

@section('title')
    Profile - TP
@stop

@section('content')

    <div class="row">

        @include('host.profile_bar')

        <div class="col-md-7">  

            <div class="panel panel-default">
                <div class="panel-heading">
                   <h4>Required</h4>
                </div>

                @include('flash')
                @include('errors.list')

                <div class="panel-body">
                    <div class="personal-mes">

                        {!! Form::model($host_info, ['url' => '/host/update_info', 'class' => 'form-horizontal']) !!}
                        {!! Form::hidden('user_id', $host_info->id) !!}
                            
                            <div class="form-group">
                                    {!! Form::label('fName', 'First Name: ', ['class' => 'col-sm-3 control-label']) !!} 
                                <div class="col-sm-8">
                                    {!! Form::text('fName', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('lName', 'Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                                
                                <div class="col-sm-8">
                                    {!! Form::text('lName', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('age', 'Age: ', ['class' => 'col-sm-3 control-label']) !!}               
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::text('age', null, ['class' => 'form-control', 'required']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('gender', 'I Am: ', ['class' => 'col-sm-3 control-label']) !!}
                                
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('gender', [  '0' => 'Gender',
                                                                      '1' => 'Male', 
                                                                      '2' => 'Female'], 
                                                                      Auth::user()->gender, 
                                                                      ['class' => 'form-control']) !!}
                                </div>
                            </div>                           
                            <div class="form-group">
                                {!! Form::label('ethnicity', 'I Am: ', ['class' => 'col-sm-3 control-label']) !!}                
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('ethnicity', [ '0'=>'Ethnicity',
                                                                    '1' => 'Asian', 
                                                                    '2' => 'Hispanic',
                                                                    '3' => 'White',
                                                                    '4' => 'Black',
                                                                    '5' => 'Pacific Islander',
                                                                    '6' => 'Two or more races',
                                                                    '7' => 'Other'], 
                                                                    Auth::user()->ethnicity, 
                                                                    ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('occupation', 'I Am a: ', ['class' => 'col-sm-3 control-label']) !!}
                                <div class="col-sm-6 col-md-4">
                                    {!! Form::select('occupation', ['0' => 'Occupation',
                                                                    '1' => 'Officer worker', 
                                                                    '2' => 'Manual worker',
                                                                    '3' => 'Self-employed',
                                                                    '4' => 'Executive/Professional',
                                                                    '5' => 'Housewife',
                                                                    '6' => 'Retired',
                                                                    '7' => 'Other'], 
                                                                     Auth::user()->occupation, 
                                                                     ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email Address: ', ['class' => 'col-sm-3 control-label']) !!}      
                                <div class="col-sm-8">
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group form-inline">
                                
                                {!! Form::label('phone', 'Phone Number: ', ['class' => 'col-sm-3 control-label']) !!}          
                                <div class="col-sm-8">                       
                                    {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => 'Area Code', 'required']) !!}
                                    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Number', 'required']) !!}
                                </div>
                            </div>            
                            
                            <div class="form-group">
                                {!! Form::label('language', 'Language SKills: ', ['class' => 'col-sm-3 control-label']) !!}   
                                <div class="col-sm-8">
  
                                    {!! Form::checkbox('language[]', 'English', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'English', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Spanish', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Spanish', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Chinese', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Chinese', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Vietnamese', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Vietnmaese', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Filipino', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Filipino', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'French', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'French: ', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'German', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'German', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Indian', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Indian', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Arabic', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Arabic', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Korean', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Korean', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Portuguese', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Portuguese', ['class' => 'control-label']) !!}

                                    {!! Form::checkbox('language[]', 'Other', in_array('English', $host_info->language)) !!}
                                    {!! Form::label('language', 'Other', ['class' => 'control-label']) !!}

                                </div>
                            </div>
                            
                            {!! Form::submit('提交', ['class' => 'btn btn-success']) !!}
                        
                        {!! Form::close() !!}

                    
                        
                    </div>
                </div>
            
            </div>
        </div>

        @include('host.update_info')

    </div>

@stop



