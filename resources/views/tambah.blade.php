@extends('master')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class = "form-horizontal">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Pegawai">
            </div>
         </div>
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
               <input name="jabatan" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Jabatan">
            </div>
         </div>
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
               <input name="umur" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Umur">
            </div>
         </div>
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
               <input name="alamat" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Alamat">
            </div>
         </div>
		<input type="submit" value="OK">
	</form>



</body>
</html>
@endsection
