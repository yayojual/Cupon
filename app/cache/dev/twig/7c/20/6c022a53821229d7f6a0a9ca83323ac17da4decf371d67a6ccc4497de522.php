<?php

/* TiendaBundle:Extranet:formulario.html.twig */
class __TwigTemplate_7c206c022a53821229d7f6a0a9ca83323ac17da4decf371d67a6ccc4497de522 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::extranet.html.twig");
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
        return "::extranet.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_id($context, array $blocks = array())
    {
        echo "oferta";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Añadir una nueva oferta";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ((((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")) == "crear")) ? ($this->env->getExtension('routing')->getPath("extranet_oferta_nueva")) : ($this->env->getExtension('routing')->getPath("extranet_oferta_editar", array("id" => $this->getAttribute(        // line 10
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "id", array()))))), "html", null, true);
        echo "\" method=\"post\" ";
        echo         // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'enctype');
        echo ">
    <div>
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
        <div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'row');
        echo "
        </div>
        
        <div>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'label', array("label" => "Descripción"));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descripcion", array()), 'widget');
        echo "
        <p class=\"ayuda\">Escribe cada característica en una línea.</p>
        </div>

        <div>
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "condiciones", array()), 'row');
        echo "
        </div>

        <div>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'label', array("label" => "Fotografía"));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'errors');
        echo "
        
        ";
        // line 33
        if (((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")) == "editar")) {
            // line 34
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
            echo "\" />
            ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'label', array("label" => "Modificar foto"));
            echo "
        ";
        }
        // line 37
        echo "        
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "foto", array()), 'widget');
        echo "
        <p class=\"ayuda\">Tamaño máximo: 500 KB. Formato preferido: JPEG.</p>
        </div>

        <div>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "precio", array()), 'row');
        echo "
        </div>

        <div>
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "descuento", array()), 'row');
        echo "
        </div>
    
        <div>
        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "umbral", array()), 'label', array("label" => "Compras necesarias"));
        echo "
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "umbral", array()), 'errors');
        echo "
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "umbral", array()), 'widget');
        echo "
        </div>
        
        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'rest');
        echo "
        
        ";
        // line 58
        if (((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")) == "crear")) {
            // line 59
            echo "            <div>
            ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "acepto", array()), 'errors');
            echo "
            ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "acepto", array()), 'widget');
            echo " <span>Declaro que toda la información
            de esta oferta es correcta, que me comprometo a cumplir las condiciones
            prometidas y que dispongo de los medios necesarios para hacerlo.</span>
            </div>
        ";
        }
        // line 66
        echo "
        <input class=\"boton\" type=\"submit\" value=\"";
        // line 67
        echo ((((isset($context["accion"]) ? $context["accion"] : $this->getContext($context, "accion")) == "crear")) ? ("Añadir
        oferta") : ("Guardar cambios"));
        // line 68
        echo "\" />
    </div>
</form>
";
    }

    // line 73
    public function block_aside($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TiendaBundle:Extranet:formulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 73,  192 => 68,  189 => 67,  186 => 66,  178 => 61,  174 => 60,  171 => 59,  169 => 58,  164 => 56,  158 => 53,  154 => 52,  150 => 51,  143 => 47,  136 => 43,  128 => 38,  125 => 37,  120 => 35,  115 => 34,  113 => 33,  108 => 31,  104 => 30,  97 => 26,  89 => 21,  85 => 20,  81 => 19,  74 => 15,  69 => 13,  64 => 11,  61 => 10,  60 => 9,  54 => 7,  51 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
