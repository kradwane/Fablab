<?php

/* AdminBundle:Enseignant:form.html.twig */
class __TwigTemplate_b8043dc342e2c63200c14feada0ca10b65f434bcab1b290562113b1205a3f4df extends Twig_Template
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
        $__internal_a4aada994abb146fddfaf956427a20f74f8dcd73c3cd0a94b66d46d2497f3df7 = $this->env->getExtension("native_profiler");
        $__internal_a4aada994abb146fddfaf956427a20f74f8dcd73c3cd0a94b66d46d2497f3df7->enter($__internal_a4aada994abb146fddfaf956427a20f74f8dcd73c3cd0a94b66d46d2497f3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Enseignant:form.html.twig"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom :"));
        echo "

      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 23
        echo "    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prenom :"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  ";
        // line 32
        echo "  <div class=\"form-group\">
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Mot de passe :"));
        echo "
    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Information :"));
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "info", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Email :"));
        echo "
    ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Num Téléphone :"));
        echo "
    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'errors');
        echo "
    <div class=\"col-sm-4\">
      ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numtel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>


  ";
        // line 68
        echo "     ";
        // line 69
        echo "     <div class=\"form-group\">
     <div class=\"col-sm-7\">
      <center>";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Enregistrer", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "</center>
     </div>
     </div>


  ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 79
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("ens_listview");
        echo "\" class=\"btn btn-default\">
    <i class=\"glyphicon glyphicon\"></i>
    Liste Enseignants
  </a>
</div>
";
        
        $__internal_a4aada994abb146fddfaf956427a20f74f8dcd73c3cd0a94b66d46d2497f3df7->leave($__internal_a4aada994abb146fddfaf956427a20f74f8dcd73c3cd0a94b66d46d2497f3df7_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Enseignant:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 80,  168 => 79,  163 => 76,  155 => 71,  151 => 69,  149 => 68,  141 => 60,  136 => 58,  132 => 57,  124 => 52,  119 => 50,  115 => 49,  107 => 44,  102 => 42,  98 => 41,  90 => 36,  85 => 34,  81 => 33,  78 => 32,  71 => 27,  66 => 25,  62 => 24,  59 => 23,  51 => 18,  44 => 14,  38 => 11,  31 => 7,  26 => 4,  22 => 2,);
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
/*       {{ form_label(form.nom, "Nom :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.nom) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.prenom, "Prenom :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.prenom) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   <div class="form-group">*/
/*     {{ form_label(form.password, "Mot de passe :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.password) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.password, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.info, "Information :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.info) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.info, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.email, "Email :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.email) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     {{ form_label(form.numtel, "Num Téléphone :", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*     {{ form_errors(form.numtel) }}*/
/*     <div class="col-sm-4">*/
/*       {{ form_widget(form.numtel, {'attr': {'class': 'form-control'}}) }}*/
/*     </div>*/
/*   </div>*/
/* */
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
/*   <a href="{{ path('ens_listview')}}" class="btn btn-default">*/
/*     <i class="glyphicon glyphicon"></i>*/
/*     Liste Enseignants*/
/*   </a>*/
/* </div>*/
/* */
