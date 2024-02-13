const search = document.querySelector('input[placeholder="Wyszkukiwanie"]');
const eventContainer = document.querySelector(".events");

search.addEventListener("input", function (event) {
    const searchTerm = this.value.trim();

    if (searchTerm !== "") {
        const data = {search: searchTerm};

        fetch("/search", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response) {
            return response.json();
        }).then(function (events) {
            eventContainer.innerHTML = "";
            if (events.length > 0) {
                eventContainer.style.visibility = "visible";
                loadEvents(events);
            } else {
                eventContainer.style.visibility = "hidden";
            }
        });
    }
});

function loadEvents(events) {
    events.forEach(event => {
        console.log(event);
        createEvent(event);
    });
}

function createEvent(event) {
    const template = document.querySelector("#event-template");

    const clone = template.content.cloneNode(true);
    const div = clone.querySelector("div");
    div.id = event.event_id;
    const image = clone.querySelector("img");
    image.src = `/public/img/${event.picture_id}`;
    const title = clone.querySelector("h2");
    title.innerHTML = event.title;
    const description = clone.querySelector("p");
    description.innerHTML = event.description;
    const link = clone.querySelector('.event-link');
    link.href = `event?id=${event.event_id}`;

    eventContainer.appendChild(clone);
}