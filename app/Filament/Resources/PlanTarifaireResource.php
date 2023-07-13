<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\PlanTarifaire;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Filament\Forms\Components\TextInput\Mask;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PlanTarifaireResource\Pages;
use App\Filament\Resources\PlanTarifaireResource\RelationManagers;
use App\Filament\Resources\PlanTarifaireResource\RelationManagers\FonctionnalitiesRelationManager;

class PlanTarifaireResource extends Resource
{
    protected static ?string $model = PlanTarifaire::class;

    protected static ?string $navigationGroup = 'Cartes de Visites ZETCHA';

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    
    protected static ?string $navigationLabel = 'Plans Tarifaires';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nom du plan')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Prix de plan')
                    ->integer()
                    ->required()
                    ->mask(fn(Mask $mask) =>$mask
                    ->money(prefix: 'Fr ', thousandsSeparator: ',', decimalPlaces: 2)),
                Forms\Components\Toggle::make('is_active')
                    ->label('Activer')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')->money('xof')
                    ->sortable(),              
            ])
            ->filters([
                Filter::make('is_active')
                    ->query(fn(Builder $query) : Builder => $query->where('is_active', true))
                    ->label('Actifs')
                    ->toggle()
                    ->default()
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                BulkAction::make('disactivateAll')
                    ->label('Tout Désactiver')
                    ->action(function(Collection $records){
                        foreach($records as $record)
                        {
                            $record->is_active = false;
                            $record->save();
                        }
                    })
                    ->color('danger')
                    ->icon('heroicon-o-trash'),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            FonctionnalitiesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlanTarifaires::route('/'),
            'edit' => Pages\EditPlanTarifaire::route('/{record}/edit'),
        ];
    }    
}
