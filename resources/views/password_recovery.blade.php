<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina do Nordeste - Recuperação de Senha</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/password_recovery.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="page-header">
        <div class="bar-blue"></div>
        <div class="bar-gradient"></div>
        <div class="bar-white"></div>
    </header>

    <main class="login-container">
        <div class="login-box">
            <h1>Oficina do Nordeste</h1>
            <p class="subtitle">Recuperação de acesso</p>

            <form action="#" method="post">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="" required>
                </div>
               
                <div class="button-group">
                    <button type="button" class="btn btn-secondary">Voltar</button>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>

            </form>

            <footer class="logos">
                <img src="{{ asset('img/observa_nordeste.svg') }}" alt="Logo Observa Nordeste">
                <img src="{{ asset('img/city_hall.svg') }}" alt="Logo Prefeitura de Juazeiro do Norte">
            </footer>
        </div>
    </main>
</body>
</html>