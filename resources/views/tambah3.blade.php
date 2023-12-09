@extends('master3')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Lampu</h3>

	<a href="/lampu"> Kembali</a>

	<br/>
	<br/>

	<form action="/lampu/store" method="post" class = "form-horizontal" role="form">
		{{ csrf_field() }}
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Merk Lampu</label>
            <div class = "col-sm-10">
               <input name="merklampu" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Merk Lampu">
            </div>
         </div>
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Stock Lampu</label>
            <div class = "col-sm-10">
               <input name="stocklampu" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Stock Lampu">
            </div>
         </div>
         <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-10">
               <input name="tersedia" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Tersedia">
            </div>
         </div>
		<input type="submit" value="Submit Nilai" class="btn btn-primary">
	</form>
</body>
</html>
@endsection
