<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow p-4" style="width: 360px;">

            <h4 class="text-center mb-4">Login</h4>

            {{-- Login with Google --}}
            <a href="{{ route('google.login') }}" class="btn btn-danger w-100 mb-3">
                <i class="bi bi-google"></i> Login with Google
            </a>

            <div class="text-center mb-3 text-muted">— or login manually —</div>

            {{-- Manual login --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                {{-- Button --}}
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            {{-- <div class="text-center mt-3">
                <a href="{{ route('register') }}">Belum punya akun?</a>
            </div> --}}

        </div>
    </div>

</body>

</html>
