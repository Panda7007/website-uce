@extends("layout.dashboard")

@section("main")
    <form action="/guess" method="post">
        @csrf
        <div class="form-group">
            <label for="namaguess">Nama</label>
            <input type="text" class="form-control" required name="nama" id="namaguess" placeholder="ex : Rahman Surahman">
            <small class="form-text text-muted"><span class="text-danger">*</span>wajib</small>
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Gambar</label>
            <input class="form-control" type="text" id="formFile" name="gambar">
            <small class="form-text text-muted"><span class="text-info">#</span>bisa kosong</small>
            @error('gambar')
            <div class="error text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Tambah Guest</button>
    </form>
@endsection