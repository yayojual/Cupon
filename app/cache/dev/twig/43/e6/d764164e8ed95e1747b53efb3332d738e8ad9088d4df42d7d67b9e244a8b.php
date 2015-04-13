<?php

/* BackendBundle:Usuario:show.html.twig */
class __TwigTemplate_43e6d764164e8ed95e1747b53efb3332d738e8ad9088d4df42d7d67b9e244a8b extends Twig_Template
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
        echo "Datos del usuario ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>


<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellidos", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Contraseña</th>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Salt</th>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salt", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>¿Permite email?</th>
            <td>";
        // line 42
        echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "permiteemail", array())) ? ("si") : ("no"));
        echo "</td>
        </tr>
        <tr>
            <th>Fecha alta</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaalta", array()), "long", "medium"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha nacimiento</th>
            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechanacimiento", array()), "long"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>DNI</th>
            <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dni", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Número tarjeta</th>
            <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numerotarjeta", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("backend_usuario");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modificar usuario
        </a>
    </li>
    <li>
        <form action=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Borrar usuario</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 76,  168 => 75,  160 => 70,  152 => 65,  142 => 58,  135 => 54,  128 => 50,  121 => 46,  114 => 42,  107 => 38,  100 => 34,  93 => 30,  86 => 26,  79 => 22,  72 => 18,  65 => 14,  54 => 7,  51 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
