<div>
    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20">
                <div class="row">
                    <h4 class="c-grey-900 mB-20 col-md-8">Your Skill</h4>
                    <a href="#" class="btn btn-primary" style="height: 100%">Tambah</a>
                </div>
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
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
