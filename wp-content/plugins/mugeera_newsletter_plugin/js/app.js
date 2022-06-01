let reviewsForm = document.querySelector('#reviews_form');
reviewsForm.addEventListener('submit', doAjax)


function doAjax(event) {

    event.preventDefault();


    const actionUrl = reviewsForm.getAttribute('action');
    const formData = new FormData(reviewsForm);


    fetch(actionUrl, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {

            console.log(data);
            const formContainer = document.querySelector('#container');

            formContainer.innerHTML = '<p class="${data.data.status}"> ${data.data.message} </p>';

        })
        .catch((error) => {
            console.error('Error:', error);
        });
}