var blurButton = document.getElementById("blurButton");
var titleThx = document.querySelector(".title-thx");
var subtitleThx = document.getElementById("subtitle-thx");

blurButton.addEventListener("mouseenter", function () {
    titleThx.classList.add("blur");
    subtitleThx.classList.add("blur");
});

blurButton.addEventListener("mouseleave", function () {
    titleThx.classList.remove("blur");
    subtitleThx.classList.remove("blur");
});