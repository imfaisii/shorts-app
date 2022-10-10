<?php

namespace App\Http\Livewire\Countries;

use App\Models\Country;
use App\Traits\SessionStatusTrait;
use Exception;
use Livewire\Component;

class MainComponent extends Component
{
    use SessionStatusTrait;

    public $country;

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function rules()
    {
        return [
            'country.name' => ['required', 'unique:countries,name', 'max:255'],
            'country.lat' => ['required', 'numeric'],
            'country.long' => ['required', 'numeric'],
            'country.quotes' => ['required']
        ];
    }
    public function storeCountry()
    {
        $this->validate();

        try {
            Country::create($this->country);

            self::success("Country was created successfully.");
            $this->reset('country');
            $this->emit('refreshDatatable');
        } catch (Exception $exception) {
            self::error($exception->getMessage());
        }
    }
    
    public function render()
    {
        return view('livewire.countries.main-component');
    }
}
