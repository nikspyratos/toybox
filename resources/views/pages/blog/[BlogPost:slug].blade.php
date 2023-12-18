<?php
    use function Laravel\Folio\name;
    name('blog-posts.show')
?>

@extends('layouts.marketing')

@section('content')
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="px-4 pt-8 pb-4 mx-auto w-3/4 max-w-screen-xl lg:pt-24">
        <h1 class="mb-6 text-4xl font-extrabold tracking-tight leading-none text-center md:text-5xl xl:text-6xl dark:text-white">{{ $blogPost->title }}</h1>
        <div class="p-6 mx-auto mb-6 text-gray-900 bg-white xl:p-8 dark:text-white dark:bg-gray-800 dark:border-gray-600">
                <span class="text-matisse-500">{{ $blogPost->published_at->toDateString() }}</span>
                <div class="mt-4">
                    {{-- TOC generation --}}
                    {!! $blogPost->content !!}
                </div>
        </div>
    </div>
</section>
@endsection
