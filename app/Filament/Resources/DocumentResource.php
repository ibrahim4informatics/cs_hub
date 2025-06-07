<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Document;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("title")->required()->maxLength(100),
                Forms\Components\Textarea::make("description")->required()->maxLength(400),
                Forms\Components\Select::make("type")->options([
                    "COURS"=>"Cours",
                    "TEST"=>"Test",
                    "TD"=>"Fiche Td",
                    "TP"=>"Fiche Tp",
                    "EXAM"=>"Examin Finale",
                ])->required(),

                Forms\Components\Select::make("owner_id")->options(fn ()=> User::where("role", "admin")->pluck("name", "id"))->required()->default(Auth::user()->id),
                Forms\Components\TextInput::make("link")->label("Document Url")->url()->required(),
                Forms\Components\Select::make("module_id")->relationship("module", "name")->createOptionForm([
                    Forms\Components\TextInput::make("name")->label("Module Name")->maxLength(70)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("id")->label('#ID'),
                Tables\Columns\TextColumn::make("title")->searchable()->sortable(),
                Tables\Columns\TextColumn::make("owner.name")->label("Publisher"),
                Tables\Columns\TextColumn::make("module.name")->label("Module")->sortable(),
                Tables\Columns\TextColumn::make("created_at")->label("Created At")->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make("type")->options([

                    "COURS"=>"Cours",
                    "TEST"=>"Test",
                    "TD"=>"Fiche Td",
                    "TP"=>"Fiche Tp",
                    "EXAM"=>"Examin Finale",
                ]),
                Tables\Filters\SelectFilter::make("module_id")->label("Module")->relationship("module","name")
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
