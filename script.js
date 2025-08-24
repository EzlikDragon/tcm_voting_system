// Get the container element for toggling between login and registration forms
const container = document.getElementById('container');
const howBtn = document.getElementById('how');
const loginBtn = document.getElementById('login');

// Add event listener for the registration button
howBtn.addEventListener('click', () => {
    container.classList.add("active"); // Adds 'active' class to show registration form
});

// Add event listener for the login button
loginBtn.addEventListener('click', () => {
    container.classList.remove("active"); // Removes 'active' class to show login form
});

// Get modal element
const modal = document.getElementById('videoModal');
const watchBtn = document.getElementById('WatchBtn');
const closeBtn = document.getElementsByClassName('close')[0];

// Show the modal when the watch button is clicked
watchBtn.addEventListener('click', () => {
    modal.style.display = "block"; // Display the modal
});

// Close the modal when the close button is clicked
closeBtn.addEventListener('click', () => {
    modal.style.display = "none"; // Hide the modal
});

// Close the modal when clicking outside of the modal content
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = "none"; // Hide the modal if the background is clicked
    }
});

