<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OtherPageResource\Pages;
use App\Filament\Resources\OtherPageResource\RelationManagers;
use App\Helpers\Helper;
use App\Models\OtherPage;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Nuhel\FilamentCropper\Components\Cropper;

class OtherPageResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'other_pages';

    public static function getLabel(): ?string
    {
        return __('Diğer Sayfalar');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Diğer Sayfalar');
    }

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $translatableFields = [];

        foreach (Helper::getLangCodes() as $lang) {
            // define translatable fields
            $tab = [
                Forms\Components\Tabs\Tab::make(Str::upper($lang))
                    ->schema([
                        Forms\Components\TextInput::make('fields.title.'.$lang)
                            ->autofocus()
                            ->label(__('Başlık'))
                            ->required(fn() => $lang == 'tr')
                            ->rules('required', 'max:255'),

                        Forms\Components\RichEditor::make('fields.content.'.$lang)
                            ->label(__('İçerik')),

                    ])
            ];

            $translatableFields = array_merge($translatableFields, $tab);
        }

        return $form
            ->schema([
                Forms\Components\Hidden::make('type')->default('other_pages'),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Tabs::make('locale')
                            ->schema($translatableFields),

                        Forms\Components\Section::make(__('Galeri'))
                            ->schema([
                                Forms\Components\FileUpload::make('fields.images')
                                    ->enableReordering()
                                    ->multiple()
                                    ->label(''),
                            ])->collapsible(),
                    ])
                    ->inlineLabel(false)
                    ->columnSpan(2),

                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make(__('Banner Görseli'))
                            ->schema([
                                Forms\Components\FileUpload::make('fields.banner'),
                            ]),

                        Forms\Components\Section::make(__('Yan Görsel'))
                            ->schema([
                                Forms\Components\FileUpload::make('fields.side_banner'),
                            ]),

                        Forms\Components\Section::make(__('Görünürlük'))
                            ->schema([
                                Forms\Components\Toggle::make('status')
                                    ->label(__('Aktif'))
                            ]),
                    ])->columnSpan(1)->inlineLabel(false),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fields.title.'.Helper::defaultLang())
                    ->searchable(query: function (Builder $query, string $search): Builder {
                        return $query
                            ->where('fields->title', 'like', "%{$search}%");
                    })
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('fields->title', $direction);
                    })
                    ->label(__('Başlık')),

                Tables\Columns\ToggleColumn::make('status')
                    ->label(__('Aktif')),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label(__('Görünürlük'))
                    ->options([
                        '1' => __('Görünür'),
                        '0' => __('Görünmez'),
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOtherPages::route('/'),
            'create' => Pages\CreateOtherPage::route('/create'),
            'edit' => Pages\EditOtherPage::route('/{record}/edit'),
        ];
    }
}
