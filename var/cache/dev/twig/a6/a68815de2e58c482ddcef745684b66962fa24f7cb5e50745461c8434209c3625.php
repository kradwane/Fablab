<?php

/* AdminBundle:Admin:view.html.twig */
class __TwigTemplate_33730172ed73a506a56482c4bb7d020a2685abf022ce7d087b25c3103a95e82d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::admin.html.twig", "AdminBundle:Admin:view.html.twig", 3);
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
        $__internal_582d6737f4f0947dff3dd02c180e1ff8afcc88503b901791a9ae441520f38ee4 = $this->env->getExtension("native_profiler");
        $__internal_582d6737f4f0947dff3dd02c180e1ff8afcc88503b901791a9ae441520f38ee4->enter($__internal_582d6737f4f0947dff3dd02c180e1ff8afcc88503b901791a9ae441520f38ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582d6737f4f0947dff3dd02c180e1ff8afcc88503b901791a9ae441520f38ee4->leave($__internal_582d6737f4f0947dff3dd02c180e1ff8afcc88503b901791a9ae441520f38ee4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f5a4847e2df441811fb5f9a6bf9c46da2016bde0533058ed07b3696e87ded5e = $this->env->getExtension("native_profiler");
        $__internal_8f5a4847e2df441811fb5f9a6bf9c46da2016bde0533058ed07b3696e87ded5e->enter($__internal_8f5a4847e2df441811fb5f9a6bf9c46da2016bde0533058ed07b3696e87ded5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une machine - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f5a4847e2df441811fb5f9a6bf9c46da2016bde0533058ed07b3696e87ded5e->leave($__internal_8f5a4847e2df441811fb5f9a6bf9c46da2016bde0533058ed07b3696e87ded5e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff872b8c86f8d4619160444dbe1ab1ea09267b03602c12ee59931377468cf7fe = $this->env->getExtension("native_profiler");
        $__internal_ff872b8c86f8d4619160444dbe1ab1ea09267b03602c12ee59931377468cf7fe->enter($__internal_ff872b8c86f8d4619160444dbe1ab1ea09267b03602c12ee59931377468cf7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <div class=\"well\">
<div id='main' role='main'>
  <div id='main-content-header'>
    <div class='container'>
      <div class='row'>
        <div class='col-sm-12'>
          <h1 class='title'>
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "nomM", array()), "html", null, true);
        echo "
          </h1>
          <ol class='breadcrumb'>
            <li>
              <a href='index.html'>
                <i class='fa-icon-home'></i>
              </a>
            </li>
            <li class='active'>Machines</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div id='main-content'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-push-9 col-sm-push-8 col-sm-4 col-md-3'>
          <nav class='sidebar'>
            <button class='btn btn-block btn-contrast sidebar-toggle' data-target='.sidebar-collapse' data-toggle='collapse' type='button'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
            <div class='sidebar-collapse collapse'>
              <div class='box'>
                <h2 class='title'>TECHNIQUES</h2>
              </div>
              <div class='box'>
                <div class='list-group'>

                                <span class=\"list-group-item\">
                              <strong>Surface maximale:</strong><br>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "surface", array()), "html", null, true);
        echo "</span>
                              <span class=\"list-group-item\" >
                            <strong>Résolution méchanique:</strong><br>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "resolution", array()), "html", null, true);
        echo "</span>
                            <span class=\"list-group-item\" >
                          <strong>Précision de position:</strong><br>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "presicionm", array()), "html", null, true);
        echo "</span>
                          <span class=\"list-group-item\" >
                        <strong>Logiciel utilisé:</strong><br>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "logicielu", array()), "html", null, true);
        echo "</span>
                        <span class=\"list-group-item\" >
                      <strong>Formats de fichier acceptés:</strong><br>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "formatfich", array()), "html", null, true);
        echo "</span>
                      <span class=\"list-group-item\">
                    <strong>Matériaux utilisés:</strong><br>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "materiauxu", array()), "html", null, true);
        echo " </span>
                    <span class=\"list-group-item\">
                  <strong>Puissance:</strong><br>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "puissance", array()), "html", null, true);
        echo " </span>
            </div>
              </div>
              <div class='box'>
                <h3 class='title'>Projets avec cette machines</h3>
                <ul class='list-unstyled list-inline image-list-box'>
                  <li>
                    <a href='#'>
                      <img width=\"50\" height=\"50\" src=\"assets/images/demo/stream/xx.jpg\" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img  width=\"50\" height=\"50\" src=\"assets/images/demo/stream/xx.jpg\" />
                    </a>
                  </li>
                  <li>
                    <a href='#'>
                      <img  width=\"50\" height=\"50\" src=\"assets/images/demo/stream/xx.jpg\" />
                    </a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>
        <div class='col-md-pull-3 col-sm-pull-4 col-sm-8 col-md-9'>
          <div class='text-boxes'>
            <div class='row text-box text-box-title-above text-box-big-image'>
              <div class='col-sm-12'>
                <h2 class='title'>CARACTERISTIQUE</h2>
                <div class='row'>
                  <div class='col-sm-12'>
                    <a href='blog_single_post.html'>
                      ";
        // line 97
        if ( !(null === $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "image", array()))) {
            // line 98
            echo "                      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
                    ";
        }
        // line 100
        echo "                    </a>
                  </div>
                  <div class='col-sm-12'>
                    <p><strong>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "nomM", array()), "html", null, true);
        echo " </strong><br>
      Informations générales :<br>
          ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "infogenerale", array()), "html", null, true);
        echo "</p>
                    <a class='btn btn-contrast btn-bordered btn-xs' href='blog_single_post.html'>Réservez</a>
                  </div>
                </div>
                <hr class='hr-half'>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class='fade' id='scroll-to-top'>
    <i class='fa-icon-chevron-up'></i>
  </div>
