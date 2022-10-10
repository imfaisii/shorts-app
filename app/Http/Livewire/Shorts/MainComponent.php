<?php

namespace App\Http\Livewire\Shorts;

use App\Models\Country;
use App\Traits\SessionStatusTrait;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class MainComponent extends Component
{
    use WithFileUploads, SessionStatusTrait;

    public $countries, $short;

    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function rules()
    {
        return [
            'short.country_id' => ['required', 'exists:countries,id'],
            'short.thumbnail' => ['required', 'image'],
            'short.link' => ['required', 'mimes:mp4,mov,ogg,qt,mkv', 'max:20000']
        ];
    }

    public function storeShort()
    {
        $this->validate();

        $this->short['thumbnail'] = $this->short['thumbnail']->store('thumbnails');
        $this->short['link'] = $this->short['link']->store('videos');

        try {
            auth()->user()->shorts()->create($this->short);

            self::success("Short was created successfully.");
            $this->reset('short');
            $this->emit('refreshDatatable');
        } catch (Exception $exception) {
            self::error($exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.shorts.main-component');
    }
}
