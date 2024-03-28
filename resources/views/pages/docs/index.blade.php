<?php

use App\Models\BlogPost;
use App\Models\DocumentationPage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('docs.index');

render(static function (View $view) {
    $posts = DocumentationPage::all();
    return $view->with('posts', $posts);
}); ?>

@extends('layouts.marketing')

@section('pageTitle')
    Docs
@endsection

@section('content')
    <section class="px-4 pb-4 mx-auto w-3/4 max-w-xl primary-section">
        <h1 class="text-center">Docs</h1>
        @foreach ($posts as $post)
            <a href="{{ $post->getLiveUrl() }}">
                <div class="mb-8 card">
                    <div class="flex justify-between">
                        <span class="blog-post-title">{{ Str::ucwords($post->title) }}</span>
                        <span class="blog-post-date">{{ $post->last_updated_at }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection
