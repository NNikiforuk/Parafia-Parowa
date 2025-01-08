let dropdown = document.querySelector(".menu"),
	buttonClick = document.querySelector(".check-button"),
	hamburger = document.querySelector(".menu-icon");
	menuLinks = document.querySelectorAll(".menu a");


buttonClick.addEventListener("click", () => {
	dropdown.classList.toggle("show-dropdown");
	hamburger.classList.toggle("animate-button");
});

menuLinks.forEach((link) => {
	link.addEventListener("click", function () {
		dropdown.classList.remove("show-dropdown")
	});
});
