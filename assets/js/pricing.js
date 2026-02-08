/**
 * Pricing Module
 * Handles service button selection, billing toggle, and pricing interactions
 */
(function() {
    'use strict';

    // Service URL mapping
    var serviceUrls = {
        'wordpress': '../pages/package.html',
        'turbo': '#',
        'reseller': '#',
        'student': '#',
        'vps': '#',
        'email': '#',
        'domain': '#'
    };

    // Service buttons (desktop)
    var serviceButtons = document.querySelectorAll('.service-btn');
    serviceButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            serviceButtons.forEach(function(b) { b.classList.remove('active'); });
            this.classList.add('active');

            var service = this.getAttribute('data-service');
            var url = this.getAttribute('data-url') || serviceUrls[service];
            if (url && url !== '#') {
                window.location.href = url;
            }
        });
    });

    // Service dropdown (mobile)
    var dropdownHeader = document.querySelector('.service-dropdown .dropdown-header');
    var dropdownMenu = document.querySelector('.service-dropdown .dropdown-menu');
    var dropdownItems = document.querySelectorAll('.service-dropdown .dropdown-item');
    var dropdownArrow = document.querySelector('.service-dropdown .dropdown-arrow');

    if (dropdownHeader && dropdownMenu) {
        dropdownHeader.addEventListener('click', function() {
            dropdownMenu.classList.toggle('show');
            if (dropdownArrow) dropdownArrow.classList.toggle('rotate');
        });

        dropdownItems.forEach(function(item) {
            item.addEventListener('click', function() {
                dropdownItems.forEach(function(i) { i.classList.remove('active'); });
                this.classList.add('active');
                var selectedIcon = document.querySelector('.selected-icon');
                var selectedText = document.querySelector('.selected-text');
                if (selectedIcon) selectedIcon.textContent = this.querySelector('.item-icon').textContent;
                if (selectedText) selectedText.textContent = this.querySelector('.item-text').textContent;
                dropdownMenu.classList.remove('show');
                if (dropdownArrow) dropdownArrow.classList.remove('rotate');

                // Sync with desktop buttons
                var service = this.getAttribute('data-service');
                serviceButtons.forEach(function(btn) {
                    btn.classList.toggle('active', btn.getAttribute('data-service') === service);
                });

                // Navigate to service page
                var url = this.getAttribute('data-url') || serviceUrls[service];
                if (url && url !== '#') {
                    window.location.href = url;
                }
            });
        });

        document.addEventListener('click', function(e) {
            if (!dropdownHeader.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.remove('show');
                if (dropdownArrow) dropdownArrow.classList.remove('rotate');
            }
        });
    }

    // Billing toggle
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
})();
