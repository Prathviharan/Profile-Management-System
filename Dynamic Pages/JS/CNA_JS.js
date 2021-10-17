//Profile pic adding function
var profile = function (event)
{
    var image = document.getElementById('pro_img');
    image.src = URL.createObjectURL(event.target.files[0]);
};




function enableButton()
{
    if (document.getElementById("accept").checked)
    {
        document.getElementById("submit").disabled = false;
    }
    else
    {
        document.getElementById("submit").disabled = true;
    }
}

