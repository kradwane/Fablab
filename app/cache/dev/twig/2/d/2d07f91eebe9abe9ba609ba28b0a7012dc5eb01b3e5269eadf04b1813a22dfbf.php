<?php

/* ::Base.html.twig */
class __TwigTemplate_cfb4efa77533a882d0ed971debaba0a231109118bff7d23122e838dac362f70a extends Twig_Template
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
        $__internal_2202d25dcfc3b9efc241f66d3fcc1db4cf6374cc375b66b24c9d9ae468728127 = $this->env->getExtension("native_profiler");
        $__internal_2202d25dcfc3b9efc241f66d3fcc1db4cf6374cc375b66b24c9d9ae468728127->enter($__internal_2202d25dcfc3b9efc241f66d3fcc1db4cf6374cc375b66b24c9d9ae468728127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::Base.html.twig"));

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
        
        $__internal_2202d25dcfc3b9efc241f66d3fcc1db4cf6374cc375b66b24c9d9ae468728127->leave($__internal_2202d25dcfc3b9efc241f66d3fcc1db4cf6374cc375b66b24c9d9ae468728127_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf68bdd10a08ff5fea2c5ec9d40822780ff03388563d8c706f6ae2dfe5c9a31f = $this->env->getExtension("native_profiler");
        $__internal_bf68bdd10a08ff5fea2c5ec9d40822780ff03388563d8c706f6ae2dfe5c9a31f->enter($__internal_bf68bdd10a08ff5fea2c5ec9d40822780ff03388563d8c706f6ae2dfe5c9a31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bf68bdd10a08ff5fea2c5ec9d40822780ff03388563d8c706f6ae2dfe5c9a31f->leave($__internal_bf68bdd10a08ff5fea2c5ec9d40822780ff03388563d8c706f6ae2dfe5c9a31f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c3c887c57824225e77e4bdf4208f262187120969312cf87be22b14da311ec40 = $this->env->getExtension("native_profiler");
        $__internal_5c3c887c57824225e77e4bdf4208f262187120969312cf87be22b14da311ec40->enter($__internal_5c3c887c57824225e77e4bdf4208f262187120969312cf87be22b14da311ec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c3c887c57824225e77e4bdf4208f262187120969312cf87be22b14da311ec40->leave($__internal_5c3c887c57824225e77e4bdf4208f262187120969312cf87be22b14da311ec40_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3cb636e2d3e778027e2bc457d174b46c1eb2b7d5fb738001eaec537889047c = $this->env->getExtension("native_profiler");
        $__internal_8e3cb636e2d3e778027e2bc457d174b46c1eb2b7d5fb738001eaec537889047c->enter($__internal_8e3cb636e2d3e778027e2bc457d174b46c1eb2b7d5fb738001eaec537889047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e3cb636e2d3e778027e2bc457d174b46c1eb2b7d5fb738001eaec537889047c->leave($__internal_8e3cb636e2d3e778027e2bc457d174b46c1eb2b7d5fb738001eaec537889047c_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6aa957da7e39c6296e2467e491f12a4a01b6e1dfc3d8ee8d4d7df7678505bad7 = $this->env->getExtension("native_profiler");
        $__internal_6aa957da7e39c6296e2467e491f12a4a01b6e1dfc3d8ee8d4d7df7678505bad7->enter($__internal_6aa957da7e39c6296e2467e491f12a4a01b6e1dfc3d8ee8d4d7df7678505bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6aa957da7e39c6296e2467e491f12a4a01b6e1dfc3d8ee8d4d7df7678505bad7->leave($__internal_6aa957da7e39c6296e2467e491f12a4a01b6e1dfc3d8ee8d4d7df7678505bad7_prof);

    }

    public function getTemplateName()
    {
        return "::Base.html.twig";
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
