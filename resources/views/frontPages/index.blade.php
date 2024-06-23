@extends('layout.main')
@section('title','Preschool Home Page')
@section('content')

    <!-- carousel Start -->
        @include('includes.carousel')
    <!-- carousel End -->

    <!-- Facilities Start -->
        @include('includes.facility')
    <!-- Facilities End -->
        
    <!-- About Start -->
        @include('includes.about')
    <!-- About End -->

    <!-- Call To Action Start -->
         @include('includes.callToAction')
    <!-- Call To Action End -->

    <!-- Classes Start -->
         @include('includes.classes')
    <!-- Classes End -->

    <!-- Appointment Start -->
         @include('includes.appointment')
    <!-- Appointment End -->

    <!-- Team Start -->
        @include('includes.team')
    <!-- Team End -->
    
    <!-- Testimonial Start -->
        @include('includes.testimonial')
    <!-- Testimonial End -->

@endsection


