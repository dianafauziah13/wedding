<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Weeding Invitation</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@1.0.0/dist/css/style.min.css" />-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@2.1.0/dist/css/style.min.css"
    />
    <link rel="stylesheet" href="css/custom.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script src="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@1.0.0/dist/js/countdown.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@1.0.0/dist/js/animation.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.1.min.js"
      integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
      integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </head>
  <body>
    <div class="inv-envelope">
      <div class="inv-envelope-content-wrapper">
        <div class="inv-envelope-groom-name">Narisha & Rizal</div>
        <div class="inv-envelope-date-of-event">14 Mei 2023</div>
        <div class="inv-envelope-attende-wrapper">
          <p>Kepada Yth.<br />Bapak/Ibu/Saudara/i:</p>
          <div class="inv-envelope-attende-name">-</div>
          <div class="inv-envelope-attende-purpose">Tanpa Mengurangi Rasa Hormat Kami Mengundang Anda <br> Untuk Hadir di Acara Pernikahan Kami</div>
        </div>
        <button id="open-env" class="btn-open-env">Buka Undangan</button>
      </div>
    </div>

    <div class="inv-banner banner-fullheight banner-first">
      <p class="title">Narisha & Rizal</p>
      <p class="subtitle">&emsp;Menuju Hari Bahagia&emsp;</p>
      <div class="grid-wrapper">
        <div class="counter-grid">
          <div class="inv-grid grid-flex grid-container">
            <div class="inv-grid grid-parent grid-vertical">
              <div class="inv-grid">
                <div class="inv-grid grid-flex grid-parent countdown-container">
                  <div class="grid-node countdown-box" id="cntd-d-1">
                    <div class="countdown-digit" id="cntd-d-1-now">0</div>
                  </div>
                  <div class="grid-node countdown-box" id="cntd-d-2">
                    <div class="countdown-digit" id="cntd-d-2-now">0</div>
                  </div>
                  <div class="grid-node countdown-box" id="cntd-d-3">
                    <div class="countdown-digit" id="cntd-d-3-now">0</div>
                  </div>
                </div>
              </div>
              <div class="inv-grid grid-flex grid-parent countdown-text">
                Hari
              </div>
            </div>
            <div class="inv-grid grid-parent grid-vertical">
              <div class="inv-grid">
                <div class="inv-grid grid-flex grid-parent inv-countdown">
                  <div class="grid-node countdown-box" id="cntd-h-1">
                    <div class="countdown-digit" id="cntd-h-1-now">0</div>
                  </div>
                  <div class="grid-node countdown-box" id="cntd-h-2">
                    <div class="countdown-digit" id="cntd-h-2-now">0</div>
                  </div>
                </div>
              </div>
              <div class="inv-grid grid-flex grid-parent countdown-text">
                Jam
              </div>
            </div>
            <div class="inv-grid grid-parent grid-vertical">
              <div class="inv-grid">
                <div class="inv-grid grid-flex grid-parent inv-countdown">
                  <div class="grid-node countdown-box" id="cntd-m-1">
                    <div class="countdown-digit" id="cntd-m-1-now">0</div>
                  </div>
                  <div class="grid-node countdown-box" id="cntd-m-2">
                    <div class="countdown-digit" id="cntd-m-2-now">0</div>
                  </div>
                </div>
              </div>
              <div class="inv-grid grid-flex grid-parent countdown-text">
                Menit
              </div>
            </div>
            <div class="inv-grid grid-parent grid-vertical">
              <div class="inv-grid">
                <div class="inv-grid grid-flex grid-parent inv-countdown">
                  <div class="grid-node countdown-box" id="cntd-s-1">
                    <div class="countdown-digit" id="cntd-s-1-now">0</div>
                  </div>
                  <div class="grid-node countdown-box" id="cntd-s-2">
                    <div class="countdown-digit" id="cntd-s-2-now">0</div>
                  </div>
                </div>
              </div>
              <div class="inv-grid grid-flex grid-parent countdown-text">
                Detik
              </div>
            </div>
          </div>
        </div>
        <button id="reservation-btn" class="reservation-btn">RSVP</button>
      </div>
    </div>

    <!-- <div class="story-wrapper">
      <div class="inv-row">
        <div class="inv-column-6 wrapper-title inv-reveal">Our Story</div>
        <div class="inv-column-6 wrapper-content inv-scale">
          <p>
            Steve receives an urgent mission to recover stolen treasures. After
            Steve finishes his mission, he went to the party and accidentally
            introduces himself as Qory's husband. After a period of time, they
            leave the party. Steve apologizes for what he said and Qory tries to
            propose an idea, but she got interrupted by a car slamming into
            them. Steve convinces that their pursuers are patients suffering
            from hysteria. While running, Qory proposes that they get married as
            an extension of his condition. Steve agrees and tries to find the
            diamond ring to propose to her but discovers it to be lost. He
            notices a nearby grenade and grabs it, he pulls the pin and hurls
            the grenade at the smugglers while using the pin as a makeshift
            engagement ring
          </p>
          <p class="quotes">
            ♥&ensp;"For better or for worse... for richer or poorer... in good
            times and in bad, in sickness and in health...
            <b>I pledge myself to you</b>" &ensp;(Steve to Qory)
          </p>
        </div>
      </div>
    </div> -->

    <div class="gap-wrapper">
      <div class="inv-row">
        <div class="inv-column-6 inv-reveal">
          14<sup>th</sup> May 2023
          <p class="gap-location">Cianjur, Jawa Barat</p>
        </div>
      </div>
    </div>

    <div class="bride-wrapper">
      <div class="inv-row">
        <div class="inv-column-6 wrapper-title inv-reveal">
          Mempelai Pria & Wanita
        </div>
        <div class="inv-grid grid-parent">
          <div class="inv-grid grid-parent">
            <div
              class="inv-grid grid-node inv-reveal-rand"
              style="
                position: relative;
                transform: translateY(0px);
                opacity: 1;
                transition: all 1s ease 0s;
              "
            >
              <center>
                <figure class="inv-image bride-photo">
                  <!-- <img class="has-ratio" width="200" src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/02/24/180111210.jpg" /> -->
                  <img class="is-rounded inv-spin" src="images/ansor.png" />
                </figure>
                <span class="bride-name">Rizal Ansor</span>
                <p class="bride-description">
                  Putra kedua dari Bapak Nanang Gopar dan Ibu Eti
                </p>
                <p class="bride-social">
                  <!-- <i class="fa-brands fa-instagram"></i>
                  <i class="fa-brands fa-twitter"></i>
                  <i class="fa-brands fa-facebook"></i> -->
                </p>
              </center>
            </div>
          </div>
          <div class="inv-grid grid-parent">
            <div
              class="inv-grid grid-node inv-reveal-rand"
              style="
                position: relative;
                transform: translateY(0px);
                opacity: 1;
                transition: all 1s ease 0s;
              "
            >
            <center>
              <figure class="inv-image bride-photo">
                <!-- <img class="has-ratio" width="200" src="https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/02/24/180111210.jpg" /> -->
                <img class="is-rounded inv-spin" src="images/narisha.png" />
              </figure>
              <span class="bride-name">Narisha Nurzain Widaya</span>
              <p class="bride-description">
                Putri ketiga dari Bapak Yudi Yohanda Widaya dan Ibu Nani Mulyani
              </p>
              <p class="bride-social">
                <!-- <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i> -->
              </p>
            </center>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="gallery-wrapper">
      <div class="inv-row">
        <div class="inv-column-6 wrapper-title inv-reveal-rand">
          Our Gallery
        </div>
        <div class="inv-column-6 wrapper-content inv-reveal-rand">
          <p>I’m always counting on you for the things that I can’t do</p>
        </div>
        <div class="inv-column-6 grid-gallery">
          <div class="inv-grid grid-vertical">
            <div class="inv-grid grid-parent">
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-1.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-2.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-3.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-4.png" />
                  </figure>
                </div>
              </div>
            </div>
            <div class="inv-grid grid-parent">
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-5.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-6.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-7.png" />
                  </figure>
                </div>
              </div>
              <div class="inv-grid grid-parent">
                <div class="inv-grid grid-node inv-reveal-rand">
                  <figure class="inv-image is-md-width-rectangle">
                    <img width="800" src="images/gallery-8.png" />
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="location-wrapper">
      <div class="inv-grid grid-parent">
        <div class="inv-grid grid-parent">
          <div class="inv-grid grid-node location-info wrapper-content">
            <div class="location-titler-inv-reveal inv-reveal">Waktu dan Tempat</div>
            <div class="location-subtitler">
              <div class="inv-reveal">
                Dengan mengucap syukur atas kehadirat Allah SWT dan dengan segenap kerendahan hati, tanpa mengurangi rasa hormat. Kami mohon doa dan restu dari Bapak/Ibu/Saudara/i untuk hadir dihari bahagia Pernikahan kami yang akan dilaksanakan pada :
                <p>
                  Kp. Manglid RT.03 RW. 01 Desa Jati
                  <br />
                  Kecamatan Bojongpicung Kabupaten Cianjur
                </p>
              </div>

              <div class="inv-reveal">
               
                <p class="wide-p">
                  Akad nikah :  09:30 <span class="time"> </span>
                  AM — 10:00
                  <span class="time">  </span>
                  PM
                  <br />
                  Resepsi : 10:00 AM <span class="time">  </span>
                  — 15:00 
                  <span class="time">  </span>
                  PM
                </p>
              </div>
            </div>
          </div>
          <div class="inv-grid grid-parent">
            <div class="inv-grid grid-node">
              <div class="inv-card rsvp-card inv-reveal">
                <div class="card-content">
                  <span class="form-title">Konfirmasi</span>
                  <span class="form-subtitle"
                    >Harap lengkapi formulir berikut</span
                  >
                  <div class="form-input">
                    <div class="inv-column-6">
                      <input
                        class="inv-input"
                        type="text"
                        placeholder="Nama"
                        name=""
                        id=""
                      />
                    </div>
                    <div class="inv-column-6">
                      <input
                        class="inv-input"
                        type="email"
                        placeholder="Email"
                        name=""
                        id=""
                      />
                    </div>
                    <div class="inv-column-6">
                      <div
                        class="inv-select"
                        style="width: 100%; margin-bottom: 1rem"
                      >
                        <select style="width: 100%">
                          <option value="" title="">Akan Hadir?</option>
                          <option value="" title="">Hadir</option>
                          <option value="" title="">Tidak Hadir</option>
                        </select>
                      </div>
                    </div>
                    <div class="inv-column-6">
                      <textarea
                        class="inv-textarea"
                        name=""
                        id=""
                        placeholder="Pesan"
                        rows="5"
                      ></textarea>
                    </div>
                    <button class="inv-button is-aqua is-fullwidth">
                      Kirim
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.234656017059!2d107.23495731477259!3d-6.86245709504082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTEnNDQuOSJTIDEwN8KwMTQnMTMuNyJF!5e0!3m2!1sid!2sid!4v1683512016971!5m2!1sid!2sid"
      width="100%"
      height="500"
      frameborder="0"
      style="border: 0"
    ></iframe>

    <div class="thank-wrapper">
      <div class="inv-row">
        <div class="inv-column-6">
          <div class="inv-reveal">
            Merupakan Kebahagiaan Bagi Kami Apabila Anda Berkenan Hadir Pada
            Acara Pernikahan Kami.
          </div>
          <p class="thank-name inv-reveal">Narisha & Rizal</p>
        </div>
      </div>
    </div>

    <!-- <div class="slider-wrapper">
      <div class="inv-slider">
        <div class="inv-slides">
          <input type="radio" name="radio-btn" id="inv-radio1" />
          <input type="radio" name="radio-btn" id="inv-radio2" />
          <input type="radio" name="radio-btn" id="inv-radio3" />
          <input type="radio" name="radio-btn" id="inv-radio4" />
          <input type="radio" name="radio-btn" id="inv-radio5" />
          <div class="inv-navigation-arrow">
            <div class="navigation-box">
              <div class="left-arrow">
                <span id="navigation-prev">
                  <i class="fas fa-chevron-circle-left fa-3x"></i>
                </span>
              </div>
              <div class="right-arrow">
                <span id="navigation-next">
                  <i class="fas fa-chevron-circle-right fa-3x"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="inv-slide first">
            <img src="images/slider-1.png" alt="slider-1" />
          </div>
          <div class="inv-slide">
            <img src="images/slider-2.png" alt="slider-2" />
          </div>
          <div class="inv-slide">
            <img src="images/slider-3.png" alt="slider-3" />
          </div>
          <div class="inv-slide">
            <img src="images/slider-4.png" alt="slider-4" />
          </div>
          <div class="inv-slide">
            <img src="images/slider-5.png" alt="slider-5" />
          </div>
        </div>
        <div class="inv-navigation">
          <label for="radio1" class="inv-navigation-btn active"></label>
          <label for="radio2" class="inv-navigation-btn"></label>
          <label for="radio3" class="inv-navigation-btn"></label>
          <label for="radio4" class="inv-navigation-btn"></label>
          <label for="radio5" class="inv-navigation-btn"></label>
        </div>
      </div>
    </div> -->

    <!-- <div class="video-wrapper">
      <div class="inv-row">
        <div class="inv-column-6">
          <div class="inv-video-container show-controls" id="video_1">
            <div class="wrapper">
              <div class="inv-timeline">
                <div class="inv-progress">
                  <span>00:00</span>
                  <div class="inv-progress-bar"></div>
                </div>
              </div>
              <ul class="inv-video-controls">
                <li class="options left">
                  <button class="volume">
                    <i class="fa-solid fa-volume-high"></i>
                  </button>
                  <div class="inv-video-timer">
                    <p class="time-current">00:00</p>
                    <p class="separator">/</p>
                    <p class="time-end">00:00</p>
                  </div>
                </li>
                <li class="options center">
                  <button class="inv-vctr-seek-back">
                    <i class="fas fa-backward"></i>
                  </button>
                  <button class="inv-vctr-play-pause">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="inv-vctr-seek-forward">
                    <i class="fas fa-forward"></i>
                  </button>
                </li>
                <li class="options right">
                  <div class="inv-video-playback">
                    <button class="inv-vctr-playback">
                      <span class="material-symbols-outlined"
                        >slow_motion_video</span
                      >
                    </button>
                    <ul class="speed-options">
                      <li data-speed="2">2x</li>
                      <li data-speed="1.5">1.5x</li>
                      <li data-speed="1" class="active">1x</li>
                      <li data-speed="0.75">0.75x</li>
                      <li data-speed="0.5">0.5x</li>
                    </ul>
                  </div>
                  <button class="inv-vctr-fullscreen">
                    <i class="fa-solid fa-expand"></i>
                  </button>
                </li>
              </ul>
            </div>
            <video src="video/video_1.mp4" class="inv-video"></video>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-wrapper">
      <div class="inv-grid grid-parent">
        <div class="inv-grid grid-parent">
          <div class="inv-grid grid-node footer-data">
            Contact Us
            <br>
            <span>
              <a class="elementor-icon footer-anchor" href="https://api.whatsapp.com/send/?phone=6287708250582&text=Saya+tertarik+dengan+produk%20website%20undangan+yang+Anda+kembangkan&type=phone_number&app_absent=0" target="_blank">
                <i aria-hidden="true" class="fab fa-whatsapp"></i> WhatsApp</a>
            </span>
          </div>
        </div>
        <!-- <div class="inv-grid grid-parent">
          <div class="inv-grid grid-node footer-data">
            Social Links
            <span>
              <p class="footer-social">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook"></i>
              </p>
            </span>
          </div>
        </div> -->
        <div class="inv-grid grid-parent">
          <div class="inv-grid grid-node footer-data">
            Email
            <span>
              <a class="footer-anchor" href="mailto:support@resepsi-digital.my.id" target="_blank">support@resepsi-digital.my.id</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <footer class="invite-footer">
      <div class="inv-column-6 footer-copy">
        &copy; 2023 by Resepsi Digital. All Rights Reserved.
      </div>
    </footer>

    <audio>
      <source src="audio/NOTHINGS GONNA CHANGE MY LOVE FOR YOU  GLENN MEDEIROS.mp3" type="audio/mp3" />
    </audio>

  <script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"
  ></script>
  <script src="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@2.1.0/dist/js/music_envelope.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@2.1.0/dist/js/video.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/MuhammadRasyidF/Invite-CSS@2.1.0/dist/js/slider.js"></script>
  <script src="js/script.js"></script>
  <script>
    $(".grid-node").click(function (event) {
      var clickedElement = event.target;
      var src = $(clickedElement).attr("src");
      $(".inv-modal").find("img").attr("src", src);
      $(".inv-modal").addClass("is-active");
    });

    $(".modal-close").click(function () {
      $(".inv-modal").removeClass("is-active");
    });

    $(".modal-background").click(function () {
      $(".inv-modal").removeClass("is-active");
    });
    const video_1 = new VideoContainer("#video_1");
    const slider = new InvSlider(5, 4000);
  </script>
</html>
