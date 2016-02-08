<?php

/* header.html.twig */
class __TwigTemplate_9c0f590e1d5ad2bc00630072bc08c3951ebbb70ee7faabc69cb127673eca053f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d02499afa897591f077fedb010cbf752b2c061d7a70a1a1a2607777ee7b3bba7 = $this->env->getExtension("native_profiler");
        $__internal_d02499afa897591f077fedb010cbf752b2c061d7a70a1a1a2607777ee7b3bba7->enter($__internal_d02499afa897591f077fedb010cbf752b2c061d7a70a1a1a2607777ee7b3bba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"lt-ie9\" lang=\"en\"> <![endif]-->
<!--[if !IE] -->
<html lang='en'>
<!-- <![endif] -->
<head>
    <title>Fablab d'Université du Havre - Admin</title>
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->

    <!-- / required stylesheets -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/stylesheets/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/stylesheets/jednotka_green.css"), "html", null, true);
        echo "\" media=\"all\" id=\"colors\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- / not required stylesheets -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/stylesheets/demo.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/stylesheets/connexion.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\"/>

</head>
<body class='elements'>
<div id='wrapper'>
    <header id='header'>
        <div class='container'>
            <nav class='navbar navbar-default' id='nav' role='navigation'>
                <div class='navbar-header'>
                    <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse'
                            type='button'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='index.html'>
                        <img alt=\"Jednotka\" width=\"117\" height=\"39\" src=\"assets/images/logo.svg\"/>
                    </a>
                </div>
                <div class='collapse navbar-collapse navbar-header-collapse'>
                    <ul class='nav navbar-nav navbar-right'>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Accueil
                      <i class='fa-icon-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='index.html'>Accueil</a>
                                </li>
                                <li class=''>
                                    <a href='apropos.html'>A propos de</a>
                                </li>
                            </ul>
                        </li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Machines
                      <i class='fa-icon-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class='active'>
                                    <a href='info.html'>Liste des Machines</a>
                                </li>
                                <li class=''>
                                    <a href='reservation.html'>Réservation</a>
                                </li>
                            </ul>
                        </li>
                        <li class='active dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Connexion
                      <i class='fa-icon-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class='active'>
                                    <a href='connexion.html'>Connexion</a>
                                </li>
                                <li class=''>
                                    <a href='compte.html'>Créer Compte</a>
                                </li>

                            </ul>
                        </li>
                        <li class='dropdown'>
                            <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'
                               href='#'>
                    <span>
                      Contactez-nous
                      <i class='fa-icon-angle-down'></i>
                    </span>
                            </a>
                            <ul class='dropdown-menu' role='menu'>
                                <li class=''>
                                    <a href='contact.html'>Contactez-nous</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div id='main' role='main'>
        <div id='main-content-header'>
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h1 class='title'>
                          Connexion
                            <small>Connectez-vous c'est plus vite</small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div id='main-content'>
          ";
        // line 127
        $this->displayBlock('body', $context, $blocks);
        // line 130
        echo "        </div>
        <footer id='footer'>
            <div id='footer-main'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-3 col-sm-6 info-box'>
                            <div class='logo-container'>
                                <img alt=\"Jednotka\" width=\"117\" height=\"39\" src=\"assets/images/logo.svg\"/>
                            </div>
                            <p class='no-mg-b'>Fablab de l'Université est un atelier partagé, orienté vers la fabrication numérique. C'est un lieu ouvert au public où il est mis à sa disposition toutes sortes d'outils, notamment des machines-outils pilotées par ordinateur, pour la conception et la réalisation d'objets.</p>
                        </div>
                        <div class='col-md-3 col-sm-6 info-box'>
                            <h2 class='title'>Contactez-nous</h2>
                            <div class='icon-boxes'>
                                <div class='icon-box'>
                                    <div class='icon icon-wrap'>
                                        <i class='fa-icon-map-marker'></i>
                                    </div>
                                    <div class='content'>
                                      Université du Havre
                                      <br>
                                      25 rue Philippe Lebon
                                      <br>
                                      BP 1123 - 76063 Le Havre Cedex
                                      <br>
                                      France,
                                    </div>
                                </div>
                                <div class='icon-box'>
                                    <div class='icon icon-wrap'>
                                        <i class='fa-icon-phone'></i>
                                    </div>
                                    <div class='content'>
                                        <a href='tel:+33232744000'>+33 (0)2 32 74 40 00</a>
                                    </div>
                                </div>
                                <div class='icon-box'>
                                    <div class='icon icon-wrap'>
                                        <i class='fa-icon-envelope'></i>
                                    </div>
                                    <div class='content'><a href=\"mailto:communication@univ-lehavre.fr\">communication@univ-lehavre.fr</a>
                                    </div>
                                </div>
                                <div class='icon-box'>
                                    <div class='icon icon-wrap'>
                                        <i class='fa-icon-globe'></i>
                                    </div>
                                    <div class='content'><a href=\"http://fablab.univ-lehavre.fr/\">http://fablab.univ-lehavre.fr/</a></div>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-3 col-sm-6 info-box social-box'>
                          <h2 class='title'>Suivez-nous</h2>
                            <div class='icon-boxes'>
                                <div class='icon-box'>
                                    <div class='icon icon-wrap'>
                                        <i class='fa-icon-facebook text-contrast'></i>
                                    </div>
                                    <div class='content'>
                                        <p>Fablab d'Université du Havre - Facebook</p>
                                    </div>
                                </div>
                              </div>
                              <div class='icon-boxes'>
                                  <div class='icon-box'>
                                      <div class='icon icon-wrap'>
                                          <i class='fa-icon-twitter text-contrast'></i>
                                      </div>
                                      <div class='content'>
                                          <p>Fablab d'Université du Havre - Twitter</p>
                                      </div>
                                  </div>
                                </div>
                                <div class='icon-boxes'>
                                    <div class='icon-box'>
                                        <div class='icon icon-wrap'>
                                            <i class='fa-icon-youtube text-contrast'></i>
                                        </div>
                                        <div class='content'>
                                            <p>Fablab d'Université du Havre - YouTube</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class='col-md-3 col-sm-6 info-box'>
                            <h2 class='title'>Newsletter</h2>

                            <p>Abonnez-vous à la Newsletter de notre Fablab</p>

                            <form action='http://empty-ice-3260.herokuapp.com/newsroom--2/newsletters' class='form-inline form-validation'
                                  method='get'>
                                <div class='row'>
                                    <div class='form-group control-group col-xs-9 col-md-8 col-lg-9'>
                                        <input class='form-control' data-rule-email='true' data-rule-required='true'
                                               id='newsletter_email' name='newsletter[email]' placeholder='Email address'
                                               type='email'>
                                    </div>
                                    <div class='col-xs-3 col-md-4 col-lg-3'>
                                        <button class='btn btn-medium-light btn-block' type='submit'>
                                            <i class='fa-icon-reply text-white'></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id='footer-copyright'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-12 clearfix'>
                            <p class='copyright'>
                                Copyright
                                &copy;
                                2016 Fablab
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- / required javascripts -->
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/jquery/jquery.mobile.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/modernizr/modernizr.custom.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/retina/retina.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js"), "html", null, true);
        echo "\"
            type=\"text/javascript\"></script>
    <script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/validate/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/flexslider/jquery.flexslider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/countdown/countdown.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/lightbox/lightbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/plugins/cycle/jquery.cycle.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/javascripts/jednotka.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- / not required javascripts -->
    <script src=\"assets/javascripts/demo.js\" type=\"text/javascript\"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44249116-1', 'bublinastudio.com');
      ga('send', 'pageview');


    </script>
    ";
        // line 288
        $this->displayBlock('javascripts', $context, $blocks);
        // line 293
        echo "</body>
</html>
";
        
        $__internal_d02499afa897591f077fedb010cbf752b2c061d7a70a1a1a2607777ee7b3bba7->leave($__internal_d02499afa897591f077fedb010cbf752b2c061d7a70a1a1a2607777ee7b3bba7_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c159dcb8acecd0d9627c34df54bf1aacd4467f0396066dc00dcb595bbb0b104d = $this->env->getExtension("native_profiler");
        $__internal_c159dcb8acecd0d9627c34df54bf1aacd4467f0396066dc00dcb595bbb0b104d->enter($__internal_c159dcb8acecd0d9627c34df54bf1aacd4467f0396066dc00dcb595bbb0b104d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AsnaBundle";
        
        $__internal_c159dcb8acecd0d9627c34df54bf1aacd4467f0396066dc00dcb595bbb0b104d->leave($__internal_c159dcb8acecd0d9627c34df54bf1aacd4467f0396066dc00dcb595bbb0b104d_prof);

    }

    // line 127
    public function block_body($context, array $blocks = array())
    {
        $__internal_5664ed7ee278ae991068f11366b6b066205675b90823dbcf5924ca2d8adf0f88 = $this->env->getExtension("native_profiler");
        $__internal_5664ed7ee278ae991068f11366b6b066205675b90823dbcf5924ca2d8adf0f88->enter($__internal_5664ed7ee278ae991068f11366b6b066205675b90823dbcf5924ca2d8adf0f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "
          ";
        
        $__internal_5664ed7ee278ae991068f11366b6b066205675b90823dbcf5924ca2d8adf0f88->leave($__internal_5664ed7ee278ae991068f11366b6b066205675b90823dbcf5924ca2d8adf0f88_prof);

    }

    // line 288
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4425d868dc4116b716716b0aaed5afa9e634a1b82363b408a0181ffb80a2396 = $this->env->getExtension("native_profiler");
        $__internal_f4425d868dc4116b716716b0aaed5afa9e634a1b82363b408a0181ffb80a2396->enter($__internal_f4425d868dc4116b716716b0aaed5afa9e634a1b82363b408a0181ffb80a2396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 289
        echo "      ";
        // line 290
        echo "      <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
      <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_f4425d868dc4116b716716b0aaed5afa9e634a1b82363b408a0181ffb80a2396->leave($__internal_f4425d868dc4116b716716b0aaed5afa9e634a1b82363b408a0181ffb80a2396_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 290,  424 => 289,  418 => 288,  410 => 128,  404 => 127,  392 => 8,  383 => 293,  381 => 288,  364 => 274,  360 => 273,  355 => 271,  351 => 270,  347 => 269,  343 => 268,  339 => 267,  335 => 266,  330 => 264,  326 => 263,  322 => 262,  318 => 261,  313 => 259,  309 => 258,  305 => 257,  301 => 256,  297 => 255,  170 => 130,  168 => 127,  58 => 20,  54 => 19,  49 => 17,  45 => 16,  34 => 8,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html class="lt-ie9" lang="en"> <![endif]-->*/
/* <!--[if !IE] -->*/
/* <html lang='en'>*/
/* <!-- <![endif] -->*/
/* <head>*/
/*     <title>Fablab d'Université du Havre - Admin</title>*/
/*     <title>{% block title %}AsnaBundle{% endblock %}</title>*/
/*     <meta content='all' name='robots'>*/
/*     <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>*/
/*     <meta content='width=device-width, initial-scale=1.0' name='viewport'>*/
/*     <!--[if IE]>*/
/*     <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->*/
/* */
/*     <!-- / required stylesheets -->*/
/*     <link href="{{asset('assets/stylesheets/bootstrap/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{asset('assets/stylesheets/jednotka_green.css')}}" media="all" id="colors" rel="stylesheet" type="text/css"/>*/
/*     <!-- / not required stylesheets -->*/
/*     <link href="{{asset('assets/stylesheets/demo.css')}}" media="all" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{asset('assets/stylesheets/connexion.css')}}" media="all" rel="stylesheet" type="text/css"/>*/
/* */
/* </head>*/
/* <body class='elements'>*/
/* <div id='wrapper'>*/
/*     <header id='header'>*/
/*         <div class='container'>*/
/*             <nav class='navbar navbar-default' id='nav' role='navigation'>*/
/*                 <div class='navbar-header'>*/
/*                     <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse'*/
/*                             type='button'>*/
/*                         <span class='sr-only'>Toggle navigation</span>*/
/*                         <span class='icon-bar'></span>*/
/*                         <span class='icon-bar'></span>*/
/*                         <span class='icon-bar'></span>*/
/*                     </button>*/
/*                     <a class='navbar-brand' href='index.html'>*/
/*                         <img alt="Jednotka" width="117" height="39" src="assets/images/logo.svg"/>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class='collapse navbar-collapse navbar-header-collapse'>*/
/*                     <ul class='nav navbar-nav navbar-right'>*/
/*                         <li class='dropdown'>*/
/*                             <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'*/
/*                                href='#'>*/
/*                     <span>*/
/*                       Accueil*/
/*                       <i class='fa-icon-angle-down'></i>*/
/*                     </span>*/
/*                             </a>*/
/*                             <ul class='dropdown-menu' role='menu'>*/
/*                                 <li class=''>*/
/*                                     <a href='index.html'>Accueil</a>*/
/*                                 </li>*/
/*                                 <li class=''>*/
/*                                     <a href='apropos.html'>A propos de</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class='dropdown'>*/
/*                             <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'*/
/*                                href='#'>*/
/*                     <span>*/
/*                       Machines*/
/*                       <i class='fa-icon-angle-down'></i>*/
/*                     </span>*/
/*                             </a>*/
/*                             <ul class='dropdown-menu' role='menu'>*/
/*                                 <li class='active'>*/
/*                                     <a href='info.html'>Liste des Machines</a>*/
/*                                 </li>*/
/*                                 <li class=''>*/
/*                                     <a href='reservation.html'>Réservation</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class='active dropdown'>*/
/*                             <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'*/
/*                                href='#'>*/
/*                     <span>*/
/*                       Connexion*/
/*                       <i class='fa-icon-angle-down'></i>*/
/*                     </span>*/
/*                             </a>*/
/*                             <ul class='dropdown-menu' role='menu'>*/
/*                                 <li class='active'>*/
/*                                     <a href='connexion.html'>Connexion</a>*/
/*                                 </li>*/
/*                                 <li class=''>*/
/*                                     <a href='compte.html'>Créer Compte</a>*/
/*                                 </li>*/
/* */
/*                             </ul>*/
/*                         </li>*/
/*                         <li class='dropdown'>*/
/*                             <a class='dropdown-toggle' data-delay='50' data-hover='dropdown' data-toggle='dropdown'*/
/*                                href='#'>*/
/*                     <span>*/
/*                       Contactez-nous*/
/*                       <i class='fa-icon-angle-down'></i>*/
/*                     </span>*/
/*                             </a>*/
/*                             <ul class='dropdown-menu' role='menu'>*/
/*                                 <li class=''>*/
/*                                     <a href='contact.html'>Contactez-nous</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*     </header>*/
/*     <div id='main' role='main'>*/
/*         <div id='main-content-header'>*/
/*             <div class='container'>*/
/*                 <div class='row'>*/
/*                     <div class='col-sm-12'>*/
/*                         <h1 class='title'>*/
/*                           Connexion*/
/*                             <small>Connectez-vous c'est plus vite</small>*/
/*                         </h1>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id='main-content'>*/
/*           {% block body %}*/
/* */
/*           {% endblock %}*/
/*         </div>*/
/*         <footer id='footer'>*/
/*             <div id='footer-main'>*/
/*                 <div class='container'>*/
/*                     <div class='row'>*/
/*                         <div class='col-md-3 col-sm-6 info-box'>*/
/*                             <div class='logo-container'>*/
/*                                 <img alt="Jednotka" width="117" height="39" src="assets/images/logo.svg"/>*/
/*                             </div>*/
/*                             <p class='no-mg-b'>Fablab de l'Université est un atelier partagé, orienté vers la fabrication numérique. C'est un lieu ouvert au public où il est mis à sa disposition toutes sortes d'outils, notamment des machines-outils pilotées par ordinateur, pour la conception et la réalisation d'objets.</p>*/
/*                         </div>*/
/*                         <div class='col-md-3 col-sm-6 info-box'>*/
/*                             <h2 class='title'>Contactez-nous</h2>*/
/*                             <div class='icon-boxes'>*/
/*                                 <div class='icon-box'>*/
/*                                     <div class='icon icon-wrap'>*/
/*                                         <i class='fa-icon-map-marker'></i>*/
/*                                     </div>*/
/*                                     <div class='content'>*/
/*                                       Université du Havre*/
/*                                       <br>*/
/*                                       25 rue Philippe Lebon*/
/*                                       <br>*/
/*                                       BP 1123 - 76063 Le Havre Cedex*/
/*                                       <br>*/
/*                                       France,*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='icon-box'>*/
/*                                     <div class='icon icon-wrap'>*/
/*                                         <i class='fa-icon-phone'></i>*/
/*                                     </div>*/
/*                                     <div class='content'>*/
/*                                         <a href='tel:+33232744000'>+33 (0)2 32 74 40 00</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='icon-box'>*/
/*                                     <div class='icon icon-wrap'>*/
/*                                         <i class='fa-icon-envelope'></i>*/
/*                                     </div>*/
/*                                     <div class='content'><a href="mailto:communication@univ-lehavre.fr">communication@univ-lehavre.fr</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class='icon-box'>*/
/*                                     <div class='icon icon-wrap'>*/
/*                                         <i class='fa-icon-globe'></i>*/
/*                                     </div>*/
/*                                     <div class='content'><a href="http://fablab.univ-lehavre.fr/">http://fablab.univ-lehavre.fr/</a></div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class='col-md-3 col-sm-6 info-box social-box'>*/
/*                           <h2 class='title'>Suivez-nous</h2>*/
/*                             <div class='icon-boxes'>*/
/*                                 <div class='icon-box'>*/
/*                                     <div class='icon icon-wrap'>*/
/*                                         <i class='fa-icon-facebook text-contrast'></i>*/
/*                                     </div>*/
/*                                     <div class='content'>*/
/*                                         <p>Fablab d'Université du Havre - Facebook</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                               </div>*/
/*                               <div class='icon-boxes'>*/
/*                                   <div class='icon-box'>*/
/*                                       <div class='icon icon-wrap'>*/
/*                                           <i class='fa-icon-twitter text-contrast'></i>*/
/*                                       </div>*/
/*                                       <div class='content'>*/
/*                                           <p>Fablab d'Université du Havre - Twitter</p>*/
/*                                       </div>*/
/*                                   </div>*/
/*                                 </div>*/
/*                                 <div class='icon-boxes'>*/
/*                                     <div class='icon-box'>*/
/*                                         <div class='icon icon-wrap'>*/
/*                                             <i class='fa-icon-youtube text-contrast'></i>*/
/*                                         </div>*/
/*                                         <div class='content'>*/
/*                                             <p>Fablab d'Université du Havre - YouTube</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                         <div class='col-md-3 col-sm-6 info-box'>*/
/*                             <h2 class='title'>Newsletter</h2>*/
/* */
/*                             <p>Abonnez-vous à la Newsletter de notre Fablab</p>*/
/* */
/*                             <form action='http://empty-ice-3260.herokuapp.com/newsroom--2/newsletters' class='form-inline form-validation'*/
/*                                   method='get'>*/
/*                                 <div class='row'>*/
/*                                     <div class='form-group control-group col-xs-9 col-md-8 col-lg-9'>*/
/*                                         <input class='form-control' data-rule-email='true' data-rule-required='true'*/
/*                                                id='newsletter_email' name='newsletter[email]' placeholder='Email address'*/
/*                                                type='email'>*/
/*                                     </div>*/
/*                                     <div class='col-xs-3 col-md-4 col-lg-3'>*/
/*                                         <button class='btn btn-medium-light btn-block' type='submit'>*/
/*                                             <i class='fa-icon-reply text-white'></i>*/
/*                                         </button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id='footer-copyright'>*/
/*                 <div class='container'>*/
/*                     <div class='row'>*/
/*                         <div class='col-lg-12 clearfix'>*/
/*                             <p class='copyright'>*/
/*                                 Copyright*/
/*                                 &copy;*/
/*                                 2016 Fablab*/
/*                             </p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*     </div>*/
/* */
/*     <!-- / required javascripts -->*/
/*     <script src="{{asset('assets/javascripts/jquery/jquery.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/jquery/jquery.mobile.custom.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/modernizr/modernizr.custom.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/retina/retina.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/isotope/jquery.isotope.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js')}}"*/
/*             type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/validate/jquery.validate.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/flexslider/jquery.flexslider.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/countdown/countdown.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/lightbox/lightbox.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/plugins/cycle/jquery.cycle.all.min.js')}}" type="text/javascript"></script>*/
/*     <script src="{{asset('assets/javascripts/jednotka.js')}}" type="text/javascript"></script>*/
/* */
/*     <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js')}}"></script>*/
/*     <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}"></script>*/
/*     <!-- / not required javascripts -->*/
/*     <script src="assets/javascripts/demo.js" type="text/javascript"></script>*/
/*     <script>*/
/*       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*       })(window,document,'script','../www.google-analytics.com/analytics.js','ga');*/
/* */
/*       ga('create', 'UA-44249116-1', 'bublinastudio.com');*/
/*       ga('send', 'pageview');*/
/* */
/* */
/*     </script>*/
/*     {% block javascripts %}*/
/*       {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*       <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
