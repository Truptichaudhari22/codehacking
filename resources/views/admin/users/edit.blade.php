@extends('layouts.admin')


@section('content')


<h1>Edit User</h1>

<div class="row"></div>

<div class="col-sa-3">

< img src="{{$user->photo ? $user->photo->file : 'http://placehold.it400x400}}" alt=""> class="img-responsive "img-rounded">

</div>
<{!! Form::open(['method'=>'PATCH','action'=>['AdminUsersController@edit',$user->id, 'files'=>true]]) !!}

<div class="form-group">
{!! Form::label('name','Name:')  !!}
{!! Form::text('name',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
{!! Form::label('email','Email:')  !!}
{!! Form::email('email',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('role_id','Role:')  !!}
{!! Form::select('role_id',[''=>'choose option'],  $roles,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('photo_id','Photo:')  !!}
{!! Form::file('photo_id',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
{!! Form::label('status','Status:')  !!}
{!! Form::select('status', array(1 =>'Active', 0 =>'Not Active'),null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('password','Password:')  !!}
{!! Form::password('password', ['class'=>'form-control']) !!}
</div>


<div class="form-group">
{!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

<div class="row">

@include('includes.form_error') 
-
@stop