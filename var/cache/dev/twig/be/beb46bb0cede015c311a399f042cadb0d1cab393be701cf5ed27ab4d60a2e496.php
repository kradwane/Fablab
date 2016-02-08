<?php

/* AdminBundle:Enseignant:edit.html.twig */
class __TwigTemplate_3f9bd3e27a434ee70c6faff5d5d9cab071df611bf4dcd867fe93c56a53dca32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Enseignant:edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f89ae94f99a726dfcf7582c323f05768821e2a4258e9b63db3dd3b20c32e9e3b = $this->env->getExtension("native_profiler");
        $__internal_f89ae94f99a726dfcf7582c323f05768821e2a4258e9b63db3dd3b20c32e9e3b->enter($__internal_f89ae94f99a726dfcf7582c323f05768821e2a4258e9b63db3dd3b20c32e9e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Enseignant:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89ae94f99a726dfcf7582c323f05768821e2a4258e9b63db3dd3b20c32e9e3b->leave($__internal_f89ae94f99a726dfcf7582c323f05768821e2a4258e9b63db3dd3b20c32e9e3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f38e53b1e73c1306fc89efa3c56248978489cbfb1731497e66f78d341ac2b61 = $this->env->getExtension("native_profiler");
        $__internal_7f38e53b1e73c1306fc89efa3c56248978489cbfb1731497e66f78d341ac2b61->enter($__internal_7f38e53b1e73c1306fc89efa3c56248978489cbfb1731497e66f78d341ac2b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modification de l'Enseignant</h2>

";
        // line 9
        echo twig_include($this->env, $context, "AdminBundle:Enseignant:form.html.twig");
        echo "

  <p>
    Attention : Enseignant sera modifié directement
    sur la page d'accueil après validation de la modification.
  </p>

";
        
        $__internal_7f38e53b1e73c1306fc89efa3c56248978489cbfb1731497e66f78d341ac2b61->leave($__internal_7f38e53b1e73c1306fc89efa3c56248978489cbfb1731497e66f78d341ac2b61_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Enseignant:edit.html.twig";
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
/* {# src/AdminBundle/Resources/views/admin/add.html.twig #}*/
/* */
/* {% extends "::admin.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Modification de l'Enseignant</h2>*/
/* */
/* {{ include("AdminBundle:Enseignant:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : Enseignant sera modifié directement*/
/*     sur la page d'accueil après validation de la modification.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
