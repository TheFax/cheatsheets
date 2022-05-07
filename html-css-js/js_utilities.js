function manual_post(path, params) {
            //Esempio d'uso:
            //post('./add_item.php', {codice: codice, quantita: quantita, destinazione: destinazione});

            xhr = new XMLHttpRequest(),
                fd = new FormData();

            // Push our data into our FormData object
            for (name in params) {
                fd.append(name, params[name]);
            }

            // Set up our request
            xhr.open('POST', path);

            //Trigger for State Change
            xhr.onreadystatechange = function() {
                if (this.readyState != 4) return;
                if (this.status == 200) {
                    //console.log(this.responseText);
                    clear();
                    if (typeof update_table === "function") {
                        update_table();
                    }
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
