<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="main-header">
        <div class="logo"><img src="https://cdn-icons-png.flaticon.com/512/4228/4228232.png" alt="logo">
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="index.blade.php">Головна</a></li>
                <li><a href="#">Всі продукти</a></li>
                <li><a href="#">Про сайт</a></li>
                <li><a href="#">Контакти</a></li>
            </ul>
        </nav>
    </header>
    <div class="container-description">
        <h1>{{ $product->name }}</h1>
        <img src="{{ $product->photo_url }}" alt="{{ $product->name }}">
        <p>{{ $product->description }}</p>
        <p class="price">{{ $product->price }} Грн</p>

    </div>

    <footer class="main-footer">
        <div class="footer-content">
            <p>&copy;2023 Усі права захищено. </p>
            <ul>
                <li><a href="#">Про сайт</a></li>
                <li><a href="#">Контакти</a></li>
            </ul>
        </div>
    </footer>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>