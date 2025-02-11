<div>
    {{-- Success is as dangerous as failure. --}}
    {{-- Komentar ini adalah komentar Blade yang tidak akan ditampilkan di HTML --}}

    <div class="container">
        <div class="row justify-content-center">
            {{-- Menggunakan Bootstrap untuk membuat layout agar berada di tengah --}}

            <div class="col-md-10">
                <div class="card">
                    {{-- Membungkus konten dalam sebuah card Bootstrap --}}

                    <div class="card-header">{{ __('Dashboard') }}</div>
                    {{-- Bagian header card menampilkan teks "Dashboard" --}}

                    <div class="card-body">
                        <div class="container mt-4">
                            {{-- Membuat container tambahan dengan margin-top 4 --}}

                            {{--  --}}
                            <form class="mb-4" wire:submit="cari">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Masukkan Nomor Plat"
                                        wire:model="nomorPlat">
                                    {{-- Input untuk mengisi nomor plat dengan binding Livewire --}}
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                    {{-- Tombol untuk mencari data kendaraan --}}
                                </div>
                            </form>

                            {{--  --}}
                            <hr>
                            @if ($catatan)
                                {{ $catatan }}
                            @endif
                            @if ($parkirDitemukan)
                                <table class="table">
                                    <tr>
                                        <td>Nomor Plat</td>
                                        <td>:</td>
                                        <td>{{ $noplat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kendaraan</td>
                                        <td>:</td>
                                        <td>{{ $jeniskendaraanditemukan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tarif Perjam</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($tarifperjam, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Masuk</td>
                                        <td>:</td>
                                        <td>{{ $waktumasuk }}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Keluar</td>
                                        <td>:</td>
                                        <td>{{ $waktukeluar }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lama Parkir</td>
                                        <td>:</td>
                                        <td>{{ $lamajam }} Jam</td>
                                    </tr>
                                    <tr>
                                        <td>Total Biaya</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($totalbiaya, 0, ',', '.') }}</td>
                                    </tr>
                                </table>
                                <button class="btn btn-primary w-100" wire:click="bayar">Bayar</button>
                            @endif
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
                                        <th>Waktu keluar</th>
                                        <th>Durasi</th>
                                        <th>Total Bayar</th>
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
                                            <td>Rp. {{ number_format($rp->jeniskendaraan->tarif, 0, ',', '.') }}</td>
                                            <td>{{ $rp->waktu_masuk }}</td>
                                            {{-- Menampilkan tarif kendaraan dengan format angka menggunakan titik sebagai pemisah ribuan --}}
                                            <td>{{ $rp->waktu_keluar }}</td>
                                            <td>{{ $rp->durasi }}</td>
                                            <td>Rp. {{ number_format($rp->biaya, 0, ',', '.') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">Data tidak ditemukan</td>
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
