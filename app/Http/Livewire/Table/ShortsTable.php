<?php

namespace App\Http\Livewire\Table;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Short;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class ShortsTable extends DataTableComponent
{
    protected $model = Short::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function delete(Short $short)
    {
        $short->delete();

        $this->emit('refreshDatatable');
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")
                ->sortable(),
            Column::make("User id", "user.name")
                ->sortable(),
            Column::make("Country id", "country.name")
                ->sortable(),
            Column::make('Image', 'thumbnail')->view('datatable-components.image-component'),
            Column::make("Created at", "created_at")
                ->format(
                    fn ($row) => $row->format('d-M-Y')
                )
                ->sortable(),
            Column::make('Action', 'id')->view('datatable-components.delete-button')
        ];
    }
}
