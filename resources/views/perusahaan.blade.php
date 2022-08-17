@extends("layout.main-perusahaan")

@section("main")
    <section class="u-clearfix u-image u-section-1" id="sec-3d29" data-image-width="2561" data-image-height="1441">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-xs u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-19-lg u-size-19-xl u-size-20-md u-size-20-sm u-size-20-xs u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-contain u-image-default u-image-1" src="{{$mentor->gambar}}" alt="" data-image-width="1920" data-image-height="1912">
                  <h4 class="u-custom-font u-font-lato u-text u-text-default u-text-1">{{$mentor->nama}}</h4>
                  <h6 class="u-text u-text-default u-text-2">{{$mentor->bidang}}</h6>
                </div>
              </div>
              <div class="u-container-style u-gradient u-layout-cell u-radius-23 u-shape-round u-size-40-md u-size-40-sm u-size-40-xs u-size-41-lg u-size-41-xl u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-text u-text-3">Informasi :</h4>
                  <div class="fr-view u-clearfix u-rich-text u-text u-text-4">
            
                    <p>{!!$mentor->deskripsi_singkat!!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 @endsection