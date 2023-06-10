var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        // Use the retrieved data to update your website
        // For example, update a div element with the data
        var dataContainer = document.getElementById("dataContainer");
        dataContainer.innerHTML = "";
        for (var i = 0; i < 10; i++) {
            var item = document.createElement("div");
            item.innerHTML = data[i].title;
            dataContainer.appendChild(item);
        }
    }
};
xhttp.open("GET", "https://jsonplaceholder.typicode.com/posts", true);
xhttp.send();
