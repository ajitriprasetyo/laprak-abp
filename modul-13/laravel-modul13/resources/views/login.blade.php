@extends('template')
@section('title', 'Login')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-4">
            <div class="p-4" style="border: 1px solid #334155; border-radius: 12px; background: #1e293b;">

                <div class="text-center mb-4">
                    <h4 class="text-white" style="font-weight: 600;">Welcome Back</h4>
                    <small class="text-secondary">Silakan login untuk melanjutkan</small>
                </div>

                @if (session('msg'))
                    <div class="alert alert-warning text-center">
                        {{ session('msg') }}
                    </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label small text-secondary">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="contoh@email.com" required
                            value="{{ old('email') }}" style="border-radius: 8px; background: #0f172a; border: 1px solid #334155; color: white;">
                    </div>

                    <div class="mb-3">
                        <label class="form-label small text-secondary">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="••••••••" required
                            style="border-radius: 8px; background: #0f172a; border: 1px solid #334155; color: white;">
                    </div>

                    <button type="submit" class="btn w-100" style="background: #6366f1; color: white; border-radius: 8px; font-weight: 600;">
                        Masuk
                    </button>
                </form>

                <div class="text-center mt-3">
                    <small class="text-secondary">© Sistem Login Sederhana</small>
                </div>

            </div>
        </div>
    </div>
@endsection