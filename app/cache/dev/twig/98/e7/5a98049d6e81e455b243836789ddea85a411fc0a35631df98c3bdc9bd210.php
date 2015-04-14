<?php

/* BackendBundle:Usuario:index.html.twig */
class __TwigTemplate_98e75a98049d6e81e455b243836789ddea85a411fc0a35631df98c3bdc9bd210 extends Twig_Template
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
        echo "usuario";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Listado de usuarios";
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "previousPage", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario", array("page" => $context["page"])), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario", array("page" => $this->getAttribute((isset($context["paginador"]) ? $context["paginador"] : $this->getContext($context, "paginador")), "nextPage", array()))), "html", null, true);
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

<table class=\"records_list\">
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre y apellidos</th>
            <th>Edad</th>
            <th>Email</th>
            <th>¿Permite email?</th>
            <th>Fecha alta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 46
            echo "        <tr>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "dni", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nombre", array()) . " ") . $this->getAttribute($context["entity"], "apellidos", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 49
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaNacimiento", array()), "Y")), "html", null, true);
            echo "</td>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 51
            echo (($this->getAttribute($context["entity"], "permiteemail", array())) ? ("<span class=\"si\">&#10004;</span>") : ("<span class=\"no\">&#10008;</span>"));
            echo "</td>
            <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "fechaalta", array()), "medium"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">Detalles</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_usuario_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
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
        // line 65
        echo "    </tbody>
</table>

";
        // line 68
        $this->env->loadTemplate("BackendBundle:Default:paginador.html.twig")->display(array("ruta" => "backend_usuario"));
        // line 69
        echo "
<a class=\"boton\" href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("backend_usuario_new");
        echo "\">
            Añadir un nuevo usuario</a>
";
    }

    public function getTemplateName()
    {
        return "BackendBundle:Usuario:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 70,  192 => 69,  190 => 68,  185 => 65,  173 => 59,  167 => 56,  160 => 52,  156 => 51,  152 => 50,  148 => 49,  144 => 48,  140 => 47,  137 => 46,  133 => 45,  116 => 30,  112 => 28,  108 => 26,  105 => 25,  102 => 24,  96 => 23,  92 => 21,  87 => 20,  81 => 18,  78 => 17,  73 => 16,  69 => 14,  65 => 12,  62 => 11,  60 => 10,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
