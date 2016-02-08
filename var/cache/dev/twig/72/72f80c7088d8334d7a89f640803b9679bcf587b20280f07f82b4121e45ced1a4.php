<?php

/* AdminBundle:Admin:list.html.twig */
class __TwigTemplate_8de7aec27939afaf0fbb5828bfaef052cbc14a4c14ca7eb013dafae62331eaae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Admin:list.html.twig", 3);
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
        $__internal_40abe7107a4b6f7c4c2fff4499bc395803c0ec5e3431693bad54693ea5e81a9c = $this->env->getExtension("native_profiler");
        $__internal_40abe7107a4b6f7c4c2fff4499bc395803c0ec5e3431693bad54693ea5e81a9c->enter($__internal_40abe7107a4b6f7c4c2fff4499bc395803c0ec5e3431693bad54693ea5e81a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40abe7107a4b6f7c4c2fff4499bc395803c0ec5e3431693bad54693ea5e81a9c->leave($__internal_40abe7107a4b6f7c4c2fff4499bc395803c0ec5e3431693bad54693ea5e81a9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9ddf29c60d7646a7c8553d2c45c9160e4dff78a156952e473357836968ce51b = $this->env->getExtension("native_profiler");
        $__internal_b9ddf29c60d7646a7c8553d2c45c9160e4dff78a156952e473357836968ce51b->enter($__internal_b9ddf29c60d7646a7c8553d2c45c9160e4dff78a156952e473357836968ce51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b9ddf29c60d7646a7c8553d2c45c9160e4dff78a156952e473357836968ce51b->leave($__internal_b9ddf29c60d7646a7c8553d2c45c9160e4dff78a156952e473357836968ce51b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8767148d8cd9d644f53a3183b0d6144e87c1dedeb2c1ae4527d36f5bd649131b = $this->env->getExtension("native_profiler");
        $__internal_8767148d8cd9d644f53a3183b0d6144e87c1dedeb2c1ae4527d36f5bd649131b->enter($__internal_8767148d8cd9d644f53a3183b0d6144e87c1dedeb2c1ae4527d36f5bd649131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<center><h3>Liste des Machines</h3></center>
  <div class=\"well\">
<table>
<tr><td>Nom</td><td>infogenerale</td><td>Surface</td><td>Résolution</td>
<td>Précision</td><td>Logiciel</td><td>Matériaux</td><td>Puissance</td></tr>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMachines"]) ? $context["listMachines"] : $this->getContext($context, "listMachines")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 16
            echo "      <tr><td>
        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_view", array("id" => $this->getAttribute($context["machine"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "nomM", array()), "html", null, true);
            echo "
        </a></td>
        <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "surface", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "resolution", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "presicionm", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "logicielu", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "formatfich", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "materiauxu", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["machine"], "puissance", array()), "html", null, true);
            echo " </td>
        <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute($context["machine"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_edit", array("id" => $this->getAttribute($context["machine"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>
        </tr>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "      <li>Pas (encore !) de machines</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>
  </div>

  ";
        // line 53
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("platform_add");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon\"></i>
      Ajouter Machine
    </a>



";
        
        $__internal_8767148d8cd9d644f53a3183b0d6144e87c1dedeb2c1ae4527d36f5bd649131b->leave($__internal_8767148d8cd9d644f53a3183b0d6144e87c1dedeb2c1ae4527d36f5bd649131b_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  129 => 34,  122 => 32,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 18,  72 => 17,  69 => 16,  64 => 15,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/AsnaBundle/Resources/view/machine/view.html.twig #}*/
/* */
/* {% extends "::admin.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une machine - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <center><h3>Liste des Machines</h3></center>*/
/*   <div class="well">*/
/* <table>*/
/* <tr><td>Nom</td><td>infogenerale</td><td>Surface</td><td>Résolution</td>*/
/* <td>Précision</td><td>Logiciel</td><td>Matériaux</td><td>Puissance</td></tr>*/
/*     {% for machine in listMachines %}*/
/*       <tr><td>*/
/*         <a href="{{ path('platform_view', {'id': machine.id}) }}">*/
/*           {{ machine.nomM }}*/
/*         </a></td>*/
/*         <td> {{ machine.surface }} </td>*/
/*         <td> {{ machine.resolution }} </td>*/
/*         <td> {{ machine.presicionm }} </td>*/
/*         <td> {{ machine.logicielu }} </td>*/
/*         <td> {{ machine.formatfich }} </td>*/
/*         <td> {{ machine.materiauxu }} </td>*/
/*         <td> {{ machine.puissance }} </td>*/
/*         <td><a href="{{ path('platform_delete', {'id': machine.id}) }}">Supprimer</a></td>*/
/*         <td><a href="{{ path('platform_edit', {'id': machine.id}) }}">Modifier</a></td>*/
/*         </tr>*/
/* */
/*     {% else %}*/
/*       <li>Pas (encore !) de machines</li>*/
/*     {% endfor %}*/
/* </table>*/
/*   </div>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce*/
/*   {% if machine.image is not null %}*/
/*     <img src="{{ machine.image.url }}" alt="{{ machine.image.alt }}">*/
/*   {% endif %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('platform_edit', {'id': machine.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier Machine*/
/*     </a>*/
/*   </p>*/
/*       #}*/
/*     <a href="{{ path('platform_add')}}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon"></i>*/
/*       Ajouter Machine*/
/*     </a>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
