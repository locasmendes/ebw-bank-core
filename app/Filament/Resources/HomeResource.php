<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Filament\Resources\HomeResource\RelationManagers;
use App\Models\Home;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;

use Filament\Navigation\NavigationItem;
use Filament\Facades\Filament;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-add';

    protected static ?string $label = 'Início';
    
    protected static ?string $pluralLabel = 'Início';

    protected static ?string $navigationGroup = 'Páginas';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        Section::make( 'Seção Banner' )                    
                            ->schema([
                                FileUpload::make( 'banner' )->label( 'Banner' ),
                                MarkdownEditor::make( 'banner_text_highlight' )->label( 'Texto destacado' ),
                                MarkdownEditor::make( 'banner_text_small' )->label( 'Texto' ),
                            ]),

                        Section::make( 'Seção Digital' )                    
                            ->schema([
                                MarkdownEditor::make( 'digital_title_highlight' )->label( 'Título destacado' ),
                                MarkdownEditor::make( 'digital_description' )->label( 'Descrição' ),
                                Repeater::make( 'digital_items' )->label( 'Itens' )
                                    ->schema([
                                        FileUpload::make( 'digital_items_icon' )->label( 'Ícone' ),
                                        TextInput::make( 'digital_items_title' )->label( 'Título' ),
                                        TextInput::make( 'digital_items_text' )->label( 'Texto' ),
                                    ])->createItemButtonLabel( 'Adicionar itens' )
                            ]),

                        Section::make( 'Seção Maquininha' )                    
                            ->schema([
                                MarkdownEditor::make( 'machine_title_highlight' )->label( 'Título destacado' ),
                                MarkdownEditor::make( 'machine_description' )->label( 'Descrição' ),
                                MarkdownEditor::make( 'machine_text' )->label( 'Texto' ),
                                FileUpload::make( 'machine_image' )->label( 'Imagem' )
                            ]),

                        Section::make( 'Seção Portal' )                    
                            ->schema([
                                MarkdownEditor::make( 'portal_description' )->label( 'Descrição' ),
                                TextInput::make( 'portal_link' )->label( 'Link do Portal Empreendedor' ),
                            ]),
                        
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
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
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

        if (Home::first()) {
            Filament::registerNavigationItems([
                NavigationItem::make()
                    ->group(static::getNavigationGroup())
                    ->icon(static::getNavigationIcon())
                    ->isActiveWhen(fn () => request()->routeIs("{$routeBaseName}*"))
                    ->label(static::getNavigationLabel())
                    ->sort(static::getNavigationSort())
                    ->url(static::getUrl('edit', Home::first()->id ?? null)),
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
