//------------Review onClick--------------

function openTab(tabName) {
    // Ẩn tất cả các nội dung tab
    var tabContents = document.getElementsByClassName("contain__tab-content");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
    }

    // Xóa trạng thái active khỏi tất cả các nút tab
    var tabLinks = document.getElementsByClassName("contain__tab-link");
    for (var i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }

    // Hiển thị tab được chọn và đặt trạng thái active cho nút của nó
    document.getElementById(tabName).classList.add("active");
    event.currentTarget.classList.add("active");
}

//--------------Search onClick-----------------
// Chọn phần tử .header__actions-container-search-link
const searchLink = document.querySelector('.header__actions-container-search');
const searchBox = document.querySelector('.search-box');
const searchIcon = searchLink.querySelector('i');

// Ẩn search-box ban đầu
searchBox.style.display = 'none';

// Thêm sự kiện click cho searchLink
searchLink.addEventListener('click', function (event) {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>

    // Toggle hiển thị search-box
    if (searchBox.style.display === 'none' || searchBox.style.display === '') {
        searchBox.style.display = 'block';
        searchIcon.classList.remove('fa-magnifying-glass');
        searchIcon.classList.add('fa-xmark');
    } else {
        searchBox.style.display = 'none';
        searchIcon.classList.remove('fa-xmark');
        searchIcon.classList.add('fa-magnifying-glass');
    }
});

// ------------------model - cart onClick
// Lấy các phần tử DOM
const cartIcon = document.querySelector('.header__actions-container-cart');
const modelCart = document.querySelector('.model__cart');
const modelCartView = document.querySelector('.model__cart-view'); // Nội dung bên trong model__cart
const modelCartClose = document.querySelector('.model__cart-close');

// Hàm hiển thị giỏ hàng
function showCart() {
    modelCart.style.display = 'flex'; // Hiển thị model__cart
}

// Hàm ẩn giỏ hàng
function hideCart() {
    modelCart.style.display = 'none'; // Ẩn model__cart
}

// Khi click vào biểu tượng giỏ hàng, hiển thị giỏ hàng
cartIcon.addEventListener('click', (event) => {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
    showCart();
});

// Khi click vào phần tử đóng, ẩn giỏ hàng
modelCartClose.addEventListener('click', (event) => {
    event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ a
    hideCart();
});

// Khi click ra bên ngoài model__cart-view, ẩn giỏ hàng
modelCart.addEventListener('click', (event) => {
    // Kiểm tra nếu click nằm ngoài model__cart-view (tức là click vào model__cart)
    if (!modelCartView.contains(event.target)) {
        hideCart();
    }
});
