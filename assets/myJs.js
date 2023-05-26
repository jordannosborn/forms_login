function validate(){
    uName = document.forms["frmLogin"]["userName"].value;
    pass = document.forms["frmLogin"]["password"].value;
    message = ""; 
    if(uName.length < 3){
        message += "\nName to short"; 
        document.forms["frmLogin"]["userName"].focus(); 
    }

    if(message.length == 0)
        return true; 
    else{
        alert(message); 
        return false; 
    }
    
}