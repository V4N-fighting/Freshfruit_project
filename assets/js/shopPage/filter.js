const priceRange = document.getElementById("priceRange");
const priceFrom = document.getElementById("priceFrom");
const priceTo = document.getElementById("priceTo");

priceRange.addEventListener("input", (event) => {
    const value = event.target.value;
    priceFrom.textContent = `From: $0`;
    priceTo.textContent = `To: $${value}`;
  
    const max = priceRange.max;
    const percent = (value / max) * 100;
  
     priceRange.style.background = `linear-gradient(to right, #8bc34a ${percent}%, #ccc ${percent}%)`;
});
