@extends("layout.dashboard")

@section("main")
    <form action="/media/{{$media->id}}" method="post" enctype="multipart/form-data">
        @method("put")
        @csrf
        <div class="form-group">
            <label for="namamedia">Nama</label>
            <input type="text" class="form-control" required name="nama" value="{{$media->nama}}" id="namamedia" placeholder="ex : Rahman Surahman">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Gambar <small class="form-text text-muted d-inline"><span class="text-danger">*</span>dimensi 1 x 1</small></label>
            <input class="form-control" type="text" id="formFile" value="{{$media->gambar}}" name="gambar">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
            @error('gambar')
            <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Edit Media</button>
    </form>
@endsection