<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enumerations\RoadmapItemStatus;
use App\Filament\Resources\RoadmapItemResource\Pages;
use App\Helpers\EnumHelper;
use App\Models\RoadmapItem;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Table;
use Override;

class RoadmapItemResource extends Resource
{
    protected static ?string $model = RoadmapItem::class;

    protected static ?string $label = 'Roadmap';

    protected static ?string $pluralLabel = 'Roadmap';

    protected static ?string $navigationIcon = 'heroicon-o-map';

    #[Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->live(onBlur: true)
                    ->autocomplete(false)
                    ->afterStateUpdated(
                        static function (string $state, Set $set) {
                            $slug = $set('slug', str($state)->slug()->toString());
                            $increments = 0;
                            while (RoadmapItem::whereSlug($slug)->exists()) {
                                $slug = $set('slug', str($state . '-' . $increments)->slug()->toString());
                                $increments++;
                            }

                            return $slug;
                        }
                    ),
                TextInput::make('slug')
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\Select::make('suggester_id')
                    ->relationship('suggester', 'name'),
            ]);
    }

    #[Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                SelectColumn::make('status')->options(EnumHelper::toOptionArray(RoadmapItemStatus::cases())),
                Tables\Columns\CheckboxColumn::make('published'),
                Tables\Columns\TextColumn::make('votes')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('suggester.name'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRoadmapItems::route('/'),
        ];
    }
}
