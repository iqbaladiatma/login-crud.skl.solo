<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Form Pendataan Anak</div>

                    <div class="card-body">
                        <x-navbar></x-navbar>
                        <hr />
                        <button class="btn btn-primary" wire:click="tambahAnak">Tambah Anak</button>
                        <i wire:loading>Loading ...</i>
                        @if ($pillihanMenu == 'tambahAnak' || $pillihanMenu == 'editAnak')
                        <form wire:submit="simpanAnak" autocomplete="off">
                            <div class="form-group mt-3">
                                <label for="nama">Nama</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="nama" wire:model="nama">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="alamat" wire:model="alamat">
                            </div>
                            <div class="form-group">
                                <label for="hobi">Hobi</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="hobi" wire:model="hobi">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="status" wire:model="status">
                            </div>
                            <div class="form-group">
                                <label for="tglahir">Tanggal Lahir</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="tglahir" wire:model="tglahir">
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah Anak</label>
                                <!-- wire/name -->
                                <input type="text" class="form-control" id="jumlah" wire:model="jumlah">
                            </div>
                            <button class="btn btn-primary mt-4" type="submit">Simpan</button>
                        </form>
                        @endif
                        <br>

                        <hr />
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Hobi</th>
                                    <th>Status</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $semuanya as $anak )
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $anak->nama }}</td>
                                    <td>{{ $anak->alamat }}</td>
                                    <td>{{ $anak->hobi }}</td>
                                    <td>{{ $anak->status }}</td>
                                    <td>{{ $anak->tglahir }}</td>
                                    <td>{{ $anak->jumlah }}</td>
                                    <td>
                                        <button class="btn btn-warning" wire:click="editAnak({{ $anak->id }})">Edit</button>
                                        <button class="btn btn-danger" wire:click="hapusAnak({{ $anak->id }})" wire:confirm='Anda Yakin ???'>Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <x-footer></x-footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>