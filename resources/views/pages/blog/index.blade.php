<?php

use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('blog-posts.index');

render(function (View $view) {
    $posts = BlogPost::select(['title', 'slug', 'seo_description', 'published_at'])->get();
    return $view->with('posts', $posts);
}); ?>

@extends('layouts.marketing')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="px-4 pt-8 pb-4 mx-auto w-1/2 max-w-screen-xl lg:pt-24">
        <h1 class="mb-6 max-w-2xl text-4xl font-extrabold tracking-tight leading-none text-center md:text-5xl xl:text-6xl dark:text-white">Blog</h1>
        @foreach ($posts as $post)
            <a href="{{ $post->getLiveUrl() }}">
                <div class="p-6 mx-auto mb-6 max-w-lg text-gray-900 bg-white rounded-lg border border-gray-100 shadow xl:p-8 dark:text-white dark:bg-gray-800 dark:border-gray-600">
                    <div class="flex justify-between">
                        <span class="text-matisse-500">{{ Str::ucwords($post->title) }}</span>
                        <span class="text-gray-400">{{ $post->published_at->toDateString() }}</span>
                    </div>
                    <p class="text-gray-500">{{ Str::limit($post->seo_description) }}</p>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endsection
