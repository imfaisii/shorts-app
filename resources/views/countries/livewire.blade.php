@extends('layouts.app')

@section('content')
    <livewire:countries.main-component />

    <div class="card mt-4">
        <div class="card-body">
            <livewire:table.countries-table />
        </div>
    </div>
@endsection
