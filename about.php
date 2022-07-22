<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cardo&family=Inter&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Document</title>
  </head>
  <body>
    <div class="page">

      <?php include 'header.php'; ?>
      
      <main class="main">
      <section class="section section__about">
          <div class="container">
            <div class="about__body">
              <div class="section__row about__row">
                <div class="section__item about__item-img">
                  <img
                    src="img/dest/about/man-with-book.jpg"
                    alt="man-with-books"
                    title="man-with-books"
                  />
                </div>
                <div class="section__item about__item-content">
                  <div class="section__title about__title">
                    <h2>About the Author</h2>
                  </div>
                  <div class="section__text about__text">
                    <p>
                      We believe that bookstores are essential to a healthy
                      culture. They’re where authors can connect with readers,
                      where we discover new writers, where children get hooked
                      on the thrill of reading that can last a lifetime.
                    </p>
                  </div>
                  <div class="section__row about__examles__row">
                    <div class="about__examle">
                      <div class="about__example-number">02</div>
                      <div class="about__example-text">Books Published</div>
                    </div>
                    <div class="about__examle">
                      <div class="about__example-number">4.5</div>
                      <div class="about__example-text">User Reviews</div>
                    </div>
                    <div class="about__examle">
                      <div class="about__example-number">04</div>
                      <div class="about__example-text">Best Seller Awards</div>
                    </div>
                  </div>

                  <div class="about__qr-container">
                    <div class="about__qr-code">
                      <img
                        src="img/dest/icons/qr-code.svg"
                        alt="qr-code"
                        title="qr-code"
                      />
                    </div>
                    <div class="about__qr-content">
                      <div class="about__author-name">John Abraham , Ph.d</div>
                      <div class="about__adress">
                        <p>Mail: johnabraham@gmail.com</p>
                        <p>Phone:(+2) 123 545 9000</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="section section__best">
          <div class="container">
            <div class="best__body">
              <div class="section__title best__title wow animate__animated animate__fadeInUp data-wow-delay="0s">
                <h2>Trusted By The Best</h2>
              </div>
              <div class="section__row best__row wow animate__animated animate__fadeInUp data-wow-delay="0.4s">
                <div class="best__item">
                  <div class="best__item-icon">
                    <img
                      src="img/dest/best/amazen-corporation.svg"
                      alt="amazen-corporation"
                      title="amazen-corporation"
                    />
                  </div>
                  <div class="best__item-sign">Amazen Corp.</div>
                  <div class="section__text best__item-text">
                    <p>
                      They has been helping readers, music lovers, and
                      videophiles find quality material.
                    </p>
                  </div>
                </div>

                <div class="best__item">
                  <div class="best__item-icon">
                    <img
                      src="img/dest/best/megan-books.svg"
                      alt="megan-books"
                      title="megan-books"
                    />
                  </div>
                  <div class="best__item-sign">Megan Books</div>
                  <div class="section__text best__item-text">
                    <p>
                      We help physical bookstores manage their overstock to the
                      book inventory.
                    </p>
                  </div>
                </div>

                <div class="best__item">
                  <div class="best__item-icon">
                    <img
                      src="img/dest/best/megan-k.svg"
                      alt="megan-k"
                      title="megan-k"
                    />
                  </div>
                  <div class="best__item-sign">Megank</div>
                  <div class="section__text best__item-text">
                    <p>
                      Bookstore serving up the full spectrum of Black literature
                      and wine black books..
                    </p>
                  </div>
                </div>

                <div class="best__item">
                  <div class="best__item-icon">
                    <img
                      src="img/dest/best/urban-store.svg"
                      alt="urban-store"
                      title="urban-store"
                    />
                  </div>
                  <div class="best__item-sign">Urban Store</div>
                  <div class="section__text best__item-text">
                    <p>
                      We also carry the latest records, issues of all of your
                      favorite comic books.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="section section__getbook">
          <div class="container">
            <div class="getbook__body">
              <div class="section__row getbook__row">
                <div class="getbook__item-content">
                  <div class="section__title getbook__title">
                    <h2>Get Book Copy Today!</h2>
                  </div>
                  <div class="section__text getbook__text">
                    <p>
                      We believe that bookstores are essential to a healthy
                      culture. They’re where authors can connect with readers.
                    </p>
                  </div>
                  <div class="btn btn__small btn__opaccity getbook__btn">
                    Order Today
                  </div>
                </div>
                <div class="getbook__item-img">
                  <img
                    src="img/dest/getbook/cup-with-book.jpg"
                    alt="cup-with-book"
                    title="cup-with-book"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <?php include 'footer.php'; ?>
    </div>

    <script src="build/js/wow.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/app.min.js"></script>
  </body>
</html>



       