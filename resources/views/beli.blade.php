@extends('master4')
@section('judulhalaman', 'Data Belanja')

@section('konten')
    <h3>Keranjang Belanja</h3>

    <a class="btn btn-danger mb-md-3" href="/keranjangbelanja"> Kembali</a>
    <div class="container">
        <form action="/keranjangbelanja/store" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="kodebarang" class="control-label col-sm-2">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodebarang" name="kodebarang">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-form-label col-sm-2">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-form-label col-sm-2">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
            </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>


@endsection
