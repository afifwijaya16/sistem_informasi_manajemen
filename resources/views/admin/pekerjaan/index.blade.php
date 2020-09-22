@extends('template_backend/home')
@section('sub-breadcrumb', 'pekerjaan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Data Pekerjaan
            </div>
            <div class="card-body">
                <button type="button" class="btn btn-xs btn-info float-right" data-toggle="modal"
                    data-target="#modal-tambah" data-backdrop="static" data-keyboard="false">
                    <i class="fa fa-plus"></i> Tambah
                </button>
            </div>
            <div class="card-body">
                @include('admin/pekerjaan/table')
            </div>
        </div>
    </div>
</div>

@include('admin/pekerjaan/tambah')
@include('admin/pekerjaan/edit')

<script>
    function editFunction($id) {
        const formEdit      = 'form-edit-' + $id;
        var element         = document.getElementById(formEdit);
        var dataId          = element.getAttribute('data-id');
        var datapekerjaan       = element.getAttribute('data-pekerjaan');
        document.getElementById("EditInputId").value = dataId;
        document.getElementById("EditInputpekerjaan").value = datapekerjaan;
    }   

    function deleteFunction($id) {
        event.preventDefault();
        const form = 'form-delete-' + $id;
        Swal.fire({
            title: 'Apakah anda yakin menghapus ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(form).submit();
            }
        }).catch((error) => {
            console.log(error);
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
