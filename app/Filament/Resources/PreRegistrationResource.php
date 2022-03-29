<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PreRegistrationResource\Pages;
use App\Filament\Resources\PreRegistrationResource\RelationManagers;
use App\Models\PreRegistration;
use Filament\Forms;
use Filament\Forms\Components;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class PreRegistrationResource extends Resource
{
    protected static ?string $model = PreRegistration::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Pré-cadastro';

    protected static ?string $pluralLabel = 'Pré-cadastros';

    protected static ?string $navigationGroup = 'Formulários';

    public static function form(Form $form): Form
    {
        //     'person_type',
        //     'name',
        //     'phone',
        //     'email',
        //     'cpf_cnpj',
        //     'allow_infomation_whatsapp_sms',
        //     'allow_infomation_email',
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
            'index' => Pages\ListPreRegistrations::route('/'),
            'create' => Pages\CreatePreRegistration::route('/create'),
            'edit' => Pages\EditPreRegistration::route('/{record}/edit'),
        ];
    }
}
