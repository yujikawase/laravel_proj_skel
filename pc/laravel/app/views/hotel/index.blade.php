<!doctype html>
<html lang="ja">
<head>
  <title>Demo Hotel</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>Demo Hotel</h1>
@foreach ($hotels as $hotel)
  <a href="{{ action('HotelController@show', $hotel->id) }}">{{{ $hotel->name }}}</a> {{ $hotel->created_at }}<br />
@endforeach
</body>
</html>