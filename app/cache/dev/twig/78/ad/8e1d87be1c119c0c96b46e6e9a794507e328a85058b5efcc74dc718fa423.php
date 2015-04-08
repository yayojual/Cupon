<?php

/* ::frontend.html.twig */
class __TwigTemplate_78ad8e1d87be1c119c0c96b46e6e9a794507e328a85058b5efcc74dc718fa423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
            'aside' => array($this, 'block_aside'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/normalizar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/comun.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/frontend.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "\t
\t";
        // line 12
        $context["ciudadSeleccionada"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "ciudad", 1 => (isset($context["ciudad_por_defecto"]) ? $context["ciudad_por_defecto"] : $this->getContext($context, "ciudad_por_defecto"))), "method");
        // line 13
        echo "
\t<header>
\t\t<h1><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_portada", array("ciudad" => (isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))), "html", null, true);
        echo "\">CUPON</a></h1>
\t\t<nav>
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_portada");
        echo "\">Oferta del día</a></li>
\t\t\t<li><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_recientes", array("ciudad" => (isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))), "html", null, true);
        echo "\">Ofertas recientes</a></li>
\t\t\t<li><a href=\"#\">Mis ofertas</a></li>
\t\t\t<li>";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CiudadBundle:Default:listaCiudades", array("ciudad" =>         // line 22
(isset($context["ciudadSeleccionada"]) ? $context["ciudadSeleccionada"] : $this->getContext($context, "ciudadSeleccionada")))));
        // line 23
        echo "</li>
\t\t</ul>
\t\t</nav>
\t</header>
\t<article>
\t";
        // line 28
        $this->displayBlock('article', $context, $blocks);
        // line 29
        echo "\t</article>
\t<aside>
\t\t";
        // line 31
        $this->displayBlock('aside', $context, $blocks);
        // line 36
        echo "\t</aside>
\t";
    }

    // line 28
    public function block_article($context, array $blocks = array())
    {
    }

    // line 31
    public function block_aside($context, array $blocks = array())
    {
        // line 32
        echo "\t\t<section id=\"login\">
\t\t\t";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UsuarioBundle:Default:cajaLogin"));
        echo "
\t\t</section>
\t\t";
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  121 => 32,  118 => 31,  113 => 28,  108 => 36,  106 => 31,  102 => 29,  100 => 28,  93 => 23,  91 => 22,  90 => 21,  85 => 19,  81 => 18,  75 => 15,  71 => 13,  69 => 12,  66 => 11,  63 => 10,  58 => 8,  52 => 6,  48 => 5,  43 => 4,  40 => 3,  11 => 1,);
    }
}
