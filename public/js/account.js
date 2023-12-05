document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("delete-acc")
    .addEventListener("click", function (event) {
      event.preventDefault();

      const confirmation = confirm(
        "Are you sure you want to delete your Haze account?"
      );

      if (confirmation) {
        window.location.href = "/delete";
      }
    });
});
