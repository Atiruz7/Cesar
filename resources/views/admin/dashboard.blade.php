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

        <div class="card">
            <div class="card-header flex justify-between items-center">
                <h2 class="text-xl font-semibold text-gray-900">Eventos Recientes</h2>
                <a href="{{ route('admin.events.create') }}" class="btn-primary">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    Nuevo Evento
                </a>
            </div>

            @if ($recentEvents->isEmpty())
                <div class="card-body text-center text-gray-500 py-12">
                    <svg class="mx-auto h-12 w-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">No hay eventos registrados</h3>
                    <p class="mt-1 text-gray-500">Comienza creando tu primer evento.</p>
                    <a href="{{ route('admin.events.create') }}" class="btn-primary mt-4 inline-block">Crear el primero</a>
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
                                        <span class="status-badge {{ $event->is_active ? 'status-active' : 'status-inactive' }}">
                                            {{ $event->is_active ? 'Activo' : 'Inactivo' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $event->images_count ?? $event->images->count() }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <a href="{{ route('admin.events.edit', $event) }}" class="table-action-btn table-action-edit">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                                                Editar
                                            </a>
                                            <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="inline" onsubmit="return confirm('¿Eliminar este evento?')">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="table-action-btn table-action-delete">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v12M10 3h4"/></svg>
                                                    Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-body border-t pt-4">
                    <a href="{{ route('admin.events.index') }}" class="link-button">Ver todos los eventos</a>
                </div>
            @endif
        </div>
    </div>
</x-admin.app>