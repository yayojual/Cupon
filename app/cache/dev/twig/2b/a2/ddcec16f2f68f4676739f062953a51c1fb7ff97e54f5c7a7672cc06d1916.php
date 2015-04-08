<?php

/* ::base.html.twig */
class __TwigTemplate_2ba2ddcec16f2f68f4676739f062953a51c1fb7ff97e54f5c7a7672cc06d1916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'rss' => array($this, 'block_rss'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " | Cupon</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "\t\t";
        $this->displayBlock('rss', $context, $blocks);
        // line 8
        echo "    </head>
    
\t<body id=\"";
        // line 10
        $this->displayBlock('id', $context, $blocks);
        echo "\"><div id=\"contenedor\">
\t\t";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "\t\t<footer>
\t\t\t&copy; ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Cupon
\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "ayuda"));
        echo "\">Ayuda</a>
\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "contacto"));
        echo "\">Contacto</a>
\t\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "privacidad"));
        echo "\">Privacidad</a>
\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("pagina_estatica", array("pagina" => "sobre-nosotros"));
        echo "\">Sobre nosotros</a>
\t\t</footer>
\t
\t";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "\t</div></body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_rss($context, array $blocks = array())
    {
    }

    // line 10
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 20,  104 => 11,  98 => 10,  93 => 7,  88 => 6,  83 => 5,  77 => 21,  75 => 20,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  50 => 12,  48 => 11,  44 => 10,  40 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }
}
