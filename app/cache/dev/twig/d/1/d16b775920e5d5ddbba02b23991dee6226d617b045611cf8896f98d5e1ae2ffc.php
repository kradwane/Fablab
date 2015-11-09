<?php

/* base.html.twig */
class __TwigTemplate_be6a61c9bb4f36d02c1641af0c9105bf36d7f398c4957537616bb2c3e3d4349c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44e448f8c8205c49aba44502c0e8bfc7dac9b4e7afddc5a68218bcbbeb021f33 = $this->env->getExtension("native_profiler");
        $__internal_44e448f8c8205c49aba44502c0e8bfc7dac9b4e7afddc5a68218bcbbeb021f33->enter($__internal_44e448f8c8205c49aba44502c0e8bfc7dac9b4e7afddc5a68218bcbbeb021f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_44e448f8c8205c49aba44502c0e8bfc7dac9b4e7afddc5a68218bcbbeb021f33->leave($__internal_44e448f8c8205c49aba44502c0e8bfc7dac9b4e7afddc5a68218bcbbeb021f33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_38ef431ddf098949477fb654dadf4ee43093ac58068aa15981cea67a15c7f300 = $this->env->getExtension("native_profiler");
        $__internal_38ef431ddf098949477fb654dadf4ee43093ac58068aa15981cea67a15c7f300->enter($__internal_38ef431ddf098949477fb654dadf4ee43093ac58068aa15981cea67a15c7f300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_38ef431ddf098949477fb654dadf4ee43093ac58068aa15981cea67a15c7f300->leave($__internal_38ef431ddf098949477fb654dadf4ee43093ac58068aa15981cea67a15c7f300_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa8a27616e1979f6d1e54706dafd45c3a22e88fb8cc7b319894e9085df852ce0 = $this->env->getExtension("native_profiler");
        $__internal_aa8a27616e1979f6d1e54706dafd45c3a22e88fb8cc7b319894e9085df852ce0->enter($__internal_aa8a27616e1979f6d1e54706dafd45c3a22e88fb8cc7b319894e9085df852ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa8a27616e1979f6d1e54706dafd45c3a22e88fb8cc7b319894e9085df852ce0->leave($__internal_aa8a27616e1979f6d1e54706dafd45c3a22e88fb8cc7b319894e9085df852ce0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2b77b0cfba603fedbe2e3ca627586064daf5eac47ce647ef7e557670732dda4 = $this->env->getExtension("native_profiler");
        $__internal_c2b77b0cfba603fedbe2e3ca627586064daf5eac47ce647ef7e557670732dda4->enter($__internal_c2b77b0cfba603fedbe2e3ca627586064daf5eac47ce647ef7e557670732dda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c2b77b0cfba603fedbe2e3ca627586064daf5eac47ce647ef7e557670732dda4->leave($__internal_c2b77b0cfba603fedbe2e3ca627586064daf5eac47ce647ef7e557670732dda4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24152a215ca6e390fe4f5a198c84b37812b9a863031a6df3da8a1db8db4682be = $this->env->getExtension("native_profiler");
        $__internal_24152a215ca6e390fe4f5a198c84b37812b9a863031a6df3da8a1db8db4682be->enter($__internal_24152a215ca6e390fe4f5a198c84b37812b9a863031a6df3da8a1db8db4682be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24152a215ca6e390fe4f5a198c84b37812b9a863031a6df3da8a1db8db4682be->leave($__internal_24152a215ca6e390fe4f5a198c84b37812b9a863031a6df3da8a1db8db4682be_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
