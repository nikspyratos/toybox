<?php
    use function Laravel\Folio\name;
    name('roadmap.show')
?>

@extends('layouts.marketing')

@section('pageTitle', $roadmapItem->title)

@section('content')
<section class="px-4 pb-4 mx-auto w-3/4 max-screen-xl primary-section">
    <h1 class="text-center">{{ $roadmapItem->title }}</h1>
    <div>
        <span class="text-matisse-500">Submitted: {{ $roadmapItem->created_at->toDateString() }}</span>
        <span class="ml-4 text-matisse-500">Last updated: {{ $roadmapItem->updated_at->toDateString() }}</span>
        <div class="mt-4">
            {!! $roadmapItem->content !!}
        </div>
    </div>
</section>
@endsection
