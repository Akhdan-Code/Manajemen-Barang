@extends('layouts.app')
@section('content')
<div style="margin:20px;">
    <h2>Buat Barang Baru</h2>
    <form action="{{ route('barangs.store')}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>
                <label for="nama_barang">Nama Barang</label>
            </td>
            <td>
                <input type="text" name="nama_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jenis_barang">Jenis Barang</label>
            </td>
            <td>
                <input type="text" name="jenis_barang" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">Stock</label>
            </td>
            <td>
                <input type="number" name="stock">
            </td>
        </tr>
        <tr>
            <td>
                <label for="status">Status</label>
            </td>
            <td>
                <select name="status">
                    <option value="Ada">Ada</option>
                    <option value="Tidak Ada">Tidak Ada</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="harga_satuan">Harga Satuan</label>
            </td>
            <td>
                <input type="number" name="harga_satuan" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right;">
                <button type="submit">Tambah Barang</button>
            </td>
        </tr>
    </table>
    </form>
</div>
@endsection