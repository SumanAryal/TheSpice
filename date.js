document.getElementById("Departure").onchange = function() {
  input.setAttribute("min", this.value);
};
Departure.min = new Date().toISOString().split("T")[0];
