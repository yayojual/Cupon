<?php

/* BackendBundle:Usuario:index.html.twig */
class __TwigTemplate_98e75a98049d6e81e455b243836789ddea85a411fc0a35631df98c3bdc9bd210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::backend.html.twig");
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
        return "::backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de usuarios";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<table class=\"records_list\">
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre y apellidos</th>
            <th>Edad</th>
            <th>Email</th>
            <th>¿Permite email?</th>
            <th>Fecha alta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "        <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombre", array()) . " ") . $this->getAttribute($context["entity"], "apellidos", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaNacimiento", array()), "Y")), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo (($this->getAttribute($context["entity"], "permiteemail", array())) ? ("<span class=\"si\">&#10004;</span>") : ("<span class=\"no\">&#10008;</span>"));
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "fechaalta", array()), "medium"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Detalles</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modificar</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </tbody>
</table>

";
        // line 45
        $this->env->loadTemplate("BackendBundle:Default:paginador.html.twig")->display(array("ruta" => "backend_usuario"));
        // line 46
        echo "
<ul>
    <li>
        <a class=\"boton\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("backend_usuario_new");
        echo "\">
            Añadir un nuevo usuario
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  131 => 46,  129 => 45,  124 => 42,  112 => 36,  106 => 33,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  76 => 23,  72 => 22,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
