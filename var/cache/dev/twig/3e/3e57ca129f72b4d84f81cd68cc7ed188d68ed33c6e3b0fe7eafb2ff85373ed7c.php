<?php

/* AsnaBundle:Advert:add.html.twig */
class __TwigTemplate_280280448debc515b47900d70c568cb977bb5bc53200187ae7330ffc24e7e7b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::header.html.twig", "AsnaBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fda6a3b27aff8b52b95203e9403f3cfbf76f14f2f162655ce9fb12f435bbf4b = $this->env->getExtension("native_profiler");
        $__internal_1fda6a3b27aff8b52b95203e9403f3cfbf76f14f2f162655ce9fb12f435bbf4b->enter($__internal_1fda6a3b27aff8b52b95203e9403f3cfbf76f14f2f162655ce9fb12f435bbf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsnaBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fda6a3b27aff8b52b95203e9403f3cfbf76f14f2f162655ce9fb12f435bbf4b->leave($__internal_1fda6a3b27aff8b52b95203e9403f3cfbf76f14f2f162655ce9fb12f435bbf4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e631b53c814bb191dab3dad80cead37745bc3fbaefea8b76fc902b4b9aa35f7b = $this->env->getExtension("native_profiler");
        $__internal_e631b53c814bb191dab3dad80cead37745bc3fbaefea8b76fc902b4b9aa35f7b->enter($__internal_e631b53c814bb191dab3dad80cead37745bc3fbaefea8b76fc902b4b9aa35f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "AsnaBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_e631b53c814bb191dab3dad80cead37745bc3fbaefea8b76fc902b4b9aa35f7b->leave($__internal_e631b53c814bb191dab3dad80cead37745bc3fbaefea8b76fc902b4b9aa35f7b_prof);

    }

    public function getTemplateName()
    {
        return "AsnaBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "::header.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("AsnaBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
