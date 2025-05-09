@extends('frontend.layouts.layout')

@section('content')

@include('frontend.sections.hero')

@include('frontend.sections.service')

@include('frontend.sections.about')

<!-- Portfolio-Area-Start -->
@include('frontend.sections.portfolio')
<!-- Portfolio-Area-End -->

<!-- Skills-Area-Start -->
@include('frontend.sections.skill')
<!-- Skills-Area-End -->

<!-- Experience-Area-Start -->
@include('frontend.sections.experience')
<!-- Experience-Area-End -->

<!-- Testimonial-Area-Start -->
@include('frontend.sections.testimonial')
<!-- Testimonial-Area-End -->

<!-- Blog-Area-Start -->
@include('frontend.sections.blog')
<!-- Blog-Area-End -->

<!-- Contact-Area-Start -->
@include('frontend.sections.contact')
<!-- Contact-Area-End -->
@endsection