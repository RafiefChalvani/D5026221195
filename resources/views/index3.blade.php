@extends('master3')
@section('title', 'Database Lampu')

@section('judul_halaman')
<h2>www.malasngoding.com</h2>
	<h3>Data lampu</h3>

	<a href="/lampu/tambah3"> + Tambah Lampu Baru</a>

	<br/>
	<br/>

@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Lampu</th>
			<th>Merk Lampu</th>
			<th>Stock Lampu</th>
			<th>Tersedia</th>
		</tr>
		@foreach($lampu as $p)
		<tr>
			<td>{{ $p->kodelampu }}</td>
			<td>{{ $p->merklampu }}</td>
			<td>{{ $p->stocklampu }}</td>
			<td>{{ $p->tersedia }}</td>
		</tr>
		@endforeach
	</table>
    {{ $lampu -> links() }}
    @endsection
