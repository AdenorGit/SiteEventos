class UserLogin {
    constructor() {
        // Seleciona o formulário ou o botão
        this.form = document.querySelector('.form-login'); 
        this.email = document.getElementById('email');
        this.senha = document.getElementById('senha')
        this.msg = document.getElementById('msg');
        this.msg_p = document.getElementById('msg-p');

        this.init();
    }

    init() {
        // Adiciona o evento no submit do formulário para capturar o "Enter" também
        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            this.carregaRequisicao();
        });
    }

    funMsg(msg) {
        this.msg.style.display = 'flex';
        this.msg_p.textContent = msg;
        
    }

    async carregaRequisicao() {
        try {
            // Prepara os dados para o POST
            const formData = new FormData();
            formData.append('email', this.email.value);
            formData.append('senha', this.senha.value);

            const resposta = await fetch('/user/login', {
                method: 'POST',
                body: formData
            });

            if (!resposta.ok) {
                throw new Error(`Erro HTTP: ${resposta.status}`);
            }

            const dados = await resposta.json();

            if (dados.status === 'success') {
                // Redireciona se o login for verdadeiro
                window.location.href = '/';
                
            } else {
                // Exemplo de tratamento de erro vindo do PHP
                this.funMsg('Usuário ou senha incorretos!');
            }

        } catch (error) {
            console.error('Erro na requisição:', error);
            
        }
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new UserLogin();
});
