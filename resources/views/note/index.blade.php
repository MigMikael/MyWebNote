@extends('template')

@section('page_title', 'Index')

@section('content')
    <h1>All Note</h1>
    @foreach($notes as $note)
        <h3>{!! $note->title !!}</h3>
        <a href="{!! url('note/'.$note->id) !!}">Show More</a>
        <hr>
    @endforeach
@stop
