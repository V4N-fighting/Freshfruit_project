// script.js

function toggleAccordion(element) {
    const content = element.querySelector('.question__item--answer');
    const icon = element.querySelector('.question__item span');
    
    if (content.classList.contains("open")) {
        content.classList.remove("open");
        icon.innerHTML = '<i class="fa-solid fa-plus"></i>';
    } else {
        // Đóng tất cả các phần tử khác
        document.querySelectorAll('.question__item--answer').forEach(item => {
            item.classList.remove('open');
        });
        document.querySelectorAll('.question__item span').forEach(icon => icon.innerHTML = '<i class="fa-solid fa-plus"></i>');

        // Mở phần tử hiện tại
        content.classList.add("open");
        icon.innerHTML = '<i class="fa-solid fa-minus"></i>';
    }

    console.log([icon]);
    
}
