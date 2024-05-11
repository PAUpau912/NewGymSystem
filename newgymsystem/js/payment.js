const radioButtons = document.querySelectorAll('input[type = "radio"]');
radioButtons.forEach(radioButton => {
    radioButton.addEventListener('click', () => {
        radioButton.forEach(rb => {
            if (rb !== radioButton){
                rb.checked = false;
            }
        });
    });
});