<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curriculum - Sebastyan Pineda</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ env('APP_URL') }}css/base.css">  
        <link rel="stylesheet" href="{{ env('APP_URL') }}css/main.css">
        <link rel="stylesheet" href="{{ env('APP_URL') }}css/vendor.css">
        
        
        <!-- script
    ================================================== -->   
        <script src="{{ env('APP_URL') }}js/modernizr.js"></script>
        <script src="{{ env('APP_URL') }}js/pace.min.js"></script>

        <!-- favicons
        ================================================== -->
        <link rel="icon" type="image/png" href="{{ env('APP_URL') }}images/programming.png">

    </head>
    <body id="top">
       <!-- header 
    ================================================== -->
        <header>   	
        <div class="row">

            <div class="top-bar">
                <a class="menu-toggle" href="#"><span>Menu</span></a>

                <div class="logo">
                <a href="#">Sebastyan Dev</a>
            </div>		      

                <nav id="main-nav-wrap">
                    <ul class="main-navigation">
                        <li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
                        <li><a class="smoothscroll"  href="#about" title="">Acerca de Mi</a></li>
                        <li><a class="smoothscroll"  href="#resume" title="">Experiencia</a></li>
                        <li><a class="smoothscroll"  href="#portfolio" title="">Portafolio</a></li>
	
                    </ul>
                </nav>    		
            </div> <!-- /top-bar --> 
            
        </div> <!-- /row --> 		
        </header> <!-- /header -->



                <!-- intro section
        ================================================== -->
        <section id="intro">   

            <div class="intro-overlay"></div>	

            <div class="intro-content">
                <div class="row">

                    <div class="col-twelve">

                        <h5>Hello, World.</h5>
                        <h1>I'm Sebastyan Pineda.</h1>

                        <p class="intro-position">
                            <span>Ingeniero de Sistemas</span>
                            <span>Desarrollador Full-Stack</span> 
                        </p>

                        <a class="button stroke smoothscroll" href="#about" title="">Mas Sobre Mi</a>

                    </div>  
                    
                </div>   		 		
            </div> <!-- /intro-content --> 

            <ul class="intro-social">        
            <li><a href="https://www.linkedin.com/in/sebastyandev/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/@sebastyandev"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            <li><a href="https://github.com/SebastyanPi" ><i class="fa fa-github" aria-hidden="true"></i></a></li>
        </ul> <!-- /intro-social -->      	

        </section> <!-- /intro -->



        <!-- about section
   ================================================== -->
   <section id="about">  

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>ACERCA DE MI</h5>
            <h1>¿Quién Soy?</h1>

            <div class="intro-info">

                <img src="images/profile.jpg" alt="Profile Picture">

                <p class="lead text-justify">Soy ingeniero de sistemas y desarrollador de aplicaciones web, me especializo en crear soluciones tecnológicas innovadoras que optimicen procesos y mejoren la experiencia del usuario. Con una sólida experiencia en una variedad de lenguajes de programación y frameworks, mi enfoque se centra en diseñar arquitecturas robustas y desarrollar interfaces intuitivas y atractivas.</p>
            </div>   			

        </div>   		
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Perfil Profesional</h3>
            <p>Diseñar, desarrollar e implementar soluciones tecnológicas eficientes y efectivas.</p>

            <ul class="info-list">
                <li>
                    <strong>Nombre Completo:</strong>
                    <span>Sebastyan Enrique Pineda Aguilera</span>
                </li>
                <li>
                    <strong>Fecha Nacimiento:</strong>
                    <span>Mayo 20, 2002</span>
                </li>
                <li>
                    <strong>Trabajo:</strong>
                    <span>Freelancer</span>
                </li>
                <li>
                    <strong>Website:</strong>
                    <span>www.sepineda.dev</span>
                </li>
                <li>
                    <strong>Email:</strong>
                    <span>sebastyampi@gmail.com</span>
                </li>

                <li>
                    <strong>WhatsApp:</strong>
                    <span>+57 3005350586</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <p>Los programas, lenguajes de programación y framework que domino son los siguientes : </p>

             <ul class="skill-bars">
                <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS3</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                </li>
                <li>
                    <div class="progress percent95"><span>90%</span></div>
                    <strong>Laravel</strong>
                </li>
                <li>
                    <div class="progress percent50"><span>50%</span></div>
                    <strong>React</strong>
                </li>
                <li>

                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Database MYSQL</strong>
                </li>
                <li>

                    <div class="progress percent75"><span>75%</span></div>
                    <strong>LMS Moodle</strong>
                </li>
                <li>

                    <div class="progress percent80"><span>80%</span></div>
                    <strong>GitHub</strong>
                </li>
   
             </ul> <!-- /skill-bars -->		

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="https://wa.link/tmtmac" title="Hire Me" class="button stroke smoothscroll">Contratame</a>
            <a href="https://drive.google.com/file/d/1Vju6v_zy-dJetlNufIq7TuaEqa2i_kNr/view?usp=sharing" title="Download CV" class="button button-primary">Descargar CV</a>
        </div>   		
    </div>

