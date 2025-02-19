<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD Pegawai</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">CI4 - CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/.">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jabatan">Jabatan</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="p-5 text-center bg-white rounded-3 shadow">
            <h1 class="text-body-emphasis">Aplikasi CRUD Pegawai</h1>
            <p class="lead">
                Selamat Datang di Aplikasi CRUD Pegawai. APlikasi ini digunakan untuk mengelola pegawai.
            </p>
        </div>
    </div>

    <footer class="footer mt-auto py-3 bg-secondary">
        <div class="container text-center">
            <span class="text-white">Copyright &copy: 2024 - Codeigniter 4</span>
        </div>
    </footer>
    <script src="/public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>