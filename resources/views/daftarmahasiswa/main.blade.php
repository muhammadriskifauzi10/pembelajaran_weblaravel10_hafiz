@extends('layout.main')

@section('mycontents')
    <div>
        <h1>Ini halaman Daftar Mahasiswa</h1>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data_mahasiswa as $row)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->nama_mahasiswa }}</td>
                        <td>{{ $row->umur }}</td>
                        <td>{{ $row->jenis_kelamin }}</td>
                        <td>{{ $row->jurusan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
