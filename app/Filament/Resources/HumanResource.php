<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HumanResource\Pages;
use App\Filament\Resources\HumanResource\RelationManagers;
use App\Models\Human;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteAction;

use Umpirsky\Countries\Countries;

class HumanResource extends Resource
{


    protected static ?string $model = Human::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {

        $countries = json_decode(file_get_contents(base_path('vendor/umpirsky/country-list/data/en/country.json')), true);

        return $form
            ->schema([
                TextInput::make('name')
                    ->label('সম্পুন্য নাম / Name')
                    ->minLength(2)
                    ->maxLength(255)
                    ->required(),

                // TextInput::make('country')
                //     ->label('বর্তমানে যে দেশে আছেন / Country')
                //     ->minValue(2)
                //     ->maxValue(100)
                //     ->required(),

                Select::make('country')
                ->label('বর্তমানে যে দেশে আছেন / Country')
                ->options(array_combine($countries, $countries)) // Use country name as both the key and value
                ->searchable()
                ->required(),


                    TextInput::make('education')
                    ->label('বিশ্ববিদ্যালয় বা প্রতিষ্ঠান ১ / University or Organization 1')
                    ->minValue(2)
                    ->maxValue(100)
                    ->required(),

                    TextInput::make('organization2')
                    ->label('বিশ্ববিদ্যালয় বা প্রতিষ্ঠান ২ / University or Organization 2')
                    ->minValue(2)
                    ->maxValue(100),

                TextInput::make('job')
                    ->label('আপনি একজন / Your Job')
                    ->minValue(2)
                    ->maxValue(100)
                    ->required(),

                TextInput::make('Area_of_experties')
                    ->label('আপনি কোন কাজে দক্ষ্য / Your Expertise')
                    ->minValue(2)
                    ->maxValue(100)
                    ->required(),



                // RichEditor::make('organization')
                //     ->label('বর্তমানে যে প্রতিষ্ঠানে আছেন / Organization')
                //     ->columnSpan(2)
                //     ->required(),

                TextInput::make('working_interest')
                    ->label('আপনি কোন ফিল্ডে কাজ করতে চান / Your working interest')
                    ->minValue(2)
                    ->maxValue(100)
                    ->required(),

                // TextInput::make('designation')
                //     ->label('বর্তমান পদবি / Designation ')
                //     ->minValue(2)
                //     ->maxValue(100)
                //     ->required(),

                // RichEditor::make('experience')
                //     ->label('পূর্বের কাজের অভিজ্ঞতা / Pre Work Experience')
                //     ->columnSpan(2)
                //     ->required(),

                RichEditor::make('motivation')
                    ->label('যুক্ত হওয়ার মোটিভেশন কি বিস্তারিত লিখুন / What is your motivations write here')
                    ->columnSpan(2)
                    ->required(),

                // RichEditor::make('achievements')
                //     ->label('এখন পর্যন্ত অর্জন / What is your achievements')
                //     ->columnSpan(2)
                //     ->required(),

                // RichEditor::make('leadership_Experience')
                //     ->label('নেতা হিসেবে কাজ করার অভিজ্ঞতা / Leadership Experience')
                //     ->columnSpan(2)
                //     ->required(),

                // Select::make('gender')
                //     ->label('লিঙ্গ / Gender')
                //     ->options([
                //         'male' => 'male',
                //         'female' => 'female',
                //     ]),

                TextInput::make('fb_url')
                    ->label('FB url')
                    ->url()
                    ->minLength(2)
                    ->maxLength(255),

                TextInput::make('linkdin_url')
                    ->label('linkdin url')
                    ->url()
                    ->minLength(2)
                    ->maxLength(255),

                TextInput::make('fb_post')
                    ->label('ফেছবুকে দেয়া আসল পোষ্ট')
                    ->url()
                    ->minLength(2)
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('নাম')->searchable(),
                TextColumn::make('country')->label('বর্তমান দেশ'),
                // TextColumn::make('organization')->label('বর্তমান প্রতিষ্ঠান'),

            ])
            ->filters([
                //
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
            'index' => Pages\ListHumans::route('/'),
            // 'create' => Pages\CreateHuman::route('/create'),
            // 'edit' => Pages\EditHuman::route('/{record}/edit'),
        ];
    }
}
