<?php

/* ::extranet.html.twig */
class __TwigTemplate_cd333fbba6047d47e2215e8373a33fcf7a3f7e3b269c5b3005980a58f41c3b6c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oferta/css/extranet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<header>
\t<h1><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("extranet_portada");
        echo "\">CUPON EXTRANET</a></h1>
\t<nav>
\t\t<ul>
\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("extranet_portada");
        echo "\">Ofertas</a></li>
\t\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("extranet_perfil");
        echo "\">Mis datos</a></li>
\t\t\t<li><a href=\"#\">Cerrar sesión</a></li>
\t\t</ul>
\t</nav>
\t<p>Teléfono de atención al cliente <strong>902 XXX XXX</strong></p>
</header>

<article>
";
        // line 23
        $this->displayBlock('article', $context, $blocks);
        // line 24
        echo "</article>
\t
<aside>
\t";
        // line 27
        $this->displayBlock('aside', $context, $blocks);
        // line 41
        echo "</aside>
";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
    }

    // line 27
    public function block_aside($context, array $blocks = array())
    {
        // line 28
        echo "\t<a class=\"boton\" href=\"";
        echo $this->env->getExtension('routing')->getPath("extranet_oferta_nueva");
        echo "\">Añadir oferta</a>
\t<section id=\"faq\">
\t\t<h2>Preguntas frecuentes</h2>
\t\t<dl>
\t\t\t<dt>¿Lorem ipsum dolor sit amet?</dt>
\t\t\t<dd>Consectetur adipisicing elit, sed do eiusmod tempor.</dd>
\t\t\t<dt>¿Ut enim ad minim veniam?</dt>
\t\t\t<dd>Quis nostrud exercitation ullamco laboris nisi.</dd>
\t\t\t<dt>¿Excepteur sint occaecat cupidatat non proident?</dt>
\t\t\t<dd>Sunt in culpa qui officia deserunt mollit anim laborum.</dd>
\t\t</dl>
\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "::extranet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  103 => 27,  98 => 23,  93 => 41,  91 => 27,  86 => 24,  84 => 23,  73 => 15,  69 => 14,  63 => 11,  60 => 10,  57 => 9,  51 => 6,  47 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
