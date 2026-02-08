/**
 * Pricing Module
 * Handles service button selection, billing toggle, and mobile service dropdown
 * Uses getElementById for reliable element targeting
 */
(function() {
    'use strict';

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPricingHero);
    } else {
        initPricingHero();
    }

    function initPricingHero() {

        // =============================
        // DESKTOP SERVICE BUTTONS
        // =============================
        var serviceButtons = document.querySelectorAll('.pricing-hero-section .service-btn');

        serviceButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();

                // Remove active from all buttons
                serviceButtons.forEach(function(b) {
                    b.classList.remove('active');
                });

                // Add active to clicked button
                this.classList.add('active');

                // Get URL and navigate
                var url = this.getAttribute('data-url');
                if (url && url !== '#') {
                    window.location.href = url;
                }
            });
        });

        // =============================
        // MOBILE DROPDOWN
        // =============================
        var dropdownHeader = document.getElementById('pricingDropdownHeader');
        var dropdownMenu = document.getElementById('pricingDropdownMenu');
        var dropdownArrow = document.getElementById('pricingDropdownArrow');
        var dropdownItems = document.querySelectorAll('.pricing-hero-section .dropdown-item');

        if (!dropdownHeader || !dropdownMenu) {
            return; // Exit if elements don't exist
        }

        // Toggle dropdown on header click
        dropdownHeader.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            var isOpen = dropdownMenu.classList.contains('show');

            if (isOpen) {
                dropdownMenu.classList.remove('show');
                dropdownArrow.classList.remove('rotate');
            } else {
                dropdownMenu.classList.add('show');
                dropdownArrow.classList.add('rotate');
            }
        });

        // Handle dropdown item clicks
        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function(e) {
                var href = this.getAttribute('href');

                // Prevent default for # links
                if (href === '#') {
                    e.preventDefault();
                }

                // Update active state
                dropdownItems.forEach(function(i) {
                    i.classList.remove('active');
                });
                this.classList.add('active');

                // Update header text and icon
                var iconText = this.querySelector('.item-icon').textContent;
                var labelText = this.querySelector('.item-text').textContent;

                var selectedIcon = document.querySelector('.pricing-hero-section .selected-icon');
                var selectedText = document.querySelector('.pricing-hero-section .selected-text');

                if (selectedIcon) selectedIcon.textContent = iconText;
                if (selectedText) selectedText.textContent = labelText;

                // Close dropdown
                dropdownMenu.classList.remove('show');
                dropdownArrow.classList.remove('rotate');

                // Sync with desktop buttons
                var service = this.getAttribute('data-service');
                serviceButtons.forEach(function(btn) {
                    if (btn.getAttribute('data-service') === service) {
                        btn.classList.add('active');
                    } else {
                        btn.classList.remove('active');
                    }
                });

                // Navigate if real URL
                if (href && href !== '#') {
                    setTimeout(function() {
                        window.location.href = href;
                    }, 200);
                }
            });
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdownHeader.contains(e.target) &&
                !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
                dropdownArrow.classList.remove('rotate');
            }
        });

        // Touch support for mobile
        dropdownHeader.addEventListener('touchend', function(e) {
            e.preventDefault();

            var isOpen = dropdownMenu.classList.contains('show');

            if (isOpen) {
                dropdownMenu.classList.remove('show');
                dropdownArrow.classList.remove('rotate');
            } else {
                dropdownMenu.classList.add('show');
                dropdownArrow.classList.add('rotate');
            }
        });

        // =============================
        // BILLING TOGGLE
        // =============================
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

})();
