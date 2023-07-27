function link(str){
    window.location.href = str;
}
function showPass(id){
    var pass = document.getElementById(id);
    if(pass.type == 'password'){
        pass.type = 'text';
    }
    else{
        pass.type = 'password';
    }
}
