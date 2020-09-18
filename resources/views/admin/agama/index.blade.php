@extends('template_backend/home')
@section('sub-breadcrumb', 'Agama')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
               Data agama
            </div>
            <div class="card-body">
              <button type="button" class="btn btn-xs btn-info float-right" data-toggle="modal" data-target="#modal-tambah" data-backdrop="static" data-keyboard="false">
                  <i class="fa fa-plus"></i> Tambah
              </button>
            </div>
            <div class="card-body">
             
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($agama as $result => $hasil)
                    <tr>
                        <td>{{ ++$result }}</td>
                        <td>{{ $hasil->agama }}</td>
                        <td>
                            <form action="{{ route('agama.destroy', $hasil->id) }}" role="form" method="POST">
                                <a href=""></a>
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" name="delete" type="submit" onclick="deleteFunction()">
                                  <i class="fa fa-trash"></i>
                              </button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
              </table>
            </div>
        </div>
    </div>
</div>

@include('admin/agama/tambah')

<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data @yield('sub-breadcrumb')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('agama.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputAgama">Agama</label>
                        <input type="text" class="form-control form-control-sm @error('agama') is-invalid @enderror"
                            id="inputAgama" name="agama" placeholder="Masukan Agama">
                        @error('agama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                        Tutup</button>
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
  function deleteFunction() {  
    event.preventDefault(); 
    var form = event.target.form; 
    Swal.fire({
        title: 'Apakah anda yakin menghapus ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
      if(result.isConfirmed) {
        form.submit();
        return false; 
      }
    })
  }
</script>
@if (session('status'))
    <script>
       Swal.fire({
          icon: 'success',
          title: '{{ session('status') }}',
        })
    </script>
@endif
@endsection




 

 
  