@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} | Contact us
@endsection

@section('orders')
    current
@endsection


@section('content')
    <div class="main-container">
        <div class="main container">
            <div class="row">
                <div class="col-md-8 mx-auto dis-float">
                    <div class="contact_form">
                        <div class="contact_form__header text-center">
                            <h2 class="contact_form__header--title">Contact form</h2>
                        </div>
                        <div class="contact_form__body">
                            <form action="#" class="contact-forms">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control shadow-none contact_form__custom-input" placeholder="Full name" id="name" required>
                                        <div class="invalid-feedback d-none name_error">Please enter your name </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control shadow-none contact_form__custom-input" placeholder="Phone number" id="number" required>
                                        <div class="invalid-feedback d-none number_error">Please enter your number</div>
                                    </div>
                                </div>
                                <input type="email" id="email" class="form-control shadow-none contact_form__custom-input" placeholder="E-mail address" required>
                                <div class="invalid-feedback d-none email_error">Please enter your valid email address</div>
                                <textarea id="message" class="form-control shadow-none custom-textArea" rows="7" placeholder="Your message" required></textarea>
                                <div class="invalid-feedback d-none message_error">Please enter your message</div>
                                <div class="submit__msg text-center">
                                    <button type="button" class="btn msg__submit--btn">Send a message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="success__msg  d-none">
                        <div class="success__inner">
                            <span><i class="fa fa-check-circle-o success__inner--icon" aria-hidden="true"></i></span>
                            <p class="success__inner--title">Your message has been successfully Send</p>
                        </div>
                        <div class="goBack">
                            <a href="{{ route('frontend.index') }}" class="btn-back">Go back in time</a>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
           $('.msg__submit--btn').click(function(){
                 let name = $('#name'),
                 email = $('#email'),
                 number = $('#number'),
                 message = $('#message');
                let regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                $('.invalid-feedback').addClass('d-none');
				

                if(name.val() == ''){ 
                    $('.name_error').removeClass('d-none'); 
                    name.focus();
                } 
				else if(number.val() == ''){ 
                    $('.number_error').removeClass('d-none');
					number.focus();
				} 
				else if(number.val().length > 10){
                    $('.number_error').removeClass('d-none'); 
                    $('.number_error').text('Number must be less then 11'); 
					number.focus();
				} 
				
				else if(email.val() == ''){ 
                    $('.email_error').removeClass('d-none');
					email.focus();
				} 
				else if(!regex.test(email.val())){
                    $('.email_error').removeClass('d-none');
					email.focus();
				} 
                else if(message.val() == ''){ 
                    $('.message_error').removeClass('d-none');
					message.focus();
				} else{                 
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('contact.store') }}",
                        method : "post", 
                        data : {
                            name : name.val(),
                            phone : number.val(),
                            email : email.val(),
                            message : message.val(),
                        }, 
                        success :function(response){
                            $(".contact_form__body").addClass('d-none');
                            $(".success__msg").removeClass('d-none');
                        },
                    });
                }
           });
        });
    </script>
@endsection