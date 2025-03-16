// JavaScript to add shadow effects
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.addEventListener('mouseover', function() {
            section.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.3)';
        });
        section.addEventListener('mouseout', function() {
            section.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        });
    });
});
