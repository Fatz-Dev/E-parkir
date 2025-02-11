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
                                        <label class="form-label" for="nomorPlat">Nomor Plat</label>
                                        <input type="text" class="form-control" id="nomorPlat"
                                            wire:model="nomorPlat" placeholder="Masukkan Nomor Plat">
                                        {{-- Input untuk mengisi nomor plat dengan binding Livewire --}}
                            
                                        @error('nomorPlat')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        {{-- Menampilkan pesan error jika input nomor plat tidak valid --}}
                                    </div>
                            
                                    <div class="col-md-6">
                                        <label class="form-label" for="jenisKendaraan">Jenis Kendaraan</label>
                                        <select class="form-control" id="jenisKendaraan" wire:model="jenisKendaraan">
                                            <option value="">Pilih Jenis Kendaraan</option>
                                            @foreach ($jenisKendaraanOptions as $option)
                                                <option value="{{ $option->id }}">{{ $option->nama }} - Rp {{ number_format($option->tarif, 0,',','.') }}</option>
                                            @endforeach
                                        </select>
                                        {{-- Select untuk memilih jenis kendaraan dari database --}}
                            
                                        @error('jenisKendaraan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        {{-- Menampilkan pesan error jika input jenis kendaraan tidak valid --}}
                                    </div>
                                </div>
                            
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                {{-- Tombol untuk menyimpan data --}}
                            </form>                            
                            {{--  --}}

                            <hr>
                            {{-- Garis pemisah antara form dan tabel --}}

                            {{-- Tabel untuk menampilkan daftar tarif kendaraan --}}
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>No plat</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Tarif Perjam</th>
                                        <th>Waktu Masuk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($riwayatParkir as $rp)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            {{-- Menampilkan nomor urut berdasarkan indeks --}}

                                            <td>{{ $rp->nomor_plat }}</td>
                                            {{-- Menampilkan jenis kendaraan dari variabel Livewire --}}

                                            <td>{{ $rp->jeniskendaraan->nama }}</td>
                                            <td>Rp. {{ number_format($rp->jeniskendaraan->tarif, 0,',','.') }}</td>
                                            <td>{{ $rp->waktu_masuk }}</td>
                                            {{-- Menampilkan tarif kendaraan dengan format angka menggunakan titik sebagai pemisah ribuan --}}

                                            <td>
                                                <button class="btn btn-sm btn-warning"
                                                    wire:click="edit({{ $rp->id }})">Edit</button>
                                                {{-- Tombol untuk mengedit data berdasarkan ID kendaraan --}}

                                                <button class="btn btn-sm btn-danger"
                                                    wire:click="hapus({{ $rp->id }})">Hapus</button>
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
