@extends("layout.main")

@section("main")



  <!DOCTYPE html>
<html style="font-size: 16px;"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=""><meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="np://app.desktop.nicepage.com/nicepage.js" defer=""></script>
<meta name="generator" content="Nicepage 4.15.8, nicepage.com"></head>
<body class="u-body u-xl-mode" data-style="login-template-1" data-posts="" data-global-section-properties="{&quot;code&quot;:&quot;LOGIN&quot;,&quot;colorings&quot;:{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]},&quot;isPreset&quot;:true}" data-source="fix" data-lang="en" data-page-sections-style="[{&quot;name&quot;:&quot;login-form-1&quot;,&quot;margin&quot;:&quot;both&quot;,&quot;repeat&quot;:false}]" data-page-coloring-types="{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]}" data-page-category="&quot;Login&quot;"><section class="u-clearfix u-image u-block-c965-1" custom-posts-hash="T" data-section-properties="{&quot;margin&quot;:&quot;none&quot;,&quot;stretch&quot;:true}" data-id="c965" data-posts-content="[{'images':[],'maps':[],'videos':[],'icons':[{}],'textWidth':584,'textHeight':573,'id':1,'headingProp':'h3','textProp':'text'}]" data-style="login-form-4" id="sec-caee" data-source="Sketch" data-image-width="2561" data-image-height="1441">
  <div class="u-clearfix u-sheet u-block-c965-2">
    <div class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-block-c965-3">
      <div class="u-container-layout u-block-c965-4">
        <span class="u-icon u-icon-circle u-text-palette-1-base u-block-c965-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 45.532 45.532" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-862c"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 45.532 45.532" x="0px" y="0px" id="svg-862c" style="enable-background:new 0 0 45.532 45.532;" data-color=""><g><path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765   S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53   c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012   c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592   c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"></path>
