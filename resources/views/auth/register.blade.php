<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Registrasi</h3>

                        <form action="{{ route('register.submit') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama :</label>
                                <input type="text" class="form-control" id="nama" name="nama" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="kata_sandi" class="form-label">Kata Sandi:</label>
                                <input type="password" class="form-control" id="kata_sandi" name="kata_sandi" required>
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Pilih Role:</label>
                                <select name="role" id="role" class="form-select" required>
                                    <option value="customer">Customer</option>
                                    <option value="kurir">Kurir</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success w-100">Daftar</button>
                        </form>

                        <p class="mt-3 text-center">
                            Sudah punya akun?
                            <a href="{{ route('login') }}">Masuk</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>