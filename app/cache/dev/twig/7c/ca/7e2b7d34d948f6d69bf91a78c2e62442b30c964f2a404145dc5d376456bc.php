<?php

/* UsuarioBundle:Default:login.html.twig */
class __TwigTemplate_7cca7e2b7d34d948f6d69bf91a78c2e62442b30c964f2a404145dc5d376456bc extends Twig_Template
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
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Formulario de acceso";
    }

    // line 4
    public function block_id($context, array $blocks = array())
    {
        echo "usuario";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t";
        }
        // line 10
        echo "
\t<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("usuario_login_check");
        echo "\" method=\"post\">
\t\t<label for=\"username\">Usuario:</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\"
\t\t\tvalue=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t\t<label for=\"password\">Contraseña:</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t\t<input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
\t\t<label for=\"no_cerrar\">No cerrar sesión</label>
\t\t<input type=\"submit\" name=\"login\" value=\"Acceder\" />
\t</form>
";
    }

    // line 23
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  72 => 14,  66 => 11,  63 => 10,  57 => 8,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
