<?php

/* OfertaBundle:Default:detalle.html.twig */
class __TwigTemplate_9f5d84911ec5b05242df30545d7402aae5a6ab3092a4c7c51de156df0ea78058 extends Twig_Template
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
        echo "Detalles de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "oferta";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->env->loadTemplate("OfertaBundle:Default:includes/oferta.html.twig")->display($context);
    }

    // line 10
    public function block_aside($context, array $blocks = array())
    {
        // line 11
        echo "\t";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t
\t<section id=\"relacionadas\">
\t\t<h2>Ofertas en otras ciudades</h2>
\t\t<ul>
\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["relacionadas"]) ? $context["relacionadas"] : $this->getContext($context, "relacionadas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 17
            echo "\t\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oferta"], "ciudad", array()), "nombre", array()), "html", null, true);
            echo ": <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute(            // line 18
$context["oferta"], "ciudad", array()), "slug", array()), "slug" => $this->getAttribute($context["oferta"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "nombre", array()), "html", null, true);
            // line 19
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</ul>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default:detalle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  63 => 11,  60 => 10,  55 => 7,  52 => 6,  46 => 4,  39 => 3,  11 => 1,);
    }
}
