// for Affiliates filtering on /people/
const personFilter = (category) => {

	const affiliates = document.getElementById("affiliates");
	const persons = affiliates.getElementsByClassName("person");

	for (var i = 0; i < persons.length; i++) {

		const personCat = persons[i].getElementsByClassName("category");
		// console.log(personCat[0].innerHTML);
		// console.log(persons[i].parentElement.className;

		if (personCat[0].innerHTML !== category) {
			persons[i].parentElement.classList.add("hide");
		} else {
			persons[i].parentElement.classList.remove("hide");
		}
	}
};