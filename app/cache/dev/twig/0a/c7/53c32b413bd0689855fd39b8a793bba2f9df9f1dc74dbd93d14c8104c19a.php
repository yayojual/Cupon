<?php

/* BackendBundle:Ciudad:crear.html.twig */
class __TwigTemplate_0ac753c32b413bd0689855fd39b8a793bba2f9df9f1dc74dbd93d14c8104c19a extends Twig_Template
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
        echo "Añadir una nueva ciudad";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("backend_ciudad_crear");
        echo "\" method=\"post\">
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'widget');
        echo "
    <input type=\"submit\" value=\"Añadir ciudad\" />
</form>
<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("backend_ciudad");
        echo "\">Volver al listado</a>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Ciudad:crear.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  62 => 9,  58 => 8,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
