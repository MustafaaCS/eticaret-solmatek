<?php

namespace App\Filament\Resources;

use App\Filament\Resources\B2BProfileResource\Pages;
use App\Models\B2BProfile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class B2BProfileResource extends Resource
{
    protected static ?string $model = B2BProfile::class;
    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('company_name')
                    ->required(),
                Forms\Components\TextInput::make('tax_number'),
                Forms\Components\TextInput::make('address')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('show_prices')
                    ->label('Fiyat Gösterilsin mi?')
                    ->default(true),
                Forms\Components\Select::make('status')
                    ->options([
                        'beklemede' => 'Beklemede',
                        'onayli' => 'Onaylı',
                        'ret' => 'Ret',
                    ])
                    ->required(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Kullanıcı'),
                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\IconColumn::make('show_prices')
                    ->boolean(),
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
            'index' => Pages\ListB2BProfiles::route('/'),
            'create' => Pages\CreateB2BProfile::route('/create'),
            'edit' => Pages\EditB2BProfile::route('/{record}/edit'),
        ];
    }
}
