@extends('pegawai.layout') @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sistem Informasi Pegawai</h2>
        </div>
        <div class="pull-right py-4">
            <a class="btn btn-success" href="{{ route('pegawai.create') }}">
                Tambah Pegawai</a
            >
        </div>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>Jabatan</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($pegawai as $p)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $p->nama_pegawai }}</td>
        <td>{{ $p->alamat_pegawai }}</td>
        <td>{{ $p->tanggal_lahir }}</td>
        <td>{{ $p->jabatan_pegawai }}</td>
        <td>
            <form action="{{ route('pegawai.destroy',$p->id) }}" method="POST">
                <a
                    class="btn btn-primary"
                    href="{{ route('pegawai.edit',$p->id) }}"
                    >Edit</a
                >
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
