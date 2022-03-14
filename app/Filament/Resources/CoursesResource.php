<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoursesResource\Pages;
use App\Filament\Resources\CoursesResource\RelationManagers;
use App\Models\Courses;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;

class CoursesResource extends Resource
{
    protected static ?string $model = Courses::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Aula';
    
    protected static ?string $pluralLabel = 'Aulas';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make()
                    ->schema([
                        Section::make( 'Aula' )                    
                            ->schema([
                                TextInput::make( 'course_title' )->label( 'Título' ),                                
                                MarkdownEditor::make( 'course_description' )->label( 'Descrição' ),
                            ]),

                        // Section::make( 'Categorias' )                    
                        //     ->schema([
                        //         Checkbox::make( 'category_finance' )->label( 'Finanças' ),
                        //         Checkbox::make( 'category_management' )->label( 'Gestão' ),
                        //         Checkbox::make( 'category_leadership' )->label( 'Liderança' ),
                        //         Checkbox::make( 'category_human_resources' )->label( 'RH' ),
                        //         Checkbox::make( 'category_sales' )->label( 'Vendas' ),
                        //     ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('course_title')->label('Título'),
                TextColumn::make('course_description')->label('Descrição'),
                TextColumn::make('')->label('Categoria(s)'),
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourses::route('/create'),
            'edit' => Pages\EditCourses::route('/{record}/edit'),
        ];
    }
}
