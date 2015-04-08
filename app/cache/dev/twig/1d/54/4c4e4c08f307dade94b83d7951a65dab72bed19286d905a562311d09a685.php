<?php

/* CiudadBundle:Default:recientes.html.twig */
class __TwigTemplate_1d544c4e4c08f307dade94b83d7951a65dab72bed19286d905a562311d09a685 extends Twig_Template
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
            'rss' => array($this, 'block_rss'),
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
        echo "Ofertas recientes en ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "recientes";
    }

    // line 6
    public function block_rss($context, array $blocks = array())
    {
        // line 7
        echo "<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS de las ofertas más
recientes en ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => $this->getAttribute(        // line 9
(isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "slug", array()), "_format" => "rss")), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_article($context, array $blocks = array())
    {
        // line 13
        echo "\t<h1>Ofertas recientes en <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "</strong></h1>
\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 15
            echo "\t\t";
            $this->env->loadTemplate("OfertaBundle:Default:includes/minioferta.html.twig")->display($context);
            // line 16
            echo "\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 17
            echo "\t\t<p>Esta ciudad todavía no ha publicado ninguna oferta</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 21
    public function block_aside($context, array $blocks = array())
    {
        // line 22
        echo "\t";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t<section id=\"cercanas\">
\t\t<h2>Ofertas en otras ciudades</h2>
\t\t<ul>
\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cercanas"]) ? $context["cercanas"] : $this->getContext($context, "cercanas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 27
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => $this->getAttribute($context["ciudad"], "slug", array()))), "html", null, true);
            // line 28
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t</ul>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:recientes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 30,  137 => 28,  134 => 27,  130 => 26,  122 => 22,  119 => 21,  110 => 17,  97 => 16,  94 => 15,  76 => 14,  71 => 13,  68 => 12,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  47 => 4,  40 => 3,  11 => 1,);
    }
}
