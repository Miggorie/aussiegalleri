let headUpload = document.querySelector('input[type="file"]');
let headPreview = document.getElementById("headPreview");
headUpload.addEventListener("change", (e) => {
  let url = URL.createObjectURL(e.target.files[0]);
  headPreview.setAttribute("src", url);
});
