<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator using laravel</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #fbfbfb;
            padding: 40px;
            text-align: center;
        }

        h1 {
            color: #013604;
        }

        form {
            background-color: #d9fadb;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #013604;
            display: inline-block;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        select {
            margin-top: 5px;
            padding: 8px;
            width: 250px;
            border-radius: 5px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #013604;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #017305;
            color: black;
        }

        h2 {
            margin-top: 30px;
            color: #013604;
        }

        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1>Calculator</h1>

    <form action="{{ route('calculate') }}" method="POST">
        @csrf

        <label>Number 1</label>
        <input type="number" name="num1" required value="{{ old('num1', $num1 ?? '') }}">
        <br><br>

        <label>Number 2</label>
        <input type="number" name="num2" required value="{{ old('num2', $num2 ?? '') }}">
        <br><br>

        <label>Operation</label>
        <select name="operation" required>
            <option value="addition" {{ old('operation', $operation ?? '') === 'addition' ? 'selected' : '' }}>Add
            </option>
            <option value="subtraction" {{ old('operation', $operation ?? '') === 'subtraction' ? 'selected' : '' }}>
                Subtract</option>
            <option value="multiplication"
                {{ old('operation', $operation ?? '') === 'multiplication' ? 'selected' : '' }}>Multiply</option>
            <option value="division" {{ old('operation', $operation ?? '') === 'division' ? 'selected' : '' }}>Divide
            </option>
        </select>
        <br><br>

        <button type="submit">Calculate</button>
    </form>

    @if (isset($result))
        <h2>Result</h2>
        <p>{{ $num1 }} {{ $symbol }} {{ $num2 }} = {{ $result }}</p>
    @endif
</body>

</html>
