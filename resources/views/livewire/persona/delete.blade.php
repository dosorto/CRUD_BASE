<x-utils.modal wire:model="deletePersonaModal" wire:ignore>
    <x-slot name="header">
        <h1>Delete</h1>
    </x-slot>

    <x-slot name="main">
        <p>Are you sure ?</p>
    </x-slot>

    <x-slot name="footer">
        <x-utils.button class="bg-gray-400 hover:bg-gray-500" wire:click="$set('showConfirmDeleteModal', false)">
            Cancel
        </x-utils.button>
        <x-utils.button class="bg-red-400 hover:bg-red-500" wire:click="delete">Delete</x-utils.button>
    </x-slot>
</x-utils.modal>