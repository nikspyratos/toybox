<?php

declare(strict_types=1);

namespace App\Filament\Resources\Authentication;

use App\Filament\Resources\Authentication;
use App\Models\Role;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RoleResource extends Resource
{
    protected static ?string $model = Role::class;

    protected static ?string $navigationGroup = 'Authentication';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('name')
                                    ->required(),
                                Forms\Components\Hidden::make('guard_name')
                                    ->required()
                                    ->default(config('auth.defaults.guard')),
                                Forms\Components\Select::make('permissions')
                                    ->relationship('permissions', 'displayName')
                                    ->multiple()
                                    ->preload()
                                    ->hiddenOn('view'),
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
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('permissions_count')
                    ->label('Permission Count')
                    ->counts('permissions')
                    ->sortable(),
                TextColumn::make('users_count')
                    ->label('Users Count')
                    ->counts('users')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            Authentication\RoleResource\RelationManagers\PermissionRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Authentication\RoleResource\Pages\ListRoles::route('/'),
            'create' => Authentication\RoleResource\Pages\CreateRole::route('/create'),
            'view' => Authentication\RoleResource\Pages\ViewRole::route('/{record}'),
            'edit' => Authentication\RoleResource\Pages\EditRole::route('/{record}/edit'),
        ];
    }
}