$(document).ready(function() {
    $('#apply_now_first_start').click(function() {
        // Show the spinner for 1.3 seconds
        $('#first_spin').show();

        setTimeout(function() {
            // Hide the spinner
            $('#first_spin').hide();

            // Animate the height of #con_container_one to 0vh over 1.3 seconds
            $('#con_container_one').css({
                'transform': 'translateY(-100%)'
            });

            // After the height transition completes (1.3s), set display to none
            setTimeout(function() {
                $('#con_container_one').css('display', 'none');

                // Now, show #con_container_two with height 100vh and display block
                $('#con_container_two').css({
                    'display': 'block',
                    'transition': 'height 1.3s ease',
                    'height': '100vh'
                });
            }, 1300); // Wait for the height transition to complete (1.3s)

        }, 1300); // 1.3 seconds for showing the spinner
    });
});