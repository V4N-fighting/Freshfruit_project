
// Lấy các phần tử cần thiết
const decrementButton = document.querySelector('.contain__items-button-prev');
const incrementButton = document.querySelector('.contain__items-button-next');
const quantityDisplay = document.querySelector('.contain__items-button-multi');

// Lấy giá trị ban đầu
let quantity = parseInt(quantityDisplay.textContent);

// Xử lý sự kiện khi nhấn nút trừ
decrementButton.addEventListener('click', () => {
    if (quantity > 1) { // Chỉ giảm khi quantity > 1
        quantity--;
        quantityDisplay.textContent = quantity;
    }
});

// Xử lý sự kiện khi nhấn nút cộng
incrementButton.addEventListener('click', () => {
    quantity++;
    quantityDisplay.textContent = quantity;
});
