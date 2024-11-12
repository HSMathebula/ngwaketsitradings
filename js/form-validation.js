document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);

    fetch("process_form.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show the response from PHP
    })
    .catch(error => {
        console.error("Error:", error);
    });
});

