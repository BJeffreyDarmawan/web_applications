function validateForm() {
    
    var x = document.forms["myform"]["name"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    
    x = document.forms["myform"]["email"].value;
    if (x == "") {
        alert("Email must be filled out");
        return false;
    }
    
    x = document.forms["myform"]["phone"].value - 0;
    if (x.typeof == "string") {
        alert("Phone must be filled out");
        return false;
    }
    
    var d = new Date();
    var y = d.getFullYear() + "-" + d.getMonth()+1 + "-" + d.getDate();
    x = document.forms["myform"]["date"].value;
    alert(y);
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