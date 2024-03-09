<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FootResource\Pages;
use App\Filament\Resources\FootResource\RelationManagers;
use App\Models\Foot;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FootResource extends Resource
{
    protected static ?string $model = Foot::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->placeholder('Enter title'),
                Forms\Components\TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->placeholder('Enter description'),
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->required()
                    ->placeholder('Enter image'),
                Forms\Components\TextInput::make('author')
                    ->label('Author')
                    ->required()
                    ->placeholder('Enter author'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListFeet::route('/'),
            'create' => Pages\CreateFoot::route('/create'),
            'edit' => Pages\EditFoot::route('/{record}/edit'),
        ];
    }
}
