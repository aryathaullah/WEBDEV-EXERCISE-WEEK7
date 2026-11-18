<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            margin: 0;
            padding: 32px 16px;
            background: #f3f5f7;
            color: #263238;
            font-family: Arial, sans-serif;
        }

        main {
            width: 100%;
            max-width: 520px;
            padding: 24px;
            background: #fff;
            border: 1px solid #dfe4e8;
            border-radius: 8px;
        }

        h1 {
            margin: 0 0 6px;
            font-size: 25px;
        }

        .subtitle {
            margin: 0 0 22px;
            color: #687780;
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd4d9;
            border-radius: 4px;
            font: inherit;
        }

        input:focus {
            border-color: #527b91;
            outline: 2px solid #dce8ed;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 14px;
            border: 0;
            border-radius: 4px;
            background: #315b72;
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            font: inherit;
            font-size: 14px;
        }

        .button:hover {
            background: #25485b;
        }

        .button-secondary {
            background: #e8eef1;
            color: #263238;
        }

        .button-secondary:hover {
            background: #d7e1e6;
        }
    </style>
</head>

<body>
    <main>
        <h1>Edit Laptop</h1>
        <p class="subtitle">Perbarui informasi laptop di bawah ini.</p>

        <form method="POST" action="{{ route('update-laptop', $laptop->id) }}">
            @csrf
            <div class="field">
                <label for="brand">Brand</label>
                <input type="text" name="brand" id="brand" required value="{{ $laptop->brand }}"
                    placeholder="Contoh: Asus">
            </div>

            <div class="field">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" required value="{{ $laptop->model }}"
                    placeholder="Contoh: ROG Zephyrus G14">
            </div>

            <div class="field">
                <label for="processor">Processor</label>
                <input type="text" name="processor" id="processor" required value="{{ $laptop->processor }}"
                    placeholder="Contoh: AMD Ryzen 9 7940HS">
            </div>

            <div class="field">
                <label for="ram">RAM</label>
                <input type="text" name="ram" id="ram" required value="{{ $laptop->ram }}"
                    placeholder="Contoh: 16GB DDR5">
            </div>

            <div class="actions">
                <button class="button" type="submit">Simpan Perubahan</button>
                <a class="button button-secondary" href="/">Kembali</a>
            </div>
        </form>
    </main>
</body>

</html>
