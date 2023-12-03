
document.querySelectorAll('.product-card').forEach(card => 
    {
    card.addEventListener('click', () => {
        const productId = card.dataset.productId;
        window.location.href = `/products/${productId}`;
    });
});

document.addEventListener('DOMContentLoaded', function () 
{
    const sortSelect = document.getElementById('sort-select');
    const orderSelect = document.getElementById('order-select');
    const productCards = document.querySelector('.product-cards');

    function handleSortChange() {
        const sortBy = sortSelect.value;
        const orderBy = orderSelect.value;
        sortProducts(sortBy, orderBy);
    }

    function sortProducts(sortBy, orderBy) {
        const products = Array.from(productCards.children);
        products.sort(function (a, b) {
            const aValue = parseFloat(a.getAttribute('data-price'));
            const bValue = parseFloat(b.getAttribute('data-price'));

            if (orderBy === 'ascending') {
                return aValue - bValue;
            } else {
                return bValue - aValue;
            }
        });

        productCards.innerHTML = '';

        products.forEach(function (product) 
        {
            productCards.appendChild(product);
        });
    }

    sortSelect.addEventListener('change', handleSortChange);
    orderSelect.addEventListener('change', handleSortChange);
});