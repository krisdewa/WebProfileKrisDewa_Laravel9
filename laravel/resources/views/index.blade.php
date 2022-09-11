@extends('layouts.main')

@section('container')
    <!-- HOME -->
    <div class="hero">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-8">
                    <h2> <span class="hi">Hi</span>, I'm a Krisna Dewa Pratama</h2>
                    <div class="interest">
                        <p>Interest in <span class="typing"></span></p>
                    </div>
                    <p>
                        I'm from Madiun and I have been focus learning programming since 2019 when I'm studying in
                        College and I'm
                        also new learning Cyber Security since 2021. If you want hire or discuss about project just
                        contact me, by
                        click the
                        button down bellow.
                    </p>
                    <a href="mailto:krisnadp23@gmail.com" class="btn btn-primary contact">Let's Work Together</a>
                </div>
                <div class="col-md-4">
                    <img class="hero_img img-fluid" src="{{ asset('hero/main_foto .png') }}" alt="hero" />
                </div>
            </div>
        </div>
    </div>
    <!-- END HOME -->

    <!-- ABOUT ME -->
    <div class="about" id="about">
        <div class="container">
            <h2 class="abouth2 text-center">About Me</h2>
            <span class="line rounded-pill"></span>
            <div class="aboutcon">
                <div class="row flex-column-reverse flex-md-row">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="about_img img-fluid" src="{{ asset('hero/hero-krisna2.jpg') }}" alt="hero" />
                        </div>

                        <div class="col-md-8 about-isi">
                            <h4 class="about-title">Hi There</h4>
                            <p class="about-description">
                                Alhamdulillah For Everything. <br />
                                So we will get acquainted for a moment so that we are more familiar. <br />
                                here is my brief personal data.
                            </p>
                            <div class="col-lg-8 col-md-12 about-r">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12">
                                        <h5>Name</h5>
                                        <p class="section-description">Krisna Dewa Pratama</p>
                                        <h5>Email</h5>
                                        <p class="section-description">Krisnadp@gmail.com</p>
                                        <h5>Address</h5>
                                        <p class="section-description">Madiun, Indonesia</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-12">
                                        <h5>School</h5>
                                        <p class="section-description">Universitas Ahmad Dahlan</p>
                                        <h5>Major</h5>
                                        <p class="section-description">Informatika</p>
                                        <h5>Focus in</h5>
                                        <p class="section-description">Web Developer & Cyber Security</p>
                                    </div>
                                    <div class="col-xl-6 col-lg-12"></div>
                                    <div class="col-xl-6 col-lg-12"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ABOUT ME-->

    <!-- SKILLS -->
    <div class="skills" id="skills">
        <div class="container">
            <h2 class="skillsh2">Skills</h2>
            <span class="line rounded-pill"></span>
            <!-- CODE SKILL -->
            <div class="backskill">
                <div class="programming text-center">
                    <a href="https://www.php.net/" target="_blank"><img class="php" src="{{ asset('icon/php.svg') }}"
                            alt="php" /></a>
                    <a href="https://laravel.com/" target="_blank"><img class="laravel"
                            src="{{ asset('icon/laravel.svg') }}" alt="laravel" /></a>
                    <a href="https://codeigniter.com/" target="_blank"><img class="codeigniter"
                            src="{{ asset('icon/codeigniter.svg') }}" alt="codeigniter" /></a>
                    <a href="https://www.python.org/" target="_blank"><img class="python"
                            src="{{ asset('icon/python.svg') }}" alt="py" /></a>
                    <a href="https://www.phpmyadmin.net/" target="_blank"><img class="mysql"
                            src="{{ asset('icon/mysql.svg') }}" alt="mysql" /></a>
                    <a href="https://id.wikipedia.org/wiki/HTML" target="_blank"><img src="{{ asset('icon/html.svg') }}"
                            alt="html" /></a>
                    <a href="https://en.wikipedia.org/wiki/CSS" target="_blank"><img src="{{ asset('icon/css.svg') }}"
                            alt="css" /></a>
                    <a href="https://id.wikipedia.org/wiki/JavaScript" target="_blank"><img
                            src="{{ asset('icon/javascript.svg') }}" alt="javascript" /></a>
                    <a href="https://getbootstrap.com/" target="_blank"><img class="boostrap"
                            src="{{ asset('icon/bootstrap.svg') }}" alt="bootstrap" /></a>
                    <a href="https://reactjs.org/" target="_blank"><img class="reactjs"
                            src="{{ asset('icon/reactjs.svg') }}" alt="reactjs" /></a>
                    <!-- <img src="assets/icon/git.svg" alt="git" /> -->
                    <!-- <img src="assets/icon/github.svg" alt="php" /> -->
                </div>
            </div>
            <!--  -->
            <!-- TOOLS -->
            <h2 class="toolsh2">Tools</h2>
            <span class="line rounded-pill"></span>
            <div class="backtool">
                <div class="tools text-center">
                    <!-- <img src="./assets/icon/photoshop.svg" alt="photoshop" /> -->
                    <a href="https://code.visualstudio.com/" target="_blank"><img class="vscode"
                            src="{{ asset('icon/vscode.svg') }}" alt="vscode" /></a>
                    <a href="https://filmora.wondershare.net/filmora-video-editor.html?gclid=CjwKCAjw9aiIBhA1EiwAJ_GTSkhAwcp5LzvwB2z2vAAr5zck5z_1TaB8jGz3r0kQn_b8gMcRWJhlZRoCT3gQAvD_BwE"
                        target="_blank"><img class="filmora" src="{{ asset('icon/filmora.svg') }}"
                            alt="filmora" /></a>
                    <a href="https://www.figma.com" target="_blank"><img class="figma"
                            src="{{ asset('icon/figma.svg') }}" alt="figma" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- SKILL & TOOL -->

    <!-- EXPERIENCE -->
    <div class="experience" id="experience">
        <h2 class="text-center">Experience</h2>
        <span class="line rounded-pill"></span>
        <div class="container">
            <div class="port">
                <div class="carousel"
                    data-flickity='{ "imagesLoaded": true, "autoPlay": true , "percentPosition": false, "wrapAround": true}'>
                    <img src="{{ asset('certificate/ddp2.jpg                           ') }}    " alt="ddp">
                    <img src="{{ asset('certificate/piagamupc.jpg                      ') }}    " alt="" /> />
                    <img src="{{ asset('certificate/ftth.jpg                           ') }}    " alt="" />
                    <img src="{{ asset('certificate/udemyethicalhack.jpg               ') }}    " alt="" />
                    <img src="{{ asset('certificate/udemyhackandroid.jpg               ') }}    " alt="" />
                    <img src="{{ asset('certificate/udemyc++.jpg                       ') }}    " alt="" />
                    <img src="{{ asset('certificate/udemypremiere.jpg                  ') }}    " alt="" />
                    <img src="{{ asset('certificate/udemyyt.jpg                        ') }}    " alt="" />
                    <img src="{{ asset('certificate/Aguna Course Python fundamental.jpg') }}    " alt="" />
                    <img src="{{ asset('certificate/Aguna Course Virtual Machine.jpg   ') }}    " alt="" />
                    <img src="{{ asset('certificate/webinarrelata.jpg                  ') }}    " alt="" />
                    <img src="{{ asset('certificate/acp1.jpg                           ') }}    " alt="" />
                    <img src="{{ asset('certificate/acp2.jpg                           ') }}    " alt="" />
                    <img src="{{ asset('certificate/acp3.jpg                           ') }}    " alt="" />
                    <img src="{{ asset('certificate/seagate1.jpg                       ') }}    " alt="" />
                    <img src="{{ asset('certificate/seagate2.jpg                       ') }}    " alt="" />

                    {{-- <img src="{{ asset('certificate/webinarbemfti.jpg                  ') }}    " alt="" /> --}}
                    {{-- <img src="{{ asset('certificate/webinarpermikomnas.png  ') }}               " alt="" /> --}}
                    {{-- <img src="{{ asset('certificate/webinarcybersecurity.jpg') }}               " alt="" /> --}}
                    {{-- <img src="{{ asset('certificate/mdt.jpg                 ') }}               " alt="" /> --}}
                    {{-- <img src="{{ asset('certificate/webinarbssn1.jpg        ') }}               " alt="" /> --}}
                    {{-- <img src="{{ asset('certificate/webinarinsightus.jpg    ') }}               " alt="" /> --}}
                    <!-- <img src="assets/certificate/literasidigital.jpg" alt="" /> -->
                    <!-- <img src="assets/certificate/webinarkominfo.jpg" alt="" /> -->
                    <!-- <img src="assets/certificate/webinarpersada.jpg" alt="" /> -->
                    <!-- <img src="assets/certificate/webinarLD5.jpg" alt="" /> -->
                    <!-- <img src="assets/certificate/webinarLD6.jpg" alt="" /> -->
                    <!-- <img src="assets/certificate/webinariqbal.jpg" alt="" /> -->

                </div>
            </div>
        </div>
    </div>
    <!-- END EXPERIENCE -->

    <!-- PROJECT -->
    <div class="project" id="project">
        <div class="container">
            <h3 class="section-title text-center projecth3">Project Showcase</h3>
            <span class="line rounded-pill"></span>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/apotek.png') }}" class="w-100" />
                        <div class="overlay-project">
                            <a class="viewproject" href="https://apotek.krisdewa.my.id" target="_blank">Ecommerce Apotek
                                K-24</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/yogsmap.png') }}" class="w-100" />
                        <div class="overlay-project">
                            <a class="viewproject" href="https://yogsmap.krisdewa.my.id" target="_blank">YogsMap <br></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/adjineon.png') }}" class="w-100" />
                        <div class="overlay-project">
                            <a class="viewproject" href="https://adjineon.com" target="_blank">Adjineon
                                Advertising</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/webprofile1.png') }}" class="w-100" />
                        <div class="overlay-project">
                            <a class="viewproject" href="https://krisdewa.my.id" target="_blank">Web Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/kostqita.png') }}" class="w-100" />
                        <div class="overlay-project">
                            <a class="viewproject" href="https://here.krisdewa.my.id" target="_blank">Kost Qita</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/comingsoon.jpg') }}" class="w-100" />
                        <div class="overlay-project">
                            <!-- <h4 class="text-center">Coming Soon</h4> -->
                            <a class="viewproject" href="https://here.krisdewa.my.id" target="_blank">Coming Soon</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/comingsoon.jpg') }}" class="w-100" />
                        <div class="overlay-project">
                            <!-- <h4 class="text-center">Coming Soon</h4> -->
                            <a class="viewproject" href="https://here.krisdewa.my.id" target="_blank">Coming Soon</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="project-item rounded">
                        <img src="{{ asset('portfolio/comingsoon.jpg') }}" class="w-100" />
                        <div class="overlay-project">
                            <!-- <h4 class="text-center">Coming Soon</h4> -->
                            <a class="viewproject" href="https://here.krisdewa.my.id" target="_blank">Coming Soon</a>
                        </div>
                    </div>
                </div>


                <!-- NOTE -->
                {{-- <p class="note text-center">*Mohon maaf Project masih sedikit.')</p> --}}
                <!--  -->
            </div>
        </div>
        <!-- END PROJECT -->

        <!-- CONTACT -->
        <div class="footer" id="contact">
            <div class="container">
                <h2>Contact Me</h2>
                <p>
                    For hiring, business, or collaboration please contact me via email
                    <strong>krisnadp23@gmail.com</strong> or <strong>LinkedIn</strong>.
                </p>
                <div class="social-media">
                    <a href="https://www.instagram.com/krisdewa_/" target="_blank"><img
                            src="{{ asset('icon/instagram.svg') }}" alt="instagram" /></a>
                    <a href="https://www.linkedin.com/in/krisna-dewa-pratama-9aa907153/" target="_blank"><img
                            src="{{ asset('icon/linkedin.svg') }}" alt="linkedin" /></a>
                    <a href="https://github.com/krisdewa" target="_blank"><img src="{{ asset('icon/github.svg') }}"
                            alt="github" /></a>
                    <a href="https://www.youtube.com/c/Krisdewa" target="_blank"><img
                            src="{{ asset('icon/youtube.svg') }}" alt="youtube" /></a>
                </div>
                <p>
                    <strong>From Madiun, Indonesia <br />
                        By KrisDewa &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </strong>
                </p>

                <!-- <div class="signed-logo">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <img src="./assets/logo/logopad.svg" alt="logopad" />
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </div> -->
            </div>
        </div>
        <!-- ENDCONTACT -->
    @endsection
