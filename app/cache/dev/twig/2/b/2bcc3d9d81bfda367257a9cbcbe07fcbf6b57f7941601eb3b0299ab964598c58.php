<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_5557301b825332934aa9ecb75a33aa181825e59073adff846e31b03d90d45499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dd55ea54bf70068bd50398e49ecacbbe1c34ec6f27d5623d90cfeae0fbb12ce = $this->env->getExtension("native_profiler");
        $__internal_5dd55ea54bf70068bd50398e49ecacbbe1c34ec6f27d5623d90cfeae0fbb12ce->enter($__internal_5dd55ea54bf70068bd50398e49ecacbbe1c34ec6f27d5623d90cfeae0fbb12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"index.php\">DonMehdi</a>

            <div class=\"nav-collapse collapse\">
                <form class=\"navbar-form form-search pull-right\">
                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                    <button type=\"submit\" class=\"btn\">Rechercher</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "<hr/>

<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    <li><a href=\"texte.php\">CGV</a>
                    <li><a href=\"texte.php\">Mentions l&eacutegales</a>
                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrep&ocirct</h4>

                <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>

                <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>

                <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "</body>
</html>";
        
        $__internal_5dd55ea54bf70068bd50398e49ecacbbe1c34ec6f27d5623d90cfeae0fbb12ce->leave($__internal_5dd55ea54bf70068bd50398e49ecacbbe1c34ec6f27d5623d90cfeae0fbb12ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4eb78be19bbced0ab48eb7b310e4b12cf6331d364f38d18d1e3c57cfacae2b3 = $this->env->getExtension("native_profiler");
        $__internal_e4eb78be19bbced0ab48eb7b310e4b12cf6331d364f38d18d1e3c57cfacae2b3->enter($__internal_e4eb78be19bbced0ab48eb7b310e4b12cf6331d364f38d18d1e3c57cfacae2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e4eb78be19bbced0ab48eb7b310e4b12cf6331d364f38d18d1e3c57cfacae2b3->leave($__internal_e4eb78be19bbced0ab48eb7b310e4b12cf6331d364f38d18d1e3c57cfacae2b3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0741cd2121396dcb35948bef19a1a91c783fdbad5704c9e3aaacb8c0c9212be7 = $this->env->getExtension("native_profiler");
        $__internal_0741cd2121396dcb35948bef19a1a91c783fdbad5704c9e3aaacb8c0c9212be7->enter($__internal_0741cd2121396dcb35948bef19a1a91c783fdbad5704c9e3aaacb8c0c9212be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0741cd2121396dcb35948bef19a1a91c783fdbad5704c9e3aaacb8c0c9212be7->leave($__internal_0741cd2121396dcb35948bef19a1a91c783fdbad5704c9e3aaacb8c0c9212be7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0e37f2143a88bc2d2f85d0291fba47b6778618144325a4ccedfd2d6ce40bcb8 = $this->env->getExtension("native_profiler");
        $__internal_f0e37f2143a88bc2d2f85d0291fba47b6778618144325a4ccedfd2d6ce40bcb8->enter($__internal_f0e37f2143a88bc2d2f85d0291fba47b6778618144325a4ccedfd2d6ce40bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0e37f2143a88bc2d2f85d0291fba47b6778618144325a4ccedfd2d6ce40bcb8->leave($__internal_f0e37f2143a88bc2d2f85d0291fba47b6778618144325a4ccedfd2d6ce40bcb8_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6134d29b8d8f230053c880c92940c81bbfa80fadccbffce6144203cc0a57495f = $this->env->getExtension("native_profiler");
        $__internal_6134d29b8d8f230053c880c92940c81bbfa80fadccbffce6144203cc0a57495f->enter($__internal_6134d29b8d8f230053c880c92940c81bbfa80fadccbffce6144203cc0a57495f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6134d29b8d8f230053c880c92940c81bbfa80fadccbffce6144203cc0a57495f->leave($__internal_6134d29b8d8f230053c880c92940c81bbfa80fadccbffce6144203cc0a57495f_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 72,  160 => 33,  149 => 6,  137 => 5,  129 => 73,  127 => 72,  123 => 71,  119 => 70,  82 => 35,  80 => 33,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8"/>*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"/>*/
/*     <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>*/
/*     <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="brand" href="index.php">DonMehdi</a>*/
/* */
/*             <div class="nav-collapse collapse">*/
/*                 <form class="navbar-form form-search pull-right">*/
/*                     <input id="Search" name="Search" type="text" class="input-medium search-query">*/
/*                     <button type="submit" class="btn">Rechercher</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% block body %}*/
/* {% endblock %}*/
/* <hr/>*/
/* */
/* <footer id="footer" class="vspace20">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span4 offset1">*/
/*                 <h4>Informations</h4>*/
/*                 <ul class="nav nav-stacked">*/
/*                     <li><a href="texte.php">CGV</a>*/
/*                     <li><a href="texte.php">Mentions l&eacutegales</a>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="span4">*/
/*                 <h4>Notre entrep&ocirct</h4>*/
/* */
/*                 <p><i class="icon-map-marker"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>*/
/*             </div>*/
/* */
/*             <div class="span2">*/
/*                 <h4>Nous contacter</h4>*/
/* */
/*                 <p><i class="icon-phone"></i>&nbsp;Tel: 02 35 00 00 00</p>*/
/* */
/*                 <p><i class="icon-print"></i>&nbsp;Fax: 02 35 00 00 00</p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="span4">*/
/*                 <p>&copy; Copyright 2014 - DevAndClick</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <script src="{{ asset('js/jquery-1.10.0.min.js')}}"></script>*/
/* <script src="{{ asset('js/bootstrap.js')}}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
