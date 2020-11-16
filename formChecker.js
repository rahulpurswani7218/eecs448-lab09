function validate(){
    let email=document.forms["store"]["Username"].value;
    let passw=document.forms["store"]["Password"].value;
    let pen=document.forms["store"]["Pens"].value;
    let pencil=document.forms["store"]["Pencils"].value;
    let eraser=document.forms["store"]["Erasers"].value;
    let sharpner=document.forms["store"]["Sharpers"].value;
    let shipping=document.forms["store"]["Q1"].value;

    var at_pos=email.indexOf("@");  
    var dot_pos=email.lastIndexOf("."); 

    if(at_pos<1 || dot_pos<at_pos+2 || dot_pos+2>=email.length){
        alert("Invalid Email address");
        return false;
    }
    if(passw==""){
        alert("Please enter your password");
        return false;
    }    
    if(pen<0 || pen=="" || isNaN(pen)){
        alert("Please make sure you are entering a value greater than 0 for no. of pens");
        return false;
    }
    if(pencil<0 || pencil=="" || isNaN(pencil)){
        alert("Please make sure you are entering a value greater than 0 for no. of pencils");
        return false;
    }
    if(eraser<0 || eraser=="" || isNaN(eraser)){
        alert("Please make sure you are entering a value greater than 0 for no. of erasers");
        return false;
    }
    if(sharpner<0 || sharpner=="" || isNaN(sharpner)){
        alert("Please make sure you are entering a value greater than 0 for no. of sharpners");
        return false;
    }

    if(shipping!="0" && shipping!="50" && shipping!="5"){
        alert("Please choose a shipping method");
        return false;
    }
}