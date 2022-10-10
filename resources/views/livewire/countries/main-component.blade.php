<div class="card">

    @if (Session::has('alert'))
        <x-session-status :alert="session('alert')" />
    @endif

    <div class="card-header">Create Place</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input wire:model.lazy='country.name' type="text"
                        class="form-control @error('country.name') is-invalid @enderror" placeholder="Egypt">
                    @error('country.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Latitude</label>
                    <input wire:model.lazy='country.lat' type="text"
                        class="form-control @error('country.lat') is-invalid @enderror" placeholder="99.42112">
                    @error('country.lat')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Longitude</label>
                    <input wire:model.lazy='country.long' type="text"
                        class="form-control @error('country.long') is-invalid @enderror" placeholder="99.42112">
                    @error('country.long')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Quotes</label>
                    <textarea wire:model.lazy='country.quotes' type="text"
                        class="form-control @error('country.quotes') is-invalid @enderror" placeholder="Country we live in..."></textarea>
                    @error('country.quotes')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div>
            <x-submit-button functionName='storeCountry' message="Create Country" />
        </div>
    </div>
</div>
