<?php

namespace App\Livewire; // Mendeklarasikan namespace untuk kelas ini, yaitu App\Livewire

use Livewire\Component; // Mengimpor kelas Component dari Livewire

class Beranda extends Component // Mendefinisikan kelas Beranda yang merupakan turunan dari kelas Component
{
    public function render() // Mendefinisikan metode render
    {
        return view('livewire.beranda'); // Mengembalikan tampilan 'livewire.beranda'
    }
}