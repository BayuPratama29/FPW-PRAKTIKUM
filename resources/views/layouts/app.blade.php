<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTK-3b4g5uI1QYvF5L9Iq155n44g3uN4L7xP5F5T5g29aF5A51S9u8g2A14S8L5I0Q0I5A6Yy15y2A5F5F5F5A" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('products.index') }}">Aplikasi Produk</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-O1C/624g55d7wW2a3P5uF5I0Q5R2S5D6C5D4B2I6E2B45A8K85F4A9G1A8I5A5F5A9A5A9A5A" crossorigin="anonymous"></script>

</body>
</html>