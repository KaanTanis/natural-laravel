<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RecipeResource\Pages;
use App\Filament\Resources\RecipeResource\RelationManagers;
use App\Helpers\Helper;
use App\Models\Post;
use App\Models\Recipe;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Nuhel\FilamentCropper\Components\Cropper;

class RecipeResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'recipe';

    public static function getLabel(): ?string
    {
        return __('Tarif');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Tarifler');
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
                        Forms\Components\TextInput::make('fields.title.' . $lang)
                            ->label(__('Başlık'))
                            ->required(fn() => $lang == 'tr'),

                        Cropper::make('fields.cover')
                            ->modalSize('md')
                            ->imageCropAspectRatio('12:16')
                            ->label(__('Kapak Görseli')),

                        Forms\Components\TextInput::make('fields.description.' . $lang)
                            ->label(__('Açıklama / Alt Başlık')),

                        Forms\Components\Repeater::make('fields.'.$lang.'.items')
                            ->label(__('Malzemeler'))
                            ->schema([
                                Forms\Components\TextInput::make('item')
                                    ->label(__('Malzeme'))
                            ]),

                        Forms\Components\RichEditor::make('fields.content'.$lang)
                            ->label(__('İçerik')),

                        Cropper::make('fields.content_img')
                            ->modalSize('md')
                            ->label(__('Görsel')),

                        Forms\Components\RichEditor::make('fields.content2'.$lang)
                            ->label(__('İçerik 2')),

                        Cropper::make('fields.content_img2')
                            ->modalSize('md')
                            ->label(__('Görsel 2')),
                    ])
            ];

            $translatableFields = array_merge($translatableFields, $tab);
        }

        $untranslatableFields = [
            // define untraslated fields
            Forms\Components\TextInput::make('fields.button_link')
                ->label(__('Buton Link')),

            Cropper::make('fields.image')
                ->enableImageRotation()
                ->rotationalStep(5)
                ->enableImageFlipping()
                ->enabledAspectRatios([
                    '16:9'
                ])
                ->imageCropAspectRatio('16:9')
                ->modalSize('xl')
                ->label(__('Görsel')),
        ];

        $allFields = [
            // define type
            Forms\Components\Hidden::make('type')->default('recipe'),

            // define tab and section
            Forms\Components\Tabs::make('locale')
                ->schema($translatableFields),
//            Forms\Components\Section::make(__('Çevirilemeyen Alanlar'))
//                ->schema($untranslatableFields)
        ];

        /////////////////////////////

        return $form
            ->schema($allFields);
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

            ])->defaultSort('order')->reorderable('order')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRecipes::route('/'),
            'create' => Pages\CreateRecipe::route('/create'),
            'edit' => Pages\EditRecipe::route('/{record}/edit'),
        ];
    }
}
