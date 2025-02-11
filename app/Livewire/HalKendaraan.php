<?php

namespace App\Livewire;

use App\Models\JenisKendaraan;
use Livewire\Component;

class HalKendaraan extends Component
{
    public $jenisKendaraan, $tarifPerjam;

    // Fungsi untuk menyimpan data jenis kendaraan dan tarif per jam
    public function simpan()
    {
        // Validasi input
        $this->validate([
            'jenisKendaraan' => 'required',
            'tarifPerjam' => 'required|numeric',
        ]);

        // Menyimpan atau memperbarui data jenis kendaraan berdasarkan nama
        JenisKendaraan::updateOrCreate([
            'nama' => $this->jenisKendaraan,
        ], [
            'tarif' => $this->tarifPerjam,
        ]);
        // Mereset input setelah menyimpan data
        $this->reset();
    }

    // Fungsi untuk mengedit data jenis kendaraan berdasarkan ID
    public function edit($id)
    {
        // Mencari data jenis kendaraan berdasarkan ID
        $jenisKendaraan = JenisKendaraan::find($id);
        // Mengisi properti dengan data yang ditemukan
        $this->jenisKendaraan = $jenisKendaraan->nama;
        $this->tarifPerjam = $jenisKendaraan->tarif;
    }

    // Fungsi untuk menghapus data jenis kendaraan berdasarkan ID
    public function hapus($id)
    {
        // Mencari dan menghapus data jenis kendaraan berdasarkan ID
        JenisKendaraan::find($id)->delete();
    }

    // Fungsi untuk merender tampilan
    public function render()
    {
        // Mengembalikan tampilan dengan data semua jenis kendaraan
        return view('livewire.hal-kendaraan')->with([
            'parkingRates' => JenisKendaraan::all(),
        ]);
    }
}
