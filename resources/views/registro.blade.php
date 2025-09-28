@if (!Auth::check())
    <script>
        window.location.href = "{{ route('login') }}";
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            text: "{{ $errors->first() }}",
            icon: "warning",
            confirmButtonColor: "#00532C",
            showConfirmButton: true
        });
    </script>
@endif

<x-app-layout>
    <x-slot name="header">
        <style>
            body {
                background-color: #5E1200;
                font-family: Arial, sans-serif;
            }

            .dashboard-header {
                background-color: #00401C;
                color: #FFFFFF;
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
                text-align: center;
                margin-bottom: 30px;
            }

            .dashboard-header h2 {
                margin: 0;
                font-size: 24px;
                font-weight: bold;
            }

            .dashboard-card {
                background: #FFFFFF;
                border-radius: 15px;
                padding: 25px;
                box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
            }

            .dashboard-card h3 {
                margin-bottom: 20px;
                color: #5E1200;
                border-bottom: 2px solid #00401C;
                padding-bottom: 8px;
            }

            /* Estilos del formulario */
            .dashboard-card input,
            .dashboard-card select {
                width: 100%;
                padding: 10px 12px;
                margin-bottom: 15px;
                border-radius: 8px;
                border: 1px solid #00401C;
                font-size: 14px;
            }

            .dashboard-card input:focus,
            .dashboard-card select:focus {
                outline: none;
                border-color: #5E1200;
                box-shadow: 0 0 5px #5E1200;
            }

            .dashboard-card label {
                font-weight: bold;
                color: #00401C;
                display: block;
                margin-bottom: 5px;
            }

            .dashboard-card button {
                background-color: #00401C;
                color: #FFFFFF;
                padding: 12px 25px;
                border: none;
                border-radius: 10px;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .dashboard-card button:hover {
                background-color: #005f2c;
                transform: translateY(-2px);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            }
        </style>

        <div class="dashboard-header">
            <h2>{{ __('Universidad Tecnológica del Valle del Mezquital') }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="dashboard-card">
                <h3>{{ __('Registro de usuarios') }}</h3>
                <form method="POST" action="{{ route('dashboard.register') }}">
                    @csrf

                    <!-- Nombre -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Nombre</label>
                        <input type="text" name="name" class="w-full border rounded px-3 py-2"
                            value="{{ old('name') }}" required>
                        <x-input-error :messages="$errors->get('name')" />
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Email</label>
                        <input type="email" name="email" class="w-full border rounded px-3 py-2"
                            value="{{ old('email') }}" required>
                        <x-input-error :messages="$errors->get('email')" />
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Contraseña</label>
                        <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
                        <x-input-error :messages="$errors->get('password')" />
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2"
                            required>
                    </div>

                    <!-- Domicilio -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Domicilio</label>
                        <input type="text" name="domicilio" class="w-full border rounded px-3 py-2"
                            value="{{ old('domicilio') }}" required>
                        <x-input-error :messages="$errors->get('domicilio')" />
                    </div>

                    <!-- Teléfono -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Teléfono</label>
                        <input type="text" name="telefono" class="w-full border rounded px-3 py-2"
                            value="{{ old('telefono') }}" required>
                        <x-input-error :messages="$errors->get('telefono')" />
                    </div>

                    <!-- Edad -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Edad</label>
                        <input type="number" name="edad" class="w-full border rounded px-3 py-2"
                            value="{{ old('edad') }}" required>
                        <x-input-error :messages="$errors->get('edad')" />
                    </div>

                    <!-- Estatus -->
                    <div class="mb-4">
                        <label class="block font-bold mb-1">Estatus</label>
                        <select name="estatus" class="w-full border rounded px-3 py-2" required>
                            <option value="0" {{ old('estatus') == '0' ? 'selected' : '' }}>No Titulado</option>
                            <option value="1" {{ old('estatus') == '1' ? 'selected' : '' }}>Titulado</option>
                        </select>
                        <x-input-error :messages="$errors->get('estatus')" />
                    </div>


                    <!-- Footer -->
                    <div class="form-footer">
                        <button type="submit" class="btn-submit">
                            {{ __('Registrar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
