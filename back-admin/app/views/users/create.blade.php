@extends('layouts.master')
@section('content')
	@parent
	<h2>ログインユーザ作成</h2>

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

	<div class="control-group">
		{{ Form::label('service_id','サービスID',array('class'=>'control-label')) }}
		<div class="controls">
		{{ Form::text('service_id') }}
		@if($errors->has('service_id'))
		</div>
		<div class="controls label label-important">
		{{ $errors->first('service_id') }}
		@endif
		</div>
	</div>

	<div class="control-group">
		{{ Form::label('group_id','グループID',array('class'=>'control-label')) }}
		<div class="controls">
		{{ Form::text('group_id') }}
		@if($errors->has('group_id'))
		</div>
		<div class="controls label label-important">
		{{ $errors->first('group_id') }}
		@endif
		</div>
	</div>
	
	<div class="form-actions">
		{{ Form::submit('新規登録',array('class'=>'btn btn-primary')) }}
	</div>
	{{ Form::token() }}
	{{ Form::close() }}

@stop