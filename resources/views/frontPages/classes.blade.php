@extends('frontPages.layout.main')
@section('title','Our Classes')
@section('content')

        <!-- Page Header End -->
        @include('frontPages.includes.header')
        <!-- Page Header End -->
         
        <!-- Classes Start -->
        @include('frontPages.includes.classes')
        <!-- Classes End -->


        <!-- Appointment Start -->
        @include('frontPages.includes.appointment')
        <!-- Appointment End -->


        <!-- Testimonial Start -->
        @include('frontPages.includes.testimonial')
        <!-- Testimonial End -->
@endsection