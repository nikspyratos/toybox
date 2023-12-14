<?php

declare(strict_types=1);

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\UserResource;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Support\Colors\Color;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;

class ActivitiesRelationManager extends RelationManager
{
    protected static ?string $title = 'Event Log';
    protected static string $relationship = 'activities';

    public static function canViewForRecord(Model $ownerRecord, string $pageClass): bool
    {
        return auth()->user()->is_admin;
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('description')
                    ->formatStateUsing(fn (string $state) => Str::ucfirst($state)),
                TextEntry::make('causer.fullname')
                    ->label('Updated By')
                    ->color(Color::Cyan)
                    ->url(
                        fn (Activity $activity) => UserResource::getUrl(
                            'view',
                            ['record' => $activity->causer]
                        )
                    ),
                TextEntry::make('created_at')
                    ->label('Updated at'),
                Grid::make(4)
                    ->schema([
                        Section::make('Before')
                            ->columnSpan(2)
                            ->schema(function (Activity $activity): array {
                                $schema = [];
                                $oldValuesThatChanged = array_diff_assoc(
                                    $activity->properties->get('old'),
                                    $activity->properties->get('attributes')
                                );
                                foreach ($oldValuesThatChanged as $key => $value) {
                                    $schema[] = TextEntry::make($key)->default($value);
                                }

                                return $schema;
                            })->visible(fn (Activity $activity): bool => Arr::has($activity->properties, 'old')),
                        Section::make(
                            fn (Activity $activity): string => Arr::has($activity->properties, 'old')
                            ? 'After'
                            : ''
                        )
                            ->columnSpan(2)
                            ->schema(function (Activity $activity): array {
                                $schema = [];
                                $newValuesThatChanged = array_diff_assoc(
                                    $activity->properties->get('attributes'),
                                    $activity->properties->get('old') ?? []
                                );
                                foreach ($newValuesThatChanged as $key => $value) {
                                    if ($key === 'password') {
                                        $schema[] = TextEntry::make('Password')->default('Changed');
                                    } elseif (! in_array($key, ['deleted_at', 'last_login_at'])) {
                                        $schema[] = TextEntry::make($key)->default($value);
                                    }
                                }

                                return $schema;
                            })->visible(fn (Activity $activity): bool => Arr::has($activity->properties, 'attributes')),
                    ]),

            ]);
    }

    public function isReadOnly(): bool
    {
        return true;
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('description')
            ->columns([
                TextColumn::make('description')
                    ->label('Action')
                    ->formatStateUsing(fn (string $state) => Str::ucfirst($state)),
                TextColumn::make('causer.fullname')
                    ->label('Updated By')
                    ->color(Color::Cyan)
                    ->url(fn (Activity $activity) => UserResource::getUrl('view', ['record' => $activity->causer]))
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Updated at'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //Stub
            ])
            ->headerActions([
            ])
            ->actions([
                ViewAction::make()
                    ->label('View changes'),
            ])
            ->bulkActions([
            ]);
    }
}
