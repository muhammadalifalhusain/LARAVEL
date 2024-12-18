<div>
    <form wire:submit.prevent="register">
        <div>
            <label for="name">Name</label>
            <input type="text" wire:model="name" id="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" wire:model="email" id="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" wire:model="password" id="password">
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" wire:model="password_confirmation" id="password_confirmation">
        </div>

        <button type="submit">Register</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
