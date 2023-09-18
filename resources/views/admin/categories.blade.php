@extends('admin.mindex')
@section('isii')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Categories</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Categories</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xxl-3">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Create Categories</h6>
                        </div>
                        <div class="card-body">
                            <form  method="POST" action="{{ route('createcat') }}" enctype="multipart/form-data" >
                               @csrf
                                <div class="row">
                                    <div class="col-xxl-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Category Title<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter title" required>
                                            <div class="invalid-feedback">Please enter a category title.</div>
                                        </div>
                                    </div>


                                    <div class="col-xxl-12 col-lg-6">
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Description</label>
                                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi" placeholder="Description" required></textarea>
                                            <div class="invalid-feedback">Please enter a description.</div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-success">Add Category</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <div class="col-xxl-9">
                    <div class="row justify-content-between mb-4">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="search-box mb-3 mb-lg-0">
                                <input type="text" class="form-control" id="searchInputList" placeholder="Search Category...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div><!--end col-->
                        <div class="col-xxl-2 col-lg-6">
                            <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                <option value="">Status</option>
                                <option value="all" selected>All</option>
                                <option value="Today">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Last 7 Days">Last 7 Days</option>
                                <option value="Last 30 Days">Last 30 Days</option>
                                <option value="This Month">This Month</option>
                                <option value="Last Month">Last Month</option>
                            </select>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row" id="categories-list">
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Headphone</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Wireless</a></li>
                                        <li><a href="#!" class="text-muted">Gaming</a></li>
                                        <li><a href="#!" class="text-muted">Circumaural (over-ear)</a></li>
                                        <li><a href="#!" class="text-muted">Supra-aural (on-ear)</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/headphone.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Watch</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Digital Watches</a></li>
                                        <li><a href="#!" class="text-muted">Dive Watches</a></li>
                                        <li><a href="#!" class="text-muted">Pilot's Watches</a></li>
                                        <li><a href="#!" class="text-muted">Field Watches</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/smart-watch.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Furniture</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Beds</a></li>
                                        <li><a href="#!" class="text-muted">Cabinets</a></li>
                                        <li><a href="#!" class="text-muted">Chairs & Seating</a></li>
                                        <li><a href="#!" class="text-muted">Desks</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/sofa.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Clothing</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Casual Wear</a></li>
                                        <li><a href="#!" class="text-muted">Formal Wear</a></li>
                                        <li><a href="#!" class="text-muted">Business Attire</a></li>
                                        <li><a href="#!" class="text-muted">Sportswear</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/clothes.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Footwear</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Athletic Shoes</a></li>
                                        <li><a href="#!" class="text-muted">Leather Shoes</a></li>
                                        <li><a href="#!" class="text-muted">Figure Shoes</a></li>
                                        <li><a href="#!" class="text-muted">Crocs</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/baby-shoe.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Lighting</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Ambient Lighting</a></li>
                                        <li><a href="#!" class="text-muted">Task Lighting</a></li>
                                        <li><a href="#!" class="text-muted">Accent Lighting</a></li>
                                        <li><a href="#!" class="text-muted">Track Light</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/light-bulb.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Beauty & Personal Care</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Baby Care</a></li>
                                        <li><a href="#!" class="text-muted">Deodrants</a></li>
                                        <li><a href="#!" class="text-muted">Feminine Care</a></li>
                                        <li><a href="#!" class="text-muted">Fragrances</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/cosmetics.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Books</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Fantasy</a></li>
                                        <li><a href="#!" class="text-muted">Horror</a></li>
                                        <li><a href="#!" class="text-muted">Mystery</a></li>
                                        <li><a href="#!" class="text-muted">Romance</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/book.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6">
                            <div class="card categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">Other Accessories</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info ">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger ">Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">
                                        <li><a href="#!" class="text-muted">Bags</a></li>
                                        <li><a href="#!" class="text-muted">Eyewear</a></li>
                                        <li><a href="#!" class="text-muted">Belts</a></li>
                                        <li><a href="#!" class="text-muted">Hair accessories</a></li>
                                    </ul>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas" class="fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                    <img src="../assets/images/ecommerce/smart-watch.png" alt="" class="img-fluid category-img object-fit-cover">
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row" id="pagination-element">
                        <div class="col-lg-12">
                            <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-prev">←</a>
                                </div>
                                <span id="page-num" class="pagination"></span>
                                <div class="page-item">
                                    <a href="javascript:void(0);" class="page-link" id="page-next">→</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
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
@endsection
