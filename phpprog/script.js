function submit() {

    var name = document.getElementById("n").value;
    var des = document.getElementById("des").value;
    var distr = document.getElementById("di").value;
    var city = document.getElementById("c").value;
    var image = document.getElementById("img").files[0];


    var f = new FormData();
    f.append("n", name);
    f.append("des", des);
    f.append("di", distr);
    f.append("c", city);
    f.append("img", image);


    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            alert(text);

        }
    };

    r.open("POST", "process.php", true);
    r.send(f);
}