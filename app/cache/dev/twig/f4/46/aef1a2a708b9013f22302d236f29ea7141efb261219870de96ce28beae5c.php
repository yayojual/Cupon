<?php

/* TiendaBundle:Extranet:ventas.html.twig */
class __TwigTemplate_f446aef1a2a708b9013f22302d236f29ea7141efb261219870de96ce28beae5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::extranet.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::extranet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "oferta";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Ventas de la oferta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "
<h1>";
        // line 7
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<table>
    <thead>
    <tr>
    <th>DNI</th>
    <th>Nombre y apellidos</th>
    <th>Fecha venta</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventas"]) ? $context["ventas"] : $this->getContext($context, "ventas")));
        foreach ($context['_seq'] as $context["_key"] => $context["venta"]) {
            // line 19
            echo "    <tr>
    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["venta"], "usuario", array()), "dni", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["venta"], "usuario", array()), "nombre", array()) . " ") . $this->getAttribute($this->getAttribute($context["venta"], "usuario", array()), "apellidos", array())), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["venta"], "fecha", array()), "long", "medium"), "html", null, true);
            echo "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['venta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    <tr>
    <th>TOTAL</th>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["ventas"]) ? $context["ventas"] : $this->getContext($context, "ventas"))) * $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array())), "html", null, true);
        echo " &euro;</td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ventas"]) ? $context["ventas"] : $this->getContext($context, "ventas"))), "html", null, true);
        echo " ventas</td>
    </tr>
    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:ventas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  99 => 27,  95 => 25,  86 => 22,  82 => 21,  78 => 20,  75 => 19,  71 => 18,  57 => 7,  54 => 6,  51 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
