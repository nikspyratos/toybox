<?php

declare(strict_types=1);

namespace App\Filament\Resources\RoleResource\RelationManagers;

use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Actions\AttachAction;
use Filament\Tables\Actions\DetachAction;
use Filament\Tables\Actions\DetachBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Spatie\Permission\PermissionRegistrar;

class PermissionRelationManager extends RelationManager
{
    protected static string $relationship = 'permissions';
    protected static ?string $recordTitleAttribute = 'name';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Hidden::make('guard_name')
                    ->default(config('auth.defaults.guard')),

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('displayName')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Code')
                    ->sortable()
                    ->searchable(),
            ])
            ->headerActions([
                AttachAction::make()
                    ->preloadRecordSelect()
                    ->form(fn (AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->preload(),
                    ]),
            ])
            ->actions([
                DetachAction::make(),
            ])
            ->bulkActions([
                DetachBulkAction::make(),
            ]);
    }

    public function afterAttach(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function afterDetach(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
