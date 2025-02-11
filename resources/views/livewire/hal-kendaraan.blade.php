<div>
    {{-- Success is as dangerous as failure. --}} 
    {{-- Komentar ini adalah komentar Blade yang tidak akan ditampilkan di HTML --}}

    <div class="container">
        <div class="row justify-content-center"> 
            {{-- Menggunakan Bootstrap untuk membuat layout agar berada di tengah --}}

            <div class="col-md-8">
                <div class="card"> 
                    {{-- Membungkus konten dalam sebuah card Bootstrap --}}

                    <div class="card-header">{{ __('Dashboard') }}</div> 
                    {{-- Bagian header card menampilkan teks "Dashboard" --}}

                    <div class="card-body">
                        <div class="container mt-4"> 
                            {{-- Membuat container tambahan dengan margin-top 4 --}}

                            {{-- Form untuk input data jenis kendaraan dan tarif per jam --}}
                            <form class="mb-4" wire:submit="simpan">
                                {{-- Menggunakan Livewire agar bisa menyimpan data tanpa refresh halaman --}}
                                
                                <div class="row mb-3"> 
                                    {{-- Membuat baris baru dengan margin-bottom 3 --}}

                                    <div class="col-md-6">
                                        <label class="form-label" for="jenisKendaraan">Jenis Kendaraan</label>
                                        <input type="text" class="form-control" id="jenisKendaraan" 
                                            wire:model="jenisKendaraan"
                                            placeholder="Masukkan Jenis Kendaraan">
                                        {{-- Input untuk mengisi jenis kendaraan dengan binding Livewire --}}

                                        @error('jenisKendaraan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        {{-- Menampilkan pesan error jika input jenis kendaraan tidak valid --}}
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label" for="tarifPerjam">Tarif per Jam (Rp)</label>
                                        <input type="number" class="form-control" id="tarifPerjam" 
                                            wire:model="tarifPerjam" 
                                            placeholder="Masukkan Tarif per Jam">
                                        {{-- Input untuk mengisi tarif per jam dengan binding Livewire --}}

                                        @error('tarifPerjam')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        {{-- Menampilkan pesan error jika input tarif per jam tidak valid --}}
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button> 
                                {{-- Tombol untuk menyimpan data --}}
                            </form>

                            <hr> 
                            {{-- Garis pemisah antara form dan tabel --}}

                            {{-- Tabel untuk menampilkan daftar tarif kendaraan --}}
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Tarif Per Jam (Rp)</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($parkingRates as $index => $rate)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            {{-- Menampilkan nomor urut berdasarkan indeks --}}

                                            <td>{{ $rate['nama'] }}</td>
                                            {{-- Menampilkan jenis kendaraan dari variabel Livewire --}}

                                            <td>{{ number_format($rate['tarif'], 0, ',', '.') }}</td>
                                            {{-- Menampilkan tarif kendaraan dengan format angka menggunakan titik sebagai pemisah ribuan --}}

                                            <td>
                                                <button class="btn btn-sm btn-warning" 
                                                    wire:click="edit({{ $rate['id'] }})">Edit</button>
                                                {{-- Tombol untuk mengedit data berdasarkan ID kendaraan --}}

                                                <button class="btn btn-sm btn-danger" 
                                                    wire:click="hapus({{ $rate['id'] }})">Hapus</button>
                                                {{-- Tombol untuk menghapus data berdasarkan ID kendaraan --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Data tidak ditemukan</td>
                                            {{-- Jika tidak ada data, tampilkan pesan "Data tidak ditemukan" --}}
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
