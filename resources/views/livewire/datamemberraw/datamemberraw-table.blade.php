<div>


    <div class="card">
        <div class="card-header">
        {{-- <h3 class="card-title">Bordered Table</h3> --}}
            
                <button wire:click="render" type="button" class="btn btn-primary btn-lg"><i class="fa-solid fa-circle-plus fa-beat" style="--fa-beat-scale: 0.5;"></i> Add</button>
                <button type="button" class="btn btn-success btn-lg"><i class="fa-solid fa-file-export fa-beat" style="--fa-beat-scale: 0.5;"></i> Export</button>
                <button type="button" class="btn btn-warning btn-lg text-white"><i class="fa-solid fa-file-import fa-beat " style="--fa-beat-scale: 0.5;"></i> Import</button>
                {{-- <button type="button" class="btn btn-warning btn-lg"><i class="fa-solid fa-file-import fa-beat" style="--fa-beat-scale: 0.5;"></i> Import</button> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table class="table table-bordered text-center">
        <thead>
            <th><strong>ID Member</strong></th>
            <th><strong>No HP</strong></th>
            <th><strong>Status Cek Data</strong></th>
        </thead>
        <tbody>

            @if (count($datamemberraws ) > 0)
            @foreach ($datamemberraws as $datamemberraw)
        <tr>
            <td>{{$datamemberraw->id_member}}</td>
            <td>{{$datamemberraw->no_hp}}</td>
            <td>{{$datamemberraw->status_cek_data}}</td>
            <td>                
                <a class="btn btn-app btn-primary"><i class="fas fa-eye fa-beat" style="--fa-beat-scale: 0.5;"></i></a>
                {{-- <button class="btn btn-app btn-success" wire:click="edit({{$datamembers ?? ''->id}})"><i class="fas fa-edit fa-beat" style="--fa-beat-scale: 0.5;"></i></button> --}}
                {{-- <button wire:click="destroy({{$datamember->id}})" class="btn btn-app btn-danger" ><i class="fas fa-trash fa-beat" style="--fa-beat-scale: 0.5;"></i></button> --}}
                {{-- <a href="/datamember-delete/{id}"  class="btn btn-app btn-danger" ><i class="fas fa-trash fa-beat" style="--fa-beat-scale: 0.5;"></i></a> --}}
                {{-- <button class="btn btn-app btn-success" ><i class="fas fa-edit fa-beat" style="--fa-beat-scale: 0.5;"></i></button> --}}
                <button wire:click="edit({{$datamemberraw->id}})" class="btn btn-xs btn-warning">Edit</button>
                <button wire:click="destroy({{$datamemberraw->id}})" class="btn btn-xs btn-danger">Del</button>
            </td>
        </tr>
        @endforeach
        @else
            <tr>
                <td colspan="3" align="center">
                    No Data Member Raw Found.
                </td>
            </tr>
        @endif
        </tbody>
     </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
        </div>


        @livewire('datamemberraw.datamemberraw-create')
    </div>
    <!-- /.card -->



</div>
