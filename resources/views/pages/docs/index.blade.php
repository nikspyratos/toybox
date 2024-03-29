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
    $indexPage = DocumentationPage::whereTitle('index')->first();
    return $view->with('indexPage', $indexPage);
}); ?>

@extends('layouts.documentation')

@section('pageTitle')
    Docs
@endsection

@section('content')
    <x-markdown>
        {!! $indexPage->content !!}
    </x-markdown>
@endsection
