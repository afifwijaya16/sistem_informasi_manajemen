
<div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Kode Kabupaten</th>
                <th width="50%">Nama Kabupaten</th>
                <th width="50%">Provinsi</th>
                <!-- <th width="25%">Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($kabupaten as $result => $hasil)
            <tr class="table-sm">
                <td class="text-center">{{ $result + $kabupaten->firstitem() }}</td>
                <td class="text-center">{{ $hasil->kode_kabkot }}</td>
                <td class="text-center">{{ $hasil->nama_kabkot }}</td>
                <td class="text-center">{{ $hasil->nama_provinsi }}</td>
                <!-- <td class="text-center">
                    <form action="{{ route('kabupaten.destroy', $hasil->id) }}" id="form-delete-{{ $hasil->id}}" role="form"
                        method="POST">
                        <a href=""></a>
                        @csrf
                        @method('delete')
                        <button type="button" class="btn btn-sm btn-warning" id="form-edit-{{ $hasil->id}}"
                            onclick="editFunction({{ $hasil->id}})" data-id="{{ $hasil->id }}"
                            data-kabupaten="{{ $hasil->kabupaten }}" data-toggle="modal" data-target="#modal-edit"
                            data-backdrop="static" data-keyboard="false">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" name="delete" type="submit"
                            onclick="deleteFunction({{ $hasil->id}})">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td> -->
            </tr>
            @endforeach
    </table>
    <div class="float-right">
        {{ $kabupaten->links() }}
    </div>
</div>
