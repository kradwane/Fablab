<?php

/* EcommerceBundle:Default:produit.html.twig */
class __TwigTemplate_21397ac7731a984ea4a757a329e39b356dbb9bebd62523ff6c40658cf605ecd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceBundle:Default:produit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52e18c5b8699236c55a1ef46528a74bf9b562804add52b1ba1acf16e1fc11cc4 = $this->env->getExtension("native_profiler");
        $__internal_52e18c5b8699236c55a1ef46528a74bf9b562804add52b1ba1acf16e1fc11cc4->enter($__internal_52e18c5b8699236c55a1ef46528a74bf9b562804add52b1ba1acf16e1fc11cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52e18c5b8699236c55a1ef46528a74bf9b562804add52b1ba1acf16e1fc11cc4->leave($__internal_52e18c5b8699236c55a1ef46528a74bf9b562804add52b1ba1acf16e1fc11cc4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e073285e9563ce111c77e8f590324425e44f9dc00d788cd1dc6cad71a2f8a4a8 = $this->env->getExtension("native_profiler");
        $__internal_e073285e9563ce111c77e8f590324425e44f9dc00d788cd1dc6cad71a2f8a4a8->enter($__internal_e073285e9563ce111c77e8f590324425e44f9dc00d788cd1dc6cad71a2f8a4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span9\">

                <ul class=\"thumbnails\">
                   ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"../img/holder.png\" alt=\"DonMehdi\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
                </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_e073285e9563ce111c77e8f590324425e44f9dc00d788cd1dc6cad71a2f8a4a8->leave($__internal_e073285e9563ce111c77e8f590324425e44f9dc00d788cd1dc6cad71a2f8a4a8_prof);

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
        return array (  71 => 24,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* {% block body %}*/
/* */
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span9">*/
/* */
/*                 <ul class="thumbnails">*/
/*                    {% for i in 0..10 %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="../img/holder.png" alt="DonMehdi" width="300" height="300">*/
/*                             <div class="caption">*/
/*                                 <h4>Thumbnail label</h4>*/
/*                                 <p>100,00 €</p>*/
/*                                 <a class="btn btn-primary" href="produit.php">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="panier.php">Ajouter au panier</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
