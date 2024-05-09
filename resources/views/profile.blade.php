<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
          <div class="d-flex justify-content-center">
            <a href="{{route('admin_page', ['user' => $user->id])}}" class="btn btn-md btn-success mt-3">Kembali ke Halaman Admin</a>
          </div>
            <div class="col-md-5 offset-1 rounded my-lg-5 px-3 py-3 me-3" style="border: 3px solid black">
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <p class="fw-bold">Nama Akun</p>
                        <p class="fw-bold">Email</p>
                        <p class="fw-bold">Gender</p>
                        <p class="fw-bold">Umur</p>
                        <p class="fw-bold">Tanggal Lahir</p>
                        <p class="fw-bold">Alamat</p>
                    </div>
                    <div>
                        <p class="">{{ $user->name }}</p>
                        <p class="">{{ $user->email }}</p>
                        <p class="">{{ $user->gender }}</p>
                        <p class="">{{ $user->age }} tahun</p>
                        <p class="">{{ $user->birth }}</p>
                        <p class="">{{ $user->alamat }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 rounded my-lg-5 px-3 py-3" style="border: 3px solid black">
                <div class="d-flex justify-content-between">
                    <div class="w-50">
                        <p class="fw-bold">Nama Toko</p>
                        <p class="fw-bold">Rate</p>
                        <p class="fw-bold">Produk Terbaik</p>
                        <p class="fw-bold">Deskripsi</p>
                    </div>
                    <div>
                        <p class="">{{ $user->summarize->merchant_name }}</p>
                        <p class="">{{ $user->summarize->rate }}</p>
                        <p class="">{{ $user->summarize->best_seller_product }}</p>
                        <p class="">{{ $user->summarize->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
