<?php

/* EcommerceBundle:Default:first.html.twig */
class __TwigTemplate_11c86336f9278c9fb4305b0b54b897d73b60461020cdf85afed224375e0ec657 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Base.html.twig", "EcommerceBundle:Default:first.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6b0eec58b37dbf94dfd73f885ce287ef0871b92031b4dba3bb13074bd30006e = $this->env->getExtension("native_profiler");
        $__internal_e6b0eec58b37dbf94dfd73f885ce287ef0871b92031b4dba3bb13074bd30006e->enter($__internal_e6b0eec58b37dbf94dfd73f885ce287ef0871b92031b4dba3bb13074bd30006e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:first.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6b0eec58b37dbf94dfd73f885ce287ef0871b92031b4dba3bb13074bd30006e->leave($__internal_e6b0eec58b37dbf94dfd73f885ce287ef0871b92031b4dba3bb13074bd30006e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a6018b767cf5a57a73c397bccccdad385953b8af812202acd1eb5ad6af003f5 = $this->env->getExtension("native_profiler");
        $__internal_4a6018b767cf5a57a73c397bccccdad385953b8af812202acd1eb5ad6af003f5->enter($__internal_4a6018b767cf5a57a73c397bccccdad385953b8af812202acd1eb5ad6af003f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    First
";
        
        $__internal_4a6018b767cf5a57a73c397bccccdad385953b8af812202acd1eb5ad6af003f5->leave($__internal_4a6018b767cf5a57a73c397bccccdad385953b8af812202acd1eb5ad6af003f5_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:first.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::Base.html.twig" %}*/
/* */
/* {% block body %}*/
/*     First*/
/* {% endblock %}*/
