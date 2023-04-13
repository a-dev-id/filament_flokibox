<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
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

                Section::make('General')
                    ->schema([
                        Forms\Components\TextInput::make('page_name'),
                        Forms\Components\TextInput::make('twitter_link'),
                        Forms\Components\TextInput::make('github_link'),
                        Forms\Components\TextInput::make('telegram_link'),
                        FileUpload::make('logo')
                    ]),

                Section::make('Navigation section')
                    ->schema([

                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('button_whitepaper_text')->label('Button text'),
                                Forms\Components\TextInput::make('button_whitepaper_link')->label('Button link'),
                                Forms\Components\TextInput::make('button_telegram_text')->label('Button text'),
                                Forms\Components\TextInput::make('button_telegram_link')->label('Button link'),
                            ]),

                        Grid::make(1)
                            ->schema([
                                Forms\Components\TextInput::make('nav_bg_color')->label('Background color'),
                            ]),

                    ]),

                Section::make('Header section')
                    ->schema([
                        Forms\Components\TextInput::make('title')->label('Text 1'),
                        Forms\Components\TextInput::make('subtitle')->label('Text 2'),
                        RichEditor::make('description')->label('Text 3'),
                        Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('button_join_comunity_text')->label('Button text'),
                                Forms\Components\TextInput::make('button_join_comunity_link')->label('Button link'),
                                Forms\Components\TextInput::make('button_buy_token_text')->label('Button text'),
                                Forms\Components\TextInput::make('button_buy_token_link')->label('Button link'),
                            ]),
                        Grid::make(1)
                            ->schema([
                                Forms\Components\TextInput::make('header_bg_color')->label('Background color'),
                            ]),
                    ]),


                Section::make('First section')
                    ->schema([
                        Forms\Components\TextInput::make('section_one_title')->label('Text 1'),
                        Forms\Components\TextInput::make('section_one_subtitle')->label('Text 2'),
                        Forms\Components\TextInput::make('section_one_bg_color')->label('Background color'),
                    ]),

                Section::make('Second section')
                    ->schema([
                        Forms\Components\TextInput::make('section_two_title')->label('Section title'),
                        Forms\Components\TextInput::make('section_two_subtitle_one')->label('Subtitle 1'),
                        RichEditor::make('section_two_description_one')->label('Description 1'),
                        Forms\Components\TextInput::make('section_two_subtitle_two')->label('Subtitle 2'),
                        RichEditor::make('section_two_description_two')->label('Description 2'),
                    ]),

                Section::make('Third section')
                    ->schema([
                        Forms\Components\TextInput::make('section_three_title')->label('Section title'),
                        Forms\Components\TextInput::make('section_three_subtitle_one')->label('Subtitle 1'),
                        RichEditor::make('section_three_description_one')->label('Description 1'),
                        Forms\Components\TextInput::make('section_three_subtitle_two')->label('Subtitle 2'),
                        RichEditor::make('section_three_description_two')->label('Description 2'),
                        Forms\Components\TextInput::make('section_three_subtitle_three')->label('Subtitle 3'),
                        RichEditor::make('section_three_description_three')->label('Description 3'),
                        Forms\Components\TextInput::make('section_three_subtitle_four')->label('Subtitle 4'),
                        Forms\Components\TextInput::make('section_three_diagram_text_one')->label('Diagram 1'),
                        Forms\Components\TextInput::make('section_three_diagram_text_two')->label('Diagram 2'),
                        Forms\Components\TextInput::make('section_three_diagram_text_three')->label('Diagram 3'),
                        Forms\Components\TextInput::make('section_three_diagram_text_four')->label('Diagram 4'),
                        Forms\Components\TextInput::make('section_three_bg_color')->label('Background color'),
                    ]),

                Section::make('Fourth section')
                    ->schema([
                        Forms\Components\TextInput::make('section_four_title')->label('Section title'),
                        Forms\Components\TextInput::make('section_four_subtitle_one')->label('Subtitle 1'),
                        RichEditor::make('section_four_description_one')->label('Description 1'),
                        Forms\Components\TextInput::make('section_four_subtitle_two')->label('Subtitle 2'),
                        RichEditor::make('section_four_description_two')->label('Description 2'),
                        Forms\Components\TextInput::make('section_four_subtitle_three')->label('Subtitle 3'),
                        RichEditor::make('section_four_description_three')->label('Description 3'),
                        Forms\Components\TextInput::make('section_four_bg_color')->label('Background color'),
                    ]),

                Section::make('Fifth section')
                    ->schema([
                        Forms\Components\TextInput::make('section_five_title')->label('Section title'),
                        RichEditor::make('section_five_description')->label('Description'),
                        Forms\Components\TextInput::make('section_five_email')->label('Email'),
                        Forms\Components\TextInput::make('section_five_text')->label('Text'),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_name'),
                
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
