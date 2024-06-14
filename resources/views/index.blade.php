@extends('layout.main')
@section('title','Preschool Home Page')
@section('content')
    @include('includes.carousel')
    @include('includes.facility')
    @include('includes.about')
    @include('includes.callToAction')
    @include('includes.classes')
    @include('includes.appointment')
    @include('includes.team')
    @include('includes.testimonial')
@endsection


