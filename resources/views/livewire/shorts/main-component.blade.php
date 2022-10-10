<div class="card">

    @if (Session::has('alert'))
        <x-session-status :alert="session('alert')" />
    @endif

    <div class="card-header">Create Short</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Country</label>
                    <select wire:model.lazy='short.country_id' type="text"
                        class="form-control @error('short.country_id') is-invalid @enderror">
                        <option>Select a country</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    @error('short.country_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input wire:model.lazy='short.thumbnail' type="file"
                        class="form-control @error('short.thumbnail') is-invalid @enderror">
                    @error('short.thumbnail')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-3">
                    <label class="form-label">Short ( Video )</label>
                    <input wire:model.lazy='short.link' type="file"
                        class="form-control @error('short.link') is-invalid @enderror">
                    @error('short.link')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div>
            <x-submit-button functionName='storeShort' message="Create Short" />
        </div>
    </div>
</div>
