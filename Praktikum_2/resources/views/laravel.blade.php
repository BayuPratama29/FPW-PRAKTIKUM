<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="/home">Home</a> | 
        <a href="/laravel">Laravel</a>
    </nav>

    <div class="container">
        <h1>Apa Itu Laravel?</h1>
        <img src="{{ asset('images/laravel.png') }}" alt="Logo Laravel" width="200">
        <p>
            Laravel adalah <b>framework aplikasi web berbasis PHP</b> yang dirancang untuk mempermudah developer membangun aplikasi modern.
        </p>

        <h2>Fitur Utama Laravel</h2>
        <ul>
            <li><b>MVC (Model–View–Controller)</b> → membuat kode lebih rapi dan terstruktur.</li>
            <li><b>Sintaks elegan & ekspresif</b> → mudah dibaca dan dipelihara.</li>
            <li><b>Routing sederhana</b> → memetakan URL ke fungsi/aksi dengan mudah.</li>
            <li><b>ORM Eloquent</b> → interaksi dengan database tanpa query SQL mentah.</li>
            <li><b>Fitur bawaan lengkap</b> → autentikasi, session, middleware, Blade template, API, queue, dan testing.</li>
            <li><b>Ekosistem luas</b> → banyak package tersedia untuk berbagai kebutuhan.</li>
            <li><b>Komunitas besar</b> → dokumentasi dan dukungan komunitas melimpah.</li>
        </ul>

        <p>
            Singkatnya, <i>Laravel</i> adalah alat bantu yang mempercepat dan mempermudah pembuatan aplikasi web dengan PHP, sehingga hasilnya lebih rapi, aman, dan modern.
        </p>
    </div>
</body>
</html>
