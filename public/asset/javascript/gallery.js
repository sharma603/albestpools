// Function to open the modal and display image details
function openModal(button) {
    const img = $(button).siblings(".gallery-image-container").find("img");
    const title = img.data("title");
    const description = img.data("description");

    // Set modal content
    $("#imageModalLabel").text(title);
    $("#modal-img").attr("src", img.attr("src"));
    $("#modal-description").text(description);

    // Show the modal
    $("#imageModal").modal("show");
}

// Close the modal when clicking the close button
$(document).on("click", ".btn-close", function () {
    $("#imageModal").modal("hide");
});
