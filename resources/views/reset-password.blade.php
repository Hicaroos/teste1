<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nova Senha</title>
</head>
    <body>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}" required readonly>
            </div>

            <div>
                <label for="password">Nova Senha</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirmar Nova Senha</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div>
                <button type="submit">Redefinir Senha</button>
            </div>
        </form>
    </body>
</html>