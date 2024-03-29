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
<section class="pb-4 mx-auto primary-section">
    <h1>{{ $documentationPage->title }}</h1>
    <div>
        <span class="ml-4 text-matisse-500">Last updated: {{ $documentationPage->last_updated_at }}</span>
        <div class="mt-4">
            <x-markdown>
                {!! $documentationPage->content !!}
            </x-markdown>
        </div>
    </div>
</section>
@endsection
