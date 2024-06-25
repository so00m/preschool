
@extends('admin.layout.main1')

@section('content')

    <h1>Teacher information</h1>
    <hr>
    <div class="container mt-5">
        <img src="{{ asset('assets/images/'. $teacher->image ) }}" alt="">

        <h2><strong>Teacher :</strong><span>{{ $teacher->first_name}} </span><span>{{ $teacher->last_name}}</span></h2>
        <hr>
        <h2><strong>Phone :</strong>{{ $teacher->phone}}</h2>
        <hr>
        <h2><strong>Email :</strong>{{ $teacher->email}}</h2>
        <hr>
        <h2><strong>subject :</strong>{{ $teacher->subject}}</h2>
        <hr>
        <h2><strong>shown on site :</strong>{{$teacher->published ? 'yes':'no'}}</h2>

@endsection