@extends('layouts.add')
@section('content')
<div class="container">
    <h1 class="page-title">Wishlist Collection</h1>
    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="wishlist1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Active</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="wishlist2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Archived</a>
        </li>
        <!-- Add more wishlist tabs as needed -->
    </ul>

    <!-- Wishlist Tab Content -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="wishlist1-tab">
            <!-- Wishlist 1 Content Goes Here -->
            <div class="container">
                <form action="">
                    <div class="row wishlist-list mt-5 g-5">
                        <div class="wishlist  col-12 col-sm-6 col-lg-3">
                            <div class="wishlist-image active">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src="{{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />
                                

                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>
                                <span class="wishlist-button wishlist-edit d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil"></i>
                                </span>
                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="wishlist  col-12 col-sm-6 col-lg-3">
                            <div class="wishlist-image">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src="{{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />
                                
                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>
                                <span class="wishlist-button wishlist-edit d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil"></i>
                                </span>
                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="wishlist  col-12 col-sm-6 col-lg-3">
                            <div class="wishlist-image">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src="{{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />

                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>
                                <span class="wishlist-button wishlist-edit d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#editModal">
                                    <i class="bi bi-pencil"></i>
                                </span>
                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>

                        <div class="wishlist-add  col-12 col-sm-6 col-lg-3">
                            <div class="wishlist-create fs-1 d-flex justify-content-center align-items-center">
                                <img src=" {{ Vite::asset('resources/assets/img/create-wishlist.png') }}" class="img-thumbnail" alt="create-wishlist" />
                                <span class="wishlist-add_button position-absolute align-self-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus"></i></span>
                            </div>
                        </div>
                    </div>
                </form>
                <form action="">
                    <div class="row">
                        <div class="wishlist-items">
                            <div class="wishlist-functions d-flex align-items-center mt-5">
                                <div class="form-check me-5">
                                    <input class="form-check-input" type="checkbox" value="" id="IdsAllItems" />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Select all
                                    </label>
                                </div>
                                <button type="button" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row wishlist-item mt-5">
                                        <div class="col-lg-3 d-flex">
                                            <div class="form-check me-5">
                                                <input class="form-check-input wishlistItem" type="checkbox" value="" id="id1" />
                                            </div>
                                            <div class="wishlist-item_image">
                                                <img src="{{ Vite::asset('resources/assets/img/baby-doll-fr-girls.jpg') }}" class="img-thumbnail" alt="wishlistItem" />
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="wishlist-item_desc p-3">
                                                <h4 class="wishlist-item__title">
                                                    Ball-jointed doll 5623
                                                </h4>
                                                <p class="wishlist-item_short-desc">
                                                    A ball-jointed doll is any doll that is articulated
                                                    with ball and socket joints. In contemporary usage
                                                    when referring to modern dolls.
                                                </p>
                                                <div class=" row wishlist-item_attrs">
                                                    <div class="col-lg-3 col-md-12">
                                                        <p class="wishlist-item_price">
                                                            <span>Price:</span>
                                                            $23.5
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12">
                                                        <p class="wishlist-item_quantity">
                                                            <span>Quantity:</span>
                                                            1
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12">
                                                        <p class="wishlist-item_shop">
                                                            <span>Shop:</span>
                                                            amazom.com
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-3 col-md-12">
                                                        <button type="button" class="btn btn-info">
                                                            Most desired <i class="bi bi-stars"></i>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="wishlist2-tab">
            <!-- Wishlist 2 Content Goes Here -->
            <div class="container">
                <h2>Archive wishlists</h2>
                <form action="">
                    <div class="row wishlist-list mt-5 g-5">
                        <div class="wishlist col">
                            <div class="wishlist-image active">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src=" {{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />
                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>

                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="wishlist col">
                            <div class="wishlist-image">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src=" {{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />

                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>

                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>
                        <div class="wishlist col">
                            <div class="wishlist-image">
                                <input class="d-none" type="checkbox" value="" id="flexCheckDefault">
                                <img src=" {{ Vite::asset('resources/assets/img/wishlist.jpg') }}" class="img-thumbnail" alt="wishlistImage" />

                            </div>
                            <div class="wishlist-title d-flex mt-2">
                                <h3 class="wishlist-name pe-5">Alpha</h3>
                                <span class="wishlist-button wishlist-delete d-flex justify-content-center align-items-center ms-2">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>
        <!-- Add more wishlist tab content divs as needed -->
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="exampleModalLabel">Create your new wishlist!</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Wishlist's title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edite modal -->

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModal">Edite</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="title" class="form-label">Wishlist's title</label>
                        <input type="text" class="form-control" id="title">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection