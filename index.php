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
        <section class="section section__intro">
          <div class="container">
            <div class="intro__body">
              <div class="section__row intro__row">
                <div class="section__item intro__item-content">
                  <div class="intro__subtitle animate__animated animate__fadeInLeft data-wow-delay="0s">Welcome to Pages!!!</div>
                  <div class="main__title animate__animated animate__fadeInLeft data-wow-delay="0.2s"">
                    <h1>Your Books From The Best Writer.</h1>
                  </div>
                  <div class="section__text intro__text animate__animated animate__fadeInLeft data-wow-delay="0.4s"">
                    <p>
                      We believe that reading books are essential to a healthy
                      culture.
                    </p>
                    <p>They’re where authors can connect with readers.</p>
                  </div>
                  <div class="section__row intro__btns animate__animated animate__fadeInLeft data-wow-delay="0.6s"">
                    <div class="btn btn__small intro__btn">order today</div>
                    <a href="" class="intro__link-demo">Read Free Demo</a>
                  </div>
                  <div class="intro__examples animate__animated animate__fadeInLeft data-wow-delay="0.8s"">
                    <div class="intro__example-item">
                      <div class="intro__example-text">Pages:</div>
                      <div class="intro__example-number">250pages</div>
                    </div>
                    <div class="intro__example-item">
                      <div class="intro__example-text">Length:</div>
                      <div class="intro__example-number">10 Hours</div>
                    </div>
                    <div class="intro__example-item">
                      <div class="intro__example-text">Rating:</div>
                      <div class="intro__example-number">
                        4.5/5 (305 ratings)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="section__item intro__item-img wow animate__animated animate__fadeIn data-wow-delay="1s">
                  <img
                    src="img/dest/intro/oblogka-knigi.jpg"
                    alt="oblogka-knigi"
                    title="oblogka-knigi"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section section__author">
          <div class="container">
            <div class="author__body">
              <div class="section__title author__title wow animate__animated animate__fadeIn">
                <h2>The Author’s Book</h2>
              </div>
              <div class="section__row author__row">
                <div class="section__item author__item wow animate__animated animate__slideInLeft">
                  <div class="author__item-img">
                    <img
                      src="img/dest/author/book-atomic-ones.jpg"
                      alt="book-atomic-ones"
                      title="book-atomic-ones"
                    />
                  </div>
                  <div class="author__item-content">
                    <div class="author__content-title">Atomic One’s</div>
                    <div class="author__content-price">$ 13.84 USD</div>
                    <div class="section__text author__content-text">
                      <p>
                        As the book contains theoretical content as well as
                        solved questions.
                      </p>
                    </div>
                    <div class="author__content-printed">Printed Book</div>
                    <div
                      class="btn btn__small btn__opaccity author__content-btn"
                    >
                      Order Now
                    </div>
                  </div>
                </div>

                <div class="section__item author__item wow animate__animated animate__slideInRight">
                  <div class="author__item-img">
                    <img
                      src="img/dest/author/book-the-dark-light.jpg"
                      alt="book-the-dark-light"
                      title="book-the-dark-light"
                    />
                  </div>
                  <div class="author__item-content">
                    <div class="author__content-title">The Dark Light</div>
                    <div class="author__content-price">$ 86.11 USD</div>
                    <div class="section__text author__content-text">
                      <p>
                        As the book contains theoretical content as well as
                        solved questions.
                      </p>
                    </div>
                    <div class="author__content-printed">Printed Book</div>
                    <div
                      class="btn btn__small btn__opaccity author__content-btn"
                    >
                      Order Now
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section section__learn">
          <div class="container">
            <div class="learn__body">
              <div class="section__title learn__title wow animate__animated animate__fadeInUp data-wow-delay="0s">
                <h2>What Will You Learn?</h2>
              </div>
              <div class="section__row learn__row wow animate__animated animate__fadeInUp data-wow-delay="0.4s">
                <div class="learn__row-content">
                  <div class="section__row learn__content-items">
                    <div class="learn__content-item">
                      <div class="learn__content-number">01</div>
                      <div class="learn__content-text">
                        <p>
                          Use HDFS & Map Reduce for storing & analyzing data at
                          scale.
                        </p>
                      </div>
                    </div>
                    <div class="learn__content-item">
                      <div class="learn__content-number">02</div>
                      <div class="learn__content-text">
                        <p>
                          Consume streaming data using Spark Streaming, Flink,
                          and Storm.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="section__row learn__content-items">
                    <div class="learn__content-item">
                      <div class="learn__content-number">03</div>
                      <div class="learn__content-text">
                        <p>
                          Choose an appropriate data storage technology for your
                          application
                        </p>
                      </div>
                    </div>
                    <div class="learn__content-item">
                      <div class="learn__content-number">04</div>
                      <div class="learn__content-text">
                        <p>
                          Analyze non-relational data using HBase, Cassandra,
                          and MongoDB.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="learn__row-img">
                  <img
                    src="img/dest/learn/woman-with-book.jpg"
                    alt="woman-with-book"
                    title="woman-with-book"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section section__updates">
          <div class="container">
            <div class="updates__body">
              <div class="section__title updates__title">
                <h2>Get The Best Updates</h2>
              </div>
              <div class="section__text updates__text">
                <p>
                  Subscribe with your mail id to know the current update in book
                </p>
                <p>edition at your fingertip with in a minute.</p>
              </div>
              <form action="mail.php" method="post" class="form updates__form">
                <input
                  type="text"
                  class="form__input updates__input"
                  placeholder="Your Email ID..."
                />
                <div class="btn btn__big updates__btn">Subscribe</div>
              </form>
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
