const inputDogName = document.querySelector("#dogName");
const inputReg = document.querySelector("#regNummer");
const inputUrl = document.querySelector("#hundUrl");
const inputTail = document.querySelector("#dogTail");
const inputBirth = document.querySelector("#dogBirth");
const inputColor = document.querySelector("#dogColor");
const inputCountry = document.querySelector("#dogUrl");
const submitDogBtn = document.querySelector("#submitDogBtn");
const createDogForm = document.querySelector("#createDogForm");
let url = "./php/API.php";
// submitDogBtn.addEventListener("click", () => {
//   let xhr = new XMLHttpRequest();
//   console.log("UNSENT", xhr.readyState);

//   xhr.open("GET", "./message.txt", true);
// });

function secondUpdate() {
  if (response.ok) {
    let serchLitter = document.querySelector("#litterInput").value;
    let url = `./php/API.php?litter=${litterInput}`;

    fetch(url)
      .then((data) => {
        if (data.ok) {
          return data.json();
        } else {
          throw new Error("Something went wrong");
        }
      })
      .then((JSObject) => {
        showApiData(JSObject);
      });

    let showApiData = (data) => {
      let messageTemplate = `<p>${data.refrence} ${data.text}</p>`;
      result.innerHTML = messageTemplate;
    };
  } else {
    setTimeout(() => {
      secondUpdate();
    }, 1000);
  }
}

loadEventListeners();

function loadEventListeners() {
  submitDogBtn.addEventListener("click", submitDog);

  inputTail.addEventListener("click", dogTail);
}

// CREATING AN AJAX CALL TO API.PHP TO SEND THE DATA

function submitDog() {
  fetch(url)
    .then((response) => {
      return response.text();
    })
    .then((text) => {
      console.log(text);
    })
    .catch((e) => {
      console.log("Ops, det har blivit ett nätverksfel!");
    });
}
