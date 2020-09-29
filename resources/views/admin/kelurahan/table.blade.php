
<div class="row">
    <div class="form-group col-md-3">
        <label>Provinsi</label>
        <select class="form-control js-example-basic-1" id="org">
            <option disabled selected> Pilih Provinsi </option>
            @foreach ($provinsi as $p)
                <option value="{{ $p->kode_wilayah }}" >{{ $p->nama_provinsi }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-4">
        <label>Kabupaten</label>
        <select class="form-control js-example-basic-2" id="jabatan_organisasix">
            <option selected> Pilih Kabupaten </option>
            @foreach ($kabupaten as $kab)
                <option value="{{ $kab->kode_kabkot }}" class="<?=$kab->provinsi_id?>">{{ $kab->nama_kabkot }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-3">
        <label>Kecamatan</label>
        <select class="form-control js-example-basic-3" id="kecamatansix">
            <option selected> Pilih Kecamatan </option>
            @foreach ($kecamatan as $kec)
            <option value="{{ $kec->kode_kec }}" class="<?=$kec->kabupaten_id?>">{{ $kec->nama_kecamatan }}</option>
            @endforeach
        </select>
    </div>
</div>

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
            
    </table>
    <div class="float-right">
        
    </div>
</div>
