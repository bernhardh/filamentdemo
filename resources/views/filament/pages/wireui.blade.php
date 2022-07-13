<x-filament::page>
    <div>
        <h1>Just some buttons</h1>
        <x-wireui-button primary label="Primary"></x-wireui-button>
        <x-wireui-button secondary label="Secondary"></x-wireui-button>
    </div>
    <div x-data="{ msg: 'Hallo, dies ist eine Notification. Wie get es dir?' }">
        <h1>Notifications</h1>
        <x-wireui-input class="mt-3" label="Notification-Message" x-model:value="msg" />
        <x-wireui-button secondary class="mt-3" type="button" label="Open Alert" x-on:click="window.$wireui.notify({
            title: 'Profile saved!',
            description: msg,
            icon: 'success'
        })"></x-wireui-button>
    </div>
</x-filament::page>
