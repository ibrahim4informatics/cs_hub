<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use DeepCopy\Filter\Filter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name")->label("First Name")->required()->maxLength(35),
                Forms\Components\TextInput::make("last_name")->label("Last Name")->maxLength(35),
                Forms\Components\TextInput::make("email")->email()->required(),
                Forms\Components\TextInput::make("phone")->tel()->label("Phone Number"),
                Forms\Components\Select::make("role")->required()->options(["admin"=>"Admin", "user"=>"User"])->default("user"),
                Forms\Components\TextInput::make("password")->password()->required(fn ($livewire)=> $livewire instanceof CreateRecord)
                ->visible(fn($livewire)=> $livewire instanceof CreateRecord),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id")->label("#ID"),
                Tables\Columns\TextColumn::make("name")->label("First Name"),
                Tables\Columns\TextColumn::make("last_name")->label("Last Name"),
                Tables\Columns\TextColumn::make("email")->searchable(),
                Tables\Columns\TextColumn::make("role"),
                Tables\Columns\TextColumn::make("created_at")->label("Joined At")->sortable(),

            ])
            ->filters([
                Tables\Filters\SelectFilter::make("role")->options([
                    "admin"=>"Admin",
                    "admin"=>"Admin",
                ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
