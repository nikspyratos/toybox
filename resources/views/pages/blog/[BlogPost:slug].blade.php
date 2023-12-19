<?php
    use function Laravel\Folio\name;
    name('blog-posts.show')
?>

@extends('layouts.marketing')

@section('pageTitle')
{{ $blogPost->title }}
@endsection

@section('content')
<section class="px-4 pb-4 mx-auto w-3/4 max-screen-xl primary-section">
    <h1 class="text-center">{{ $blogPost->title }}</h1>
    <div class="panel">
        <span class="text-matisse-500">Published: {{ $blogPost->published_at->toDateString() }}</span>
        <span class="ml-4 text-matisse-500">Last updated: {{ $blogPost->updated_at->toDateString() }}</span>
        <div class="mt-4">
            {!! $blogPost->content !!}
        </div>
    </div>
</section>
@endsection
