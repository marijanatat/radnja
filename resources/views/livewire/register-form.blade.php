<div>
    {{-- @if (session('success_message'))
        {{ session('success_message') }}
    @endif --}}
    @if (session('success_message'))
                <div class="alert alert-success">
                    {{ session('success_message') }}
                </div>
                @endif @if(count($errors) > 0)
            {{-- <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> --}}
            @endif
    <form wire:submit.prevent="submitForm" >
        @csrf
        <div class="mb-10">
            <input type="text" class="@error('name')border border-red-500 @enderror" wire:model.debounce.lazy="name" id="name" name="name" value="{{ old('name') }}" placeholder="Ime i prezime" required autofocus>
            @error('name')
            <p class="text-red-500 mt-1 mb-0 ml-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-10">
            <input type="email" class="@error('email')border border-red-500 @enderror" wire:model.debounce.500ms="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email adresa" required autofocus>
            @error('email')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
        </div>

        
        <div class="mb-10">
            <input type="password" class="@error('password')border border-red-500 @enderror" wire:model.debounce.500ms="password" id="password" name="password"  placeholder="Lozinka" required>
            @error('password')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-10">
            <input type="password" class="@error('password_confirmation')border border-red-500 @enderror" wire:model.debounce.500ms="password_confirmation" id="password-confirm" name="password_confirmation"  placeholder="Potvrdite lozinku" required>
            @error('password_confirmation')
                <p class="text-red-500 mt-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="login-container">
            <button type="submit" class="button-primary rounded-md">Registracija</button>
            <div class="already-have-container ml-4">
                <p class="mb-2 text-gray-700 italic lg:-ml-8"><strong>Već imate nalog?</strong></p>
                <a href="{{ route('login') }}" class=" font-md font-semibold "><span class="text-bojasvetla">Prijavite se</span></a>
            </div>
        </div>

        <div class="spacer"></div>

    </form>
</div>
