<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Helpers\Helper;
use App\Models\Post;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Nuhel\FilamentCropper\Components\Cropper;

class ProductResource extends Resource
{
    protected static ?string $model = Post::class;

    public function modelType(): string
    {
        return 'product';
    }

    public static function getLabel(): ?string
    {
        return __('Ürün');
    }

    public static function getPluralLabel(): ?string
    {
        return __('Ürünler');
    }

    protected static ?string $slug = 'product';

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

                        Forms\Components\Select::make('fields.category_id')
                            ->options(function () {
                                return Post::query()->where('type', 'product_category')
                                    ->get()
                                    ->pluck('fields.title.' . app()->getLocale(), 'id');
                            })
                            ->label(__('Kategori')),

                        Forms\Components\FileUpload::make('fields.banner')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('16:8')
                            ->imageResizeTargetWidth(1920)
                            ->imageResizeTargetHeight(900)
                            ->label(__('Banner')),

//                        Cropper::make('fields.banner')
//                            ->enableImageRotation()
//                            ->rotationalStep(5)
//                            ->enableImageFlipping()
//                            ->enabledAspectRatios([
//                                '16:9'
//                            ])
//                            ->imageCropAspectRatio('16:9')
//                            ->modalSize('md')
//                            ->label(__('Banner')),

                        Forms\Components\Fieldset::make('Alan 1')
                            ->schema([
                                Forms\Components\Textarea::make('fields.field_1.'.$lang)
                                    ->label(__('Yazı')),

                                Forms\Components\FileUpload::make('fields.field_1_img')
                                    ->label(__('Görsel')),
                            ]),

                        Forms\Components\Fieldset::make('Alan 2')
                            ->schema([
                                Forms\Components\Textarea::make('fields.field_2.'.$lang)
                                    ->label(__('Yazı')),

                                Forms\Components\FileUpload::make('fields.field_2_img')
                                    ->label(__('Görsel')),
                            ]),

                        Forms\Components\Repeater::make('fields.properties')
                            ->label(__('Özellikler'))
                            ->hint(__('En iyi görünrü için 4 adet özellik ekleyiniz.'))
                            ->columns(2)
                            ->schema([
                                Forms\Components\FileUpload::make('icon')
                                    ->imagePreviewHeight('40')
                                    ->label(__('İkon')),
                                Forms\Components\TextInput::make('text')
                                    ->label(__('Metin')),
                            ]),

                        Forms\Components\Fieldset::make(__('Alt Banner'))
                            ->schema([
                                Forms\Components\TextInput::make('fields.alt_banner_text_1.'.$lang)
                                    ->label(__('Yazı ilk satır')),
                                Forms\Components\TextInput::make('fields.alt_banner_text_2.'.$lang)
                                    ->label(__('Yazı ikinci satır')),
                                Cropper::make('fields.alt_banner_img')
                                    ->modalSize('md')
                                    ->label(__('Görsel')),
                                Forms\Components\ColorPicker::make('fields.alt_banner_color')
                                    ->label(__('Yazı Arkaplan Rengi')),
                            ]),



                    ])
            ];

            $translatableFields = array_merge($translatableFields, $tab);
        }

        $allFields = [
            // define type
            Forms\Components\Hidden::make('type')->default('product'),

            // define tab and section
            Forms\Components\Tabs::make('locale')
                ->schema($translatableFields),
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

                Tables\Columns\TextColumn::make('fields.category_id')
                    ->formatStateUsing(function ($record) {
                        return Post::query()->where('type', 'product_category')->find($record->fields['category_id'])
                            ->fields['title'][app()->getLocale()];
                    })
            ])->defaultSort('order')->reorderable('order')
            ->filters([
                Tables\Filters\SelectFilter::make('fields->category_id')
                    ->options(function () {
                        return Post::query()->where('type', 'product_category')
                            ->get()
                            ->pluck('fields.title.' . app()->getLocale(), 'id');
                    })
                    ->label(__('Kategori')),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
