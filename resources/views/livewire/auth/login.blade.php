<div class="overflow-y-hidden">
    <main class="flex justify-center items-center h-auto mt-20">
        <x-form wire:submit.prevent='login' class="w-96 border border-slate-600 px-4 py-2 rounded-md">
            <h1 class="text-3xl font-bold text-center uppercase text-slate-300">Todolist</h1>
            <h1 class="text-2xl font-semibold text-center">Login</h1>
            <hr class="border-slate-200">
            <x-input label="Email" type="email" wire:model="email" inline icon="o-envelope" />
            <x-password label="Password" inline wire:model="password" password-icon="o-lock-closed"
                password-visible-icon="o-lock-open" />

            <x-slot:actions class="flex flex-col">
                <x-button label="Login" icon="o-paper-airplane" class="btn-primary" type="submit" spinner="login" />
                <x-button label="Register" class="btn-accent" />
            </x-slot:actions>
        </x-form>

        <x-toast />
    </main>
</div>
