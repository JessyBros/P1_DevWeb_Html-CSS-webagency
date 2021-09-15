<!-- Projet 1 Openclassrooms
     BROS Jessy
     12/11/2017 -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="Utf-8" />
    <META NAME="Language" CONTENT="fr">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" />
    <META NAME="Description" CONTENT="Page d'accueil avec les différents services du site. Des exemples de portfilio déjà réalié par WebAgency puis une page contact pour nous contacter.">
    <META NAME="Identifier-URL" CONTENT="jbrosoc.000webhostapp.com/index.html">
    <META NAME="Keywords" CONTENT="SEO, design, projet, web">
    <!-- exemple meta "twitter" -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Titre WebAgency">
        <meta name="twitter:url" content="http://WebAgency-Twitter.fr/test">
        <meta name="twitter:description" content="Ceci est une description du tweet par webagency que vous pouvez réaliser">
        <meta name="twitter:image" content="http://adresse_url_de_mon_image/monimage.png">
    <title>WebAgency</title>
</head>

<body>
    <!-- 1ère partie page d'accueil de Bienvenue -->
    <div id="accueil">
        <!-- logo + menu -->
        <header id="conteneurLogoEtMenu">

            <div class="logoEtMenu">
                <img src="images/logo.png" />
            </div>

            <div class="logoEtMenu" id="conteneurBarreDeMenu">
                <a class="barreDeMenu" href="#accueil">Accueil</a>
                <a class="barreDeMenu" href="#listeDesServices">Services</a>
                <a class="barreDeMenu" href="#exemplesDeProjets">Portfolio</a>
                <a class="barreDeMenu" href="#carteEtFormulaire">Contact</a>
            </div>

        </header>
        <div id="headerVide"></div>
        <!-- image de bienvenue avec son contenu -->
        <section id="imageDeBienvenue">
            
            <!-- flèches de gauches avec bordure -->
            <div id="bordureGriseLeft"></div>
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
            
            <!-- flèches de gauches avec bordure -->
            <div id="bordureGriseRight"></div>
            <i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
            
            <!-- bordures bas de pages -->
            <div id="ajoutBordureBleu"></div>
            <div id="ajoutBordureTransparent"></div>
            
            <div id="messageDeBienvenue">
                <br><br><br><br><br><br><br><br><br><br>
                <div style="font-size: 45px;font-weight:bold;">
                    <span style="color: #5cadd3;">WEBAGENCY</span> : L'AGENCE DE TOUS<br>VOS PROJETS !
                </div><br> Vous avez un projet web ? La WebAgency vous aide à le réaliser !<br><br>
                <button id=buttonInfo>Plus d'infos</button>
            </div>

        </section>

    </div>



    <!-- 2ème partie Liste des services offerts par l'agance -->
    <section id="listeDesServices">
        <h1 class="titre">NOS SERVICES</h1>
        <div class=decorationSousTitre fa-lg>
            <hr>
            <span class="fa-stack">
                <i class="circleBlue fa fa-circle fa-stack-1x" aria-hidden="true"></i>
                <i class="circleWhite fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            </span>
        </div>
        <p>Pour vous soutenir à la réalisation de vos projets ! <br> Nos services divers et variés seront des atouts fondamentaux à la conception intégrale de votre site.</p>

        <!-- image à gauche et les texts des différents services à droite -->
        <div id="conteneurImageEtServices">
            
            <article class="imageEtServices"><img src="images/main-feature.png" /></article>
            
            <div class="imageEtServices" id="conteneurDesServices">
                
                <aside class="lesServices" id="conteneurDispositionServices1">
                    <div class="dispositionServices1">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices1">
                        <i class="fa fa-circle" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices1">
                        <span class="titreService">UX design</span>
                        <p>Pour vos visiteurs ! Construisons un site ergonomique, stratégiquement performant et dans un confort simple d'utilisation !</p>
                    </div>
                </aside>
                
                <aside class="lesServices" id="conteneurDispositionServices2">
                    <div class="dispositionServices2">
                        <i class="fa fa-cubes bordure" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices2">
                        <i class="fa fa-circle" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices2">
                        <span class="titreService">UI design</span>
                        <p>Concevoir une interface qui reflète parfaitement vos idéaux de projet. Nous vous aiderons à rivalisé avec les meilleurs site web du marché ! Notre seul limite, votre imagination !</p>
                    </div>
                </aside>

                <aside class="lesServices" id="conteneurDispositionServices3">
                    <div class="dispositionServices3">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices3">
                        <i class="fa fa-circle" aria-hidden="true"></i>
                    </div>
                    <div class="dispositionServices3">
                        <span class="titreService">SEO</span>
                        <p>Grâce à nos multiples techniques nous vous aiderons à vous mettre dans la top liste des différents moteurs de recherche !</p>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- 3ème partie Exemples de projet déjà réalisés -->
    <section id="exemplesDeProjets">
        <h1 class="titre">NOS PROJETS</h1>
        <div class=decorationSousTitre fa-lg>
            <hr>
            <span class="fa-stack">
                <i class="circleBlue fa fa-circle fa-stack-1x" aria-hidden="true"></i>
                <i class="circleWhite fa fa-circle fa-stack-2x" aria-hidden="true"></i>
            </span>
        </div>
        <p>Nous réalisons différents types de projet que se soit des site web, des CMS ou encore des protfolio.<br> Alors ne vous inquietez pas pour l'avancement de votre projet. Admirez nos projets réalisés ! Inspirez vous de nos thèmes et images riches et variés et lancez vous!</p>
        <br><br>
        
        <!-- barre de menu -->
        <nav id="conteneurRubriqueProjet">
            <span class="rubriqueProjet">All Works<div class="triangle"> </div></span>
            <span class="rubriqueProjet">Creative<div class="triangle"> </div></span>
            <span class="rubriqueProjet">Corporate<div class="triangle"> </div></span>
            <span class="rubriqueProjet">Portfolio<div class="triangle"> </div></span>
        </nav>
        <br><br>
        
        <article id="conteneurProjetImage">
                
            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/01.jpg" alt="Photo d'un visage à lunette">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 1</span> <br>L'homme mystérieux
                        </p>
                    </aside>
                </span>
            </a>

           <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/02.jpg" alt="Image d'un lapin rose">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 2</span> <br>Le lapin trop sérieux
                        </p>
                    </aside>
                </span>
            </a>
            
            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/03.jpg" alt="Signature du Pompadour">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 3</span> <br>Pompadour
                        </p>
                    </aside>
                </span>
            </a>

            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/04.jpg" alt="Photo d'un livre">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 4</span> <br>The Book
                        </p>
                    </aside>
                </span>
            </a>

            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/05.jpg" alt="Image de deux sac">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 5</span> <br>Shopping
                        </p>
                    </aside>
                </span>
            </a>

            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/06.jpg" alt="Photo de paysage de différente culture">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 6</span> <br>Le voyageur
                        </p>
                    </aside>
                </span>
            </a>

            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/07.jpg" alt="Photo d'une fusée">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 7</span> <br>Wood Objectif
                        </p>
                    </aside>
                </span>
            </a>

            <a class="projetImage">
                <span class="surfaceProjetImage">
                    <img src="images/portfolio/08.jpg" alt="Image fourniture de bureau">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <aside>
                        <p><br>
                            <span>Portfolio Item 8</span> <br>Le perfectionnisme
                        </p>
                    </aside>
                </span>
            </a>
            
        </article>
    </section>

    <!-- 4ème partie carte avec un formulaire de contact -->

    <section id="carteEtFormulaire">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.21839429794!2d2.3476347160651296!3d48.87311307928883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e145ccb3091%3A0x9495beee8c96ec27!2s25+Rue+d&#39;Hauteville%2C+75010+Paris!5e0!3m2!1sfr!2sfr!4v1511118966070" frameborder="0" style="border:0" allowfullscreen></iframe>

            <form method="post" action="">
                <p>
                    <label for="contactInfo" style="font-weight:bold; font-size: 35px;">Contact Info</label><br><br>

                    <label for="adress"><span style="font-weight:bold;">WebAgency SAS</span> <br>
                            25 Rue d'Hauteville 75010 Paris <br> <span style="text-decoration: underline dotted;">Tel :</span> 01 02 03 04 05</label><br><br><br>

                    <input type="text" name="pseudo" id="pseudo" placeholder="  Name" maxlength="25" /><br><br>

                    <input type="text" name="email" id="email" placeholder="  Email" maxlength="40" /><br><br>

                    <input type="text" name="subject" id="subject" placeholder="  Subject" maxlength="25" /><br><br>

                    <textarea name="message" id="message" placeholder=" Message" size="800"></textarea><br><br>

                    <button>Send Message</button>
                </p>
            </form>
        
    </section>

    <section id="carteEtFormulaireTest"></section>

</body>
