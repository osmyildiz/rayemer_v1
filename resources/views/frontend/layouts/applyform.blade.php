
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="contact-title mb-5 text-center">Bize Ulaşın</h2>
            <div class="contact-form-wrapper mb-5 mb-lg-0">
                    @csrf
                    <input type="hidden" id="url" name="url" value="{{Route::current()->getName()}}">
                    <div class="row">
                        <div class="col-5">
                            <div class="contact-form-set">
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ad Soyad" data-bv-field="name" required>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-bv-field="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-4">
                                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Telefon" data-bv-field="phone" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu" data-bv-field="subject" required>
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <div class="input-group">
                                    <textarea rows="4" class="form-control" id="message" name="message" placeholder="Mesaj" data-bv-field="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-submit-wrap text-center">
                                <button type="button" class="btn btn-primary submit">Gönder</button>
                            </div>
                        </div>
                    </div>
                    <p class="contact-status-msg"></p>

            </div><!-- .contact-form-wrapper -->
        </div><!-- .col -->

    </div><!-- .row -->
</div>
<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<script type="text/javascript">

        $('.submit').click(function(){



            $.ajaxSetup({
                headers:
                    {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });

            $.ajax({
                type: "POST",
                url: "{{URL::route('send_form')}}",
                data:{
                    name:$('#name').val(),
                    email:$('#email').val(),
                    phone:$('#phone').val(),
                    subject:$('#subject').val(),
                    message:$('#message').val(),

                },
                cache: false,
                success: function(response) {
                    swal(
                        "Başarılı!",
                        "Mesajınız gönderildi. En kısa zamanda size dönüş yapılacaktır.",
                        "success"
                    ).then((result) => {
                        location.reload();
                    });



                },
                failure: function (response) {
                    swal(
                        "Bir problem çıktı",
                        "Mesajınız gönderilemedi. Lütfen yeniden deneyiniz.", // had a missing comma
                        "error"
                    )
                }
            });

        });


</script>