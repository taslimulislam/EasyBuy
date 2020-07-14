function subcategory(id)
{
	//alert(id);
	var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("details").setAttribute("style","display:block;");
          var obj = JSON.parse(this.responseText);
           //alert(obj[0].id);
      var sub = "<option disabled selected>--Select one--</option>";
      // document.getElementById("name").innerHTML = obj[0]["name"];
      // document.getElementById("location").innerHTML = obj[0].location;
      
      obj.forEach(function(d) {
        //console.log(d);
        //alert(d.id);
        sub += "<option value="+d.Id+">"+d.Name+"</option>";
      });
      document.getElementById("subCategory").innerHTML = sub;
      }
    };
    xhttp.open("GET", "http://localhost/sms/views/product_admin/ajaxSubcategory.php?id="+id, true);
    xhttp.send();
}

function addToCart(id,qnty)
{
  var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        // alert('carted')
        // document.getElementById("details").setAttribute("style","display:block;");
          var obj = JSON.parse(this.responseText);
           if(obj > 0)
           {
             
            document.getElementById('cartMsg').setAttribute('style','display:block');
              
            
           }
      }
    };
    alert('Cart Added')
    // alert("aaaaaah");
    xhttp.open("GET", "http://localhost/sms/views/cart/ajaxAddToCart.php?pid="+id+"&qnty="+qnty, true);
    xhttp.send();
}

            // alert("your product hasbeen successfully added to cart");
function updateCart(id,qnty)
{
  // alert(id);
  // alert(qnty);
  var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("details").setAttribute("style","display:block;");
          var obj = JSON.parse(this.responseText);
           
            // alert(obj[0].Quantity);
            document.getElementById("qnty"+id).value = obj[0].Cart_Quantity;
            document.getElementById("total"+id).innerHTML = obj[0].Selling_Price * obj[0].Cart_Quantity;
            cartTotal();
            
      }
    };
    // alert("done");
    // alert("Cart Updated")
    xhttp.open("GET", "http://localhost/sms/views/cart/ajaxAddToCart.php?pid="+id+"&qnty="+qnty, true);
    xhttp.send();
}
function deleteCart(id)
{
  // alert(id);
  // alert(qnty);
  var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("details").setAttribute("style","display:block;");
          var obj = JSON.parse(this.responseText);
           
            // alert(obj[0].Quantity);
            // document.getElementById("qnty"+id).value = obj[0].Quantity;
            // location.reload();
            
      }
    };
    //alert("aaa");
    xhttp.open("GET", "http://localhost/sms/views/cart/ajaxDeleteCart.php?pid="+id, true);
    xhttp.send();
}
function cartTotal()
{
  var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("details").setAttribute("style","display:block;");
          // var obj = JSON.parse(this.responseText);
          //  alert(this.responseText);
           document.getElementById("sub").innerHTML = this.responseText;
           document.getElementById("total").innerHTML = this.responseText;
      }
    };
    //alert("aaa");
    xhttp.open("GET", "http://localhost/sms/views/cart/ajaxCartTotal.php", true);
    xhttp.send();
}

function invoice()
{
  var xhttp; 
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        //alert(this.readyState);
      if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("details").setAttribute("style","display:block;");
          // var obj = JSON.parse(this.responseText);
          //  alert(this.responseText);
      }
    };
    //alert("aaa");
    xhttp.open("GET", "http://localhost/sms/views/buy/ajaxInvoice.php", true);
    xhttp.send();
  }