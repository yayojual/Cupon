<?php

/* TiendaBundle:Extranet:perfil.html.twig */
class __TwigTemplate_2657e2ed656d3f8c78c28353dbda622e62c4eaa6e6cd1487865878ec4288cbd4 extends Twig_Template
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
    public function block_title($context, array $blocks = array())
    {
        echo "Ver / Modificar mis datos";
    }

    // line 5
    public function block_article($context, array $blocks = array())
    {
        // line 6
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("extranet_perfil");
        echo "\" method=\"post\">
<div>
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
    <div>
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'row');
        echo "
    </div>
    <div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "login", array()), 'label', array("label" => "Nombre de usuario"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "login", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "login", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'widget');
        echo "
        <p class=\"ayuda\">Si quieres cambiar la contraseña, escríbela dos
        veces. Si no quieres cambiarla, deja su valor vacío.</p>
    </div>
    <div>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'label', array("label" => "Descripción"));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'errors');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "ciudad", array()), 'row');
        echo "
    </div>
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
    <input class=\"boton\" type=\"submit\" value=\"Guardar cambios\" />
</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  104 => 30,  98 => 27,  94 => 26,  90 => 25,  82 => 20,  76 => 17,  72 => 16,  68 => 15,  62 => 12,  57 => 10,  52 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
