/**
 * Billing Toggle Module
 * Handles Monthly / Yearly pricing toggle with 30% yearly discount.
 * Integrates with window.i18n (I18nManager) for currency + language sync.
 */
(function () {
    'use strict';

    const YEARLY_DISCOUNT = 0.30;   // 30 % off when billed yearly
    const STORAGE_KEY     = 'billingPeriod';

    let isYearly = true; // default: yearly

    /* ──────────────────────────────────────────
       Persistence helpers
    ────────────────────────────────────────── */
    function loadPref() {
        try {
            const saved = localStorage.getItem(STORAGE_KEY);
            // anything other than an explicit 'monthly' save → yearly
            isYearly = (saved !== 'monthly');
        } catch (_) {
            isYearly = true;
        }
    }

    function savePref() {
        try { localStorage.setItem(STORAGE_KEY, isYearly ? 'yearly' : 'monthly'); } catch (_) {}
    }

    /* ──────────────────────────────────────────
       Currency / format helpers
    ────────────────────────────────────────── */
    function symbol() {
        return (window.i18n && window.i18n.currentCurrency === 'USD') ? '$' : '৳';
    }

    function fmtAmt(usd) {
        if (!window.i18n) return parseFloat(usd).toFixed(2);
        return window.i18n.formatPrice(usd).replace(/[^\d০-৯.,]/g, '');
    }

    function t(key) {
        if (window.i18n) {
            const v = window.i18n.translate(key);
            return (v && v !== key) ? v : null;
        }
        return null;
    }

    /* ──────────────────────────────────────────
       DOM: toggle labels
    ────────────────────────────────────────── */
    function updateLabels() {
        document.querySelectorAll('.billing-toggle').forEach(function (wrapper) {
            const monthly = wrapper.querySelector('[data-i18n="pricing.billedMonthly"]');
            const yearly  = wrapper.querySelector('[data-i18n="pricing.billedAnnually"]');
            if (monthly) monthly.classList.toggle('active', !isYearly);
            if (yearly)  yearly.classList.toggle('active',  isYearly);
        });
    }

    /* ──────────────────────────────────────────
       DOM: price cards
    ────────────────────────────────────────── */
    function updatePrices() {
        const sym = symbol();

        document.querySelectorAll('.cloud-pricing[data-yearly-price]').forEach(function (wrapper) {
            // data-yearly-price stores the BDT amount; convert to USD for calculations
            const yearlyBdt  = parseFloat(wrapper.getAttribute('data-yearly-price'));
            if (isNaN(yearlyBdt)) return;
            const yearlyUsd  = yearlyBdt / 110;

            // Monthly base = yearly / (12 × (1 − discount))  →  yearly / 8.4
            const monthlyUsd = yearlyUsd / (12 * (1 - YEARLY_DISCOUNT));

            const amountEl   = wrapper.querySelector('.cloud-amount');
            const periodEl   = wrapper.querySelector('.cloud-period');
            const origBlock  = wrapper.querySelector('.cloud-price-original');
            const origCurEl  = origBlock  && origBlock.querySelector('[data-orig-currency]');
            const origAmtEl  = origBlock  && origBlock.querySelector('.orig-amount');
            const currEl     = wrapper.querySelector('[data-currency-symbol]');

            if (isYearly) {
                /* ── Yearly view ──────────────────────────────── */
                if (amountEl) amountEl.textContent = fmtAmt(yearlyUsd);

                if (periodEl) {
                    periodEl.textContent = t('pricing.perYear') || '/yr';
                }

                // Strikethrough = what you'd pay monthly × 12 (no discount)
                if (origBlock) {
                    const origUsd = monthlyUsd * 12;
                    if (origCurEl) origCurEl.textContent = sym;
                    if (origAmtEl) origAmtEl.textContent = fmtAmt(origUsd);
                    origBlock.style.display = '';
                }
            } else {
                /* ── Monthly view ─────────────────────────────── */
                if (amountEl) amountEl.textContent = fmtAmt(monthlyUsd);

                if (periodEl) {
                    periodEl.textContent = t('pricing.perMonth') || '/mo';
                }

                // Hide strikethrough block
                if (origBlock) origBlock.style.display = 'none';
            }

            // Always refresh currency symbol
            if (currEl) currEl.textContent = sym;
        });
    }

    /* ──────────────────────────────────────────
       Patch window.i18n so we stay in sync
    ────────────────────────────────────────── */
    function patchI18n() {
        if (!window.i18n) return;

        const origCurrency = window.i18n.setCurrency.bind(window.i18n);
        window.i18n.setCurrency = function (currency) {
            origCurrency(currency);
            updatePrices();
        };

        const origLanguage = window.i18n.setLanguage.bind(window.i18n);
        window.i18n.setLanguage = function (lang) {
            origLanguage(lang);
            updateLabels();
            updatePrices();
        };
    }

    /* ──────────────────────────────────────────
       Init
    ────────────────────────────────────────── */
    function init() {
        if (!document.getElementById('billingToggle')) return; // not a pricing page

        loadPref();
        patchI18n();

        // Set toggle visual state
        const toggle = document.getElementById('billingToggle');
        toggle.checked = isYearly;

        updateLabels();
        updatePrices();

        // Wire up toggle events
        toggle.addEventListener('change', function () {
            isYearly = toggle.checked;
            savePref();
            updateLabels();
            updatePrices();
        });
    }

    // i18n.js defers its first render with setTimeout(0), so we wait a tick
    // longer to ensure translations are already applied before billing runs.
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function () { setTimeout(init, 50); });
    } else {
        setTimeout(init, 50);
    }

    // Expose for external calls (e.g. currency/language buttons)
    window.billing = { refresh: function () { updateLabels(); updatePrices(); } };
})();
