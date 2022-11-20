const inputDogName = document.querySelector("#dogName");
const inputReg = document.querySelector("#regNummer");
const inputUrl = document.querySelector("#hundUrl");
const inputTail = document.querySelector("#dogTail");
const inputBirth = document.querySelector("#dogBirth");
const inputColor = document.querySelector("#dogColor");
const inputCountry = document.querySelector("#dogUrl");
const submitDogBtn = document.querySelector("#submitDogBtn");

// submitDogBtn.addEventListener("click", () => {
//   let xhr = new XMLHttpRequest();
//   console.log("UNSENT", xhr.readyState);

//   xhr.open("GET", "./message.txt", true);
// });

loadEventListeners();

function loadEventListeners() {
  submitDogBtn.addEventListener("click", submitDog);

  // inputTail.addEventListener("click", dogTail);
}

function submitDog() {
  let xhr = new XMLHttpRequest();
  console.log("UNSENT", xhr.readyState);

  xhr.open("GET", "./message.txt", true);

  console.log("OPENED", xhr.readyState);

  xhr.onload = () => {
    console.log("DONE", xhr.readyState);
  };

  xhr.onload = () => {
    if (xhr.status === 200) {
      document.write("Sucess!", xhr.responseText);
    }
  };

  xhr.send();
}