</div>

  ";
        // line 128
        echo "  <p>
    <a href=\"";
        // line 129
        echo $this->env->getExtension('routing')->getPath("platform_listview");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_edit", array("id" => $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier Machine
    </a>
    <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("platform_delete", array("id" => $this->getAttribute((isset($context["machine"]) ? $context["machine"] : $this->getContext($context, "machine")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer Machine
    </a>
  </p>
  </div>
";
        
        $__internal_ff872b8c86f8d4619160444dbe1ab1ea09267b03602c12ee59931377468cf7fe->leave($__internal_ff872b8c86f8d4619160444dbe1ab1ea09267b03602c12ee59931377468cf7fe_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 137,  221 => 133,  214 => 129,  211 => 128,  190 => 105,  185 => 103,  180 => 100,  172 => 98,  170 => 97,  132 => 62,  127 => 60,  122 => 58,  117 => 56,  112 => 54,  107 => 52,  102 => 50,  66 => 17,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
/*   <div class="well">*/
/* <div id='main' role='main'>*/
/*   <div id='main-content-header'>*/
/*     <div class='container'>*/
/*       <div class='row'>*/
/*         <div class='col-sm-12'>*/
/*           <h1 class='title'>*/
/*             {{ machine.nomM }}*/
/*           </h1>*/
/*           <ol class='breadcrumb'>*/
/*             <li>*/
/*               <a href='index.html'>*/
/*                 <i class='fa-icon-home'></i>*/
/*               </a>*/
/*             </li>*/
/*             <li class='active'>Machines</li>*/
/*           </ol>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div id='main-content'>*/
/*     <div class='container'>*/
/*       <div class='row'>*/
/*         <div class='col-md-push-9 col-sm-push-8 col-sm-4 col-md-3'>*/
/*           <nav class='sidebar'>*/
/*             <button class='btn btn-block btn-contrast sidebar-toggle' data-target='.sidebar-collapse' data-toggle='collapse' type='button'>*/
/*               <span class='sr-only'>Toggle navigation</span>*/
/*               <span class='icon-bar'></span>*/
/*               <span class='icon-bar'></span>*/
/*               <span class='icon-bar'></span>*/
/*             </button>*/
/*             <div class='sidebar-collapse collapse'>*/
/*               <div class='box'>*/
/*                 <h2 class='title'>TECHNIQUES</h2>*/
/*               </div>*/
/*               <div class='box'>*/
/*                 <div class='list-group'>*/
/* */
/*                                 <span class="list-group-item">*/
/*                               <strong>Surface maximale:</strong><br>{{ machine.surface }}</span>*/
/*                               <span class="list-group-item" >*/
/*                             <strong>Résolution méchanique:</strong><br>{{ machine.resolution }}</span>*/
/*                             <span class="list-group-item" >*/
/*                           <strong>Précision de position:</strong><br>{{ machine.presicionm }}</span>*/
/*                           <span class="list-group-item" >*/
/*                         <strong>Logiciel utilisé:</strong><br>{{ machine.logicielu }}</span>*/
/*                         <span class="list-group-item" >*/
/*                       <strong>Formats de fichier acceptés:</strong><br>{{ machine.formatfich }}</span>*/
/*                       <span class="list-group-item">*/
/*                     <strong>Matériaux utilisés:</strong><br>{{ machine.materiauxu }} </span>*/
/*                     <span class="list-group-item">*/
/*                   <strong>Puissance:</strong><br>{{ machine.puissance }} </span>*/
/*             </div>*/
/*               </div>*/
/*               <div class='box'>*/
/*                 <h3 class='title'>Projets avec cette machines</h3>*/
/*                 <ul class='list-unstyled list-inline image-list-box'>*/
/*                   <li>*/
/*                     <a href='#'>*/
/*                       <img width="50" height="50" src="assets/images/demo/stream/xx.jpg" />*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href='#'>*/
/*                       <img  width="50" height="50" src="assets/images/demo/stream/xx.jpg" />*/
/*                     </a>*/
/*                   </li>*/
/*                   <li>*/
/*                     <a href='#'>*/
/*                       <img  width="50" height="50" src="assets/images/demo/stream/xx.jpg" />*/
/*                     </a>*/
/*                   </li>*/
/* */
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*           </nav>*/
/*         </div>*/
/*         <div class='col-md-pull-3 col-sm-pull-4 col-sm-8 col-md-9'>*/
/*           <div class='text-boxes'>*/
/*             <div class='row text-box text-box-title-above text-box-big-image'>*/
/*               <div class='col-sm-12'>*/
/*                 <h2 class='title'>CARACTERISTIQUE</h2>*/
/*                 <div class='row'>*/
/*                   <div class='col-sm-12'>*/
/*                     <a href='blog_single_post.html'>*/
/*                       {% if machine.image is not null %}*/
/*                       <img src="{{ machine.image.url }}" alt="{{ machine.image.alt }}">*/
/*                     {% endif %}*/
/*                     </a>*/
/*                   </div>*/
/*                   <div class='col-sm-12'>*/
/*                     <p><strong>{{ machine.nomM }} </strong><br>*/
/*       Informations générales :<br>*/
/*           {{ machine.infogenerale }}</p>*/
/*                     <a class='btn btn-contrast btn-bordered btn-xs' href='blog_single_post.html'>Réservez</a>*/
/*                   </div>*/
/*                 </div>*/
/*                 <hr class='hr-half'>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class='fade' id='scroll-to-top'>*/
/*     <i class='fa-icon-chevron-up'></i>*/
/*   </div>*/
/* </div>*/
/* */
/*   {# On vérifie qu'une image soit bien associée à l'annonce*/
/*   {% if machine.image is not null %}*/
/*     <img src="{{ machine.image.url }}" alt="{{ machine.image.alt }}">*/
/*   {% endif %}*/
/* #}*/
/*   <p>*/
/*     <a href="{{ path('platform_listview') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('platform_edit', {'id': machine.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier Machine*/
/*     </a>*/
/*     <a href="{{ path('platform_delete', {'id': machine.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer Machine*/
/*     </a>*/
/*   </p>*/
/*   </div>*/
/* {% endblock %}*/
/* */
