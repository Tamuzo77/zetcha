<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Models\Fonctionnalite;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FonctionnaliteResource\Pages;
use App\Filament\Resources\FonctionnaliteResource\RelationManagers;
use App\Filament\Resources\FonctionnaliteResource\RelationManagers\PlanTarifairesRelationManager;

class FonctionnaliteResource extends Resource
{
    protected static ?string $model = Fonctionnalite::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    
    protected static ?string $navigationLabel = 'Les Fonctionnalités';

    protected static ?string $navigationGroup = 'Cartes de Visites ZETCHA';

    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->maxLength(150),
                Forms\Components\RichEditor::make('description')
                    ->hint('Optionel')
                    ->hintColor('warning')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'codeBlock',
                        
                    ])
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->label('Nom'),
                Tables\Columns\TextColumn::make('description')->html(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            PlanTarifairesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFonctionnalites::route('/'),
            'create' => Pages\CreateFonctionnalite::route('/create'),
            'edit' => Pages\EditFonctionnalite::route('/{record}/edit'),
        ];
    }    
}
