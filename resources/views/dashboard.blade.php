<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tipo</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Indirizzo</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stato</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nazione</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Telefono</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
            		@foreach ($lista_birrerie as $single)
        			<tr>
                        <td class="text-left py-3 px-4">{{$single['name']}}</a></td>
                        <td class="text-left py-3 px-4">{{$single['brewery_type']}}</td>
                        <td class="text-left py-3 px-4">{{$single['address_1']}}</td>
                        <td class="text-left py-3 px-4">{{$single['state_province'] }}</td>
                        <td class="text-left py-3 px-4">{{$single['country'] }}</td>
                        <td class="text-left py-3 px-4">{{$single['phone'] }}</td>
                    </tr>
            		@endforeach
            		 </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
