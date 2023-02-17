<div>
    <section id="footer">
        <div class="container-fluid">
            <div class="d-flex flex-wrap footer_section_1">
                <div class="col-md-6 border_right">

                    {{--footer link start--}}
                    <div>
                        <div class="container mb-3">
                            <div class="row justify-content-center">
                                <div class="col-md-12" data-aos="fade-up">
                                    <div class="center_title mb-1">
                                        <h3 class="text-center text-dark title-fm">{{ __('message.our_info') }}</h3>
                                        <span class="center_title_underline mt-1"></span>
                                    </div>
                                    <p class="short_text body-fm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                                        excepturi quos?
                                    </p>
                                    <div class="footer_links2 body-fm">
                                        <a class="{{Request::segment(1) == '' ? 'footer_links2_active text-white' : null}}" href="/" >{{ __('message.home') }}</a>
                                        <a class="{{Request::segment(1) == 'employees' ? 'footer_links2_active text-white' : null}}" href="/employees" >{{ __('message.employees') }}</a>
                                        <a class="{{Request::segment(1) == 'client' ? 'footer_links2_active text-white' : null}}" href="/client" >{{ __('message.client_future_plan') }}</a>
                                        <a class="{{Request::segment(1) == 'partnerships' ? 'footer_links2_active text-white' : null}}" href="/partnerships" >{{ __('message.about_partners') }}</a>
                                        <a class="{{Request::segment(1) == 'target-market' ? 'footer_links2_active text-white' : null}}" href="/target-market" >{{ __('message.target_of_market') }}</a>
                                        <a class="{{Request::segment(1) == 'coldchain-transport' ? 'footer_links2_active text-white' : null}}" href="/coldchain-transport" >{{ __('message.cold_chain_transportation') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--footer link end --}}

                </div>
                <div class="col-md-6 border_right">

                    {{--contact form start--}}
                    <div>
                        <div
                            class="container"
                            data-aos="fade-up"
                            id="contact"
                        >
                            <div class="contact_center_title px-3">
                                <h3 class="text-dark title-fm">{{ __('message.contact_us_form') }}</h3>
                                <span class="contact_center_title_underline"></span>
{{--                                <p class="body-fm">--}}
{{--                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse vel nemo--}}
{{--                                    iusto aut tenetur accusamus, neque, at et pariatur nisi modi omnis--}}
{{--                                    libero deleniti, fugiat qui mollitia rem exercitationem sapiente?--}}
{{--                                </p>--}}
                            </div>
                            <div class="row p-3">
                                <div class="contact_form">
                                    <form
                                        action="{{route('contactToFm')}}"
                                        method="POST"
                                        class="body-fm"
                                        id="contact-form"
                                    >
                                        <div id="show-message">

                                        </div>
                                        @csrf
                                        @if(session('warning'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <span><strong>Warning !</strong>  {{session('warning')}}</span>
                                                <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                                            </div>
                                        @endif
                                        @if(session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <span><strong>Success </strong>  {{session('success')}}</span>
                                                <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                                            </div>
                                        @endif
                                        <input type="hidden" name="_next" value="https://www.freshmoe.com/" />
                                        <input
                                            type="text"
                                            name="name"
                                            class="mb-3"
                                            placeholder="{{ __('message.enter_ur_name') }}"
                                            autocomplete="off"
                                        />
                                        <input
                                            type="email"
                                            name="email"
                                            class="mb-3"
                                            placeholder="{{ __('message.enter_ur_email') }}"
                                            autocomplete="off"
                                        />
                                        <textarea
                                            name="message"
                                            cols="30"
                                            rows="3"
                                            class="mb-3"
                                            placeholder="{{ __('message.enter_ur_sms') }}"
                                            autocomplete="off"
                                        ></textarea>
                                        <button type="submit" id="submit-btn">
                                            {{ __('message.send') }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--contact form start--}}

                </div>
            </div>
        </div>
{{--        <?php echo View::make ('frontend.layouts.bottom_footer'); ?>--}}

    </section>
</div>

{{-- sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    const alertUi = (conditionClass,innerText) =>
    {
        let uiAlert = `<div class="alert alert-${conditionClass} alert-dismissible fade show" role="alert">
                    <span><strong>${innerText}</strong></span>
                    <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>`;
        $('#show-message').append(uiAlert);
    }

    // const Toast = Swal.mixin({
    //     toast: true,
    //     position: 'bottom-end',
    //     showConfirmButton: false,
    //     timer: 5000,
    //     timerProgressBar: true,
    //     didOpen: (toast) => {
    //         toast.addEventListener('mouseenter', Swal.stopTimer)
    //         toast.addEventListener('mouseleave', Swal.resumeTimer)
    //     }
    // });

    // Toast is already been declared.

    $('#contact-form').on('submit', function(e){
        e.preventDefault();
        if(navigator.onLine)
        {
            $('#submit-btn').attr('disabled', '');

            let formData = new FormData($('#contact-form')[0]);
            console.log(formData)

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{ route('contactToFm') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.status === 'success'){
                        $('input').val('')
                        $('textarea').val('')
                        $('#submit-btn').removeAttr('disabled');
                        // alertUi('success',response.message);
                        Toast.fire({
                            icon: 'success',
                            title: response.message
                        });
                    } else if(response.status == 'fail'){
                        $('#submit-btn').removeAttr('disabled');
                        // alertUi('warning',response.message);
                        Toast.fire({
                            icon: 'warning',
                            title: response.message
                        });
                    }else {
                        console.log(response);
                    }

                },
            });
        }else {
            Toast.fire({
                icon: 'warning',
                title: "Check you are internet connection"
            });
        }
    });

</script>
