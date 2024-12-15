const date = document.getElementById("reservation-date");
const qty = document.getElementById("reservation-ticketqty");
const ideas = document.getElementById("reservation-ideas");
const name = document.getElementById("reservation-name");
const email = document.getElementById("reservation-email");
const nationality = document.getElementById("reservation-nationality");
const age = document.getElementById("reservation-age");
const phone = document.getElementById("reservation-phone");
const destination = document.getElementById("destination-name");
const forms = document.getElementById("reservation-form");
const price = document.getElementById("destination-price");
const urlParams = new URLSearchParams(window.location.search);
const tourId = urlParams.get("id");

// Handle form submission
forms.addEventListener("submit", (event) => {
    event.preventDefault();

    const totalPrice = parseInt(price.value) * parseInt(qty.value);

    const formData = new FormData();
    formData.append("tanggal_berangkat", date.value);
    formData.append("jumlah_tiket", parseInt(qty.value));
    formData.append("ide", ideas.value);
    formData.append("nama_user", name.value);
    formData.append("email", email.value);
    formData.append("nationality", nationality.value);
    formData.append("umur", parseInt(age.value));
    formData.append("nomor_hp", phone.value);
    formData.append("nama_destinasi", destination.value);
    formData.append("total_harga", totalPrice);

    fetch(`../php/get-quote.php?id=${tourId}`, {
        method: "POST",
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            console.log("Server Response:", data); // Debug response
            if (data.startsWith("success")) {
                alert("Booking successful!");
            } else {
                alert("Error: " + data);
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("There was an error submitting your booking. Please try again.");
        });
});
