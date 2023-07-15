<?php

namespace App\Filament\Resources\CarteResource\Pages;

use Filament\Tables;
use Filament\Pages\Actions;
use Filament\Resources\Table;
use Filament\Tables\Filters\Filter;
use Illuminate\Contracts\View\View;
use Filament\Tables\Columns\TagsColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;
use App\Filament\Resources\CarteResource;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Filters\SelectFilter;

class GridCarte extends ListRecords
{
    protected static string $resource = CarteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('list')
                ->label('Liste')
                ->icon('heroicon-o-view-list')
                ->color('success')
                ->url(CarteResource::getUrl('index'))
        ];
    }

    public function getBreadcrumb(): ?string
    {
        return static::$breadcrumb ?? __('Grid');
    }

    protected static ?string $title = 'Cartes : Grille';

    public  function table(Table $table): Table
    {
        return $table
            ->contentGrid([
            'md' => 2,
            'xl' => 3,
            ])
            ->columns([
                BadgeColumn::make('numeroZ')
                    ->searchable()
                    ->sortable()
                    ->color('success')
                    ->icon('heroicon-o-shield-check'),
                Split::make([
                    TextColumn::make('last_name')
                        ->searchable()
                        ->sortable()
                        ->label('Nom')
                        ->grow(false),
                    TextColumn::make('first_name')
                        ->searchable()
                        ->label('Prenom')
                        ->sortable(),

                ]),
                Split::make([
                    TextColumn::make('author.name')
                        ->searchable()
                        ->color('secondary')
                        ->grow(false),
                    TextColumn::make('author.email')
                        ->color('secondary')
                        ->copyable()
                        ->searchable(),
                ]),
                Split::make([
                    BadgeColumn::make('status.name')
                        ->colors([
                            'secondary' => static fn($state):bool => $state == 'En Production',
                            'danger' => static fn($state):bool => $state == 'Crée',
                            'success' => static fn($state):bool => $state == 'Livrée',
                        ])
                        ->label('Statut'),
                    BadgeColumn::make('infos_professionnelles_count')
                        ->counts('infosProfessionnelles')
                        ->color('warning')
                        ->alignment('right'),
                ]),
                
                

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
            ]);
    }
}
