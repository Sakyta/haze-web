setTimeout(function() {
    document.getElementById('over').style.display = 'none';
    document.getElementById('back').style.display = 'none';
}, 2500);

function hide(event, id)
{
    event.preventDefault();

    document.getElementById(id).style.visibility = "hidden";    
}
