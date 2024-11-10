function startCountdown(durationInSeconds) {
    const countdownDate = new Date().getTime() + durationInSeconds * 1000;

    const updateCountdown = () => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("deal_days").innerText = days.toString().padStart(2, '0');
        document.getElementById("deal_hours").innerText = hours.toString().padStart(2, '0');
        document.getElementById("deal_minutes").innerText = minutes.toString().padStart(2, '0');
        document.getElementById("deal_seconds").innerText = seconds.toString().padStart(2, '0');

        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById("deal_days").innerText = "00";
            document.getElementById("deal_hours").innerText = "00";
            document.getElementById("deal_minutes").innerText = "00";
            document.getElementById("deal_seconds").innerText = "00";
        }
    };

    const countdownInterval = setInterval(updateCountdown, 1000);
}

document.addEventListener("DOMContentLoaded", () => {
    startCountdown(3600);
});
