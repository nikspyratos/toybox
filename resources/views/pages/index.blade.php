<?php

use function Laravel\Folio\name;

name('landing');

?>

@extends('layouts.marketing')

@section('content')
    {{--  Title, hero  --}}
    <section class="bg-white dark:bg-gray-900 bg-dots-darker dark:bg-dots-lighter">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-6 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">A TALL starter kit for <br>Laravel solopreneurs.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-4 md:text-lg lg:text-xl dark:text-gray-300">The Toybox has a bit of everything - a grand tour of the Laravel PHP world, so to speak. Let's have some fun!</p>
                <p class="mb-2 font-light text-gray-500">This page was built using the <a class="underline text-matisse-500" href="https://demo.themesberg.com/landwind/">Landwind theme</a>.</p>
                <p class="font-semibold mb-6 lg:mb-8 text-gray-500 dark:text-gray-300">This landing page is both a template for your SaaS and an explainer of the Toybox project.</p>
                <div class="space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                    <a href="https://github.com/nikspyratos/toybox" class="inline-flex items-center justify-center w-full px-5 py-3 text-sm font-medium text-center text-gray-900 border border-gray-200 rounded-lg sm:w-auto hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                        <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
                        Github
                    </a>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                {{-- This is where you'd put a hero image --}}
            </div>
        </div>
    </section>
    {{--  Logos  --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">
            <p class="text-center mb-6 text-gray-500 dark:text-gray-300">Here's some logos, where you'd put your customers.</p>
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-300">
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
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto space-y-12 lg:space-y-20 lg:py-24 lg:px-6">
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <div class="text-gray-500 sm:text-lg dark:text-gray-300">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Work with tools you already use</h2>
                    <p class="mb-8 font-light lg:text-xl">Deliver great service experiences fast - with tools you're already familiar with.</p>
                    <!-- List -->
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Self-initialising, self-provisioning, self-deploying.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Landing page starter - you are here.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">User authentication, profile & dashboard</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Ready-to-go admin panel</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">API-ready</span>
                        </li>
                    </ul>
                    <p class="mb-8 font-light lg:text-xl">Even if you don't need another boilerplate, perhaps the list of <a class="underline text-matisse-500" href="https://github.com/nikspyratos/toybox#3rd-party-servicestools">recommended services</a> will still give you a path forward, or the <a class="underline text-matisse-500" href="https://github.com/nikspyratos/toybox/tree/main/bin">scripts</a> will give you something to work with.</p>
                </div>
                <img src="{{ asset('images/feature-1.png') }}">
            </div>
            <!-- Row -->
            <div class="items-center gap-8 lg:grid lg:grid-cols-2 xl:gap-16">
                <img src="{{ asset('images/feature-2.png') }}">
                <div class="text-gray-500 sm:text-lg dark:text-gray-300">
                    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Principles</h2>
                    <p class="mb-8 font-light lg:text-xl">This project is intended mostly for use as a solo Laravel developer who wants to rapidly develop and deploy indie SaaS projects. This is not intended for junior developers - having worked with the modern Laravel ecosystem is ideal to use this project.</p>
                    <ul role="list" class="pt-8 space-y-5 border-t border-gray-200 my-7 dark:border-gray-700">
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Self-containment: With minimal extra commands, you should be able to clone this repo and get something running.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Tiny but mighty: Minimising the different languages used, using simpler & standardised alternatives to common tools.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Don't reinvent the wheel: Use the official & unofficial Laravel ecosystem where applicable. Use popular tools & packages where applicable instead of rewriting boilerplate logic from scratch.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Customisation: Don't like my tech choices? It's easy to sub them out.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Stability: Strict types. Automated linting.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Simplified Scaling: It's cheaper to scale with load balancing & bigger servers, and with minor manual input instead of full automation.</span>
                        </li>
                        <li class="flex space-x-3">
                            <x-heroicon-s-check-circle class="flex-shrink-0 w-5 h-5 text-emerald-500 dark:text-emerald-400"></x-heroicon-s-check-circle>
                            <span class="text-base font-medium leading-tight text-gray-900 dark:text-white">Local is lekker: Reducing reliance on third-party services while not reducing capabilities.</span>
                        </li>
                    </ul>
                    <p class="font-light lg:text-xl">This is also not intended for "professional" commercial use, i.e. for freelance clients - it's intended for use by indie developer-entrepreneurs.</p>
                </div>
            </div>
        </div>
      </section>
    {{--  Trusted by  --}}
    <section class="bg-white dark:bg-gray-900 bg-dots-darker dark:bg-dots-lighter">
        <div class="items-center max-w-screen-xl px-4 py-8 mx-auto lg:grid lg:grid-cols-4 lg:gap-16 xl:gap-24 lg:py-24 lg:px-6">
            <div class="col-span-2 mb-8">
                <p class="text-lg font-medium text-buttercup-500 dark:text-buttercup-500">Trusted by... some people</p>
                <h2 class="mt-3 mb-4 text-3xl font-extrabold tracking-tight text-gray-900 md:text-3xl dark:text-white">I'm using Toybox for this very site!</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-300">This page is part demo, part starter - this is the very same landing page you'll see in a default Toybox installation!</p>
                <div class="pt-6 mt-6 space-y-4 border-t border-gray-200 dark:border-gray-700">
                    <div>
                      <a href="https://github.com/nikspyratos/toybox" class="inline-flex items-center text-base font-medium text-buttercup-500 hover:text-buttercup-800 dark:text-buttercup-500 dark:hover:text-buttercup-700">
                          Explore the README
                          <x-heroicon-o-arrow-right class="w-5 h-5 ml-1"></x-heroicon-o-arrow-right>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-span-2 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <x-heroicon-s-server class="w-10 h-10 mb-2 text-buttercup-400 md:w-12 md:h-12 dark:text-buttercup-500"></x-heroicon-s-server>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">99.99% uptime</h3>
                    <p class="font-light text-gray-500 dark:text-gray-300">...if you don't host on us-east-1 like everyone else.</p>
                </div>
                <div>
                    <x-heroicon-s-users class="w-10 h-10 mb-2 text-buttercup-400 md:w-12 md:h-12 dark:text-buttercup-500"></x-heroicon-s-users>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">1+ Users</h3>
                    <p class="font-light text-gray-500 dark:text-gray-300">Does the creator using it count?</p>
                </div>
                <div>
                    <x-heroicon-s-globe-europe-africa class="w-10 h-10 mb-2 text-buttercup-400 md:w-12 md:h-12 dark:text-buttercup-500"></x-heroicon-s-globe-europe-africa>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">2+ countries</h3>
                    <p class="font-light text-gray-500 dark:text-gray-300">There are at least two countries worldwide.</p>
                </div>
                <div>
                    <x-heroicon-s-shopping-cart class="w-10 h-10 mb-2 text-buttercup-400 md:w-12 md:h-12 dark:text-buttercup-500"></x-heroicon-s-shopping-cart>
                    <h3 class="mb-2 text-2xl font-bold dark:text-white">0</h3>
                    <p class="font-light text-gray-500 dark:text-gray-300">Transactions per day. Go launch your MVP!</p>
                </div>
            </div>
        </div>
      </section>
    {{--  Quote  --}}
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
            <figure class="max-w-screen-md mx-auto">
                <x-heroicon-s-chat-bubble-bottom-center-text class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600"></x-heroicon-s-chat-bubble-bottom-center-text>
                <blockquote>
                    <p class="text-xl font-medium text-gray-900 md:text-2xl dark:text-white">"I built what I'd like to use as a springboard for launching SaaS. So yeah, at least <i>I</i> like it."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3">
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
    <section class="bg-white dark:bg-gray-900 bg-dots-darker dark:bg-dots-lighter">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-24 lg:px-6">
            <div class="max-w-screen-md mx-auto mb-8 text-center lg:mb-12">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Designed for someone</h2>
                <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-300">I could've written some lorem ipsum and called it a day.</p>
            </div>
            <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-300">Best option for personal use & for your next project.</p>
                    <div class="flex items-baseline justify-center my-8">
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
                    <a href="#" class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-emerald-900">Get started</a>
                </div>
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Company</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-300">Relevant for multiple users, extended & premium support.</p>
                    <div class="flex items-baseline justify-center my-8">
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
                    <a href="#" class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-emerald-900">Get started</a>
                </div>
                <div class="flex flex-col max-w-lg p-6 mx-auto text-center text-gray-900 bg-white border border-gray-100 rounded-lg shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                    <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
                    <p class="font-light text-gray-500 sm:text-lg dark:text-gray-300">Best for large scale uses and extended redistribution rights.</p>
                    <div class="flex items-baseline justify-center my-8">
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
                    <a href="#" class="text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-emerald-900">Get started</a>
                </div>
            </div>
        </div>
      </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-24 lg:px-6 ">
            <h2 class="mb-6 text-3xl font-extrabold tracking-tight text-center text-gray-900 lg:mb-8 lg:text-3xl dark:text-white">Frequently asked questions</h2>
            <div class="bg-white dark:bg-gray-900" x-data="{ open: false }">
                <button @click="open = !open" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                    <span>Is it really an FAQ if nobody has asked a question yet?</span>
                    <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                    <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                </button>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-300">Magic 8-ball says: Try again later.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <h3 >
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                        <span>I don't like your tech choices.</span>
                        <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                        <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                    </button>
                </h3>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-300">Swap it out, shouldn't be too hard. Also, that wasn't a question.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <h3 >
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                        <span>I <i>do</i> like your tech choices.</span>
                        <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                        <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                    </button>
                </h3>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-300">Thanks! Still not a question.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <h3 >
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                        <span>Dark mode?</span>
                        <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                        <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                    </button>
                </h3>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-300">Launch first.</p>
                    </div>
                </div>
            </div>

            <div x-data="{ open: false }">
                <h3 >
                    <button @click="open = !open" type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-900 bg-white border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:text-white" :aria-expanded="open" aria-controls="accordion-flush-body-1">
                        <span>What can't this do?</span>
                        <x-heroicon-o-chevron-down x-show="!open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-down>
                        <x-heroicon-o-chevron-up x-show="open" class="w-6 h-6 shrink-0"></x-heroicon-o-chevron-up>
                    </button>
                </h3>
                <div x-show="open" id="accordion-flush-body-1" class="" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-300">Launch for you. The only way to see if your project works, is to launch!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  Get Started  --}}
    <section class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h2 class="mb-4 text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">Start your free trial today</h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-300 md:text-lg">Just kidding. But here's another link to the docs.</p>
                <a href="https://github.com/nikspyratos/toybox" class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:ring-emerald-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-emerald-600 dark:hover:bg-emerald-700 focus:outline-none dark:focus:ring-emerald-800">Free trial for 30 days</a>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 bg-dots-darker dark:bg-dots-lighter p-12">
        <h2 class="mb-8 text-center text-3xl font-extrabold leading-tight tracking-tight text-gray-900 dark:text-white">Documentation</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                <div>
                    <img class="h-16 w-16" src="{{ asset('images/laravel-logo.svg') }}">

                    <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Laravel Documentation</h2>

                    <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                        Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                    </p>
                </div>

                <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
            </a>

            <a href="https://filamentphp.com/" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                <div>
                    <img class="h-16 w-auto" src="{{ asset('images/filament-logo.png') }}">

                    <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Filament</h2>

                    <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                         A collection of beautiful full-stack components, as well as an excellent admin panel starter. The perfect starting point for your next app.
                    </p>
                </div>

                <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
            </a>

            <a href="https://jetstream.laravel.com" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                <div>
                    <img class="h-16 w-16" src="{{ asset('images/jetstream-logo.png') }}">

                    <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Jetstream</h2>

                    <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                         Laravel Jetstream is a beautifully designed application starter kit for Laravel and provides the perfect starting point for your next Laravel application. Jetstream provides the implementation for your application's login, registration, email verification, two-factor authentication, session management, API via Laravel Sanctum, and optional team management features.
                    </p>
                </div>

                <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
            </a>

            <a href="https://github.com/nikspyratos/toybox" class="scale-100 p-6 bg-white dark:bg-voodoo-800/50 dark:bg-gradient-to-bl from-matisse-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-matisse-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-emerald-500">
                <div>
                    <img class="h-16 w-16" src="{{ asset('images/toybox-logo.png') }}">

                    <h2 class="mt-6 text-xl font-semibold text-matisse-900 dark:text-emerald-400">Next Steps</h2>

                    <p class="mt-4 text-matisse-500 dark:text-matisse-400 text-sm leading-relaxed">
                        Consult the Toybox README for information, documentation and resources on launching your SaaS.

                        The very first thing you might want to do is set up your project's landing page: rename the landing.blade.php file to index.blade.php, and remove the route redirect from / to /welcome.

                        Then, you likely want to replace the Toybox logo, favicon and cover image and references to the authors with your own.
                    </p>
                </div>

                <x-heroicon-o-arrow-right class="self-center shrink-0 stroke-emerald-500 w-6 h-6 mx-6"></x-heroicon-o-arrow-right>
            </a>
        </div>
    </section>
@endsection
