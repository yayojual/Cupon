<?php

/* BackendBundle:Tienda:show.html.twig */
class __TwigTemplate_edf6cbba2e373105dbdfd1eacd1bb419c77e31437a2664f4cf6780adea679899 extends Twig_Template
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
        echo "tienda";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Datos de la tienda ";
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
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Login</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "login", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Password</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "password", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Salt</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salt", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("backend_tienda");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modificar tienda
        </a>
    </li>
    <li>
        <form action=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Borrar tienda</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Tienda:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  139 => 58,  131 => 53,  123 => 48,  113 => 41,  106 => 37,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  54 => 7,  51 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
