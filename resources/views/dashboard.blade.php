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

            .user-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .user-list li {
                background-color: #00401C;
                color: #FFFFFF;
                padding: 12px 15px;
                margin-bottom: 10px;
                border-radius: 8px;
                transition: transform 0.2s, background 0.3s;
            }

            .user-list li:hover {
                background-color: #003318;
                transform: translateX(5px);
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
                <ul class="user-list">
                    @foreach ($users as $user)
                        <li>{{ $user->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
