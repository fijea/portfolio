// Navigation Indicator
document.addEventListener('DOMContentLoaded', function () {
  // Get all the nav links
  const navLinks = document.querySelectorAll('.navbar .nav-link');

  // Reference the offcanvas element
  const offcanvasElement = document.getElementById('offcanvasNavbar');

  // Get the offcanvas instance
  var bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);

  // Add an event listener to each nav link
  navLinks.forEach(link => {
    link.addEventListener('click', function () {
      // Use Bootstrap's native JavaScript method to hide the offcanvas
      bsOffcanvas.hide();
    });
  });
});


// Changing Text
document.addEventListener('DOMContentLoaded', function() {
  var words = ['UI/X Design', 'Interaction Design', 'Information Architecture', 'Service Design', 'User Research', 'Product Design']; // Array of words to cycle through
  var currentIndex = 0; // Current index of the word array
  var changingText = document.getElementById('changingText'); // Reference to the changing text element

  setInterval(function() {
    currentIndex = (currentIndex + 1) % words.length; // Increment the index and loop back to 0 when it reaches the end
    var newWord = words[currentIndex]; // Get the new word
    changingText.textContent = newWord; // Update the text content with the new word

    // Clear any existing underline animation
    changingText.style.textDecoration = 'none';
    changingText.style.borderBottom = 'none';

    // Calculate the width of the new word
    var wordWidth = changingText.offsetWidth;

    // Create the underline element
    var underline = document.createElement('span');
    underline.className = 'underline-animation';
    underline.style.width = '0';
    changingText.appendChild(underline);

    // Animate the underline from left to right
    setTimeout(function() {
      underline.style.width = wordWidth + 'px';
    }, 10);

    // Remove the underline element after the animation completes
    setTimeout(function() {
      changingText.removeChild(underline);
    }, 1000); // Change this value to adjust the duration of the animation
  }, 3000); // Change the word every 3 seconds
});

// Video Loop
const video = document.getElementById('videoPlayer');

  video.addEventListener('ended', () => {
    video.currentTime = 0;
    video.play();
  });

// Scroll Indicator
window.addEventListener('scroll', function() {
  var arrow = document.querySelector('.arrow');
  var threshold = 100; // Adjust this value to set the scroll threshold

  if (window.pageYOffset > threshold) {
    arrow.classList.add('hide-arrow');
  } else {
    arrow.classList.remove('hide-arrow');
  }
});
// Get the arrow element
const arrow = document.querySelector('.arrow');

// Add click event listener to the arrow
arrow.addEventListener('click', () => {
  // Scroll to the section with the ID 'section2'
  const section2 = document.getElementById('section2');
  section2.scrollIntoView({ behavior: 'smooth' });
});


// Thumbnail Tilt FX
/* Get all elements with the class "thumbnail" */
let elements = document.getElementsByClassName('thumbnail');

/* Loop through each element */
for (let i = 0; i < elements.length; i++) {
  let el = elements[i];

  /* Get the height and width of the element */
  const height = el.clientHeight;
  const width = el.clientWidth;

  /*
   * Add a listener for the mousemove event
   * Which will trigger the function 'handleMove'
   * On mousemove
   */
  el.addEventListener('mousemove', handleMove);

  /* Define the handleMove function */
  function handleMove(e) {
    /*
     * Get the position of the mouse cursor
     * With respect to the element
     * On mouseover
     */
    /* Store the x position */
    const xVal = e.layerX;
    /* Store the y position */
    const yVal = e.layerY;

    /*
     * Calculate the rotation value along the Y-axis
     * Here the multiplier 20 is to
     * control the rotation
     * You can change the value and see the results
     */
    const yRotation = 20 * ((xVal - width / 2) / width);

    /* Calculate the rotation along the X-axis */
    const xRotation = -20 * ((yVal - height / 2) / height);

    /* Generate a string for the CSS transform property */
    const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)';

    /* Apply the calculated transformation */
    el.style.transform = string;
  }

  /* Add a listener for the mouseout event to remove the rotation */
  el.addEventListener('mouseout', function() {
    el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)';
  });

  /* Add a listener for the mousedown event to simulate click */
  el.addEventListener('mousedown', function() {
    el.style.transform = 'perspective(500px) scale(0.9) rotateX(0) rotateY(0)';
  });

  /* Add a listener for the mouseup event to simulate the release of the mouse click */
  el.addEventListener('mouseup', function() {
    el.style.transform = 'perspective(500px) scale(1.1) rotateX(0) rotateY(0)';
  });
}

// Auto Update Copyright
const currentYear = new Date().getFullYear();
document.getElementById('currentYear').textContent = currentYear;