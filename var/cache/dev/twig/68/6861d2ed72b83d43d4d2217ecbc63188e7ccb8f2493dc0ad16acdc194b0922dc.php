<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7af8f3eac570002dfba983eff01d59f6288050735bcdbf32ce72238a0a54bf63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f884285740b47b156ad7f82de28278db97c4c66205177e003aeb9b7ab4c8590d = $this->env->getExtension("native_profiler");
        $__internal_f884285740b47b156ad7f82de28278db97c4c66205177e003aeb9b7ab4c8590d->enter($__internal_f884285740b47b156ad7f82de28278db97c4c66205177e003aeb9b7ab4c8590d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f884285740b47b156ad7f82de28278db97c4c66205177e003aeb9b7ab4c8590d->leave($__internal_f884285740b47b156ad7f82de28278db97c4c66205177e003aeb9b7ab4c8590d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a39cf8be7ca4239dddbe60f13cc3155b2587e7ef5595f7b826450e603ad9a89 = $this->env->getExtension("native_profiler");
        $__internal_9a39cf8be7ca4239dddbe60f13cc3155b2587e7ef5595f7b826450e603ad9a89->enter($__internal_9a39cf8be7ca4239dddbe60f13cc3155b2587e7ef5595f7b826450e603ad9a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a39cf8be7ca4239dddbe60f13cc3155b2587e7ef5595f7b826450e603ad9a89->leave($__internal_9a39cf8be7ca4239dddbe60f13cc3155b2587e7ef5595f7b826450e603ad9a89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb46deee6391ef4a228decd3a6d5e2d43df5eb874f649739064004044e4f685 = $this->env->getExtension("native_profiler");
        $__internal_3eb46deee6391ef4a228decd3a6d5e2d43df5eb874f649739064004044e4f685->enter($__internal_3eb46deee6391ef4a228decd3a6d5e2d43df5eb874f649739064004044e4f685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3eb46deee6391ef4a228decd3a6d5e2d43df5eb874f649739064004044e4f685->leave($__internal_3eb46deee6391ef4a228decd3a6d5e2d43df5eb874f649739064004044e4f685_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83a6bf5ca1ddb9cf74cdbac3afba341600422c49a4ee5561251f5a7d3f9b4dbb = $this->env->getExtension("native_profiler");
        $__internal_83a6bf5ca1ddb9cf74cdbac3afba341600422c49a4ee5561251f5a7d3f9b4dbb->enter($__internal_83a6bf5ca1ddb9cf74cdbac3afba341600422c49a4ee5561251f5a7d3f9b4dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_83a6bf5ca1ddb9cf74cdbac3afba341600422c49a4ee5561251f5a7d3f9b4dbb->leave($__internal_83a6bf5ca1ddb9cf74cdbac3afba341600422c49a4ee5561251f5a7d3f9b4dbb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
