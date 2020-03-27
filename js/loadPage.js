const all_lines = document.querySelectorAll(".line");
const loadPage = document.querySelector(".loadPage_main");
let positionLeft = 0;

function loading() {
    for (let i = 0; i < all_lines.length; i++) {
        setTimeout(() => {
            // all_lines[i].style.setProperty("opacity", 1);
            all_lines[i].style.setProperty("left", `${positionLeft}%`);
            positionLeft += 10;
            setTimeout(() => {
                all_lines[i].classList.add("addAnime");
                console.log(all_lines[i])
            }, i * 100)
        }, 200)
    }
    const randomTime = Math.floor(Math.random() * 5000) + 500;

    function hideLoadPage() {
        setTimeout(() => {
            loadPage.style.setProperty("opacity", 0)
        }, randomTime)
        setTimeout(() => {
            loadPage.classList.add("loadPage-hide")
        }, randomTime + 200)

    }
    hideLoadPage()
}
loading()