<?php

/* AdminBundle:Admin:index.html.twig */
class __TwigTemplate_6387e44aa5fb6edf06536ffc6b71aa1fd7cd696bdbbc68169ba735c1ef4cb7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.html.twig", "AdminBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7f58a8da6d7fd2f4895214a25f6be6668996685561b28678f0061af2662caf4 = $this->env->getExtension("native_profiler");
        $__internal_a7f58a8da6d7fd2f4895214a25f6be6668996685561b28678f0061af2662caf4->enter($__internal_a7f58a8da6d7fd2f4895214a25f6be6668996685561b28678f0061af2662caf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7f58a8da6d7fd2f4895214a25f6be6668996685561b28678f0061af2662caf4->leave($__internal_a7f58a8da6d7fd2f4895214a25f6be6668996685561b28678f0061af2662caf4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9db4eadf3bad3ce537039f6c79288619116b88c3f5854425338df1a9cd28c76f = $this->env->getExtension("native_profiler");
        $__internal_9db4eadf3bad3ce537039f6c79288619116b88c3f5854425338df1a9cd28c76f->enter($__internal_9db4eadf3bad3ce537039f6c79288619116b88c3f5854425338df1a9cd28c76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9db4eadf3bad3ce537039f6c79288619116b88c3f5854425338df1a9cd28c76f->leave($__internal_9db4eadf3bad3ce537039f6c79288619116b88c3f5854425338df1a9cd28c76f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b67706eacfadb201e2f1b946a2a29ec2130a79b61287a095758f1804389aff7a = $this->env->getExtension("native_profiler");
        $__internal_b67706eacfadb201e2f1b946a2a29ec2130a79b61287a095758f1804389aff7a->enter($__internal_b67706eacfadb201e2f1b946a2a29ec2130a79b61287a095758f1804389aff7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<center>
<div class='row'>
                    <div class='row portfolio-boxes'>
                        <div class='col-sm-4 col-xs-6 no-mb-t-xs portfolio-box'>
                            <a class='image-link' href='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("platform_listview");
        echo "'>
                                <i class='fa-icon-search'></i>
                                <img class=\"img-responsive img-rounded center-block\" alt=\"Machines\"
                                     width=\"262\" height=\"262\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/demo/last_projects/fraiseuse.jpg"), "html", null, true);
        echo "\"/>
                            </a>

                            <h3 class='title'>Gestion des Machines</h3>

                            <p class='category'></p>
                        </div>
                        <div class='col-sm-4 col-xs-6 no-mb-t-xs portfolio-box'>
                            <a class='image-link' href='";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_accueil");
        echo "'>
                                <i class='fa-icon-link'></i>
                                <img class=\"img-responsive img-rounded center-block\" alt=\"Malesuada\" width=\"262\"
                                     height=\"262\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/demo/last_projects/4.png"), "html", null, true);
        echo "\"/>
                            </a>

                            <h3 class='title'>Gestion d'Evénements</h3>

                            <p class='category'></p>
                        </div>
                        <div class='col-sm-4 col-xs-6 portfolio-box'>
                            <a href='";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ens_listview");
        echo "'>
                                <div class='image-link'>
                                    <i class='fa-icon-search'></i>
                                    <img class=\"img-responsive img-rounded center-block\" alt=\"Dictum vulputate\"
                                         width=\"262\" height=\"262\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/demo/last_projects/photographer.jpg"), "html", null, true);
        echo "\"/>
                                </div>
                                <h3 class='title'>Gestion des Enseignants</h3>

                                <p class='category'></p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
</center>
";
        
        $__internal_b67706eacfadb201e2f1b946a2a29ec2130a79b61287a095758f1804389aff7a->leave($__internal_b67706eacfadb201e2f1b946a2a29ec2130a79b61287a095758f1804389aff7a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  97 => 34,  86 => 26,  80 => 23,  69 => 15,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "admin.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <center>*/
/* <div class='row'>*/
/*                     <div class='row portfolio-boxes'>*/
/*                         <div class='col-sm-4 col-xs-6 no-mb-t-xs portfolio-box'>*/
/*                             <a class='image-link' href='{{ path('platform_listview') }}'>*/
/*                                 <i class='fa-icon-search'></i>*/
/*                                 <img class="img-responsive img-rounded center-block" alt="Machines"*/
/*                                      width="262" height="262" src="{{asset('assets/images/demo/last_projects/fraiseuse.jpg')}}"/>*/
/*                             </a>*/
/* */
/*                             <h3 class='title'>Gestion des Machines</h3>*/
/* */
/*                             <p class='category'></p>*/
/*                         </div>*/
/*                         <div class='col-sm-4 col-xs-6 no-mb-t-xs portfolio-box'>*/
/*                             <a class='image-link' href='{{ path('admin_accueil') }}'>*/
/*                                 <i class='fa-icon-link'></i>*/
/*                                 <img class="img-responsive img-rounded center-block" alt="Malesuada" width="262"*/
/*                                      height="262" src="{{asset('assets/images/demo/last_projects/4.png')}}"/>*/
/*                             </a>*/
/* */
/*                             <h3 class='title'>Gestion d'Evénements</h3>*/
/* */
/*                             <p class='category'></p>*/
/*                         </div>*/
/*                         <div class='col-sm-4 col-xs-6 portfolio-box'>*/
/*                             <a href='{{ path('ens_listview') }}'>*/
/*                                 <div class='image-link'>*/
/*                                     <i class='fa-icon-search'></i>*/
/*                                     <img class="img-responsive img-rounded center-block" alt="Dictum vulputate"*/
/*                                          width="262" height="262" src="{{asset('assets/images/demo/last_projects/photographer.jpg')}}"/>*/
/*                                 </div>*/
/*                                 <h3 class='title'>Gestion des Enseignants</h3>*/
/* */
/*                                 <p class='category'></p>*/
/*                             </a>*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* </center>*/
/* {% endblock %}*/
/* */
