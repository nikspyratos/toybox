<?php

use function Laravel\Folio\name;

name('coming-soon');

?>

@extends('layouts.marketing', ['includeNav' => false])

@section('pageTitle')
{{ config('app.name') . ' is coming soon!' }}
@endsection

@section('content')
    <section class="primary-section">
        <div class="grid px-4 pb-8 mx-auto max-w-screen-xl lg:grid-cols-12 lg:gap-8 lg:pb-16 xl:gap-0">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1>Coming soon!</h1>
                <p class="headline">Something interesting this way comes...</p>
            </div>
            <div class="lg:flex lg:col-span-5 lg:mt-0">
                Hero Image here
            </div>
        </div>
    </section>
@endsection
