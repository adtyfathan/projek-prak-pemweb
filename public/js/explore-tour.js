const message = document.getElementById("comment-message");
let rating = document.getElementById("star-value");
const urlParams = new URLSearchParams(window.location.search);

const tourId = urlParams.get("id");


function handleRate(starValue) {
    const stars = document.querySelectorAll("#star-rating img");

    stars.forEach((star, index) => {
        if (index < starValue) {
            star.src = "../asset/star_filled.png"; // Change to filled star
        } else {
            star.src = "../asset/star.png"; // Change back to empty star
        }
    });

    rating.value = starValue;
}

const stars = document.querySelectorAll("#star-rating img");

stars.forEach((star, index) => {
    star.addEventListener("click", () => {
        handleRate(index + 1); // Call the rate function with the correct star value (1 to 5)
    });
});

document.getElementById("comment-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const ratingValue = parseInt(rating.value);
    if (isNaN(ratingValue) || ratingValue === 0) {
        alert("Please select a rating.");
        return;
    }

    const formData = new FormData();
    formData.append("message", message.value); // Add message to the form data
    formData.append("rating", ratingValue);    // Add rating to the form data

    fetch(`../php/explore-tour.php?id=${tourId}`, {
        method: "POST",
        body: formData // Use FormData to send the form data
    })
        .then(response => response.text())  // Use text() instead of json()
        .then(data => {
            if (data.startsWith("success")) {
                alert("Thank you for your feedback! Your comment and rating were submitted successfully.");
            } else if (data.startsWith("error")) {
                alert("Error: " + data.split(":")[1].trim());
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("There was an error submitting your feedback. Please try again.");
        });
});
