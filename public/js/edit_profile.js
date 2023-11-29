function loadImage(event)
{
    var output = document.getElementById('output');    
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src)
        output.style.visibility = 'visible';
    }
}

function dragDrop(event)
{
    
}