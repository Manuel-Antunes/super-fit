document.body.addEventListener('load', function() {
    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        },
        complete: function() {} // Callback for Modal close
    });
})

function addImageToList(image) {
    const media = document.querySelector('#exercice-media')
    if (image.files) {
        const ele = media.getElementsByClassName('file-input')[0].cloneNode(true);
        media.innerHTML = "";
        media.appendChild(ele);
        for (let i = 0; i < image.files.length; i++) {
            var reader = new FileReader();
            reader.onload = function(e) {
                const div = createDivWithImage(e.target.result)
                media.append(div);
            }
            reader.readAsDataURL(image.files[i]); // convert to base64 string
        }
    }
}

function createDivWithImage(image) {
    const div = document.createElement('div');
    div.style.backgroundImage = 'url("' + image + '")';
    div.classList.add('exercice-adding-image');
    return div
}
const form = document.getElementById('form');
form.addEventListener('submit', function(e) {
    e.preventDefault();
    var form_data = new FormData();
    // Read selected files
    const files = document.getElementById('files');
    var totalfiles = files.files.length;
    for (var index = 0; index < totalfiles; index++) {
        form_data.append("files[]", files.files[index]);
    }
    // AJAX request
    $.ajax({
        url: './media',
        type: 'post',
        data: form_data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function() {
            form.submit();
        },
        error: function(response) {
            alert('Error while uploading files');
        }
    });
});