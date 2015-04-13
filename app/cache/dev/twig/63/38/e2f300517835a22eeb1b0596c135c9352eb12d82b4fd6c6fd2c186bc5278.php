<?php

/* BackendBundle:Ciudad:actualizar.html.twig */
class __TwigTemplate_6338e2f300517835a22eeb1b0596c135c9352eb12d82b4fd6c6fd2c186bc5278 extends Twig_Template
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

    // line 2
    public function block_id($context, array $blocks = array())
    {
        echo "ciudad";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Modificar la ciudad ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
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
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ciudad_actualizar", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()))), "html", null, true);
        echo "\"
method=\"post\">
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
    <input type=\"submit\" value=\"Guardar cambios\" />
</form>
<ul>
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("backend_ciudad");
        echo "\">Volver al listado</a>
    </li>
    <li>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_ciudad_borrar", array("id" => $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "id", array()))), "html", null, true);
        // line 19
        echo "\">Borrar</a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ciudad:actualizar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  80 => 18,  74 => 15,  66 => 10,  61 => 8,  57 => 7,  54 => 6,  51 => 5,  44 => 4,  38 => 2,  11 => 1,);
    }
}
