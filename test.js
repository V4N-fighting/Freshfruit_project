function openTab(tabName) {
    // Ẩn tất cả các nội dung tab
    var tabContents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.remove("active");
    }

    // Xóa trạng thái active khỏi tất cả các nút tab
    var tabLinks = document.getElementsByClassName("tab-link");
    for (var i = 0; i < tabLinks.length; i++) {
        tabLinks[i].classList.remove("active");
    }

    // Hiển thị tab được chọn và đặt trạng thái active cho nút của nó
    document.getElementById(tabName).classList.add("active");
    event.currentTarget.classList.add("active");
}
