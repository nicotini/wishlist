@extends('layouts.add')
@section('content')
    <div class="container">
        <h1 class="page-title">Wishlist Collection</h1>
        <!-- Navigation Tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="wishlist1-tab" data-bs-toggle="tab" href="#tab1" role="tab"
                    aria-controls="tab1" aria-selected="true">Active</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="wishlist2-tab" data-bs-toggle="tab" href="#tab2" role="tab"
                    aria-controls="tab2" aria-selected="false">Archived</a>
            </li>
            <!-- Add more wishlist tabs as needed -->
        </ul>

        <!-- Wishlist Tab Content -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="wishlist1-tab">
                <!-- Wishlist 1 Content Goes Here -->
                <div class="container">
                    <form action="{{ route('index') }}" method="GET" id="wishlistForm">
                        <div class="row wishlist-list mt-5 g-5">
                            @foreach ($wishlists as $wishlist)
                                <div class="wishlist col-12 col-sm-6 col-lg-3">
                                    <div class="wishlist-image{{ $wishlist->id == $wishlist_id ? ' active' : '' }}">
                                        <input class="d-none" type="radio" name="wishlist_id" value="{{ $wishlist->id }}">
                                        <img src="{{ Vite::asset('resources/assets/img/wishlist.jpg') }}"
                                            class="img-thumbnail" alt="wishlistImage" />
                                    </div>
                                    <div class="wishlist-title d-flex mt-2">
                                        <h6 class="wishlist-name pe-5">{{ $wishlist->title }}</h6>
                                        <span
                                            class="wishlist-button wishlist-edit d-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#editModal-{{ $wishlist->id }}">
                                            <i class="bi bi-pencil"></i>
                                        </span>

                                        <span type="submit"
                                            class="btn btn-danger wishlist-delete d-flex justify-content-center align-items-center ms-2"
                                            data-bs-toggle="modal" data-bs-target="#deleteItem-{{ $wishlist->id }}">
                                            <i class="bi bi-trash"></i>
                                        </span>

                                    </div>
                                </div>
                            @endforeach
                            <div class="wishlist-add  col-12 col-sm-6 col-lg-3">
                                <div class="wishlist-create fs-1 d-flex justify-content-center align-items-center">
                                    <img src=" {{ Vite::asset('resources/assets/img/create-wishlist.png') }}"
                                        class="img-thumbnail" alt="create-wishlist" />
                                    <span class="wishlist-add_button position-absolute align-self-center"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="bi bi-plus"></i></span>
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
                                        @if ($products)
                                            @foreach ($products as $product)
                                                <div class="row wishlist-item mt-5">
                                                    <div class="col-lg-3 d-flex">
                                                        <div class="form-check me-5">
                                                            <input class="form-check-input wishlistItem" type="checkbox"
                                                                value="" id="id1" />
                                                        </div>
                                                        <div class="wishlist-item_image">
                                                            <img src="{{ Vite::asset('resources/assets/img/baby-doll-fr-girls.jpg') }}"
                                                                class="img-thumbnail" alt="wishlistItem" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <div class="wishlist-item_desc p-3">
                                                            <h4 class="wishlist-item__title">
                                                                {{ $product->title }}
                                                            </h4>
                                                            <p class="wishlist-item_short-desc">
                                                                {{ $product->short_desc }}
                                                            </p>
                                                            <div class=" row wishlist-item_attrs">
                                                                <div class="col-lg-3 col-md-12">
                                                                    <p class="wishlist-item_price">
                                                                        <span>Price:</span>
                                                                        $ {{ $product->price }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-3 col-md-12">
                                                                    <p class="wishlist-item_quantity">
                                                                        <span>Quantity:</span>
                                                                        {{ $product->quantity }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-3 col-md-12">
                                                                    <p class="wishlist-item_shop">
                                                                        <span>Shop:</span>
                                                                        {{ $product->shop }}
                                                                    </p>
                                                                </div>
                                                                <div class="col-lg-3 col-md-12">
                                                                    @if ($product->is_desired)
                                                                        <button type="button" class="btn btn-info">
                                                                            Most desired <i class="bi bi-stars"></i>
                                                                        </button>
                                                                    @endif
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="wishlist2-tab">
                <div class="container">
                    <h2>Archive wishlists</h2>
                </div>
            </div>
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
                    <form action="{{ route('store') }}" method="POST" id="create_wishlist">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Wishlist's title</label>
                            <input type="text" name="title" class="form-control" id="title">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" for="create_wishlist" class="btn btn-primary">Save
                        changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edite modal -->
    @foreach ($wishlists as $wishlistItem)
        <div class="modal fade" id="editModal-{{ $wishlistItem->id }}" tabindex="-1" aria-labelledby="editModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModal">Edite wishlist's title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('update', $wishlistItem->id) }}" method="POST">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="title" class="form-label">Wishlist's title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $wishlistItem->title }}">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for deleteing -->
        <div class="modal fade" id="deleteItem-{{ $wishlistItem->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete your Wishlist?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('delete', $wishlistItem->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Yes, I am sure</button>
                            </form>

                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Return</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
