@extends('layouts.master')
@section('content')
	@parent
	<h2>ログイン</h2>

	{{ Form::open(array('class'=>'form-horizontal')) }}

	<div class="control-group">
		{{ Form::label('username','ユーザー名',array('class'=>'control-label')) }}
		<div class="controls">
		{{ Form::text('username') }}
		@if($errors->has('username'))
		</div>
		<div class="controls label label-important">
		{{ $errors->first('username') }}
		@endif
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('password','パスワード',array('class'=>'control-label')) }}
		<div class="controls">
		{{ Form::text('password') }}
		@if($errors->has('password'))
		</div>
		<div class="controls label label-important">
		{{ $errors->first('password') }}
		@endif
		</div>
	</div>

	@if($errors->has('warning'))
	<div class="alert alert-error" id="alert">
		{{ $errors->first('warning') }}
	</div>
	@endif

	
	<div class="form-actions">
		{{ Form::submit('新規登録',array('class'=>'btn btn-primary')) }}
	</div>
	{{ Form::token() }}
	{{ Form::close() }}

@stop