<?php

/* TiendaBundle:Default:portada.html.twig */
class __TwigTemplate_9edcbf048786ed392fe83176d6651d2ae62634f030335ecb2e323469231d4ddb extends Twig_Template
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
        echo "Tienda ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tienda"]) ? $context["tienda"] : null), "nombre", array()), "html", null, true);
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "tienda";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "\t<section id=\"descripcion\">
\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tienda"]) ? $context["tienda"] : null), "nombre", array()), "html", null, true);
        echo "</h1>
\t\t<p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tienda"]) ? $context["tienda"] : null), "descripcion", array()), "html", null, true);
        echo "</p>
\t</section>
\t
\t<section id=\"ultimas\">
\t\t<h2>Últimas ofertas publicadas</h2>
\t\t<table>
\t\t<thead>
\t\t\t<tr>
\t\t\t<th>Fecha</th><th>Oferta</th><th>Precio</th><th>Descuento</th><th>Compras</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 22
            echo "\t\t\t<tr>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["oferta"], "fechaPublicacion", array())), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute($context["oferta"], "ciudad", array()), "slug", array()), "slug" => $this->getAttribute(            // line 25
$context["oferta"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "nombre", array()), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "precio", array()), "html", null, true);
            echo " &euro;</td>
\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "descuento", array()), "html", null, true);
            echo " &euro;</td>
\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "compras", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "\t\t\t<tr>
\t\t\t<td colspan=\"5\">Esta tienda no ha publicado ninguna oferta</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t</tbody>
\t\t</table>
\t</section>
";
    }

    // line 40
    public function block_aside($context, array $blocks = array())
    {
        // line 41
        echo "\t";
        $this->displayParentBlock("aside", $context, $blocks);
        echo "
\t<section id=\"cercanas\">
\t\t<h2>Otras tiendas en ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tienda"]) ? $context["tienda"] : null), "ciudad", array()), "nombre", array()), "html", null, true);
        echo "</h2>
\t\t<ul>
\t\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cercanas"]) ? $context["cercanas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tienda"]) {
            // line 46
            echo "\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute(            // line 47
$context["tienda"], "ciudad", array()), "slug", array()), "tienda" => $this->getAttribute($context["tienda"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tienda"], "nombre", array()), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tienda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</ul>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Default:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 49,  148 => 47,  146 => 46,  142 => 45,  137 => 43,  131 => 41,  128 => 40,  121 => 35,  112 => 31,  104 => 28,  100 => 27,  96 => 26,  90 => 25,  89 => 24,  85 => 23,  82 => 22,  77 => 21,  62 => 9,  58 => 8,  55 => 7,  52 => 6,  46 => 4,  39 => 3,  11 => 1,);
    }
}
