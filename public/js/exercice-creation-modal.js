document.body.addEventListener('load', function() {
    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        startingTop: '4%', // Starting top style attribute
        endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            console.log(modal, trigger);
        },
        complete: function() {} // Callback for Modal close
    });
})

function addImageToList(image) {
    const media = document.querySelector('#exercice-media')
    if (image.files && image.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            const div = createDivWithImage(e.target.result)
            media.append(div);
        }
        reader.readAsDataURL(image.files[0]); // convert to base64 string
    }
}

function createDivWithImage(image) {
    const div = document.createElement('div');
    div.style.backgroundImage = 'url("' + image + '")';
    div.classList.add('exercice-adding-image');
    return div
}
