@extends('layout')

{{-- @section('content')
    <h1>DAFTAR MAHASISWA</h1>
    <a style="float:right" href="{{ route('biodata.create') }}" class="btn btn-info">Tambah</a>
    <a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
    <table style="margin-top:30px;" class="table table-striped table-hover" id="datatable">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ALAMAT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($html as $data)
                <tr>
               
                <td>
                <a href="{{ route('biodata.show', ['id' => $data->id]) }}" class="btn btn-success">Detail</a>
                <a href="{{ route('biodata.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('biodata.destroy', ['id'=> $data->id]) }}" onclick="return confirm('Yakin mau dihapus ?')" class="btn btn-danger">Delete</a>
                </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Data Belum Tersedia!</td>
                </tr>
            @endforelse
        </tbody>
    </table>  
@endsection --}}

@push("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endpush

@section("content")

        <h1>Daftar Mahasiswa</h1>
        <a href="{{ route('biodata.create') }}" class="btn btn-info">Tambahkan</a><br><br>
        <a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        {!!$html->table()!!}

   
@endsection("content")

@push("script")
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    {!! $html->scripts() !!}
@endpush


