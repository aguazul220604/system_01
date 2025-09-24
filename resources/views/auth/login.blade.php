<style>
    body {
        background-color: #00401C;
        font-family: Arial, sans-serif;
    }

    .login-container {
        max-width: 400px;
        margin: 50px auto;
        background: #FFFFFF;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.4);
    }

    .login-container h2 {
        text-align: center;
        color: #00401C;
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #00401C;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #00401C;
        border-radius: 8px;
        margin-bottom: 12px;
        font-size: 14px;
        background-color: #00401C;
        color: #FFFFFF;
        transition: all 0.3s;
    }

    .form-input:focus {
        border-color: #00401C;
        outline: none;
        box-shadow: 0 0 6px rgba(94, 18, 0, 0.6);
    }

    .form-error {
        color: #00401C;
        font-size: 13px;
        margin-top: -8px;
        margin-bottom: 10px;
    }

    .form-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-footer a {
        font-size: 13px;
        color: #00401C;
        text-decoration: none;
        font-weight: bold;
    }

    .form-footer a:hover {
        text-decoration: underline;
    }

    .btn-submit {
        background-color: #00401C;
        color: #FFFFFF;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-submit:hover {
        background-color: #003318;
    }

    .logo {
        display: block;
        margin: 0 auto 20px auto;
        max-width: 400px;
        height: auto;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease;
    }

    .logo:hover {
        transform: scale(1.05);
    }
</style>

<div class="login-container">
    <img src="{{ asset('images/logo_utvm.png') }}" alt="Logo UTVM" class="logo">
    <h2>{{ __('Inicia sesión') }}</h2>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
        <input id="email" type="email" name="email" class="form-input" value="{{ old('email') }}" required
            autofocus autocomplete="username">
        <x-input-error :messages="$errors->get('email')" class="form-error" />

        <!-- Password -->
        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
        <input id="password" type="password" name="password" class="form-input" required
            autocomplete="current-password">
        <x-input-error :messages="$errors->get('password')" class="form-error" />

        <!-- Footer -->
        <div class="form-footer">
            @if (Route::has('register'))
                <a href="{{ route('register') }}">{{ __('Regístrate') }}</a>
            @endif
            <button type="submit" class="btn-submit">
                {{ __('Ingresar') }}
            </button>
        </div>
    </form>
</div>
