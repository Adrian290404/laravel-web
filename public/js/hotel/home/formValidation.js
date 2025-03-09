document.addEventListener("DOMContentLoaded", function() {
    const dateStart = document.getElementById('date-start');
    const dateEnd = document.getElementById('date-end');

    function getToday() {
        let today = new Date();
        let year = today.getFullYear();
        let month = (today.getMonth() + 1).toString().padStart(2, '0');
        let day = today.getDate().toString().padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    function getTomorrow() {
        let tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        let year = tomorrow.getFullYear();
        let month = (tomorrow.getMonth() + 1).toString().padStart(2, '0');
        let day = tomorrow.getDate().toString().padStart(2, '0');
        return `${year}-${month}-${day}`;
    }

    dateStart.min = getToday();
    dateEnd.min = getTomorrow();

    dateStart.addEventListener('change', function() {
        if (dateStart.value) {
            let selectedDate = new Date(dateStart.value);
            selectedDate.setDate(selectedDate.getDate() + 1);
            let month = (selectedDate.getMonth() + 1).toString().padStart(2, '0');
            let day = selectedDate.getDate().toString().padStart(2, '0');
            let year = selectedDate.getFullYear();
            dateEnd.min = `${year}-${month}-${day}`;
        }
    });

    document.querySelector(".home__calendar__form").addEventListener("submit", function(event) {
        if (dateStart.value && dateEnd.value) {
            if (new Date(dateEnd.value) <= new Date(dateStart.value)) {
                event.preventDefault(); 
            }
        }
    });

    document.querySelectorAll('.home__calendar__form__container__input-container__icon').forEach(function(icon) {
        icon.addEventListener('click', function() {
            let input = icon.nextElementSibling;
            if (typeof input.showPicker === "function") {
                input.showPicker();
            } 
            else {
                input.focus();
                input.click();
            }
        });
    });
});