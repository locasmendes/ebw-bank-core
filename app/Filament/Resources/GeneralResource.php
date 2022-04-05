<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralResource\Pages;
use App\Filament\Resources\GeneralResource\RelationManagers;
use App\Models\General;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Checkbox;

use Filament\Navigation\NavigationItem;
use Filament\Facades\Filament;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;

class GeneralResource extends Resource
{
    protected static ?string $model = General::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Informações Gerais';

    protected static ?string $pluralLabel = 'Informações Gerais';

    protected static ?string $navigationGroup = 'Configurações';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('tabs')
                    ->tabs([
                        Tab::make('Fale Conosco')
                            ->schema([
                                TextInput::make('contact_phone')->label('Telefone'),
                                TextInput::make('contact_email')->email()->label('E-mail'),
                            ]),

                        Tab::make('Redes Sociais')
                            ->schema([
                                TextInput::make('social_linkedin')->label('Linkedin'),
                                TextInput::make('social_instagram')->label('Instagram'),
                                TextInput::make('social_facebook')->label('Facebook'),
                                TextInput::make('social_youtube')->label('Youtube'),
                                TextInput::make('social_twitter')->label('Twitter')
                            ]),

                        Tab::make('Endereços')
                            ->schema([
                                Repeater::make('maps')->label('Endereço')
                                    ->schema([
                                        TextInput::make('estado')->label('Estado'),
                                        TextInput::make('mapa')->label('Iframe Mapa'),
                                        MarkdownEditor::make('endereco')->label('Endereço')
                                    ])->createItemButtonLabel('Adicionar endereço')

                            ]),
                    ])->columnSpan(12)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListGenerals::route('/'),
            'create' => Pages\CreateGeneral::route('/create'),
            'edit' => Pages\EditGeneral::route('/{record}/edit'),
        ];
    }

    public static function registerNavigationItems(): void
    {
        if (!static::shouldRegisterNavigation()) {
            return;
        }

        if (!static::canViewAny()) {
            return;
        }

        $routeBaseName = static::getRouteBaseName();

        if (General::first()) {
            Filament::registerNavigationItems([
                NavigationItem::make()
                    ->group(static::getNavigationGroup())
                    ->icon(static::getNavigationIcon())
                    ->isActiveWhen(fn () => request()->routeIs("{$routeBaseName}*"))
                    ->label(static::getNavigationLabel())
                    ->sort(static::getNavigationSort())
                    ->url(static::getUrl('edit', General::first()->id ?? null)),
            ]);
        } else {
            Filament::registerNavigationItems([
                NavigationItem::make()
                    ->group(static::getNavigationGroup())
                    ->icon(static::getNavigationIcon())
                    ->isActiveWhen(fn () => request()->routeIs("{$routeBaseName}*"))
                    ->label(static::getNavigationLabel())
                    ->sort(static::getNavigationSort())
                    ->url(static::getUrl('create')),
            ]);
        }
    }
}
