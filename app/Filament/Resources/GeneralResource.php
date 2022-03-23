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
                Grid::make()
                    ->schema([
                        Section::make( 'Seção MVV' )                    
                            ->schema([
                                Repeater::make( 'mvvs' )->label( 'Missão, Visão e Valores' )
                                    ->schema([
                                        TextInput::make( 'mvv_title' )->label( 'Título' ),
                                        MarkdownEditor::make( 'mvv_description' )->label( 'Descrição' )
                                    ])->createItemButtonLabel( 'Adicionar item' ),
                                TextInput::make( 'mvv_about_link' )->label( 'Link Sobre nós' )
                            ]),

                        Section::make( 'Botões' )                    
                            ->schema([
                                TextInput::make( 'button_start_now' )->label( 'Comece agora' ),
                                TextInput::make( 'button_ask_for_yours' )->label( 'Peça a sua' ),
                            ]),

                        Section::make( 'Fale Conosco' )                    
                            ->schema([
                                TextInput::make( 'telefone' )->label( 'Telefone' ),
                                TextInput::make( 'email' )->email()->label( 'E-mail' ),
                            ]),

                        Section::make( 'Redes Sociais' )                    
                            ->schema([
                                TextInput::make( 'linkedin' )->label( 'Linkedin' ),
                                TextInput::make( 'instagram' )->label( 'Instagram' ),
                                TextInput::make( 'facebook' )->label( 'Facebook' )
                            ]),
                                
                        Section::make( 'Endereços' )                    
                            ->schema([
                                Repeater::make( 'mapas' )->label( 'Endereço' )
                                    ->schema([
                                        TextInput::make( 'estado' )->label( 'Estado' ),
                                        TextInput::make( 'mapa' )->label( 'Mapa' ),
                                        MarkdownEditor::make( 'endereco' )->label( 'Endereço' )
                                    ])->createItemButtonLabel( 'Adicionar endereço' )
                            
                            ]),

                        Section::make( 'Menu rodapé' )                    
                            ->schema([
                                Repeater::make( 'menu_footer_product' )->label( 'Produtos' )
                                    ->schema([
                                        TextInput::make( 'menu_footer_product_item' )->label( 'Item' ),
                                        TextInput::make( 'menu_footer_product_link' )->label( 'Link' ),
                                        Checkbox::make( 'menu_footer_product_new_tab' )->label( 'Abrir em uma nova guia' )
                                    ])->createItemButtonLabel( 'Adicionar item no menu' )->columns(2),

                                Repeater::make( 'menu_footer_ebw' )->label( 'EBW Bank' )
                                    ->schema([
                                        TextInput::make( 'menu_footer_ebw_item' )->label( 'Item' ),
                                        TextInput::make( 'menu_footer_ebw_link' )->label( 'Link' ),
                                        Checkbox::make( 'menu_footer_ebw_new_tab' )->label( 'Abrir em uma nova guia' )
                                    ])->createItemButtonLabel( 'Adicionar item no menu' )->columns(2),

                                Repeater::make( 'menu_footer_support' )->label( 'Suporte' )
                                    ->schema([
                                        TextInput::make( 'menu_footer_support_item' )->label( 'Item' ),
                                        TextInput::make( 'menu_footer_support_link' )->label( 'Link' ),
                                    ])->createItemButtonLabel( 'Adicionar item no menu' )->columns(2)
                        
                            ])
                    ])
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
