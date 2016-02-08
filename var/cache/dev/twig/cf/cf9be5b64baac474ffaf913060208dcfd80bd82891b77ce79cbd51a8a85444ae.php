<?php

/* AdminBundle:Enseignant:list.html.twig */
class __TwigTemplate_6cb4f2200446dd9fa33cefafa098875efb153e9ce3466e723ada07569df4ba40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Enseignant:list.html.twig", 3);
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
        $__internal_4ed1093d210374a9c3b277ef68133c7cefbfa1049d8f2a6b01f94fc5dad30c66 = $this->env->getExtension("native_profiler");
        $__internal_4ed1093d210374a9c3b277ef68133c7cefbfa1049d8f2a6b01f94fc5dad30c66->enter($__internal_4ed1093d210374a9c3b277ef68133c7cefbfa1049d8f2a6b01f94fc5dad30c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Enseignant:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ed1093d210374a9c3b277ef68133c7cefbfa1049d8f2a6b01f94fc5dad30c66->leave($__internal_4ed1093d210374a9c3b277ef68133c7cefbfa1049d8f2a6b01f94fc5dad30c66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_412dcea34b2406e4b1fcc7d0f9dffc6eecd2dfae6c53fa5fa509f6f68d349078 = $this->env->getExtension("native_profiler");
        $__internal_412dcea34b2406e4b1fcc7d0f9dffc6eecd2dfae6c53fa5fa509f6f68d349078->enter($__internal_412dcea34b2406e4b1fcc7d0f9dffc6eecd2dfae6c53fa5fa509f6f68d349078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'un enseignant - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_412dcea34b2406e4b1fcc7d0f9dffc6eecd2dfae6c53fa5fa509f6f68d349078->leave($__internal_412dcea34b2406e4b1fcc7d0f9dffc6eecd2dfae6c53fa5fa509f6f68d349078_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_557f9ee5240067ff8584cf5b05853afb65ceb692baae1d32aa76041ddd3ca858 = $this->env->getExtension("native_profiler");
        $__internal_557f9ee5240067ff8584cf5b05853afb65ceb692baae1d32aa76041ddd3ca858->enter($__internal_557f9ee5240067ff8584cf5b05853afb65ceb692baae1d32aa76041ddd3ca858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<center><h3>Liste des Enseignants</h3></center>
  <div class=\"well\">
<table>
<tr><td>Nom</td><td>Nom</td><td>Prenom</td><td>Information</td>
<td>Email</td><td>NumTel</td></tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEnseignants"]) ? $context["listEnseignants"] : $this->getContext($context, "listEnseignants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 16
            echo "      <tr><td>
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_view", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "nom", array()), "html", null, true);
            echo "
        </a></td>
        <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "prenom", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "info", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "email", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["enseignant"], "numtel", array()), "html", null, true);
            echo " </td>

        <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_delete", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_edit", array("id" => $this->getAttribute($context["enseignant"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        </tr>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "      <li>Pas (encore !) d'enseignants</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
  </div>

  ";
        // line 51
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("ens_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon\"></i>
      Ajouter Enseignant
    </a>



";
        
        $__internal_557f9ee5240067ff8584cf5b05853afb65ceb692baae1d32aa76041ddd3ca858->leave($__internal_557f9ee5240067ff8584cf5b05853afb65ceb692baae1d32aa76041ddd3ca858_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Enseignant:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 51,  118 => 32,  111 => 30,  102 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  72 => 17,  69 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/* <center><h3>Liste des Enseignants</h3></center>*/
/*   <div class="well">*/
/* <table>*/
/* <tr><td>Nom</td><td>Nom</td><td>Prenom</td><td>Information</td>*/
/* <td>Email</td><td>NumTel</td></tr>*/
/*     {% for enseignant in listEnseignants %}*/
/*       <tr><td>*/
/*         <a href="{{ path('ens_view', {'id': enseignant.id}) }}">*/
/*           {{ enseignant.nom }}*/
/*         </a></td>*/
/*         <td> {{ enseignant.prenom }} </td>*/
/*         <td> {{ enseignant.info }} </td>*/
/*         <td> {{ enseignant.email }} </td>*/
/*         <td> {{ enseignant.numtel }} </td>*/
/* */
/*         <td><a href="{{ path('ens_delete', {'id': enseignant.id}) }}">Supprimer</a></td>*/
/*         <td><a href="{{ path('ens_edit', {'id': enseignant.id}) }}">Modifier</a></td>*/
/*         </tr>*/
/* */
/*     {% else %}*/
/*       <li>Pas (encore !) d'enseignants</li>*/
/*     {% endfor %}*/
/* </table>*/
/*   </div>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce*/
/*   {% if enseignant.image is not null %}*/
/*     <img src="{{ enseignant.image.url }}" alt="{{ enseignant.image.alt }}">*/
/*   {% endif %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('ens_listview') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('ens_edit', {'id': enseignant.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier Enseignant*/
/*     </a>*/
/*   </p>*/
/*       #}*/
/*     <a href="{{ path('ens_add')}}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon"></i>*/
/*       Ajouter Enseignant*/
/*     </a>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
