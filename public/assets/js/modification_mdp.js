const ancien_Pw = document.querySelector("#ancien_pw"),
  createPw = document.querySelector("#create_pw"),
  confirmPw = document.querySelector("#confirm_pw"),
  pwShow = document.querySelector(".show"),
  alertIcon = document.querySelector(".error"),
  alertText = document.querySelector(".text"),
  submitBtn = document.querySelector("#button");

pwShow.addEventListener("click", () => {
  if ((ancien_Pw.type === "password") && (createPw.type === "password") && (confirmPw.type === "password")) {
    ancien_Pw.type = "text";
    createPw.type = "text";
    confirmPw.type = "text";
    pwShow.classList.replace("fa-eye-slash", "fa-eye");
  } else {
    ancien_Pw.type = "password";
    createPw.type = "password";
    confirmPw.type = "password";
    pwShow.classList.replace("fa-eye", "fa-eye-slash");
  }
});

createPw.addEventListener("input", () => {
  let val = createPw.value.trim()
  if (val.length >= 8) {
    confirmPw.removeAttribute("disabled");
    submitBtn.removeAttribute("disabled");
    submitBtn.classList.add("active");
  } else {
    confirmPw.setAttribute("disabled", true);
    submitBtn.setAttribute("disabled", true);
    submitBtn.classList.remove("active");
    confirmPw.value = "";
    alertText.style.color = "#a6a6a6";
    alertText.innerText = "Entrez au moins 8 caractères";
    alertIcon.style.display = "none";
  }
});

submitBtn.addEventListener("click", () => {
  if (createPw.value === confirmPw.value) {
    if (ancien_Pw.value === "password") {
      alertText.innerText = "Mot de passe correspond, Mot de passe modifié";
      alertIcon.style.display = "none";
      alertText.style.color = "#4070F4";
    } else {
      alertText.innerText = "Mot de passe correspond, Mais l'ancien mot de passe est incorrect";
      alertIcon.style.display = "block";
      alertText.style.color = "#D93025";
    }
  } else {
    alertText.innerText = "Le nouveau mot de passe ne correspond pas";
    alertIcon.style.display = "block";
    alertText.style.color = "#D93025";
  }
});
