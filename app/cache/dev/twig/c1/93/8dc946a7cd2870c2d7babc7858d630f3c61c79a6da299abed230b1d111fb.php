<?php

/* BackendBundle:Oferta:show.html.twig */
class __TwigTemplate_c1938dc946a7cd2870c2d7babc7858d630f3c61c79a6da299abed230b1d111fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::backend.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'title' => array($this, 'block_title'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::backend.html.twig";
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
        echo "Datos de la oferta ";
        echo twig_escape_filter($this->env, (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "html", null, true);
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Slug</th>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "slug", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Condiciones</th>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "condiciones", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((isset($context["directorio_imagenes"]) ? $context["directorio_imagenes"] : $this->getContext($context, "directorio_imagenes")) . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rutaFoto", array()))), "html", null, true);
        echo "\" /></td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "precio", array()), "html", null, true);
        echo " &euro;</td>
        </tr>
        <tr>
            <th>Descuento</th>
            <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descuento", array()), "html", null, true);
        echo " &euro;</td>
        </tr>
        <tr>
            <th>Fecha publicación</th>
            <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechapublicacion", array()), "long", "medium"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha expiración</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaexpiracion", array()), "long", "medium"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Compras</th>
        <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compras", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Compras necesarias</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "umbral", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Revisada</th>
            <td>";
        // line 61
        echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "revisada", array())) ? ("si") : ("no"));
        echo "</td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ciudad", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tienda</th>
            <td>";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tienda", array()), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("backend_oferta");
        echo "\">
            Volver al listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Modificar oferta
        </a>
    </li>
    <li>
        <form action=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Borrar oferta</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Oferta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 87,  188 => 86,  180 => 81,  172 => 76,  162 => 69,  155 => 65,  148 => 61,  141 => 57,  134 => 53,  127 => 49,  120 => 45,  113 => 41,  106 => 37,  99 => 33,  92 => 29,  85 => 25,  78 => 21,  71 => 17,  64 => 13,  54 => 7,  51 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
