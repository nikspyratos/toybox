<?php

use App\Models\BlogPost;
use App\Models\RoadmapItem;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('roadmap.index');

render(static function (View $view) {
    $roadmapItems = RoadmapItem::published()
        ->orderByDesc('created_at')
        ->groupBy('status')
        ->get();
    return $view->with('roadmapItems', $roadmapItems);
}); ?>

@extends('layouts.marketing')

@section('pageTitle')
    Roadmap
@endsection

@section('content')
    <section class="px-4 pb-4 mx-auto w-3/4 max-w-xl primary-section">
        <h1 class="text-center">Roadmap</h1>
        @foreach ($roadmapItems as $roadmapItem)
            <div class="mb-8 card">
                <div class="flex justify-between">
                    <span class="blog-post-title">{{ Str::ucwords($roadmapItem->title) }}</span>
                    <span class="blog-post-date">{{ $roadmapItem->created_at->toDateString() }}</span>
                </div>
                <p class="blog-post-description">{{ $roadmapItem->content }}</p>
            </div>
        @endforeach
    </section>
@endsection
