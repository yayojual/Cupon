<?php

/* TiendaBundle:Extranet:portada.html.twig */
class __TwigTemplate_898632b2d76fe6a2571d2c124d2b9cf11204c3cc69db228af01d6cf4286a19e9 extends Twig_Template
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
        echo "portada";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administración de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>Todas tus ofertas</h1>
    <table>
    <thead>
        <tr>
        <th>Revisada</th>
        <th>Se publica</th>
        <th>Finaliza</th>
        <th>Nombre</th>
        <th>Ventas</th>
        <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ofertas"]) ? $context["ofertas"] : $this->getContext($context, "ofertas")));
        foreach ($context['_seq'] as $context["_key"] => $context["oferta"]) {
            // line 21
            echo "    <tr>
    <td>";
            // line 22
            echo (($this->getAttribute($context["oferta"], "revisada", array())) ? ("si") : ("no"));
            echo "</td>
    ";
            // line 23
            if ($this->getAttribute($context["oferta"], "revisada", array())) {
                // line 24
                echo "    <td>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["oferta"], "fechaPublicacion", array()), "medium", "short"), "html", null, true);
                echo "</td>
    <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["oferta"], "fechaExpiracion", array()), "medium", "short"), "html", null, true);
                echo "</td>
    ";
            } else {
                // line 27
                echo "    <td colspan=\"2\">Pendiente de revisión</td>
    ";
            }
            // line 29
            echo "    <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["oferta"], "compras", array()), "html", null, true);
            echo "</td>
    <td>
    <ul>
        ";
            // line 33
            if (($this->getAttribute($context["oferta"], "compras", array()) > 0)) {
                // line 34
                echo "        <li>
        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extranet_oferta_ventas", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                echo "\">
        Lista de ventas</a>
        </li>
        ";
            }
            // line 39
            echo "        ";
            if ( !$this->getAttribute($context["oferta"], "revisada", array())) {
                // line 40
                echo "        <li>
        <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("extranet_oferta_editar", array("id" => $this->getAttribute($context["oferta"], "id", array()))), "html", null, true);
                echo "\">
        Modificar</a>
        </li>
        ";
            }
            // line 45
            echo "    </ul>
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oferta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
</table>    

";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  132 => 45,  125 => 41,  122 => 40,  119 => 39,  112 => 35,  109 => 34,  107 => 33,  101 => 30,  96 => 29,  92 => 27,  87 => 25,  82 => 24,  80 => 23,  76 => 22,  73 => 21,  69 => 20,  54 => 7,  51 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
