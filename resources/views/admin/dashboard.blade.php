<x-admin.app>
    <div class="space-y-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Panel de Administración</h1>
            <p class="mt-2 text-gray-600">Gestiona los eventos de {{ config('app.name') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-lg font-medium text-gray-500">Total Eventos</h3>
                <p class="mt-2 text-3xl font-bold text-gray-900">{{ $eventsCount }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-lg font-medium text-gray-500">Eventos Activos</h3>
                <p class="mt-2 text-3xl font-bold text-green-600">{{ $activeEventsCount }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm border">
                <h3 class="text-lg font-medium text-gray-500">Próximos Eventos</h3>
                <p class="mt-2 text-3xl font-bold text-blue-600">{{ $recentEvents->count() }}</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-sm border">
            <div class="p-6 border-b flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-900">Eventos Recientes</h2>
                <a href="{{ route('events.create') }}" class="btn-primary">
                    Nuevo Evento
                </a>
            </div>

            @if ($recentEvents->isEmpty())
                <div class="p-6 text-center text-gray-500">
                    No hay eventos registrados. <a href="{{ route('events.create') }}" class="text-blue-600 hover:underline">Crea el primero</a>.
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Imágenes</th>
                                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($recentEvents as $event)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="text-sm font-medium text-gray-900">{{ $event->title }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $event->event_date->format('d/m/Y') }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium
                                            {{ $event->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                            {{ $event->is_active ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $event->images_count ?? $event->images->count() }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="{{ route('events.edit', $event) }}" class="text-blue-600 hover:text-blue-900 mr-3">Editar</a>
                                        <form action="{{ route('events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar este evento?')">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t">
                    <a href="{{ route('events.index') }}" class="text-blue-600 hover:underline">Ver todos los eventos</a>
                </div>
            @endif
        </div>
    </div>
</x-admin.app>