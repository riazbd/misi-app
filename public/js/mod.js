var labels = document.querySelectorAll("label");

labels.forEach(function (label) {
    label.addEventListener("click", function (event) {
        event.preventDefault();
    });
});
