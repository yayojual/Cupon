<?php

/* OfertaBundle:Default:portada.html.twig */
class __TwigTemplate_a715ce9330cca204156b747445d8f5b3ecea7dff66f03d620118213b93642934 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::frontend.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Cupon, cada día ofertas increíbles en tu
ciudad con descuentos de hasta el 90%";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 7
    public function block_article($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->env->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig")->display($context);
    }

    // line 11
    public function block_aside($context, array $blocks = array())
    {
        // line 12
        echo "\t";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t<section id=\"nosotros\">
\t\t<h2>Sobre nosotros</h2>
\t\t<p>Lorem ipsum dolor sit amet...</p>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  60 => 11,  55 => 8,  52 => 7,  46 => 5,  39 => 3,  11 => 1,);
    }
}
