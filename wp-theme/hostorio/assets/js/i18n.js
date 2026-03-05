/**
 * I18n Manager
 * Handles language switching and currency conversion
 */
class I18nManager {
    constructor() {
        this.defaultLanguage = 'en';
        this.defaultCurrency  = 'BDT';
        this.exchangeRate     = 125;

        this.currentLanguage = this._loadPref('selectedLanguage', this.defaultLanguage);
        this.currentCurrency = this._loadPref('selectedCurrency', this.defaultCurrency);

        // Always defer first render so every other script has fully executed first
        setTimeout(() => this.init(), 0);
    }

    /* ─────────────────────────── private helpers ─────────────────────────── */

    _loadPref(key, fallback) {
        try { return localStorage.getItem(key) || fallback; } catch (_) { return fallback; }
    }

    _savePref(key, value) {
        try { localStorage.setItem(key, value); } catch (_) {}
    }

    /* ─────────────────────────── public API ───────────────────────────────── */

    /** Called once on page load */
    init() {
        this._applyAll();
    }

    /** Return translated string for a dot-path key, e.g. "nav.home" */
    translate(keyPath) {
        const tree = window.translations && window.translations[this.currentLanguage];
        if (!tree) return keyPath;

        const result = keyPath.split('.').reduce((node, k) => {
            return (node && typeof node === 'object' && k in node) ? node[k] : undefined;
        }, tree);

        // Always return a string — never return an object
        return (result !== undefined && typeof result === 'string') ? result : keyPath;
    }

    /** Switch language and update every [data-i18n] element */
    setLanguage(lang) {
        if (lang !== 'en' && lang !== 'bn') return;
        this.currentLanguage = lang;
        this._savePref('selectedLanguage', lang);
        this._applyTranslations();
    }

    /** Switch currency and update every [data-auto-price] element */
    setCurrency(currency) {
        if (currency !== 'USD' && currency !== 'BDT') return;
        this.currentCurrency = currency;
        this._savePref('selectedCurrency', currency);
        this._applyPrices();
    }

    /** Convert a USD price to the current currency (numeric) */
    convertPrice(usdPrice) {
        return this.currentCurrency === 'BDT' ? usdPrice * this.exchangeRate : usdPrice;
    }

    /**
     * Format a price for display.
     *   USD → "$2.24"
     *   BDT → "৳২৪৬"  (Bengali numerals via bn-BD locale)
     */
    formatPrice(usdPrice) {
        const price = this.convertPrice(usdPrice);

        if (this.currentCurrency === 'USD') {
            return new Intl.NumberFormat('en-US', {
                style: 'currency', currency: 'USD',
                minimumFractionDigits: 2, maximumFractionDigits: 2
            }).format(price);
        }

        // BDT — round then format with Bengali locale
        return new Intl.NumberFormat('bn-BD', {
            style: 'currency', currency: 'BDT',
            minimumFractionDigits: 0, maximumFractionDigits: 0
        }).format(Math.round(price));
    }

    /* ─────────────────────────── DOM updaters ─────────────────────────────── */

    _applyAll() {
        this._applyTranslations();
        this._applyPrices();
    }

    _applyTranslations() {
        // Text elements
        document.querySelectorAll('[data-i18n]').forEach(el => {
            const key = el.getAttribute('data-i18n');
            if (!key) return;
            const text = this.translate(key);
            // Use innerHTML when the translation contains any HTML tag
            if (/<[a-z]/i.test(text)) {
                el.innerHTML = text;
            } else {
                el.textContent = text;
            }
        });

        // Input placeholders
        document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
            const key = el.getAttribute('data-i18n-placeholder');
            if (!key) return;
            el.placeholder = this.translate(key);
        });
    }

    _applyPrices() {
        // Price numbers
        document.querySelectorAll('[data-auto-price]').forEach(el => {
            const usd = parseFloat(el.getAttribute('data-auto-price'));
            if (isNaN(usd)) return;

            const formatted = this.formatPrice(usd);

            if (el.classList.contains('cloud-amount')) {
                // Show only the numeric part (strip currency symbol / letters)
                el.textContent = formatted.replace(/[^\d০-৯.,]/g, '');
            } else {
                el.textContent = formatted;
            }
        });

        // Currency symbols
        document.querySelectorAll('[data-currency-symbol]').forEach(el => {
            el.textContent = this.currentCurrency === 'USD' ? '$' : '৳';
        });
    }
}

// Single global instance
window.i18n = new I18nManager();
