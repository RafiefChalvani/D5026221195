@extends('master5')

@section('title', 'Kategori')

@section('konten')
<form action="/kategori/hasil" method="POST">
    @csrf
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            @foreach($kategori as $kat)
                <option
                    value="{{ $kat->ID }}">{{ $kat->Nama }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">KIRIM</button>
</form>
@endsection
