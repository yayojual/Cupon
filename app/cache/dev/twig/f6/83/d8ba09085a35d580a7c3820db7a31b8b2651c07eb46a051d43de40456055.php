<?php

/* TiendaBundle:Extranet:login.html.twig */
class __TwigTemplate_f683d8ba09085a35d580a7c3820db7a31b8b2651c07eb46a051d43de40456055 extends Twig_Template
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
        echo "login";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Administra tu tienda";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>
";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("extranet_login_check");
        echo "\" method=\"post\">
\t<div>
\t\t<label for=\"username\">Usuario:</label>
\t\t<input type=\"text\" id=\"username\" name=\"_username\" />
\t</div>
\t<div>
\t\t<label for=\"password\">Contraseña:</label>
\t\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t</div>

\t<input class=\"boton\" type=\"submit\" name=\"login\" value=\"Entrar\" />
</form>
";
    }

    // line 26
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  70 => 12,  67 => 11,  61 => 9,  59 => 8,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
