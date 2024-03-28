<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enumerations\BlogPostStatus;
use App\Filament\Resources\BlogPostResource\Pages\CreateBlogPost;
use App\Filament\Resources\BlogPostResource\Pages\EditBlogPost;
use App\Filament\Resources\BlogPostResource\Pages\ListBlogPosts;
use App\Helpers\EnumHelper;
use App\Models\BlogPost;
use Exception;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Override;
use Pboivin\FilamentPeek\Tables\Actions\ListPreviewAction;

// Credit: https://alfrednutile.info/one-class-cms-filament
class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $pluralLabel = 'Blog Posts';

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    #[Override]
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('title')->columnSpanFull(),
            TextEntry::make('slug')->columnSpanFull(),
            TextEntry::make('seo_description')->columnSpanFull(),
            TextEntry::make('content')->columnSpanFull()->html(),
        ]);
    }

    #[Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->autocomplete(false)
                        ->afterStateUpdated(
                            static function (string $state, Set $set) {
                                $slug = $set('slug', str($state)->slug()->toString());
                                $increments = 0;
                                while (BlogPost::whereSlug($slug)->exists()) {
                                    $slug = $set('slug', str($state . '-' . $increments)->slug()->toString());
                                    $increments++;
                                }

                                return $slug;
                            }
                        ),
                    TextInput::make('slug')
                        ->required(),
                    TextInput::make('seo_description')
                        ->required(),
                    TagsInput::make('tags'),
                    Select::make('author_id')
                        ->relationship(name: 'author', titleAttribute: 'name')
                        ->default(auth()->id())
                        ->required(),
                    RichEditor::make('content'),
                ]),
            ]);
    }

    /**
     * @throws Exception
     */
    #[Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(20)
                    ->searchable(),
                TextColumn::make('author.name'),
                SelectColumn::make('status')->options(EnumHelper::toOptionArray(BlogPostStatus::cases())),
                TextColumn::make('published_at')
                    ->formatStateUsing(
                        static fn (BlogPost $blogPost) => $blogPost->published_at->isFuture()
                        ? '(Scheduled) ' . $blogPost->published_at
                        : $blogPost->published_at
                    ),
                TextColumn::make('tags')->badge(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(EnumHelper::toOptionArray(BlogPostStatus::cases()))
                    ->multiple(),
            ])
            ->actions([
                ListPreviewAction::make()
                    ->previewModalData(static fn (BlogPost $blogPost): array => ['blogPost' => $blogPost]),
                EditAction::make(),
                Action::make('view_live')
                    ->label('View live')
                    ->icon('heroicon-s-globe-europe-africa')
                    ->url(static fn (BlogPost $blogPost): string => $blogPost->getLiveUrl())
                    ->openUrlInNewTab()
                    ->visible(static fn (BlogPost $blogPost): bool => $blogPost->status === BlogPostStatus::PUBLISHED),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    #[Override]
    public static function getRelations(): array
    {
        return [
            // Stub
        ];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListBlogPosts::route('/'),
            'create' => CreateBlogPost::route('/create'),
            'edit' => EditBlogPost::route('/{record}/edit'),
        ];
    }
}
