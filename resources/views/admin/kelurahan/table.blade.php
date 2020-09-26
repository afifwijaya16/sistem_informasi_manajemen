
<div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Kode Kelurahan</th>
                <th width="30%">Nama Kelurahan</th>
                <th width="30%">Kecamatan</th>
                <!-- <th width="25%">Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($kelurahan as $result => $hasil)
            <tr class="table-sm">
                <td class="text-center">{{ $result + $kelurahan->firstitem() }}</td>
                <td class="text-center">{{ $hasil->kode_kelurahan }}</td>
                <td class="text-center">{{ $hasil->nama_kelurahan }}</td>
                <td class="text-center">{{ $hasil->nama_kecamatan }}</td>
            </tr>
            @endforeach
    </table>
    <div class="float-right">
        {{ $kelurahan->links() }}
    </div>
</div>
