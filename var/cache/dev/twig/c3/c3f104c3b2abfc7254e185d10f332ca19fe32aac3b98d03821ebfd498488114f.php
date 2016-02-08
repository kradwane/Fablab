<?php

/* AdminBundle:Enseignant:add.html.twig */
class __TwigTemplate_05d17fd4ab93ecee089553fcb9d66c834bb2fad314748581bdda570ed4674e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Enseignant:add.html.twig", 2);
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
        $__internal_78c36ea949502af8e0a9ff6e6f1152c1a76c321476c1df3f3767851497c816ee = $this->env->getExtension("native_profiler");
        $__internal_78c36ea949502af8e0a9ff6e6f1152c1a76c321476c1df3f3767851497c816ee->enter($__internal_78c36ea949502af8e0a9ff6e6f1152c1a76c321476c1df3f3767851497c816ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Enseignant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c36ea949502af8e0a9ff6e6f1152c1a76c321476c1df3f3767851497c816ee->leave($__internal_78c36ea949502af8e0a9ff6e6f1152c1a76c321476c1df3f3767851497c816ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9acabfbda1f0f89aec4a2d8c535c2df569bd718ee7fdb57933abece24692987c = $this->env->getExtension("native_profiler");
        $__internal_9acabfbda1f0f89aec4a2d8c535c2df569bd718ee7fdb57933abece24692987c->enter($__internal_9acabfbda1f0f89aec4a2d8c535c2df569bd718ee7fdb57933abece24692987c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h2>Ajouter un Enseignant</h2>
  ";
        // line 5
        echo twig_include($this->env, $context, "AdminBundle:Enseignant:form.html.twig");
        echo "

  <p>
    Attention : Enseignant sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_9acabfbda1f0f89aec4a2d8c535c2df569bd718ee7fdb57933abece24692987c->leave($__internal_9acabfbda1f0f89aec4a2d8c535c2df569bd718ee7fdb57933abece24692987c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Enseignant:add.html.twig";
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
/*   <h2>Ajouter un Enseignant</h2>*/
/*   {{ include("AdminBundle:Enseignant:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : Enseignant sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
