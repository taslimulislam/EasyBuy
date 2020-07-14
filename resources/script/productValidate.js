function validateName(){    //checking name
    var nameLen = document.getElementById("name").value.length;
    if(nameLen > 0){
        document.getElementById("msgName").style.display = "none";
        
    }
    else{
        document.getElementById("msgName").style.display = "block";
    }
}
function validateBuyingPrice(){    //checking name
    var buyingPriceLen = document.getElementById("buyingPrice").value.length;
    if(buyingPriceLen > 0){
        document.getElementById("msgBuyingPrice").style.display = "none";
        
    }
    else{
        document.getElementById("msgBuyingPrice").style.display = "block";
    }
}
function validateSellingPrice(){    //checking name
    var sellingPriceLen = document.getElementById("sellingPrice").value.length;
    if(sellingPriceLen > 0){
        document.getElementById("msgSellingPrice").style.display = "none";
        
    }
    else{
        document.getElementById("msgSellingPrice").style.display = "block";
    }
}
function validateQuantity(){    //checking name
    var quantityLen = document.getElementById("quantity").value.length;
    if(quantityLen > 0){
        document.getElementById("msgQuantity").style.display = "none";
        
    }
    else{
        document.getElementById("msgQuantity").style.display = "block";
    }
}
function validateStatus(){    //checking name
    var statusLen = document.getElementById("status").value.length;
    if(statusLen > 0){
        document.getElementById("msgStatus").style.display = "none";
        
    }
    else{
        document.getElementById("msgStatus").style.display = "block";
    }
}
function validateDescription(){    //checking name
    var descriptionLen = document.getElementById("description").value.length;
    if(descriptionLen > 0){
        document.getElementById("msgDescription").style.display = "none";
        
    }
    else{
        document.getElementById("msgDescription").style.display = "block";
    }
}