<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shirt Site</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 32px;
            background: #f5f5f5;
            color: #222;
        }

        nav {
            display: flex;
            gap: 16px;
            margin-bottom: 32px;
            padding-bottom: 16px;
            border-bottom: 1px solid #ccc;
        }

        nav a {
            color: #222;
            text-decoration: none;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        .card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 16px;
        }

        .tshirt-image {
            display: block;
            width: 100%;
            height: 220px;
            object-fit: contain;
            background: #f8f8f8;
            border-radius: 6px;
        }

        .tshirt-image-detail {
            max-width: 420px;
            height: 420px;
        }

        .tag {
            display: inline-block;
            background: #eee;
            padding: 4px 8px;
            border-radius: 999px;
            font-size: 14px;
            margin-right: 4px;
        }

        .button {
            display: inline-block;
            margin-top: 12px;
            padding: 8px 12px;
            background: #222;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .button:hover {
            background: #444;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('tshirts.index') }}">T-shirts</a>
        <a href="{{ route('categories.index') }}">Categories</a>
        <a href="{{ route('colors.index') }}">Colors</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
