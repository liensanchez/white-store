{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @include('pages.home.hero')
  @include('partials.features')
  @include('partials.mobile-products')
 {{--  @include('partials.consoles-products') --}}
  @include('partials.sale')
  @include('partials.latest-blogs')
@endsection
