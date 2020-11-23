<div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20">
                <div class="row">
                    <h4 class="c-grey-900 mB-20 col-md-8">Your Skill</h4>
                    <a href="{{ route('admin.expertise.create')}}" class="btn btn-primary" style="height: 100%">Tambah</a>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    @endforeach
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                @if (count($expertises)===0)
                    <div class="row">
                        <div class="col-md-5">
                            <img alt="#" src="{{ asset('adminator/assets/static/images/500.png') }}" />
                        </div>
                        <div class="col-md-7">
                            <h1 class="mB-30 fw-900 lh-1 c-red-500" style="font-size: 60px;">No Skills ?</h1>
                            <h3 class="mB-10 fsz-lg c-grey-900 tt-c">Maaf anda Noob</h3>
                            <p class="mB-30 fsz-def c-grey-700">Silahkan Isi Skill Anda</p>
                            <div>
                                <a href="{{ route('admin.expertise.create')}}" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                    </div>
                @else
                    <table class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipe</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Detail</th>
                                <th scope="col">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($expertises as $index => $expertise)
                                <tr>
                                    <th scope="row">{{$index}}</th>
                                    <td>{{ $expertise->typeExpertised() }}</td>
                                    <td>{{ $expertise['name'] }}</td>
                                    <td>{{ $expertise['detail'] }}</td>
                                    <td>
                                        <a href="{{ route('admin.expertise.detail', $expertise['id']) }}" class="btn btn-warning">Edit</a>
                                        <a href="#" wire:click="delete({{ $expertise['id'] }})" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                
            </div>
        </div>
    </div>
</div>
