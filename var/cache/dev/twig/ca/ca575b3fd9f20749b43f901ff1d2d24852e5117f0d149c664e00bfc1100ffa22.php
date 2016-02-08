<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5db23fcf62b14595c731045960fd03491793548506b68080bf389b278221c661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78456c921d8a646ceb62da87ba4861922873b4bb0e67c9f3a1bcfc03f5955cc8 = $this->env->getExtension("native_profiler");
        $__internal_78456c921d8a646ceb62da87ba4861922873b4bb0e67c9f3a1bcfc03f5955cc8->enter($__internal_78456c921d8a646ceb62da87ba4861922873b4bb0e67c9f3a1bcfc03f5955cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78456c921d8a646ceb62da87ba4861922873b4bb0e67c9f3a1bcfc03f5955cc8->leave($__internal_78456c921d8a646ceb62da87ba4861922873b4bb0e67c9f3a1bcfc03f5955cc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a66b23808456db90e9efd4a4b872dfef5dfe1071ba12b557cfc28850a02bc07b = $this->env->getExtension("native_profiler");
        $__internal_a66b23808456db90e9efd4a4b872dfef5dfe1071ba12b557cfc28850a02bc07b->enter($__internal_a66b23808456db90e9efd4a4b872dfef5dfe1071ba12b557cfc28850a02bc07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a66b23808456db90e9efd4a4b872dfef5dfe1071ba12b557cfc28850a02bc07b->leave($__internal_a66b23808456db90e9efd4a4b872dfef5dfe1071ba12b557cfc28850a02bc07b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e21a9cea292c6165f35d258be95cbb024833d7425a7e3c63a9a8da85215a1b38 = $this->env->getExtension("native_profiler");
        $__internal_e21a9cea292c6165f35d258be95cbb024833d7425a7e3c63a9a8da85215a1b38->enter($__internal_e21a9cea292c6165f35d258be95cbb024833d7425a7e3c63a9a8da85215a1b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e21a9cea292c6165f35d258be95cbb024833d7425a7e3c63a9a8da85215a1b38->leave($__internal_e21a9cea292c6165f35d258be95cbb024833d7425a7e3c63a9a8da85215a1b38_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_285f22d567eba98b0d50c5c44de10d71db515d9fb61ec0f67156a6d1892f7e41 = $this->env->getExtension("native_profiler");
        $__internal_285f22d567eba98b0d50c5c44de10d71db515d9fb61ec0f67156a6d1892f7e41->enter($__internal_285f22d567eba98b0d50c5c44de10d71db515d9fb61ec0f67156a6d1892f7e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_285f22d567eba98b0d50c5c44de10d71db515d9fb61ec0f67156a6d1892f7e41->leave($__internal_285f22d567eba98b0d50c5c44de10d71db515d9fb61ec0f67156a6d1892f7e41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
