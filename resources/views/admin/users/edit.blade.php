<x-admin-layout>
    
    {{ Breadcrumbs::render('admin.roles.edit', $user) }}

    <div class="card bg-white shadow-md rounded-lg overflow-hidden">

        <!-- Card Header -->
        <x-card-header-act>
            <x-label class="mb-2">
                ACTUALIZAR USUARIO
            </x-label>
        </x-card-header-act>

        <form action="{{route('admin.users.update', $user)}}" method="POST"
            class="bg-white rounded-lg p-6 shadow-lg">

            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4"/>
            <div class="mb-4">

                <x-label class="mb-3">
                    Nombre:
                </x-label>

                <x-input
                name="name"
                class="w-full" 
                placeholder="Escriba el nombre del usuario"
                value="{{ old('name',$user->name)}}"/>

            </div>

            <div class="mb-4">

                <x-label class="mb-3">
                    Correo:
                </x-label>

                <x-input
                type="email"
                name="email"
                class="w-full" 
                placeholder="Escriba el correo del usuario"
                value="{{ old('email',$user->email)}}"/>

            </div>

            <div class="mb-4">

                <x-label class="mb-3">
                    Contraseña:
                </x-label>

                <x-input
                type="password"
                name="password"
                class="w-full" 
                placeholder="Escriba la contraseña del usuario"/>

            </div>
            
            <div class="mb-4">

                <x-label class="mb-3">
                    Confirmar contraseña:
                </x-label>

                <x-input
                type="password"
                name="password_confirmation"
                class="w-full" 
                placeholder="Confirme la contraseña"/>

            </div>

            <div class="mb-4">
                <x-label class="mb-3">
                    Roles:
                </x-label>
            
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    @foreach ($roles as $role)
                        <label class="flex items-center space-x-2">
                            <x-checkbox 
                                name="roles[]" 
                                value="{{ $role->id }}"
                                :checked="in_array($role->id, old('roles',$user->roles->pluck('id')->toArray()))"
                                />
                           {{ $role->name }}
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