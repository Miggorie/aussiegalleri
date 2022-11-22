const inputDogName = document.querySelector("#dogName");
const inputReg = document.querySelector("#regNummer");
const inputUrl = document.querySelector("#hundUrl");
const inputTail = document.querySelector("#dogTail");
const inputBirth = document.querySelector("#dogBirth");
const inputColor = document.querySelector("#dogColor");
const inputCountry = document.querySelector("#dogUrl");
const submitDogBtn = document.querySelector("#submitDogBtn");
const createDogForm = document.querySelector("#createDogForm");

// submitDogBtn.addEventListener("click", () => {
//   let xhr = new XMLHttpRequest();
//   console.log("UNSENT", xhr.readyState);

//   xhr.open("GET", "./message.txt", true);
// });

loadEventListeners();

function loadEventListeners() {
  submitDogBtn.addEventListener("click", submitDog);

  inputTail.addEventListener("click", dogTail);
}

let url = "./php/create-dog.php";

fetch(url).then((response) => {
  console.log(data);
});

// function submitDog() {
//   let xhr = new XMLHttpRequest();
//   let method = "POST";
//   let url = "./php/create-dog.php";

//   xhr.open(method, url);

//   xhr.onload = () => {
//     if (xhr.status === 200) {
//       document.querySelector("#result").innerHTML = this.responseText;
//     }
//   };
//   let dogData = new FormData(createDogForm);

//   xhr.send(dogData);
// }
