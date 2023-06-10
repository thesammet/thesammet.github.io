fetch("../json/data.json")
    .then(response => response.json())
    .then(data => {
        const accordion = document.getElementById("accordion");

        for (const category in data) {
            const header = document.createElement("h3");
            header.className = "accordion-header";
            header.textContent = category;

            const content = document.createElement("div");
            content.className = "accordion-content";

            data[category].forEach(player => {
                const listItem = document.createElement("li");
                listItem.textContent = `${player.name} ${player.position} ${player.number}`;
                content.appendChild(listItem);
            });

            accordion.appendChild(header);
            accordion.appendChild(content);
        }

        // Add event listener to toggle accordion content
        const headers = document.getElementsByClassName("accordion-header");
        for (const header of headers) {
            header.addEventListener("click", function () {
                this.nextElementSibling.classList.toggle("active");
            });
        }
    })
    .catch(error => {
        console.error("Error fetching JSON data:", error);
    });