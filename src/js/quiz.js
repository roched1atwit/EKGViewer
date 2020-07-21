window.onload = () => {
    const quizForm = document.getElementById("quiz-form");

    // Verify user input on form submission
    quizForm.addEventListener("submit", (e) => {
        const questions = document.getElementsByClassName("question-wrapper");

        // Iterate over all questions
        for (let question of questions) {

            // Check each radio button to see if one is checked
            let anySelected = false;
            for (let answer of question.getElementsByClassName("answer-wrapper")) {
                anySelected = anySelected || answer.getElementsByTagName("input")[0].checked;
            }

            // If there is a selected radio button
            if (anySelected) {
                // Remove the invalid class from the question header
                question.previousSibling.classList.remove("invalid");
            }
            else{
                // Stop form submission, add the invalid class to the question header
                e.preventDefault();
                question.previousSibling.classList.add("invalid");

                const errorMessage = document.getElementById("submission-error-message");
                if (errorMessage.innerText === "") {
                    errorMessage.innerText = "Warning: Questions cannot be left blank."
                }
            }
        }
    });

    // Clear warnings on form reset
    quizForm.addEventListener("reset", (e) => {
        // Clear the unanswered question warnings
        const invalidElements = Array.from(document.getElementsByClassName("invalid"));
        for (let invalidElement of invalidElements) {
            // Remove the invalid class from the element
            invalidElement.classList.remove("invalid");
        }

        // Clear the submission warning message
        document.getElementById("submission-error-message").innerText = "";
    })
}
