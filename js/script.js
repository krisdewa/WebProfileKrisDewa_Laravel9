// Copyright 2021 By: KrisDewa
// Author/Pembuat   : Krisna Dewa Pratama
// Instagram        : @kris_dewa

// *NOTE*
//  Ngintip Yaaa, Izin dulu for respect :p

// CUSTOM CURSOR
const cursor = document.querySelector(".cursor");

window.addEventListener("mousemove", (e) => {
  cursor.style.left = e.pageX + "px";
  cursor.style.top = e.pageY + "px";
  cursor.setAttribute("data-fromTop", cursor.offsetTop - scrollY);
  // console.log(e)
});
window.addEventListener("scroll", () => {
  const fromTop = cursor.getAttribute("data-fromTop");
  cursor.style.top = scrollY + parseInt(fromTop) + "px";
  console.log(scrollY);
});
window.addEventListener("click", () => {
  if (cursor.classList.contains("click")) {
    cursor.classList.remove("click");
    void cursor.offsetWidth; // trigger a DOM reflow
    cursor.classList.add("click");
  } else {
    cursor.classList.add("click");
  }
});

// FUNGSI UNTUK MEMATIKAN RESPONSIVE CURSOR

// $(window).bind("DOMContentLoaded load resize", function () {
//   // pengecekan ukuran width window, bila widthnya lebih kecil atau sama dengan 500
//   if ($(window).innerWidth() <= 576) {
//     // Kita remove class navbar-fixed
//     $("#cursoremove").removeClass("cursor");
//   } else {
//     // diluar dari kondisi diatas kita akan add class navbar-fixed
//     $("#cursoremove").addClass("cursor");
//   }
// });

// $(window).bind("DOMContentLoaded load resize", function () {
//   // pengecekan ukuran width window, bila widthnya lebih kecil atau sama dengan 500
//   if ($(window).innerWidth() <= 800) {
//     // Kita remove class navbar-fixed
//     $("#cursoremove").removeClass("cursor");
//   } else {
//     // diluar dari kondisi diatas kita akan add class navbar-fixed
//     $("#cursoremove").addClass("cursor");
//   }
// });
// ================================================================

// NAVBAR
const menuToggle = document.querySelector(".menu-toggle input");
const nav = document.querySelector(".navbar .navbar-nav");

menuToggle.addEventListener("click", function () {
  nav.classList.toggle("slide");
});

// ================================================================
$(document).ready(function () {
  $(document).scroll(function () {
    // MATIKAN NAVBAR ANIMATION AGAR SAAT DICLICK TITLE TIDAK TERTUTUP OLEH NAVBAR
    // NAVBAR ANIMATION
    // if ($(document).scrollTop() >= $("#about").offset().top - 30) {
    //   $(".navbar").addClass("fixed-top bg-dark navtwo").removeClass("bg-transparent");
    // } else {
    //   $(".navbar").removeClass("fixed-top bg-dark navtwo");
    // }

    // ABOUT ME ANIMATION
    if ($(document).scrollTop() >= $("#about").offset().top - 100) {
      $(".about_img").addClass("show");
      $(".about-isi").addClass("show");
    }

    // PORTFOLIO ANIMATION
    if ($(document).scrollTop() >= $("#project").offset().top - 100) {
      $($("#project .project-item").get()).each(function (i) {
        let item = $(this);
        setTimeout(function () {
          $(item).addClass("show");
        }, i * 350);
      });
    }
  });
});
// ================================================================
