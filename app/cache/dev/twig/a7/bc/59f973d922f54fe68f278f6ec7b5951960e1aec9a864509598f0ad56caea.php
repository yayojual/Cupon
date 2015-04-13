<?php

/* BackendBundle:Ciudad:ver.html.twig */
class __TwigTemplate_a7bc59f973d922f54fe68f278f6ec7b5951960e1aec9a864509598f0ad56caea extends Twig_Template
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
        echo "Datos de la ciudad ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
<table>
    <tbody>
    <tr>
    <th>ID</th>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
    <th>Nombre</th>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
    <th>Slug</th>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "slug", array()), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
</table>
<ul>
    <li>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("backend_ciudad");
        echo "\">Volver al listado</a>
    </li>
    <li>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ciudad_actualizar", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()))), "html", null, true);
        // line 30
        echo "\">Modificar</a>
    </li>
    <li>
        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ciudad_borrar", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()))), "html", null, true);
        // line 34
        echo "\">Borrar</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ciudad:ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  99 => 33,  94 => 30,  92 => 29,  86 => 26,  77 => 20,  70 => 16,  63 => 12,  54 => 7,  51 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
