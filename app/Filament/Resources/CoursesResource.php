<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CoursesResource\Pages;
use App\Filament\Resources\CoursesResource\RelationManagers;
use App\Models\Course;
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
use Filament\Forms\Components\CheckboxList;

use Filament\Forms\Components\BelongsToManyCheckboxList;
use Filament\Forms\Components\BelongsToSelect;

class CoursesResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle';

    protected static ?string $label = 'Aula';
    
    protected static ?string $pluralLabel = 'Aulas';

    protected static ?string $navigationGroup = 'Cursos';

    protected static ?int $navigationSort = 1;


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

                        Section::make( 'Categorias' )                    
                            ->schema([
                                BelongsToSelect::make( 'categoryId' )->label( 'Categorias' )
                                    ->relationship( 'category', 'category_name' )
                            ]),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make( 'course_title' )->label( 'Título' ),
                TextColumn::make( 'category.category_name' )->label( 'Categoria' ),
            ])
            ->filters([
                //
            ]);
    }

    // public static function getRelations(): array
    // {
    //     return [
    //         //
    //     ];
    // }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourses::route('/create'),
            'edit' => Pages\EditCourses::route('/{record}/edit'),
        ];
    }
}
