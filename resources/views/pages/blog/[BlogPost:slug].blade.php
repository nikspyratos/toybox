<?php
    use function Laravel\Folio\name;
    name('blog-posts.show')
?>

@extends('layouts.marketing')

@section('content')
<div>
    {{ $blogPost->title }}
</div>
@endsection
