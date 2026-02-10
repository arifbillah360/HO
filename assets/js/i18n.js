/**
 * I18n Manager
 * Handles language switching and currency conversion
 */
class I18nManager {
    constructor() {
        // Default values
        this.defaultLanguage = 'en';
        this.defaultCurrency = 'BDT';

        // Exchange rate: 1 USD = 110 BDT
        this.exchangeRate = 110;

        // Load saved preferences or use defaults
        this.currentLanguage = this.loadLanguage();
        this.currentCurrency = this.loadCurrency();

        // Initialize on DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.init());
        } else {
            this.init();
        }
    }

    /**
     * Load language from localStorage
     */
    loadLanguage() {
        try {
            return localStorage.getItem('selectedLanguage') || this.defaultLanguage;
        } catch (e) {
            return this.defaultLanguage;
        }
    }

    /**
     * Load currency from localStorage
     */
    loadCurrency() {
        try {
            return localStorage.getItem('selectedCurrency') || this.defaultCurrency;
        } catch (e) {
            return this.defaultCurrency;
        }
    }

    /**
     * Initialize i18n system
     */
    init() {
        // Apply initial language and currency
        this.applyTranslations();
        this.applyPrices();

        console.log('I18n initialized:', {
            language: this.currentLanguage,
            currency: this.currentCurrency
        });
    }

    /**
     * Get translation by key path (e.g., "nav.home")
     */
    translate(keyPath) {
        if (!window.translations || !window.translations[this.currentLanguage]) {
            console.warn('Translations not loaded');
            return keyPath;
        }

        const keys = keyPath.split('.');
        let value = window.translations[this.currentLanguage];

        for (const key of keys) {
            if (value && typeof value === 'object' && key in value) {
                value = value[key];
            } else {
                console.warn(`Translation key not found: ${keyPath}`);
                return keyPath;
            }
        }

        return value;
    }

    /**
     * Set language and update DOM
     */
    setLanguage(lang) {
        if (lang !== 'en' && lang !== 'bn') {
            console.error('Unsupported language:', lang);
            return;
        }

        this.currentLanguage = lang;

        // Save to localStorage
        try {
            localStorage.setItem('selectedLanguage', lang);
        } catch (e) {
            console.error('Failed to save language:', e);
        }

        // Apply translations to DOM
        this.applyTranslations();

        console.log('Language changed to:', lang);
    }

    /**
     * Set currency and update prices
     */
    setCurrency(currency) {
        if (currency !== 'USD' && currency !== 'BDT') {
            console.error('Unsupported currency:', currency);
            return;
        }

        this.currentCurrency = currency;

        // Save to localStorage
        try {
            localStorage.setItem('selectedCurrency', currency);
        } catch (e) {
            console.error('Failed to save currency:', e);
        }

        // Apply prices to DOM
        this.applyPrices();

        console.log('Currency changed to:', currency);
    }

    /**
     * Apply translations to all elements with data-i18n attribute
     */
    applyTranslations() {
        const elements = document.querySelectorAll('[data-i18n]');

        elements.forEach(element => {
            const key = element.getAttribute('data-i18n');
            if (key) {
                const translation = this.translate(key);

                // Check if translation contains HTML (like <br>)
                if (translation.includes('<br>')) {
                    element.innerHTML = translation;
                } else {
                    element.textContent = translation;
                }
            }
        });
    }

    /**
     * Apply prices to all elements with data-auto-price attribute
     */
    applyPrices() {
        // Update price amounts
        const priceElements = document.querySelectorAll('[data-auto-price]');

        priceElements.forEach(element => {
            const usdPrice = parseFloat(element.getAttribute('data-auto-price'));
            if (!isNaN(usdPrice)) {
                const formattedPrice = this.formatPrice(usdPrice);

                // Check if this is part of cloud-amount or regular price
                if (element.classList.contains('cloud-amount')) {
                    // For cloud-amount, only update the number
                    element.textContent = formattedPrice.replace(/[^0-9০-৯.,]/g, '');
                } else {
                    // For regular prices, include currency symbol
                    element.textContent = formattedPrice;
                }
            }
        });

        // Update currency symbols
        const symbolElements = document.querySelectorAll('[data-currency-symbol]');

        symbolElements.forEach(element => {
            if (this.currentCurrency === 'USD') {
                element.textContent = '$';
            } else {
                element.textContent = '৳';
            }
        });
    }

    /**
     * Convert USD price to current currency
     */
    convertPrice(usdPrice) {
        if (this.currentCurrency === 'BDT') {
            return usdPrice * this.exchangeRate;
        }
        return usdPrice;
    }

    /**
     * Format price based on current currency
     * @param {number} usdPrice - Price in USD
     * @param {string} fromCurrency - Source currency (default: 'USD')
     */
    formatPrice(usdPrice, fromCurrency = 'USD') {
        let price = usdPrice;

        // Convert if needed
        if (fromCurrency === 'USD' && this.currentCurrency === 'BDT') {
            price = this.convertPrice(usdPrice);
        }

        if (this.currentCurrency === 'USD') {
            // USD format: $2.24
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            }).format(price);
        } else {
            // BDT format: ৳246 (with Bengali numerals)
            const roundedPrice = Math.round(price);

            // Format with Bengali locale
            const formatted = new Intl.NumberFormat('bn-BD', {
                style: 'currency',
                currency: 'BDT',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(roundedPrice);

            return formatted;
        }
    }
}

// Create global instance
if (typeof window !== 'undefined') {
    window.i18n = new I18nManager();
}
