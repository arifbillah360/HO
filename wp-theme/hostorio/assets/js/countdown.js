/**
 * Countdown Timer for Offer Page
 * Auto-repeating 1 week countdown with localStorage persistence
 */
(function() {
    'use strict';

    // =============================
    // AUTO-REPEATING 1 WEEK COUNTDOWN
    // =============================
    function startCountdown() {
        // Get or set the end time (1 week from now)
        let countdownEnd = localStorage.getItem('countdownEnd');

        // If no countdown exists or it's expired, create a new one
        if (!countdownEnd || new Date().getTime() > parseInt(countdownEnd)) {
            const now = new Date().getTime();
            const oneWeek = 7 * 24 * 60 * 60 * 1000; // 7 days in milliseconds
            countdownEnd = now + oneWeek;
            localStorage.setItem('countdownEnd', countdownEnd);
        }

        // Update the countdown every second
        const timer = setInterval(function() {
            const now = new Date().getTime();
            const distance = parseInt(countdownEnd) - now;

            // If countdown is finished, reset it
            if (distance < 0) {
                const oneWeek = 7 * 24 * 60 * 60 * 1000;
                countdownEnd = new Date().getTime() + oneWeek;
                localStorage.setItem('countdownEnd', countdownEnd);
                return; // Skip this iteration and let it recalculate next second
            }

            // Calculate time units
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Update DOM - only if elements exist
            const daysEl = document.getElementById('days');
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes');
            const secondsEl = document.getElementById('seconds');
            const daysRemainingEl = document.getElementById('daysRemaining');

            if (daysEl) daysEl.textContent = padZero(days);
            if (hoursEl) hoursEl.textContent = padZero(hours);
            if (minutesEl) minutesEl.textContent = padZero(minutes);
            if (secondsEl) secondsEl.textContent = padZero(seconds);

            // Update header text
            if (daysRemainingEl) {
                const daysText = days === 1 ? 'Day' : 'Days';
                daysRemainingEl.textContent = days + ' ' + daysText;
            }
        }, 1000);
    }

    // Helper function to pad single digits with zero
    function padZero(num) {
        return num < 10 ? '0' + num : num;
    }

    // Start countdown when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', startCountdown);
    } else {
        startCountdown();
    }
})();
