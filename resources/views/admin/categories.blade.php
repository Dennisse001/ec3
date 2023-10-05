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
                                <li class="breadcrumb-item"><a href="">Products</a></li>
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
                    </div><!--end row-->

                    <div class="row">
                    @foreach($data as $category)

                        <div class="col-xl-4 col-md-6">
                            <div class="card card-height-100 categrory-widgets overflow-hidden">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <h5 class="flex-grow-1 mb-0">{{ $category->name }}</h5>
                                        <ul class="flex-shrink-0 list-unstyled hstack gap-1 mb-0">
                                            <li><a href="#!" class="badge bg-info-subtle text-info  edit-list">Edit</a></li>
                                            <li><a href="#delteModal" data-bs-toggle="modal" class="badge bg-danger-subtle text-danger  remove-list" >Delete</a></li>
                                        </ul>
                                    </div>
                                    <ul class="list-unstyled vstack gap-2 mb-0">{{ $category->deskripsi }}</ul>
                                    <div class="d-none">{{ $category->deskripsi }}</div>
                                    <div class="mt-3">
                                        <a data-bs-toggle="offcanvas" href="#overviewOffcanvas"  data-view-id="'+ datas[i].id + '" class="overview-btn fw-medium link-effect">Read More <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>

{{--
                    <div class="row" id="pagination-element">
                        <div class="col-lg-12">
                            <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                                <div class="page-item">
                                    <a href="#" class="page-link" id="page-prev">←</a>
                                </div>
                                <span id="page-num" class="pagination"></span>
                                <div class="page-item">
                                    <a href="#" class="page-link" id="page-next">→</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
