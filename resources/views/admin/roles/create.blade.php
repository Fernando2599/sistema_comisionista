<x-admin-layout>

    {{ Breadcrumbs::render('admin.roles.create') }}
    
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <x-card-header-act>
            <x-label class="mb-2">
                CREAR ROL
            </x-label>
        </x-card-header-act>

        <form action="{{route('admin.roles.store')}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre del rol"
                />

            </div>

            <div class="mb-4">
                <x-label class="mb-3">
                    Permisos:
                </x-label>
            
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($permissions as $permission)
                        <label class="flex items-center space-x-2">
                            <x-checkbox 
                                name="permissions[]" 
                                value="{{ $permission->id }}"
                                :checked="in_array($permission->id, old('permissions', []))"
                                />
                           {{ $permission->name }}
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-end">
                <x-button-blue>
                    Guardar
                </x-button-blue>
            </div>

        </form>
    </div>

</x-admin-layout>