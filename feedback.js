// JavaScript to limit the textarea character count
const experienceTextArea = document.getElementById('experience');
const maxCharacterCount = 1000;

experienceTextArea.addEventListener('input', () => {
    const text = experienceTextArea.value;
    if (text.length > maxCharacterCount) {
        experienceTextArea.value = text.substring(0, maxCharacterCount);
    }
});

const clearFormButton = document.getElementById('clearForm');
clearFormButton.addEventListener('click', () => {
    document.getElementById('dateOfExperience').value = ''; // Clear the date
    experienceTextArea.value = ''; // Clear the text
});

const submitFormButton = document.getElementById('submitForm');
submitFormButton.addEventListener('click', () => {
    const selectedDate = document.getElementById('dateOfExperience').value;
    const enteredExperience = experienceTextArea.value;

    if (selectedDate.trim() === '' || enteredExperience.trim() === '') {
        alert('Both fields must be filled out before submitting.');
        return; // Prevent further action if fields are empty
    }

    // Log the captured data to the console (for testing purposes)
    console.log('User Feedback Date:', selectedDate);
    console.log('User Feedback Experience:', enteredExperience);

    // Optionally, you can clear the fields after logging the data
    document.getElementById('dateOfExperience').value = '';
    experienceTextArea.value = '';
});