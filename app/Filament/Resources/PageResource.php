<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $label = 'Página';

    protected static ?string $pluralLabel = 'Páginas';

    protected static ?string $navigationGroup = 'Configurações';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->columnSpan(12)
                    ->disabled(),
                // TextInput::make('slug')
                //     ->columnSpan(12),
                // ->disabled(),
                // Home
                Repeater::make('content')
                    ->schema([
                        Tabs::make('Conteúdos')
                            ->tabs([
                                Tabs\Tab::make('Faixa 2')
                                    ->schema([
                                        MarkdownEditor::make('faixa_title')
                                            ->label('Título')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required(),
                                        MarkdownEditor::make('faixa_subtitle')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->label('Subtítulo')
                                            ->required()
                                    ]),
                                Tabs\Tab::make('Imprensa')
                                    ->schema([

                                        MarkdownEditor::make('imprensa_subtitle')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->label('Imprensa Subtítulo')
                                            ->required()
                                    ]),
                            ])->columns(2)

                    ])->defaultItems(1)
                    ->maxItems(1)
                    ->columnSpan(12)
                    ->label('Conteúdo Home')
                    ->hidden(fn (Closure $get) => $get('slug') !== 'home'),
                // A EBW
                Repeater::make('content')
                    ->schema([
                        Tabs::make('Conteúdos')
                            ->tabs([
                                Tabs\Tab::make('Banner Principal')
                                    ->schema([
                                        Repeater::make('banner_texts')
                                            ->schema([
                                                MarkdownEditor::make('text')
                                                    ->label('Texto Banner')
                                                    ->toolbarButtons([
                                                        'bold',
                                                        'italic',
                                                    ])
                                                    ->required(),

                                            ])
                                            ->createItemButtonLabel('Adicionar Texto')
                                    ]),
                                Tabs\Tab::make('Manifesto')
                                    ->schema([
                                        RichEditor::make('text')
                                            ->label('Texto Manifesto')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required(),

                                    ]),
                                Tabs\Tab::make('Fundadores')
                                    ->schema([
                                        Repeater::make('founders')
                                            ->schema([
                                                FileUpload::make('founder_image')
                                                    ->image()
                                                    ->label('Foto')
                                                    ->getUploadedFileUrlUsing(function (BaseFileUpload $component, string $file) {
                                                        if (Str::startsWith($file, 'images/')) {
                                                            return asset($file);
                                                        }
                                                        /** @var FilesystemAdapter $storage */
                                                        $storage = $component->getDisk();

                                                        // An ugly mess as we need to support both Flysystem v1 and v3.
                                                        $storageAdapter = method_exists($storage, 'getAdapter') ? $storage->getAdapter() : (method_exists($storageDriver = $storage->getDriver(), 'getAdapter') ? $storageDriver->getAdapter() : null);
                                                        $supportsTemporaryUrls = method_exists($storageAdapter, 'temporaryUrl') || method_exists($storageAdapter, 'getTemporaryUrl');


                                                        if ($storage->getVisibility($file) === 'private' && $supportsTemporaryUrls) {
                                                            return $storage->temporaryUrl(
                                                                $file,
                                                                now()->addMinutes(5),
                                                            );
                                                        }

                                                        return $storage->url($file);
                                                    })
                                                    ->required(),
                                                TextInput::make('founder_name')
                                                    ->required()
                                                    ->label('Nome'),
                                                TextInput::make('founder_occupation')
                                                    ->required()
                                                    ->label('Cargo'),
                                                TextInput::make('founder_linkedin')
                                                    ->required()
                                                    ->label('Linkedin'),
                                                Repeater::make('founder_curriculum')
                                                    ->schema([
                                                        TextInput::make('curriculum_item')
                                                            ->label('Item Currículo')
                                                    ])->createItemButtonLabel('Adicionar Item')
                                            ])->createItemButtonLabel('Adicionar Fundador')

                                    ]),
                                Tabs\Tab::make('Missão, visão e valores')
                                    ->schema([
                                        MarkdownEditor::make('mvv_title')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required()
                                            ->label('Título'),
                                        MarkdownEditor::make('mvv_mission')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required()
                                            ->label('Missão'),
                                        MarkdownEditor::make('mvv_vision')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required()
                                            ->label('Visão'),
                                        MarkdownEditor::make('mvv_values')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required()
                                            ->label('Valores'),
                                        MarkdownEditor::make('mvv_porpuse')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                            ])
                                            ->required()
                                            ->label('Propósito'),
                                    ]),
                            ])->columns(2)
                    ])->defaultItems(1)
                    ->maxItems(1)
                    ->columnSpan(12)
                    ->label('Conteúdo A EBW')
                    ->hidden(fn (Closure $get) => $get('slug') !== 'a-ebw'),
                // Seja um investidor
                Repeater::make('content')
                    ->schema([
                        Tabs::make('Conteúdos')
                            ->tabs([
                                Tabs\Tab::make('Quem Investe na EBW Bank')
                                    ->schema([
                                        Repeater::make('who_invest')
                                            ->schema([
                                                FileUpload::make('investor_image')
                                                    ->image()
                                                    ->required()
                                                    ->getUploadedFileUrlUsing(function (BaseFileUpload $component, string $file) {
                                                        if (Str::startsWith($file, 'images/')) {
                                                            return asset($file);
                                                        }
                                                        /** @var FilesystemAdapter $storage */
                                                        $storage = $component->getDisk();

                                                        // An ugly mess as we need to support both Flysystem v1 and v3.
                                                        $storageAdapter = method_exists($storage, 'getAdapter') ? $storage->getAdapter() : (method_exists($storageDriver = $storage->getDriver(), 'getAdapter') ? $storageDriver->getAdapter() : null);
                                                        $supportsTemporaryUrls = method_exists($storageAdapter, 'temporaryUrl') || method_exists($storageAdapter, 'getTemporaryUrl');


                                                        if ($storage->getVisibility($file) === 'private' && $supportsTemporaryUrls) {
                                                            return $storage->temporaryUrl(
                                                                $file,
                                                                now()->addMinutes(5),
                                                            );
                                                        }

                                                        return $storage->url($file);
                                                    })
                                                    ->label('Foto do Investidor'),
                                                TextInput::make('investor_name')
                                                    ->required()
                                                    ->label('Nome do Investidor'),

                                                TextInput::make('investor_occupation')
                                                    ->required()
                                                    ->label('Cargo do Investidor')
                                                    ->default('Investidor'),

                                                MarkdownEditor::make('investor_comment')
                                                    ->label('Comentário Investidor')
                                                    ->toolbarButtons([
                                                        'bold',
                                                        'italic',
                                                    ])
                                                    ->required(),
                                            ])
                                            ->createItemButtonLabel('Adicionar Investidor')
                                    ]),

                            ])->columns(2)
                    ])->defaultItems(1)
                    ->maxItems(1)
                    ->columnSpan(12)
                    ->label('Conteúdo Seja Um Investidor')
                    ->hidden(fn (Closure $get) => $get('slug') !== 'seja-um-investidor'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Página')
            ])
            ->filters([
                //
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete(Model $record): bool
    {
        return false;
    }

    public static function canDeleteAny(): bool
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
