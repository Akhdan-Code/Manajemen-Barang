@extends('layouts.app')
@section('content')
<div style="margin: 20px">
    <h2>Daftar Barang</h2>
    <table style="border-collapse: collapse">
        <tr>
            <th>Nama Barang</th>
            <th>Jenis Barang</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Harga Satuan</th>
            <th><a href="{{ route('barangs.create')}}">Tambah Barang</a></th>
        </tr>
        @foreach ($barang as $barang)
            <tr>
                <td>{{ $barang->nama_barang}}</td>
                <td>{{ $barang->jenis_barang}}</td>
                <td>{{ $barang->stock}}</td>
                <td>{{ $barang->status}}</td>
                <td>{{ $barang->harga_satuan}}</td>
                <td style="text-align: center">
                    <a href="{{ route('barangs.edit',$barang->id)}}">Edit</a>
                    <form action="{{ route('barangs.destroy',$barang->id)}}"
                        method="POST" style="display:inline"
                        onsubmit="return confirm('Tindakan ini tidak bisa dibatalkan');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                    style="background:none border:none">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection