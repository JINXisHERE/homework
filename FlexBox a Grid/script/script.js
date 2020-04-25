function add() {
    var newDiv = document.createElement("div");
    var newContent = document.createTextNode('<img src="https://i.pinimg.com/564x/b2/29/a7/b229a71f0ccf43cf799cbb344ec77c44.jpg" alt="">');
    newDiv.appendChild(newContent);  
    var currentDiv = document.getElementsByClassName("grid-con"); 
    document.body.insertBefore(newDiv, currentDiv); 
  }