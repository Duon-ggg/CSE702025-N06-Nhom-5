const bigImage = document.querySelector(".product-content-left-big-img img");
const smallImage = document.querySelectorAll(
  ".product-content-left-small-img img"
);
smallImage.forEach(function (imgItem, X) {
  imgItem.addEventListener("click", function () {
    bigImage.src = imgItem.src;
  });
});

const baoquan = document.querySelector(".baoquan");
const chitiet = document.querySelector(".chitiet");
if (baoquan) {
  baoquan.addEventListener("click", function () {
    document.querySelector(
      ".product-content-right-bottom-content-chitiet"
    ).style.display = "none";
    document.querySelector(
      ".product-content-right-bottom-content-baoquan"
    ).style.display = "block";
  });
}
if (chitiet) {
  chitiet.addEventListener("click", function () {
    document.querySelector(
      ".product-content-right-bottom-content-chitiet"
    ).style.display = "block";
    document.querySelector(
      ".product-content-right-bottom-content-baoquan"
    ).style.display = "none";
  });
}
const button = document.querySelector(".product-content-right-bottom-top");
if (button) {
  button.addEventListener("click", function () {
    document
      .querySelector(".product-content-right-bottom-content-big")
      .classList.toggle("activeB");
  });
}
