function validateName(){   //checking name
    var nameLen = document.getElementById("name").value.length;
    if(nameLen > 0){
        document.getElementById("msgName").style.display = "none";
        
    }
    else{
        document.getElementById("msgName").style.display = "block";
    }
}
function validateEmail(){   //checking email
    var emailLen = document.getElementById("email").value.length;
    if(emailLen > 0){
        document.getElementById("msgEmail").style.display = "none";      
    }
    else{
        document.getElementById("msgEmail").style.display = "block";
        document.getElementById("msgEmail2").style.display = "none";
            }
}
function validatePhone(){   //checking phone
    var phoneLen = document.getElementById("phone").value.length;
    //var phone = document.getElementById("phone").value;
    if(phoneLen > 0){
        document.getElementById("msgPhone").style.display = "none";
        //customerPhone(phone);
       
    }
    else{
        document.getElementById("msgPhone").style.display = "block";
        document.getElementById("msgPhone2").style.display = "none";
        
    }
}
function validateAddress(){   //checking address
    var addressLen = document.getElementById("address").value.length;
    if(addressLen > 0){
        document.getElementById("msgAddress").style.display = "none";
        
    }
    else{
        document.getElementById("msgAddress").style.display = "block";
        
    }
}
function validateJoinDate(){   //checking joinDate
    var joinDateLen = document.getElementById("joinDate").value.length;
    if(joinDateLen > 0){
        document.getElementById("msgJoinDate").style.display = "none";
        
    }
    else{
        document.getElementById("msgJoinDate").style.display = "block";
        
    }
}
function validateSalary(){   //checking salary
    var salaryLen = document.getElementById("salary").value.length;
    if(salaryLen > 0){
        document.getElementById("msgSalary").style.display = "none";
        
    }
    else{
        document.getElementById("msgSalary").style.display = "block";
        
    }
}

function validateUserName(){   //checking userName
    var userNameLen = document.getElementById("userName").value.length;
  
    if(userNameLen > 0){
        document.getElementById("msgUserName").style.display = "none";
       
    }
    else
    {
        document.getElementById("msgUserName").style.display = "block";
        document.getElementById("msgUserName2").style.display = "none";
        
    }
}

function validatePassword(){ //checking password
    var passwordLen = document.getElementById("password").value.length;
    if(passwordLen > 0){
        document.getElementById("msgPassword").style.display = "none"; 
    }
    else{
        document.getElementById("msgPassword").style.display = "block";
        
    }
}


function customerPhone(phone) {
  //alert(phone);
  var xhttp;
  // if (id == "") {
  //   document.getElementById("txtHint").innerHTML = "";
  //   return;
  // }
  //alert(phone);
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      // alert(phone);
      //alert(responseText);
      var obj = JSON.parse(this.responseText);
      
      //alert(obj[0].id);
      if(obj.length == 0)
      {
        document.getElementById("msgPhone2").style.display = "none";
      }
      else
      {
        document.getElementById("msgPhone2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/customer/ajaxPhone.php?phone=" + phone, true);
  xhttp.send();
  };

   function customerEmail(email) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      var obj = JSON.parse(this.responseText);
      if(obj.length == 0)
      {
        document.getElementById("msgEmail2").style.display = "none";
      }
      else
      {
        document.getElementById("msgEmail2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/customer/ajaxEmail.php?email=" + email, true);
  xhttp.send();
  };


  function customerUserName(userName) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      var obj = JSON.parse(this.responseText);
      if(obj.length == 0)
      {
        document.getElementById("msgUserName2").style.display = "none";
      }
      else
      {
        document.getElementById("msgUserName2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/customer/ajaxUserName.php?userName=" + userName, true);
  xhttp.send();
  };



  function employeePhone(phone) {
  // alert(phone);
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      var obj = JSON.parse(this.responseText);
      if(obj.length == 0)
      {
        document.getElementById("msgPhone2").style.display = "none";
      }
      else
      {
        document.getElementById("msgPhone2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/employee/ajaxPhone.php?phone=" + phone, true);
  xhttp.send();
  };

  function employeeEmail(email) {
  // alert(phone);
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      var obj = JSON.parse(this.responseText);
      if(obj.length == 0)
      {
        document.getElementById("msgEmail2").style.display = "none";
      }
      else
      {
        document.getElementById("msgEmail2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/employee/ajaxEmail.php?email=" + email, true);
  xhttp.send();
  };


  function employeeUserName(userName) {
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    // alert(this.readyState);
    if (this.readyState == 4 && this.status == 200) {
      var obj = JSON.parse(this.responseText);
      if(obj.length == 0)
      {
        document.getElementById("msgUserName2").style.display = "none";
      }
      else
      {
        document.getElementById("msgUserName2").style.display = "block";
      }
    }
  };
  xhttp.open("GET", "http://localhost/sms/views/employee/ajaxUserName.php?userName=" + userName, true);
  xhttp.send();
  };



