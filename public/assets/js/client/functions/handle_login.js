$(document).ready(() => {
    const signupLink = $('#signup-link');
    const icon = $('#plane-icon');
    const pinpoint_pin = $('#pin_point-link')

    if (pinpoint_pin) {
        pinpoint_pin.css({transform:finalCurvedTransform})
    }

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

                // After the curved animation completes, move straight without resetting
                setTimeout(() => {
                    const finalStraightTransform = 'translate(-1200em, -900em) rotate(0deg) scale(1.5)';
                    icon.css({ transform: finalStraightTransform
                    });
                    console.log("Straight animation started with transform:", finalStraightTransform);
                    
                    // Re-enable the signup link after the animation
                    signupLink.prop('disabled', false);
                }, CURVE_DURATION); // Start straight after curved duration
            }

            moveImage(); // Start the animation
        });
    }
});
