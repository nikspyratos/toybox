<?php
    use function Laravel\Folio\name;
    name('docs.show')
?>

@extends('layouts.documentation')

@section('pageTitle', $documentationPage->title)
@section('pageAuthor', '')
@section('pageDescription', '')
@section('pageOgType', 'article')
@section('ogArticleData')
    <meta property="article:modified_time" content="{{ $documentationPage->last_updated_at }}">
@endsection
@section('ld-json')
@endsection

@section('content')
<section class="px-4 pb-4 mx-auto w-3/4 max-screen-xl primary-section">
    <h1 class="text-center">{{ $documentationPage->title }}</h1>
    <div>
        <span class="ml-4 text-matisse-500">Last updated: {{ $documentationPage->last_updated_at }}</span>
        <div class="mt-4">
            {!! $documentationPage->content !!}
        </div>
    </div>
</section>
@endsection
