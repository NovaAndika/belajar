<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Shop')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Tambahkan tautan stylesheet atau script lainnya di sini -->
</head>

<body>
    <header>
        <div class="container">
            <h1>My Shop</h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Shop. All rights reserved.</p>
        </div>
    </footer>

    <!-- Tambahkan script atau elemen lainnya di bagian bawah halaman jika diperlukan -->

</body>

</html>
