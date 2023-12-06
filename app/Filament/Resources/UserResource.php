<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextInputColumn;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('User')
                ->description('User Page')
                ->schema([
                    TextInput::make('name')
                        ->minLength(8)
                        ->maxLength(255)
                        ->required()
                        ->disabledOn('edit'),
                    TextInput::make('email')
                        ->email()
                        ->required()
                        ->suffix('@actona')
                        ->disabledOn('edit')
                        ->unique(ignoreRecord: true),
                    TextInput::make('password')
                        ->password()
                        ->default('@Ctona123')
                        ->prefix('@Ctona123')
                        ->visibleOn(['create'])
                        ->readOnly(),
                    Select::make('Roles')
                        ->multiple()
                        ->relationship(name: 'roles', titleAttribute: 'name')
                        ->searchable()
                        ->preload(),
                    Select::make('Permissions')
                        ->multiple()
                        ->relationship(name: 'permissions', titleAttribute: 'name')
                        ->searchable()
                        ->preload(),
//                    Radio::make('email_verified_at')
//                        ->label('Account Activation')
//                        ->options([
//                            Carbon::now('Asia/Manila')->format('Y-m-d H:i') => 'Activate',
//                        ])
//                        ->visible(fn ($record) => $record->email_verified_at === null)
//                        ->inline(false),
                   Forms\Components\DatePicker::make('email_verified_at')
                    ->label('Activation Date')
                    ->visible('create'),
                ])
                ->columns(2),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('User ID'),
                TextColumn::make('name')
                    ->searchable()
                    ->label('Full Name')
                    ->toggleable(),
                TextColumn::make('email')
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->searchable()
                    ->date('M Y')
                    ->toggleable(isToggledHiddenByDefault: false),
                TextColumn::make('updated_at')
                    ->searchable()
                    ->label('Last update')
                    ->date('M Y : H m')
                    ->toggleable(isToggledHiddenByDefault: true),
                IconColumn::make('email_verified')
                    ->label('Account Status')
                    ->boolean(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                ExportBulkAction::make(),
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ])
            ])
            ->emptyStateActions([Tables\Actions\CreateAction::make()
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
