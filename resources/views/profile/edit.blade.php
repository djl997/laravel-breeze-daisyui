<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @include('profile.partials.update-profile-information-form')
            <hr>
            @include('profile.partials.update-password-form')
            <hr>
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
