<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductCategoryResource\Pages;
use App\Filament\Resources\ProductCategoryResource\RelationManagers;
use App\Helpers\Helper;
use App\Models\Post;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Nuhel\FilamentCropper\Components\Cropper;

class ProductCategoryResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $slug = 'product-category';

    public static function getLabel(): ?string
    {
        return __('Ürün Kategorileri');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Ürün Kategorileri');
    }

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        $translatableFields = [];

        foreach (Helper::getLangCodes() as $lang) {
            $tab = [
                Forms\Components\Tabs\Tab::make(Str::upper($lang))
                    ->schema([
                        Forms\Components\TextInput::make('fields.title.' . $lang)
                            ->label(__('Başlık'))
                            ->required(fn() => $lang == 'tr'),

//                        Forms\Components\Repeater::make('fields.contents.'.$lang)
//                            ->schema([
//                                Forms\Components\TextInput::make('title')
//                                    ->label(__('Başlık')),
//                            ])->label(__('İçerikler')),
                    ])
            ];

            $translatableFields = array_merge($translatableFields, $tab);
        }

        $untranslatableFields = [
            Forms\Components\FileUpload::make('fields.image')
                ->label(__('Görsel'))
        ];

        $allFields = [
            // define type
            Forms\Components\Hidden::make('type')->default('product_category'),

            // define tab and section
            Forms\Components\Tabs::make('locale')
                ->schema($translatableFields),
            Forms\Components\Section::make(__('Çevirilemeyen Alanlar'))
                ->schema($untranslatableFields)
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

                Tables\Columns\ImageColumn::make('fields.image')
                    ->label(__('Görsel')),
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
            'index' => Pages\ListProductCategories::route('/'),
            'create' => Pages\CreateProductCategory::route('/create'),
            'edit' => Pages\EditProductCategory::route('/{record}/edit'),
        ];
    }
}
