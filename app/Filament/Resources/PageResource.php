<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_whitepaper_text')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_whitepaper_link')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_telegram_text')
                    ->tel()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_telegram_link')
                    ->tel()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_join_comunity_text')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_join_comunity_link')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_buy_token_text')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('button_buy_token_link')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_one_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_one_subtitle')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('logo')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_two_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_two_subtitle_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_two_description_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_two_subtitle_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_two_description_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_subtitle_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_description_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_subtitle_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_description_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_subtitle_three')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_description_three')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_subtitle_four')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_diagram_text_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_diagram_text_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_diagram_text_three')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_three_diagram_text_four')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_subtitle_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_description_one')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_subtitle_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_description_two')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_subtitle_three')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_four_description_three')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_five_title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_five_description')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_five_email')
                    ->email()
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('section_five_text')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('twitter_link')
                    ->required()
                    ->maxLength(191),
                Forms\Components\TextInput::make('github_link')
                    ->required()
                    ->maxLength(191),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('button_whitepaper_text'),
                Tables\Columns\TextColumn::make('button_whitepaper_link'),
                Tables\Columns\TextColumn::make('button_telegram_text'),
                Tables\Columns\TextColumn::make('button_telegram_link'),
                Tables\Columns\TextColumn::make('button_join_comunity_text'),
                Tables\Columns\TextColumn::make('button_join_comunity_link'),
                Tables\Columns\TextColumn::make('button_buy_token_text'),
                Tables\Columns\TextColumn::make('button_buy_token_link'),
                Tables\Columns\TextColumn::make('section_one_title'),
                Tables\Columns\TextColumn::make('section_one_subtitle'),
                Tables\Columns\TextColumn::make('logo'),
                Tables\Columns\TextColumn::make('section_two_title'),
                Tables\Columns\TextColumn::make('section_two_subtitle_one'),
                Tables\Columns\TextColumn::make('section_two_description_one'),
                Tables\Columns\TextColumn::make('section_two_subtitle_two'),
                Tables\Columns\TextColumn::make('section_two_description_two'),
                Tables\Columns\TextColumn::make('section_three_title'),
                Tables\Columns\TextColumn::make('section_three_subtitle_one'),
                Tables\Columns\TextColumn::make('section_three_description_one'),
                Tables\Columns\TextColumn::make('section_three_subtitle_two'),
                Tables\Columns\TextColumn::make('section_three_description_two'),
                Tables\Columns\TextColumn::make('section_three_subtitle_three'),
                Tables\Columns\TextColumn::make('section_three_description_three'),
                Tables\Columns\TextColumn::make('section_three_subtitle_four'),
                Tables\Columns\TextColumn::make('section_three_diagram_text_one'),
                Tables\Columns\TextColumn::make('section_three_diagram_text_two'),
                Tables\Columns\TextColumn::make('section_three_diagram_text_three'),
                Tables\Columns\TextColumn::make('section_three_diagram_text_four'),
                Tables\Columns\TextColumn::make('section_four_title'),
                Tables\Columns\TextColumn::make('section_four_subtitle_one'),
                Tables\Columns\TextColumn::make('section_four_description_one'),
                Tables\Columns\TextColumn::make('section_four_subtitle_two'),
                Tables\Columns\TextColumn::make('section_four_description_two'),
                Tables\Columns\TextColumn::make('section_four_subtitle_three'),
                Tables\Columns\TextColumn::make('section_four_description_three'),
                Tables\Columns\TextColumn::make('section_five_title'),
                Tables\Columns\TextColumn::make('section_five_description'),
                Tables\Columns\TextColumn::make('section_five_email'),
                Tables\Columns\TextColumn::make('section_five_text'),
                Tables\Columns\TextColumn::make('twitter_link'),
                Tables\Columns\TextColumn::make('github_link'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }    
}
