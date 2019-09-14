const formBackground = document.querySelector(".form-background");
const closeButton = document.querySelector(".form-background__button_close");
const form = document.querySelector(".form-contact__form");
const title = document.querySelector(".title");
const name = document.querySelector(".name");
const email = document.querySelector(".email");
const message = document.querySelector(".message");
const showForm = document.querySelector(".contact-button");

const nameValidator = /[a-zA-Z]+/g; // for matching letters: this was giving unexpected results.

const nameIsInvalid = /^[0-9]+$/; // this worked like a charm.

const emailValidator = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; // to match emails. 99% fool-proof :)

const displayForm = () => {
  formBackground.style.display = "block";
  title.focus();
};

const closeForm = () => {
  formBackground.style.display = "none";
};

const showErrorOnSubmit = (field, b, c) => {
  let a = document.querySelector(`.show-${field}`);
  console.log(a);
  a.style.display = b;
  a.textContent = c;
};

const showError = e => {
  e.stopPropagation();
  const helpers = ["title", "name", "email", "message"];

  for (let i in helpers) {
    if (e.target.value === "" && event.target.className === helpers[i]) {
      let a = document.querySelector(`.show-${helpers[i]}`);
      a.style.display = "block";
      setTimeout(() => {
        a.style.display = "none";
      }, 3000);
    }
  }
};

const handleNameInput = e => {
  if (nameIsInvalid.test(e.key)) {
    e.preventDefault();
    e.stopImmediatePropagation();
    showErrorOnSubmit(
      "name",
      "block",
      "Your name cannot possibly contain numbers"
    );
    setTimeout(() => showErrorOnSubmit("name", "none", null), 3000);
  } else {
    showErrorOnSubmit("name", "block", "Go on, :)");
    setTimeout(() => showErrorOnSubmit("name", "none", null), 3000);
  }
};

const handleSubmit = e => {
  e.preventDefault();

  if (
    name.value === "" ||
    email.value === "" ||
    title.value === "" ||
    message.value === ""
  ) {
    return null;
  } else if (name.value.length > 0 && name.value.length < 4) {
    showErrorOnSubmit(
      "name",
      "block",
      "Your name should not be less than four letters"
    );
    setTimeout(() => showErrorOnSubmit("name", "none", null), 3000);
    return null;
  } else if (message.value.length > 0 && message.value.length < 20) {
    showErrorOnSubmit(
      "message",
      "block",
      "Your message should not be less than twenty letters"
    );
    setTimeout(() => showErrorOnSubmit("message", "none", null), 3000);
    return null;
  } else if (!emailValidator.test(email.value)) {
    showErrorOnSubmit("email", "block", "Please enter a valid email address");
    setTimeout(() => showErrorOnSubmit("email", "none", null), 3000);
    return null;
  } else {
    form.submit();
    form.reset();
    form.innerHTML = `<div class="onsubmit"><h1>Thank you for contacting me. I will be getting back to you shortly</h1></div>`;
  }
};

showForm.addEventListener("click", displayForm);
form.addEventListener("submit", handleSubmit);
closeButton.addEventListener("click", closeForm);
title.addEventListener("blur", showError);
name.addEventListener("keydown", handleNameInput);
name.addEventListener("blur", showError);
email.addEventListener("blur", showError);
message.addEventListener("blur", showError);
