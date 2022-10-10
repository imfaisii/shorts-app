<?php

namespace App\Http\Livewire\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Country;

class CountriesTable extends DataTableComponent
{
    protected $model = Country::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(Country $country)
    {
        $country->delete();

        $this->emit('refreshDatatable');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->searchable()
                ->sortable(),
            Column::make("Lat", "lat")
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Long", "long")
                ->searchable()
                ->collapseOnMobile(),
            Column::make("Created at", "created_at")
                ->format(
                    fn ($row) => $row->format('d-M-Y')
                )
                ->sortable(),
            Column::make('Action', 'id')->view('datatable-components.delete-button')
        ];
    }
}
