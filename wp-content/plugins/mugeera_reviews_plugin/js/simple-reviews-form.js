let reviewsForm = document.querySelector('#reviews_form');
reviewsForm.addEventListener('submit', doAjax)


function doAjax(event) {
    event.preventDefault();

    /* Skapa formulär data som skickas  med fetch request:et.
    *  Vi skickar alltså bara med action (metoden som ska hantera det) och nonce (csrf) /
    let formData = new FormData();
    formData.append('action', "wcm_del_repos_action");
    formData.append('nonce', delButton.getAttribute('data-nonce'));

    / myAjax.ajax url kommer från vår JS-variabel som vi skapade i wp_localize_script() i wp_plugin.php */

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