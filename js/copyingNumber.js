let bankButton = document.querySelector(".bank-button");
let bankNumber = "57109025900000000133935601";

bankButton.addEventListener("click", () => {
    navigator.clipboard.writeText(bankNumber);
    bankButton.textContent = "Numer skopiowany!"
})

