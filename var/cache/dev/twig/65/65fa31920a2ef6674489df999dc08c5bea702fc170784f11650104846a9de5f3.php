<?php

/* AdminBundle:Enseignant:view.html.twig */
class __TwigTemplate_13b0e2a998af7cb048f2b463d52c7953cd3a205c50d063837807060f78574971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Enseignant:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e4ec56800822dd257e27d6d7d06bb7511972288dda70b855c16c5e81ac78267 = $this->env->getExtension("native_profiler");
        $__internal_9e4ec56800822dd257e27d6d7d06bb7511972288dda70b855c16c5e81ac78267->enter($__internal_9e4ec56800822dd257e27d6d7d06bb7511972288dda70b855c16c5e81ac78267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Enseignant:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e4ec56800822dd257e27d6d7d06bb7511972288dda70b855c16c5e81ac78267->leave($__internal_9e4ec56800822dd257e27d6d7d06bb7511972288dda70b855c16c5e81ac78267_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ad245b24ccf4b35766473321fd8e92d6e9f0a2b8d4d39b99a5b7e499aeaade7 = $this->env->getExtension("native_profiler");
        $__internal_5ad245b24ccf4b35766473321fd8e92d6e9f0a2b8d4d39b99a5b7e499aeaade7->enter($__internal_5ad245b24ccf4b35766473321fd8e92d6e9f0a2b8d4d39b99a5b7e499aeaade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un enseignant - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5ad245b24ccf4b35766473321fd8e92d6e9f0a2b8d4d39b99a5b7e499aeaade7->leave($__internal_5ad245b24ccf4b35766473321fd8e92d6e9f0a2b8d4d39b99a5b7e499aeaade7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb8fb56b54e6c6b4438bf65d5c1f5423978a2b2d9b1ca18d2a2aaed18c1ff98f = $this->env->getExtension("native_profiler");
        $__internal_cb8fb56b54e6c6b4438bf65d5c1f5423978a2b2d9b1ca18d2a2aaed18c1ff98f->enter($__internal_cb8fb56b54e6c6b4438bf65d5c1f5423978a2b2d9b1ca18d2a2aaed18c1ff98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <div class=\"well\">

    Nom :";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nom", array()), "html", null, true);
        echo "<br>
    Prenom  :";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenom", array()), "html", null, true);
        echo "<br>
    Email  :";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "email", array()), "html", null, true);
        echo "<br>
    Information :";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "info", array()), "html", null, true);
        echo "<br>
    Num Téléphone  :";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "numtel", array()), "html", null, true);
        echo "<br>
  </div>

  ";
        // line 24
        echo "  <p>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ens_listview");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_edit", array("id" => $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier enseignant
    </a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_delete", array("id" => $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer enseignant
    </a>
  </p>

";
        
        $__internal_cb8fb56b54e6c6b4438bf65d5c1f5423978a2b2d9b1ca18d2a2aaed18c1ff98f->leave($__internal_cb8fb56b54e6c6b4438bf65d5c1f5423978a2b2d9b1ca18d2a2aaed18c1ff98f_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Enseignant:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  93 => 29,  86 => 25,  83 => 24,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/AsnaBundle/Resources/view/enseignant/view.html.twig #}*/
/* */
/* {% extends "::admin.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un enseignant - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="well">*/
/* */
/*     Nom :{{ enseignant.nom }}<br>*/
/*     Prenom  :{{ enseignant.prenom }}<br>*/
/*     Email  :{{ enseignant.email }}<br>*/
/*     Information :{{ enseignant.info }}<br>*/
/*     Num Téléphone  :{{ enseignant.numtel }}<br>*/
/*   </div>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce*/
/*   {% if enseignant.image is not null %}*/
/*     <img src="{{ enseignant.image.url }}" alt="{{ enseignant.image.alt }}">*/
/*   {% endif %}*/
/* #}*/
/*   <p>*/
/*     <a href="{{ path('ens_listview') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('ens_edit', {'id': enseignant.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier enseignant*/
/*     </a>*/
/*     <a href="{{ path('ens_delete', {'id': enseignant.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer enseignant*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
