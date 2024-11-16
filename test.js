// Lấy tất cả các mục trong sidebar
const sidebarItems = document.querySelectorAll('.contain__sidebar-items');

// Lặp qua tất cả các mục và gắn sự kiện click
sidebarItems.forEach(item => {
    item.addEventListener('click', function(e) {    
        e.preventDefault(); // Ngừng hành động mặc định của liên kết

        // Ẩn tất cả các phần tử nội dung
        const contentSections = document.querySelectorAll('.contain__content-text');
        contentSections.forEach(section => {
            section.style.display = 'none';
        });

        // Lấy phần nội dung cần hiển thị
        let targetContentId = item.textContent.trim().toLowerCase().replace(/\s+/g, '-'); // Đổi tên thành dạng id
        const targetContent = document.getElementById('content-' + targetContentId);

        if (targetContent) {
            targetContent.style.display = 'block';
        }

        // Cập nhật trạng thái của các item trong sidebar
        sidebarItems.forEach(s => s.classList.remove('items-select'));
        item.classList.add('items-select');
    });
});
