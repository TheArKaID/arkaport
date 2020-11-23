<div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Detail Expertise</h6>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                <div class="mT-30">
                    <form wire:submit.prevent="add">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="type">Tipe</label>
                                <select id="type" class="form-control" wire:model.defer="type" required>
                                    <option selected hidden>Pilih Tipe</option>
                                    <option value="1">Web</option>
                                    <option value="2">Mobile</option>
                                    <option value="3">Desktop</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama" wire:model.defer="name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="detail">Detail</label>
                                <textarea class="form-control" id="detail" cols="30" rows="10" wire:model.defer="detail" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">
                            Simpan <i class="c-grey-700 ti-reload" wire:loading></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>