// Function to validate form inputs
function validateInputs() {
  let email = document.getElementById('email').value;
  let password = document.getElementById('password').value;
  let confirmPassword = document.getElementById('confirmPassword').value;

  let emailError = document.getElementById('emailError');
  let passwordError = document.getElementById('passwordError');
  let confirmPasswordError = document.getElementById('confirmPasswordError');

  // Clear previous error messages
  emailError.textContent = '';
  passwordError.textContent = '';
  confirmPasswordError.textContent = '';

  let isValid = true;

  // Improved email validation using a regular expression
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (email === '' || !emailRegex.test(email)) {
      emailError.textContent = 'Please enter a valid email.';
      isValid = false;
  }

  if (password === '' || password.length < 6) {
      passwordError.textContent = 'Password must be at least 6 characters.';
      isValid = false;
  }

  if (password !== confirmPassword) {
      confirmPasswordError.textContent = 'Passwords do not match.';
      isValid = false;
  }

  return isValid;
}

// Modal functionality
document.getElementById('openModal').onclick = function() {
   document.getElementById('mediaModal').style.display = 'flex';
};

document.querySelector('.close').onclick = function() {
   document.getElementById('mediaModal').style.display = 'none';
};
