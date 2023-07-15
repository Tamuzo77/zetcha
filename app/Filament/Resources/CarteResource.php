<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Carte;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CarteResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarteResource\RelationManagers;
use App\Filament\Resources\CarteResource\RelationManagers\AuthorRelationManager;
use App\Filament\Resources\CarteResource\RelationManagers\InfosProfessionnellesRelationManager;

class CarteResource extends Resource
{
    protected static ?string $model = Carte::class;

    protected static ?string $navigationIcon = 'heroicon-o-qrcode';

    protected static ?string $navigationLabel = 'Cartes-Z';

    protected static ?string $navigationGroup = 'Cartes de Visites ZETCHA';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('Plan & Status')
                    ->schema([
                        Forms\Components\Select::make('plan_tarifaire_id')
                            ->relationship('planTarifaire', 'name')
                            ->default(1)
                            ->required(),
                        Forms\Components\Select::make('status_id')
                            ->relationship('status', 'name')
                            ->default(1)
                            ->label('Statut')
                            ->required(),
                            
                    ])->columnSpan(2),
                Forms\Components\Fieldset::make('Zetcha Code Setting')
                    ->schema([
                        Forms\Components\TextInput::make('numeroZ')
                            ->label('Z-Code-Number')
                            ->hint('Code-Z')
                            ->hintColor('danger')
                            ->prefix('ZTA')
                            ->unique(
                                ignorable: fn(null|Model $record): null|Model => $record,
                            )
                            ->numeric()
                            ->disabled(),
                    ])->columnSpan(1)->columns(1),
                Forms\Components\Fieldset::make('Auteur')
                    ->schema([
                        Forms\Components\Select::make('author_id')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nom')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->required()
                                    ->unique()
                                    ->email(),
                                Forms\Components\TextInput::make('phone_number')
                                    ->label('Téléphone')
                                    ->required()
                                    ->tel()
                                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                                    ->hintIcon('heroicon-o-phone-incoming'),
                                
                            ])
                            ->required(),
                    ])->columnSpan(2)->columns(1),
                Forms\Components\Section::make('Section Principale')
                    ->description("Les champs suivants ne peuvent pas être changé lors de l'ajout de vos informations professionelles ou de la modification d'autres informations de la carte ")
                    ->schema([
                        Forms\Components\TextInput::make('last_name')
                            ->label('Nom de Famille')
                            ->required()
                            ->reactive()
                            ->hintIcon('heroicon-o-shield-exclamation')
                            ->hint("Toute modification actualisera les Codes-Z !")
                            ->hintColor('danger')
                            ->afterStateUpdated(function(\Closure $set, $state){
                                $set('numeroZ', mt_rand(1000000,9999999) );
                            })
                            ->maxLength(150),
                        Forms\Components\TextInput::make('first_name')
                            ->label('Prénom(s)')
                            ->required(),
                    ])->columnSpan(2)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('numeroZ')
                    ->label('Numero Zetcha')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->label('Nom')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->label('Prénoms')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('author.email')
                ->label('Créateur')
                ->searchable(),
                //->url(),
                
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Statut')
                    ->relationship('status', 'name'),
                SelectFilter::make('planTarifaire')
                    ->label('Plan Tarifaire')
                    ->relationship('planTarifaire', 'name'),
                Filter::make('created_at')
                    ->form([
                        DatePicker::make('from'),
                        DatePicker::make('until'),
                    ])->query(function($query, array $data){
                        return $query->when($data['from'], fn($query) =>$query->whereDate('created_at', '>=', $data['from']))
                            ->when($data['until'], fn($query) => $query->whereDate('created_at','<=', $data['until']));
                    })
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('Voir')
                    ->icon('heroicon-o-eye')
                    ->url(fn(Carte $record) => static::getUrl('view', $record)),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            InfosProfessionnellesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCartes::route('/'),
            'create' => Pages\CreateCarte::route('/create'),
            'edit' => Pages\EditCarte::route('/{record}/edit'),
            'view' => Pages\ViewCarte::route('/{record}/view'),
            'grid' => Pages\GridCarte::route('/grid'),
        ];
    }  
    
    public static function canDeleteAny() : bool
    {
        return false;
    }

    public static function getGloballySearchableAttributes() : array
    {
        return ['numeroZ', 'first_name', 'last_name', 'author.name'];
    }

    public static function getGlobalSearchResultTitle(Model $record): string
    {
        return "$record->last_name, $record->first_name";
    }
}
