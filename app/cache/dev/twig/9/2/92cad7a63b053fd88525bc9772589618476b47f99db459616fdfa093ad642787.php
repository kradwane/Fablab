<?php

/* EcommerceBundle:Default:second.html.twig */
class __TwigTemplate_4d17c08933ed5a6d103c715cfbf58ba5eee226a953a84524a495cec57c753169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::Base.html.twig", "EcommerceBundle:Default:second.html.twig", 1);
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
        $__internal_e56f5dd85aca7890e0e7b0cf912830235f22a3e3a33392218a5a3c46daedc872 = $this->env->getExtension("native_profiler");
        $__internal_e56f5dd85aca7890e0e7b0cf912830235f22a3e3a33392218a5a3c46daedc872->enter($__internal_e56f5dd85aca7890e0e7b0cf912830235f22a3e3a33392218a5a3c46daedc872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:second.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e56f5dd85aca7890e0e7b0cf912830235f22a3e3a33392218a5a3c46daedc872->leave($__internal_e56f5dd85aca7890e0e7b0cf912830235f22a3e3a33392218a5a3c46daedc872_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea90ea6127225527437e96db3fb489acbafb52c5c309d2df352c5d4bca834a91 = $this->env->getExtension("native_profiler");
        $__internal_ea90ea6127225527437e96db3fb489acbafb52c5c309d2df352c5d4bca834a91->enter($__internal_ea90ea6127225527437e96db3fb489acbafb52c5c309d2df352c5d4bca834a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Second
";
        
        $__internal_ea90ea6127225527437e96db3fb489acbafb52c5c309d2df352c5d4bca834a91->leave($__internal_ea90ea6127225527437e96db3fb489acbafb52c5c309d2df352c5d4bca834a91_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:second.html.twig";
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
/* {% extends "::Base.html.twig"%}*/
/* {% block body %}*/
/*     Second*/
/* {% endblock  %}*/
