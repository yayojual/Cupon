<?php

/* BackendBundle:Tienda:index.html.twig */
class __TwigTemplate_347fd6a3533f39a65395b86560ecb034f0664d2c02348c462951091907d2e096 extends Twig_Template
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
        echo "tienda";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de tiendas";
    }

    // line 6
    public function block_article($context, array $blocks = array())
    {
        // line 7
        echo "<h1>";
        $this->displayBlock("title", $context, $blocks);
        echo "</h1>

<ul class=\"paginador\">
    ";
        // line 10
        if (($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()) > 1)) {
            // line 11
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "previousPage", array()))), "html", null, true);
            // line 12
            echo "\">Anterior</a></li>
    ";
        } else {
            // line 14
            echo "    <li>Anterior</li>
    ";
        }
        // line 16
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "minPageInRange", array()), $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "maxPageInRange", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "    ";
            if (($context["page"] == $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()))) {
                // line 18
                echo "    <li class=\"actual\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</li>
    ";
            } else {
                // line 20
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda", array("page" => $context["page"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                // line 21
                echo "</a></li>
    ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        if (($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()) < $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "lastPage", array()))) {
            // line 25
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "nextPage", array()))), "html", null, true);
            // line 26
            echo "\">Siguiente</a></li>
    ";
        } else {
            // line 28
            echo "    <li>Siguiente</li>
    ";
        }
        // line 30
        echo "</ul>

<table class=\"records_list estrecha\">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 41
            echo "        <tr>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Detalles</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_tienda_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Modificar</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
</table>

<a class=\"boton\" href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("backend_tienda_new");
        echo "\">
            Añadir una nueva tienda
</a>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Tienda:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  160 => 55,  148 => 49,  142 => 46,  135 => 42,  132 => 41,  128 => 40,  116 => 30,  112 => 28,  108 => 26,  105 => 25,  102 => 24,  96 => 23,  92 => 21,  87 => 20,  81 => 18,  78 => 17,  73 => 16,  69 => 14,  65 => 12,  62 => 11,  60 => 10,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
