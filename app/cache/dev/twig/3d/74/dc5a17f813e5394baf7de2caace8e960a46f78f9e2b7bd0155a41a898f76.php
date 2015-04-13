<?php

/* UsuarioBundle:Default:perfil.html.twig */
class __TwigTemplate_3d74dc5a17f813e5394baf7de2caace8e960a46f78f9e2b7bd0155a41a898f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::frontend.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
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
        echo "Ver / Modificar mis datos";
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
        echo $this->env->getExtension('routing')->getPath("usuario_perfil");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
\t<fieldset>
\t\t<legend>Datos personales</legend>
\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'row');
        echo "
\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "apellidos", array()), 'row');
        echo "
\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fecha_nacimiento", array()), 'row');
        echo "
\t\t";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "dni", array()), 'row');
        echo "
\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "direccion", array()), 'row');
        echo "
\t</fieldset>

\t<fieldset>
\t\t<legend>Datos de acceso</legend>
\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "email", array()), 'row');
        echo "
\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "password", array()), 'row');
        echo "
\t</fieldset>

\t<fieldset>
\t\t<legend>Datos económicos</legend>
\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "numero_tarjeta", array()), 'row');
        echo "
\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "ciudad", array()), 'row');
        echo "
\t</fieldset>
\t\t
\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "permite_email", array()), 'row');
        echo "
\t<span>Me gustaría recibir el boletín de ofertas de Cupon</span>
\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
\t\t
\t<input class=\"boton\" type=\"submit\" value=\"Guardar cambios\" />
</form>
";
    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  122 => 33,  117 => 31,  111 => 28,  107 => 27,  99 => 22,  95 => 21,  87 => 16,  83 => 15,  79 => 14,  75 => 13,  71 => 12,  65 => 9,  59 => 8,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
