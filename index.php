<!DOCTYPE html>
<html>

    <head>
        <title>Ismet Meray</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="css/animations.css" />
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="google-site-verification" content="msi0IDljkgWpilbJwV3yLL5uLQqu5D5-Gmd7IlALsgI" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/init.js"></script>
    </head>
<script>


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

    // document.getElementById("defaultOpen").click();
}
</script>
    <body onload="openCity(event, 'AnimalKingdom')">

            <nav>
                <div class="nav-wrapper">
                    <div class="container">
                        <a href="#top" class="brand-logo black-text active">Portfolio</i></a>
                        <ul class="hide-on-med-and-down right">
                            <li><a href="#overmij">Over mij</a></li>
                            <li><a href="#ervaring">Ervaring</a></li>
                            <li><a href="#projecten">Projecten</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        <ul class="side-nav" id="mobile-demo">
            <li><a href="#overmij">Over mij</a></li>
            <li><a href="#ervaring">Ervaring</a></li>
            <li><a href="#projecten">Projecten</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
<br>
        <div id="top" class="scrollspy parallax-container z-depth-3">
            <div class="parallax">
              <video autoplay loop muted>
                    <source src="vid/header.mp4" type="video/mp4">
              </video>
            </div>
            <div class="col l14 center parallax-offset">
                <img src="img/MainPhoto.jpg" class="profilepic circle responsive-img z-depth-1">
                <h3 class="parallax-name">Ismet Meray</h3>
                <div class="z-depth-1 parallax-title">Applicatie Ontwikkelaar</div>
            </div>
            <div class="col l12 center parallax-offset">
                <a href="https://www.linkedin.com/in/ismetMeray" target="_blank" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-linkedin"></i></a>
                <a href="docs/cv.pdf" target="_blank" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-file-text-o"></i></a>
                <a href="skype:issie1000" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-skype"></i></a>
                <a href="https://github.com/ismetMeray/Portfolio" class="btn-floating btn-large waves-effect waves white"><i class="fa fa-github"></i></a>
            </div>
            <div class="parallax-offset"></div>
        </div>

        <div id="overmij" class="section scrollspy darkbox">
            <div class="container">
                <div class="section-title center">Over Mij</div>
                <div class="row">
                    <div class="col l6 m6 s12 center z-depth-0">
                        <div class="subtitle">Wie ben ik?</div>
                        <p>
                            Mijn naam is Ismet Meray, Ik studeer Applicatie ontwikkeling op Scalda.
                            Ik ben thuis en op school altijd bezig met nieuwe dingen leren over programmeren.
                            Als ik afgestudeerd ben wil ik graag doorstuderen op een HBO-opleiding.
                            <div class="subtitle">Mijn hobby's</div>
                            Mijn hobby's zijn:
                            Programmeren,
                            Gamen
                            <br>
                            <br>
                            U kunt contact met mij opnemen via mijn gegevens onderaan de pagina of door het mailformulier in te vullen.

                        </p>
                    </div>
                    <div class="col l6 m6 s12 center">
                        <div class="subtitle">Skills</div>
                        <p>Ik heb ervaring met de onderstaande talen, technieken &amp; frameworks.</p>
                        <div class="chip">HTML</div>
                        <div class="chip">CSS</div>
                        <div class="chip">Java</div>
                        <div class="chip">Javascript</div>
                        <div class="chip">SpringMVC</div>
                        <div class="chip">Hibernate</div>
                        <div class="chip">Bootstrap</div>
                        <div class="chip">MySQL</div>
                        <div class="chip">Apache Tomcat</div>
                        <div class="chip">Git</div>
                        <div class="chip">Scrum</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="ervaring" class="section scrollspy whitebox">
            <div class="container">
                <div class="section-title center">Ervaring</div>

                <div class="row">

                    <div class="col s12 m12 l6">
                        <div class="card">
                            <div class="card-content grey lighten-4 z-depth-0">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/scalda.png" alt="Scalda" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title black-text">Applicatie ontwikkeling</span>
                                        <p>September 2016 - Heden</p>
                                        <p>Scalda College voor Techniek &amp; Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m12 l6">

                        <div class="card">
                            <div class="card-content grey lighten-4 z-depth-0">
                                <div class="row">
                                    <div class="col l3 m4 s4">
                                        <img src="img/smc.jpg" alt="Scheldemond College" class="responsive-img">
                                    </div>
                                    <div class="col l8 m8 s8">
                                        <span class="card-title black-text">VMBO-Kader</span>
                                        <p>September 2012 - April 2016</p>
                                        <p>Scheldemond College</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>




        <!-- <div id="projecten" class="section scrollspy darkbox">
            <div class="container"> -->
                <div id="projecten" class="section-title center">Projecten

                </div>
                  <div class="tab">
                      <button class="tablinks active" onclick="openCity(event, 'AnimalKingdom')">AnimalKingdom</button>
                      <button class="tablinks" onclick="openCity(event, 'Pasimo')">Pasimo</button>
                  </div>
                  <div id="AnimalKingdom" class="tabcontent">

              <div class="modal-content">

                  <div class="container">
                      <div class="row">

                          <div class="col s12 m6">
                              <h4>Animal Kingdom</h4>
                              <p class="light">Deze opdracht is mijn eerste opdracht, met als doel Java te leren. Het idee is dat je een dierentuin hebt met daarin kooien. Elke kooi bevat een dier. Er zijn ook mensen, die bijvoorbeeld moeten kunnen trouwen. Ook moeten de dieren zich kunnen voortplanten.Deze opdracht zou een heel jaar duren maar dat was verkort omdat, de leeraren ons in de project groepen wilde plaatsen. ik heb in 4 maanden het project afgerond. Nadat het Java-gedeelte was afgerond heb ik door middel van SpringMVC een view gemaakt. Hiervoor heb ik me in het Spring Framework verdiept.</p>
                          </div>
                          <div class="col s12 m6 l6 center">
                              <br>
                              <img class="materialboxed z-depth-2" data-caption="Logo" width="100%" src="img/project/photos/ak2.jpg">
                              <br>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s12 m6 l6 center">
                              <h5>Talen &amp; Frameworks</h5>

                              <br>

                              <div class="chip z-depth-2">
                                  <i class="fa fa-coffee" aria-hidden="true"></i> Java
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-html5" aria-hidden="true"></i> HTML5
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-css3" aria-hidden="true"></i> CSS3
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-terminal" aria-hidden="true"></i> Javascript
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-database" aria-hidden="true"></i> MySQL
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-bold" aria-hidden="true"></i> Bootstrap
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-code-fork" aria-hidden="true"></i> SpringMVC
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-scribd" aria-hidden="true"></i> Scrum
                              </div>

                          </div>

                          <div class="col s12 m6 l6 center">
                              <h5>Info</h5>
                              <table class="bordered">
                                  <tbody>
                                      <tr>
                                          <td><i class="fa fa-user" aria-hidden="true"></i></td>
                                          <td>Opdrachtgever</td>
                                          <td class="right"><a href="http://scalda.nl/">Scalda Vlissingen<a/></td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                                          <td>Tijdsduur</td>
                                          <td class="right">4 Maanden</td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                          <td>Opleverdatum</td>
                                          <td class="right">Januari 2017</td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                                          <td>Beoordeling</td>
                                          <td class="right">Goed</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>

                      </div>

                      <div class="row">
                          <div class="col s12 center">
                              <h5>Screenshots</h5>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Human class" width="100%" src="img/ak1.png">
                            <p>De Human class</p>
                            <p>Hier wordt er voor gezordt dat de mensen kunnen trouwen en voortplanten.</p>
                          </div>
                          <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Zoo class" width="100%" src="img/ak2.png">
                            <p>De Zoo</p>
                            <p>Hier worden alle bestaande op ras in een kooi gesorteerd.</p>
                            <p>De dieren worden ook toegevoegd aan de kooien.</p>

                          </div>
                          <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Animals Overview" width="100%" src="img/ak3.png">
                              <p>De overview</p>
                              <p>Dit is de HomePage van de website, hier komen alle dieren te staan.</p>
                              <p>Hier kan je de dieren sorteren op ras.</p>
                          </div>

                          <div class="col s12 m6 l3 center"><img class="materialboxed z-depth-2" data-caption="Edit class" width="100%" src="img/ak4.png">
                              <p>De edit jsp</p>
                              <p>Hier wordt ervoor gezord dat je verschillende attributen van de dieren en mensen kan veranderen.</p>
                          </div>
                      </div>

                  </div>
              </div>
          </div>


        <!-- Modals -->

        <div id="Pasimo" class="tabcontent">

              <div class="modal-content">
                  <div class="container">
                      <div class="row">

                          <div class="col s12 m6">
                              <h4>Pasimo</h4>
                              <p class="light">
                                  Het begin van 2017 was ik geintroduceerd in Pasimo.
                                    In dit project moesten we het pasjes systeem van Scalda automatisch maken.
                                    Voordat dit project was begonnen, moesten de leeraren de absente en zieken controle zelf doen.
                                    Dit project zorgt ervoor dat dit allemaal automatisch gaat.
                              </p>



                              <div class="col s12 l12 m12" style="padding-left: 0">

                              </div>

                          </div>
                          <div class="col s12 m6 l6 center">
                              <br>
                              <img class="materialboxed z-depth-2" data-caption="Logo" width="100%" src="img/dolphin-min.jpg">
                              <br>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col s12 m6 l6 center">
                              <h5>Talen &amp; Frameworks</h5>

                              <br>

                              <div class="chip z-depth-2">
                                  <i class="fa fa-coffee" aria-hidden="true"></i> Java
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-html5" aria-hidden="true"></i> HTML5
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-css3" aria-hidden="true"></i> CSS3
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-terminal" aria-hidden="true"></i> Javascript
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-database" aria-hidden="true"></i> MySQL
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-bold" aria-hidden="true"></i> Hibrenate
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-code-fork" aria-hidden="true"></i> Struts
                              </div>
                              <div class="chip z-depth-2">
                                  <i class="fa fa-scribd" aria-hidden="true"></i> Scrum
                              </div>
                          </div>

                          <div class="col s12 m6 l6 center">
                              <h5>Info</h5>
                              <table class="bordered">
                                  <tbody>
                                      <tr>
                                          <td><i class="fa fa-user" aria-hidden="true"></i></td>
                                          <td>Opdrachtgever</td>
                                          <td class="right"><a href="http://scalda.nl/">Scalda Vlissingen<a/></td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-clock-o" aria-hidden="true"></i></td>
                                          <td>Tijdsduur</td>
                                          <td class="right">4 Maanden</td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-calendar" aria-hidden="true"></i></td>
                                          <td>Opleverdatum</td>
                                          <td class="right">T.B.D</td>
                                      </tr>
                                      <tr>
                                          <td><i class="fa fa-graduation-cap" aria-hidden="true"></i></td>
                                          <td>Beoordeling</td>
                                          <td class="right">T.B.D</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>

                          <div class="row">
                              <div class="col s12 center">
                                  <h5>Screenshots</h5>
                              </div>
                          </div>

                          <div class="row">
                              <div class="col s20 m6 13 center"><img class="materialboxed z-depth-2" data-caption="Human class" width="100%" src="img/Pasimo1.png">
                                <p>De Struts.xml</p>
                                <p>Hier worden alle buttons en links door gelinked naar de controller.</p>
                              </div>

                              <div class="col s20 m6 10 center"><img class="materialboxed z-depth-2" data-caption="Zoo class" width="100%" src="img/Pasimo2.png">
                                <p>De CoachGroupController</p>
                                <p>Hier kan je via Struts informatie doorsturen naar een van deze functies.</P>


                            </div>
                      </div>
                  </div>

              </div>
          </div>
        </div>
        <br>
        <footer id="contact" class="scrollspy page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l4 offset-l1 s12">
                        <div class="footer-title">Contactgegevens</div>
                        <p>
                            <i class="fa fa-map-marker"></i> Nieuwlandseweg 3, 4389VA Ritthem
                            <br><i class="fa fa-phone"></i> 06 28 67 83 46
                            <br> <i class="fa fa-skype"></i> issie1000
                            <br> <i class="fa fa-envelope"></i> imeray@student.scalda.nl
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container"> Based on work from: <a style="margin-right: 5px;"href="https://github.com/marc0tjevp">Marco van Poortvliet</a> <a class="grey-text text-lighten-4 right" href="#!">Ismet Meray Webdevelopment</a> </div>
            </div>
        </footer>


    </body>

</html>
