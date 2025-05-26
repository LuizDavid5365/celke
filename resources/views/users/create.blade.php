<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])

    <title>Celke</title>
</head>
<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">Lukay</a></h2>
                <ul class="list-nav-link">
                    <li><a href="#" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>
        
        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Cadastrar Usuário</h1>
                <a href="#" class="btn-primary">Listar</a>
            </div>
        </div>
        

            @if (session('sucess'))
                <p style="color: #086">
                {{ session('sucess') }}
                </p>
            @endif

            @if (session('error'))
                <p style="color: #F00">
                {{ session('error') }}
                </p>
            @endif

        <form action="{{ route('user.store') }}" method="POST">
            @csrf 
            <label for="name">Nome: </label>
            <input type="text" name="name" id="name" placeholder="Nome completo"
            value="{{ old('name') }}" required><br><br>

            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Melhor e-mail"
            value="{{ old('email') }}" required><br><br>

            <label for="password">Senha: </label>
            <input type="password" name="password" id="password" placeholder="Senha com no mínimo 6 caracteres"
            value="{{ old('password') }}" required><br><br>

            <button type="submit">Cadastrar</button>

        </form>
    </div>
</body>
</html>