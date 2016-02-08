<?php

/* AsnaBundle:Advert:index.html.twig */
class __TwigTemplate_e24808c512b30a3cc60ce59a4d45ef3a19e07ac2e50254de97c7ec2db549453e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("header.html.twig", "AsnaBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef1220604736a7c61ee9f3a3aae92b7ec4fc7bea2f29b448412016c09c839d36 = $this->env->getExtension("native_profiler");
        $__internal_ef1220604736a7c61ee9f3a3aae92b7ec4fc7bea2f29b448412016c09c839d36->enter($__internal_ef1220604736a7c61ee9f3a3aae92b7ec4fc7bea2f29b448412016c09c839d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AsnaBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef1220604736a7c61ee9f3a3aae92b7ec4fc7bea2f29b448412016c09c839d36->leave($__internal_ef1220604736a7c61ee9f3a3aae92b7ec4fc7bea2f29b448412016c09c839d36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eaa1b25e10c7cf21494ec5d50fada385b4f1a76176dcd614ad64717118dd27b = $this->env->getExtension("native_profiler");
        $__internal_6eaa1b25e10c7cf21494ec5d50fada385b4f1a76176dcd614ad64717118dd27b->enter($__internal_6eaa1b25e10c7cf21494ec5d50fada385b4f1a76176dcd614ad64717118dd27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6eaa1b25e10c7cf21494ec5d50fada385b4f1a76176dcd614ad64717118dd27b->leave($__internal_6eaa1b25e10c7cf21494ec5d50fada385b4f1a76176dcd614ad64717118dd27b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd68afa3f9b46bdf9b991d654b269eb0aaef17b5faa50fcfe2ed4d32df0381eb = $this->env->getExtension("native_profiler");
        $__internal_dd68afa3f9b46bdf9b991d654b269eb0aaef17b5faa50fcfe2ed4d32df0381eb->enter($__internal_dd68afa3f9b46bdf9b991d654b269eb0aaef17b5faa50fcfe2ed4d32df0381eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_dd68afa3f9b46bdf9b991d654b269eb0aaef17b5faa50fcfe2ed4d32df0381eb->leave($__internal_dd68afa3f9b46bdf9b991d654b269eb0aaef17b5faa50fcfe2ed4d32df0381eb_prof);

    }

    public function getTemplateName()
    {
        return "AsnaBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/AsnaBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "header.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
