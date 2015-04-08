<?php

/* BackendBundle:Oferta:email.html.twig */
class __TwigTemplate_360e2ec3efbe5df35fa36368ecca7d9ae08785e66bc101d81401a3fe2a9ec01b extends Twig_Template
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
        echo "<html>

<head>
    <style>
        body { font: 13px/1.5 Arial, sans-serif; }
        ul { margin-left: .5em; padding-left: 0; }
    </style>
</head>

<body>
    <table cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%;\" width=\"100%\">
        <tr style=\"background: #00154E; color: #FFF;\">
            <td style=\"padding: 1em;\"><a style=\"color: #FFF; font-size: 21px; text-decoration: none;\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ((isset($context["host"]) ? $context["host"] : $this->getContext($context, "host")) . $this->env->getExtension('routing')->getPath("_portada")), "html", null, true);
        echo "\">CUPON</a></td>
            <td style=\"text-align: right; padding: 1em;\">Oferta del día en <span style=\"color: #FF3385; display: block; font-size: 18px;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ciudad"]) ? $context["ciudad"] : $this->getContext($context, "ciudad")), "nombre", array()), "html", null, true);
        echo "</span></td>
        </tr>

        <tr>
            <td style=\"padding-top: 5px;\">
                <a style=\"color: #000; font-size: 21px; font-weight: bold; text-decoration: none;\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "nombre", array()), "html", null, true);
        echo "</a>
                <div style=\"font-size: 16px;\">";
        // line 20
        echo $this->env->getExtension('cupon')->mostrarComoLista($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descripcion", array()));
        echo "</div>
            </td>
            <td style=\"padding-top: 20px;\">
                <img style=\"margin: 1em 0; max-width: 250px; outline: 2px solid #CCC;\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (((isset($context["host"]) ? $context["host"] : $this->getContext($context, "host")) . (isset($context["directorio_imagenes"]) ? $context["directorio_imagenes"] : $this->getContext($context, "directorio_imagenes"))) . $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "rutaFoto", array())), "html", null, true);
        echo "\" />
            </td>
        </tr>

        <tr>
            <td>
                <a style=\"background: #C06; border-radius: 5px; color: #FFF; font-size: 21px; padding: .5em 1em; text-decoration: none;\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, ((isset($context["host"]) ? $context["host"] : $this->getContext($context, "host")) . $this->env->getExtension('routing')->getPath("oferta", array("ciudad" => $this->getAttribute($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "ciudad", array()), "slug", array()), "slug" => $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "slug", array())))), "html", null, true);
        echo "\">Ver oferta</a>
            </td>
            <td style=\"font-size: 28px; padding: .5em;\">
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), "html", null, true);
        echo " &euro; <strong style=\"color: #C06; padding-left: 1em;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('cupon')->descuento($this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "precio", array()), $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "descuento", array())), "html", null, true);
        echo "</strong>
            </td>
        </tr>

        <tr>
            <td colspan=\"2\" style=\"font-size: 18px; padding: 1em .5em;\"><strong>¡Date prisa ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombre", array()), "html", null, true);
        echo "!</strong> Esta oferta caduca el ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), "long"), "html", null, true);
        echo " a las ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["oferta"]) ? $context["oferta"] : $this->getContext($context, "oferta")), "fechaExpiracion", array()), "none", "medium"), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <td colspan=\"2\" style=\"color: #AAA; font-size: 13px;\">
                &copy; ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Has recibido este email porque estás suscrito al servicio de envío de <em>\"La oferta del día\"</em>. Para darte de baja de este servicio, accede a <a href=\"";
        echo twig_escape_filter($this->env, ((isset($context["host"]) ? $context["host"] : $this->getContext($context, "host")) . $this->env->getExtension('routing')->getPath("usuario_perfil")), "html", null, true);
        echo "\">tu perfil</a> y desactiva la opción de envío de emails.
            </td>
        </tr>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Oferta:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  82 => 37,  72 => 32,  66 => 29,  57 => 23,  51 => 20,  45 => 19,  37 => 14,  33 => 13,  19 => 1,);
    }
}
