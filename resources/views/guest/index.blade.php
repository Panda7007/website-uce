@extends("layout.dashboard")

@section("main")
<table class="table-responsive">
    <thead>
        <tr>
            <th class="text-center">id</th>
            <th class="text-center" style="min-width: 15rem">Nama</th>
            <th class="text-center" style="min-width: 15rem">Gambar</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guess as $item)
        <tr>
            <td class="text-center">{{$item->id}}</td>
            <td class="text-center">{{$item->nama}}</td>
            <td class="text-center"><img style="max-height: 40px" src="{{$item->gambar}}" alt=""></td>
            <td class="d-flex justify-content-around">
                <a rel="tooltip" href="/guess/{{$item->id}}/edit" class="btn btn-success btn-sm btn-round btn-icon text-white">
                    <i class="now-ui-icons ui-2_settings-90"></i>
                </a>
                <form method="post" action="/guess/{{$item->id}}" class="form-inline">
                    @method("delete")
                    @csrf
                    <button type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon">
                        <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td class="text-center" colspan="3">Tambah guess</td>
            <td class="text-center">
                <a href="/guess/create" rel="tooltip" class="btn btn-info rounded-pill text-white">
                    Tambah
                </a>
            </td>
        </tr>
    </tbody>
</table>
<div class="d-flex">
    {!! $guess->links() !!}
</div>
@endsection