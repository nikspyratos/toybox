<?php

use function Laravel\Folio\name;

name('home');

?>

@extends('layouts.marketing')

@section('pageTitle')
Home
@endsection

@section('content')
    {{--  Title, hero  --}}
    <section class="primary-section">
        <div class="grid px-4 pb-8 mx-auto max-w-screen-xl lg:grid-cols-12 lg:gap-8 lg:pb-16 xl:gap-0">
            <div class="place-self-center mr-auto lg:col-span-7">
                <h1>A TALL starter kit for <br>Laravel solopreneurs.</h1>
                <p class="headline">The Toybox has a bit of everything - a grand tour of the Laravel PHP world, so to speak. Let's have some fun!</p>
                <p class="subheading">This page was built using the <a class="link" href="https://demo.themesberg.com/landwind/">Landwind theme</a>.</p>
                <p class="emphasis">This landing page is both a template for your SaaS and an explainer of the Toybox project.</p>
                <a class="btn" href="https://github.com/nikspyratos/toybox">
                    <svg class="mr-2 w-4 h-4 text-gray-500 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                    Github
                </a>
            </div>
            <div class="lg:flex lg:col-span-5 lg:mt-0">
                Hero Image here
            </div>
        </div>
        <div class="px-4 pb-8 mx-auto max-w-screen-xl lg:pb-16">
            <p class="mb-6 text-center">Here's some logos, where you'd put your customers.</p>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:grid-cols-3 sm:gap-12 lg:grid-cols-6 dark:text-gray-300">
                <a href="#" class="flex items-center lg:justify-center">
                    Logo 1
                </a>
                <a href="#" class="flex items-center lg:justify-center">
                    Logo 2
                </a>
                <a href="#" class="flex items-center lg:justify-center">
                    Logo 3
                </a>

                <a href="#" class="flex items-center lg:justify-center">
                    Logo 4
                </a>
                <a href="#" class="flex items-center lg:justify-center">
                    Logo 5
                </a>
                <a href="#" class="flex items-center lg:justify-center">
                    Logo 6
                </a>
            </div>
        </div>
    </section>
    {{--  Benefits, Principles  --}}
    <section class="alternate-section">
        <div class="px-4 mx-auto space-y-12 max-w-screen-xl lg:py-12 lg:px-6 lg:space-y-20">
            <!-- Row -->
            <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="">
                    <h2>Work with tools you already use</h2>
                    <p class="mb-8 headline">Deliver great service experiences fast - with tools you're already familiar with.</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 my-7 space-y-5 border-t border-gray-200 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Self-initialising, self-provisioning, self-deploying.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Landing page starter - you are here.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">User authentication, profile & dashboard</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Ready-to-go admin panel</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">API-ready</span>
                        </li>
                    </ul>
                    <p>Even if you don't need another boilerplate, perhaps the list of <a class="link" href="https://github.com/nikspyratos/toybox#3rd-party-servicestools">recommended services</a> will still give you a path forward, or the <a class="link" href="https://github.com/nikspyratos/toybox/tree/main/bin">scripts</a> will give you something to work with.</p>
                </div>
                <img src="{{ asset('images/feature-1.png') }}">
            </div>
            <!-- Row -->
            <div class="gap-8 items-center lg:grid lg:grid-cols-2 xl:gap-16">
                <img src="{{ asset('images/feature-2.png') }}">
                <div class="text-gray-500 sm:text-lg dark:text-gray-300">
                    <h2>Principles</h2>
                    <p class="headline">This project is intended mostly for use as a solo Laravel developer who wants to rapidly develop and deploy indie SaaS projects. This is not intended for junior developers - having worked with the modern Laravel ecosystem is ideal to use this project.</p>
                    <ul role="list" class="pt-8 my-7 space-y-5 border-t border-gray-200 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Self-containment: With minimal extra commands, you should be able to clone this repo and get something running.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Tiny but mighty: Minimising the different languages used, using simpler & standardised alternatives to common tools.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Don't reinvent the wheel: Use the official & unofficial Laravel ecosystem where applicable. Use popular tools & packages where applicable instead of rewriting boilerplate logic from scratch.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Customisation: Don't like my tech choices? It's easy to sub them out.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Stability: Strict types. Automated linting.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Simplified Scaling: It's cheaper to scale with load balancing & bigger servers, and with minor manual input instead of full automation.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="highlight">Local is lekker: Reducing reliance on third-party services while not reducing capabilities.</span>
                        </li>
                    </ul>
                    <p>This is also not intended for "professional" commercial use, i.e. for freelance clients - it's intended for use by indie developer-entrepreneurs.</p>
                </div>
            </div>
        </div>
    </section>
    {{--  Trusted by  --}}
    <section class="primary-section">
        <div class="items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-4 lg:gap-16 lg:py-12 lg:px-6 xl:gap-24">
            <div class="col-span-2 mb-8">
                <p class="headline text-buttercup-500 dark:text-buttercup-500">Trusted by... some people</p>
                <h2>I'm using Toybox for this very site!</h2>
                <p class="headline">This page is part demo, part starter - this is the very same landing page you'll see in a default Toybox installation!</p>
                <hr class="my-4 border-t border-gray-200 dark:border-gray-700" />
                <a href="https://github.com/nikspyratos/toybox" class="inline-flex items-center text-base font-medium text-buttercup-500 dark:text-grey-300 dark:hover:text-buttercup-700 hover:text-buttercup-800">
                    Explore the README
                    <x-heroicon-o-arrow-right class="ml-1 w-5 h-5"></x-heroicon-o-arrow-right>
                </a>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <x-heroicon-s-server class="mb-2 w-10 h-10 md:w-12 md:h-12 text-buttercup-400 dark:text-grey-300"></x-heroicon-s-server>
                    <span class="mb-2 text-2xl emphasis">99.99% uptime</span>
                    <p class="subheading">...if you don't host on us-east-1 like everyone else.</p>
                </div>
                <div>
                    <x-heroicon-s-users class="mb-2 w-10 h-10 md:w-12 md:h-12 text-buttercup-400 dark:text-grey-300"></x-heroicon-s-users>
                    <span class="mb-2 text-2xl emphasis">1+ Users</span>
                    <p class="subheading">Does the creator using it count?</p>
                </div>
                <div>
                    <x-heroicon-s-globe-europe-africa class="mb-2 w-10 h-10 md:w-12 md:h-12 text-buttercup-400 dark:text-grey-300"></x-heroicon-s-globe-europe-africa>
                    <span class="mb-2 text-2xl emphasis">2+ countries</span>
                    <p class="subheading">There are at least two countries worldwide.</p>
                </div>
                <div>
                    <x-heroicon-s-shopping-cart class="mb-2 w-10 h-10 md:w-12 md:h-12 text-buttercup-400 dark:text-grey-300"></x-heroicon-s-shopping-cart>
                    <span class="mb-2 text-2xl emphasis">0</span>
                    <p class="subheading">Transactions per day. Go launch your MVP!</p>
                </div>
            </div>
        </div>
      </section>
    {{--  Quote  --}}
    <section class="alternate-section">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-6">
            <figure class="mx-auto max-w-screen-md">
                <x-heroicon-s-chat-bubble-bottom-center-text class="mx-auto mb-3 h-12 text-gray-400 dark:text-gray-600"></x-heroicon-s-chat-bubble-bottom-center-text>
                <blockquote>
                    "I built what I'd like to use as a springboard for launching SaaS. So yeah, at least <i>I</i> like it."
                </blockquote>
                <figcaption class="flex justify-center items-center mt-6 space-x-3">
                    <img class="w-6 h-6 rounded-full" src="https://avatars.githubusercontent.com/u/17888779?v=4" alt="profile picture">
                    <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                        <div class="pr-3 font-medium text-gray-900 dark:text-white">Nik Spyratos</div>
                        <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-300">A person</div>
                    </div>
                </figcaption>
            </figure>
        </div>
      </section>
    {{--  Pricing  --}}
    <section class="primary-section">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-12 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                <h2>Designed for someone</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-300">I could've written some lorem ipsum and called it a day.</p>
            </div>
            <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-3 lg:space-y-0 xl:gap-10">
                <div class="text-center card">
                    <span class="mb-4 text-2xl font-semibold">Starter</span>
                    <p class="headline">Best option for personal use & for your next project.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">$29</span>
                        <span class="text-gray-500 dark:text-gray-300">/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Another Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Cool Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Neat Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>More Feature!</span>
                        </li>
                    </ul>
                    <a href="#" class="cta">Get started</a>
                </div>
                <div class="text-center card">
                    <span class="mb-4 text-2xl font-semibold">Company</span>
                    <p class="headline">Relevant for multiple users, extended & premium support.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">$99</span>
                        <span class="text-gray-500 dark:text-gray-300" dark:text-gray-300>/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Another Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>More Feature!</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Neat Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Cool Feature</span>
                        </li>
                    </ul>
                    <a href="#" class="cta">Get started</a>
                </div>
                <div class="text-center card">
                    <span class="mb-4 text-2xl font-semibold">Enterprise</span>
                    <p class="headline">Best for large scale uses and extended redistribution rights.</p>
                    <div class="flex justify-center items-baseline my-8">
                        <span class="mr-2 text-5xl font-extrabold">$499</span>
                        <span class="text-gray-500 dark:text-gray-300">/month</span>
                    </div>
                    <ul role="list" class="mb-8 space-y-4 text-left">
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>More Feature!</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Neat Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Cool Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Another Feature</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <x-heroicon-o-check class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-o-check>
                            <span>Feature</span>
                        </li>
                    </ul>
                    <a href="#" class="cta">Get started</a>
                </div>
            </div>
        </div>
      </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="alternate-section">
        <div class="py-8 px-4 mx-auto w-3/4 max-w-screen-xl lg:py-12 lg:px-6">
            <h2 class="text-center">Frequently asked questions</h2>
            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="faq-button" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span class="text-xl">Is it really an FAQ if nobody has asked a question yet?</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="py-5 border-b border-gray-200 dark:border-gray-700" aria-labelledby="accordion-flush-heading-1">
                    <p>Magic 8-ball says: Try again later.</p>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="faq-button" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span class="text-xl">I don't like your tech choices.</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p>Swap it out, shouldn't be too hard. Also, that wasn't a question.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="faq-button" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span class="text-xl">I <i>do</i> like your tech choices.</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p>Thanks! Still not a question.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="faq-button" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span class="text-xl">Dark mode?</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p>Launch first. Though ironically Toybox comes with pre-configured dark mode out of the box.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <button @click="open = !open" type="button" class="faq-button" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span class="text-xl">What can't this do?</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p>Launch for you. The only way to see if your project works, is to launch!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  Get Started  --}}
    <section class="primary-section">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h2>Start your free trial today</h2>
                <p class="subheading">Just kidding. But here's another link to the docs.</p>
                <br>
                <a class="cta" href="https://github.com/nikspyratos/toybox">Free trial for 30 days</a>
            </div>
        </div>
    </section>
@endsection
