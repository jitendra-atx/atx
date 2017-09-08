@extends('layouts.admin')

@section('content')
<div class="container1">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-register">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                  {!! Form::open(['url' => 'admin/register','method'=>'post','class'=>'form-horizontal']) !!}

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                            {{Form::label('name', 'Name', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                              {{Form::text('name', null, ['class'=>'form-control','id'=>'name','required'=>true,'autofocus'=>true])}}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {{Form::label('email', 'Email', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::email('email', null, ['class'=>'form-control','id'=>'email','required'=>true])}}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">

                            {{Form::label('first_name', 'First Name', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                              {{Form::text('first_name', null, ['class'=>'form-control','id'=>'first_name','required'=>true])}}
                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">

                            {{Form::label('last_name', 'Last Name', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                              {{Form::text('last_name', null, ['class'=>'form-control','id'=>'last_name','required'=>true])}}
                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">

                            {{Form::label('telephone', 'Telephone', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                              {{Form::text('telephone', null, ['class'=>'form-control','id'=>'telephone','required'=>true])}}
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{Form::label('password', 'Password', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                                {{Form::password('password', ['class'=>'form-control','id'=>'password','required'=>true])}}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">

                            {{Form::label('password-confirm', 'Confirm Password', ['class' => 'col-md-4 control-label'])}}
                            <div class="col-md-6">
                              {{Form::password('password_confirmation',  ['class'=>'form-control','id'=>'password-confirm','required'=>true])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
