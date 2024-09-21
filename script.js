const slides = document.querySelectorAll('.slide');
const slideInfo = document.getElementById('slide-info');
const slider = document.querySelector('.slider');

// Function to move the slide info to the mouse position
function updateInfoPosition(e) {
  // Set the position of slide-info based on the mouse coordinates
  slideInfo.style.left = `${e.pageX + 10}px`;  // Offset by 10px to avoid overlap
  slideInfo.style.top = `${e.pageY + 10}px`;
}

slides.forEach(slide => {
  slide.addEventListener('mouseenter', (e) => {
    slideInfo.textContent = slide.getAttribute('data-info');
    slideInfo.style.opacity = '1';  // Make it visible
    updateInfoPosition(e);  // Initial position update
    // Update position on mouse move
    slide.addEventListener('mousemove', updateInfoPosition);
  });

  slide.addEventListener('mouseleave', () => {
    // Resume the slider
    slider.classList.remove('paused');
    // Hide and reset info text
    slideInfo.textContent = 'Hover over a slide to see its information';
    slideInfo.style.opacity = '0';  // Hide the info when not hovering
    // Remove the mousemove event listener to stop updating position
    slide.removeEventListener('mousemove', updateInfoPosition);
  });
});