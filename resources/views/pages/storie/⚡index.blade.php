<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithPagination;
use App\Models\Storie;

new class extends Component
{
    use WithPagination;

    #[Computed]
    public function stories() {
        return Storie::latest()->paginate(5);
    }
};
?>

<div class="max-w-7xl mx-auto space-y-4">
    <flux:heading size="xl" class="text-zinc-800 dark:text-white">Story</flux:heading>
    <flux:subheading size="lg" class="text-zinc-600 dark:text-zinc-400">Manage your stories</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-storie">
        <flux:button variant="primary" icon="plus" color="primary">Add Stories</flux:button>
    </flux:modal.trigger>


</div>