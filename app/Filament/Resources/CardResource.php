<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Card;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CardResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CardResource\RelationManagers;

class CardResource extends Resource
{
    protected static ?string $model = Card::class;

    protected static ?string $navigationIcon = 'heroicon-o-qr-code';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Cards';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('card_id')
                ->label('Card Serial')
                ->required()
                ->disabledOn('edit'),
                
            TextInput::make('wallet_id')
            ->label('Wallet Serial'),
            
            Select::make('name')
                ->label('Name')
                ->searchable()
                ->options(User::all()->pluck('name', 'name')),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('card_id')
                 ->label('Card ID')
                 ->toggleable(isToggledHiddenByDefault: false), 
            TextColumn::make('card_balance')
                ->label('Card Balance')
                ->toggleable(isToggledHiddenByDefault: true), 
            TextColumn::make('wallet_id')
                ->label('Wallet ID')
                ->toggleable(isToggledHiddenByDefault: false), 
            TextColumn::make('wallet_balance')
                ->label('Wallet Balance')
                ->toggleable(isToggledHiddenByDefault: true), 
            TextColumn::make('name')
                ->label('Owner')
                  ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\ViewAction::make(), Tables\Actions\EditAction::make(), Tables\Actions\DeleteAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->emptyStateActions([Tables\Actions\CreateAction::make()]);
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
            'index' => Pages\ListCards::route('/'),
            'create' => Pages\CreateCard::route('/create'),
            'edit' => Pages\EditCard::route('/{record}/edit'),
        ];
    }
}
