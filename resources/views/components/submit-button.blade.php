@props(['functionName', 'type' => 'primary', 'message' => 'Create'])

<button wire:target='{{ $functionName }}' wire:loading.attr='disabled' wire:click='{{ $functionName }}' type="submit"
    class="btn btn-primary">
    <span wire:loading.remove>{{ $message }}</span>
    <span wire:loading>
        <span class="spinner-border spinner-border-sm"></span>
        Please wait...
    </span>
</button>
