<?php

/* ::backend.html.twig */
class __TwigTemplate_8619584b85ceff23f401f0110594bd21fadf70de910fdabf40478719f5e3362a extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/normalizar.css"), "html", null, true);
        echo "\"
    rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/comun.css"), "html", null, true);
        echo "\"
    rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/backend/css/backend.css"), "html", null, true);
        echo "\"
    rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<header>
    <h1><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("backend_portada");
        echo "\">CUPON ADMIN</a></h1>
    <nav>
        <ul>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("backend_oferta");
        echo "\">Ofertas</a></li>
            <li><a href=\"";
        // line 18
        echo "\">Tiendas</a></li>
            <li><a href=\"";
        // line 19
        echo "\">Usuarios</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("backend_ciudad");
        echo "\">Ciudades</a></li>
            <li>";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CiudadBundle:Default:listaCiudades", array("ciudad" => $this->getAttribute($this->getAttribute(        // line 22
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ciudad"), "method"))));
        echo "</li>
        </ul>
    </nav>
</header>
        
<article>
    ";
        // line 28
        $this->displayBlock('article', $context, $blocks);
        // line 29
        echo "</article>
";
    }

    // line 28
    public function block_article($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  97 => 29,  95 => 28,  86 => 22,  85 => 21,  81 => 20,  78 => 19,  75 => 18,  71 => 17,  65 => 14,  62 => 13,  59 => 12,  52 => 8,  47 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
