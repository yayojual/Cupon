<?php

/* UsuarioBundle:Default:compras.html.twig */
class __TwigTemplate_b85953f7eaf9b2b1a797f62fd4acba8cbf0aafcaab7232489c88522262059e0e extends Twig_Template
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
        echo "Últimas ofertas que has comprado";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "compras";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "\t<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["compras"]) ? $context["compras"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["compra"]) {
            // line 10
            echo "\t\t";
            $this->env->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig")->display(array_merge($context, array("oferta" => $this->getAttribute(            // line 11
$context["compra"], "oferta", array()), "comprada" => true, "fechaCompra" => $this->getAttribute(            // line 13
$context["compra"], "fecha", array()))));
            // line 15
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:compras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 18,  82 => 15,  80 => 13,  79 => 11,  77 => 10,  60 => 9,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
