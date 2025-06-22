<?php

namespace App\Filament\Resources;

use App\Filament\Resources\B2BPriceResource\Pages;
use App\Models\B2BPrice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class B2BPriceResource extends Resource
{
    protected static ?string $model = B2BPrice::class;
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('b2b_profile_id')
                    ->relationship('profile', 'company_name')
                    ->required(),
                Forms\Components\Select::make('product_id')
                    ->relationship('product', 'title')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('profile.company_name')
                    ->label('Bayi'),
                Tables\Columns\TextColumn::make('product.title')
                    ->label('Ürün'),
                Tables\Columns\TextColumn::make('price')
                    ->money('TRY'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListB2BPrices::route('/'),
            'create' => Pages\CreateB2BPrice::route('/create'),
            'edit' => Pages\EditB2BPrice::route('/{record}/edit'),
        ];
    }
}
