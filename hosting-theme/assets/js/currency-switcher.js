/**
 * Currency Switcher
 *
 * Toggles pricing display between BDT (৳) and USD ($) without page reload.
 *
 * How it works:
 *   - Each .pricing-card has data-price-bdt, data-price-usd,
 *     data-original-bdt, data-original-usd attributes.
 *   - The existing currency-btn / currency-option buttons in the
 *     top bar header trigger the switch.
 *   - Preference is saved to localStorage.
 *   - On page load, saved preference is applied.
 *
 * Exchange rate is passed via wp_localize_script as hostingCurrency.rate
 *
 * @package Hosting_Theme
 * @since   1.0.0
 */

(function () {
    'use strict';

    // Config from wp_localize_script (fallback defaults).
    var config = window.hostingCurrency || {};
    var exchangeRate = parseFloat(config.rate) || 0.0091;
    var defaultCurrency = config.defaultCurrency || 'BDT';
    var STORAGE_KEY = 'hostorio_currency';

    /**
     * Format a number for display.
     *
     * BDT: no decimals, comma-separated (e.g. 1,250)
     * USD: 2 decimals (e.g. 2.24)
     */
    function formatPrice(amount, currency) {
        var num = parseFloat(amount);
        if (isNaN(num)) return '0';

        if (currency === 'USD') {
            return num.toFixed(2);
        }
        // BDT — no decimals, with commas.
        return Math.round(num).toLocaleString('en-IN');
    }

    /**
     * Apply the selected currency to all pricing cards on the page.
     */
    function applyCurrency(currency) {
        var isBDT = currency === 'BDT';

        // ── Update pricing cards ──────────────────────────────────────
        var cards = document.querySelectorAll('.pricing-card');
        cards.forEach(function (card) {
            // Current price elements.
            var bdtSymbols = card.querySelectorAll('.currency-symbol-bdt');
            var usdSymbols = card.querySelectorAll('.currency-symbol-usd');
            var bdtAmounts = card.querySelectorAll('.amount-bdt');
            var usdAmounts = card.querySelectorAll('.amount-usd');

            // Original price elements.
            var originalBdt = card.querySelectorAll('.price-original-bdt');
            var originalUsd = card.querySelectorAll('.price-original-usd');

            // Show/hide based on currency.
            bdtSymbols.forEach(function (el) { el.style.display = isBDT ? '' : 'none'; });
            usdSymbols.forEach(function (el) { el.style.display = isBDT ? 'none' : ''; });
            bdtAmounts.forEach(function (el) { el.style.display = isBDT ? '' : 'none'; });
            usdAmounts.forEach(function (el) { el.style.display = isBDT ? 'none' : ''; });
            originalBdt.forEach(function (el) { el.style.display = isBDT ? '' : 'none'; });
            originalUsd.forEach(function (el) { el.style.display = isBDT ? 'none' : ''; });
        });

        // ── Update header currency buttons ────────────────────────────

        // Desktop toggle buttons.
        var desktopBtns = document.querySelectorAll('.currency-switcher .currency-btn');
        desktopBtns.forEach(function (btn) {
            btn.classList.toggle('active', btn.getAttribute('data-currency') === currency);
        });

        // Mobile dropdown.
        var mobileOptions = document.querySelectorAll('.currency-dropdown-menu .currency-option');
        mobileOptions.forEach(function (opt) {
            opt.classList.toggle('active', opt.getAttribute('data-currency') === currency);
        });

        // Update mobile dropdown display text.
        var currentLabel = document.querySelector('.current-currency');
        if (currentLabel) {
            currentLabel.textContent = currency;
        }

        // Update mobile dropdown icon.
        var dropdownBtn = document.getElementById('currencyDropdownBtn');
        if (dropdownBtn) {
            var icon = dropdownBtn.querySelector('i:first-child');
            if (icon) {
                icon.className = isBDT
                    ? 'fas fa-bangladeshi-taka-sign'
                    : 'fas fa-dollar-sign';
            }
        }

        // Save preference.
        try {
            localStorage.setItem(STORAGE_KEY, currency);
        } catch (e) {
            // localStorage unavailable — silent fail.
        }
    }

    /**
     * Get saved currency preference (or default).
     */
    function getSavedCurrency() {
        try {
            return localStorage.getItem(STORAGE_KEY) || defaultCurrency;
        } catch (e) {
            return defaultCurrency;
        }
    }

    /**
     * Bind click events to all currency toggle elements.
     */
    function bindEvents() {
        // Desktop currency buttons.
        document.querySelectorAll('.currency-switcher .currency-btn').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var currency = this.getAttribute('data-currency');
                if (currency) {
                    applyCurrency(currency);
                }
            });
        });

        // Mobile currency dropdown options.
        document.querySelectorAll('.currency-dropdown-menu .currency-option').forEach(function (opt) {
            opt.addEventListener('click', function (e) {
                e.preventDefault();
                var currency = this.getAttribute('data-currency');
                if (currency) {
                    applyCurrency(currency);
                }
                // Close the dropdown.
                var menu = document.getElementById('currencyDropdownMenu');
                if (menu) {
                    menu.classList.remove('show');
                }
            });
        });
    }

    /**
     * Initialise on DOM ready.
     */
    function init() {
        bindEvents();

        // Apply saved preference on load.
        var saved = getSavedCurrency();
        applyCurrency(saved);
    }

    // Run when DOM is ready.
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
