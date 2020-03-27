const bars = document.querySelector(".bars");
const bars_top = document.querySelector(".top");
const bars_bottom = document.querySelector(".bottom");
const mobile_menu = document.querySelector(".mobile");
const bar_all = document.querySelectorAll(".bar");
const li_mobile_menu = document.querySelectorAll(".mobile li");
let menuActive = true;



const addCross = function (bar1, bar2) {
    bar_all.forEach((onebar) => {
        onebar.classList.add("middle")
    })
    setTimeout(() => {
        bar1.style.setProperty("transform", "translateX(-50%) rotate(45deg)");
        bar2.style.setProperty("transform", "translateX(-50%) rotate(-45deg)")
    }, 500)
}

const removeCross = function (bar1, bar2) {
    bar1.style.setProperty("transform", "translateX(-50%) rotate(0)");
    bar2.style.setProperty("transform", "translateX(-50%) rotate(0)")
    setTimeout(() => {
        bar_all.forEach((onebar) => {
            onebar.classList.remove("middle")
        })
    }, 500)
}

const wave = (listNode) => {
    for (let i = 0; i < listNode.length; i++) {
        setTimeout(() => {
            listNode[i].style.setProperty("transform", 'translateY(0)');
            listNode[i].style.setProperty("opacity", 1);
        }, i * 50)
    }
}
const hideWave = (listNode) => {
    for (let i = 0; i < listNode.length; i++) {
        setTimeout(() => {
            listNode[i].style.setProperty("transform", 'translateY(-80px)');
            listNode[i].style.setProperty("opacity", 0);
        }, i * 50)
        setTimeout(() => {
            listNode[i].style.setProperty("transform", 'translateY(80px)');
        }, 1600)
    }
}

const showMenu = function () {
    if (menuActive) {
        mobile_menu.classList.add("active_menu");
        addCross(bars_top, bars_bottom)
        setTimeout(() => {
            wave(li_mobile_menu)
        }, 1100)

        menuActive = !menuActive
    } else if (!menuActive) {
        setTimeout(() => {
            mobile_menu.classList.remove("active_menu");
            removeCross(bars_top, bars_bottom);
        }, 1000)
        hideWave(li_mobile_menu)
        menuActive = !menuActive
    }
}
bars.addEventListener("click", showMenu)


//scroll-------------------------------
const navScreen = document.querySelector(".screen")
const scrolling = function () {
    // var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    // var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    // var scrolled = (winScroll / height) * 100;
    navScreen.classList.remove("screen-sticky");
    if (scrollY >= navScreen.offsetTop) {
        navScreen.classList.add("screen-sticky");
        console.log("s")
    }
}
window.addEventListener("scroll", scrolling)