<html>
    <head>


@extends('test.test')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection
@section('k')
    <p>This is appended to the master sidebar.</p>
@endsection


@section('content')
    <p>This is my body content.</p>
@endsection

<h1>Laravel</h1>

Hello, @{{ name }}.<br>
</body>
</html>