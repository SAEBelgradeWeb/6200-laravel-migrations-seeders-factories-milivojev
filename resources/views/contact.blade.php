@extends('layouts.app')

@section('content')
<h1>welcome to contact page</h1>
<p>these are arguments sent trough url id: {{$id}}, name {{$name}} and var {{$var}}</p>
@stop

@section('footer')
<p>this is footer section . authoer of text is {{$name}} . his phone number is {{$phonenumber}}</p>
@stop