</section> <!-- /process-->  



 <!-- resume Section
   ================================================== -->
   <section id="resume" class="grey-section">

    <div class="row section-intro">
       <div class="col-twelve">

           <h5>Resumen</h5>
           <h1>Experiencia & Estudios</h1>

           <p class="lead">Transformando ideas en código con eficiencia y precisión.</p>

       </div>   		
   </div> <!-- /section-intro--> 

   <div class="row resume-timeline">

       <div class="col-twelve resume-header">

           <h2>Experiencia Laboral</h2>

       </div> <!-- /resume-header -->

       <div class="col-twelve">

           <div class="timeline-wrap">

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-briefcase"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Desarrollador Full-Stack</h3>
                       <p>2019</p>
                   </div>

                   <div class="timeline-content">
                       <h4>Instituto Tecnico Del Saber  - INTESA</h4>
                       <p>Desarrollo de Aplicación Web para la gestión y control de clases en la institucion educativa. Lenguajes de Programación : HTML , CSS, JS & PHP.  <small><b>Barrancabermeja, Santander</b></small></p>
                      
                   </div>

               </div> <!-- /timeline-block -->

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-briefcase"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Desarrollador Full-Stack</h3>
                       <p>2020</p>
                   </div>

                   <div class="timeline-content">
                       <h4>LUBECAR</h4>
                       <p>Desarrollo de aplicación web para la venta de lubricantes para carros y motos. Lenguajes de Programación : HTML , CSS, JS & PHP.  <small><b>Aguachica, Cesar</b></small></p>
                   </div>

               </div> <!-- /timeline-block -->


               <div class="timeline-block">

                <div class="timeline-ico">
                 <i class="fa fa-briefcase"></i>
                </div>

                <div class="timeline-header">
                    <h3>Soporte de TI</h3>
                    <p>2021 - Presente</p>
                </div>

                <div class="timeline-content">
                    <h4>Autoservicio el Resplandor</h4>
                    <p>Mantenimiento de Computadores, y configuración e instalación de Redes.  <small><b>Aguachica, Cesar</b></small></p>
                </div>

                </div> <!-- /timeline-block -->

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-briefcase"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Desarrollador Full-Stack</h3>
                       <p>2023</p>
                   </div>

                   <div class="timeline-content">
                       <h4>Instituto Tecnico Del Saber  - INTESA</h4>
                       <p>Desarrollo de Aplicación Web para la gestion de cartera con el framework Laravel & Moodle. <small><b>Barrancabermeja, Santander</b></small></p>
                   </div>

               </div> 
               
               <div class="timeline-block">

                <div class="timeline-ico">
                    <i class="fa fa-briefcase"></i>
                  
                </div>

                <div class="timeline-header">
                    <h3>Desarrollador Full-Stack</h3>
                    <p>2023</p>
                </div>

                <div class="timeline-content">
                    <h4>Instituto Tecnico Del Saber  - INTESA</h4>
                    <p>Desarrollo de Aplicación Web para la gestion de clase con el framework Laravel. <small><b>Barrancabermeja, Santander</b></small></p>
                </div>

            </div> <!-- /timeline-block -->

           </div> <!-- /timeline-wrap -->   			

       </div> <!-- /col-twelve -->
       
   </div> <!-- /resume-timeline -->
   
   <div class="row resume-timeline">

       <div class="col-twelve resume-header">

           <h2>Estudios</h2>

       </div> <!-- /resume-header -->

       <div class="col-twelve">

           <div class="timeline-wrap">

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-graduation-cap"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Especialización Desarrollo de Software</h3>
                       <p>2024 - Presente</p>
                   </div>

                   <div class="timeline-content">
                       <h4>Coorporación Universitaria Minuto de Dios</h4>
                       <p>
                        La especialización en Desarrollo de Software implica dominar las habilidades necesarias para concebir, diseñar y crear aplicaciones informáticas eficientes y efectivas. Este enfoque se centra en el dominio de lenguajes de programación, frameworks y metodologías de desarrollo para producir software de alta calidad que satisfaga las necesidades del usuario final. </p>
                   </div>

               </div> <!-- /timeline-block -->

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-graduation-cap"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Ingeniero de Sistemas</h3>
                       <p>2019-2024</p>
                   </div>

                   <div class="timeline-content">
                       <h4>Universidad Popular Del Cesar - Seccional Aguachica</h4>
                       <p>Un ingeniero de sistemas es un profesional especializado en el diseño, desarrollo y mantenimiento de sistemas informáticos complejos. Su campo de acción abarca desde la arquitectura de software hasta la implementación de redes y bases de datos, pasando por la seguridad informática. Son expertos en analizar problemas y diseñar soluciones tecnológicas eficientes y efectivas que satisfagan las necesidades específicas de las organizaciones.</p>
                   </div>

               </div> <!-- /timeline-block -->

               <div class="timeline-block">

                   <div class="timeline-ico">
                    <i class="fa fa-graduation-cap"></i>
                   </div>

                   <div class="timeline-header">
                       <h3>Tecnico Auxiliar de Sistemas Informaticos</h3>
                       <p>2023</p>
                   </div>

                   <div class="timeline-content">
                       <h4>Instituto Tecnico Del Norte</h4>
                       <p>
                        Un Técnico Auxiliar de Sistemas Informáticos es un profesional encargado de brindar soporte y asistencia en la instalación, configuración y mantenimiento de sistemas informáticos. Su labor incluye la resolución de problemas técnicos en hardware y software, la atención a usuarios y la realización de tareas de mantenimiento preventivo.</p>
                   </div>

               </div> <!-- /timeline-block -->

           </div> <!-- /timeline-wrap -->   			

       </div> <!-- /col-twelve -->
       
   </div> <!-- /resume-timeline -->
    
</section> <!-- /features -->


<!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

    <div class="row section-intro">
       <div class="col-twelve">

           <h5>Portafolio</h5>
           <h1>Echa un vistazo a los trabajos realizados.</h1>

           <p class="lead text-center">Revisa el trabajo realizado... se que te gustará.</p>

       </div>   		
   </div> <!-- /section-intro--> 

   <div class="row portfolio-content">

       <div class="col-twelve">

           <!-- portfolio-wrapper -->
         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

             <div class="bgrid folio-item">
               <div class="item-wrap">
                   <img src="images/portfolio/img1.png" alt="Liberty">
                  <a href="#modal-01" class="overlay">	                  	           
                     <div class="folio-item-table">
                         <div class="folio-item-cell">
                                    <h3 class="folio-title">Pagina Web Institucional</h3>	     					    
                                      <span class="folio-types">
                                        Instituto Tecnico Del Saber
                                    </span>
                                </div>	                      	
                     </div>                    
                  </a>
               </div>	               
                </div> <!-- /folio-item -->

                <div class="bgrid folio-item">
               <div class="item-wrap">
                   <img src="images/portfolio/img3.png" alt="Shutterbug">
                   <a href="#modal-02" class="overlay">              		                  
                     <div class="folio-item-table">
                         <div class="folio-item-cell">
                             <h3 class="folio-title">Pagina Web Preicfes</h3>	     					    
                                     <span class="folio-types">
                                        Instituto Tecnico Del Saber
                                   </span>		     		
                                </div> 	                      	
                     </div>                    
                  </a>
               </div>
                </div> <!-- /folio-item -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                   <img src="images/portfolio/img4.png"alt="Clouds">
                  <a href="#modal-03" class="overlay">             		                  
                     <div class="folio-item-table">
                         <div class="folio-item-cell">
                             <h3 class="folio-title">Aplicación Web para el Control de Asistencia</h3>	     					    
                                     <span class="folio-types">
                                        Instituto Tecnico Del Saber
                                   </span>		     		
                                </div> 	                      	
                     </div>                    
                  </a>
               </div>
                </div> <!-- /folio-item -->

            <div class="bgrid folio-item">
               <div class="item-wrap">
                   <img src="images/portfolio/img2.png" alt="Beetle">
                  <a href="#modal-04" class="overlay">                  	                 
                     <div class="folio-item-table">
                         <div class="folio-item-cell">
                             <h3 class="folio-title">Aplicación Web para el Control de Notas</h3>	     					    
                                     <span class="folio-types">
                                        Instituto Tecnico Del Saber
                                   </span>		     		
                                </div>  	                      	
                     </div>                    
                  </a>
               </div>
                </div> <!-- /folio-item -->     

                <div class="bgrid folio-item">
               <div class="item-wrap">
                   <img src="images/portfolio/img5.png" alt="Lighthouse">
                  <a href="#modal-05" class="overlay">             		                  
                     <div class="folio-item-table">
                         <div class="folio-item-cell">
                             <h3 class="folio-title">CAMPUS VIRTUAL - Intesa</h3>	     					    
                                     <span class="folio-types">
                                          Web Development
                                   </span>		     		
                                </div> 	                      	
                     </div>                    
                  </a>
               </div>
                </div> <!-- /folio-item -->

            

            <!-- modal popups - begin
            ============================================================= -->
            <div id="modal-01" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/img1.png" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>Pagina Web Institucional</h4>		      
                      <p>Pagina Web Institucional realizada al Instituto Tecnico Del Saber, utilizando el framework de Laravel.</p>

                      <div class="categories"> Framework Laravel</div>			               
                   </div>

                 <div class="link-box">
                    <a href="https://institutointesa.edu.co/">Visita la pagina</a>
                      <a href="#" class="popup-modal-dismiss">Cerrar</a>
                 </div>		      

               </div> <!-- /modal-01 -->

               <div id="modal-02" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/img3.png" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>Pagina Web Preicfes</h4>		      
                      <p>Pagina Web que oferta cursos preicfes realizada al Instituto Tecnico Del Saber.</p>

                      <div class="categories">Framework React</div>			               
                   </div>

                 <div class="link-box">
                    <a href="https://presaber.institutointesa.edu.co/">Visita la pagina</a>
                      <a href="#" class="popup-modal-dismiss">Cerrar</a>
                 </div>		      

               </div> <!-- /modal-02 -->

               <div id="modal-03" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/img4.png" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>Aplicación Web para el Control de Asistencia</h4>		      
                      <p>Aplicación Web para el Control de Asistencia de todos los estudiantes que asistieron a clase... consta de un codigo generado que luego el docente introduce y realiza el proceso de toma de asistencia.</p>

                      <div class="categories">Framework Laravel</div>			               
                   </div>

                 <div class="link-box">
                    <a href="https://asistencia.institutointesa.edu.co/login">Visita la pagina</a>
                      <a href="#" class="popup-modal-dismiss">Cerrar</a>
                 </div>		      

               </div> <!-- /modal-03 -->

               <div id="modal-04" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/img2.png" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>Aplicación Web para el Control de Notas</h4>		      
                      <p>Aplicación Web para el registro y control de notas de los estudiantes de INTESA.</p>

                      <div class="categories">Framework Laravel</div>			               
                   </div>

                 <div class="link-box">
                    <a href="https://campus.institutointesa.edu.co/login">Visita la pagina</a>
                      <a href="#" class="popup-modal-dismiss">Close</a>
                 </div>		      

               </div> <!-- /modal-04 -->

               <div id="modal-05" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/img5.png" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>CAMPUS VIRTUAL Intesa</h4>		      
                      <p>Registro, gestion y control de clases.</p>

                      <div class="categories">Framework Laravel & Moodle</div>			               
                   </div>

                 <div class="link-box">
                    <a href="https://campus.institutointesa.edu.co/login">Visita la pagina</a>
                      <a href="#" class="popup-modal-dismiss">Close</a>
                 </div>		      

               </div> <!-- /modal-05 -->

               <div id="modal-06" class="popup-modal slider mfp-hide">	

                     <div class="media">
                         <img src="images/portfolio/modals/m-salad.jpg" alt="" />
                     </div>      	

                   <div class="description-box">
                      <h4>Salad</h4>		      
                      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>

                      <div class="categories">Branding</div>			               
                   </div>

                 <div class="link-box">
                    <a href="http://www.behance.net">Details</a>
                      <a href="#" class="popup-modal-dismiss">Close</a>
                 </div>		      

               </div> <!-- /modal-06 -->


               <!-- modal popups - end
            ============================================================= -->

         </div> <!-- /portfolio-wrapper --> 

       </div>  <!-- /twelve -->   

   </div> <!-- /portfolio-content --> 
    
</section> <!-- /portfolio --> 


	<!-- CTA Section
   ================================================== -->
   <section id="cta" class="grey-section">

    <div class="row cta-content">

        <div class="col-twelve section-ads">  

              <h2 class="h01"><a href="#">¡No Olvides!</a></h2>

           <p class="lead">
            "La programación te invita a pensar en grande y a materializar tus sueños a través del código."
             <!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
             </p>

             <div class="action">
               <a class="button button-primary large" href="#">Gracias por Visitar mi Perfil.</a>
           </div>		     	

        </div>

    </div> <!-- /cta-content -->

</section> <!-- /cta --> 








<div id="preloader"> 
    <div id="loader"></div>
</div> 

          <!-- Java Script
   ================================================== --> 
   <script src="{{ env('APP_URL') }}js/jquery-2.1.3.min.js"></script>
   <script src="{{ env('APP_URL') }}js/plugins.js"></script>
   <script src="{{ env('APP_URL') }}js/main.js"></script>

    </body>
</html>
