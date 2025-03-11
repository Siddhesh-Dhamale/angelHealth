document.addEventListener("DOMContentLoaded", function () {
    const siteKey = "6Lflm-8qAAAAANZo3C-6NVWquw-zaZ88g244O6T5"; // Replace with your actual Site Key

    grecaptcha.ready(function () {
        grecaptcha.execute(siteKey, { action: "submit" }).then(function (token) {
            document.querySelectorAll(".recaptcha-response").forEach(function (input) {
                input.value = token;
            });
        });
    });
});
