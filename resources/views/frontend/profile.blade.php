@extends('frontend.layouts.header')
@section('title', 'PADC | Profile')
@section('description', 'Complete team profile to join Platinum Architectural Design Competition')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com')
@section('url','https://padc-platinumceramics.com')
@section('content')

@php 
$i = 0;
$no = 1;
$no2 = 1;
$no3 = 1;
$no4 = 1;
$no5 = 1;
@endphp
    <!-- ======= Hero Section ======= -->
    <section id="hero_account">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        @php
        if(isset(auth()->user()->team) && isset(auth()->user()->link)){
        @endphp
         <h1 class="mb-4 pb-0"><span>Thank You <br> For </span>  Register <span> </span>  </h1>
        @php
        }else{
        @endphp
        <h1 class="mb-4 pb-0"><span>Update </span> Team <br>To Get<span> Register Number</span> </h1>
          @php
        }
        @endphp
        </div>
    </section><!-- End Hero Section -->

<main id="main">
    <!-- ======= Schedule Section ======= -->
<section id="account">
  <div class="container" data-aos="fade-up">
    <!-- <div class="section-header">
      <h2>Event Schedule</h2>
      <p>Here is our event schedule</p>
    </div> -->

    <ul class="nav nav-tabs justify-content-center" role="tablist" data-aos="fade-up" data-aos-delay="100">
      
      <li class="nav-item">
        <a class="nav-link active" href="#day-1" role="tab" data-bs-toggle="tab">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#day-2" role="tab" data-bs-toggle="tab">Link</a>
      </li>
      
    </ul>

    <!-- <h3 class="sub-heading">Voluptatem nulla veniam soluta et corrupti consequatur neque eveniet officia. Eius
      necessitatibus voluptatem quis labore perspiciatis quia.</h3> -->

    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
     
      <!-- Schdule Day 1 -->
    <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
      <div class="row justify-content-center" >
      <div class="form">
        @php 
        if($user->team == true){
          @endphp
            <form action="{{ route('team.update') }}" method="POST" enctype="multipart/form-data" role="form"  class="php-email-form">
                @csrf
              <div class="row">
                <div class="section-header mb-4">
      
                  <div class="ticket-wrapper">
                    <div class="ticket">
                      <div class="ticket-sub-txt">Registration Number</div>
                      <div class="ticket-txt">{{ $user->id_daftar}}</div>
                      <p class="left"></p>
                      <div class="tear-line">
                        <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
                      </div>
                    </div>
                    <div class="ticket-rip">
                      <div class="tear-line">
                        <p></p><p></p><p></p><p></p><p></p><p></p><p></p>
                      </div>
                      <p class="right"></p>
                    </div>
                  </div>

                </div>
                  @php 
                  if(isset($getuniv->universitas)){
                  @endphp
                <div class="form-group mt-3">
                    <input type="text" class="form-control input" name="universitas" id="universitas"  value="{{ $getuniv->universitas }}" required placeholder="University">
                  </div>
                @php 
                  }
                @endphp
                @foreach($team as $team)
                <div class="col-md-6">
                  <div class="row">
                    <div class="form-group col-md-12 mt-3 ">
                      <input type="text" name="id_daftar" value="{{$team->id_daftar}}" style="display:none;">

                      <input type="text" name="{{'name_'.$i++}}" class="form-control input" id="name" value="{{ $team->name }}" required placeholder="Full Name">

                    </div>
                
                    <div class="form-group col-md-12 mt-3 ">
                        <input type="email" class="form-control input" name="{{'email_'.$i++}}" id="email" value="{{ $team->email }}" required placeholder="Email">  
                        
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <input type="tel" class="form-control input" name="{{'no_hp_'.$i++}}" id="no_hp" value="{{ $team->no_hp}}" required placeholder="No Telp">
                    </div>

                    <div class="form-group col-md-12 mt-3" >                          
                        {{-- <img id="ktm_old{{$no++}}" class="preview-form mb-3" src="{{ asset('images-ktm/'.$team->ktm) }}" > 
                        <img id="ktm{{$no2++}}" class="preview-form prev-img mb-3">   	
                        <input type="file" onchange="document.getElementById('ktm{{$no3++}}').src = window.URL.createObjectURL(this.files[0]);document.getElementById('ktm{{$no4++}}').style.display = 'block';document.getElementById('ktm_old{{$no5++}}').style.display = 'none';" class="form-control" name="{{'ktm_'.$i++}}" id="ktm" placeholder="Change Kartu tanda mahasiswa" >
                         --}}
    
                        <div class="image-upload">
                          <div class="preview">
                              <img id="img-preview{{$no++}}">
                              <img id="preview{{$no5++}}" src="{{ asset('images-ktm/'.$team->ktm) }}" class="img-prev">
                          </div>
                          <label class="label-upload1" for="ktm{{$no2++}}">Change Kartu Tanda Mahaiswa</label>
                          <input type="file" id="ktm{{$no3++}}" name="{{'ktm_'.$i++}}" accept="image/*" value="{{$team->ktm}}" onchange="showPreview{{$no4++}}(event);">
                        </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
                
                
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">your data is Updated</div>
                </div>
                 @php
                $current2 = strtotime(date("Y-m-d h:i:s"));
                $registration2 = strtotime("2022-10-13 07:00:00");
                $a2 = $registration2 - $current2;
                $regist2 = floor($a2/(60*60*24));
        
                if($regist2 > 0)
                {
                @endphp
                <div class="text-center"><button type="submit" >Update</button></div>
                @php
                }else{
                @endphp
                @php
                }
                @endphp
            </form>
          @php 
          }else{
          @endphp
            <form action="{{ route('team.store') }}" id="form-input" method="POST" enctype="multipart/form-data" role="form"  class="php-email-form">
                @csrf
                <div class="row">
                    <!--<div class="section-header mb-4">-->
      
                    <!--  <div class="ticket-wrapper">-->
                    <!--    <div class="ticket">-->
                    <!--      <div class="ticket-sub-txt">Registration Number</div>-->
                    <!--      <div class="ticket-txt">{{ $user->id_daftar}}</div>-->
                    <!--      <p class="left"></p>-->
                    <!--      <div class="tear-line">-->
                    <!--        <p></p><p></p><p></p><p></p><p></p><p></p><p></p>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--    <div class="ticket-rip">-->
                    <!--      <div class="tear-line">-->
                    <!--        <p></p><p></p><p></p><p></p><p></p><p></p><p></p>-->
                    <!--      </div>-->
                    <!--      <p class="right"></p>-->
                    <!--    </div>-->
                    <!--  </div>-->
    
                    <!--</div>-->
                  <div class="form-group mt-3">
                    <input type="text" class="form-control input" name="universitas" id="universitas" required placeholder="University">
                    </div>



                    <div class="col-md-6">
                      <div class="row">

                        <div class="form-group col-md-12 mt-3 ">
                            <input type="text" name="name" class="form-control input" id="name"  required placeholder="Full Name">
                        </div>
                    
                        <div class="form-group col-md-12 mt-3 ">
                            <input type="email" class="form-control input" name="email" id="email" required placeholder="Email">        
                        </div>

                        <div class="form-group col-md-12 mt-3">
                            <input type="tel" class="form-control input" name="no_hp" id="no_hp" required placeholder="No Telp">
                        </div>
                        <div class="form-group col-md-12 mt-3" >                            	
                   
                          <div class="image-upload">
                            <div class="preview">
                                <img id="img-preview1">
                            </div>
                            <label class="label-upload1" for="ktm">upload photo kartu tanda mahasiswa</label>
                            <input type="file" id="ktm" name="ktm" accept="image/*" onchange="showPreview1(event);" required>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="row">
                        <div class="form-group col-md-12 mt-3 ">
                            <input type="text" name="name2" class="form-control input" id="name2"  required placeholder="Full name">
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <input type="email" class="form-control input" name="email2" id="email2" required placeholder="Email">        
                        </div>
                        
                        <div class="form-group col-md-12 mt-3">
                            <input type="tel" class="form-control input" name="no_hp2" id="no_hp2" required placeholder="No Telp">
                        </div>
                        
                        <div class="form-group col-md-12 mt-3" >                            	
                          <div class="image-upload">
                            <div class="preview">
                                <img id="img-preview2">
                            </div>
                            <label class="label-upload1" for="ktm2">Upload photo kartu tanda mahasiswa</label>
                            <input type="file" id="ktm2" name="ktm2" accept="image/*" onchange="showPreview2(event);" required>
                          </div>

                        </div>
                      </div>
                    </div>
                </div>
                
                
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">your data is Saved</div>
                </div>
                <div class="text-center"><button type="submit" >Submit</button></div>
            </form>
            @php 
            }
            @endphp
        </div>
    

      </div>
      </div>
      <!-- End Schdule Day 1 -->

      <!-- Schdule Day 2 -->
      <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">
      <div class="row justify-content-center" >
      <div class="form">
                @php
                $current = strtotime(date('Y-m-d h:i:s'));
                $registration = strtotime('2023-11-10 00:00:00');
                $a = $registration - $current;
                $regist = floor($a/(60*60*24));
              
        
                if($regist > 0)
                {
                @endphp
            <form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data" role="form"  class="php-email-form">
            @csrf
            
            <div class="row">
            <div class="form-group mt-3">
              @php
              if(auth()->user()->team == TRUE){
              if(isset(auth()->user()->link)){
              @endphp
              <div class="position-relative">
                <input type="text" class="form-control input" name="link" id="link" value="{{auth()->user()->link}}" required placeholder="Link Google drive">
              </div>
              @php 
              }else{
              @endphp
              <div class="position-relative">
                <input type="text" class="form-control input" name="link" id="link" required placeholder="Link Google drive">
              </div>
              @php 
              }}else{
              @endphp 
              <input type="text" class="form-control" name="link-kosong" id="link" placeholder="Before processing, upload your data team first" disabled>
              @php 
              }
              @endphp
                <input type="text" class="form-control" name="id" style="display:none;" value="{{auth()->user()->id}}">
            </div>
                
               
            
            
            <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">your data is Saved</div>
            </div>
            <div class="text-center"><button type="submit" >Submit</button></div>
            </form>
            @php
            }else{
            @endphp
                    <div class="row justify-content-center">
                        <h3 style="text-align:center;">Time limit is over, You Cannot submit the link!</h3>
                    </div>
            @php
            }
            @endphp
        </div>
    </div>
     

      </div>
      <!-- End Schdule Day 2 -->

    

    </div>

  </div>

</section><!-- End Schedule Section -->
</main>
@push('scripts')
<script>


  $(document).ready(function () {
    $('.input, .input-select').each(function(){
        if($(this).val().trim() != "") {
            $(this).addClass('has-val');
        }
        else {
            $(this).removeClass('has-val');
        }
    });
  
    $('.input, .input-select').each(function(){
        $(this).on('change', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        }); 
    });   
    $('#university').change(function() {
      if($(this).val() == 'more'){
        $(this).hide();
        $(this).attr('name', 'none');
        $('#university2').attr('type', 'text');
        $('#university2').attr('name', 'universitas');
        $('#university2').addClass('has-val');
        $('#placeholderuniv').attr('data-placeholder', 'Universitas');
        $('#university2').focus();
      }
    });
  
  });
  
 function showPreview1(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("img-preview1");
      var prev = document.getElementById("preview1");
      preview.src = src;
      preview.style.display = "block";
      prev.style.display = "none";
    }
  }

  function showPreview2(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("img-preview2");
      var prev = document.getElementById("preview2");
      preview.src = src;
      preview.style.display = "block";
      prev.style.display = "none";
    }
  }


  
  
  </script>
@endpush
@endsection
