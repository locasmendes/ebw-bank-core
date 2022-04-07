<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionResource\Pages;
use App\Filament\Resources\SubmissionResource\RelationManagers;
use App\Models\Submission;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class SubmissionResource extends Resource
{
    protected static ?string $model = Submission::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Peça sua Maquininha';

    protected static ?string $pluralLabel = 'Peça sua Maquininha';

    protected static ?string $navigationGroup = 'Formulários';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //                 name
                // rg
                // cpf
                // email
                // cep
                // rua_quadra
                // numero
                // bairro
                // cidade
                // uf
                // telefone
                TextInput::make('name')
                    ->label('Nome')
                    ->disabled(),
                TextInput::make('rg')
                    ->label('RG')
                    ->disabled(),
                TextInput::make('cpf')
                    ->label('CPF')
                    ->disabled(),
                TextInput::make('email')
                    ->label('Email')
                    ->disabled(),
                TextInput::make('cep')
                    ->label('CEP')
                    ->disabled(),
                TextInput::make('rua_quadra')
                    ->label('Rua Quadra')
                    ->disabled(),
                TextInput::make('numero')
                    ->label('Número')
                    ->disabled(),
                TextInput::make('bairro')
                    ->label('Bairro')
                    ->disabled(),
                TextInput::make('cidade')
                    ->label('Cidade')
                    ->disabled(),
                TextInput::make('uf')
                    ->label('UF')
                    ->disabled(),
                TextInput::make('telefone')
                    ->label('Telefone')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email')
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

    public static function canCreate(): bool
    {
        return false;
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubmissions::route('/'),
            'create' => Pages\CreateSubmission::route('/create'),
            'edit' => Pages\EditSubmission::route('/{record}/edit'),
        ];
    }
}
