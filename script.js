const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signIn');
        const signUpForm = document.getElementById('signUp');

        signUpButton.addEventListener('click', function() {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });

        signInButton.addEventListener('click', function() {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        });

        function togglePasswordVisibility(passwordId, button) {
            var passwordField = document.getElementById(passwordId);
            var icon = button.querySelector('i'); 

            if (passwordField.type === "password") {
                passwordField.type = "text"; 
                icon.classList.remove('fa-eye-slash'); 
                icon.classList.add('fa-eye'); 
            } else {
                passwordField.type = "password"; 
                icon.classList.remove('fa-eye'); 
                icon.classList.add('fa-eye-slash'); 
            }
        }
        