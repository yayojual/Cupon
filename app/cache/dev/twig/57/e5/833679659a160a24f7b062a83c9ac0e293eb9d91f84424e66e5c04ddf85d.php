<?php

/* BackendBundle:Oferta:index.html.twig */
class __TwigTemplate_57e5833679659a160a24f7b062a83c9ac0e293eb9d91f84424e66e5c04ddf85d extends Twig_Template
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
    public function block_article($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Listado de ofertas</h1>

<ul class=\"paginador\">
    ";
        // line 7
        if (($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()) > 1)) {
            // line 8
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "previousPage", array()))), "html", null, true);
            // line 9
            echo "\">Anterior</a></li>
    ";
        } else {
            // line 11
            echo "    <li>Anterior</li>
    ";
        }
        // line 13
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "minPageInRange", array()), $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "maxPageInRange", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "    ";
            if (($context["page"] == $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()))) {
                // line 15
                echo "    <li class=\"actual\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</li>
    ";
            } else {
                // line 17
                echo "    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta", array("page" => $context["page"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                // line 18
                echo "</a></li>
    ";
            }
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        if (($this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "currentPage", array()) < $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "lastPage", array()))) {
            // line 22
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "nextPage", array()))), "html", null, true);
            // line 23
            echo "\">Siguiente</a></li>
    ";
        } else {
            // line 25
            echo "    <li>Siguiente</li>
    ";
        }
        // line 27
        echo "</ul>

<table class=\"records_list\">
    <thead>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Descuento</th>
    <th>Fecha_publicacion</th>
    <th>Fecha_expiracion</th>
    <th>Compras</th>
    <th>Umbral</th>
    <th>Revisada</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "    <tr>
    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            // line 48
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "precio", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descuento", array()), "html", null, true);
            echo "</td>
    <td>
    ";
            // line 53
            if ($this->getAttribute($context["entity"], "fechapublicacion", array())) {
                // line 54
                echo "    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechapublicacion", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
    ";
            }
            // line 56
            echo "    </td>
    <td>
    ";
            // line 58
            if ($this->getAttribute($context["entity"], "fechaexpiracion", array())) {
                // line 59
                echo "    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaexpiracion", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
    ";
            }
            // line 61
            echo "    </td>
    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compras", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "umbral", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "revisada", array()), "html", null, true);
            echo "</td>
    <td>
    <ul>
        <li><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta_show", array("id" => $this->getAttribute(            // line 68
$context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a></li>
        <li><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_oferta_edit", array("id" => $this->getAttribute(            // line 70
$context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a></li>
    </ul>
    </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    </tbody>
</table>
<a class=\"boton\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("backend_oferta_new");
        echo "\">Añadir una nueva oferta</a>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Oferta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 77,  201 => 75,  190 => 70,  189 => 69,  185 => 68,  184 => 67,  178 => 64,  174 => 63,  170 => 62,  167 => 61,  161 => 59,  159 => 58,  155 => 56,  149 => 54,  147 => 53,  142 => 51,  138 => 50,  134 => 49,  129 => 48,  127 => 47,  124 => 46,  120 => 45,  100 => 27,  96 => 25,  92 => 23,  89 => 22,  86 => 21,  80 => 20,  76 => 18,  71 => 17,  65 => 15,  62 => 14,  57 => 13,  53 => 11,  49 => 9,  46 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
