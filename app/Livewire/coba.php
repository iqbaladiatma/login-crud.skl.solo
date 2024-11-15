<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\cobah;

class coba extends Component
{
    public $pillihanMenu;
    public $nama;
    public $alamat;
    public $hobi;
    public $status;
    public $tglahir;
    public $jumlah;
    public $anak_edit;

    public function tambahAnak()
    {
        $this->pillihanMenu = 'tambahAnak';
    }
    public function simpanAnak()
    {
        // biar kalo simpan diedit ngga nambah baru.
        if ($this->anak_edit) {
            $simpanAnak = $this->anak_edit;
        } else {
            $simpanAnak = new cobah();
        }
        $simpanAnak->nama = $this->nama;
        $simpanAnak->alamat = $this->alamat;
        $simpanAnak->hobi = $this->hobi;
        $simpanAnak->status = $this->status;
        $simpanAnak->tglahir = $this->tglahir;
        $simpanAnak->jumlah = $this->jumlah;
        $simpanAnak->save();
        $this->reset();
    }

    public function hapusAnak($id)
    {
        cobah::destroy($id);
    }
    public function editAnak($id)
    {
        $this->anak_edit = cobah::find($id);
        $this->nama = $this->anak_edit->nama;
        $this->alamat = $this->anak_edit->alamat;
        $this->hobi = $this->anak_edit->hobi;
        $this->status = $this->anak_edit->status;
        $this->tglahir = $this->anak_edit->tglahir;
        $this->jumlah = $this->anak_edit->jumlah;
        $this->pillihanMenu = 'editAnak';
    }
    public function render()
    {
        return view('livewire.peryps')->with([
            'semuanya' => cobah::all(),
        ]);
    }
}
