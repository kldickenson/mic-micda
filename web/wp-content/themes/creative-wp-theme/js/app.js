// for Affiliates filtering on /people/
const personFilter = (category) => {

    const affiliates = document.getElementById("affiliates");
    const persons = affiliates.getElementsByClassName("person");

    for (var i = 0; i < persons.length; i++) {
        if (category === "all") {
            persons[i].parentElement.classList.remove("hide");
        } else {
            const personCat = persons[i].getElementsByClassName("category");

            if (personCat[0].innerHTML !== category) {
                persons[i].parentElement.classList.add("hide");
            } else {
                persons[i].parentElement.classList.remove("hide");
            }
        }
    }
};

// People carousel.
const peopleCarousel = document.getElementById("people-carousel");

if (peopleCarousel) {
    const carousel = new Siema({
        selector: peopleCarousel,
        perPage: {
            640: 3,
            480: 2,
            320: 1
        },
        multipleDrag: true,
        loop: true
    });

    document.getElementById("people-carousel-previous").addEventListener("click", () => carousel.prev(carousel.perPage));
    document.getElementById("people-carousel-next").addEventListener("click", () => carousel.next(carousel.perPage));
}

// Mobile menu.
const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("header-nav");
const fade = document.getElementById("fade");
const mobileLogo = document.getElementById("mobile-logo");
const body = document.querySelector("body");

menuToggle.addEventListener("click", (event) => {
    toggleMenu(event);
});

fade.addEventListener("click", (event) => {
    toggleMenu(event);
});

const toggleMenu = (event) => {
    event.preventDefault();

    menu.classList.toggle("open");
    menuToggle.classList.toggle("is-active");
    fade.classList.toggle("hidden");

    if (menuToggle.classList.contains("is-active")) {
        menuToggle.setAttribute("aria-expanded", true);
        mobileLogo.focus();
        body.classList.add("overflow-hidden", "h-screen");
    } else {
        menuToggle.setAttribute("aria-expanded", false);
        body.classList.remove("overflow-hidden", "h-screen");
    }
};