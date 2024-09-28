$(document).ready(() => {
    const icon = $('#plane-icon');
    const ppLink = $('#pinpoint-link')
    const signupLink = $('#signup-link');
    const loginForm = $('#login-form');
    const registerForm = $('#register-form');
    const loginLink = $('#login-link');

    if (signupLink.length) {
        signupLink.on("click", (event) => {
            event.preventDefault();
            console.log("Sign up button clicked");
            signupLink.prop('disabled', true);

            function moveImage() {
                const CURVE_DURATION = 3000; // Duration for the curved animation
                const STRAIGHT_DURATION = 1000; // Duration for the straight movement

                // Define the final position and transformations for the curve
                const finalCurvedTransform = 'translate(40em, -100px) rotate(-95deg) scale(1.5)';
                icon.css({ transform: finalCurvedTransform });
                console.log("Curved animation started with transform:", finalCurvedTransform);

                const ppStraightTransform = 'translate(11.5em, 0px)'
                ppLink.css({transform: ppStraightTransform});


                // After the curved animation completes, move straight without resetting
                setTimeout(() => {
                    const finalStraightTransform = 'translate(-1200em, -900em) rotate(0deg) scale(1.5)';
                    icon.css({ transform: finalStraightTransform });
                    console.log("Straight animation started with transform:", finalStraightTransform);
                    loginForm.hide(); // Hide the login form
                    registerForm.show(); // Show the registration form
                    // Check if routes are defined before using them
                    if (typeof window.Laravel !== 'undefined' && typeof window.Laravel.routes !== 'undefined') {
                        // After animation, switch to the register page
                        setTimeout(() => {
                            // Navigate to the 'register' route in the same tab
                            window.location.href = window.Laravel.routes.register;
                        }, STRAIGHT_DURATION); // Delay switch until the straight animation is done
                    } else {
                        console.error("Routes are undefined");
                    }
                }, CURVE_DURATION); // Start straight after curved duration
            }

            moveImage(); // Start the animation
        });
    }


    // Show the registration form when "Sign Up" is clicked
    signupLink.on("click", (event) => {
        event.preventDefault(); // Prevent default link behavior

    });

    // Show the login form when "Login" is clicked
    loginLink.on("click", (event) => {
        event.preventDefault(); // Prevent default link behavior
        registerForm.hide(); // Hide the registration form
        loginForm.show(); // Show the login form
    });

});