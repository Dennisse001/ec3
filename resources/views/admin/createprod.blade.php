@extends('admin.mindex')
@section('isii')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Product</a></li>
                                <li class="breadcrumb-item active">Create product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form method="POST" action="{{ route('addprod') }}" enctype="multipart/form-data" id="createproduct-form" autocomplete="off" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                <i class="bi bi-box-seam"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">Product Information</h5>
                                        <p class="text-muted mb-0">Fill all information below.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">


                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Product title</label>
                                    <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                    <input type="text" class="form-control d-none" id="product-id-input">
                                    <input type="text" class="form-control" name="judul" id="judul" value="" placeholder="Enter product title" required>
                                    <div class="invalid-feedback">Please enter a product title.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Product description</label>

                                    <div id="ckeditor-classic">
                                        <p>Enter your product description.</p>

                                    </div>
                                </div>

                                <div>
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <label class="form-label">Product category</label>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="{{ route('categoryadmin') }}" class="float-end text-decoration-underline">Add New</a>
                                        </div>
                                    </div>
                                    <div>

                                            <label for="kategori_id">Kategori</label>

                                        <select class="form-select" id="kategori_id" name="kategori_id">
                                            <option value="">Select product category</option>

                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach

                                        </select>
                                    </div>
                                    <div class="error-msg mt-1">Please select a product category.</div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                <i class="bi bi-images"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">Product Gallery</h5>
                                        <p class="text-muted mb-0">Add product gallery images.</p>
                                    </div>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="dropzone my-dropzone dz-clickable">
                                        <div class="dz-message">
                                            <div class="mb-3">
                                                <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                            </div>

                                            <h5>Drop files here or click to upload.</h5>
                                        </div>
                                    </div>
                                    <div class="error-msg mt-1">Please add a product images.</div>
                                </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-sm">
                                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                                <i class="bi bi-list-ul"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-1">General Information</h5>
                                        <p class="text-muted mb-0">Fill all information below.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="Brand">Brand</label>
                                            <input type="text" name="brand" class="form-control" id="brand" placeholder="Masukkan nama brand">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="manufacturer-brand-input">Manufacturer Brand</label>
                                            <input type="text" class="form-control" id="manufacturer-brand-input" placeholder="Enter manufacturer brand">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="stocks-input">Stock</label>
                                            <input type="text" class="form-control" id="stock" placeholder="stock" required>
                                            <div class="invalid-feedback">Please enter a product stocks.</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="harga">Harga</label>
                                            <div class="input-group has-validation mb-3">
                                                <span class="input-group-text" id="product-price-addon">$</span>
                                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" aria-label="Price" aria-describedby="product-price-addon" required>
                                                <div class="invalid-feedback">Please enter a product price.</div>
                                            </div>

                                        </div>
                                    </div>
 <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <label class="form-label">Sizes</label>
                                            <ul class="clothe-size list-unstyled hstack gap-2 mb-0 flex-wrap" id="size" name="size">
                                                <li>
                                                    <input type="checkbox" value="xs" id="sizeXs" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXs">XS</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="s" id="sizeS" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeS">S</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="m" id="sizeM" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeM">M</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="l" id="sizeL" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeL">L</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="xl" id="sizeXl" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXl">XL</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="2xl" id="size2xl" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size2xl">2XL</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="3xl" id="size3xl" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size3xl">3XL</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="40" id="size40" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size40">40</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="41" id="size41" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size41">41</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" value="42" id="size42" name="size">
                                                    <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size42">42</label>
                                                </li>
                                            </ul>
                                            <div class="error-msg mt-1">Please select a product sizes.</div>
                                        </div>
                                    </div>

                                    <!-- end col -->
                                </div>
                                <!-- end row -->


                            </div>
                        </div>
                        <!-- end card -->
                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Submit</button>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Publish</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Status</label>

                                    <select class="form-select" id="choices-publish-status-input" name="status" data-choices data-choices-search-false>
                                        <option value="Published" selected>Published</option>
                                        <option value="Scheduled">Scheduled</option>
                                        <option value="Draft">Draft</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="choices-publish-visibility-input" class="form-label">Visibility</label>
                                    <select class="form-select" id="public" name="public" data-choices data-choices-search-false>
                                        <option value="Public" selected>Public</option>
                                        <option value="Hidden">Hidden</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                        <!-- end card -->


                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Tags</h5>
                            </div>
                            <div class="card-body">
                                <div class="hstack gap-3 align-items-start">
                                    <div class="flex-grow-1">
                                        <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Masukkan tags" type="text" name="tags" id="tags">
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Product Short Description</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted mb-2">Add short description for product</p>
                                <textarea name="singkat" id="singkat" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </form>
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Toner.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
@endsection

