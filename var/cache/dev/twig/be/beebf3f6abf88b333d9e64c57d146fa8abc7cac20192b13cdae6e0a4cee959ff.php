<?php

/* AdminBundle:Admin:add.html.twig */
class __TwigTemplate_8ba24796040a5ca8a28e93a95ad8aaa0f7d2023b32be185d5e977caf94a109e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Admin:add.html.twig", 2);
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
        $__internal_85319c432b0133d93d05028093a1691d27bde086e3d69e7df4bd447f838db05e = $this->env->getExtension("native_profiler");
        $__internal_85319c432b0133d93d05028093a1691d27bde086e3d69e7df4bd447f838db05e->enter($__internal_85319c432b0133d93d05028093a1691d27bde086e3d69e7df4bd447f838db05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85319c432b0133d93d05028093a1691d27bde086e3d69e7df4bd447f838db05e->leave($__internal_85319c432b0133d93d05028093a1691d27bde086e3d69e7df4bd447f838db05e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2b41b679c145e7d0fb67272b429aea3cfca885dae70e0193cf1fc8a5db8470e = $this->env->getExtension("native_profiler");
        $__internal_d2b41b679c145e7d0fb67272b429aea3cfca885dae70e0193cf1fc8a5db8470e->enter($__internal_d2b41b679c145e7d0fb67272b429aea3cfca885dae70e0193cf1fc8a5db8470e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>Ajouter une Machine</h2>
  ";
        // line 5
        echo twig_include($this->env, $context, "AdminBundle:Admin:form.html.twig");
        echo "

  <p>
    Attention : cette Machine sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_d2b41b679c145e7d0fb67272b429aea3cfca885dae70e0193cf1fc8a5db8470e->leave($__internal_d2b41b679c145e7d0fb67272b429aea3cfca885dae70e0193cf1fc8a5db8470e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 2,);
    }
}
/* {# src/AdminBundle/Resources/views/admin/add.html.twig #}*/
/* {% extends "::admin.html.twig" %}*/
/* {% block body %}*/
/*   <h2>Ajouter une Machine</h2>*/
/*   {{ include("AdminBundle:Admin:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette Machine sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
