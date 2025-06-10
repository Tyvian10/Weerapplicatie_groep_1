<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Neerslag toevoegen</title>
</head>
<body>
    <h1>Voeg nieuwe neerslagdata toe</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('neerslag.store') }}">
        @csrf
f
        <label for="jaar">Jaar:</label>
        <input type="number" name="jaar" min="2005" max="2024" value="{{ old('jaar') }}" required><br>

        <label for="maand">Maand:</label>
        <select name="maand" required>
            <option value="">-- Kies een maand --</option>
            @foreach(['januari','februari','maart','april','mei','juni','juli','augustus','september','oktober','november','december'] as $maand)
                <option value="{{ $maand }}" {{ old('maand') == $maand ? 'selected' : '' }}>{{ ucfirst($maand) }}</option>
            @endforeach
        </select><br>

        <label for="mm">Neerslag (mm):</label>
        <input type="number" name="mm" step="0.1" min="0" value="{{ old('mm') }}" required><br><br>

        <button type="submit">Opslaan</button>
    </form>

    @if($errors->any())
        <div style="color:red;">
            <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
