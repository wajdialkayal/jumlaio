
<!-- Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="previewModalLabel">Browser Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                        <div class="border">
                            <ul class="nav nav-tabs">
                                <li class="nav-item w-50">
                                    <a class="nav-link active bg-white">
                                        <img src="/favicon.ico" alt="favicon" id="favicon-preview"
                                            class="object-fit-cover" width="16" height="16"> <span class="ml-2"
                                            id="meta-title-preview">Meta title</span> <i
                                            class="fas fa-times float-right mt-1"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="mt-2">

                                <div class="input-group mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-transparent border-0 row mt-1">
                                            <div class=" col-4"><i class="fas fa-arrow-left"></i></div>
                                            <div class=" col-4"><i class="fas fa-arrow-right"></i></div>
                                            <div class=" col-4"><i class="fas fa-redo"></i></div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control form-control-sm mt-2"
                                        style="border-radius:25px;" name="" id="">
                                    <div class="input-group-append ">
                                        <span class="input-group-text bg-transparent border-0 mt-1"><i
                                                class="fas fa-ellipsis-v"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div id="web-page-preview">
                                <nav class="navbar navbar-expand-sm shadow-sm " id="topbar-preview">
                                    <div class="container">
                                        <a class="navbar-brand nav-link-preview" href="#" id="page-name-preview">Page
                                            Name</a>
                                        <button class="navbar-toggler d-lg-none align-items-center" type="button"
                                            data-toggle="collapse" data-target="#collapsibleNavId"
                                            aria-controls="collapsibleNavId" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                                <li class="nav-item ">
                                                    <a class="nav-link nav-link-preview" href="#">Home <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#">About</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#">Contact</a>
                                                </li>
                                            </ul>
                                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#" data-toggle="tooltip"
                                                        data-placement="bottom" title="Facebook"> <i
                                                            class="fab fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#" data-toggle="tooltip"
                                                        data-placement="bottom" title="instagram"> <i
                                                            class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#" data-toggle="tooltip"
                                                        data-placement="bottom" title="Twitter"> <i
                                                            class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link nav-link-preview" href="#" data-toggle="tooltip"
                                                        data-placement="bottom" title="YouTube"> <i
                                                            class="fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <div class="text-center justify-content-center align-items-center mbar"
                                    id="mbar-preview" style=" height: 250px;">
                                    <img src="{{ config('constants.ui_avatars_url_default') }}"
                                        class="mt-5 rounded-circle mbar-logo shadow-sm border object-fit-cover"
                                        alt="logo" width="145px" height="145px" id="logo-preview">
                                    <p class="mt-2" id="short-des-preview" style="white-space: normal;">Short
                                        Description</p>
                                </div>

                            </div>

                            <div class="container p-5" id="body-preview">

                                <div class="card" id="card-preview">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">Text</p>
                                        <button type="button" class="btn btn-preview">Button</button>
                                    </div>
                                </div>

                            </div>

                            <footer class="page-footer font-small pt-4" id="footer-preview">
                                <div class="container text-center text-md-left">
                                    <div class="row text-center text-md-left mt-3 pb-3">
                                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                                            <h6 class="text-uppercase mb-4 font-lithospro font-weight-bold footer-link-preview"
                                                id="footer-name-preview">Page Name</h6>
                                            <p id="footer-text-preview" class="footer-link-preview">Footer Text</p>

                                        </div>
                                        <hr class="w-100 clearfix d-md-none">
                                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                                            <h6 class="text-uppercase mb-4 font-weight-bold roboto-text"></h6>
                                            <p>
                                                <a class="footer-link-preview" href="#">{{ __('Home') }}</a>
                                            </p>
                                            <p>
                                                <a class="footer-link-preview" href="#">{{ __('Contact') }}</a>
                                            </p>
                                            <p>
                                                <a class="footer-link-preview" href="#">{{ __('About') }}</a>
                                            </p>
                                        </div>
                                        <hr class="w-100 clearfix d-md-none">
                                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                                            <h6 class="text-uppercase mb-4 font-weight-bold"></h6>

                                        </div>
                                        <hr class="w-100 clearfix d-md-none">
                                        <div class="col-md-4 col-lg-3 col-xl-3 text-center">


                                            <a >
                                                <img src="{{ asset('images/badges/app-store-badge.svg') }}"
                                                    alt="app-store" width="125" height="30">
                                            </a>


                                            <a >
                                                <img src="{{ asset('images/badges/google-play-badge.svg') }}"
                                                    alt="app-store" width="125" height="30" class="mt-2">
                                            </a>


                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-4 col-lg-4">
                                            <p class="text-center text-md-left ">
                                                <a class="footer-link-preview" href="#">العربية</a> |
                                                <a class="footer-link-preview" href="#">English</a>
                                            </p>
                                            <p class="text-center text-md-left footer-link-preview"> <span
                                                    id="footer-page-name-preview" class="footer-link-preview">Page
                                                    Name</span> © {{ date('Y') }} {{ __('Copyright') }}
                                            </p>
                                        </div>
                                        <div class="col-md-8 col-lg-8 ml-lg-0">
                                            <div class="text-center text-md-right">
                                                <ul class="list-unstyled list-inline">
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm social-btn footer-link-preview" href="#"
                                                            data-toggle="tooltip" data-placement="top" title="Facebook">
                                                            <i class="fab fa-facebook"></i> </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm social-btn footer-link-preview" href="#"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Instagram"> <i class="fab fa-instagram"></i> </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a class="btn btn-sm social-btn footer-link-preview" href="#"
                                                            data-toggle="tooltip" data-placement="top" title="Twitter">
                                                            <i class="fab fa-twitter"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>

                        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
