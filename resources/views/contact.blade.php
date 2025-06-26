@extends('layout')

@section('content')
<h1>Contact Me</h1>
<form>
    <label>Name:</label><br>
    <input type="text" name="name"><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br>

    <button type="submit">Send</button>
</form>
@endsection
