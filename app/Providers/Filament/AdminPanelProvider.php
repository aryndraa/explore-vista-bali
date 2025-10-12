<?php

namespace App\Providers\Filament;

use App\Filament\Pages\AgentCalendar;
use App\Filament\Pages\Dashboard;
use App\Filament\Resources\Agents\AgentResource;
use App\Filament\Resources\Blogs\BlogResource;
use App\Filament\Resources\Galleries\GalleryResource;
use App\Filament\Resources\Testimonials\TestimonialResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('Explore Vista Bali')
            ->userMenuItems([
                'agent' => MenuItem::make()
                    ->label('Travel Agents')
                    ->icon('gmdi-supervised-user-circle-r')
                    ->url(fn (): string => AgentResource::getUrl('index')),
            
                'date' => MenuItem::make()
                    ->label('Calender')
                    ->icon('gmdi-date-range-r')
                    ->url(fn (): string => AgentCalendar::getUrl()),

                'gallery' => MenuItem::make()
                    ->label('Galleries')
                    ->icon('gmdi-image-o')
                    ->url(fn (): string => GalleryResource::getUrl('index')),

                'blog' => MenuItem::make()
                    ->label('Blogs')
                    ->icon('gmdi-article-o')
                    ->url(fn (): string => BlogResource::getUrl('index')),

                'testimonials' => MenuItem::make()
                    ->label('Testimonials')
                    ->icon('gmdi-comment-bank-o')
                    ->url(fn (): string => TestimonialResource::getUrl('index')),
            ])
            ->colors([
                'primary' => '#052e16',
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
            ])
            ->navigationGroups([
                'Workspace',
                'Resources',
                'Categories'
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
            ->databaseNotifications()
            ->databaseNotificationsPolling('15s')
            ->sidebarCollapsibleOnDesktop()
            ->collapsibleNavigationGroups(true)
            ->darkMode(false)
            ->viteTheme('resources/css/filament/admin/theme.css');
    }
}
