<!DOCTYPE html>
<html lang="en">
  <head>   
     <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar theme">
      <div class="inner-width">
        <button class="menu-toggler">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navbar-menu">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#school">School/Werk</a>
          <a href="#Projects">Projects</a>
          <a href="#contact">Contact</a>
          <button class="theme-changer">Theme</button>
        </div>
      </div>
    </nav>

    <!-- Home -->
    <section id="home">
      <div class="inner-width">
        <div class="content">
          <h1>Hi I'm</h1>
          <div class="sm">
            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
            <a
              href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
              class="fab fa-youtube"
            ></a>
          </div>
          <div class="buttons">
            <a href="#contact">Contact me</a>
            <a href="#Projects">Projects</a>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="theme">
      <div class="inner-width theme">
        <h1 class="section-title">About</h1>
        <div class="about-content theme">
          <img src="images/peepoPooPoo.png" alt="" class="about-pic" />
          <div class="about-text">
            <h2 class="theme">Hi! I'm Alex Immink</h2>
            <h3>
              <span>Developer</span>
              <span>Gamer</span>
            </h3>
            <p class="theme">
              Ik doe nu de opleiding Software Developer MBO op niveau 4 Tot nu
              toe heb ik geleerd om in C#,HTML,css en javascript te schrijven.
              Ik heb deze opleiding gekozem omdat ik graag met computers werk en
              meer wil weten wat allemaal gebeurd dat de gebruiken zelf niet kan
              zien. Ik zit nu bijna een heel schooljaar en ik vind het super
              leuk.
            </p>
          </div>
        </div>

        <div class="skills">
          <div class="skill">
            <div class="skill-info">
              <span>HTML</span>
              <span>60%</span>
            </div>
            <div class="skill-bar html"></div>
          </div>

          <div class="skill">
            <div class="skill-info">
              <span>CSS</span>
              <span>60%</span>
            </div>
            <div class="skill-bar css"></div>
          </div>

          <div class="skill">
            <div class="skill-info">
              <span>Javascript</span>
              <span>60%</span>
            </div>
            <div class="skill-bar js"></div>
          </div>

          <div class="skill">
            <div class="skill-info">
              <span>C#</span>
              <span>50%</span>
            </div>
            <div class="skill-bar cs"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- School/Werk -->
    <section id="school" class="theme">
      <div class="inner-width">
        <h1 class="section-title">School & Werk</h1>
        <div class="time-line">
          <div class="block">
            <h4>2020 - 2021</h4>
            <h3>Software Developer</h3>
            <p>Dit is mijn eerste jaar over Software Development leren</p>
          </div>
        </div>
      </div>
    </section>


<?php foreach($project as $projects): ?>
<div class="cards">
        <div class="card">
        <h2 class="card-title"><?= $project->name; ?></h2>
            <img src="<?= $project->img; ?>" alt="een code snippet">
            <p class="card-desc"><?= $project->description; ?></p>
</div>
</div>
    <?php endforeach; ?>

    <!--Projects-->
    <section id="Projects" class="dark">
      <div class="inner-width">
        <h1 class="section-title">Projects</h1>
        <div class="works">
          <a href="/templates/calculator.html" class="projects">
            <img src="images/calculator.png" alt="" />
            <div class="info">
              <h3>Rekenmachine</h3>
              <div class="cat">
                Rekenmachine die ik heb gemaakt voor een school project
              </div>
            </div>
          </a>

          <a href="https://github.com/AImmink/zuzu" class="projects">
            <img src="images/Sushi.jpg" alt="" />
            <div class="info">
              <h3>zuzu</h3>
              <div class="cat">
                Zuzu van school
              </div>
            </div>
          </a>
      
          <a href="/templates/bke.html" class="projects">
            <img src="images/tictactoe.png" alt="" />
            <div class="info">
              <h3>Tic Tac Toe</h3>
              <div class="cat">
                Tic Tac Toe game die ik heb gemaakt voor een school project
              </div>
            </div>
            </div>
          </a>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section id="contact" class="theme">
      <div class="inner-width">
        <h1 class="section-title">Contact</h1>
        <div class="contact-info">
          <div class="item">
            <i class="fas fa-mobile-alt"></i>
            +31 06 123456789
          </div>

          <div class="item">
            <i class="fas fa-envelope"></i>
            email@gmail.com
          </div>

          <div class="item">
            <i class="fas fa-map-marker-alt"></i>
            Den Haag, Netherlands
          </div>
        </div>

        <form action="#" class="contact-form">
          <input type="text" class="nameZone" placeholder="Your Full Name" />
          <input type="email" class="emailZone" placeholder="Your Email" />
          <input type="text" class="subjectZone" placeholder="Subject" />
          <textarea class="messageZone" placeholder="Message"></textarea>
          <input type="submit" value="Send Message" class="btn" />
        </form>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="inner-width">
        <div class="copyright">
          &copy; 2021 | Created & Designed By <a href="#">Alex Immink</a>
        </div>
        <div class="sm">
          <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
          <a
            href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
            class="fab fa-youtube"
          ></a>
        </div>
      </div>
    </footer>

    <!-- Go Top BTN -->
    <button class="goTop fas fa-arrow-up"></button>
  </body>
</html>
