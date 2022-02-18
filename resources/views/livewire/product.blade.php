<section id="basic-datatable">
    <button type="button" class="btn btn-outline-success breadcrumbs-right" data-bs-toggle="modal" data-bs-target="#modals-slide-in">
     Add Product
    </button>
    <div class="divider"></div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <img
                                        src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/000000/external-product-advertising-wanicon-lineal-color-wanicon.png"
                                        class="me-75"
                                        height="20"
                                        width="20"
                                        alt="Product Icon"
                                    />
                                    <span class="fw-bold">{{$product->name}}</span>
                                </td>
                                <td>R{{$product->price}}</td>
                                <td><span class="badge rounded-pill badge-light-success me-1">In Stock</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div  wire:ignore.self class="modal modal-slide-in fade" id="modals-slide-in">
        <div class="modal-dialog sidebar-sm">
            <form class="add-new-record modal-content pt-0" wire:submit.prevent="submitForm" enctype="multipart/form-data">
                @csrf
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Name</label>
                        <input
                            type="text"
                            wire:model="productName"
                            class="form-control dt-full-name"
                            id="basic-icon-default-fullname"
                            placeholder="Macbook Pro Retina"
                            aria-label="Macbook Pro Retina"
                            name="name"
                            required
                        />
                    </div>
                    <div class="divider"></div>

                    <div class="mb-1">
                        <label class="form-label" for="exampleFormControlTextarea1">Product Description</label>
                        <textarea class="form-control"
                                  wire:model="productDescription"
                                  required
                                  id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Description"></textarea>
                    </div>
                    <div class="divider"></div>

                    <div class="col-lg-12 col-md-12 mb-1 mb-sm-0">
                        <label for="formFile" class="form-label">Choose Product Banner</label>
                        <input class="form-control"
                               wire:model="productBanner"
                               required
                               type="file"
                               id="formFile">
                    </div>

                    <div class="divider"></div>

                    <div class="col-lg-12 col-md-12 mb-1 mb-sm-0">
                        <label for="formFile" class="form-label">Price</label>
                        <input class="form-control"
                               wire:model="price"
                               required
                               name="price" type="number" step="0.01" id="formFile">
                    </div>
                    <div class="divider"></div>
                    @if($response['statusCode']=== 200)
                    <button type="submit" class="btn btn-success waves-effect waves-float waves-light me-1">{{$response['message']}}</button>
                    @elseif($response['statusCode'] === 500)
                    <button type="submit" class="btn btn-danger waves-effect waves-float waves-light me-1">{{$response['message']}}</button>
                    @else
                     <button type="submit" class="btn btn-primary me-1">Submit</button>
                    @endif
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>

</section>
