<?php

/* AdminBundle:Admin:form.html.twig */
class __TwigTemplate_3bb9debd5415f851a5cebbf63b3afeba2d273df2a34e366e1c24ab86de82d5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89276f61329b18f92af11d27111e678de98c4a61f7388e6dfcb5694253f2fe63 = $this->env->getExtension("native_profiler");
        $__internal_89276f61329b18f92af11d27111e678de98c4a61f7388e6dfcb5694253f2fe63->enter($__internal_89276f61329b18f92af11d27111e678de98c4a61f7388e6dfcb5694253f2fe63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Admin:form.html.twig"));

        // line 2
        echo "
<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 11
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomM", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom de la machine"));
        echo "

      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomM", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomM", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 23
        echo "    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infogenerale", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Information Génerale"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infogenerale", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "infogenerale", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  ";
        // line 32
        echo "  <div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Surface"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surface", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resolution", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Résolution"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resolution", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "resolution", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presicionm", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Précision"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presicionm", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "presicionm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logicielu", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Logiciel utilisé"));
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logicielu", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "logicielu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formatfich", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Format Fichier"));
        echo "
    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formatfich", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formatfich", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiauxu", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Matériaux utilisé"));
        echo "
    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiauxu", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materiauxu", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Puissance"));
        echo "
    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puissance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 91
        echo "     ";
        // line 92
        echo "     <div class=\"form-group\">
     <div class=\"col-sm-7\">
      <center>";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</center>
     </div>
     </div>


  ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 102
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("platform_listview");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon\"></i>
    Liste Machines
  </a>
</div>
";
        
        $__internal_89276f61329b18f92af11d27111e678de98c4a61f7388e6dfcb5694253f2fe63->leave($__internal_89276f61329b18f92af11d27111e678de98c4a61f7388e6dfcb5694253f2fe63_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Admin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 103,  218 => 102,  213 => 99,  205 => 94,  201 => 92,  199 => 91,  192 => 84,  187 => 82,  183 => 81,  175 => 76,  170 => 74,  166 => 73,  158 => 68,  153 => 66,  149 => 65,  141 => 60,  136 => 58,  132 => 57,  124 => 52,  119 => 50,  115 => 49,  107 => 44,  102 => 42,  98 => 41,  90 => 36,  85 => 34,  81 => 33,  78 => 32,  71 => 27,  66 => 25,  62 => 24,  59 => 23,  51 => 18,  44 => 14,  38 => 11,  31 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# src/AsnaBundle/Resources/views/Addmin/form.html.twig #}*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.nomM, "Nom de la machine", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.nomM) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.nomM, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.infogenerale, "Information Génerale", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.infogenerale) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.infogenerale, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   <div class="form-group">*/
/*     {{ form_label(form.surface, "Surface", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.surface) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.surface, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.resolution, "Résolution", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.resolution) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.resolution, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.presicionm, "Précision", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.presicionm) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.presicionm, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.logicielu, "Logiciel utilisé", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.logicielu) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.logicielu, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.formatfich, "Format Fichier", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.formatfich) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.formatfich, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.materiauxu, "Matériaux utilisé", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.materiauxu) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.materiauxu, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.puissance, "Puissance", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.puissance) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.puissance, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*      {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*      <div class="form-group">*/
/*      <div class="col-sm-7">*/
/*       <center>{{ form_widget(form.Enregistrer, {'attr': {'class': 'btn btn-primary'}}) }}</center>*/
/*      </div>*/
/*      </div>*/
/* */
/* */
/*   {{ form_rest(form) }}*/
/* */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/*   <a href="{{ path('platform_listview')}}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon"></i>*/
/*     Liste Machines*/
/*   </a>*/
/* </div>*/
/* */
