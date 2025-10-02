function manualPost(url, params) {
    //Esempio d'uso:
    //manual_post('./add_item.php', {codice: codice, quantita: quantita, destinazione: destinazione});

    let xhr = new XMLHttpRequest();
    let fd = new FormData();

    // Push our data into our FormData object
    for (let name in params) {
        if (Object.prototype.hasOwnProperty.call(params, name)) {
            fd.append(name, params[name]);
        }
    }

    // Set up our request
    xhr.open('POST', url);

    //Trigger for State Change
    xhr.onreadystatechange = function() {
        if (this.readyState != 4) return;
        if (this.status == 200) {
            //console.log(this.responseText);
            if (typeof clear === "function") {
                clear();
            }
            if (typeof update_table === "function") {
                update_table();
            }
        } else {
            // Log error if request fails
            console.error('manual_post error:', this.status, this.statusText);
        }
        // end of state change: it can be after some time (async)
    };

    // Send our FormData object; HTTP headers are set automatically
    xhr.send(fd);
}



function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + encodeURIComponent(cvalue) + ";" + expires + ";path=/";
}


function print_log(text) {
    console.log(Date() + ' - ' + text);
}
