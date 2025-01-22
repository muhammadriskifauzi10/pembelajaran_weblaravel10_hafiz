@extends('layout.main')

@section('mycontents')
    <div>
        <h1>Ini halaman Produk</h1>

        {{-- data --}}
        <table border="1" cellspacing="0" cellpadding="10" width="100%" style="margin-top: 20px; text-align: center">
            <thead>
                <tr>
                    <th width="40">No</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Jumlah Produk</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data_sabun as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item['nama_produk'] }}</td>
                        <td>RP. {{ $item['harga'] }}</td>
                        <td>{{ $item['qty'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
