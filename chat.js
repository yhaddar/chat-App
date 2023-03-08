function send() {
    var req = new XMLHttpRequest;
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
            document.querySelector('.chat').innerHTML = req.responseText;
        }
    }
    req.open("GET", "index.php", true);
    req.send();
}
setInterval(() => {
    send();
}, 1000);