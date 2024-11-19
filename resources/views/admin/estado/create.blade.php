<x-admin-layout>
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <div class="card-header bg-blue-200 p-2 flex justify-center items-center">
            <x-label class="mb-2">
                CREAR ESTADO
            </x-label>
        </div>

        <form action="{{route('admin.estado.store')}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="estado"
                class="w-full" 
                placeholder="Escriba el nombre del estado"
                />

            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

            @csrf
        </form>
    </div>

</x-admin-layout>