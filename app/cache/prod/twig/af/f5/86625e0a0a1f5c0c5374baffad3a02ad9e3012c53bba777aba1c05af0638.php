<?php

/* OfertaBundle:Sitio:privacidad.html.twig */
class __TwigTemplate_aff586625e0a0a1f5c0c5374baffad3a02ad9e3012c53bba777aba1c05af0638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title></title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h1>Privacidaddddd</h1>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Sitio:privacidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
