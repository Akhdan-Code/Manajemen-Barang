@extends('layouts.app')
@section('content')
<div style="margin:20px;">
    <form action="{{ route('barangs.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table>
            <tr>
                <td><label for="nama_barang">Nama Barang</label></td>
                <td><input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required></td>
            </tr>
            <tr>
                <td><label for="jenis_barang">Jenis Barang</label></td>
                <td><input type="text" name="jenis_barang" value="{{ $barang->jenis_barang }}" required></td>
            </tr>
            <tr>
                <td>
                    <label for="stock">Stock</label>
                </td>
                <td>
                    <input type="number" name="stock" value="{{ $barang->stock }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="status">Status</label>
                </td>
                <td>
                    <select name="status">
                        <option value="Ada" {{ $barang->status === 'Ada' ? 'selected' : '' }}>Ada</option>
                        <option value="Tidak Ada" {{ $barang->status === 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga_satuan">Harga Satuan</label>
                </td>
                <td>
                    <input type="number" name="harga_satuan" value="{{ $barang->harga_satuan }}" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:right;">
                    <button type="submit">Update Barang</button>
                </td>
            </tr>
        </table>
    </form>
    