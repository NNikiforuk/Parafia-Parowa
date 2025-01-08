const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.classList.add("show");
			observer.unobserve(entry.target);
		}
	});
});

document.querySelectorAll(".slidein").forEach((el) => {
	observer.observe(el);
});
