
<div class="table-responsive">
    <table class="table table-bordered table-striped" width="100%">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th width="20%">Kode Kecamatan</th>
                <th width="30%">Nama Kecamatan</th>
                <th width="30%">Kabupaten</th>
                <th width="30%">Provinsi</th>
                <!-- <th width="25%">Aksi</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($kecamatan as $result => $hasil)
            <tr class="table-sm">
                <td class="text-center">{{ $result + $kecamatan->firstitem() }}</td>
                <td class="text-center">{{ $hasil->kode_kec }}</td>
                <td class="text-center">{{ $hasil->nama_kecamatan }}</td>
                <td class="text-center">{{ $hasil->nama_kabkot }}</td>
                <td class="text-center">{{ $hasil->nama_provinsi }}</td>
                
            </tr>
            @endforeach
    </table>
    <div class="float-right">
        {{ $kecamatan->links() }}
    </div>
</div>
