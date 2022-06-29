<div>

    <form wire:click.prevent="store()">
        <div class="form-group mb-3">
            <label for="idMember">Id Member:</label>
            <input type="text" class="form-control @error('id_member') is-invalid @enderror" id="idMember" placeholder="Enter Id Member" wire:model="id_member">
            @error('id_member') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group mb-3">
            <label for="noHp">No HP:</label>
            <input class="form-control @error('no_hp') is-invalid @enderror" id="noHp" wire:model="no_hp" placeholder="Enter No Hp">
            @error('no_hp') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-success btn-block">Save</button>
        </div>
    </form>

</div>