</g></svg></span><h3 class="u-text u-text-default u-block-c965-6">User Log In</h3>
        <div class="u-expanded-width u-form u-login-control u-block-c965-7">


 <form class="form" method="post" action="/login">
              @csrf

              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="email" name="email" class="form-control @error ("email") is-invalid @enderror" placeholder="Email">
                  @error ("email")
                      <div id="validationServerUsernameFeedback" class="invalid-feedback">
                          {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="password" name="password" placeholder="Password" class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Login</button>
              </div>
            </form>




        </div>
        <a href="" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-block-c965-18">Forgot password?</a>
      </div>
    </div>
  </div>
  <style data-mode="XL" data-visited="true">@media (min-width: 1200px) {
  .u-block-c965-1 {
    background-image: url("np://user.desktop.nicepage.com/Site_2063330433/images/background.png?rand=890e");
    background-position: 50% 50%;
  }
  .u-block-c965-2 {
    min-height: 693px;
  }
  .u-block-c965-3 {
    width: 445px;
    min-height: 543px;
    margin-top: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
  }
  .u-block-c965-4 {
    padding-top: 0;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
  }
  .u-block-c965-5 {
    height: 86px;
    width: 86px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-6 {
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-7 {
    margin-top: 30px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-17 {
    width: 100%;
    border-style: none;
    padding-top: 10px;
    padding-right: 31px;
    padding-bottom: 10px;
    padding-left: 29px;
  }
  .u-block-c965-18 {
    border-style: none none solid;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
}</style>
  <style data-mode="LG">@media (max-width: 1199px) and (min-width: 992px) {
  .u-block-c965-1 {
    background-image: url("np://user.desktop.nicepage.com/Site_2063330433/images/background.png?rand=890e");
    background-position: 50% 50%;
  }
  .u-block-c965-2 {
    min-height: 693px;
  }
  .u-block-c965-3 {
    width: 445px;
    margin-top: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
    min-height: 543px;
  }
  .u-block-c965-4 {
    padding-top: 0;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
  }
  .u-block-c965-5 {
    height: 86px;
    width: 86px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-6 {
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 0;
    margin-top: 20px;
  }
  .u-block-c965-7 {
    margin-top: 30px;
    margin-bottom: 0;
  }
  .u-block-c965-17 {
    width: 100%;
    padding-top: 10px;
    padding-right: 31px;
    padding-bottom: 10px;
    padding-left: 29px;
    border-style: none;
  }
  .u-block-c965-18 {
    border-style: none none solid;
    margin-left: auto;
    margin-right: auto;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    margin-top: 20px;
    margin-bottom: 0;
  }
}</style>
  <style data-mode="MD">@media (max-width: 991px) and (min-width: 768px) {
  .u-block-c965-1 {
    background-image: url("np://user.desktop.nicepage.com/Site_2063330433/images/background.png?rand=890e");
    background-position: 50% 50%;
  }
  .u-block-c965-2 {
    min-height: 693px;
  }
  .u-block-c965-3 {
    width: 445px;
    margin-top: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
    min-height: 543px;
  }
  .u-block-c965-4 {
    padding-top: 0;
    padding-left: 30px;
    padding-right: 30px;
    padding-bottom: 30px;
  }
  .u-block-c965-5 {
    height: 86px;
    width: 86px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-6 {
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 0;
    margin-top: 20px;
  }
  .u-block-c965-7 {
    margin-top: 30px;
    margin-bottom: 0;
  }
  .u-block-c965-17 {
    width: 100%;
    padding-top: 10px;
    padding-right: 31px;
    padding-bottom: 10px;
    padding-left: 29px;
    border-style: none;
  }
  .u-block-c965-18 {
    border-style: none none solid;
    margin-left: auto;
    margin-right: auto;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    margin-top: 20px;
    margin-bottom: 0;
  }
}</style>
  <style data-mode="SM">@media (max-width: 767px) and (min-width: 576px) {
  .u-block-c965-1 {
    background-image: url("np://user.desktop.nicepage.com/Site_2063330433/images/background.png?rand=890e");
    background-position: 50% 50%;
  }
  .u-block-c965-2 {
    min-height: 693px;
  }
  .u-block-c965-3 {
    width: 445px;
    margin-top: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
    min-height: 543px;
  }
  .u-block-c965-4 {
    padding-top: 0;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 30px;
  }
  .u-block-c965-5 {
    height: 86px;
    width: 86px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-6 {
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 0;
    margin-top: 20px;
  }
  .u-block-c965-7 {
    margin-top: 30px;
    margin-bottom: 0;
  }
  .u-block-c965-17 {
    width: 100%;
    padding-top: 10px;
    padding-right: 31px;
    padding-bottom: 10px;
    padding-left: 29px;
    border-style: none;
  }
  .u-block-c965-18 {
    border-style: none none solid;
    margin-left: auto;
    margin-right: auto;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    margin-top: 20px;
    margin-bottom: 0;
  }
}</style>
  <style data-mode="XS">@media (max-width: 575px) {
  .u-block-c965-1 {
    background-image: url("np://user.desktop.nicepage.com/Site_2063330433/images/background.png?rand=890e");
    background-position: 50% 50%;
  }
  .u-block-c965-2 {
    min-height: 693px;
  }
  .u-block-c965-3 {
    width: 340px;
    margin-top: 41px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
    min-height: 543px;
  }
  .u-block-c965-4 {
    padding-top: 0;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 30px;
  }
  .u-block-c965-5 {
    height: 86px;
    width: 86px;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-c965-6 {
    margin-right: auto;
    margin-left: auto;
    margin-bottom: 0;
    margin-top: 20px;
  }
  .u-block-c965-7 {
    margin-top: 30px;
    margin-bottom: 0;
  }
  .u-block-c965-17 {
    width: 100%;
    padding-top: 10px;
    padding-right: 31px;
    padding-bottom: 10px;
    padding-left: 29px;
    border-style: none;
  }
  .u-block-c965-18 {
    border-style: none none solid;
    margin-left: auto;
    margin-right: auto;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
    margin-top: 20px;
    margin-bottom: 0;
  }
}</style>
</section>
</body></html>
@endsection