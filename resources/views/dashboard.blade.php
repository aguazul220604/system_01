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
                margin-bottom: 15px;
                color: #5E1200;
                border-bottom: 2px solid #00401C;
                padding-bottom: 8px;
            }

            /* 🎨 Estilos para la tabla */
            .user-table {
                width: 100%;
                border-collapse: collapse;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            }

            .user-table thead {
                background-color: #00401C;
                color: #FFFFFF;
                text-align: left;
            }

            .user-table th,
            .user-table td {
                padding: 12px 15px;
                border-bottom: 1px solid #ddd;
            }

            .user-table tbody tr:nth-child(even) {
                background-color: #f4f4f4;
            }

            .user-table tbody tr:hover {
                background-color: #e6f0ea;
                transform: scale(1.01);
                transition: all 0.2s ease-in-out;
            }

            .user-table th {
                font-size: 15px;
                font-weight: bold;
            }

            .user-table td {
                font-size: 14px;
                color: #333;
            }
        </style>

        <div class="dashboard-header">
            <h2>{{ __('Universidad Tecnológica del Valle del Mezquital') }}</h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="dashboard-card">
                <h3>{{ __('Lista de Usuarios') }}</h3>
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo electrónico</th>
                            <th>Domicilio</th>
                            <th>Teléfono</th>
                            <th>Fecha de nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->domicilio }}</td>
                                <td>{{ $user->telefono }}</td>
                                <td>{{ $user->fecha_nacimiento }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
