<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>laravel調査</title>
</head>
<body>
<div id="container">
	<div id="header" class="clearfix">
		<a href="/">laravel調査</a>
		<a href="/users/create">ユーザ作成</a>
		<a href="/users/login">ログイン</a>
		<a href="/users/logout">ログアウト</a>
	</div>
	<div id="wrap">
		<div id="content_wrap">
			<div id="content">
				@section('content')	
				@show
			</div>
		</div>
	</div>
</div>

</body>
</html>