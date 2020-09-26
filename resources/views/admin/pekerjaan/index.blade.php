@extends('template_backend/home')
@section('sub-breadcrumb', 'Pekerjaan')
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
@include('admin/pekerjaan/js')
@endsection
