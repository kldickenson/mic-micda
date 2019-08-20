// Go ahead, use some ES6.
// const wow = (greeting) => {
// 	console.log(greeting);
// };

// wow("howdy");


const person_filter(event) => {
   const affiliates = document.getElementById("affiliates");
   const person = affiliates.querySelector('.person');
   const personCat = person.querySelector('.category');
   const var = "a_e"; // default value
   const target = event.target.value;
   console.log(target);
   console.log(personCat);
  //  switch (target) {
  //   case 'F-J':
  //      var = 'f_j';
  //      break;
  //   case 'K-O':
  //      var = 'k_o';
  //      break;
  //     case 'P-T':
  //      var = 'p_t;
  //      break;
  //     case 'U-Z':
  //      var = 'u_z;
  //      break;
  //   default:
  //      var = 'a_e';
  //      break;
  // }
  // if(var !== personCat.value) {
  //   person.className += ' hidden';
  // }

}