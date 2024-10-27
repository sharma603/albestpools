$(document).ready(function () {
    // Set up the CSRF token for AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Handle the form submission with AJAX
    $('#inquiry-form').on('submit', function (e) {
        e.preventDefault();

        // Serialize form data
        let formData = $(this).serialize();

        // AJAX POST request
        $.ajax({
            url: "{{ route('inquiry.store') }}",
            type: "POST",
            data: formData,
            success: function (response) {
                $('#success-message').text(response.success).removeClass('d-none'); // Show success message
                $('#inquiry-form')[0].reset(); // Reset form fields
            },
            error: function (xhr) {
                alert('An error occurred. Please try again.');
            }
        });
    });
});