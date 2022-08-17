<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <form wire:submit.prevent="submit">

        <input type="text" wire:model="name">

        <button type="submit">Submit</button>
    </form>

    <h1> {{$name }}</h1>
</div>
