<?php

namespace App\Http\Livewire;

use App\Forms\OrderForm;
use App\Models\Order;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class FilamentFormsRequestLoop extends Component implements HasForms
{
    use InteractsWithForms;

    public function mount()
    {
        $this->form->fill([
            'customer_id' => 1
        ]);
    }

    public function render()
    {
        return view('livewire.filament-forms-request-loop');
    }

    public function getFormSchema()
    {
        return (new OrderForm())->getFormSchema();
    }

    public function getFormModel(): string
    {
        return Order::class;
    }
}
