const search = document.getElementById("search");
const openBtn = document.getElementById("openBtn");
const closeBtn = document.getElementById("closeBtn");

openBtn.addEventListener("click", () => {
  search.classList.remove("hidden");
});

closeBtn.addEventListener("click", () => {
  search.classList.add("hidden");
});
