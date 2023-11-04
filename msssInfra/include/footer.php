<footer>
      <div class="container py-5">
        <div class="row mb-3">

          <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-2 mt-lg-0">
            <div class="footer-logo">
              <img src="images/logonew.png" class="object-contain" alt="">
            </div>
            <p class="paragraph text-dark">At MTEM Construction Site, we're committed to excellence in construction. With over 23
              successful
              projects and a skilled team of 52 professionals, we bring your vision to life.</p>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-2 mt-lg-0">
            <ul class="footer-list paragraph text-dark">
              <li class="mb-3 h5">CONTACT INFO</li>
              <li class="my-2">
                <div class="d-flex justify-content-left align-items-center">
                  <i class="fa-solid fa-location-dot mr-3"></i>
                  <p>VELACHERY MAIN ROAD
                    PALLIKARANAI CHENNAI.</p>
                </div>
              </li>
              <li class="my-2">
                <div class="d-flex justify-content-left align-items-center">
                  <i class="fa-regular fa-envelope mr-3"></i>
                  <p>motherteam12@gmail.com</p>
                </div>
              </li>
              <li class="my-2">
                <div class="d-flex justify-content-left align-items-center">
                  <i class="fa-solid fa-phone mr-3"></i>
                  <p>044 22462404 <br> +91 9941398969</p>
                </div>
              </li>

            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-2 mt-lg-0">
            <ul class="footer-list paragraph text-dark">
              <li class="mb-3 h5">Useful Links</li>
              <li class="my-2 services-points">
                <i class="play-bulletin"></i>
                <a href="#">
                  Construction Works
                </a>
              </li>
              <li class="my-2 services-points">
                <i class="play-bulletin"></i>
                <a href="#">
                  Material Supply
                </a>
              </li>
              <li class="my-2 services-points">
                <i class="play-bulletin"></i>
                <a href="#">
                  Foundation Works
                </a>
              </li>
              <li class="my-2 services-points">
                <i class="play-bulletin"></i>
                <a href="#">
                  Demolition Work
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 mt-3 mt-md-2 mt-lg-0">
            <ul class="footer-list">
              <li class="mb-3 h5">News Letter</li>
            </ul>
            <p class="mb-3 paragraph text-dark">Subscrible to our news letter to get our latest projects</p>
            <div class="d-flex custom-form-group">
              <input type="text" class="form-control" placeholder="Enter your email">
              <button class="btn btn-dark-blue">Submit</button>
            </div>
          </div>

        </div>
      </div>



      <div class="">
        <div class="container border-dark border-top py-2">
          <div class="row">
            <div class="col-lg-8 text-sm-center">
              <p>Copyright © 2023. All Rights Reserved. Designed with ❤ by Q Brainstorm Software</p>
            </div>
            <div class="col-lg-4 text-sm-center">
              <div class="pt-2 pt-md-0">
                <a href="#" class="mx-3"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="mx-3"><i class="fa-brands fa-twitter"></i> </a>
                <a href="#" class="mx-3"><i class="fa-brands fa-linkedin"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </main>
  <script src="js/script.js"></script>
  <script src="js/parallax.min.js"></script>
  <script>
    $('.parallax-window').parallax({ imageSrc: 'images/scroll-bg.webp' });
    // $('.js-main-slider').pogoSlider();

    // Get the element to display
    const elementToDisplay = document.querySelector('.floating-nav');

    // Event listener for scrolling
    window.addEventListener('scroll', () => {
      const scrollPosition = window.scrollY;
      if (scrollPosition >= 200) {
        elementToDisplay.classList.remove('navbar-hide');
      } else {
        elementToDisplay.classList.add('navbar-hide');
      }
    });
    $('.floating-nav-projects').on('click',function (){
      console.log('working')
      $('.float-nav-link').show()
      $('.floating-projects-link').show()
    })
  </script>
  <script>

  </script>
</body>

</html>