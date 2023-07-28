<!-- TOC -->
  * [Support](#support)
  * [Principles](#principles)
  * [Components](#components)
  * [Installation/Usage](#installationusage)
  * [Next Steps](#next-steps)
  * [Local Development](#local-development)
    * [macOS](#macos)
    * [Linux](#linux)
  * [Notes/Ideas](#notesideas)
  * [TODO](#todo)
<!-- TOC -->

My boilerplate for Laravel micro-SaaS/indie hackers.

Works best for solo developers or small teams.

The toybox has a bit of everything - a grand tour of the Laravel & PHP world, so to speak.

## Support

- [Buy me a coffee](https://tip-jar.co.za/@thecapegreek)
- Sign up to services like OhDear and Paystack with my affiliate links in the [Next Steps](#next-steps) section.
- I also [consult in the Laravel & payments space](https://nik.software)

## Principles

- **Be as self-contained as possible**: With minimal extra commands, you should be able to clone this repo and get something running.
- **Use the simplest form of each tool**: Minimising the different languages used, using simpler alternatives to common tools.
- **Verticality**: Use as much of the official Laravel ecosystem where applicable.
- **Customisable**: Don't like my tech choices? Shouldn't be too hard to sub the important ones out, e.g. SQLite -> MySQL.
- **Flexible, but sturdy**: Strict types. Automated linting.
- **Scaling should be simple**: It's cheaper to scale with load balancing & bigger servers than paying dev/ops salaries to overcomplicate your life with Docker, Kubernetes, etc. If your business needs all that, you should be able to afford it instead of using this.
- **Local is lekker**: Reducing reliance on third-party services for managing infrastructure, CI/CD, etc. while not reducing capabilities.
- **Don't reinvent the wheel**: More "performant" language ecosystems insist on having you write the same code for every standard feature. We don't do that here. At the same time we don't want to build an oversized swiss-army-knife of a system, or go too insane relying on third-party packages, so it's ideal to stick to well-used and understood packages that you will most likely need.

## Components

- **OS**: Your choice, but the main target here is [Ubuntu](https://ubuntu.com/).
- **Webserver**: [Caddy](https://caddyserver.com/) - with the Laravel application running with [Octane](https://laravel.com/docs/10.x/octane)
- **Database**: Your choice. Default setup is for [SQLite](https://www.sqlite.org/index.html)
- **Cache & Queues**: [Redis](https://redis.io)
- **Application**: [Laravel](https://laravel.com) (duh)
  - **Authentication**: [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze) 
  - **Frontend**: [Livewire](https://livewire.laravel.com), including [Alpine.js](https://alpinejs.dev/).
  - **Admin panel**: [Filament](https://filamentphp.com/)
  - **API**: [Laravel Sanctum](https://laravel.com/docs/10.x/sanctum) 
  - **Testing**: [PestPHP](https://pestphp.com/)
  - **Linting**: [Duster](https://github.com/tighten/duster) (includes Laravel Pint) 
  - **Observability/Metrics**: [Laravel Telescope](https://laravel.com/docs/10.x/telescope) and [Horizon](https://laravel.com/docs/10.x/horizon)
- **CI/CD**: [Deployer](https://deployer.org/)

## Installation/Usage

This assumes you're starting from scratch on an unmanaged (no Forge/Ploi/Envoyer) Ubuntu server.

```shell
// [TODO]
./setup.sh
```

## Next Steps

These are the next steps you will have to implement yourself for your project.

Services
- **Mail Provider**: [Laravel recommends](https://laravel.com/docs/10.x/mail#introduction) [Mailgun](https://www.mailgun.com/), [Postmark](https://postmarkapp.com/) and [SES](https://aws.amazon.com/ses/). Another option that integrates well, and works for newsletters/marketing campaigns too, is [Mailcoach](https://mailcoach.app/).
- **Payment Provider**: There are a few options here, depending on your region. For many countries, Stripe with [Laravel Cashier](https://laravel.com/docs/10.x/billing#introduction) will be fine. Otherwise, have a look at [Paddle](https://www.paddle.com/) (also has a [Cashier plugin](https://laravel.com/docs/10.x/cashier-paddle)) or [Lemon Squeezy](https://lemonsqueezy.com) (Laravel package [here](https://github.com/lmsqueezy/laravel)) for a Merchant of Record. If you're in Africa, [Paystack](https://paystack.com/) is a solid option. For more options, and whether or not you need an MoR, and taxation info see [here](https://writing.nikspyratos.com/Perceptions/Ambition+-+Careers+-+Entrepreneurship/Resources/Payment+Gateways).
- **Event tracking/notifications**: I recommend [LogSnag](https://logsnag.com/).
- **Uptime & Monitoring**: I recommend [OhDear](https://ohdear.app/?via=nikspyratos).
- **Infrastructure/Server Management**: [Laravel Forge](https://forge.laravel.com/) and [Ploi](https://ploi.io/) are good options (I prefer Ploi) and support many cloud providers. I lean towards AWS, but only because they have a Cape Town region.
  - **Serverless**: Either [Laravel Vapor](https://vapor.laravel.com/) or roll-your-own setup for free with [Bref](https://bref.sh/). While this boilerplate is untested with Serverless, I still wanted to provide some links.
- **Desktop**: While still in alpha, [NativePHP](https://nativephp.com/) will hopefully be a very promising option if you'd like to add desktop apps to your toolkit.

Other Tools
- **APIs**
  - **Consuming APIs**: I recommend [Saloon](https://docs.saloon.dev/) - it can be a bit overkill for small APIs, but it really helps with structuring logic with larger APIs and OAuth. I use it as the base for my [Investec Banking API SDK](https://github.com/nikspyratos/investec-sdk-php). 
  - **OpenAPI/Swagger**: [l5-swagger](https://github.com/DarkaOnLine/L5-Swagger) is great here - must-use for writing great APIs.
  - **Data Transfer Objects**: [Laravel Data](https://spatie.be/docs/laravel-data/v3/introduction) should cover you, but if you want something simple and non-Laravel, [dragon-code/simple-dto](https://github.com/TheDragonCode/simple-data-transfer-object) keeps things simple. 
- **Excel Import/Export**: [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/) - it's a wrapper over PHPSpreadsheet, very convenient.
- **More Laravel goodies**: [Social login](https://laravel.com/docs/10.x/socialite), [Feature Flags](https://laravel.com/docs/10.x/pennant), [OAuth2](https://laravel.com/docs/10.x/passport). 

For more niche suggestions and general Laravel resources, check out my [Laravel links page](https://writing.nikspyratos.com/Perceptions/Learning/Resources/Tech/Laravel).

What else should be added here?

## Local Development

In keeping with the spirit of this project, try using native solutions.
Windows users: follow Linux instructions on WSL2. Not sure all of it will work properly though, I don't use Windows.

### macOS

- ([Valet](https://laravel.com/docs/10.x/valet) & [PHPMon](https://phpmon.app/)) OR [Laravel Herd](https://herd.laravel.com/)
- [DBngin](https://dbngin.com/)

### Linux

- [Valet Linux](https://cpriego.github.io/valet-linux/) OR install PHP manually.
- Install your DB of choice locally

## Notes/Ideas

- Not including a particular payment provider right now as everyone's use case can be different. For most scenarios however I'd recommend a Merchant of Record like LemonSqueezy or Paddle. This is also why Cashier is not used.
- Caddy usage here may be of limited use for you if you use Forge/Ploi/etc.
- Redis is a part of this stack, but filesystem cache & `php artisan queue:work` can probably do just fine for quite a while. However the Horizon integration for visibility is really nice.
- NativePHP might be a good fit here for those who want to do that?
- Should tests run as pre-commit hooks too? On larger test bases and for atomised commits probably a bad idea, so for now no.
- Laravel Folio for non-application pages? E.g. landing page
- More general Filament component usage outside of admin panel
- CI/CD: Github Actions could be used for testing on PRs/main pushes. For a more local alternative, perhaps a pre-push hook to prevent push if tests fail?

## TODO

- Write more on the thinking of each tech choice
- Installation docs
- Get something working with this
- Livewire + Filament v3
- Filament: Get vite/tailwind config setup for colour customisation
- Deployer: Set up for deployment without storing credentials/IPs in the repo. Also would like to use the yaml style more but the doc examples are focused on the PHP version too much.
- Docker: Setting up one Dockerfile to act as an application bundler here might not be the worst idea. But would need to figure out the best way to separate parts like queues.
- Test multi-server version of this
