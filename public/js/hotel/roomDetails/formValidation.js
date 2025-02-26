document.addEventListener("DOMContentLoaded", function() {
    const dateStart = document.getElementById('date-start');
    const dateEnd   = document.getElementById('date-end');
    const form = document.getElementById('availability-form');

    function getToday() {
        let today = new Date();
        let year  = today.getFullYear();
        let month = (today.getMonth() + 1).toString().padStart(2, '0');
        let day   = today.getDate().toString().padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    function getTomorrow() {
        let tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        let year  = tomorrow.getFullYear();
        let month = (tomorrow.getMonth() + 1).toString().padStart(2, '0');
        let day   = tomorrow.getDate().toString().padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    dateStart.min = getToday();
    dateEnd.min = getTomorrow();

    dateStart.addEventListener('change', function() {
        if (dateStart.value) {
            let selectedDate = new Date(dateStart.value);
            selectedDate.setDate(selectedDate.getDate() + 1);
            let year  = selectedDate.getFullYear();
            let month = (selectedDate.getMonth() + 1).toString().padStart(2, '0');
            let day   = selectedDate.getDate().toString().padStart(2, '0');
            dateEnd.min = `${year}-${month}-${day}`;
        }
    });

    form.addEventListener("submit", function(event) {
        if (dateStart.value && dateEnd.value) {
            if (new Date(dateEnd.value) <= new Date(dateStart.value)) {
                event.preventDefault();
            } 
        }
    });

    const calendarIcons = document.querySelectorAll('.room-details__bed__separator__right__form__input-container__icon');
    calendarIcons.forEach(function(icon) {
        icon.addEventListener('click', function() {
            const inputDate = this.parentElement.querySelector('input[type="date"]');
            if (inputDate) {
                inputDate.focus();
                inputDate.dispatchEvent(new MouseEvent('click', { bubbles: true, cancelable: true }));
            }
        });
    });
});