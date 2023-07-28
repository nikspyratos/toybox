My boilerplate for Laravel micro-SaaS/indie hackers.

Works best for solo developers or small teams.

The toybox has a bit of everything. 

## Principles

- **Be as self-contained as possible**: With minimal extra commands, you should be able to clone this repo and get something running.
- **Use the simplest form of each tool**: Minimising the different languages used, using simpler alternatives to common tools.
- **Verticality**: Use as much of the official Laravel ecosystem where applicable.
- **Customisable**: Don't like my tech choices? Shouldn't be too hard to sub the important ones out, e.g. SQLite -> MySQL.
- **Flexible, but sturdy**: Strict types. Automated linting.
- **Scaling should be simple**: It's cheaper to scale with load balancing & bigger servers than paying dev/ops salaries to overcomplicate your life with Docker, Kubernetes, etc. If your business needs all that, you should be able to afford it instead of using this.
- **Local is lekker**: Reducing reliance on third-party services for managing infrastructure, CI/CD, etc. while not reducing capabilities.

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
- **CI/CD**: [Deployer](https://deployer.org/)

## Installation/Usage

This assumes you're starting from scratch on an unmanaged (no Forge/Ploi/Envoyer) Ubuntu server.

```shell
// [TODO]
./setup.sh
```

### Local Development

In keeping with the spirit of this project, try using native solutions.
Windows users: follow Linux instructions on WSL2. Not sure all of it will work properly though, I don't use Windows.

#### macOS

- ([Valet](https://laravel.com/docs/10.x/valet) & [PHPMon](https://phpmon.app/)) OR [Laravel Herd](https://herd.laravel.com/)
- [DBngin](https://dbngin.com/)

#### Linux

- [Valet Linux](https://cpriego.github.io/valet-linux/) OR install PHP manually.
- Install your DB of choice locally

## Notes/Ideas

- Not including a particular payment provider right now as everyone's use case can be different. For most scenarios however I'd recommend a Merchant of Record like LemonSqueezy or Paddle.
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
- Deployer: Set up for deployment without storing credentials/IPs in the repo
- Docker: Setting up one Dockerfile to act as an application bundler here might not be the worst idea.
