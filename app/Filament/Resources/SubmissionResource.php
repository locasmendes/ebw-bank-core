<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubmissionResource\Pages;
use App\Filament\Resources\SubmissionResource\RelationManagers;
use App\Models\Submission;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
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
                Group::make([
                    TextInput::make('name')
                        ->label('Nome')
                        ->disabled(),
                    TextInput::make('phone')
                        ->label('Telefone')
                        ->disabled(),
                    TextInput::make('email')
                        ->label('E-mail')
                        ->disabled(),
                    TextInput::make('cpf_cnpj')
                        ->label('CPF ou CNPJ')
                        ->disabled(),
                    Select::make('person_type')
                        ->options([
                            'pf' => 'Pessoa Física',
                            'pj' => 'Pessoa Jurídica'
                        ])
                        ->label('Tipo de pessoa')
                        ->disabled(),
                ])->columns(2),
                Group::make([
                    Checkbox::make('allow_infomation_whatsapp_sms')
                        ->label('Permite receber informações por Whatsapp e SMS')
                        ->disabled(),
                    Checkbox::make('allow_infomation_email')
                        ->label('Permite receber informações por email')
                        ->disabled(),
                ])
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),
                TextColumn::make('phone')
                    ->label('Telefone'),
                TextColumn::make('email')
                    ->label('E-mail')
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
