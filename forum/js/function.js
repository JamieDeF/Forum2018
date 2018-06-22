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
        ajax_submit('login')
    }else{
        alert(warning)
    }
}

function copy_ckeditor_content(){
    document.getElementById('topic_content').value = ckeditor.getData();
}

function post_topic() {
    ajax_submit('maketopic');
}

function users_new() {
    var allowed_to_sent = true;
    var warning = '';
    if (document.getElementById('new_user').value === '') {
        allowed_to_sent = false;
        warning = 'Je moet een gebruikersnaam invullen!';
    }
    if (document.getElementById('add_U_Email').value === '') {
        allowed_to_sent = false;
        warning = 'Je moet een E-mail invullen!';
    }
    if (document.getElementById('pw1').value === '') {
        allowed_to_sent = false;
        warning = 'je moet een wachtwoord invullen'
    }
    if (document.getElementById('pw2').value === '') {
        allowed_to_sent = false;
        warning = 'je moet een wachtwoord invullen'
    }
    if (allowed_to_sent === true) {
        ajax_submit('data_newuser');
    } else {
        alert(warning);
    }
}
function beheer_threads() {
    var allowed_to_sent = true;
    var warning = '';
    if (document.getElementById('newthread').value === '') {
        allowed_to_sent = false;
        warning = 'Je moet een thread invullen!';
    }
    if (allowed_to_sent === true) {
        ajax_submit('new_thread_form');
    } else {
        alert(warning);
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
        ajax_submit('register');
    } else {
        alert(warning)
    }
}

function new_thread_delete(){
    ajax_submit('data_admin_threads');
}

function users_delete() {
    ajax_submit('data_admin_users_delete');
}
function new_topic_delete() {
    ajax_submit('data_admin_topics');
}

function ajax_menu(pag) {
    var Npag = new XMLHttpRequest();
    Npag.onload = ajaxSuccess;
    Npag.open("get", "?pag=" + pag);
    Npag.send();
}

function ajax_submit(post) {
    oFormElement = document.getElementById(post);
    // versturen formulier via json
    //   zie ook https://www.w3schools.com/js/js_ajax_http_send.asp
    var oReq = new XMLHttpRequest();
    // onload ipv onreadystatechange
    //   zie ook https://zqzhang.github.io/blog/2016/04/18/why-use-onload-in-cross-domain-ajax.html
    // hiermee wordt bepaald dat als er een bericht van de server terug komt
    //   de functie ajaxSuccess moet worden aangeroepen
    oReq.onload = ajaxSuccess;
    // verzending voorbereiden, 3 vars nodig:
    //   1) type: post (kan ook get zijn)
    //   2) het php bestand die moet worden aangeroepen,
    //      in dit geval demo_json_form.php, vastgelegd in action van het formulier
    //   3) asynchronously, true of false (false is not recommended, default = true)
    oReq.open("post", oFormElement.action);
    // het echt verzenden van het bericht, waarbij het formulier via FormData wordt omgezet naar
    oReq.send(new FormData(oFormElement));
}

function ajaxSuccess() {
    var response_text;

    // retourbericht van de server opvangen, via try catch
    try {
        response_text = JSON.parse(this.responseText);
    } catch (e) {
        // e bevat de javascript tekst van het foutbericht
        // vaak geeft this.responseText meer info: dit is het gehele bericht van de server
        alert('fout in json retourbericht, melding:\n' + e + '\ntekst:\n' + this.responseText);
        return;
    }
    // check er er een gevulde melding in zit
    if (response_text.error != '') {
        // ja, via alert tonen
        alert(response_text.error);
    }
    // check of er een gevulde output is
    if (response_text.output != '') {
        // ja, de div vullen
        document.getElementById('output').innerHTML = response_text.output;
    }
    if (response_text.navbar != '') {
        document.getElementById('navbar').innerHTML = response_text.navbar;
        // alert(response_text.navbar.length());
    }
    
    if (response_text.javascript !== '') {
        var nw_el = document.getElementById('output');
        var scriptNode = document.createElement('script');
        scriptNode.innerHTML = response_text.javascript;
        nw_el.appendChild(scriptNode);
    }
}
