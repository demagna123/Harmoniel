<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Harmoniel</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>
<body>
  <!-- Header -->
  <?php include 'navbar.php'; ?>

  <!-- Carousel -->
  <div class="carousel">
    <!-- List item -->
    <div class="list">
      <div class="item">
        <img src="./image/backgroud1.jpg" alt="Slide 1" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg2.jpg" alt="Slide 2" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg3.jpg" alt="Slide 3" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg4.jpg" alt="Slide 4" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg5.jpg" alt="Slide 5" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg6.jpg" alt="Slide 6" />
        <div class="content">
          <div class="author">Bienvenue sur Harmoniel</div>
          <div class="title">Eh les filles, Harmoniel est fait pour nous!</div>
          <div class="des">
            Prenez soin de vous naturellement avec <br>
            nos produits menstruels réutilisables.
          </div>
          <div class="buttons">
            <button>Nos Produits</button>
            <button>En Savoir Plus</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Thumbnails -->
    <div class="thumbnail">
      <div class="item">
        <img src="./image/backgroud1.jpg" alt="Thumbnail 1" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg2.jpg" alt="Thumbnail 2" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg3.jpg" alt="Thumbnail 3" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg4.jpg" alt="Thumbnail 4" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg5.jpg" alt="Thumbnail 5" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
      <div class="item">
        <img src="./image/bg6.jpg" alt="Thumbnail 6" />
        <div class="content">
          <div class="title">Harmoniel</div>
        </div>
      </div>
    </div>

    <!-- Next and Previous Buttons -->
    <div class="arrows">
      <button id="prev"><</button>
      <button id="next">></button>
    </div>

    <!-- Time Running -->
    <div class="time"></div>
  </div>

  <!-- Section Nos Produits -->
  <section class="nos-produits">
    <h2>Nos Produits</h2>
    <p>Découvrez notre gamme de produits de qualité et confortables.</p>
    <div class="carousel-container">
      <button id="prev-product" class="carousel-arrow"><i class="fa-solid fa-arrow-left"></i></button>
      <div class="product-carousel">
        <div class="product-item">
          <img src="./image/img7.jpg" alt="Produit 1" />
          <h3>Produit 1</h3>
          <p>Description du produit 1.</p>
          <button class="voir-plus"><a href="./html/produit.html">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="./image/img5.jpg" alt="Produit 2" />
          <h3>Produit 2</h3>
          <p>Description du produit 2.</p>
          <button class="voir-plus"><a href="./html/produit.html">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="./image/img3.jpg" alt="Produit 3" />
          <h3>Produit 3</h3>
          <p>Description du produit 3.</p>
          <button class="voir-plus"><a href="./html/produit.html">Voir Plus</a></button>
        </div>
        <div class="product-item">
          <img src="./image/img5.jpg" alt="Produit 4" />
          <h3>Produit 4</h3>
          <p>Description du produit 4.</p>
          <button class="voir-plus"><a href="./html/produit.html">Voir Plus</a></button>
        </div>
      </div>
      <button id="next-product" class="carousel-arrow"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </section>

  <!-- Section Éducation et Sensibilisation -->
  <section class="education">
    <div class="container">
      <h2>Éducation et Sensibilisation</h2>
      <p>
        Découvrez nos articles et ressources pour mieux comprendre l'impact de l'hygiène intime féminine sur la santé.
        Explorez des sujets sur les menstruations.
      </p>
      <a href="#" class="btn-blog">Lire les articles</a>
    </div>
  </section>

  <!-- Section À Propos -->
  <section class="about-us">
    <div class="about">
      <div class="inner-section">
        <h1>À Propos de Nous</h1>
        <p class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Doloribus velit ducimus, enim inventore earum, eligendi
          nostrum pariatur necessitatibus eius dicta a voluptates sit
          deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
        </p>
        <div class="skills">
          <button>Contactez-nous</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Section Témoignages -->
<section class="temoignage" id="temoignage">
  <h2>Témoignages</h2>
  <p class="sous-titre">Ce que nos clients disent de nous</p>
  <div class="temoignage-container">
    <!-- Témoignage 1 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem1.jpg" alt="Client 1" class="client-photo" />
        <div class="client-details">
          <h3>Marie D.</h3>
          <p>Utilisatrice depuis 6 mois</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "Les produits Harmoniel ont changé ma vie ! Ils sont confortables, écologiques et économiques.
          Je recommande à toutes les femmes de passer au réutilisable."
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
      </div>
    </div>

    <!-- Témoignage 2 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem2.jpg" alt="Client 2" class="client-photo" />
        <div class="client-details">
          <h3>Sophie L.</h3>
          <p>Utilisatrice depuis 1 an</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "Je suis ravie de mes achats chez Harmoniel. Les produits sont de haute qualité et respectent
          mon corps et la planète. Un grand merci !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>

    <!-- Témoignage 3 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem3.jpg" alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Harmoniel grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
    <!-- TEMOIGNAGE 4 -->
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem3.jpg" alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Harmoniel grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>

    </div>
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem3.jpg" alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Harmoniel grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
    <div class="temoignage-item">
      <div class="client-info">
        <img src="./image/tem3.jpg" alt="Client 3" class="client-photo" />
        <div class="client-details">
          <h3>Julie M.</h3>
          <p>Nouvelle utilisatrice</p>
        </div>
      </div>
      <div class="commentaire">
        <p>
          "J'ai découvert Harmoniel grâce à une amie, et je ne regrette pas ! Les produits sont faciles
          à utiliser et très pratiques. Merci pour cette belle initiative !"
        </p>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Contact -->
<section class="contact" id="contact">
  <div class="contact-container">
    <h2>Contactez-nous</h2>
    <p class="sous-titre">Nous sommes à votre écoute pour toute question ou demande.</p>

    <div class="contact-content">
      <!-- Formulaire de contact -->
      <div class="contact-form">
        <form action="#" method="POST">
          <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Votre nom" required />
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Votre email" required />
          </div>
          <div class="form-group">
            <textarea name="message" id="message" rows="5" placeholder="Votre message" required></textarea>
          </div>
          <button type="submit" class="btn-submit">Envoyer</button>
        </form>
      </div>

      <!-- Informations de contact -->
      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>TOGO, Lomé</p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p>+228</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p>contact@harmoniel.com</p>
        </div>

        <!-- Réseaux sociaux -->
        <div class="social-links">
          <a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

  <script src="script.js"></script>
</body>
</html>