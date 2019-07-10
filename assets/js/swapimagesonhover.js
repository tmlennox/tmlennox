window.onload = function() {
    //Get all images by library's class name
    var images = document.getElementsByClassName("swim");

    //Loop through to pick data attributes
    for(var i=0; i<images.length; i++) {
        //Get elements and attributes
        var imgNode = images[i];
        var dataImage = imgNode.getAttribute("data-img");
        var dataClass = imgNode.getAttribute("class");

        //Create New Element Node
        var newNode = document.createElement('img');
        newNode.setAttribute('src', dataImage);
        newNode.setAttribute('class', dataClass);
        
        //Insert dynamic node after pre-existing node
        imgNode.parentNode.insertBefore(newNode, imgNode);
    }
}