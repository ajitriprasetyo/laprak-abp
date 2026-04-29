@extends('template')

@section('title', 'Daftar Produk')

@section('content')
    <div class="container py-4">

        {{-- HEADER --}}
        <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(135deg, #4e73df, #224abe);">
            <div class="card-body d-flex justify-content-between align-items-center text-white">
                <div>
                    <h4 class="mb-0 fw-bold">📦 Daftar Produk</h4>
                    <small class="opacity-75">Kelola data produk dengan mudah</small>
                </div>
                <a href="{{ route('products.create') }}" class="btn btn-light btn-sm fw-semibold">
                    + Tambah Produk
                </a>
            </div>
        </div>

        {{-- ALERT --}}
        @if (session('success'))
            <div class="alert alert-success border-0 shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        {{-- TABLE --}}
        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">

                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">

                        <thead style="background-color: #f8f9fc;">
                            <tr class="text-secondary small text-uppercase">
                                <th class="px-4 py-3">Nama Produk</th>
                                <th class="py-3">Harga</th>
                                <th class="text-center py-3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td class="px-4 fw-semibold">
                                        {{ $product->name }}
                                    </td>

                                    <td class="text-success fw-bold">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('products.edit', $product->id) }}"
                                            class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                            ✏ Edit
                                        </a>

                                        <form method="POST" action="{{ route('products.destroy', $product->id) }}"
                                            class="d-inline" onsubmit="return confirm('Hapus data ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                                🗑 Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-5">
                                        <div class="d-flex flex-column align-items-center">
                                            <span style="font-size: 40px;">📭</span>
                                            <span class="mt-2">Belum ada data produk</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection