@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center align-item-center">
        <h6 class="text-secondary ml-5">Nintendo Switch Lite</h6>
        <h6 class="text-secondary ml-5">Tas Wanita</h6>
        <h6 class="text-secondary ml-5">BlackShark</h6>
        <h6 class="text-secondary ml-5">Tv LED</h6>
        <h6 class="text-secondary ml-5">Rak Gelas</h6>
        <h6 class="text-secondary ml-5">Oppo F1</h6>
    </div>
    <img class="mt-2" src="{{asset('image/unnamed.png')}}" width="100%" height="320px" alt="">
    <div class="py-4"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="container">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex">                           
                            <div class="mr-auto">
                                <h4 class="text-secondary ml-3">Paling Banyak Dicari</h4>
                                <label type="button" class="btn btn-outline-secondary mt-4 ml-2 py-2"><img width="100px" class="mt-3 py-3 pt-2 " src="{{asset('image/3127195_cfe03d9c-d79f-4327-8247-458429e1b116.jpg.webp')}}" alt=""></label>
                                <label type="button" class="btn btn-outline-secondary mt-4 ml-2 py-2"><img width="100px" class="mt-3 py-3 pt-2 " src="{{asset('image/3127195_d7c67b76-9ff4-46f9-93a3-ec4be4918439.jpg')}}" alt=""></label>
                                <label type="button" class="btn btn-outline-secondary mt-4 ml-2 py-2"><img width="100px" class="mt-3 py-3 pt-2 " src="{{asset('image/3127195_e5b3e074-c897-4cf0-9ced-5572d0538e7c.jpg')}}" alt=""></label>
                                <label type="button" class="btn btn-outline-secondary mt-4 ml-2 py-2"><img width="100px" class="mt-3 py-3 pt-2 " src="{{asset('image/3127195_2883bb63-8f91-4c9c-a423-d68b22e51b78.jpg.webp')}}" alt=""></label>
                            </div>                
                            <div class="mr-auto">
                                <h4 class="text-secondary ">Top-Up & Tagihan</h4>
                                <div class="py-2 mb-2"></div>
                                <div class="card" style="margin-right: -120px;">                                      
                                    <div class="card-body">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-pulsa" role="tab" aria-controls="nav-home" aria-selected="true">Pulsa</a>
                                                <a class="nav-item nav-link"        id="nav-profile-tab" data-toggle="tab" href="#nav-paket_data" role="tab" aria-controls="nav-profile" aria-selected="false">Paket data</a>
                                                <a class="nav-item nav-link"        id="nav-contact-tab" data-toggle="tab" href="#nav-listrik_pln" role="tab" aria-controls="nav-contact" aria-selected="false">Listrik PLN</a>
                                                <a class="nav-item nav-link"        id="nav-contact-tab" data-toggle="tab" href="#nav-fight" role="tab" aria-controls="nav-contact" aria-selected="false">Fight</a>
                                                <a class="nav-item nav-link"        id="nav-contact-tab" data-toggle="tab" href="#nav-fight" role="tab" aria-controls="nav-contact" aria-selected="false"><svg class="bi bi-list-ul" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm0-4a.5.5 0 01.5-.5h9a.5.5 0 010 1h-9a.5.5 0 01-.5-.5zm-3 1a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2zm0 4a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                                                  </svg></a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group ">
                                                        <label for="name">Nomor Telepon</label>
                                                        <input type="text" class="form-control" placeholder="+62....">
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group ">
                                                        <label for="name">Pilih Nominal</label>
                                                        <input type="text" class="form-control" placeholder="pilih nominal">
                                                    </div>
                                                </div>
                                                <div class="py-3 mt-3">
                                                    <button type="submit" class="btn btn-outline-info btn-sm">beli</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                                <div>
                                    <h5 class="text-success" style="margin-left: -10%;"> Lihat Semua</h5>
                                </div>
                        </div>
                        <div class="d-flex">
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">belanja</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Semua Promo</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">lawan COVID-19</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Kesehatan</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Makanan & Minuman</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Rumah Makan</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Tas LEVIS</button>
                            </div>
                            <div class="ml-2 py-4 mr-3 px-2">
                                <button type="submit" class="btn btn-outline-secondary btn-sm">Pramuka Garuda</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mr-auto">
                        <h4 class="text-secondary py-3">Paling Banyak Dicari</h4>
                    </div>
                    <svg class="bi bi-arrow-repeat mt-2 pt-2 mr-2" width="30px" height="33px" viewBox="0 0 16 16" fill="#38c172" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 00-.708 0l-2 2a.5.5 0 10.708.708L2.5 8.207l1.646 1.647a.5.5 0 00.708-.708l-2-2zm13-1a.5.5 0 00-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 00-.708.708l2 2a.5.5 0 00.708 0l2-2a.5.5 0 000-.708z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 00-4.192 2.273.5.5 0 01-.837-.546A6 6 0 0114 8a.5.5 0 01-1.001 0 5 5 0 00-5-5zM2.5 7.5A.5.5 0 013 8a5 5 0 009.192 2.727.5.5 0 11.837.546A6 6 0 012 8a.5.5 0 01.501-.5z" clip-rule="evenodd"/>
                    </svg>
                        <h4 class="text-success py-3">Muat Lainnya</h4>
                </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="70px" src="{{asset('image/51831_01.jpg')}}" alt="">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <h6 class="py-4 ml-2">Vitamin C 1000 MG<div> <small class="text-muted">100rb produk</small></div></h6>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="70px" src="{{asset('image/images.jpg')}}" alt="">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <h6 class="py-4 ml-2">Armor Case P30 <div> <small class="text-muted">100rb produk</small></div></h6>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="70px" src="{{asset('image/0.jpg')}}" alt="">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <h6 class="py-4 ml-2">Rak Dapur<div> <small class="text-muted">100rb produk</small></div></h6>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="70px" src="{{asset('image/4239448e-2d6f-4281-80e1-138f15c77ffb.jpg')}}" alt="">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <h6 class="py-4 ml-2">Case Iphone 11<div> <small class="text-muted">100rb produk</small></div></h6>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h4 class="text-secondary py-4">Kejar Diskon</h4>
                        </div>
                            <h4 class="text-success py-4">Lihat Semua</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/8901c02b57976a0bd6b77a7fe0519ed4.png')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Xiaomi Redmi 7A (TG)</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000</h6>
                                        <div class="progress ml-2" style="height: 5px">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                        </div>
                                        <small class="text-muted ml-2">terjual 114</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/5cb062e4918efe17657a64a7.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">TG Huawei P30</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000</h6>
                                        <div class="progress ml-2" style="height: 5px">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                        </div>
                                        <small class="text-muted ml-2">terjual 114</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/7a1b6144c11dbfad63cb4eba1bd7a298.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD Team 1TB 2.5</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000</h6>
                                        <div class="progress ml-2" style="height: 5px">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                        </div>
                                        <small class="text-muted ml-2">terjual 114</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/24589641_32ece44b-b391-45b6-b399-322fcb171948_700_700.webp')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SanDisk 64GB MicroSD</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000</h6>
                                        <div class="progress ml-2" style="height: 5px">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="90"></div>
                                        </div>
                                        <small class="text-muted ml-2">terjual 114</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h4 class="text-secondary py-4">Official Store</h4>
                        </div>
                            <h4 class="text-success py-4">Lihat Semua</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="92%" height="100%" src="{{asset('image/overall-miui-img.png')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Redmi Note 5</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/ready_gan_Termometer_EI01_Multifungsi_Infrared_Digital_LCD_8.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Termometer EI01 Infrared</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">Jakarta Selatan</small></div><div><label type="button" class="btn btn-light btn-sm"><small>Grosir</small></div></label></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted py-2">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                        <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="92%" height="100%" src="{{asset('image/overall-miui-img.png')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Redmi Note 5</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/ready_gan_Termometer_EI01_Multifungsi_Infrared_Digital_LCD_8.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Termometer EI01 Infrared</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">Jakarta Selatan</small></div><div><label type="button" class="btn btn-light btn-sm"><small>Grosir</small></div></label></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted py-2">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                        <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="92%" height="100%" src="{{asset('image/overall-miui-img.png')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Redmi Note 5</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                            <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/ready_gan_Termometer_EI01_Multifungsi_Infrared_Digital_LCD_8.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">Termometer EI01 Infrared</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted">Jakarta Selatan</small></div><div><label type="button" class="btn btn-light btn-sm"><small>Grosir</small></div></label></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 py-3">
                            <div class="card border-0 shadow-sm ">
                                <div class="card-body ">
                                    <div class="d-flex">
                                        <img width="100%" height="100%" src="{{asset('image/e2d1722be38029d1a17f191a77a10044.jpg')}}" alt="">
                                    </div>
                                    <div class="mr-auto">
                                        <h5 class="text-secondary ml-2 py-2">SSD 1TB Eksternal</h5>
                                        <span class="text-danger ml-2">55%</span>
                                        <strike class="ml-2">Rp. 50.000</strike>
                                        <h6 class="text-secondary ml-2">Rp. 70.000<div><small class="text-muted py-2">terjual 114</small></div></h6>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <span class="fa fa-star checked ml-2" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star checked" style="color: yellow"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                            <small class="ml-2">(54)</small>
                                        <div class="py-1 mb-1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-2">
                        <button type="submit" class="btn btn-outline-success"><h5>Muat Lebih Banyak</h5></button>
                    </div>
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h4 class="text-secondary py-4">Kategori</h4>
                        </div>
                            <h4 class="text-success py-4">Lihat Semua</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0">
                                <div class="card-body border-top border-bottom">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <form action="" method="post">
                                                @csrf
                                                <div class="d-flex justify-content-center">                           
                                                    <div class="mr-auto">
                                                        <h5 class="text-secondary">Fashion Wanita</h5>
                                                        <h5 class="text-secondary">Kecantikan</h5>
                                                        <h5 class="text-secondary">Gaming</h5>
                                                        <h5 class="text-secondary">Laptop & Aksesories</h5>
                                                        <h5 class="text-secondary">Makanan & Minuman</h5>
                                                        <h5 class="text-secondary">Olahraga</h5>
                                                        <h5 class="text-secondary">Software</h5>
                                                    </div>
                                                    <div class="md-auto mr-5">
                                                        <h5 class="text-secondary">Fashion Pria</h5>
                                                        <h5 class="text-secondary">Kesehatan</h5>
                                                        <h5 class="text-secondary">Komputer & Aksesories</h5>
                                                        <h5 class="text-secondary">Ibu & Bayi</h5>
                                                        <h5 class="text-secondary">Souvenir & Kado</h5>
                                                        <h5 class="text-secondary">Film & Musik</h5>
                                                        <h5 class="text-secondary">Hotlist</h5>                          
                                                    </div>
                                                    <div class="md-auto ml-5">
                                                        <h5 class="text-secondary">Fashion Muslim</h5>
                                                        <h5 class="text-secondary">Perawatan Tubuh</h5>
                                                        <h5 class="text-secondary">Elektronik</h5>
                                                        <h5 class="text-secondary">Rumah Tangga</h5>
                                                        <h5 class="text-secondary">Buku</h5>
                                                        <h5 class="text-secondary">Office & Stationery</h5> 
                                                    </div>
                                                                      
                                                    <div class="ml-auto">
                                                        <h5 class="text-secondary">Fashion Anak</h5>
                                                        <h5 class="text-secondary">Handphone & Tablet</h5>
                                                        <h5 class="text-secondary">Kamera</h5>
                                                        <h5 class="text-secondary">Dapur</h5>
                                                        <h5 class="text-secondary">Otomotif</h5>
                                                        <h5 class="text-secondary">Mainan & Hobi</h5>
                                                    </div>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h4 class="text-secondary py-4">Produk Digital</h4>
                        </div>
                            <h4 class="text-success py-4">Lihat Semua</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border">
                                <div class="card-body ">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <form action="" method="post">
                                                @csrf
                                                <div class="d-flex justify-content-center">                           
                                                    <div class="mr-auto">
                                                        <h5 class="text-secondary">Emas <button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">BPJS</h5>
                                                        <h5 class="text-secondary">Pulsa</h5>
                                                        <h5 class="text-secondary">Pascabayar</h5>
                                                        <h5 class="text-secondary">Paket Data</h5>
                                                        <h5 class="text-secondary">TV Kabel</h5>
                                                        <h5 class="text-secondary">Tagihan Kartu Kredit<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Hiburan<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                    </div>
                                                    <div class="md-auto mr-5 pr-5">
                                                        <h5 class="text-secondary">M-Tix XXI<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Angsuran Kredit</h5>
                                                        <h5 class="text-secondary">Reksa Dana<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Roaming</h5>
                                                        <h5 class="text-secondary">Listrik PLN</h5>
                                                        <h5 class="text-secondary">Asuransi</h5>
                                                        <h5 class="text-secondary">Voucher Game</h5>                          
                                                        <h5 class="text-secondary">Kartu Kredit</h5>                          
                                                    </div>
                                                    <div class="md-auto ml-5">
                                                        <h5 class="text-secondary">Tiket Event<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Donasi</h5>
                                                        <h5 class="text-secondary">Tiket Kereta Api</h5>
                                                        <h5 class="text-secondary">Pinjaman Modal</h5>
                                                        <h5 class="text-secondary">Air PDAM</h5>
                                                        <h5 class="text-secondary">Pasang TV Kabel</h5> 
                                                        <h5 class="text-secondary">Streaming</h5> 
                                                        <h5 class="text-secondary">Pajak</h5> 
                                                    </div>
                                                                      
                                                    <div class="ml-auto">
                                                        <h5 class="text-secondary">Pinjaman Online</h5>
                                                        <h5 class="text-secondary">Vouchers<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Telkom</h5>
                                                        <h5 class="text-secondary">Zakat</h5>
                                                        <h5 class="text-secondary">Gas PGN</h5>
                                                        <h5 class="text-secondary">Retribusi<button type="submit" class="btn btn-danger btn-sm ml-2">Baru</button></h5>
                                                        <h5 class="text-secondary">Gift Card</h5>
                                                        <h5 class="text-secondary">Ovo</h5>
                                                    </div>
                                                </div>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-3"></div>
                    <div class="d-flex">
                        <h4 class="text-danger">Bukalapak
                            <div>
                                <h6 class="text-secondary pt-2">Tentang Bukalapak</h6>
                                <h6 class="text-secondary">Karir</h6>
                                <h6 class="text-secondary">Blog</h6>
                                <h6 class="text-secondary">Official Store</h6>
                                <h6 class="text-secondary">Tagihan & Top-Up</h6>
                                <h6 class="text-secondary">Bebas Ongkir</h6>
                                <h6 class="text-secondary">Paket Umroh</h6>
                            </div>
                        </h4>
                        <h4 class="font-weight-bold" style="margin-left: 130px;">Beli
                            <div>
                                <h6 class="text-secondary pt-2">Tiket Pesawat</h6>
                                <h6 class="text-secondary">Tiket Kereta</h6>
                                <h6 class="text-secondary">Tiket Event</h6>
                                <h6 class="text-secondary">Hotlist</h6>
                                <h6 class="text-secondary">Kategori</h6>
                            </div>
                        </h4>
                        <h4 class="font-weight-bold" style="margin-left: 130px;">Bantuan dan Panduan
                            <div>
                                <h6 class="text-secondary pt-2">Bukalapak Care</h6>
                                <h6 class="text-secondary">Syarat dan Ketentuan</h6>
                                <h6 class="text-secondary">Kebijikan Privasi</h6>
                            </div>
                        </h4>
                    </div>
                    
            </div>
        </div>
    </div>
@endsection