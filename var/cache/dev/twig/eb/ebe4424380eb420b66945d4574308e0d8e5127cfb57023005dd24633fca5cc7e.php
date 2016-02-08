<?php

/* AdminBundle:Admin:edit.html.twig */
class __TwigTemplate_367c58ea0e3246c69b474b4759d19a914ffb60c8abfb2404d126d15b29692408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Admin:edit.html.twig", 3);
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
        $__internal_b18a8b43fa1482dbcf14c33df7bc842026f35c81b5fd8cf01ccffc362df207f1 = $this->env->getExtension("native_profiler");
        $__internal_b18a8b43fa1482dbcf14c33df7bc842026f35c81b5fd8cf01ccffc362df207f1->enter($__internal_b18a8b43fa1482dbcf14c33df7bc842026f35c81b5fd8cf01ccffc362df207f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18a8b43fa1482dbcf14c33df7bc842026f35c81b5fd8cf01ccffc362df207f1->leave($__internal_b18a8b43fa1482dbcf14c33df7bc842026f35c81b5fd8cf01ccffc362df207f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3b947d04119677ff26fb40a188696158efcd70ca122068c5168e9d6dd1db4d = $this->env->getExtension("native_profiler");
        $__internal_da3b947d04119677ff26fb40a188696158efcd70ca122068c5168e9d6dd1db4d->enter($__internal_da3b947d04119677ff26fb40a188696158efcd70ca122068c5168e9d6dd1db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Modification de la Machine</h2>

";
        // line 9
        echo twig_include($this->env, $context, "AdminBundle:Admin:form.html.twig");
        echo "

  <p>
    Attention : cette Machine sera modifié directement
    sur la page d'accueil après validation de la modification.
  </p>

";
        
        $__internal_da3b947d04119677ff26fb40a188696158efcd70ca122068c5168e9d6dd1db4d->leave($__internal_da3b947d04119677ff26fb40a188696158efcd70ca122068c5168e9d6dd1db4d_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:edit.html.twig";
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
/*   <h2>Modification de la Machine</h2>*/
/* */
/* {{ include("AdminBundle:Admin:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette Machine sera modifié directement*/
/*     sur la page d'accueil après validation de la modification.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
