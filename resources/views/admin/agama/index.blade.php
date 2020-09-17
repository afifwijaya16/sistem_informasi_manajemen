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
              <button type="button" class="btn btn-md btn-info m-3" data-toggle="modal" data-target="#modal-default" data-backdrop="static" data-keyboard="false">
                  <i class="fa fa-plus"></i> Tambah
              </button>
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
                            <form action="{{ route('agama.destroy', $hasil->id) }}" method="POST">
                               
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" name="delete" type="submit" onclick="deleteFunction()">
                                  <i class="fa fa-archive"></i>
                                      Delete
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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        <button type="button" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
      </div>
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
        }
      })
  }
</script>

@endsection




 

 
  