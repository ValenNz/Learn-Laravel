{{-- Halaman unutk menampilkan layout (tata letak) utama navbar --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Style Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        
    {{-- Icons Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    
    {{-- Style Css --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/navbar.css">

    {{-- Memanggil judl yang telah dikirim --}}
    <title>Valen Blog | {{ $title }}</title>
</head>
<body>
    {{-- tag include untuk menyimpan sebuah navbar dari partials -> navbar --}}
    @include('partials.navbar')

        <div class="container mt-4">
            {{-- Akan berisi sesai halaman yang dikirimi bagianya | nama section yang akan dimasukan ke yield(harus sama dengan halaman child) --}}
            @yield('container')
        </div>


    <!-- Scrtipt Js -->
    <script src="js/script.js"></script>
    {{-- Script Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>