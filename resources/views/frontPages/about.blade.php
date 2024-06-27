@extends('frontPages.layout.main')
@section('title','About Us')
@section('content')

        <!-- Page Header End -->
        @include('frontPages.includes.header')
        <!-- Page Header End -->


        <!-- About Start -->
         @include('frontPages.includes.about')
        <!-- About End -->


        <!-- Call To Action Start -->
         @include('frontPages.includes.callToAction')
        <!-- Call To Action End -->


        <!-- Team Start -->
        @include('frontPages.includes.team')
        <!-- Team End -->

@endsection