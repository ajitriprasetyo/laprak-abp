@extends('template')

@section('title', 'Form ' . $title . ' Produk')

@section('content')
    <div class="container py-4">

        <div class="row justify-content-center">
            <div class="col-md-6">

                {{-- HEADER --}}
                <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(135deg, #1cc88a, #17a673);">
                    <div class="card-body text-white">
                        <h4 class="mb-0 fw-bold">
                            {{ $title == 'Tambah' ? '➕ Tambah Produk' : '✏ Edit Produk' }}
                        </h4>
                        <small class="opacity-75">
                            Isi data produk dengan lengkap dan benar
                        </small>
                    </div>
                </div>

                {{-- CARD FORM --}}
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">

                        <form method="POST" action="{{ $route }}">
                            @csrf

                            @if ($method === 'PUT')
                                @method('PUT')
                            @endif

                            {{-- NAMA --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Nama Produk</label>
                                <input type="text" name="name" placeholder="Masukkan nama produk..."
                                    class="form-control rounded-3 @error('name') is-invalid @enderror"
                                    value="{{ old('name', $product->name) }}">

                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- HARGA --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Harga</label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" name="price" placeholder="0"
                                        class="form-control rounded-end-3 @error('price') is-invalid @enderror"
                                        value="{{ old('price', $product->price) }}">
                                </div>

                                @error('price')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- BUTTON --}}
                            <div class="d-flex justify-content-between align-items-center mt-4">

                                <a href="{{ route('products.index') }}" class="btn btn-light border rounded-pill px-4">
                                    ⬅ Kembali
                                </a>

                                <button type="submit" class="btn btn-success rounded-pill px-4 fw-semibold">
                                    {{ $title == 'Tambah' ? '💾 Simpan' : '🔄 Update' }}
                                </button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection