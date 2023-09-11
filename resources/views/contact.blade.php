@extends('index1')
@section('isi')
<section class="ecommerce-about bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="text-center">
                    <h1 class="text-white">Contact Us</h1>
                    <p class="fs-16 mb-0 text-white-75">Let's start something great together. Get in touch with one of the team today!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border border-opacity-25">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-primary-subtle text-primary rounded fs-17">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="fs-17 lh-base mb-2">Our Main Office</h5>
                                <p class="text-muted fs-14 mb-0">Brusneva Ul., bld. 8, appt. 34, Stavropol, Russia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-opacity-25">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-17">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="fs-17 lh-base mb-2">Phone Number</h5>
                                <p class="text-muted fs-14 mb-0">+(234) 12345 67890<br> 888-0123-4567 (Toll free)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-opacity-25">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-success-subtle text-success rounded fs-17">
                                    <i class="bi bi-newspaper"></i>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="fs-17 lh-base mb-2">Fax</h5>
                                <p class="text-muted fs-14 mb-0">1-234-567-8900</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border border-opacity-25">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="avatar-sm flex-shrink-0">
                                <div class="avatar-title bg-danger-subtle text-danger rounded fs-17">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                            </div>
                            <div class="ms-3 flex-grow-1">
                                <h5 class="fs-17 lh-base mb-2">Email</h5>
                                <p class="text-muted fs-14 mb-0">support@themesbrand.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="custom-form card p-4 p-lg-5">
                    <form name="myForm" action="#!">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center mb-4">
                                    <h3 class="text-capitalize">Get In Touch with us for more Information</h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label for="nameInput" class="form-label">Name<span class="text-danger">*</span></label>
                                    <input name="nameInput" id="nameInput" type="text" class="form-control" placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mt-3">
                                    <label for="emailInput" class="form-label">Email<span class="text-danger">*</span></label>
                                    <input name="emailInput" id="emailInput" type="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label for="subjectInput" class="form-label">Subject<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="subjectInput" placeholder="Enter Subject..">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-3">
                                    <label for="messageInput" class="form-label">Message<span class="text-danger">*</span></label>
                                    <textarea name="messageInput" id="messageInput" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-end mt-4">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Send Message <i class="bi bi-arrow-right-short align-middle fs-16 ms-1"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-lg-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6068982895667!2d112.6590641749609!3d-7.936059079037127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6299ed2c476ad%3A0xfba1cc2ab944bab!2sSMK%20Negeri%208%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1694060548642!5m2!1sid!2sid" class="w-100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
