@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow mb-4">

                <div class="card-profile-image mt-4">
                    <img src="{{ asset('img/Aisyah.jpg') }}" class="rounded-circle"
                    width="200"
                    height="200">
                    {{-- alt="user-image"> --}}
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-12 mb-1">
                            <div class="text-center">
                                <h5 class="font-weight-bold">Aisyah Fikri Nabilah</h5>
                            </div>
                        </div>
                    </div>


                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card crop-img">
                                <img src="img/sem2.jpeg" class="card-img-top"
                                width="200"
                                height="700">
                                <div class="card-body">
                                  <h5 class="card-title">Prodi Teknik Informatika</h5>
                                  <p class="card-text"> Belajar hal baru yang menurut saya itu susah untuk saya pahami, tetapi saya mencoba lebih expert pada bidnag design atau analisis data </p>
                                </div>
                              </div>
                        </div>
                    </div>

                    <hr>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card crop-img">
                                <img src="img/3.jpg" class="card-img-top"
                                width="200"
                                height="400">
                                <div class="card-body">
                                  <h5 class="card-title">SMAN ARJASA</h5>
                                  <p class="card-text">Sekolah menengah atas yang terletak di kecamatan Arjasa Kabupaten Jember. Diman sekolahtersebut adalah
                                    tempat saya mengenyam pendidikan</p>
                                </div>
                              </div>
                        </div>
                    </div>

                    <hr>





                </div>
            </div>

        </div>

    </div>

@endsection
