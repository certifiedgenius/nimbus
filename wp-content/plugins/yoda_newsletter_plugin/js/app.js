let subButton = document.querySelector('#newsletter_form');
subButton.addEventListener('submit', doAjax);

function doAjax(event) {
    event.preventDefault();

    /*
     * Skapa formulär data som skickas  med fetch request:et.
     * Vi skickar alltså bara med action (metoden som ska hantera det) och nonce (csrf)
     *
     * */

    let formData = new FormData(subButton);
    url = subButton.getAttribute('action'); /* hämtar "action=" " på <form></form>*/
    /* myAjax.ajaxurl kommer från vår JS-variabel som vi skapade i wp_localize_script() i wp_plugin.php */
    fetch(url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if(data.type === "success") {

                console.log(data.message);
            }
            else {
                alert("För i helvete.....");
            }
        })
        .catch((error) => {
            console.log('Error:' + error);
        });
}
