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

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

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
}
