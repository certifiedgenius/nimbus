let delButton = document.querySelector('#del_trans');
let submitButton = document.querySelector('#submit');

delButton.addEventListener('click', doAjax);
submitButton.addEventListener('click', doAjax);

function doAjax(event) {
    event.preventDefault();

    /* Skapa formulär data som skickas  med fetch request:et.
    *  Vi skickar alltså bara med action (metoden som ska hantera det) och nonce (csrf) /
    let formData = new FormData();
    formData.append('action', "wcm_del_repos_action");
    formData.append('nonce', delButton.getAttribute('data-nonce'));

    / myAjax.ajax url kommer från vår JS-variabel som vi skapade i wp_localize_script() i wp_plugin.php */
    fetch(myAjax.ajaxurl, {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {

            if(data.type == "success") {
                const repoList = document.querySelector('#repo_list');

                repoList.innerHTML = '<li> Inga repos. </li>';
            }
            else {
                alert("Your like could not be added");
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
}


/**
 * Nedan är exempel på att skicka ett POST request till WP-API:et (med jquery)
 *
 * Den kommer ändra title på post 17513 till "Hello Moon".
 */
jQuery.ajax( {
    url: myAjax.root + 'wp/v2/posts/17513',
    method: 'POST',
    beforeSend: function ( xhr ) {
        xhr.setRequestHeader( 'X-WP-Nonce', myAjax.nonce );
    },
    data:{
        'title' : 'Hello Moon'
    }
} ).done( function ( response ) {
    console.log( response );
} );