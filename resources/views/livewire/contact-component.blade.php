<div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section text-uppercase h1">Formulario de contacto</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-5">
                                    <h3 class="mb-4 text-uppercase">Contact us</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center me-2">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span class="fw-bold">Location:</span> Peru
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center me-2">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span class="fw-bold">Phone:</span> <a href="tel://1234567920">+51 927 074 269</a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center me-2">
                                            <i class="bi bi-envelope-check"></i>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span class="fw-bold">Email:</span> <a
                                                    href="mailto:info@diarioprogramador.com">novakmzv@gmail</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center me-2">
                                            <i class="bi bi-browser-chrome"></i>
                                        </div>
                                        <div class="text pl-4">
                                            <p><span class="fw-bold">Portafolio</span> <a href="#">in progress</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4 text-uppercase text-center">Get in touch</h3>
                                    <div id="form-message-warning" class="mb-4"></div>

                                    {{-- Muestra mensaje de envio exitoso --}}
                                    @if ($success)
                                        <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                                            {{ $success }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Cerrar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <form wire:submit.prevent="submit" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input wire:model="name" type="text" class="form-control mb-3"
                                                           name="name" id="name" placeholder="Name">

                                                    @error('name')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input wire:model="email" type="email" class="form-control mb-3"
                                                           name="email" id="email" placeholder="Email">
                                                    @error('email')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input wire:model="phone" type="text" class="form-control mb-3"
                                                           name="phone" id="phone" placeholder="Phone">
                                                    @error('phone')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input wire:model="subject" type="text"
                                                           class="form-control mb-3" name="subject" id="subject"
                                                           placeholder="Subject">
                                                    @error('subject')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea wire:model="message" name="message" class="form-control mb-3" id="message" cols="30" rows="5"
                                                              placeholder="Message"></textarea>
                                                    @error('message')
                                                    <span class="invalid-feedback d-block" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button class="btn btn-primary w-100">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
