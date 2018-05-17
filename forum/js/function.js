function userloginChecker() {
    var allowed_to_sent = 'ja';
    var warning = '';

    if (document.getElementById('username').value === ''){
        allowed_to_sent = 'nee';
        warning = 'Je moet een gebruikersnaam invullen!';
    }
    if (document.getElementById('password').value === ''){
        allowed_to_sent = 'nee';
        warning = 'Je moet een wachtwoord invullen!';
    }
    if (allowed_to_sent === 'ja') {
        document.login.submit();
    }else{
        alert(warning)
    }
}
function enter_login() {
    /* Enter afhandeling login-screen*/
    if (document.getElementById('username')) {
        document.getElementById('username')
            .addEventListener("keyup", function (event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
    if (document.getElementById("password")) {
        document.getElementById("password")
            .addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
}
function enter_register() {
    /* Enter afhandeling Register-screen */
    if (document.getElementById("Uname")) {
        document.getElementById("Uname")
            .addEventListener("keyup", function (event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
    if (document.getElementById("Email")) {
        document.getElementById("Email")
            .addEventListener("keyup", function (event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
    if (document.getElementById("pwd1")) {
        document.getElementById("pwd1")
            .addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
    if (document.getElementById("pwd2")) {
        document.getElementById("pwd2")
            .addEventListener("keyup", function(event) {
                event.preventDefault();
                if (event.keyCode === 13) {
                    document.getElementById("sbtn").click();
                }
            });
    }
}



function userregisterChecker() {
    var allowed_to_sent = 'ja';
    var warning = '';
    if (document.getElementById('uName'))

    if (document.getElementById('Email').value === '') {
        allowed_to_sent = 'nee';
        warning = 'Je moet een email adres invullen!'
    }
    if (document.getElementById('pwd1').value === '') {
        allowed_to_sent = 'nee';
        warning = 'Je moet een wachtwoord invullen!'
    }
    if (document.getElementById('pwd2').value !== document.getElementById('pwd1').value) {
        allowed_to_sent = 'nee';
        warning = 'Je wachtwoorden zijn niet gelijk!'
    }
    if (allowed_to_sent === 'ja'){
        document.register.submit();
    } else {
        alert(warning)
    }

}

