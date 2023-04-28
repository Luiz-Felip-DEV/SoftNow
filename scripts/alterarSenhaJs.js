<script>
    class alterarSenhaJs{
        function alterarSenha() {
            // Obtenha as referências dos campos de senha e confirmar senha usando o método 'getElementById'
            const senha = document.getElementById('senha');
            const confirmarSenha = document.getElementById('confirmarSenha');

            // Verifique se os campos de senha e confirmar senha estão preenchidos
            if (senha.value && confirmarSenha.value) {

                // Verifique se as senhas coincidem
                if (senha.value === confirmarSenha.value) {
                    alert("Senha alterada com sucesso!");
                    window.location.href = "../View/login.php";
                } else {
                    alert("As senhas não coincidem. Por favor, tente novamente.");
                    window.location.href = "../View/alterarSenha.php";
                }

            } else {
                alert("Por favor, preencha os campos de senha e confirmar senha.");
                window.location.href = "../View/alterarSenha.php";;
            }
        }
    }
    </script>

