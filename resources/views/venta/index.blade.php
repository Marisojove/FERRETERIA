<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            venta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route('venta.create') }}"
                    class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                    Registrar venta</a>
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full">

                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase
            border-b border-gray-600">
                                        <th class="px-4 py-3">idventa</th>
                                        <th class="px-4 py-3">precio</th>
                                        <th class="px-4 py-3">id cliente</th>
                                        <th class="px-4 py-3">id empleado</th>

                                        <th class="px-4 py-3">id producto</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white">
                                    @foreach ($venta as $venta)
                                        <tr class="text-gray-700">

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $venta->idventa }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $venta->precio }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $venta->idcliente }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $venta->idempleado }}</td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $venta->idproducto }}</td>

                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-yellow-400 text-gray-100 text-lg rounded-lg focus:border-4 border-yellow-300"
                                                    href="{{route('venta.show', $venta->idventa)}}">
                                                        Editar
                                                    </a>
                                                </div>

                                                <form action="{{ route('venta.destroy', $venta->idventa) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                                                        Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
