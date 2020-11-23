<div>
    <div class="row">
        <div class="col-md-4">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Foto</h6>
                <img src="" alt="" srcset="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Data Diri</h6>
                <div class="mT-30">
                    <form wire:submit.prevent="save">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Nama</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nama Lengkap" wire:model.defer="profile.name" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" wire:model.defer="profile.email" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="status">Job Title</label>
                                <input type="text" class="form-control" id="status" placeholder="Status" wire:model.defer="profile.status" required/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="motto">Motto Hidup</label>
                                <input type="text" class="form-control" id="motto" placeholder="Motto" wire:model.defer="profile.motto" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" class="form-control" id="address" placeholder="Alamat Lengkap" wire:model.defer="profile.address" required/>
                        </div>
                        <div class="form-group">
                            <label for="detail">Biodata</label>
                            <textarea class="form-control" id="detail" cols="30" rows="10" wire:model.defer="profile.detail" required></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="phone">Nomor HP</label>
                                <input type="text" class="form-control" id="phone" placeholder="Nomor HP" wire:model.defer="profile.phone" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="newpassword">Password Baru</label>
                                <input type="password" class="form-control" id="newpassword" wire:model.defer="newpass" placeholder="Password Baru"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="renewpassword">Ulangi Password Baru</label>
                                <input type="password" class="form-control" id="renewpassword" wire:model.defer="renewpass" placeholder="Ulangi Password Baru"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="password">Verifikasi Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password saat ini" wire:model.defer="password" required/>
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
