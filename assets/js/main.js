//Nav Change on Scroll
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    header.classList.toggle("shadow", window.scrollY > 0);
});
//Checkbox
$(document).ready(function () {
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    function selectAll(input) {
        let checkboxes = document.querySelectorAll('#chechkbox1');

        checkboxes.forEach(function(checkbox) {
            checkbox.checked = input.checked;
        })
    }
});