<section class="d7l-footer-29-main py-5">
   <div class="footer-29 py-lg-4 py-md-3">
      <div class="container">
         <div class="d-grid grid-col-4 footer-top-29">
            <div class="footer-list-29 footer-1">
               <h6 class="footer-title-29">Encuentranos en</h6>
               <ul>
                  <li><p><span class="fa fa-map-marker"></span> Ave. San Ignacio #123 Esq. Alejandra, Fracc San Ignacio 34030, Dgo, MEX</p></li>
                  <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(52)-618-131-1897</a></li>
                  <li><a href="mailto:coffee@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> aluneando@gmail.com</a></li>
               </ul>
               <div class="main-social-footer-29">
                  <a href="https://www.facebook.com/profile.php?id=100085869615811" target="_blank" class="facebook"><span class="fa fa-facebook"></span></a>
                  <!-- <a href="#twitter" target="_blank" class="twitter"><span class="fa fa-twitter"></span></a> -->
                  <a href="https://goo.gl/maps/7isRFCAw8ARvsU8G9" target="_blank" class="map"><span class="fa fa-map-marker"></span></a>
                  <a href="https://www.instagram.com/aluncafe_dgo/" target="_blank" class="instagram"><span class="fa fa-instagram"></span></a>
               </div>
            </div>
            <div class="footer-list-29 footer-2">
               <ul>
                  <h6 class="footer-title-29">Miscelaneos</h6>
                  <li><a href="menu.php">Formas de comprar</a></li>
                  <li><a href="menu.php">Comunidad</a></li>
                  <li><a href="menu.php">Alianzas</a></li>
                  <li><a href="menu.php">Trabaja con nosotros</a></li>
                  <li><a href="menu.php">Dudas y soporte</a></li>
               </ul>
            </div>
            <div class="footer-list-29 footer-3">
               <h6 class="footer-title-29">Suscribete</h6>
               <p>Recibe en tu correo nuestras exclusivas</p>
               <p class="mb-3">ofertas y promociones semanales!</p>
               <form action="#" class="subscribe" method="post">
                  <input type="email" name="email" placeholder="Email" required="">
                  <button><span class="fa fa-envelope-o"></span></button>
               </form>
               <!-- <p>ofertas y promociones semanales!</p> -->
               <p>Nunca compartiremos tu e-mail</p>
            </div>
            <div class="footer-list-29 footer-4">
               <ul>
                  <h6 class="footer-title-29">Enlaces</h6>
                  <li><a href="menu.php">Inicio</a></li>
                  <li><a href="menu.php">Sobre Alun</a></li>
                  <li><a href="menu.php">Nuestro menú</a></li>
                  <li><a href="menu.php">Blog</a></li>
                  <li><a href="menu.php">Contacto</a></li>
               </ul>
            </div>
         </div>
         <div class="d-grid grid-col-2 bottom-copies">
            <p class="copy-footer-29">© <?php echo date("Y"); ?> Alun Café. Derechos reservados | Sitio por <a href="https://207labz.com"> 207 Labz</a></p>
            <ul class="list-btm-29">
               <li><a href="#">Aviso de privacidad</a></li>
               <li><a href="#">Condiciones de Uso</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- move top -->
   <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
   </button>
   <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = () => {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
           document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
   </script>
   <!-- /move top -->
</section>