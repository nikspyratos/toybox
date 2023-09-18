<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\PermissionResource\Pages\ListPermissions;
use App\Filament\Resources\PermissionResource\Pages\ViewPermission;
use App\Filament\Resources\PermissionResource\RelationManager\RoleRelationManager;
use App\Models\Permission;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationGroup = 'Core';
    protected static ?string $recordTitleAttribute = 'displayName';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->heading()
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('id')
                                ->label('ID')
                                ->required(),
                            TextInput::make('displayName')
                                ->label('Name')
                                ->required(),
                            TextInput::make('name')
                                ->label('Code')
                                ->required(),
                        ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                TextColumn::make('displayName')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('name')
                    ->label('Code')
                    ->searchable(),
                TextColumn::make('roles_count')
                    ->label('Roles')
                    ->counts('roles')
                    ->sortable(),
            ])
            ->filters([
                // Stub
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RoleRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPermissions::route('/'),
            'view' => ViewPermission::route('/{record}'),
        ];
    }
}
