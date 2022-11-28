<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Good Book Store</title>

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- font awesome --}}
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel = "stylesheet">
</head>
<body class = "min-vh-100 d-flex flex-column bg-secondary">
    <header class = "bg-warning d-flex flex-row mw-100 p-3 justify-content-center">
        <h1>Giant Book Supplier</h1>
    </header>

    <nav class = "bg-primary d-flex flex-row align-items-center justify-content-center mw-100 p-3">
        <div class = "d-flex flex-row align-items-center">
            <a href="/" class = "px-2 text-white text-decoration-none">Home</a>
                <div class = "dropdown">
                <a href="#" class = "dropdown-toggle px-2 text-white text-decoration-none"
                role = "button" id = "dropdownCategory"
                data-bs-toggle = "dropdown" aria-expanded="false"
                >Category</a>

                <ul class = "dropdown-menu" aria-labelledby="dropdownCategory">
                    @foreach ($data['categories'] as $category)
                        <li><a class="dropdown-item"
                                href="/category/{{ $category['id'] }}">{{ $category['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <a href="/publisher" class = "px-2 text-white text-decoration-none">Publisher</a>
            <a href="/contact" class = "px-2 text-white text-decoration-none">Contact</a>
        </div>
    </nav>

    <main class = "justify-content-center p-5">
        @yield('content')
    </main>

    <footer class = "mt-auto d-flex flex-column justify-content-center align-items-center bg-primary p-3">
        <div class = "mt-2 d-flex align-items-center justify-content-center text-white">
            &copy; Happy Book Store 2022
        </div>
    </footer>
</body>
</html>
