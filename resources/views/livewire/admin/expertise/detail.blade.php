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
                    <form wire:submit.prevent="save">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="type">Type</label>
                                <select id="type" class="form-control" wire:model.defer="expertise.type" required>
                                    <option value="1" {{$expertise->type==1 ? 'selected' : ''}}>Web</option>
                                    <option value="2" {{$expertise->type==2 ? 'selected' : ''}}>Mobile</option>
                                    <option value="3" {{$expertise->type==3 ? 'selected' : ''}}>Desktop</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama" wire:model.defer="expertise.name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="detail">Detail</label>
                                <textarea class="form-control" id="detail" cols="30" rows="10" wire:model.defer="expertise.detail" required></textarea>
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