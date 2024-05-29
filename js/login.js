
document.getElementById('login').addEventListener('submit', function (event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var data = {
        "email": email,
        "password": password
    };
    fetch('http://192.168.137.1/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (response.ok) {
                console.log('Login bem-sucedido');
                return response.json();
            } else {
                console.error('Erro durante o login');
            }
        }).then(data => {
            console.log('Dados recebidos:', data);
            window.location.href = data;
        })
        .catch(error => {
            console.error('Erro durante a requisição:', error);
        });
});