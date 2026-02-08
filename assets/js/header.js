/**
 * Header Navigation Module
 * Handles mobile menu, dropdowns, and responsive behavior
 */
(function() {
    'use strict';

    const mobileNav = document.getElementById('mobileNav');
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');

    // Toggle mobile menu
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileNav.classList.toggle('active');
            mobileMenuToggle.classList.toggle('active');
            document.body.classList.toggle('menu-open');
        });
    }

    // Desktop dropdown functionality
    const desktopDropdowns = document.querySelectorAll('.desktop-nav .nav-item-dropdown');
    
    desktopDropdowns.forEach(function(dropdown) {
        const trigger = dropdown.querySelector('.nav-item');
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            desktopDropdowns.forEach(function(otherDropdown) {
                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove('active');
                }
            });
            dropdown.classList.toggle('active');
        });
    });

    // Mobile dropdown functionality
    const mobileDropdowns = document.querySelectorAll('.mobile-nav .nav-item-dropdown');
    
    mobileDropdowns.forEach(function(dropdown) {
        const trigger = dropdown.querySelector('.mobile-dropdown-trigger');
        if (trigger) {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropdown.classList.toggle('active');
            });
        }
    });

    // Close menus on outside click
    document.addEventListener('click', function(e) {
        if (mobileNav && !mobileNav.contains(e.target) && 
            !mobileMenuToggle.contains(e.target) && 
            mobileNav.classList.contains('active')) {
            mobileNav.classList.remove('active');
            mobileMenuToggle.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
        
        const desktopNav = document.querySelector('.desktop-nav');
        if (desktopNav && !desktopNav.contains(e.target)) {
            desktopDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
        }
    });

    // Close mobile menu on resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 968) {
            if (mobileNav && mobileNav.classList.contains('active')) {
                mobileNav.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
            desktopDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
            mobileDropdowns.forEach(function(dropdown) {
                dropdown.classList.remove('active');
            });
        }
    });
})();
