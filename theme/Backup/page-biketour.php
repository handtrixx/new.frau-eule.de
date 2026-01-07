<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="js/jquery-3.6.3.min.js"></script>
  <title>Frau Eule</title>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" rel="stylesheet">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Tutkulog.png" type="image/png"
    sizes="256x256">

  <?php wp_head(); ?>
</head>

<body class="colorcomponent">

 <!--Another
       ref: https://devsnap.me/css-carousels
    
    -->

    

    <div class="container pt-1 rounded-2 col-10 " style="margin-top:30px; background-color: rgb(204, 194, 182); border-top: 1px dotted rgb(242, 240, 228); border-width: 6px; 
        border-bottom: 1px dotted rgb(242, 240, 228); border-width: 6px;">
       
            <div>
                <h2 style="text-align: center; ">Bike Tour July '22</h2>

        
            </div>
            
          </div>

    <div style="padding: auto;" class="container pt-1 colorcomponent">




    <div class="container pt-1 col-12" style="margin-top:30px; background-color:  rgb(242, 240, 228); 
    border-top: 0px solid black;     border-bottom: 0px solid black; 

    ">

    <section style="background-color: rgb(242, 240, 228);">
      <div class="container">
          <div class="carousel">
              <input type="radio" name="slides" checked="checked" id="slide-1">
              <input type="radio" name="slides" id="slide-2">
              <input type="radio" name="slides" id="slide-3">
              <input type="radio" name="slides" id="slide-4">
              <input type="radio" name="slides" id="slide-5">
              <input type="radio" name="slides" id="slide-6">
              <ul class="carousel__slides">
                  <li class="carousel__slide">
                      <figure>
                          <div>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/biking/agacli.jpg" alt="...">

<!--                              <img src="images/biking/agacli.jpg" style="border: 4px solid rgb(204, 194, 182);">
-->                          </div>
                          <figcaption>
                           Wir fangen an zu radeln
                              <span class="credit">Photo: Tutku Stephan</span>
                          </figcaption>
                      </figure>
                  </li>
                  <li class="carousel__slide " >
                      <figure>
                          <div>
                              <img src="images/biking/singlecow.jpg" style="border: 4px solid rgb(204, 194, 182);">
                          </div>
                          <figcaption>
                            Nur ein kurzer Stopp, um einen alten Freund zu begrüßen
                                                          <span class="credit">Photo: Tutku Stephan</span>                            
                          </figcaption>
                      </figure>
                  </li>
                  <li class="carousel__slide">
                      <figure>
                          <div>
                              <img src="images/biking/bikes.jpeg" style="border: 4px solid rgb(204, 194, 182);">
                          </div>
                          <figcaption>
                            Noch ein kurzer Stopp, um ein Foto von unseren schönen Fahrrädern zu machen
                                                          <span class="credit">Photo: Tutku Stephan</span>                            
                          </figcaption>
                      </figure>
                  </li>
                  <li class="carousel__slide">
                      <figure>
                          <div>
                              <img src="images/biking/birdbuga.jpeg" style="border: 4px solid rgb(204, 194, 182);">
                          </div>
                          <figcaption>
                            Endlich sind wir in Bugasee angekommen. Hier kann sich ein Vogel nicht entscheiden, ob er schwimmen will:/                              <span class="credit">Photo: Tutku Stephan</span>                            
                          </figcaption>
                      </figure>
                  </li>
                  <li class="carousel__slide">
                      <figure>
                          <div>
                              <img src="images/biking/tutkufish.JPG" style="border: 4px solid rgb(204, 194, 182);">
                          </div>
                          <figcaption>
                            Im Gegensatz zum Vogel ist das Schwimmen für manche keine schwere Entscheidung..
                                                          <span class="credit">Photo: Tutku Stephan</span>                            
                          </figcaption>
                      </figure>
                  </li>
                  <li class="carousel__slide">
                      <figure>
                          <div>
                              <img src="images/biking/goetcrop.jpg" style="border: 4px solid rgb(204, 194, 182);">
                          </div>
                          <figcaption>
                            Glaubt Ihr, wir sind bis Göttingen weitergefahren?
                                                          <span class="credit">Photo: Tutku Stephan</span>                            
                          </figcaption>
                      </figure>
                  </li>
              </ul>    
              <ul class="carousel__thumbnails">
                  <li>
                      <label for="slide-1"><img src="images/biking/agacli.jpg" style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
                  <li>
                      <label for="slide-2"><img src="images/biking/singlecow.jpg" style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
                  <li>
                      <label for="slide-3"><img src="images/biking/bikes.jpeg" style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
                  <li>
                      <label for="slide-4"><img src="images/biking/birdbuga.jpeg" style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
                  <li>
                      <label for="slide-5"><img src="images/biking/tutkufish.JPG"style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
                  <li>
                      <label for="slide-6"><img src="images/biking/goetcrop.jpg"  style="border: 4px solid rgb(204, 194, 182);"></label>
                  </li>
              </ul>
          </div>
      </div>
  </section>
    </div>
    </div>


                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                      <div class="col-lg-6 col-md-8 mx-auto">
                     
                        <a href="#" style="background-color:  #f8f0d8; border: 2px solid rgb(233, 200, 144);" class="btn  my-2">Nach Oben</a>
                          
                      </div>
               
                  </section>


                  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>  

               

            </body>