<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerInvestorResource\Pages;
use App\Filament\Resources\PartnerInvestorResource\RelationManagers;
use App\Models\PartnerInvestor;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class PartnerInvestorResource extends Resource
{
    protected static ?string $model = PartnerInvestor::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Sócio Investidor';

    protected static ?string $pluralLabel = 'Sócio Investidores';

    protected static ?string $navigationGroup = 'Formulários';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                TextInput::make('investment')
                    ->label('Investimento')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('investment'),
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
            'index' => Pages\ListPartnerInvestors::route('/'),
            'create' => Pages\CreatePartnerInvestor::route('/create'),
            'edit' => Pages\EditPartnerInvestor::route('/{record}/edit'),
        ];
    }
}
