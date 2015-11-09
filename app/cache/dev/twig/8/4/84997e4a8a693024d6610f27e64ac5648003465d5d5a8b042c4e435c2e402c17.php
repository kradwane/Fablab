<?php

/* EcommerceBundle:Default:produit.html.twig */
class __TwigTemplate_6a1a403cc8570e5c6f62d165612516bc7f8b458734d88da98fc2f70eb939b1d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Base.html.twig", "EcommerceBundle:Default:produit.html.twig", 1);
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
        $__internal_57e1b79a9027d295a5f3585494f6f558e142f9eab1dff9186039cf0eb3f9779e = $this->env->getExtension("native_profiler");
        $__internal_57e1b79a9027d295a5f3585494f6f558e142f9eab1dff9186039cf0eb3f9779e->enter($__internal_57e1b79a9027d295a5f3585494f6f558e142f9eab1dff9186039cf0eb3f9779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e1b79a9027d295a5f3585494f6f558e142f9eab1dff9186039cf0eb3f9779e->leave($__internal_57e1b79a9027d295a5f3585494f6f558e142f9eab1dff9186039cf0eb3f9779e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7227ec3711a428b90a2be119df9c99e466d60782096e8296f1d573fa89490384 = $this->env->getExtension("native_profiler");
        $__internal_7227ec3711a428b90a2be119df9c99e466d60782096e8296f1d573fa89490384->enter($__internal_7227ec3711a428b90a2be119df9c99e466d60782096e8296f1d573fa89490384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "acceuil
";
        
        $__internal_7227ec3711a428b90a2be119df9c99e466d60782096e8296f1d573fa89490384->leave($__internal_7227ec3711a428b90a2be119df9c99e466d60782096e8296f1d573fa89490384_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::Base.html.twig' %}*/
/* {% block body %}*/
/* acceuil*/
/* {% endblock  %}*/
