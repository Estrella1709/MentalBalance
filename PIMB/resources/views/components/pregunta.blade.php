<div class="question">
    <p>{{ $numero }}. {{ $texto }}</p>
    <div class="options">
        @foreach ($opciones as $key => $opcion)
            <label><input type="radio" name="{{ $name }}" value="{{ $key }}"> {{ $opcion }}</label>
        @endforeach
    </div>
</div>
