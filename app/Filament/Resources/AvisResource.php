<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Avis;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TernaryFilter;
use App\Filament\Resources\AvisResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AvisResource\RelationManagers;

class AvisResource extends Resource
{
    protected static ?string $model = Avis::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Autres';

    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'xl' => 4,
                'lg' => 5,
            ])
            ->columns([
                Tables\Columns\TextColumn::make('content')
                    ->label('Avis'),
                Tables\Columns\ImageColumn::make('author.avatar')
                    ->rounded()
                    ->defaultImageUrl(fn(Avis $record) : string => 'https://ui-avatars.com/api/?name='.$record->author->name),
            ])
            ->filters([
                TernaryFilter::make('deleted_at')
                    ->label('Corbeille')
                    ->placeholder('Without trashed records')
                    ->trueLabel('With trashed records')
                    ->falseLabel('Only trashed records')
                    ->queries(
                        true: fn (Builder $query) => $query->withTrashed()->get(),
                        false: fn (Builder $query) => $query->onlyTrashed()->get(),
                        blank: fn (Builder $query) => $query->withoutTrashed()->get(),
                    )
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListAvis::route('/'),
        ];
    }    
}
