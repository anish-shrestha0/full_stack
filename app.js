let buttons = document.querySelectorAll("[data-carousel-button]")
buttons.forEach(button => {
    button.addEventListener("click", () => {
        const offset = button.dataset.carouselButton === "next" ? 1 : -1;
        const slides = button.closest("[data-carousel]").querySelector("[data-slides]");
        const activeSlide = slides.querySelector("[data-active]");
        let newIndex = [...slides.children].indexOf(activeSlide) + offset;
        if (newIndex < 0) {
            newIndex = slides.children.length - 1;
        }
        if (newIndex >= slides.children.length) {
            newIndex = 0;
        }
        slides.children[newIndex].dataset.active = true;
        delete activeSlide.dataset.active;



    })


})
let interval = setInterval(() => {
    document.querySelector(".next").click();
}, 5000);
$(".register").hide();
document.querySelector(".log-sign").addEventListener("mouseenter", () => {
    document.querySelector(".crt").classList.add("crt-rotate");
    $(".register").slideDown();
});
document.querySelector(".register").addEventListener("mouseleave", () => {

    document.querySelector(".crt").classList.remove("crt-rotate");
    $(".register").slideUp();
})
let addToCart = document.querySelectorAll(".add-to-cart");
let item = 0;
addToCart.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        item++;
        $(".cart-items-no").text(item);
    })
})