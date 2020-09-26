<form action="{{ route('pekerjaan.search') }}" class="form-horizontal my-2" method="get">
    <div class="form-group row">
        <label class="col-md-1 col-form-label">Pencarian</label>
        <div class="col-md-5">
            <input class="form-control form-control-sm" name="search" placeholder="Pencarian ..."  value="{{ request('search') }}">
        </div>
    </div>
</form>
<div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="70%">Pekerjaan</th>
                <th width="25%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pekerjaan as $result => $hasil)
            <tr class="table-sm">
                <td class="text-center">{{ $result + $pekerjaan->firstitem() }}</td>
                <td class="text-center">{{ $hasil->pekerjaan }}</td>
                <td class="text-center">
                    <form action="{{ route('pekerjaan.destroy', $hasil->id) }}" id="form-delete-{{ $hasil->id}}" role="form"
                        method="POST">
                        <a href=""></a>
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-sm btn-warning" id="form-edit-{{ $hasil->id}}"
                            onclick="editFunction({{ $hasil->id}})" data-id="{{ $hasil->id }}"
                            data-pekerjaan="{{ $hasil->pekerjaan }}" data-toggle="modal" data-target="#modal-edit"
                            data-backdrop="static" data-keyboard="false">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" name="delete" type="submit"
                            onclick="deleteFunction({{ $hasil->id}})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if ($pekerjaan->count() == 0)
            <tr>
                <td class="text-center" colspan="3">Pencarian Tidak Ditemukan</td>
            </tr>
            @endif
    </table>
    <div class="float-right">
        {{ $pekerjaan->links() }}
    </div>
</div>
