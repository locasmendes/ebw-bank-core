<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TalentResource\Pages;
use App\Filament\Resources\TalentResource\RelationManagers;
use App\Forms\Components\DocumentLink;
use App\Models\Talent;
use Filament\Forms;
use Filament\Forms\Components\{Grid, MultiSelect, Textarea, TextInput};
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class TalentResource extends Resource
{
    protected static ?string $model = Talent::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Banco de Talentos';

    protected static ?string $pluralLabel = 'Banco de Talentos';

    protected static ?string $navigationGroup = 'Formulários';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nome')->disabled(),
                TextInput::make('email')->label('Email')->disabled(),
                TextInput::make('escolaridade')->label('Escolaridade')->disabled(),
                TextInput::make('area_trabalho')->label('Área de trabalho desejada')->disabled(),
                DocumentLink::make('curriculo')->label('Currículo'),
                TextInput::make('phone')->label('Telefone (Whatsapp)')->disabled(),
                TextInput::make('document_cpf')->label('CPF')->disabled(),
                TextInput::make('document_rg')->label('RG')->disabled(),
                TextInput::make('state')->label('Estado')->disabled(),
                TextInput::make('city')->label('Cidade')->disabled(),
                TextInput::make('cep')->label('CEP')->disabled(),
                Grid::make()->schema([
                    TextInput::make('company_1')->label('Experiência: nome da Empresa 1')->disabled()->columnSpan(1),
                    TextInput::make('function_1')->label('Experiência: função na Empresa 1')->disabled()->columnSpan(1),
                    TextInput::make('company_2')->label('Experiência: nome da Empresa 2')->disabled()->columnSpan(1),
                    TextInput::make('function_2')->label('Experiência: função na Empresa 2')->disabled()->columnSpan(1),
                    TextInput::make('company_3')->label('Experiência: nome da Empresa 3')->disabled()->columnSpan(1),
                    TextInput::make('function_3')->label('Experiência: função na Empresa 3')->disabled()->columnSpan(1),
                ]),
                Textarea::make('maior_realizacao')->label('Maior realização profissional ou desafio')->disabled(),
                Textarea::make('exerceu_lideranca')->label('Situação em que exerceu liderança')->disabled(),
                Textarea::make('tipo_ambiente')->label('Ambiente de trabalho preferido')->disabled(),
                MultiSelect::make('conhecimento_informatica')
                    ->options([
                        'E-mail',
                        'Redes Sociais',
                        'Pacote Office',
                        'Excell',
                        'Adobe'
                    ])
                    ->label('Conhecimento em informática')->disabled(),
                TextInput::make('conhecimento_linguas')->label('Conhecimento em outras linguas')->disabled(),


            ]);
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
                    ->label('E-mail'),
                TextColumn::make('area_trabalho')
                    ->label('Área de trabalho desejada')
            ])
            ->filters([
                //
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
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
            'index' => Pages\ListTalent::route('/'),
            'create' => Pages\CreateTalent::route('/create'),
            'edit' => Pages\EditTalent::route('/{record}/edit'),
        ];
    }
}
