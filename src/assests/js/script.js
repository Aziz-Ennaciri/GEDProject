/* function closePopup() {
    document.getElementById("popupOverlay").style.display = "none";
}

document.addEventListener('DOMContentLoaded', function () {
    var addButton = document.getElementById('addButton');
    var popupFormContainer = document.getElementById('popupOverlay');

    addButton.addEventListener('click', function (event) {
        event.preventDefault();
        popupFormContainer.style.display = 'flex';
    });
}); */
const addButton = document.getElementById('addButton');
const popupOverlay = document.getElementById('popupOverlay');

addButton.addEventListener('click', function () {
    popupOverlay.style.display = 'flex'; // Display the pop-up overlay
});

function closePopup() {
    popupOverlay.style.display = 'none'; // Hide the pop-up overlay
}