function toggleDropdown() {
    var dropdownContent = document.getElementById("dropdownContent");
    dropdownContent.style.display =
        dropdownContent.style.display === "block" ? "none" : "block";

    var dropdownIcon = document.querySelector(".dropdown-icon-nav");
    dropdownIcon.classList.toggle("rotate-up");
};

function toggleDropdownNotifi() {
    var dropdownContent = document.getElementById("dropdownContentNotification");
    if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
    } else {
        dropdownContent.style.display = "block";
    }

    var dropdownIcon = document.querySelector(".button-notification");
    dropdownIcon.classList.toggle("icon-notification");
}


$(document).ready(function() {
    $('#check1').on('change', function() {
        var newLocale = $(this).is(':checked') ? 'en' : 'pt';

        window.location.href = '/change-language/' + newLocale;
    });
});
