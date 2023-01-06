<div>
    <section id="footer">
        <div class="container-fluid">
            <div class="row footer_section_1">
                <div class="col-md-10 offset-md-1">
                    <div class="row">
                        <div class="col-md-6 border_right">

                            {{--footer link start--}}
                            <div>
                                <div class="container mb-3">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12" data-aos="fade-up">
                                            <div class="center_title mb-1">
                                                <h3 class="text-center text-dark title-fm">Other Information</h3>
                                                <span class="center_title_underline mt-1"></span>
                                            </div>
                                            <p class="short_text body-fm">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                                                excepturi quos?
                                            </p>
                                            <div class="footer_links2 body-fm">
                                                <a href="/" onClick={gotop}>Home</a>
                                                <a href="/employees" onClick={gotop}>Employees</a>
                                                <a href="/client" onClick={gotop}>Client and Future Plans</a>
                                                <a href="/partnerships" onClick={gotop}>About Partnerships</a>
                                                <a href="/target-market" onClick={gotop}>Target of Market</a>
                                                <a href="/coldchain-transport" onClick={gotop}>Cold Chain and Transportation</a>
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
                                        <h3 class="text-dark title-fm">Contact Us</h3>
                                        <span class="contact_center_title_underline"></span>
                                        <p class="body-fm">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse vel nemo
                                            iusto aut tenetur accusamus, neque, at et pariatur nisi modi omnis
                                            libero deleniti, fugiat qui mollitia rem exercitationem sapiente?
                                        </p>
                                    </div>
                                    <div class="row p-3">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <div class="contact_form">

                                            <form
                                                action="{{route('contact')}}"
                                                method="POST"
                                                class="body-fm"
                                            >
                                                @csrf

                                                <input type="hidden" name="_next" value="https://www.freshmoe.com/" />
                                                <input
                                                    type="text"
                                                    name="name"
                                                    class="mb-3 @error('name') is-invalid @enderror"
                                                    placeholder="Enter Your Name"
                                                    autocomplete="off"
                                                />
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror

                                                <input
                                                    type="email"
                                                    name="email"
                                                    class="mb-3 @error('email') is-invalid @enderror"
                                                    placeholder="Enter Your Email"
                                                    autocomplete="off"
                                                />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                                <textarea
                                                    name="message"
                                                    id=""
                                                    cols="30"
                                                    rows="3"
                                                    class="mb-3 @error('$message') is-invalid @enderror"
                                                    placeholder="Enter Your Message"
                                                    autocomplete="off"
                                                ></textarea>
                                                @error('message')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                                <button type="submit">Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--contact form start--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

