const form = document.querySelector("form");
const descriptionInput = form.querySelector('input[name="description"]');
const dateInput = form.querySelector('input[name="date"]');


function hasValidDate(value) {
    return /^\d{4}-\d{2}-\d{2}$/.test(value);
}

function hasValidDescription(value) {
    return value.length <= 1000;
}
function markValidation(element, condition) {
    !condition ? element.classList.add('no-valid') : element.classList.remove('no-valid');
}

function validateDate() {
    setTimeout(function () {
        markValidation(dateInput, hasValidDate(dateInput.value));
    }, 1000);
}
function validateDescription() {
    setTimeout(function () {
        markValidation(descriptionInput, hasValidDescription(descriptionInput.value));
    }, 1000);
}


dateInput.addEventListener('keyup', validateDate);
descriptionInput.addEventListener('keyup', validateDescription);

function validateForm() {
    const validations = [
        hasValidDate(dateInput.value),
        hasValidDescription(descriptionInput.value),
    ];
    return validations;
}

function showAlert(message) {
    alert(message);
}

function handleSignUpButtonClick(event) {
    const formValidations = validateForm();
    const isFormValid = formValidations.every(validation => validation);

    if (!isFormValid) {
        event.preventDefault();
        showAlert("Wypelnij wszystkie pola prawidlowo");
    }
}
const signUpButton = form.querySelector('button[id="add-button"]');
signUpButton.addEventListener('click', handleSignUpButtonClick);