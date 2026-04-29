<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen Menu Esteh') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-bold">Daftar Menu</h3>
                        <a href="{{ route('product.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition">
                            + Tambah Menu
                        </a>
                    </div>

                    @if(session('success'))
                        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 border-b">
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Kode Menu</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Nama Menu</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Kategori</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Harga</th>
                                    <th class="py-3 px-4 text-left font-semibold text-gray-700">Stok</th>
                                    <th class="py-3 px-4 text-center font-semibold text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($menus as $menu)
                                    <tr class="border-b hover:bg-gray-50 transition">
                                        <td class="py-3 px-4 font-mono text-sm">{{ $menu->menu_code }}</td>
                                        <td class="py-3 px-4 font-bold">{{ $menu->name }}</td>
                                        <td class="py-3 px-4">
                                            <span class="px-2 py-1 bg-green-100 rounded-full text-xs font-semibold text-green-800">{{ $menu->category }}</span>
                                        </td>
                                        <td class="py-3 px-4 text-green-600 font-bold">Rp {{ number_format($menu->price, 0, ',', '.') }}</td>
                                        <td class="py-3 px-4">
                                            <span class="{{ $menu->stock <= 10 ? 'text-red-500 font-bold' : 'text-gray-700' }}">
                                                {{ $menu->stock }} cup
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-center">
                                            <div class="flex justify-center space-x-2">
                                                <a href="{{ route('product.edit', $menu->id) }}" class="text-blue-600 hover:text-blue-900 font-semibold text-sm">Edit</a>
                                                <form action="{{ route('product.destroy', $menu) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-semibold text-sm">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="py-10 text-center text-gray-500 italic">Belum ada data menu.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
