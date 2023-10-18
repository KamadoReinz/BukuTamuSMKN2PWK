<!doctype html>
<html lang="en">

<head>
    <title>Buku Tamu - SMKN 2 Purwakarta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Aplikasi Buku Tamu SMKN 2 Purwakarta</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url({{ url('frontend/images/bg-1.jpg') }});">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Form Buku Tamu</h3>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ url('simpan-bukutamu') }}" method="POST" class="signin-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Silakan isi nama Anda" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="telepon">Telepon</label>
                                    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Silakan isi telepon Anda" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Silakan isi email Anda" autocomplete="email">
									<p>Catatan : Tidak Wajib</p>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="keperluan">Keperluan</label>
                                    <input type="text" name="keperluan" id="keperluan" class="form-control" placeholder="Silakan isi keperluan Anda" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="label" for="alamat">Alamat/Instansi</label>
                                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Silakan isi alamat/instansi Anda" cols="3"></textarea>
									<p>Contoh : SMKN 2 Purwakarta</p>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Simpan</button>
                                </div>

                            </form>
                            @if (Session::has('message'))
                                <script>
                                    swal("Message", "{{ Session::get('message') }}", 'success', {
                                        button:true,
                                        button:"OK",
                                        timer:3000,
                                    });
                                </script>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/js/popper.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>

</body>

</html>
