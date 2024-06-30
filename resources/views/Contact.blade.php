@extends('layouts.mainlayout')
@section('title','Contact')
@section('content')
  <section class="u-clearfix u-white u-section-1" id="carousel_e199">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-grey-25 u-radius u-shape u-shape-round u-shape-1" ></div>
      <div class="data-layout-selected u-clearfix u-gutter-10 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
              <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-align-left u-custom-font u-font-raleway u-text u-text-1">Contact Us</h2>
                <p class="u-align-left u-text u-text-2">You are always welcome to contact us. Our Customer Service is available Mon–Fri 9:00 a.m.–8:00 p.m. and Sat–Sun 10:00 a.m.–6:00 p.m. (GMT +3). We look forward to hearing from you!</p>
                <div class="u-expanded-width u-form u-form-1">
                  <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
                    <div class="u-form-group u-form-name u-label-none">
                      <label for="name-3434" class="u-label" wfd-invisible="true">Name</label>
                      <input type="text" placeholder="Enter your Name" id="name-3434" name="name" class="u-border-none u-grey-10 u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-email u-form-group u-label-none">
                      <label for="email-3434" class="u-label" wfd-invisible="true">Email</label>
                      <input type="email" placeholder="Enter a valid email address" id="email-3434" name="email" class="u-border-none u-grey-10 u-input u-input-rectangle" required="">
                    </div>
                    <div class="u-form-group u-form-message u-label-none">
                      <label for="message-3434" class="u-label" wfd-invisible="true">Message</label>
                      <textarea placeholder="Enter your message" rows="4" cols="50" id="message-3434" name="message" class="u-border-none u-grey-10 u-input u-input-rectangle" required=""></textarea>
                    </div>
                    <div class="u-align-left u-form-group u-form-submit u-label-none">
                      <a href="#" class="u-black u-border-none u-btn u-btn-submit u-button-style u-btn-1">Submit</a>
                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true">
                    </div>
                    <div class="u-form-send-message u-form-send-success" wfd-invisible="true"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true">
                    <input type="hidden" name="formServices" value="d8341e1f-ad07-e2d0-8a74-8b1053b6fc06">
                  </form>
                </div>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
              <div class="u-container-layout">
                <div class="u-align-left u-expanded u-grey-10 u-map">
                  <div class="embed-responsive">
                    <iframe class="embed-responsive-item" src="https://maps.google.com/maps?output=embed&amp;q=Manhattan&amp;z=11&amp;t=m" data-map="JTdCJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyMiUyQyUyMnpvb20lMjIlM0ExMSUyQyUyMnR5cGVJZCUyMiUzQSUyMnJvYWQlMjIlMkMlMjJsYW5nJTIyJTNBbnVsbCUyQyUyMmFwaUtleSUyMiUzQW51bGwlMkMlMjJtYXJrZXJzJTIyJTNBJTVCJTVEJTdE"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection