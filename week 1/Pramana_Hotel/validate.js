function validateForm() {
    
    var x = document.forms["myform"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    x = document.forms["myform"]["email"].value;alert(x);
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }else if (validateEmail(x) == false){  //sir why cant just validateEmail(x)..
        alert("Invalid email address");
        return false;
    }
    
    x = document.forms["myform"]["phone"].value - 0;
    if (x.typeof == "string") {
        alert("You inserted wrong phone number");
        return false;
    } else if ( == "string") {
        alert("You inserted wrong phone number");
        return false;
    }
    
    var d = new Date();
    var y = d.getFullYear() + "-";
    if(d.getMonth()+1 < 10)
        y = y + "0" + (d.getMonth()+1);
    else 
        y = y + (d.getMonth()+1);
    
    if(d.getDate() < 10)
        y = y + "-0" + d.getDate();
    else 
        y = y + "-" + d.getDate();
    
    x = document.forms["myform"]["date"].value;
    alert(y);
    alert(x);
    if(x < y) {
        alert("Date must be filled out");
        return false;
    }
    
    x = document.forms["myform"]["stay"].value;
    if (x == "") {
        alert("Length of stay must be filled out");
        return false;
    }
    
    x = document.forms["myform"]["room"].value;
    if (x == "") {
        alert("Please choose room type");
        return false;
    }
}

function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}