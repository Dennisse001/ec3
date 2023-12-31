<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">


<!-- Mirrored from themesbrand.com/toner/html/frontend/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 04:54:43 GMT -->
        @include('laydex.navbar')


        <!--cart -->
        @include('laydex.chart')


        <!-- Modal -->
        @include('laydex.seach')


        <!-- removeItemModal -->
        @include('laydex.remove')



        <!-- end modal -->

        {{-- <a href="../backend/index.html" class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"><i class="bi bi-database align-middle me-1"></i> Backend</a> --}}

        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse" href="#chatBot" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
        <div class="collapse chat-box" id="chatBot">
            <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
                <div class="card-header bg-success d-flex align-items-center border-0">
                    <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">Hi, Raquel Murillo 👋</h5>
                    <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()" data-bs-dismiss="collapse" aria-label="Close"></button>
                </div>
                <div class="card-body p-0">
                    <div id="users-chat-widget">
                        <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 280px;">
                            <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                                <li class="chat-list left">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="../assets/images/logo-sm.png" alt="">
                                        </div>
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 ctext-content">Welcome to Themesbrand. We are here to help you. You can also directly email us at Support@themesbrand.com to schedule a meeting with our Technology Consultant.</p>
                                                </div>
                                                <div class="dropdown align-self-start message-box-drop">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                        </div>
                                    </div>
                                </li>
                                <!-- chat-list -->

                                <li class="chat-list right">
                                    <div class="conversation-list">
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                                </div>
                                                <div class="dropdown align-self-start message-box-drop">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                        </div>
                                    </div>
                                </li>
                                <!-- chat-list -->

                                <li class="chat-list left">
                                    <div class="conversation-list">
                                        <div class="chat-avatar">
                                            <img src="../assets/images/logo-sm.png" alt="">
                                        </div>
                                        <div class="user-chat-content">
                                            <div class="ctext-wrap">
                                                <div class="ctext-wrap-content">
                                                    <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                                </div>
                                                <div class="dropdown align-self-start message-box-drop">
                                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                        <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                        <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                        </div>
                                    </div>
                                </li>
                                <!-- chat-list -->

                            </ul>
                        </div>
                    </div>
                    <div class="border-top border-top-dashed">
                        <div class="row g-2 mt-2 mx-3 mb-3">
                            <div class="col">
                                <div class="position-relative">
                                    <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                                </div>
                            </div><!-- end col -->
                            <div class="col-auto">
                                <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        @yield('isi')
        <!-- END INSTAGRAM -->
        @include('laydex.footer')


        <!-- JAVASCRIPT -->
        @include('laydex.js')

    </body>


<!-- Mirrored from themesbrand.com/toner/html/frontend/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Sep 2023 04:55:12 GMT -->
</html>
