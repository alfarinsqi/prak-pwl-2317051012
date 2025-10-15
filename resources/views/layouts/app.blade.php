<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioMahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <div style="position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;">
        <x-navbar />
    </div>

    {{-- Content --}}
    <main class="flex-grow-1 d-flex justify-content-center align-items-start" 
          style="background-color: #d2b48c; padding: 100px 0 40px; min-height: 70vh;">
        {{-- padding-top:100px biar tidak ketimpa navbar --}}
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
