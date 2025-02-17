<?php
    global $wp_query;
    $total_products = $wp_query->found_posts; // Total products
    $products_per_page = get_query_var('posts_per_page'); // Products per page
    $current_page = max(1, get_query_var('paged')); // Current page
    $start = ($current_page - 1) * $products_per_page + 1;
    $end = min($total_products, $current_page * $products_per_page);
?>



@extends('layouts.app')

@section('content')
@include('components.text-hero')
@include('pages.shop.products')
@include('components.newsletter')
@endsection
