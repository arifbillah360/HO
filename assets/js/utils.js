/**
 * Utilities Module
 * Handles language selection, currency switching, and user preferences
 */
(function() {
    'use strict';

    // Language dropdown elements
    const languageSelector = document.querySelector('.language-selector');
    const languageDropdownMenu = document.querySelector('.language-dropdown-menu');
    const languageOptions = document.querySelectorAll('.language-option');
    const currentLanguageText = document.querySelector('.language-selector span');
    const currentLanguageFlag = document.querySelector('.language-selector .flag-icon');

    // Currency elements
    const currencyButtons = document.querySelectorAll('.currency-btn');
    const currencyDropdownBtn = document.getElementById('currencyDropdownBtn');
    const currencyDropdownMenu = document.getElementById('currencyDropdownMenu');
    const currencyOptions = document.querySelectorAll('.currency-option');
    const currentCurrencyText = document.querySelector('.current-currency');

    // Language dropdown toggle
    if (languageSelector && languageDropdownMenu) {
        languageSelector.addEventListener('click', function(e) {
            e.stopPropagation();
            languageSelector.classList.toggle('active');
            languageDropdownMenu.classList.toggle('show');
            if (currencyDropdownMenu) {
                currencyDropdownMenu.classList.remove('show');
                if (currencyDropdownBtn) {
                    currencyDropdownBtn.classList.remove('active');
                }
            }
        });

        languageOptions.forEach(function(option) {
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                var selectedLanguage = this.getAttribute('data-language');
                var selectedFlag = this.getAttribute('data-flag');
                var languageText = this.querySelector('span').textContent;
                if (currentLanguageText) currentLanguageText.textContent = languageText;
                if (currentLanguageFlag) currentLanguageFlag.src = selectedFlag;
                languageOptions.forEach(function(opt) { opt.classList.remove('active'); });
                this.classList.add('active');
                languageDropdownMenu.classList.remove('show');
                languageSelector.classList.remove('active');
                updateLanguage(selectedLanguage);
            });
        });

        document.addEventListener('click', function(e) {
            if (!languageSelector.contains(e.target) && !languageDropdownMenu.contains(e.target)) {
                languageDropdownMenu.classList.remove('show');
                languageSelector.classList.remove('active');
            }
        });
    }

    // Desktop currency switcher
    currencyButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            currencyButtons.forEach(function(btn) { btn.classList.remove('active'); });
            this.classList.add('active');
            updateCurrency(this.getAttribute('data-currency'));
        });
    });

    // Mobile currency dropdown
    if (currencyDropdownBtn && currencyDropdownMenu) {
        currencyDropdownBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            currencyDropdownBtn.classList.toggle('active');
            currencyDropdownMenu.classList.toggle('show');
            if (languageDropdownMenu) {
                languageDropdownMenu.classList.remove('show');
                if (languageSelector) languageSelector.classList.remove('active');
            }
        });

        currencyOptions.forEach(function(option) {
            option.addEventListener('click', function(e) {
                e.stopPropagation();
                var selectedCurrency = this.getAttribute('data-currency');
                var iconHTML = this.querySelector('i').outerHTML;
                currentCurrencyText.textContent = selectedCurrency;
                currencyDropdownBtn.querySelector('i:first-child').outerHTML = iconHTML;
                currencyOptions.forEach(function(opt) { opt.classList.remove('active'); });
                this.classList.add('active');
                currencyDropdownMenu.classList.remove('show');
                currencyDropdownBtn.classList.remove('active');
                updateCurrency(selectedCurrency);
            });
        });

        document.addEventListener('click', function(e) {
            if (!currencyDropdownBtn.contains(e.target) && !currencyDropdownMenu.contains(e.target)) {
                currencyDropdownMenu.classList.remove('show');
                currencyDropdownBtn.classList.remove('active');
            }
        });
    }

    function updateLanguage(language) {
        try { localStorage.setItem('selectedLanguage', language); } catch (e) {}
    }

    function updateCurrency(currency) {
        try { localStorage.setItem('selectedCurrency', currency); } catch (e) {}
        currencyButtons.forEach(function(btn) {
            btn.classList.toggle('active', btn.getAttribute('data-currency') === currency);
        });
        if (currentCurrencyText) currentCurrencyText.textContent = currency;
        currencyOptions.forEach(function(opt) {
            opt.classList.toggle('active', opt.getAttribute('data-currency') === currency);
        });
    }

    // Load saved preferences
    var savedLanguage = 'en';
    try { savedLanguage = localStorage.getItem('selectedLanguage') || 'en'; } catch (e) {}
    
    if (savedLanguage && languageOptions) {
        languageOptions.forEach(function(option) {
            if (option.getAttribute('data-language') === savedLanguage) {
                var languageText = option.querySelector('span').textContent;
                var selectedFlag = option.getAttribute('data-flag');
                if (currentLanguageText) currentLanguageText.textContent = languageText;
                if (currentLanguageFlag) currentLanguageFlag.src = selectedFlag;
                option.classList.add('active');
            } else {
                option.classList.remove('active');
            }
        });
    }

    var savedCurrency = 'BDT';
    try { savedCurrency = localStorage.getItem('selectedCurrency') || 'BDT'; } catch (e) {}
    updateCurrency(savedCurrency);
})();







