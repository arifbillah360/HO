/**
 * Animations & Interactive Components Module
 * Handles FAQ accordion, testimonial carousel
 */

// FAQ Toggle (global function for onclick)
function toggleFaq(element) {
    var faqItem = element.parentElement;
    var answer = faqItem.querySelector('.faq-answer');
    var arrow = faqItem.querySelector('.faq-arrow');
    var isActive = faqItem.classList.contains('active');
    
    // Close all FAQ items
    document.querySelectorAll('.faq-item').forEach(function(item) {
        item.classList.remove('active');
        var ans = item.querySelector('.faq-answer');
        var arr = item.querySelector('.faq-arrow');
        if (ans) ans.style.maxHeight = null;
        if (arr) arr.style.transform = '';
    });
    
    // Open clicked item if it wasn't already open
    if (!isActive) {
        faqItem.classList.add('active');
        if (answer) answer.style.maxHeight = answer.scrollHeight + 'px';
        if (arrow) arrow.style.transform = 'rotate(180deg)';
    }
}

// Testimonial Carousel
document.addEventListener('DOMContentLoaded', function() {
    var testimonialItems = document.querySelectorAll('.testimonial-horizontal-item');
    var prevButtons = document.querySelectorAll('.carousel-prev');
    var nextButtons = document.querySelectorAll('.carousel-next');
    var currentIndex = 0;

    function showTestimonial(index) {
        testimonialItems.forEach(function(item) { item.classList.remove('active'); });
        if (testimonialItems[index]) testimonialItems[index].classList.add('active');
    }

    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonialItems.length;
        showTestimonial(currentIndex);
    }

    function prevTestimonial() {
        currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
        showTestimonial(currentIndex);
    }

    nextButtons.forEach(function(btn) { btn.addEventListener('click', nextTestimonial); });
    prevButtons.forEach(function(btn) { btn.addEventListener('click', prevTestimonial); });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') prevTestimonial();
        else if (e.key === 'ArrowRight') nextTestimonial();
    });

    showTestimonial(currentIndex);
});
