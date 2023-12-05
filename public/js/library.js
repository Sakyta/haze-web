function showOverlay(element) {
  const overlay = element.querySelector(".overlay");
  if (overlay.style.opacity !== "1") {
    overlay.style.opacity = 1;
  }
}

function hideOverlay(element) {
  const overlay = element.querySelector(".overlay");
  if (overlay.style.opacity !== "0") {
    overlay.style.opacity = 0;
  }
}

document.addEventListener("click", function () {
  var sortingDropdown = document.getElementById("sorting");
  sortingDropdown.addEventListener("change", function () {
    sortGames();
  });
});

function sortGames() {
  var section = document.getElementById("section");
  var games = Array.from(section.querySelectorAll(".item"));
  var sortingValue = document.getElementById("sorting").value;


  if (sortingValue === "name") {
    games.sort(function (a, b) {
      return compareGames(a, b, sortingValue);
    });
  } else if (sortingValue == "default"){
    location.reload();
  }

  games.forEach(function (game) {
    section.appendChild(game);
  });
}

function compareGames(a, b, sortingValue) {
  var valueA, valueB;
  if (sortingValue === "name") {
    valueA = a.querySelector(".title").textContent;
    valueB = b.querySelector(".title").textContent;
  }
  return valueA.localeCompare(valueB);
}

