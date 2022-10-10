@extends('layouts.app')

@section('content')
    <livewire:shorts.main-component />

    <div class="card mt-4">
        <div class="card-body">
            <livewire:table.shorts-table />
        </div>
    </div>
@endsection
