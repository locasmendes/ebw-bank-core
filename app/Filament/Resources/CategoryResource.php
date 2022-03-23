<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-grid-add';

    protected static ?string $label = 'Tema';
    
    protected static ?string $pluralLabel = 'Temas';

    protected static ?string $navigationGroup = 'Cursos';

    protected static ?int $navigationSort = 2;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        TextInput::make( 'category_name' )->label( 'Nome' ),
                        TextInput::make( 'category_slug' )->label( 'Slug' ),
                        MarkdownEditor::make( 'category_description' )->label( 'Descrição' ),   
                        TextInput::make( 'category_time' )->label( 'Tempo estimado' ),
                        TextInput::make( 'category_color' )->type('color')->label( 'Cor da categoria' ),
                        Select::make( 'category_difficulty' )->label( 'Dificuldades' )
                            ->options([
                                'basico'        => 'Básico',
                                'intermediario' => 'Intermediário',
                            ])
                    ])->columns(1)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make( 'category_name' )->label( 'Nome'),
                TextColumn::make( 'category_slug' )->label( 'Slug' ),
                TextColumn::make( 'category_time' )->label( 'Tempo estimado' ),
                TextColumn::make( 'category_difficulty' )->label( 'Dificuldade' ),

            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategory::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}