# Toybox - A Laravel micro-SaaS starter kit

![Toybox cover image](public/images/toybox-cover.png)

---

<!-- TOC -->
* [Toybox - A Laravel micro-SaaS starter kit](#toybox---a-laravel-micro-saas-starter-kit)
  * [Support this project](#support-this-project)
  * [Features](#features)
  * [Components](#components)
  * [Installation/Usage](#installationusage)
    * [Requirements](#requirements)
    * [Local Development](#local-development)
      * [Environment Setup](#environment-setup)
        * [Cross-platform](#cross-platform)
        * [macOS](#macos)
        * [Linux](#linux)
        * [Windows](#windows)
      * [Installing Toybox](#installing-toybox)
      * [Laravel Octane](#laravel-octane)
    * [Code Quality & Analysis](#code-quality--analysis)
    * [Next Steps - DIY](#next-steps---diy)
      * [Post-Setup](#post-setup)
      * [Ongoing Development](#ongoing-development)
    * [Production](#production)
      * [Provisioning](#provisioning)
      * [Manual steps](#manual-steps)
      * [Deployment](#deployment)
      * [Troubleshooting](#troubleshooting)
        * [Caddy having issues obtaining SSL](#caddy-having-issues-obtaining-ssl)
  * [3rd-party Services/Tools](#3rd-party-servicestools)
      * [Analytics](#analytics)
      * [Backups](#backups)
      * [Cache](#cache)
      * [CMS](#cms)
      * [Code Generation](#code-generation)
      * [Containerisation](#containerisation)
      * [Data Analysis](#data-analysis)
      * [Debugging](#debugging)
      * [Deployment - CI/CD](#deployment---cicd)
      * [Desktop](#desktop)
      * [Documentation](#documentation)
      * [Event tracking/system notifications](#event-trackingsystem-notifications)
      * [File Storage](#file-storage)
      * [Infrastructure](#infrastructure)
      * [Logging](#logging)
      * [Mail Provider](#mail-provider)
      * [Media Library](#media-library)
      * [Mobile](#mobile)
      * [Payment Provider](#payment-provider)
      * [Security](#security)
      * [Search](#search)
      * [Serverless](#serverless)
      * [Uptime & Monitoring](#uptime--monitoring)
      * [Upgrading Laravel & PHP](#upgrading-laravel--php)
      * [User Interface](#user-interface)
      * [Websockets](#websockets)
    * [Other Tools not included](#other-tools-not-included)
      * [Filament Plugins & Tricks](#filament-plugins--tricks)
    * [Design](#design)
  * [How to scale](#how-to-scale)
  * [Other recommendations for business operations, launching, etc.](#other-recommendations-for-business-operations-launching-etc)
    * [Helpdesk/Support](#helpdesksupport)
    * [Live Chat](#live-chat)
    * [Knowledgebase](#knowledgebase)
    * [Accounting](#accounting)
    * [Terms & Conditions](#terms--conditions)
  * [Roadmap](#roadmap)
  * [Contributing](#contributing)
<!-- TOC -->

My [TALL stack](https://tallstack.dev/) boilerplate for Laravel SaaS builders.

The Toybox has a bit of everything - a grand tour of the Laravel PHP world, so to speak. Let's have some fun!

Even if you don't need another boilerplate, perhaps the list of [recommended services](#next-steps---diy) will still give you a path forward, or the [scripts](bin) will give you something to work with.

> This project is intended mostly for use as a solo Laravel developer who wants to rapidly develop and deploy indie SaaS projects. This is not intended for junior developers - having worked with the modern Laravel ecosystem is ideal to use this project. This is also not intended for "professional" commercial use, i.e. for freelance clients - it's intended for use by indie developer-entrepreneurs.

Principles

- **Free, both ways**: There's no need to pay anything for this - I build it because I use it! You can also do whatever you'd like.
- **Self-containment**: With minimal extra commands, you should be able to clone this repo and get something running.
- **Tiny but mighty**: Minimising the different technologies used, using simpler & standardised alternatives to common tools.
- **Don't reinvent the wheel**: Use as much of the official & unofficial Laravel ecosystem where applicable. Use popular (i.e. sustainable, gets regular updates) tools & packages where applicable instead of rewriting boilerplate logic from scratch. We're in Laravel, not JS!
- **Stability**: Strict types. Automated linting & code analysis
- **Simplified Scaling**: It's cheaper to scale with load balancing & bigger servers, and with minor manual input instead of full automation.
- **Local is lekker**: Reducing reliance on third-party services while not reducing capabilities.

## Support this project

- [Buy me a coffee](https://tip-jar.co.za/@thecapegreek)
- Sign up to services like OhDear and Paystack with my affiliate links in the [Next Steps](#next-steps---diy) section.
- I also [consult in the Laravel & payments space](https://nik.software)
- Post what you've built using the Toybox and tag me!

## Features

- **Self-initialising, self-provisioning, self-deploying** project using bash scripts.
- **Admin panel** with a CMS & utilities, a great starting point for managing your application.
- **Content/Marketing pages** set up with a [Landwind-based](https://github.com/themesberg/landwind) landing page, with sensible SEO defaults, social meta tags, sitemap generation, and Article Schema.org data.
- **Terms of Service and Privacy Policy** derived from [Basecamp](https://github.com/basecamp/policies)
- **Security enhancements** included from [Securing Laravel](https://securinglaravel.com/)
- **Laravel ecosystem included** - auth scaffolding, websockets, performance monitoring, webserver runtime, API authentication, feature flags, social login

All of this is done while keeping package dependencies minimal outside of trusted third parties like Filament or Spatie.

## Components

- **OS**: [Ubuntu 22.04 LTS](https://ubuntu.com/)
- **Webserver**: [FrankenPHP](https://frankenphp.dev/)'s [Caddy](https://caddyserver.com/), configured to run through [Laravel Octane](https://laravel.com/docs/11.x/octane) 
- **Database**: [SQLite](https://sqlite.org)
- **Websockets**: [Laravel Reverb](https://reverb.laravel.com)
- **Application**: [Laravel](https://laravel.com) (duh)
    - **Admin Panel**: [Filament](https://filamentphp.com/)
    - **UI**: [Livewire](https://livewire.laravel.com) (including [Alpine.js](https://alpinejs.dev/)). [Laravel Folio](https://laravel.com/docs/11.x/folio) for content pages. [Laravel Jetstream](https://jetstream.laravel.com) for authentication, session management, 2FA and much more ([Socialstream](https://docs.socialstream.dev/) included to augment Jetstream with social logins). Some features may also use Filamnent components.
    - **API**: [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum)
    - **Testing**: [PestPHP](https://pestphp.com/)
    - **Observability/Metrics**: [Laravel Pulse](https://laravel.com/docs/11.x/pulse) and [Laravel Telescope](https://laravel.com/docs/11.x/telescope)
    - **Linting, Code Quality, Static Analysis**: [Duster](https://github.com/tighten/duster) for linting, with Pint configuration compatible with PHP Insights. [Rustywind](https://github.com/avencera/rustywind) for Tailwind classes. for Tailwind classes. [Larastan](https://github.com/nunomaduro/larastan), [PHP Insights](https://phpinsights.com/) with custom configuration focused on compatibility.
- **CI/CD**: Good old Bash scripts.
- **Cache, queues, etc.**: For some "easy" scaling and portability with SQLite and database drivers, ActivityLog, Cache, Queue, Pulse & Telescope have their own separate SQLite database connections. This should theoretically avoid any potential write issues if one of the databases needs more frequent writes than others, and makes the app a little more portable (e.g. you can retain your cache as easily as copying a file when moving server).

## Installation/Usage

### Requirements

You will need PHP 8.3 alongside some extensions (at least the [Laravel defaults](https://laravel.com/docs/11.x/deployment#server-requirements) and `intl`)

A good starting point of extensions that should cover most apps is:

```
bcmath
ctype
curl
dba
dom
fileinfo
filter
gd
gettext
gmp
iconv
intl
libxml
mbstring
mysqli
openssl
pcntl
PDO
Phar
posix
session
soap
sockets
tokenizer
zlib
```

### Local Development

#### Environment Setup

##### Cross-platform

- [Mailpit](https://github.com/axllent/mailpit) for emails
- [Rustywind](https://github.com/avencera/rustywind) for Tailwind class order linting.
- [Pickle](https://github.com/FriendsOfPHP/pickle) for PHP extensions via PECL

##### macOS

- ([Valet](https://laravel.com/docs/11.x/valet) & [PHPMon](https://phpmon.app/)) OR [Laravel Herd](https://herd.laravel.com/)
- [DBngin](https://dbngin.com/) for Databases & Redis
- [Takeout](https://github.com/tighten/takeout) for many more extra services (e.g. ElasticSearch)

Note: Favicons with Valet-hosted sites are [a bit broken](https://github.com/laravel/valet/issues/375). To fix it, edit your `/opt/homebrew/etc/nginx/valet/valet.conf` using one of [simensen's workarounds](https://github.com/laravel/valet/issues/375#issuecomment-1462164188), or just remove the favicon & robot.text handlers entirely.

##### Linux

- [Valet Linux](https://cpriego.github.io/valet-linux/) AND install PHP on your system.
- Install your DB of choice locally, or [Takeout](https://github.com/tighten/takeout) supports both Redis and MySQL/MariaDB, so it can act as a DBNgin alternative for Linux and more.

##### Windows

- Herd is an all-in-one development solution, including database, redis, and other services (if you pay for Pro).
- WSL2 is still required, as all the scripts in `bin` are built for Linux/Mac. 

#### Installing Toybox

1. Clone/fork this repository into a new repository.
2. Run `./bin/init_dev.sh` (remember to do so from WSL2 on Windows). It will:
   - Set up pre-commit linting, 
   - Replace template names, 
   - Conduct Laravel boilerplate setup (package installs, key generate, migrate, etc.). 
   - The script will ask you for some basic environment variables (app name, domain, database name) and edit your `.env` accordingly.
   - It will also ask if you would like to install Jetstream Teams, and has a custom installer (`bin/init_teams.sh`) it runs if yes.

Note: By default `init_dev.sh` assumes your production server username is `ubuntu`. If it is not, you need to replace `ubuntu` in your Caddyfile.prod, `templates/octane.conf` and `templates/reverb.conf` with the correct username, once `init_dev.sh` is finished.

Once the script completes, you can commit the changes to the edited files.

For details, look in [bin/init_dev.sh](bin/init_dev.sh).

The sections below outline the recommended way to work with Toybox on your local system. Please note the included Caddyfile.prod is intended for production use and Caddyfile.dev for local testing..

#### Laravel Octane

The default Octane config will start with one worker per core, and restart workers every 500 requests. To account for this project's dependencies and any potential leaks, Toybox's config is a bit more conservative and will restart workers every 250 requests. You can change this in `templates/octane.conf`.

To use Octane with Valet/Herd, you'll need to [proxy your site to your octane port](https://laravel.com/docs/11.x/valet#proxying-services).

### Code Quality & Analysis

Five tools have been included for this:

- Duster (linting),
- Larastan (static analysis),
- PHP Insights (analysis & architecture),
- Rustywind (Tailwind linting).
- Roave security advisories

There are also some default Pest tests for architecture rules as well.
You may see some overlap or conflicts in recommendations by these tools - if so, please make an issue so I can adjust the config to avoid the conflict.

By default, you will already have Duster & Rustywind running as a pre-commit hook.
Larastan and PHP Insights can be run individually, or as a group with the command `composer run analysis`.
Security Advisories runs on composer operations, to prevent installation of insecure packages.
Note that PHP Insights is configured to automatically fix issues it is able to fix.
You may also want to look inside `config/insights.php` and add/change any sniffs per your preference - there are some rules that may be too strict for some users.

The commands for all the tools are:

```shell
./vendor/bin/duster fix
./vendor/bin/duster lint #Linting may catch issues that fix can't resolve
./vendor/bin/phpstan analyse
php artisan insights
```

For Duster, if there are any unfixable issues raised in `duster fix`, you can get more info on them by running `duster lint`. Also note that you can add the `--dirty` flag to only run it for files that have changed.

Some analysis steps in these tools may fail on a default Toybox installation. Where reasonable I've tried to mitigate this, but some will be left up to you as the developer. Some fixes require opinionated configurations that I don't feel Toybox should have a default on.

### Next Steps - DIY

These are the next steps you will have to implement yourself for your project as your needs change & scale.

#### Post-Setup

- **Websockets**: If you won't be using any realtime features, remove the `import './echo';` line from `resources/js/bootstrap.js`.
- **Create an admin user**: Run the `php artisan app:create-admin-user` command to create an admin user. This will allow you to access Filament at `/admin`, and Telescope at `/telescope`.
- **Replaces assets, texts, attributions**: You will also want to take some time to remove the Toybox logo, links to the repository and replace any such mentions and authors (e.g. in the footer) with your own. This also applies to any privacy policy and terms of service pages included, as these may have stub values in place.
- **Security**: Update the `public/.well-known/security.txt` with a contact email or URL (e.g. Twitter).
- **Landing page**:
    - Make sure to change the copy on the provided pages.
    - Assuming these pages are static, make sure they are heavily cached.
    - For some projects you probably won't even need the landing page provided, so go ahead and yank it out!
- **License**: If your project is closed-source, you might want to remove the `LICENSE.md` file included in the repo.
- **Social Logins**: For each provider you plan on adding, you'll need to add the relevant credentials and configuration for both [Socialite](https://laravel.com/docs/11.x/socialite#configuration) and [Socialstream](https://docs.socialstream.dev/getting-started/configuration#providers). If you'd like to add additional social login providers, please check out the [Socialite Providers](https://socialiteproviders.com/) site.
- **Feature flags**: By default the `array` driver is used for Pennant feature flags. If you'd like to use the `database` driver instead, make sure to [publish the migrations](https://laravel.com/docs/11.x/pennant#installation) and change the `PENNANT_STORE` environment variable.
  - **Coming Soon**: To redirect public routes to a "Coming Soon" page before launch, change the `COMING_SOON_ENABLED` environment variable and re-cache your config. This feature is implemented using Pennant for an example implementation. You can delete the middleware, feature definition, and environment variable post-launch. 

#### Ongoing Development

- **Live validation**: Remember to use [Precognition](https://laravel.com/docs/11.x/precognition#using-alpine) to bring live validation to your forms. 
- **Laravel Activity log**: Consult the [documentation](https://spatie.be/docs/laravel-activitylog/v4/introduction) to begin logging user activity for analytics.

### Production

#### Provisioning

This assumes you're starting from scratch on an unmanaged Ubuntu server with an `ubuntu` user that has sudo access.

**Note: The `provision_prod.sh` and `deploy.sh` scripts are intended for early use in your SaaS. Once you need to go beyond vertical scaling, I'd highly recommend getting started with the recommended [infrastructure](#infrastructure) and [deployment](#deployment---cicd) tools.**

Your first step is to download your project repository from your VCS. Then, run `./bin/provision_prod.sh` from the project directory. It will:

- Ask you for some basic environment variables (database credentials) and edit your `.env` accordingly. App name, domain & database name will be used from the values in your `.env` (i.e. from when you ran `init_dev.sh`).
- Install PHP (with service config and extensions), Caddy, and Supervisor
- Install the Octane, queue config for Supervisor
- Setup your app (composer & npm install, key generate, migrate, install crontab, etc.). All you need to do is modify your `.env` as needed.

Once this is done, update your local `.env`'s `DEPLOYMENT_PATH` and Caddyfile's `APP_PATH` as prompted by the output. This is to enable the `deploy.sh` script to work and to keep your Caddyfile in line with the production version.

If you're using websockets, you will also want to manually copy the `templates/reverb.conf` config over for Supervisor to run reverb for you.

For more details, look in [bin/provision_prod.sh](bin/provision_prod.sh).

#### Manual steps

Naturally, you'll also need to configure your own DNS records to point your domain to your webserver.

When your application goes live, make sure to update the `last updated` dates of the terms & privacy policy pages to your launch date.


#### Deployment

In your local project, edit the following variables to your local `.env`, using the appropriate values:

```dotenv
DEPLOYMENT_IP=
DEPLOYMENT_USER=
DEPLOYMENT_SSH_KEY=
```

`DEPLOYMENT_PATH` should already be set up from when you ran `init_dev.sh`. If not, please edit it to the appropriate value.

To deploy the latest application changes, run `./bin/deploy.sh`. It will:

- SSH into your server using the variables above
- Run `git pull`, `composer install`, `npm install`, `npm run build`, and `php artisan migrate`.

If you're in a rush/need to throw hotfixes up, `bin/quick_deploy.sh` will only pull new code & reset the optimisation caches.

#### Troubleshooting

This is where your skills come in.

##### Caddy having issues obtaining SSL

Make sure your firewall rules allow incoming traffic on port 443. This includes checking security settings with your hosting provider, e.g. AWS security groups.

---

## 3rd-party Services/Tools

**This is a list of options, not requirements. You can likely run your SaaS perfectly fine without many of these.**

This list includes both commercial options and open-source, including packages.

For more, search for `awesome-laravel` repos on Github, like [this one](https://github.com/chiraggude/awesome-laravel).

#### Analytics

[Fathom](https://usefathom.com) and [Plausible](https://plausible.io) are great options. If I had to choose: Fathom has more accessible pricing, and is made with Laravel!

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

---

### Other Tools not included

- **APIs**
    - **Consuming APIs**: I recommend [Saloon](https://docs.saloon.dev/) - it can be a bit overkill for small APIs, but it really helps with structuring logic with larger APIs and OAuth. I use it as the base for my [Investec Banking API SDK](https://github.com/nikspyratos/investec-sdk-php).
    - **OpenAPI/Swagger**: [l5-swagger](https://github.com/DarkaOnLine/L5-Swagger) is great here - must-use for writing great APIs. Otherwise, [Scramble](https://scramble.dedoc.co/) is a new entry in the scene.
    - **Data Transfer Objects**: [Laravel Data](https://spatie.be/docs/laravel-data/v3/introduction) should cover you, but if you want something simple and non-Laravel, [dragon-code/simple-dto](https://github.com/TheDragonCode/simple-data-transfer-object) does the job without much overhead.
- **Excel Import/Export**: [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/) - it's a wrapper over PHPSpreadsheet, very convenient. For exports from Filament tables, there's also [Filament Excel](https://github.com/pxlrbt/filament-excel) which uses Laravel Excel under the hood.
- **Manual backups**: [Laravel Backup](https://github.com/spatie/laravel-backup) (with [Filament plugin](https://filamentphp.com/plugins/shuvroroy-spatie-laravel-backup)). By default there is a `Download Database` action in the Filament dashboard to download the SQLite databases.
- **Media Management**: Try out [Spatie Media Library](https://spatie.be/docs/laravel-medialibrary/v10/introduction) alongside [Filament's plugin](https://filamentphp.com/plugins/filament-spatie-media-library).
- **Alternative Eloquent Drivers**: [Sushi](https://github.com/calebporzio/sushi) is an array driver, while [Orbit](https://github.com/ryangjchandler/orbit) is a flat file driver. These can be useful for things like CMSes, or loading data into Filament tables (which rely on the Eloquent query builder) without needing a database-driven model.
- **Fixture data**: [Squire](https://github.com/squirephp/squire) adds static fixtures (e.g. airport, country code, currency, timezone) available through Eloquent.
- **Provisioning & Deployment**: There are many tools here, but I'd recommend keeping it simple with one of: Docker, Ansible, or even plain Bash scripts. Otherwise, look at 
- **Application settings**: [Spatie Laravel Settings](https://github.com/spatie/laravel-settings) + [Filament Spatie Settings](https://filamentphp.com/plugins/filament-spatie-settings)
- **Security**: Consider adding [Spatie's CSP package](https://github.com/spatie/laravel-csp).

For more niche suggestions and general Laravel resources, check out my [Laravel links page](https://writing.nikspyratos.com/Perceptions/Learning/Resources/Tech/Laravel).

For more tutorials, packages and more, make sure to look at [Laravel News](https://laravel-news.com/).

#### Filament Plugins & Tricks

This boilerplate relies heavily on FilamentPHP for the admin panel building. This also means there are plenty of extra resources to augment either your UI or admin panel:

- [Plugins](https://filamentphp.com/plugins)
- [Community Articles](https://filamentphp.com/community)

### Design

- **Application Colours**: Generate matching application colours with [Coolors](https://coolors.co/), and generate Tailwind palettes from those with [UIColors.app](https://uicolors.app/create).
- **Logo**: Change the contents of [resources/views/vendor/filament-panels/components/logo.blade.php](resources/views/vendor/filament-panels/components/logo.blade.php) to reference your logo image. For favicon generation from the logo, [Real Favicon Generator](https://realfavicongenerator.net/) will create all the images as well as all the HTML you need.
- **Images**: Once you've set up your project, you can delete the default logos & images in `public/images`.

---

## How to scale

This package is a starting point, but as your project scales, you may need to add some more pieces to keep it stable & safe.

You can do most of what is described below with the [infrastructure](#infrastructure) tools recommended.

- **Vertical scale**: Put simply, for some time, it can just be easier to increase the size of your server as your resource demand grows. For Toybox, the memory & upload limits are set in `public/index.php`. 
- **Caching & Content Delivery Network (CDN)**: Cache frequent application responses with the tools in the [Cache section](#cache). Sign up for a service like [Cloudflare](https://www.cloudflare.com/) or [Fastly](https://www.fastly.com/) to take the edge off of some of your traffic and protect from DDoS attacks.
- **Separation of concerns**: You may notice some parts of your application require more resources than others. For example, your database needs tons of storage, or your Redis instance takes a lot of RAM. In this case, it can be smarter to switch to either a managed service (e.g. RDS for managed DB, SQS for queues), or spin up a generic server specifically to use that tool.
- **Horizontal scale**: Spin more servers up, and stick a load balancer in front of them. Again managed services for this exist, or you can spin up a generic server with Forge/Ploi and use that for it. Just remember to [modify your scheduled tasks to only run on one server](https://laravel.com/docs/11.x/scheduling#running-tasks-on-one-server).
    - This can also be manually done with Caddy with its [load balancing](https://caddyserver.com/docs/caddyfile/directives/reverse_proxy#load-balancing) configuration.
    - Laravel Reverb can be scaled [with Redis](https://laravel.com/docs/11.x/reverb#scaling)
    - If you stick with SQLite, one of its limitations is that it only allows one write at a time. This is fine until a certain traffic scale, but you can use something like [Marmot](https://maxpert.github.io/marmot/intro) to run multiple SQLite nodes and have them replicated to each other. Note however at this time that you would have to run migrations manually for each node as a separate connection, as Marmot doesn't replicate schema changes to other nodes.
- **Self hosting**: Some non-app modules of your business might be cheaper to self-host. For example: CMS, Metabase, Websockets. Be careful with this however, as there can be some hidden catch of complexity/cost involved that can make it more attractive to go for the managed service.
- **Serverless**: There are two modes of thinking with serverless: pay to make the scale problems go away, or use it for infrequent, burstable task loads that don't need to be in your main app.
- **Content**: The included content pages - landing, blog, terms/privacy policy, etc. - are intended as a starting point. As your app grows, it may make more sense to move these pages to a separate CMS rather than include them in your application.

If you need _even more_ than that:

- **Splitting into services**: You can split portions of your app into new services, and scale those servers in particular. It's the same as `Separation of concerns`, but for your actual codebase. Note: `service` doesn't have to mean `microservice`.
- **Auto-scaling**: Here be dragons. Take time to learn the tools you need and understand them, or hire professional help. Keywords: Containerisation, orchestration. Or, YOLO and experiment with the [Spatie Dynamic Servers](https://spatie.be/docs/laravel-dynamic-servers/v1/introduction) package.
    If you're at the point of needing these and more, congrats! You (hopefully) have a profitable & successful startup. You need to start hiring people. If you're still using this README, you're trying to melt steel with a lighter.

## Other recommendations for business operations, launching, etc.

While this isn't really within the scope of this project, I think it's still valuable to provide some starting recommendations for other entrepreneurs.

The following is a non-exhaustive, and potentially outdated list of recommendations.

For more resources, such as for launching, advertising, sales, marketing, communities, and incorporating a business, [see here](https://writing.nikspyratos.com/Perceptions/Ambition+-+Careers+-+Entrepreneurship/Resources/Indie+Hacking+-+Solopreneurship+-+Startups+-+Founders).

### Helpdesk/Support

Honestly, using a `support@example.com` email address will be most of what you need.

Helpdesk systems are only really needed as you need to start building support teams and processes.

Nevertheless, some options are: [Crisp.chat](https://crisp.chat), [GrooveHQ](https://www.groovehq.com/), [HelpScout](https://www.helpscout.com), and [HelpSpace](https://helpspace.com).

### Live Chat

Many of the [Support](#helpdesksupport) recommendations will already have a live chat feature. Otherwise, have a look at [Tawk.to](https://www.tawk.to/) and [Intercom](https://www.intercom.com/).

### Knowledgebase

While you're solo, I'd recommend one of the following:

- [VS Code](https://code.visualstudio.com/) with the [Markdown All In One](https://marketplace.visualstudio.com/items?itemName=yzhang.markdown-all-in-one) extension.
- [Obsidian](https://obsidian.md/) ($50/yr for commercial use, cheaper than Notion)

Once you need to start having the knowledgebase available to others, [Notion](https://notion.so) is my go-to. Notion also supports making public pages, so you can also have your customer knowledgebase there.

### Roadmap Management

[Suggest.gg](https://suggest.gg/)

### Accounting

I don't know too much in this space other than [Xero](https://www.xero.com).

### Terms & Conditions

- [Avodocs](https://www.avodocs.com/)
- [All sorts of policies available for free by Basecamp](https://github.com/basecamp/policies)
- [GetTerms](https://getterms.io/)

## Roadmap

I intend to build out more common SaaS features.

- Generic-ish payments management, modeled after [Laravel Cashier](https://laravel.com/docs/11.x/cashier-paddle), [LemonSqueezy Laravel](https://github.com/lmsqueezy/laravel), etc.
- Documentation using [LaRecipe](https://larecipe.saleem.dev)
- Customer feedback
- Roadmaps
- Support ticketing
- Publish announcements/notifications to users in-app (with/without Reverb)
- Sensible AI default setup for AI related features
- Maybe rework the T&C docs - Basecamp's ones are free to copy, but highly specific to them.
- Redo/improve Blog & post styling
- Rework general app styling with a different UI kit

## Contributing

These are some features that would be nice to have, but I don't intend on building yet for one reason or another:

- FrankenPHP binary build
- PWA support
- Dockerfile
- Auto-generate table of contents for blog posts
- Blog RSS feed
- Confirmed working Windows environment solution: I don't work on Windows, and while Herd may be a first prize solution, I do want a free setup recommendation to have for Windows devs.
- Let me know if any new file changes need to be added to the Jetstream Teams installer.
- Convert some of the install scripts to be Prompts-based (or hybrid with Prompts)

---

[Back to top](#toybox---a-laravel-micro-saas-starter-kit)
