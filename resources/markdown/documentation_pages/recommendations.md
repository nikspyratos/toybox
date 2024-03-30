---
title: 'Recommended Additions'
group: '2. Post Setup DIY'
order_in_group: 1
visible_in_navigation: true
slug: 'recommendations'
last_updated_at: '2024-03-28 00:00:00'
---

**This is a list of options, not requirements. You can likely run your SaaS perfectly fine without many of these.**

This list includes both commercial options and open-source, including packages.

For more, search for `awesome-laravel` repos on Github, like [this one](https://github.com/chiraggude/awesome-laravel).

#### Analytics

[Fathom](https://usefathom.com) and [Plausible](https://plausible.io) are great options. If I had to choose: Fathom has more accessible pricing, and is made with Laravel!
**Both are also GDPR-compliant and won't require extra cookie consent banner settings.**

#### Backups

- SQLite: [LiteStream](https://litestream.io/)
- MySQL, volumes, servers, and more: [SnapShooter](https://snapshooter.com/)

#### Cache

[Laravel Response Cache](https://github.com/spatie/laravel-responsecache) is a good starting point for caching frequently accessed & frequently unchanged pages. Beyond that, [Varnish](https://varnish-cache.org/) is excellent and as usual there's a [Spatie package for it](https://github.com/spatie/laravel-varnish).

#### CMS

[Statamic](https://statamic.com/) has excellent integration directly into Laravel apps. The core CMS functionality (without any frontend or control panel features) is FOSS, otherwise it's free for solo usage. For advanced features in a business use case with e.g. a marketing/writing team, it's recommended to pay for Pro.

Alternatively, there are plenty of other blog/content site providers out there, e.g. [Wordpress](https://wordpress.org/). The CMS space is too huge to make any more specific recommendations.

If you want something free & simple for creating content for your app, consider using [Jigsaw](https://jigsaw.tighten.com/) - a static site generator that uses Markdown & Blade. It's free and easy to use. If hosting it with Github Pages, have a look [here](https://github.com/nikspyratos/thecapegreek-site/blob/master/bin/deploy) on how to remove build artifacts from your main branch.

#### Code Generation

[Blueprint](https://blueprint.laravelshift.com/) by the Laravel Shift team is a great addition.

#### Containerisation

Beyond Docker, check out [Colima](https://github.com/abiosoft/colima) (macOS + Linux) and [Orbstack](https://orbstack.dev/) (macOS) as alternative runtimes that will save your system resources.

#### Data Analysis

I highly recommend checking out [Metabase](https://metabase.com) for this. While it's fairly simple to make graphs/dashboards and track database metrics with Laravel/Filament, Metabase is more specialised for the task and separates concerns nicely. It can also be self-hosted!.

#### Debugging

If you're a `dd` fan, [Ray](https://myray.app/) is a great addition.

#### Deployment - CI/CD

Forge & Ploi offer deployment, but [Envoyer](https://envoyer.io/) is a great addition.

As a deployment management layer over Docker, see [Kamal](https://kamal-deploy.org/)

#### Desktop

While still in alpha, [NativePHP](https://nativephp.com/) will hopefully be a very promising option if you'd like to add desktop apps to your toolkit.

For a ready-to-go desktop-based database management/admin panel for your application, [Invoker](https://invoker.dev/) is worth a look.

#### Documentation

For documentation within your app, see [LaRecipe](https://github.com/saleem-hadad/larecipe).

#### Event tracking/system notifications

I recommend [LogSnag](https://logsnag.com/).

#### File Storage

Consider using any [S3-compatible storage service](https://gprivate.com/663g4). The ordinary local disk may be enough for your use case, but it may be prudent to separate this from your app. That way if you don't need a big server but need lots of storage, you don't have to scale your server costs unnecessarily (storage is much cheaper!).

#### Infrastructure

[Laravel Forge](https://forge.laravel.com/) and [Ploi](https://ploi.io/) are good options (I prefer Ploi) and support many cloud providers. I lean towards AWS, but only because they have a Cape Town region.

Open source alternatives include [Deployer](https://deployer.org/), [Eddy](https://eddy.management/), and [VitoDeploy](https://vitodeploy.com/)

Otherwise, generalised provisioning tools like [Ansible](https://www.ansible.com/), [Chef](https://www.chef.io/) or [Puppet](https://www.puppet.com/) should work.

#### Logging

[Laravel Pail](https://github.com/laravel/pail) gives `tail`-like log tracking in your terminal, for any log driver. For application monitoring, see [Uptime & Monitoring](#uptime--monitoring)

#### Mail Provider

[Laravel recommends](https://laravel.com/docs/11.x/mail#introduction) [Mailgun](https://www.mailgun.com/), [Postmark](https://postmarkapp.com/) and [SES](https://aws.amazon.com/ses/). Another option that integrates well, and works for newsletters/marketing campaigns too, is [Mailcoach](https://mailcoach.app/).

#### Media Library

Spatie's [Media Library Pro](https://medialibrary.pro/) is excellent. See [below](#other-tools-not-included) for free version details.

#### Mobile

Yeah, nah. Maybe some mad scientist has gotten this one right, but I'd recommend sticking to "normal" mobile tech.

#### Payment Provider

There are a few options here, depending on your region. For many countries, [Stripe](https://stripe.com) with [Laravel Cashier](https://laravel.com/docs/11.x/billing#introduction) will be fine. Otherwise, have a look at [Paddle](https://www.paddle.com/) (also has a [Cashier plugin](https://laravel.com/docs/11.x/cashier-paddle)) or [Lemon Squeezy](https://lemonsqueezy.com) (Laravel package [here](https://github.com/lmsqueezy/laravel)) for a Merchant of Record.

If you're in Africa, [Paystack](https://paystack.com/) is a solid option (affiliate signup: [here](https://nik-software.paystack.com/#/signup)).

For more options, and whether or not you need an MoR, and taxation info see [here](https://writing.nikspyratos.com/Perceptions/Ambition+-+Careers+-+Entrepreneurship/Resources/Payment+Gateways).

#### Security

Have a look at [Securing Laravel](https://securinglaravel.com/about), and packages like [Treblle security headers](https://github.com/Treblle/security-headers) for reference.

#### Search

[Algolia](https://www.algolia.com/) and [Meilisearch](https://www.meilisearch.com) are the ones supported by [Laravel Scout](https://laravel.com/docs/11.x/scout). Meilisearch can be self-hosted, but can be a handful to manage and would still cost a fair bit in storage/RAM requirements, so you might not save much in time & headaches over using cloud.

#### Serverless

Either [Laravel Vapor](https://vapor.laravel.com/) or roll-your-own setup for free with [Bref](https://bref.sh/). **Note**: this project is untested with serverless. If you get it working with any modifications, make a PR for adding your setup or instructions!

#### Uptime & Monitoring

I recommend [OhDear](https://ohdear.app/?via=nikspyratos). For error monitoring, [Flare](https://flareapp.io) is also good.

[Laravel Pulse](https://laravel.com/docs/11.x/pulse) is the latest offering in the OSS Laravel suite. Note however it won't work with SQLite databases.

#### Upgrading Laravel & PHP

For upgrading PHP, see [Rector](https://getrector.com/).

For upgrading Laravel, see [Laravel Shift](https://laravelshift.com/).

#### User Interface

- Filament is intended to be used for UI where possible. Consult the documentation for details.
- [Tailwind UI](https://tailwindui.com/) is a great premium resource, and includes many site templates.
- [Alpine Components](https://alpinejs.dev/components) is the premier Alpine component kit.
- [WireUI](https://livewire-wireui.com/) is a Livewire-based component kit.
- [Pines](https://devdojo.com/pines) is an Alpine-based component kit.
- [Blade UI Kit](https://blade-ui-kit.com) is another component kit for the TALL stack.
- [Mary UI](https://www.mary-ui.com) is a Tailwind component kit.

For more recommendations, see [here](https://writing.nikspyratos.com/Perceptions/Learning/Resources/Tech/Design).

#### Websockets

[Laravel Reverb](https://reverb.laravel.com/) is one of the newest ecosystem additions for this exact purpose.

[Soketi](https://soketi.app/) and [Laravel Websockets](https://beyondco.de/docs/laravel-websockets/getting-started/introduction) are a good alternatives.

[Pusher](https://pusher.com) and [Ably](https://ably.com) are great paid options.

All options are to be used alongside [Laravel Echo](https://laravel.com/docs/11.x/broadcasting#client-side-installation). If you want to DIY, see [below](#other-tools-not-included).
