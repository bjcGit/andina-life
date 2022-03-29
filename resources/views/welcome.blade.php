@extends('index')

@section('servicios')
    <section class="page-section" id="portfolio">
        <div class="container px-4 px-lg-5 ">
            <h2 class="text-center mt-0">Nuestros servicios</h2>
            <hr class="divider" />

            <div class="row gx-4 gx-lg-5 justify-content-center">

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 misionImg"> </div>

                        <h3 class="h4 mb-2">Servicios de desinfección</h3>
                        <p class="text-muted mb-0 textMision"> Temodesinfeccion </p>
                        <p class="text-muted mb-0 textMision"> Nebu desisnfeccion </p>
                        <p class="text-muted mb-0 textMision"> Rayos uvc </p>
                        <p class="text-muted mb-0 textMision"> Vapor desinfectante </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Más info
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Servicios de desinfección</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-dialog modal-dialog-scrollable textForm">
                                        <div class="mb-4">
                                            <img src="assets/img/portfolio/desinfec/FONDO_2.jpg" width="300" height="150" alt="5" >
                                        </div>
                                    
                                        <p>
                                            Nuestro equipo trabaja con vapor (95% Seco) la alta temperatura del vapor
                                            (180°C)
                                            elimina gérmenes, virus y bacterias.
                                        </p>
                                        <p>
                                            La desinfección es un proceso selectivo químico que mata o inactiva los agentes
                                            patógenos tales como bacterias de origen entérico, virus, hongos, levaduras y
                                            protozoos, impidiendo el crecimiento de microorganismos patógenos que se
                                            encuentran
                                            en objetos inertes, desodoriza y desinfecta ambientes.
                                        </p>
                                        <p>
                                            Nuestro equipo de luz ultravioleta tiene un efecto germicida que se extiende a
                                            bacterias, virus, esporas, hongos, mohos y ácaros: el mismo se debe al efecto
                                            destructor desplegado por las radiaciones UV-C sobre su ADN; todo ello
                                            contribuye a
                                            dañar su aparato reproductor, impidiendo su crecimiento y multiplicación.
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 misionImg"> </div>

                        <h3 class="h4 mb-2">Servicios de mantenimiento de aires acondicionados</h3>
                        <p class="text-muted mb-0 textMision">
                            Ofrecemos un completo servicio de mantenimiento a sus equipos de aire acondicionado, con el
                            objetivo principal de la convervacion a través de la reparación, mantenimiento y
                            mejoramiento de equipos.</p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDos">
                            Más info
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalDos" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Servicios de mantenimiento de aires acondicionados</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-dialog modal-dialog-scrollable textForm">
                                        <div class="mb-4">
                                        <img src="assets/img/portfolio/desinfec/FONDO_3.jpg" width="300" height="150">
                                    </div>
                                        <p >
                                            El mantenimiento significa la protección de la inversión, la garantía de la
                                            producción la
                                            seguridad de un servicio y obedece a una planificación adecuada. </p>
                                     
                                        <p >
                                            Somos centro de servicio autorizado de TRANE, LG, SAMSUNG, DAIKIN. </p>
                                      
                                        <p>
                                            Nuestro equipo de luz ultravioleta tiene un efecto germicida que se extiende a
                                            bacterias, virus, esporas, hongos, mohos y ácaros: el mismo se debe al efecto
                                            destructor desplegado por las radiaciones UV-C sobre su ADN; todo ello
                                            contribuye a
                                            dañar su aparato reproductor, impidiendo su crecimiento y multiplicación.
                                        </p>
                                        <img src="assets/img/portfolio/desinfec/aires.jpg" width="400" height="250">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 misionImg"> </div>

                        <h3 class="h4 mb-2">Servicios de jardinería (poda de zonas verdes).</h3>
                        <p class="text-muted mb-0 textMision"> Colocación, control, programación y revisión de los sistemas de riego </p>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalTres">
                            Más info
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalTres" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Servicios de jardinería (poda de zonas verdes).</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-dialog modal-dialog-scrollable textForm">
                                        <div class="mb-4">
                                        <img src="assets/img/portfolio/desinfec/FONDO_4.jpg" width="300" height="250">
                                        </div>
                                        <p>
                                            Poda de plantas, arbustos, árboles y palmeras. Eliminación de las malas hierbas.
                                        </p>
                                        <p>
                                            Realización del tratamiento fitosanitario. Se trata de un método basado en la aplicación de una sustancia que previene o destruye los insectos, ácaros, hongos o bacterias -entre otro tipo de plagas- que afecta a la vida vegetal.
                                        </p>
                                        <p>
                                            Abonado que garantice un crecimiento sano y adecuado de todas las plantas.
                                        </p>
                                        <p>
                                            Instalación, reparación y supervisión de césped artificial.
                                        </p>
                                        <p>
                                            Siega del césped como ejemplo perfecto del servicio de jardinería. 
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center mb-50">
                    <div class="mt-5">
                        <div class="mb-2 misionImg"> </div>

                        <h3 class="h4 mb-2">Servicios tecnológicos ambientales (sensores de monitoreo de aire,
                            agua, y ambiente), implementación de tecnología para mejoramiento del medio ambiente</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('form')

<form action="{{ route('mail.store') }}" id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Name input-->
    <div class="form-floating mb-3 textForm">
        <input class="form-control" id="name" name="name" type="text" placeholder="Ingresa el nombre..."
            data-sb-validations="required" />
        <label for="name">Nombre</label>
        <div class="invalid-feedback" data-sb-feedback="name:required">El nombre es requerido</div>
    </div>
    <!-- Email address input-->
    <div class="form-floating mb-3 textForm">
        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com"
            data-sb-validations="required,email" />
        <label for="email">Correo</label>
        <div class="invalid-feedback" data-sb-feedback="email:required">El correo es requerido</div>
        <div class="invalid-feedback" data-sb-feedback="email:email">Correo no valido</div>
    </div>
    <!-- Phone number input-->
    <div class="form-floating mb-3 textForm">
        <input class="form-control" id="phone" name="telefono" type="tel" placeholder="(123) 456-7890"
            data-sb-validations="required" />
        <label for="phone">Telefono</label>
        <div class="invalid-feedback" data-sb-feedback="phone:required">Es requerido el telefono
        </div>
    </div>
    <!-- Message input-->
    <div class="form-floating mb-3 textForm">
        <textarea name="descripcion" class="form-control" id="message" type="text" placeholder="Enter your message here..."
            style="height: 10rem" data-sb-validations="required"></textarea>
        <label for="message" >Mensaje</label>
        <div class="invalid-feedback" data-sb-feedback="message:required">El mensaje es necesario</div>
      
    </div>
    <div class="d-grid mb-5">
       
        <button type="submit" class="btn btn-primary btn-xl disabled" id="submitButton">
            Enviar
    </button>
    </div>
    <!-- Submit success message-->
    <!---->
    <!-- This is what your users will see when the form-->
    <!-- has successfully submitted-->
    <div class="d-none" id="submitSuccessMessage">
        <div class="text-center mb-3">
            <div class="fw-bolder textForm">Datos enviados
            <br />
        </div>
    </div>
    <!-- Submit error message-->
    <!---->
    <!-- This is what your users will see when there is-->
    <!-- an error submitting the form-->
    <div class="d-none" id="submitErrorMessage">
        <div class="text-center text-danger mb-3">No se pudo enviar el mensaje</div>
    </div>
    <!-- Submit Button-->
  
  
</form>

@endsection
