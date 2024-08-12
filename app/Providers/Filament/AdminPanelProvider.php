<?php

declare(strict_types=1);

namespace App\Providers\Filament;

use App\Filament\Color;
use App\Filament\Pages\Dashboard;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Override;
use pxlrbt\FilamentEnvironmentIndicator\EnvironmentIndicatorPlugin;

class AdminPanelProvider extends PanelProvider
{
    #[Override]
    public function panel(Panel $panel): Panel
    {
        $background = Color::Gray;
        $background[950] = Color::Gray[900];
        $background[900] = Color::Gray[800];

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'gray' => $background,
                'danger' => Color::Rose,
                'primary' => Color::MATISSE,
                'info' => Color::VOODOO,
                'success' => Color::Emerald,
                'warning' => Color::BUTTERCUP,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->plugins([
                EnvironmentIndicatorPlugin::make()
                    ->visible(static fn (): bool => auth()->check() ?? auth()->user()->is_admin)
                    ->color(static fn (): array => match (app()->environment()) {
                        'production' => Color::Red,
                        'staging' => Color::Orange,
                        default => Color::Blue,
                    }),
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigationGroups([
            ])
            ->navigationItems([
                NavigationItem::make('Pulse')
                    ->url('/pulse')
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-cpu-chip')
                    ->visible((bool) config('pulse.enabled')),
            ])
            ->sidebarCollapsibleOnDesktop()
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->unsavedChangesAlerts();
    }
}
