<?php

use App\Models\BlogPost;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('blog-posts.index');

render(function (View $view) {
    $posts = BlogPost::select(['id', 'title', 'slug', 'seo_description', 'published_at'])
        ->published()
        ->get();
    return $view->with('posts', $posts);
}); ?>

@extends('layouts.marketing')

@section('pageTitle')
Blog
@endsection

@section('content')
<section class="px-4 pb-4 mx-auto w-3/4 max-w-xl primary-section">
    <h1 class="text-center">Blog</h1>
    @foreach ($posts as $post)
        <a href="{{ $post->getLiveUrl() }}">
            <div class="mb-8 card">
                <div class="flex justify-between">
                    <span class="blog-post-title">{{ Str::ucwords($post->title) }}</span>
                    <span class="blog-post-date">{{ $post->published_at->toDateString() }}</span>
                </div>
                <p class="blog-post-description">{{ Str::limit($post->seo_description) }}</p>
            </div>
        </a>
    @endforeach
</section>
@endsection
