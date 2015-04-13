<?php

/* BackendBundle:Default:paginador.html.twig */
class __TwigTemplate_c690e5fecf365b81d456f277e4e38ab887023e01b0a8fc7af87ea268d6ebdc9b extends Twig_Template
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
        echo $this->env->getExtension('simple_paginator_extension')->render((isset($context["ruta"]) ? $context["ruta"] : $this->getContext($context, "ruta")), null, array("container_class" => "paginador", "previousPageText" => "Anterior", "nextPageText" => "Siguiente", "currentClass" => "actual", "firstPageText" => "Primera", "firstEnabledClass" => "oculto", "firstDisabledClass" => "oculto", "lastPageText" => "Última", "lastEnabledClass" => "oculto", "lastDisabledClass" => "oculto"));
        // line 17
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:paginador.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 17,  19 => 1,);
    }
}
