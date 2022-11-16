
@extends('layout.header')

@section('content')

{{-- Plans go here --}}
@include('layout.plans')

@include('layout.landing-page.hero')

@include('layout.landing-page.value-prop')

@include('layout.landing-page.blog-section')

@include('layout.landing-page.testimonials')

@include('layout.landing-page.cta')


@include('layout.landing-page.faq')


@endsection

