<?php

/* AsnaBundle:Advert:edit.html.twig */
class __TwigTemplate_bc0ee7f4f5836531556ce1f1b4a1144bd06bbaf5a6719753d8d734d83fe7cb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::header.html.twig", "AsnaBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db52a85071e3b27d9fdac5991cf0891afe3495142e1bbc81c968d9be20871406 = $this->env->getExtension("native_profiler");
        $__internal_db52a85071e3b27d9fdac5991cf0891afe3495142e1bbc81c968d9be20871406->enter($__internal_db52a85071e3b27d9fdac5991cf0891afe3495142e1bbc81c968d9be20871406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsnaBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db52a85071e3b27d9fdac5991cf0891afe3495142e1bbc81c968d9be20871406->leave($__internal_db52a85071e3b27d9fdac5991cf0891afe3495142e1bbc81c968d9be20871406_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_604da09614e7e952a7ea835beea2d34a0941d304672ad3dd15f4dfb4b57617ee = $this->env->getExtension("native_profiler");
        $__internal_604da09614e7e952a7ea835beea2d34a0941d304672ad3dd15f4dfb4b57617ee->enter($__internal_604da09614e7e952a7ea835beea2d34a0941d304672ad3dd15f4dfb4b57617ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_604da09614e7e952a7ea835beea2d34a0941d304672ad3dd15f4dfb4b57617ee->leave($__internal_604da09614e7e952a7ea835beea2d34a0941d304672ad3dd15f4dfb4b57617ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d71c905b3ff3f73656472bc4518e9002c38ef20c9d84b11e093f13a9682aa94f = $this->env->getExtension("native_profiler");
        $__internal_d71c905b3ff3f73656472bc4518e9002c38ef20c9d84b11e093f13a9682aa94f->enter($__internal_d71c905b3ff3f73656472bc4518e9002c38ef20c9d84b11e093f13a9682aa94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "AsnaBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_d71c905b3ff3f73656472bc4518e9002c38ef20c9d84b11e093f13a9682aa94f->leave($__internal_d71c905b3ff3f73656472bc4518e9002c38ef20c9d84b11e093f13a9682aa94f_prof);

    }

    public function getTemplateName()
    {
        return "AsnaBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/AsnaBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "::header.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("AsnaBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
