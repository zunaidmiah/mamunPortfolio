@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>contact</span></h2>
            <p class="contact-title-intro">Start your Journey Right Now! Please don’t hesitate to contact with me for your project.</p>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="contact-header-bg">
            <!-- Contact Information -->
            <div class="contact-info d-flex justify-content-between">
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <div class="text-box">
                        <a href="#" class="pointer-small">+88 <?php print isset($data['personal_info']['phone']) ? $data['personal_info']['phone'] : '01234 56789'; ?></a>
                        @if(isset($data['personal_info']['phone1']))
                        <a href="#" class="pointer-small">+88 {{ $data['personal_info']['phone1'] }}</a>
                        @endif
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-paper-plane"></i></span>
                    </div>
                    <div class="text-box">
                        <a href="#" class="pointer-small"><?php print isset($data['personal_info']['email']) ? $data['personal_info']['email'] : 'johndoe@gmail.com'; ?></a>
                    </div>
                </div>
                <div class="contact-info-box">
                    <div class="icon-box">
                        <span><i class="fas fa-home"></i></span>
                    </div>
                    <div class="text-box">
                        <p><?php print isset($data['personal_info']['location']) ? $data['personal_info']['location'] : 'Mirpur, Dhaka'; ?> <br><?php print isset($data['personal_info']['country']) ? $data['personal_info']['country'] : 'Bangladesh'; ?></p>
                    </div>
                </div>
            </div> <!-- Contact Information End -->
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <!-- Contact Form -->
                <div class="contact_form">
                    <form class="contact__form" method="post" action="https://themeforest.weexen.com/fariha/color-1/mail.php">
                        <!-- Form Message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none"
                                    role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div> <!-- Form Message End -->
                        <!-- Form Element -->
                        <div class="form_input_box">
                            <input class="pointer-input" name="name" type="text" placeholder="Your name" required>
                        </div>
                        <div class="form_input_box">
                            <input class="pointer-input" name="email" type="email" placeholder="Your email" required>
                        </div>
                        <div class="form_input_box">
                            <input class="pointer-input" name="subject" type="text" placeholder="Subject" required>
                        </div>
                        <div class="form_input_box">
                            <textarea class="pointer-input" name="message" rows="3" placeholder="Your message" required></textarea>
                        </div>
                        <button class="form-submit-btn pointer-href" name="submit" type="submit">Send Message</button>
                        <!-- Form Element End -->
                    </form>
                </div> <!-- Contact Form End -->
            </div>
            <div class="col-xl-6 col-lg-6">
                <div id="map"></div>
            </div>
        </div>
    </main> <!-- Single page end -->

@endsection
