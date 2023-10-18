@extends('app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40%;">
            <div class="card-header">
                Edit Tamu
            </div>
            <div class="card-body">
                <form action="{{ url('admin/update-data') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama"
                            value="{{ $data->nama }}" required>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="telepon"
                        value="{{ $data->tlp }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" value="{{ $data->email }}">
                    </div>

                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" id="keperluan"
                            aria-describedby="keperluan" value="{{ $data->keperluan }}" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat/Instansi</label>
                        <textarea name="alamat" class="form-control" required>{{ $data->alamat }}</textarea>
                    </div>
                    <input type="hidden" value="{{ $data->id }}" name="id">

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
