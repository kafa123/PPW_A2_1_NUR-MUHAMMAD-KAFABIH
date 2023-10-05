@extends('layouts.master')
@section('title','gudang barang')
@section('content')
<div class="p-4">
    <table class="table ">
        <thead>
          <tr>
            <th scope="col">no</th>
            <th scope="col">nama barang</th>
            <th scope="col">harga</th>
            <th scope="col">stok</th>
            <th scope="col">id supplier</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_barang}}</td>
                <td>{{"Rp".number_format($item->harga,2,',','.')}}</td>
                <td>{{$item->stok}}</td>
                <td>{{$item->id_supplier}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@include('components.footer')
@endsection
