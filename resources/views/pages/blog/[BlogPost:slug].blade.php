<?php
    use function Laravel\Folio\name;
    name('blog-posts.show')
?>

@extends('layouts.marketing')

@section('pageTitle', $blogPost->title)
@section('pageAuthor', $blogPost->author->name)
@section('pageDescription', $blogPost->seo_description)
@section('pageOgType', 'article')
@section('ogArticleData')
    <meta property="article:published_time" content="{{ $blogPost->published_at->toIso8601String() }}">
    <meta property="article:modified_time" content="{{ $blogPost->updated_at->toIso8601String() }}">
    <meta property="article:author" content="{{ $blogPost->author->name }}">
    @foreach($blogPost->tags as $tag)
    <meta property="article:tag" content="{{ $tag->name }}">
    @endforeach
@endsection
@section('ld-json')
<script type="application/ld+json">{{ $blogPost->getStructuredData() }}</script>
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
