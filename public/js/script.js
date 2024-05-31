// import "bootstrap/dist/js/bootstrap.bundle.min.js";
document.addEventListener("DOMContentLoaded", function () {
    // Function to hide an element with fade-out effect after a specified time
    function hideAlertAfterTime(alertId, timeout) {
        var alertElement = document.getElementById(alertId);
        if (alertElement) {
            setTimeout(function () {
                alertElement.classList.add("fade-out");
                // Wait for the transition to complete before setting display to none
                setTimeout(function () {
                    alertElement.style.display = "none";
                }, 1000); // Match this duration with the CSS transition duration
            }, timeout);
        }
    }

    // Hide success alert after 5 seconds (5000 milliseconds)
    hideAlertAfterTime("success-alert", 2000);

    // Hide error alert after 5 seconds (5000 milliseconds)
    hideAlertAfterTime("error-alert", 2000);
});

function goBack() {
    window.history.back();
}
