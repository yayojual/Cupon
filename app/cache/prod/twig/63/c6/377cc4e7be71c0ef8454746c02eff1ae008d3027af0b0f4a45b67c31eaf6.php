<?php

/* OfertaBundle:Default/includes:oferta.html.twig */
class __TwigTemplate_63c6377cc4e7be71c0ef8454746c02eff1ae008d3027af0b0f4a45b67c31eaf6 extends Twig_Template
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
        $context["expirada"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "fechaExpiracion", array()), "YmdHis") < twig_date_format_filter($this->env, "now", "YmdHis"));
        // line 2
        echo "<section class=\"descripcion\">
\t<h1><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "nombre", array()), "html", null, true);
        echo "</a></h1>
\t";
        // line 4
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "descripcion", array()));
        echo "
\t";
        // line 5
        if ( !(isset($context["expirada"]) ? $context["expirada"] : null)) {
            // line 6
            echo "\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t";
        }
        // line 8
        echo "</section>

<section class=\"galeria\">
\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes"]) ? $context["directorio_imagenes"] : null) . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t<p class=\"precio\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "precio", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "descuento", array())), "html", null, true);
        echo "</span></p>
\t<p><strong>Condiciones:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "condiciones", array()), "html", null, true);
        echo "</p>
</section>

<section class=\"estado ";
        // line 16
        echo (((isset($context["expirada"]) ? $context["expirada"] : null)) ? ("expirada") : (""));
        echo "\">
\t";
        // line 17
        if ( !(isset($context["expirada"]) ? $context["expirada"] : null)) {
            // line 18
            echo "\t<div class=\"tiempo\">
\t\t<strong>Faltan</strong>: ";
            // line 19
            echo $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "fechaExpiracion", array()));
            echo "
\t</div>
\t<div class=\"compras\">
\t\t<strong>Compras</strong>: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "compras", array()), "html", null, true);
            echo "
\t</div>
\t<div class=\"faltan\">
\t\t";
            // line 25
            $context["faltan"] = ($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "umbral", array()) - $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "compras", array()));
            // line 26
            echo "\t\t";
            if (((isset($context["faltan"]) ? $context["faltan"] : null) > 0)) {
                // line 27
                echo "\t\t\tFaltan <strong>";
                echo twig_escape_filter($this->env, (isset($context["faltan"]) ? $context["faltan"] : null), "html", null, true);
                echo " compras</strong> <br/> para activar la oferta
\t\t";
            } else {
                // line 29
                echo "\t\t<strong>Oferta activada</strong> por superar las <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "umbral", array()), "html", null, true);
                echo "</strong> compras necesarias
\t\t";
            }
            // line 31
            echo "\t</div>
\t";
        } else {
            // line 33
            echo "\t<div class=\"tiempo\">
\t\t<strong>Finalizada</strong> el ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "fechaExpiracion", array())), "html", null, true);
            echo "
\t</div>
\t<div class=\"compras\">
\t\t<strong>Compras</strong>: ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "compras", array()), "html", null, true);
            echo "
\t</div>
\t";
        }
        // line 40
        echo "</section>
\t
<section class=\"direccion\">
\t<h2>Disfruta de la oferta en</h2>
\t<p>
\t\t<a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tienda_portada", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "ciudad", array()), "slug", array()), "tienda" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "tienda", array()), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a>
\t\t";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "tienda", array()), "direccion", array()), "html", null, true);
        echo "
\t</p>
</section>

<section class=\"tienda\">
\t<h2>Sobre la tienda</h2>
\t";
        // line 52
        echo nl2br(twig_escape_filter($this->env, twig_wordwrap_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : null), "tienda", array()), "descripcion", array()), 40), "html", null, true));
        echo "
</section>";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default/includes:oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  131 => 46,  125 => 45,  118 => 40,  112 => 37,  106 => 34,  103 => 33,  99 => 31,  93 => 29,  87 => 27,  84 => 26,  82 => 25,  76 => 22,  70 => 19,  67 => 18,  65 => 17,  61 => 16,  55 => 13,  49 => 12,  45 => 11,  40 => 8,  36 => 6,  34 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
