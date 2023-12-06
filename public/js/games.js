function previewImage(event, imageid)
{
    event.preventDefault();
    document.getElementById('preview-1').classList.remove('selected');
    document.getElementById('preview-2').classList.remove('selected');
    document.getElementById('preview-3').classList.remove('selected');
    document.getElementById('preview-4').classList.remove('selected');

    var output = document.getElementById('output'); 
    output.src = document.getElementById(imageid).src;
    document.getElementById(imageid).classList.add('selected');
}

document.addEventListener('DOMContentLoaded', function() {
    var output = document.getElementById('output'); 
    output.src = document.getElementById('preview-1').src
    document.getElementById('preview-1').classList.add('selected');
});