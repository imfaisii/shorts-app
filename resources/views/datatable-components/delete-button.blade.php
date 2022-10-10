{{-- Create a delete function on table component and pass id to this component --}}

<button wire:click="delete('{{ $row->id }}')" wire:target='delete' wire:loading.attr='disabled'
    class="btn btn-danger">Delete</button>
