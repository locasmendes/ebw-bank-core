<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;

use Filament\Navigation\NavigationItem;
use Filament\Facades\Filament;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Menu';
    
    protected static ?string $pluralLabel = 'Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make( 'Menu' )                    
                    ->schema([
                        Repeater::make( 'menu' )->label( 'Menu' )
                            ->schema([
                                TextInput::make( 'menu_item' )->label( 'Item' ),
                                TextInput::make( 'menu_link' )->label( 'Link' ),
                                Checkbox::make( 'menu_new_tab' )->label( 'Abrir em uma nova guia' )
                            ])->createItemButtonLabel( 'Adicionar item' )->columns(2),
                    ]),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
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

        if (Menu::first()) {
            Filament::registerNavigationItems([
                NavigationItem::make()
                    ->group(static::getNavigationGroup())
                    ->icon(static::getNavigationIcon())
                    ->isActiveWhen(fn () => request()->routeIs("{$routeBaseName}*"))
                    ->label(static::getNavigationLabel())
                    ->sort(static::getNavigationSort())
                    ->url(static::getUrl('edit', Menu::first()->id ?? null)),
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
