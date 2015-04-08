<?php

/* CiudadBundle:Default:listaCiudades.html.twig */
class __TwigTemplate_0cbdf04f84a5c61d82548a78dfb1b99f00941b0d2476cd39d90a6f1f54cb1abd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<select id=\"ciudadseleccionada\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudades"]) ? $context["ciudades"] : $this->getContext($context, "ciudades")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 3
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "slug", array()), "html", null, true);
            echo "\"
        data-url=\"";
            // line 4
            echo twig_escape_filter($this->env, (($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) ? ($this->env->getExtension('routing')->getUrl("backend_ciudad_cambiar", array("ciudad" => $this->getAttribute(            // line 5
$context["ciudad"], "slug", array())))) : ($this->env->getExtension('routing')->getUrl("ciudad_cambiar", array("ciudad" => $this->getAttribute(            // line 6
$context["ciudad"], "slug", array()))))), "html", null, true);
            // line 7
            echo "\"
        ";
            // line 8
            echo ((((isset($context["ciudadActual"]) ? $context["ciudadActual"] : $this->getContext($context, "ciudadActual")) == $this->getAttribute($context["ciudad"], "slug", array()))) ? ("selected=\"selected\"") : (""));
            echo ">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "
    </option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</select>

<script type=\"text/javascript\">
\tvar lista = document.getElementById('ciudadseleccionada');
\t
\tlista.onchange = function() {
        var url = lista.options[lista.selectedIndex].getAttribute('data-url');
        window.location = url;
    };
</script>";
    }

    public function getTemplateName()
    {
        return "CiudadBundle:Default:listaCiudades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  42 => 9,  38 => 8,  35 => 7,  33 => 6,  32 => 5,  31 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