(function() {
    'use strict';

    function setupPackageChooser() {
        // Get elements
        var btn = document.getElementById('mobileChooserBtn');
        var list = document.getElementById('packageList');
        var chevron = document.getElementById('chevronIcon');
        var displayIcon = document.getElementById('displayIcon');
        var displayLabel = document.getElementById('displayLabel');
        var options = document.querySelectorAll('.package-chooser-wrapper .list-option');

        if (!btn || !list) return;

        var isOpen = false;

        // Toggle list
        btn.onclick = function(e) {
            e.preventDefault();
            e.stopPropagation();

            isOpen = !isOpen;

            if (isOpen) {
                list.style.maxHeight = '450px';
                list.style.opacity = '1';
                chevron.style.transform = 'rotate(180deg)';
            } else {
                list.style.maxHeight = '0';
                list.style.opacity = '0';
                chevron.style.transform = 'rotate(0deg)';
            }
        };

        // Handle option clicks
        for (var i = 0; i < options.length; i++) {
            options[i].onclick = function(e) {
                var icon = this.getAttribute('data-icon');
                var label = this.getAttribute('data-label');
                var url = this.getAttribute('href');

                // Update display
                displayIcon.textContent = icon;
                displayLabel.textContent = label;

                // Remove all selected
                for (var j = 0; j < options.length; j++) {
                    options[j].classList.remove('selected');
                }

                // Add selected to this
                this.classList.add('selected');

                // Close list
                isOpen = false;
                list.style.maxHeight = '0';
                list.style.opacity = '0';
                chevron.style.transform = 'rotate(0deg)';

                // Navigate
                setTimeout(function() {
                    window.location.href = url;
                }, 200);

                e.preventDefault();
            };
        }

        // Close on outside click
        document.onclick = function(e) {
            if (!btn.contains(e.target) && !list.contains(e.target)) {
                isOpen = false;
                list.style.maxHeight = '0';
                list.style.opacity = '0';
                chevron.style.transform = 'rotate(0deg)';
            }
        };

        // Desktop cards
        var cards = document.querySelectorAll('.package-chooser-wrapper .package-card');
        for (var k = 0; k < cards.length; k++) {
            cards[k].onclick = function() {
                for (var m = 0; m < cards.length; m++) {
                    cards[m].classList.remove('highlighted');
                }
                this.classList.add('highlighted');
            };
        }

        // Billing Toggle
        var billingToggle = document.getElementById('billingToggle');
        if (billingToggle) {
            billingToggle.addEventListener('change', function() {
                var labels = document.querySelectorAll('.toggle-label');
                labels.forEach(function(label) { label.classList.remove('active'); });
                if (this.checked) {
                    if (labels[1]) labels[1].classList.add('active');
                } else {
                    if (labels[0]) labels[0].classList.add('active');
                }
            });
        }
    }

    // Init when ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setupPackageChooser);
    } else {
        setupPackageChooser();
    }

})();