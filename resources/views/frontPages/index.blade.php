@extends('frontPages.layout.main')
@section('title','Preschool Home Page')
@section('content')

    <!-- carousel Start -->
        @include('frontPages.includes.carousel')
    <!-- carousel End -->

    <!-- Facilities Start -->
        @include('frontPages.includes.facility')
    <!-- Facilities End -->
        
    <!-- About Start -->
        @include('frontPages.includes.about')
    <!-- About End -->

    <!-- Call To Action Start -->
         @include('frontPages.includes.callToAction')
    <!-- Call To Action End -->

    <!-- Classes Start -->
         @include('frontPages.includes.classes')
    <!-- Classes End -->

    <!-- Appointment Start -->
         @include('frontPages.includes.appointment')
    <!-- Appointment End -->

    <!-- Team Start -->
        @include('frontPages.includes.team')
    <!-- Team End -->
    
    <!-- Testimonial Start -->
        @include('frontPages.includes.testimonial')
    <!-- Testimonial End -->

@endsection


