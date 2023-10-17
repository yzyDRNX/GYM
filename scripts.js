function checklogin(){
    var usuario = document.getElementById("Usuario").value;
    var contraseña = document.getElementById("Contraseña").value;

    if (usuario === "equipo6" && contraseña === "equipo6") {
        alert("Inicio de sesión exitoso");
        window.location.href="menu.html";
    }
    else{
        alert("Credenciales incorrectas, intente de nuevo")
    }
}

function Miembro(){
    window.location.href="usuario.html";
}