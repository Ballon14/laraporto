<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    
    protected static ?string $navigationGroup = 'Content Management';
    
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Project Information')
                    ->description('Basic project details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),
                        Forms\Components\Select::make('category')
                            ->options([
                                'Web Application' => 'Web Application',
                                'Mobile App' => 'Mobile App',
                                'API' => 'API',
                                'Desktop App' => 'Desktop App',
                                'Other' => 'Other',
                            ])
                            ->required(),
                        Forms\Components\Toggle::make('featured')
                            ->label('Featured Project')
                            ->helperText('Show this project prominently'),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Links')
                    ->schema([
                        Forms\Components\TextInput::make('github_url')
                            ->label('GitHub URL')
                            ->url()
                            ->prefix('https://'),
                        Forms\Components\TextInput::make('live_url')
                            ->label('Live Demo URL')
                            ->url()
                            ->prefix('https://'),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Technologies')
                    ->schema([
                        Forms\Components\TagsInput::make('technologies')
                            ->placeholder('Add technology...')
                            ->suggestions([
                                'Laravel', 'PHP', 'JavaScript', 'React', 'Vue.js',
                                'Node.js', 'MongoDB', 'MySQL', 'PostgreSQL', 'Tailwind CSS',
                                'Bootstrap', 'Alpine.js', 'Livewire', 'Inertia.js'
                            ])
                            ->columnSpanFull(),
                    ]),
                    
                Forms\Components\Section::make('Display Order')
                    ->schema([
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->helperText('Lower numbers appear first'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color('primary')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean()
                    ->trueIcon('heroicon-o-star')
                    ->falseIcon('heroicon-o-x-mark')
                    ->trueColor('warning'),
                Tables\Columns\TextColumn::make('technologies')
                    ->badge()
                    ->separator(',')
                    ->limitList(3)
                    ->expandableLimitedList(),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('featured')
                    ->label('Featured'),
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'Web Application' => 'Web Application',
                        'Mobile App' => 'Mobile App',
                        'API' => 'API',
                        'Desktop App' => 'Desktop App',
                        'Other' => 'Other',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->reorderable('order');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
