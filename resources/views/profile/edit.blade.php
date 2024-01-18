<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-gray-800 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="img-top">
                    @include('profile.partials.imagen-user-form')
                </div>
            </div>
            <div class="header-internal">
                <div class="p-4 sm:p-8 bg-gray-800 dark:bg-gray-800 shadow sm:rounded-lg item-1">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-gray-800 dark:bg-gray-800 shadow sm:rounded-lg item-2">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
            
                <div class="p-4 sm:p-8 bg-gray-800 dark:bg-gray-800 shadow sm:rounded-lg item-2">
                    <div class="max-w-xl">
                        Historico de atividades
                        <p>(table)</p>
                    </div>
                </div>
           
            <!--
            <div class="p-4 sm:p-8 bg-gray-800 dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                   @include('profile.partials.delete-user-form')
                </div>
            </div>
            -->
        </div>
    </div>
</x-app-layout>




