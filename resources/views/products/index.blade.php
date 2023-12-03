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
                <li><a href="">Головна</a></li>
                <li><a href="#">Всі продукти</a></li>
                <li><a href="#">Про сайт</a></li>
                <li><a href="#">Контакти</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">
        <div class="container-card">
            <select id="sort-select">
                <option value="price">Сортувати за ціною</option>
            </select>

            <select id="order-select">
                <option value="ascending">За зростанням</option>
                <option value="descending">За спаданням</option>
            </select>
            <hr>
            <div class="product-cards">
                @foreach($products as $product)
                <div class="product-card" data-product-id="{{ $product->id }}" data-date="{{ $product->date }}" data-price="{{ $product->price }}">
                    <img src="{{ $product->photo_url }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p class="price">{{ $product->price }} грн</p>
                    <button class="buy-button view-details">Дізнатися більше</button>
                    <button class="buy-button buy-now">Купити</button>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="section-desc">
        <h3>ПРО МАГАЗИН</h3>
        <hr>
        <h4>Інтернет-магазин Гаджет </h4>
        <p>Зробіть своє життя комфортнішим, легшим і цікавішим, звернувшись в Гаджет - інтернет-магазин цікавих речей, Україна вже давно гідно оцінила високу якість наших товарів! Хочете припіднести незабутній подарунок або спростити повсякденні турботи, зробивши користування улюблених гаджетів функціональнішим і цікавішим? Ми допоможемо вам підібрати і купити аксесуари в інтернет-магазині зі зручними умовами доставки та оплати.</p>
    </section>
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