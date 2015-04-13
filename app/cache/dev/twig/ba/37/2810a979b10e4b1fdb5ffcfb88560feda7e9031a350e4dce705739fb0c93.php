<?php

/* BackendBundle:Tienda:new.html.twig */
class __TwigTemplate_ba372810a979b10e4b1fdb5ffcfb88560feda7e9031a350e4dce705739fb0c93 extends Twig_Template
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
        echo "Añadir una nueva tienda";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<form action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("backend_tienda_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <button class=\"boton\" type=\"submit\">Añadir tienda</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("backend_tienda");
        echo "\">
            Volver al listado
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Tienda:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 18,  65 => 10,  59 => 9,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
