function valiDate(){
    let name = document.getElementById('name');
    let mobile = document.getElementById('mobile');
    let class1 = document.getElementById('class');
    let email = document.getElementById('email');
    let session = document.getElementById('session');

    if(!name.value){
        document.getElementById('namevalid').style.display = 'block';
        name.focus();
        return false;
    }else if(!mobile.value){
        alert("Enter Your Mobile !");
        mobile.focus();
        return false;
    }else if(mobile.value.length !== 10){
        alert("Enter a Valid Mobile No !");
        mobile.focus();
        return false;
    }else if(!class1.value){
        alert("Enter Class !");
        class1.focus();
        return false;
    }else if(!email.value){
        alert("Enter Email Id !");
        email.focus();
        return false;
    }else if(!session.value){
        alert("Enter Session !");
        session.focus();
        return false;
    }

    return true;
}
