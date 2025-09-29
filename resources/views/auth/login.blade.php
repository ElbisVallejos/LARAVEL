@extends('layouts.app')
@section('content')
<style>
    .auth-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }
    
    .auth-card {
        background: white;
        border-radius: 24px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        max-width: 480px;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .auth-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        padding: 40px 30px;
        text-align: center;
        color: white;
    }
    
    .auth-header h2 {
        margin: 0;
        font-size: 28px;
        font-weight: 600;
        letter-spacing: -0.5px;
    }
    
    .auth-header p {
        margin: 8px 0 0 0;
        opacity: 0.9;
        font-size: 14px;
    }
    
    .auth-body {
        padding: 40px 35px;
    }
    
    .form-group-custom {
        margin-bottom: 24px;
    }
    
    .form-label-custom {
        display: block;
        margin-bottom: 8px;
        color: #4a5568;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 0.2px;
    }
    
    .form-control-custom {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        font-size: 15px;
        transition: all 0.3s ease;
        background: #f8fafc;
        color: #2d3748;
    }
    
    .form-control-custom:focus {
        outline: none;
        border-color: #667eea;
        background: white;
        box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
    }
    
    .form-control-custom.is-invalid {
        border-color: #fc8181;
        background: #fff5f5;
    }
    
    .invalid-feedback-custom {
        display: block;
        margin-top: 6px;
        color: #e53e3e;
        font-size: 13px;
        font-weight: 500;
    }
    
    .checkbox-wrapper {
        display: flex;
        align-items: center;
        margin: 20px 0;
    }
    
    .checkbox-custom {
        width: 20px;
        height: 20px;
        margin-right: 10px;
        cursor: pointer;
        accent-color: #667eea;
    }
    
    .checkbox-label {
        color: #4a5568;
        font-size: 14px;
        cursor: pointer;
        user-select: none;
    }
    
    .btn-primary-custom {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 10px;
        letter-spacing: 0.3px;
    }
    
    .btn-primary-custom:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 24px rgba(102, 126, 234, 0.3);
    }
    
    .btn-primary-custom:active {
        transform: translateY(0);
    }
    
    .forgot-password-link {
        display: inline-block;
        margin-top: 16px;
        color: #667eea;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    .forgot-password-link:hover {
        color: #764ba2;
        text-decoration: underline;
    }
    
    .divider {
        text-align: center;
        margin: 30px 0;
        position: relative;
    }
    
    .divider::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
        background: #e2e8f0;
    }
    
    .divider span {
        background: white;
        padding: 0 15px;
        color: #a0aec0;
        font-size: 13px;
        position: relative;
        z-index: 1;
    }
    
    .register-link {
        text-align: center;
        margin-top: 24px;
        padding-top: 24px;
        border-top: 1px solid #e2e8f0;
    }
    
    .register-link p {
        margin: 0;
        color: #718096;
        font-size: 14px;
    }
    
    .register-link a {
        color: #667eea;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.3s ease;
    }
    
    .register-link a:hover {
        color: #764ba2;
        text-decoration: underline;
    }
    
    .icon-input-wrapper {
        position: relative;
    }
    
    .icon-input-wrapper svg {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #a0aec0;
        width: 20px;
        height: 20px;
    }
    
    .icon-input-wrapper .form-control-custom {
        padding-left: 46px;
    }
</style>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2>Bienvenido de vuelta</h2>
            <p>Inicia sesión en tu cuenta</p>
        </div>
        
        <div class="auth-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group-custom">
                    <label for="email" class="form-label-custom">Correo Electrónico</label>
                    <div class="icon-input-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <input 
                            id="email" 
                            type="email" 
                            class="form-control-custom @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email" 
                            autofocus
                            placeholder="tu@correo.com"
                        >
                    </div>
                    @error('email')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group-custom">
                    <label for="password" class="form-label-custom">Contraseña</label>
                    <div class="icon-input-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <input 
                            id="password" 
                            type="password" 
                            class="form-control-custom @error('password') is-invalid @enderror" 
                            name="password" 
                            required 
                            autocomplete="current-password"
                            placeholder="••••••••"
                        >
                    </div>
                    @error('password')
                        <span class="invalid-feedback-custom">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="checkbox-wrapper">
                    <input 
                        class="checkbox-custom" 
                        type="checkbox" 
                        name="remember" 
                        id="remember" 
                        {{ old('remember') ? 'checked' : '' }}
                    >
                    <label class="checkbox-label" for="remember">
                        Recordarme
                    </label>
                </div>

                <button type="submit" class="btn-primary-custom">
                    Iniciar Sesión
                </button>

                @if (Route::has('password.request'))
                    <div style="text-align: center;">
                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                @endif
            </form>

            @if (Route::has('register'))
            <div class="register-link">
                <p>¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
