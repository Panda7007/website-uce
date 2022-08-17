@extends("layout.main")

@section("main")
<div class="wrapper">
    
    <div class="container mt-5 mb-5">
    <h1 class="justify-content-center d-flex align-items-center" style="height: 285px;"><strong>Mentor {{$mentor->bidang}}</strong></h1>
    <div class="row">
        <div class="col-lg-4">
            <img src="@if($mentor->gambar != null) /storage/{{$mentor->gambar}} @else https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=740&t=st=1658171988~exp=1658172588~hmac=afedad9dc5e926a3f02545e59fbb1a6a4eca0bb7788ff33fed2ecb4d5f73808f @endif" alt="">
        </div>
        <div class="col-lg-1">
            <div style="width: 1px; background-color : black; height:100%;"></div>
        </div>
        <div class="col-lg-7 text-justify">
            <div>
                <p><strong>Nama      : </strong></p>
                <p>{{$mentor->nama}}</p>
            </div>
            <div><p><strong>Bidang    : </strong>{{$mentor->bidang}}</p></div>
            <div class="row">
                <div class="col-3"><p><strong>Deskripsi : </strong></p></div>
                <div class="col">{!!$mentor->deskripsi_singkat!!}</div>
            </div>
        </div>
    </div>
</div>
@endsection