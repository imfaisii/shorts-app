@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('Dashboard') }}</h2>
                            <p>Your api call token is : <span class="badge bg-success">{{ $token }}</span></p>
                            <div>
                                <h5>Request Header #1 => Accept: application/json</h5>
                                <h5>Request Header #2 => Authorization: Bearer {{ $token }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
