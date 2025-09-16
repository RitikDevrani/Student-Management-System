<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">

    <h2 class="mb-4 text-center">🎓 Student Management System</h2>

    {{-- Authentication Links --}}
    <div class="mb-3 text-end">
        @if(Auth::check())
            <p>
                Welcome, <strong>{{ Auth::user()->name }}</strong> | 
                <a href="{{ route('logout') }}" class="btn btn-sm btn-danger">Logout</a>
            </p>
        @else
            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-sm btn-success">Register</a>
        @endif
    </div>

    {{-- Success / Error Messages --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Page Content --}}
    @yield('content')

</body>
</html>
