<div>
        {{-- ============ Edit Data member --}}
    {{-- <form > --}}
        <form wire:click.prevent="update()">
            <input type="hidden" wire:model="id">
            <div class="form-group mb-3">
                <label for="idMember">ID Member :</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="idMember" placeholder="Enter Id member" wire:model="id_member">
                @error('id_member') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group mb-3">
                <label for="noHp">No HP :</label>
                <input class="form-control @error('no_hp') is-invalid @enderror" id="noHp" wire:model="no_hp" placeholder="Enter No HP">
                @error('no_hp') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-block">Save</button>
                {{-- <button wire:click="$set('edit', {{ $datamembers->id }})">Edit</button> --}}
                <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
            </div>
        </form>
        {{-- ============ End Edit Data member --}}
</div>
