<?php

/* OfertaBundle:Default/includes:minioferta.html.twig */
class __TwigTemplate_0087e51a2b29f373ad0ba2eced25af25cfc77d72cefc249eb9bd1e66119979dc extends Twig_Template
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
        $context["expirada"] = (twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), "YmdHis") < twig_date_format_filter($this->env, "now", "YmdHis"));
        // line 2
        $context["comprada"] = ((array_key_exists("comprada", $context)) ? (_twig_default_filter((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada")), false)) : (false));
        // line 3
        echo "<section class=\"oferta mini\">
\t<div class=\"descripcion\">
\t\t<h2><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute(        // line 6
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a></h2>
\t\t";
        // line 7
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()));
        echo "
\t\t";
        // line 8
        if (( !(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada")) &&  !(isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada")))) {
            // line 9
            echo "\t\t\t<a class=\"boton\" href=\"#\">Comprar</a>
\t\t";
        }
        // line 11
        echo "\t\t<div class=\"estado ";
        echo (((isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) ? ("expirada") : (""));
        echo " ";
        echo (((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada"))) ? ("comprada") : (""));
        echo "\">
\t\t\t";
        // line 12
        if ((isset($context["comprada"]) ? $context["comprada"] : $this->getContext($context, "comprada"))) {
            // line 13
            echo "\t\t\tComprada el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fechaCompra"]) ? $context["fechaCompra"] : $this->getContext($context, "fechaCompra")), "d/m/Y"), "html", null, true);
            echo "
\t\t\t";
        } elseif ( !        // line 14
(isset($context["expirada"]) ? $context["expirada"] : $this->getContext($context, "expirada"))) {
            // line 15
            echo "\t\t\t<strong>Faltan</strong>: ";
            echo $this->env->getExtension('cupon')->cuentaAtras($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()));
            echo "
\t\t\t";
        } else {
            // line 17
            echo "\t\t\tFinalizada el ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array())), "html", null, true);
            echo "
\t\t\t";
        }
        // line 19
        echo "\t\t</div>
\t</div>
\t
\t<div class=\"galeria\">
\t\t<img alt=\"Fotografía de la oferta\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes"]) ? $context["directorio_imagenes"] : $this->getContext($context, "directorio_imagenes")) . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array()))), "html", null, true);
        echo "\">
\t\t<p class=\"precio\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute(        // line 25
(isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array())), "html", null, true);
        echo "</span></p>
\t\t<p>Disfruta de esta oferta en <a href=\"#\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "tienda", array()), "nombre", array()), "html", null, true);
        echo "</a></p>
\t</div>
</section>";
    }

    public function getTemplateName()
    {
        return "OfertaBundle:Default/includes:minioferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  85 => 25,  82 => 24,  78 => 23,  72 => 19,  66 => 17,  60 => 15,  58 => 14,  53 => 13,  51 => 12,  44 => 11,  40 => 9,  38 => 8,  34 => 7,  28 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
