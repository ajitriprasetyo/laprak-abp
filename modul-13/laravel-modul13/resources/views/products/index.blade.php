@extends('template')
@section('title', 'Daftar Produk')

@section('content')
<div class="col-md-12">
    <h3 class="mb-4 text-white">Manajemen Produk & Varian</h3>
    <div class="table-responsive">
        <table class="table table-dark table-hover table-bordered shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>Merk Motor</th>
                    <th>Harga (Rp)</th>
                    <th>Spesifikasi Varian</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $d)
                <tr>
                    <td class="align-middle fw-bold">{{ $d->name }}</td>
                    <td class="align-middle">{{ number_format($d->price, 0, ',', '.') }}</td>
                    
                    <td class="align-middle">
                        <ul class="mb-0 text-light" style="font-size: 0.9em; padding-left: 1.2rem;">
                            @foreach ($d->variants as $var)
                                <li class="mb-2">
                                    <strong class="text-white">{{ $var->name }}</strong><br>
                                    Mesin: {{ $var->mesin }} <br>
                                    Fitur: {{ $var->fitur }} <br>
                                    <span class="fst-italic text-secondary">{{ $var->description }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    
                    <td class="align-middle text-center">
                        <button class="btn btn-sm btn-outline-light">Edit</button>
                        <button class="btn btn-sm btn-outline-danger">Hapus</button>
                    </td>
                </tr>
                @endforeach
                @if($products->isEmpty())
                <tr>
                    <td colspan="4" class="text-center py-4 text-muted">Belum ada data produk tersedia.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
