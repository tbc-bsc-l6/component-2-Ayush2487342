$(document).on('click','#sidebar li',function(){
    $(this).addClass('active').siblings().removeClass('active');
});

function show_hide(listId, caretId) {
    var click = document.getElementById(listId);
    var caretIcon = document.getElementById(caretId);

    // Hide all other dropdowns
    var allLists = document.querySelectorAll('.left-menu-dp');
    var allCarets = document.querySelectorAll('.fa-caret-up, .fa-caret-down');
    allLists.forEach(function(list) {
        if (list.id !== listId) {
            list.style.display = "none";
        }
    });
    allCarets.forEach(function(caret) {
        if (caret.id !== caretId) {
            caret.classList.remove("fa-caret-up");
            caret.classList.add("fa-caret-down");
        }
    });

    // Toggle the display of the clicked dropdown
    if (click.style.display === "none" || click.style.display === "") {
        click.style.display = "block";  // Show the dropdown
        caretIcon.classList.remove("fa-caret-down");
        caretIcon.classList.add("fa-caret-up");  // Change icon to caret-up
    } else {
        click.style.display = "none";  // Hide the dropdown
        caretIcon.classList.remove("fa-caret-up");
        caretIcon.classList.add("fa-caret-down");  // Change icon back to caret-down
    }
}
function show_hide(listId1, caretId1) {
    var click = document.getElementById(listId1);
    var caretIcon = document.getElementById(caretId1);

    // Hide all other dropdowns
    var allLists = document.querySelectorAll('.left-menu-dp1');
    var allCarets = document.querySelectorAll('.fa-caret-up, .fa-caret-down');
    allLists.forEach(function(list) {
        if (list.id !== listId1) {
            list.style.display = "none";
        }
    });
    allCarets.forEach(function(caret) {
        if (caret.id !== caretId1) {
            caret.classList.remove("fa-caret-up");
            caret.classList.add("fa-caret-down");
        }
    });

    // Toggle the display of the clicked dropdown
    if (click.style.display === "none" || click.style.display === "") {
        click.style.display = "block";  // Show the dropdown
        caretIcon.classList.remove("fa-caret-down");
        caretIcon.classList.add("fa-caret-up");  // Change icon to caret-up
    } else {
        click.style.display = "none";  // Hide the dropdown
        caretIcon.classList.remove("fa-caret-up");
        caretIcon.classList.add("fa-caret-down");  // Change icon back to caret-down
    }
}

// Ensure the dropdowns are hidden on page load
window.onload = function() {
    var allLists = document.querySelectorAll('.left-menu-dp');
    allLists.forEach(function(list) {
        list.style.display = "none";  // Initially hide all dropdowns
    });
};
window.onload = function() {
    var allLists = document.querySelectorAll('.left-menu-dp1');
    allLists.forEach(function(list) {
        list.style.display = "none";  // Initially hide all dropdowns
    });
};




//  sidebar toggle
$(document).ready(function(){
    $("#toogleSidebar").click(function(){
        $(".left-menu").toggleClass("hide");
        $(".content-wrapper").toggleClass("hide");
    });
});

$(document).ready( function () {
    $('#example').DataTable();
} );



//image upload 
 // Disable auto-process in Dropzone
 Dropzone.options.imageUploadForm = {
    autoProcessQueue: false, // Prevent automatic upload
    maxFiles: 1, // Allow only one file
    acceptedFiles: 'image/*',
    init: function () {
        const myDropzone = this;
        const submitButton = document.querySelector("#submit-button");
        const alertMessage = document.querySelector("#alert-message");

        submitButton.addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();

            // Process the file queue manually
            if (myDropzone.getQueuedFiles().length > 0) {
                myDropzone.processQueue();
            } else {
                alertMessage.classList.remove('d-none', 'alert-success', 'alert-danger');
                alertMessage.classList.add('alert-danger');
                alertMessage.textContent = 'Please select a file before submitting!';
            }
        });

        myDropzone.on("success", function (file, response) {
            alertMessage.classList.remove('d-none', 'alert-danger');
            alertMessage.classList.add('alert-success');
            alertMessage.textContent = response.message;
        });

        myDropzone.on("error", function (file, response) {
            alertMessage.classList.remove('d-none', 'alert-success');
            alertMessage.classList.add('alert-danger');
            alertMessage.textContent = response.message || 'An error occurred during upload.';
        });
    }
};