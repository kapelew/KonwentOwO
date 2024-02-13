document.querySelectorAll('.event-container').forEach(container => {
    container.addEventListener('click', redirectToEventDetails);
});

function redirectToEventDetails(eventId) {
    if (eventId !== null) {
        window.location.href = `event?id=${eventId}`;
    } else {
        console.error('Invalid event ID:', eventId);
    }
}