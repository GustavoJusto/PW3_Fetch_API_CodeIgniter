window.onload = function() {
    const cep = document.querySelector('#cep');

    cep.addEventListener('focusout', event => {
        const op = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        };

        fetch(`https://viacep.com.br/ws/${cep.value}/json/`, op)
        .then(
            response =>{
                response.json().then(
                    data => {
                        document.querySelector('#uf').value = data.uf;
                        document.querySelector('#localidade').value = data.localidade;
                        document.querySelector('#bairro').value = data.bairro;
                        document.querySelector('#logradouro').value = data.logradouro;
                    }
                )
            }
        )
    });
}