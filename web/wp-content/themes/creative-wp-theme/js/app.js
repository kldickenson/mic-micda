// for Affiliates filtering on /people/
const personFilter = (category) => {

	const affiliates = document.getElementById("affiliates");
	const persons = affiliates.getElementsByClassName("person");

	for (var i = 0; i < persons.length; i++) {

		const personCat = persons[i].getElementsByClassName("category");

		if (personCat[0].innerHTML !== category) {
			persons[i].parentElement.classList.add("hide");
		} else {
			persons[i].parentElement.classList.remove("hide");
		}
	}
};

// People carousel.
const peopleCarousel = document.getElementById("people-carousel");

if (peopleCarousel) {
	const carousel = new Siema({
		selector: peopleCarousel,
		perPage: 3,
		multipleDrag: true,
		loop: true
	});

	document.getElementById("people-carousel-previous").addEventListener("click", () => carousel.prev(3));
	document.getElementById("people-carousel-next").addEventListener("click", () => carousel.next(3));
}
