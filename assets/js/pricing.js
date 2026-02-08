/**
 * Pricing Module
 * Handles service button selection, billing toggle, and mobile service dropdown
 * Uses event delegation for reliable mobile support
 */
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Service URL mapping (fallback if no href/data-url)
    var serviceUrls = {
        'wordpress': '../pages/package.html',
        'turbo': '#',
        'reseller': '#',
        'student': '#',
        'vps': '#',
        'email': '#',
        'domain': '#'
    };

    // --- Desktop Service Buttons ---
    document.addEventListener('click', function(e) {
        var btn = e.target.closest('.service-btn');
        if (!btn) return;

        var allBtns = document.querySelectorAll('.service-btn');
        allBtns.forEach(function(b) { b.classList.remove('active'); });
        btn.classList.add('active');

        var service = btn.getAttribute('data-service');
        var url = btn.getAttribute('data-url') || serviceUrls[service];
        if (url && url !== '#') {
            window.location.href = url;
        }
    });

    // --- Mobile Service Dropdown ---
    var dropdownOpen = false;

    function toggleDropdown(show) {
        var menu = document.querySelector('.service-dropdown .dropdown-menu');
        var arrow = document.querySelector('.service-dropdown .dropdown-arrow');
        if (!menu) return;

        dropdownOpen = typeof show === 'boolean' ? show : !dropdownOpen;

        if (dropdownOpen) {
            menu.classList.add('show');
            if (arrow) arrow.classList.add('rotate');
        } else {
            menu.classList.remove('show');
            if (arrow) arrow.classList.remove('rotate');
        }
    }

    // Use event delegation on document for all dropdown interactions
    document.addEventListener('click', function(e) {
        var header = document.querySelector('.service-dropdown .dropdown-header');
        var menu = document.querySelector('.service-dropdown .dropdown-menu');

        if (!header || !menu) return;

        // Click on dropdown header — toggle open/close
        if (header.contains(e.target)) {
            e.preventDefault();
            e.stopPropagation();
            toggleDropdown();
            return;
        }

        // Click on a dropdown item
        var item = e.target.closest('.service-dropdown .dropdown-item');
        if (item) {
            // Update active state
            var allItems = menu.querySelectorAll('.dropdown-item');
            allItems.forEach(function(i) { i.classList.remove('active'); });
            item.classList.add('active');

            // Update the header display
            var iconEl = item.querySelector('.item-icon');
            var textEl = item.querySelector('.item-text');
            var selectedIcon = document.querySelector('.service-dropdown .selected-icon');
            var selectedText = document.querySelector('.service-dropdown .selected-text');
            if (selectedIcon && iconEl) selectedIcon.textContent = iconEl.textContent;
            if (selectedText && textEl) selectedText.textContent = textEl.textContent;

            // Close the dropdown
            toggleDropdown(false);

            // Sync with desktop buttons
            var service = item.getAttribute('data-service');
            var allBtns = document.querySelectorAll('.service-btn');
            allBtns.forEach(function(btn) {
                btn.classList.toggle('active', btn.getAttribute('data-service') === service);
            });

            // Navigation: <a> tags handle it natively via href.
            // For items with href="#", prevent page jump.
            var href = item.getAttribute('href');
            if (href === '#') {
                e.preventDefault();
            }
            // Items with real href (e.g. package.html) navigate naturally.
            return;
        }

        // Click outside — close dropdown
        if (!header.contains(e.target) && !menu.contains(e.target)) {
            toggleDropdown(false);
        }
    });

    // Also handle touchstart for faster mobile response
    document.addEventListener('touchend', function(e) {
        var header = document.querySelector('.service-dropdown .dropdown-header');
        if (header && header.contains(e.target)) {
            e.preventDefault();
            toggleDropdown();
        }
    });

    // --- Billing Toggle ---
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
});
