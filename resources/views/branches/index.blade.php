<x-main-view>
    <x-slot name="title">Sucursales</x-slot>
    <x-slot name="slot">
         <div class="flex justify-end mb-4">
             <a href="{{ route('branches.create') }}"
                class="inline-flex items-center px-3 py-1 bg-indigo-600 hover:bg-indigo-400 text-white font-medium rounded-lg shadow-sm transition-colors">
                 Crear Sucursal
             </a>
         </div>

         <div class="overflow-x-auto bg-white rounded-lg shadow">
             <table class="min-w-full divide-y divide-gray-200">
                 <thead class="bg-gray-50">
                     <tr>
                         <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                             ID
                         </th>
                         <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                             Nombre
                         </th>
                         <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                             Dirección
                         </th>
                         <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                             Teléfono
                         </th>
                         <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                             Acciones
                         </th>
                     </tr>
                 </thead>
                 <tbody class="bg-white divide-y divide-gray-200">
                     @foreach($branches as $branch)
                     <tr class="hover:bg-gray-50 transition-colors">
                         <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                             {{ $branch->id }}
                         </td>
                         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                             {{ $branch->name }}
                         </td>
                         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                             {{ $branch->address }}
                         </td>
                         <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                             {{ $branch->phone }}
                         </td>

                         <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                             <div class="flex space-x-2">
                                 <a href="{{ route('branches.show', $branch) }}"
                                    class="inline-flex items-center px-2 py-1 bg-blue-600 hover:bg-blue-400 text-white text-xs font-medium rounded-md transition-colors">
                                     Ver
                                 </a>
                                 <a href="{{ route('branches.edit', $branch) }}"
                                    class="inline-flex items-center px-2 py-1 bg-yellow-600 hover:bg-yellow-400 text-white text-xs font-medium rounded-md transition-colors">
                                     Editar
                                 </a>
                                 <form action="{{ route('branches.destroy', $branch) }}"
                                       method="POST"
                                       class="inline">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit"
                                             class="inline-flex items-center px-2 py-1 bg-red-600 hover:bg-red-400 text-white text-xs font-medium rounded-md transition-colors">
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
     </x-slot>
</x-main-view>
