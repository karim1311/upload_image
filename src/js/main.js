const form = document.forms[0];
const input = document.getElementById("img");

input.addEventListener("change", () => {
    form.submit()
});