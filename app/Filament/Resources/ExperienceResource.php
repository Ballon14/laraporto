<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    protected static ?string $navigationGroup = 'Content Management';
    
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Position Details')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Job Title')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('company')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Textarea::make('description')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])->columns(2),
                    
                Forms\Components\Section::make('Duration')
                    ->schema([
                        Forms\Components\DatePicker::make('start_date')
                            ->required()
                            ->displayFormat('M Y'),
                        Forms\Components\DatePicker::make('end_date')
                            ->displayFormat('M Y')
                            ->disabled(fn (Forms\Get $get): bool => $get('current')),
                        Forms\Components\Toggle::make('current')
                            ->label('Currently Working Here')
                            ->live()
                            ->afterStateUpdated(fn (Forms\Set $set) => $set('end_date', null)),
                    ])->columns(3),
                    
                Forms\Components\Section::make('Technologies Used')
                    ->schema([
                        Forms\Components\TagsInput::make('technologies')
                            ->placeholder('Add technology...')
                            ->suggestions([
                                'Laravel', 'PHP', 'JavaScript', 'React', 'Vue.js',
                                'Node.js', 'MongoDB', 'MySQL', 'PostgreSQL', 'Tailwind CSS',
                                'Docker', 'AWS', 'Git', 'CI/CD', 'Agile'
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
                    ->label('Position')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('company')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-o-building-office'),
                Tables\Columns\TextColumn::make('start_date')
                    ->date('M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->date('M Y')
                    ->placeholder('Present')
                    ->badge()
                    ->color(fn ($state) => $state ? 'gray' : 'success'),
                Tables\Columns\IconColumn::make('current')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-badge')
                    ->trueColor('success')
                    ->label('Active'),
                Tables\Columns\TextColumn::make('technologies')
                    ->badge()
                    ->separator(',')
                    ->limitList(3)
                    ->expandableLimitedList(),
                Tables\Columns\TextColumn::make('order')
                    ->sortable(),
            ])
            ->defaultSort('order')
            ->filters([
                Tables\Filters\TernaryFilter::make('current')
                    ->label('Currently Working'),
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
