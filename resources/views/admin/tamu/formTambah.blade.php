@extends('app')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 40%;">
            <div class="card-header">
                Tambah Tamu
            </div>
            <div class="card-body">
                <form action="{{ url('admin/simpan-data') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control" name="telepon" id="telepon" aria-describedby="telepon"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="email">
                        <small id="emailHelp" class="form-text text-muted">Catatan : Tidak Wajib</small>
                    </div>

                    <div class="form-group">
                        <label for="keperluan">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" id="keperluan"
                            aria-describedby="keperluan" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat/Instansi</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                        <small id="emailHelp" class="form-text text-muted">Contoh : SMKN 2 Purwakarta</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
