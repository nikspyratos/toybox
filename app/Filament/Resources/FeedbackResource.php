<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('consented_testimonial')
                    ->boolean(),
                Tables\Columns\IconColumn::make('reviewed')
                    ->boolean(),
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
                Tables\Actions\Action::make('edit_feedback')
                    ->icon('heroicon-m-pencil-square')
                    ->form([
                        Forms\Components\Textarea::make('feedback')
                            ->disabled(),
                        Forms\Components\Textarea::make('edited_feedback')
                            ->label('Editing Feedback'),
                    ])
                    ->action(function (Feedback $record, array $data) {
                        $record->update(['edited_feedback' => $data['edited_feedback'], 'reviewed' => true]);
                    }),
                Tables\Actions\Action::make('mark_reviewed')
                    ->icon('heroicon-m-check-badge')
                    ->action(function (Feedback $record) {
                        $record->update(['reviewed' => true]);
                    }),
            ])
            ->bulkActions([
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFeedback::route('/'),
        ];
    }

    public function getTabs(): array
    {

    }
}
