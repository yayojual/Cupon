<?php

/* OfertaBundle:Sitio:ayuda.html.twig */
class __TwigTemplate_f0fe47f80eb948343811218f8e4d9894c61a7922ad319af9c231910b1827bf01 extends Twig_Template
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
        <h1>Ayudaaaaaa</h1>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Sitio:ayuda.html.twig";
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
