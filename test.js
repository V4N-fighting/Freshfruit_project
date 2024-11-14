document.addEventListener("DOMContentLoaded", function () {
    const searchContainer = document.querySelector(".header__actions-container-search");
    const searchIcon = searchContainer.querySelector("i");
    const searchBox = searchContainer.querySelector(".search-box");

    searchContainer.addEventListener("click", function (event) {
        event.preventDefault(); // Ngăn hành động mặc định của thẻ a

        // Kiểm tra trạng thái của ô tìm kiếm và thay đổi hiển thị
        if (searchBox.style.display === "none") {
            searchBox.style.display = "block";
            searchIcon.classList.remove("fa-magnifying-glass");
            searchIcon.classList.add("fa-xmark");
        } else {
            searchBox.style.display = "none";
            searchIcon.classList.remove("fa-xmark");
            searchIcon.classList.add("fa-magnifying-glass");
        }
    });
});