<?php

namespace App\Forms;

use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;

class OrderForm
{
    public function getFormSchema(): array
    {
        return [
            BelongsToSelect::make('customer_id')
                ->relationship('customer', 'id')
                ->searchable(['id']),
        ];
    }
}
