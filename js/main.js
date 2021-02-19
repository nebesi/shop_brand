document.addEventListener("DOMContentLoaded", function (event) {
    let menu = document.querySelector(".aside-menu"),
        menu2 = document.querySelector(".aside-menu_top"),
        closeBtn = document.querySelector(".close-menu"),
        openMenu = document.querySelector(".link-icon-m"),
        bodyOver = document.querySelector("body");




    openMenu.addEventListener("click", function () {
        if (menu.classList.contains("hide")) {
            menu.classList.remove("hide");
            menu.classList.add("show");
            if (menu.classList.contains("dark")) {
                bodyOver.classList.add("stopscroll")
            }
        }
        else if (menu.classList.contains("show")) {
            menu.classList.remove("show");
            menu.classList.add("hide");
            if (bodyOver.classList.contains("stopscroll")) {
                bodyOver.classList.remove("stopscroll")
            }
        }
    })

    closeBtn.addEventListener("click", function () {
        menu.classList.remove("show");
        menu.classList.add("hide");
        if (bodyOver.classList.contains("stopscroll")) {
            bodyOver.classList.remove("stopscroll")
        }
    })

    menu.addEventListener("click", function () {
        console.log("hello")
    })


});