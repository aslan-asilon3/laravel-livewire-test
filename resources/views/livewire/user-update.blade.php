<div >

    {{-- ======== new edit modal  --}}
   <!-- Modal -->
   <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>

                <div class="form-group">

                    <input type="hidden" wire:model="user_id">

                    <label for="exampleFormControlInput1">Name</label>

                    <input type="text" class="form-control" wire:model="name" id="exampleFormControlInput1" placeholder="Enter Name">

                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror

                </div>

                <div class="form-group">

                    <label for="exampleFormControlInput2">Email address</label>

                    <input type="email" class="form-control" wire:model="email" id="exampleFormControlInput2" placeholder="Enter Email">

                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror

                </div>

            </form>

        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>

            <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
    {{-- ======== End new edit modal  --}}







    <!-- Modal -->


</div>