
        // Função para definir um cookie com um prazo de expiração
        function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // Função para obter o valor de um cookie
        function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
            c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
            }
        }
        return "";
        }

        // Função para exibir a barra no rodapé apenas se não houver um cookie definido
        function showBarOnce() {
        var barShown = getCookie("barShown");
        if (barShown === "") {
            // Exibir a barra no rodapé
            $('#myModalCookies').modal('show');

            // Adicionar evento de clique ao botão "Aceitar"
            $('#btnAceitar').on('click', function () {
            // Ocultar o modal ao aceitar
            $('#myModalCookies').modal('hide');

            // Definir o cookie para que a barra não seja exibida novamente por 30 dias
            setCookie("barShown", "true", 30);
            });
        }
        }

        // Chamar a função ao carregar a página
        $(document).ready(function () {
        showBarOnce();
        });
