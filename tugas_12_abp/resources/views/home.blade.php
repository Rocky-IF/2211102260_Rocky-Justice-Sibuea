@extends('layouts.app')

@section('content')
<div class="welcome-container">
    <div class="welcome-card">
        <h1 class="welcome-title">Selamat datang, {{ $user->name }}</h1>
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <p class="text-muted mb-4">Anda berhasil login ke dalam sistem</p>
        
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn-logout">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection