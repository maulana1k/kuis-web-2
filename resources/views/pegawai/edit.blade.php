@extends('pegawai.layout') @section('content')

<form action="{{ route('pegawai.update',$pegawai->id) }}" method="POST">
    @method('PUT') @csrf
    <div class="container">
        <div class="text-center mt-2">
            <h1>Tambah Data Pegawai</h1>
            <div class="pull-right">
                <a class="" href="{{ route('pegawai.store') }}"> Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nama">Nama </label>
                                                <input
                                                    id="nama"
                                                    type="text"
                                                    value="{{$pegawai->nama_pegawai}}"
                                                    name="nama_pegawai"
                                                    class="form-control"
                                                    placeholder="Masukkan nama "
                                                    required="required"
                                                    data-error="Firstname is required."
                                                />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jabatan"
                                                    >Jabatan</label
                                                >
                                                <input
                                                    id="jabatan"
                                                    type="text"
                                                    value="{{$pegawai->jabatan_pegawai}}"
                                                    name="jabatan_pegawai"
                                                    class="form-control"
                                                    placeholder="Masukkan jabatan"
                                                    required="required"
                                                    data-error="Lastname is required"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="tgl"
                                                    >Tanggal Lahir</label
                                                >
                                                <input
                                                    id="tgl"
                                                    type="date"
                                                    name="tanggal_lahir"
                                                    value="{{$pegawai->tanggal_lahir}}"
                                                    class="form-control"
                                                    placeholder="Please enter your email *"
                                                    required="required"
                                                    data-error="Valid email is required."
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message"
                                                    >Alamat</label
                                                >
                                                <textarea
                                                    id="form_message"
                                                    name="alamat_pegawai"
                                                    class="form-control"
                                                    placeholder="Write your message here."
                                                    rows="2"
                                                    required="required"
                                                    data-error="Please, leave us a message."
                                                    >{{$pegawai->alamat_pegawai}}</textarea
                                                >
                                            </div>
                                        </div>
                                        <div class="col-12 py-4">
                                            <input
                                                type="submit"
                                                class="btn btn-success btn-send pt-2 w-100"
                                                value="Send Message"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
