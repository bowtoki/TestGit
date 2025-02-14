let slideIndex = 0;
let slideInterval;

function showSlides() {
    let slides = document.getElementsByClassName("slide");

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";

    slideInterval = setTimeout(showSlides, 3000); // Tự động chuyển sau 3 giây
}

function changeSlide(n) {
    clearTimeout(slideInterval); // Dừng tự động
    let slides = document.getElementsByClassName("slide");

    slideIndex += n;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    } else if (slideIndex < 1) {
        slideIndex = slides.length;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";

    slideInterval = setTimeout(showSlides, 3000); // Khởi động lại auto-slide
}

// Hiệu ứng mở menu
function toggleMenu() {
    document.getElementById("sidebar-menu").classList.toggle("active");
}

// Khởi động trình chiếu khi tải trang
document.addEventListener("DOMContentLoaded", showSlides);
function toggleMenu1() {
    var menu = document.getElementById("menu-acc");
    if (menu.style.display === "block") {
        menu.style.display = "none";
    } else {
        menu.style.display = "block";
    }
}