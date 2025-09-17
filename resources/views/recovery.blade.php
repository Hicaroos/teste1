<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina do Nordeste - Recuperação de Senha</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/recovery.css')}}">
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

            @if (session('status'))
                <div>
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('password.email') }}" method="post">
                @csrf

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                    
                    @error('email')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="button-group">
                    <a href="{{ route('login') }}" class="btn btn-secondary" style="text-decoration: none">Voltar</a>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>

            <footer class="logos">
                <img src="{{asset('images/observa-nordeste.png')}}" alt="Logo Observa Nordeste">
                <img src="{{asset('images/prefeitura.png')}}" alt="Logo Prefeitura de Juazeiro do Norte">
            </footer>
        </div>
    </main>
</body>
</html>