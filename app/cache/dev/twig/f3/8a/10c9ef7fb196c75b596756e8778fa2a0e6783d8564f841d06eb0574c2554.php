<?php

/* BackendBundle:Ciudad:index.html.twig */
class __TwigTemplate_f38a10c9ef7fb196c75b596756e8778fa2a0e6783d8564f841d06eb0574c2554 extends Twig_Template
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
        echo "ciudad";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de ciudades";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
<table>
    <thead>
    <tr>
    <th>Nombre</th>
    <th>Slug</th>
    <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudades"]) ? $context["ciudades"] : $this->getContext($context, "ciudades")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 18
            echo "    <tr>
    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "slug", array()), "html", null, true);
            echo "</td>
    <td>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ciudad_actualizar", array("id" => $this->getAttribute(            // line 23
$context["ciudad"], "id", array()))), "html", null, true);
            echo "\">Modificar</a>
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>

<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("backend_ciudad_crear");
        echo "\">Crear una nueva ciudad</a>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ciudad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 30,  94 => 27,  84 => 23,  83 => 22,  78 => 20,  74 => 19,  71 => 18,  67 => 17,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
