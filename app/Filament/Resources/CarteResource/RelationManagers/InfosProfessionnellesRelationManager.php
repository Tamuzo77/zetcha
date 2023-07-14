<?php

namespace App\Filament\Resources\CarteResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\View;
use Filament\Tables\Columns\Layout\Panel;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class InfosProfessionnellesRelationManager extends RelationManager
{
    protected static string $relationship = 'infosProfessionnelles';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('fonctions')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label("Votre Fonction ou Poste dans l'entreprise ")
                            
                    ])
                    ->label("Toutes les Fonctions ou Postes lié à l'entreprise courante")
                    ->grid(2)
                    ->columnSpanFull()
                    ->relationship('fonctions'),
                Forms\Components\TextInput::make('enterprise_name')
                    ->label("Nom de l'entreprise")
                    ->required(),
                Forms\Components\TextInput::make('enterprise_address')
                    ->label("Adresse de l'entreprise")
                    ->required(),
                Forms\Components\TextInput::make('mail')
                    ->label('Votre Email')
                    ->email(),
                Forms\Components\TextInput::make('phone_number1')
                    ->label('Téléphone 1')
                    ->hint('Principal')
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->hintIcon('heroicon-o-phone-incoming')
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask->pattern('+{229}00000000')),
                Forms\Components\TextInput::make('phone_number2')
                    ->label('Téléphone 2')
                    ->hint('Optionel')
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                    ->hintIcon('heroicon-o-phone-incoming')
                    ->mask(fn(Forms\Components\TextInput\Mask $mask) => $mask->pattern('+{229}00000000')),
                Forms\Components\TextInput::make('lien_facebook')
                    ->label('Facebook')
                    ->url(),
                Forms\Components\TextInput::make('lien_twitter')
                    ->label('Twitter')
                    ->url(),
                Forms\Components\TextInput::make('lien_linkedin')
                    ->label('LinkedIn')
                    ->url(),


                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
                
            ])
            ->columns([
                Tables\Columns\TextColumn::make('enterprise_name')
                            ->searchable()
                            ->label("Nom de l'Entrprise")
                            ->sortable(),
                Tables\Columns\TextColumn::make('enterprise_address')
                    ->color('secondary'),
                Panel::make([
                    Stack::make([
                        Tables\Columns\BadgeColumn::make('fonctions.name')
                            ->icon('heroicon-o-briefcase')
                            ->sortable()
                            ->searchable()
                            ->color('success'),
                        Tables\Columns\TextColumn::make('mail')
                            ->color('secondary')
                            ->copyable(),
                        Tables\Columns\TextColumn::make('phone_number1')
                            ->copyable()
                            ->color('warning'),
                    ])
                ])->collapsible()
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
