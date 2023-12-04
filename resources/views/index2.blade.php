@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilaikuliah/tambah2"> + Tambah Nilai Kuliah Baru</a>

	<br/>
	<br/>

@endsection

@section('konten')
	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->id }}</td>
			<td>{{ $p->nrp }}</td>
			<td>{{ $p->nilai_angka }}</td>
			<td>{{ $p->sks }}</td>
			<td>
                @if ($p->nilai_angka >= 81)
                       A
                    @elseif ($p->nilai_angka >= 61 && $p->nilai_angka <= 80)
                        B
                    @elseif ($p->nilai_angka >= 41 && $p->nilai_angka <= 60)
                        C
                    @elseif ($p->nilai_angka <= 40)
                        D
                    @else
                        Invalid grade
                @endif
			</td>
            <td>
                {{$p->nilai_angka * $p->sks}}
            </td>
            </tr>
		</tr>
		@endforeach
	</table>
    {{ $nilaikuliah -> links() }}
    @endsection
