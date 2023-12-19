<?php
    use function Laravel\Folio\name;
    name('blog-posts.show')
?>

@extends('layouts.marketing')

@section('pageTitle')
{{ $blogPost->title }}
@endsection

@section('content')
<section class="primary-section">
    <div class="px-4 pt-8 pb-4 mx-auto w-3/4 max-w-screen-xl lg:pt-24">
        <h1 class="text-center">{{ $blogPost->title }}</h1>
        <div class="bg-white xl:p-8 dark:bg-gray-800 dark:border-gray-600 panel">
            <span class="text-matisse-500">Published: {{ $blogPost->published_at->toDateString() }}</span>
            <span class="ml-4 text-matisse-500">Last updated: {{ $blogPost->updated_at->toDateString() }}</span>
            <div class="mt-4">
                {!! $blogPost->content !!}
            </div>
        </div>
    </div>
</section>
@endsection
