<div class="question">
    <p>{{ $numero }}. {{ $texto }}</p>
    <div class="options">
        @foreach ($opciones as $key => $opcion)
            <label>
                <input type="radio" name="{{ $name }}" value="{{ $key }}" {{ old($name) == $key ? 'checked' : '' }}> 
                {{ $opcion }}
            </label>
        @endforeach
    </div>
    @error($name)
        <div style="color: red;">{{ $message }}</div>
    @enderror
</div>
