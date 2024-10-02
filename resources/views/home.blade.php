<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::to('css/global.css')}}">
    <title>URL Shortener</title>
</head>
<body>
<div class="container">
    <h1>URL Shortener</h1>
    <form action="{{ action('LinkController@make') }}" method="POST">
        {{ csrf_field() }}
    <input type="text" id="urlInput" name="url" placeholder="Enter the URL to shorten" {{Request::old('url') ? 'value ='.e(Request::old('url')).'' : ''}}>
        <button id="Shorten">Shorten</button>
    </form>
    <div id="result">
        @if($errors->has('url'))
            <p>{{$errors->first('url')}}</p>
        @endif
        @if(Session::has('global'))
        <p>Shortened URL: <span id="shortUrl"><a href="{{Session::get('global')}}">{{Session::get('global')}}</a></span></p>
            @endif
    </div>
</div>
</body>
</html>

