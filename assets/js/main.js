//This function switches the product slide in the home page
//The order of product slides are as follows:
// Fanta, Coke, Sprite.
function prevProduct()
{
    var currentProduct = document.getElementById("heading").innerHTML.toLowerCase();
    var previousProduct = "";

    if(currentProduct == "fanta")
    {
        previousProduct = "sprite";
        document.getElementById("heading").classList.remove('heading');
        document.getElementById("heading").classList.add('heading2');
        document.getElementById("description").classList.remove('description');
        document.getElementById("description").classList.add('description2');

    }
    else if(currentProduct == "sprite")
    {
        previousProduct = "coke";
        document.getElementById("heading").classList.remove('heading');
        document.getElementById("heading").classList.add('heading2');
        document.getElementById("description").classList.remove('description');
        document.getElementById("description").classList.add('description2');
    }
    else
    {
        previousProduct = "fanta";
        document.getElementById("heading").classList.remove('heading2');
        document.getElementById("heading").classList.add('heading');
        document.getElementById("description").classList.remove('description2');
        document.getElementById("description").classList.add('description');
    }

    fetch_data(previousProduct);
}

//This function makes an AJAX request to server, fetches product data
// and updates the slide accordingly
function fetch_data(keyword)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        document.getElementById("background").src = data["background"];
        document.getElementById("foreground").src = data["foreground"];
        document.getElementById("description").innerHTML = data["description"];
        document.getElementById("heading").innerHTML = data["heading"];


    }
  };
  xhttp.open("POST", "application/model/getProduct.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("brand=" + keyword);
}

function nextProduct()
{
    var currentProduct = document.getElementById("heading").innerHTML.toLowerCase();

    var nextProduct = "";

    if(currentProduct == "fanta")
    {
        nextProduct = "coke";
        document.getElementById("heading").classList.remove('heading');
        document.getElementById("heading").classList.add('heading2');
        document.getElementById("description").classList.remove('description');
        document.getElementById("description").classList.add('description2');
    }
    else if(currentProduct == "sprite")
    {
        nextProduct = "fanta";
        document.getElementById("heading").classList.remove('heading2');
        document.getElementById("heading").classList.add('heading');
        document.getElementById("description").classList.remove('description2');
        document.getElementById("description").classList.add('description');
    }
    else
    {
        nextProduct = "sprite";
        document.getElementById("heading").classList.remove('heading');
        document.getElementById("heading").classList.add('heading2');
        document.getElementById("description").classList.remove('description');
        document.getElementById("description").classList.add('description2');
    }

    fetch_data(nextProduct);
}

//This function redirect to the model controller necessary
//parameters in order to load the appropriate 3d model
function viewModel()
{
    var brand = document.getElementById("heading").innerHTML.toLowerCase();

    if(brand == "fanta")
    {
        location.href = "application/controller/getModelController.php?brand=fanta";
    }
    else if(brand == "sprite")
    {
        location.href = "application/controller/getModelController.php?brand=sprite";
    }
    else
    {
        location.href = "application/controller/getModelController.php?brand=coke";
    }
    
}

//This function loads the necessary image in the modal for enlarged view
//and opens the bootstrap modal on 3d model page
function viewImage(imageNum)
{
    var modelHeading = document.getElementById("model-heading").innerHTML;

    if(modelHeading.search("Coke") > -1)
    {
        var filename = "coke"+ imageNum + ".png";
        document.getElementById("gallery-img").src = "../../assets/images/" + filename;
    }
    else if(modelHeading.search("Fanta") > -1)
    {
        var filename = "fanta"+ imageNum + ".png";
        document.getElementById("gallery-img").src = "../../assets/images/" + filename;
    }
    else
    {
        var filename = "sprite"+ imageNum + ".jpg";
        document.getElementById("gallery-img").src = "../../assets/images/" + filename;
    }

    $("#myModal").modal();
}