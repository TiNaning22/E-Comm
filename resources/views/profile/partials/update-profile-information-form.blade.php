<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profil Saya') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Perbarui informasi profil dan alamat email akun Anda.") }}
        </p>
    </header>

    

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-4 p-3 bg-light rounded shadow-sm">
            <label for="name" class="form-label fw-bold">Nama saya</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="form-control" 
                value="{{ old('name', $user->name) }}" 
                required 
                autofocus 
                autocomplete="name" 
            >
            @if ($errors->has('name'))
                <div class="mt-2 text-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>
        
        <div class="mb-4 p-3 bg-light rounded shadow-sm">
            <label for="email" class="form-label fw-bold">Email</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="form-control" 
                value="{{ old('email', $user->email) }}" 
                required 
                autocomplete="username" 
            >
            @if ($errors->has('email'))
                <div class="mt-2 text-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        
        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary">
                {{ __('Save') }}
            </button>
        
            @if (session('status') === 'profile-updated')
                <p class="text-success fw-bold mb-0">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
        
    </form>
</section>
