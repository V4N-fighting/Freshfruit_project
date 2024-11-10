window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTopBtn.style.display = "block";
    } else {
        scrollTopBtn.style.display = "none";
    }

    const scrollShowBtn = document.getElementById("addCard");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollShowBtn.style.display = "block";
    } else {
        scrollShowBtn.style.display = "none";
    }
}

// Kiểm tra vị trí cuộn khi tải trang
document.addEventListener("DOMContentLoaded", scrollFunction);