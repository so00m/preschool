@extends('admin.layout.main1')
@section('title','Preschool Dashboard')
@section('content')
    <div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    @include('admin.includes.dashcontent')
@endsection         