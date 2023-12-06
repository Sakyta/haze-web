document.addEventListener("DOMContentLoaded", function () {
    const nominalButtons = document.querySelectorAll(".nominal-button");
    const pilihanPembayaran = document.querySelectorAll(".pilihan-pembayaran");

    function clearSelectionPembayaran() {
        pilihanPembayaran.forEach(function (pilihan) {
            pilihan.classList.remove("selected");
        });
    }

    function clearSelectionNominal() {
        nominalButtons.forEach(function (button) {
            button.classList.remove("selected");
        });
    }

    function updatePaymentDetails() {
        const selectedNominalButton = document.querySelector(".nominal-button.selected");

        if (selectedNominalButton) {
            const nominal = selectedNominalButton.getAttribute("data-nominal");
            const formattedNominal = new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR"
            }).format(nominal);

            const gopayElement = document.getElementById("gopay");
            const shopeepayElement = document.getElementById("shopeepay");

            gopayElement.innerHTML = "Gopay - " + formattedNominal;
            shopeepayElement.innerHTML = "Shopeepay - " + formattedNominal;
        }
    }

    nominalButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            clearSelectionNominal();
            button.classList.add("selected");
            updatePaymentDetails();
            var radio = button.previousElementSibling;
            radio.checked = true;
        });
    });

    pilihanPembayaran.forEach(function (pilihan) {
        pilihan.addEventListener("click", function () {
            clearSelectionPembayaran();
            pilihan.classList.add("selected");
            var radio = button.previousElementSibling;
            radio.checked = true;
        });
    });
});

function handleBeli() {
    const selectedNominalButton = document.querySelector(".nominal-button.selected");
    const selectedPaymentOption = document.querySelector(".pilihan-pembayaran.selected");

    if (selectedNominalButton && selectedPaymentOption) {
        const confirmation = confirm("Are you sure you want to proceed with the purchase?");
        if (confirmation) {
            window.location.href = "/homepage";
        }
    } else {
        alert("Please choose both a nominal and a payment option before proceeding.");
    }
}