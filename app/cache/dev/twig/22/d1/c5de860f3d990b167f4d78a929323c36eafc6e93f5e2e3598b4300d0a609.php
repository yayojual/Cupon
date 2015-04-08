<?php

/* IdeupSimplePaginatorBundle:Paginator:simple-paginator-list-view.html.twig */
class __TwigTemplate_22d1c5de860f3d990b167f4d78a929323c36eafc6e93f5e2e3598b4300d0a609 extends Twig_Template
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
        echo "<ul class=\"";
        echo twig_escape_filter($this->env, (isset($context["container_class"]) ? $context["container_class"] : $this->getContext($context, "container_class")), "html", null, true);
        echo "\">
    <!-- FIRST -->
    ";
        // line 3
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
            // line 4
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["firstPage"]) ? $context["firstPage"] : $this->getContext($context, "firstPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 5
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["firstEnabledClass"]) ? $context["firstEnabledClass"] : $this->getContext($context, "firstEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["firstPageText"]) ? $context["firstPageText"] : $this->getContext($context, "firstPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 9
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["firstDisabledClass"]) ? $context["firstDisabledClass"] : $this->getContext($context, "firstDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["firstPageText"]) ? $context["firstPageText"] : $this->getContext($context, "firstPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 13
        echo "
    <!-- PREVIOUS -->
    ";
        // line 15
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) > 1)) {
            echo "   
        ";
            // line 16
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["previousPage"]) ? $context["previousPage"] : $this->getContext($context, "previousPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 17
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["previousEnabledClass"]) ? $context["previousEnabledClass"] : $this->getContext($context, "previousEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["previousPageText"]) ? $context["previousPageText"] : $this->getContext($context, "previousPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 21
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["previousDisabledClass"]) ? $context["previousDisabledClass"] : $this->getContext($context, "previousDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["previousPageText"]) ? $context["previousPageText"] : $this->getContext($context, "previousPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 25
        echo "
    <!-- NUMBERS -->
    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range((isset($context["minPage"]) ? $context["minPage"] : $this->getContext($context, "minPage")), (isset($context["maxPage"]) ? $context["maxPage"] : $this->getContext($context, "maxPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (($context["page"] == (isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")))) {
                // line 29
                echo "            <li class=\"";
                echo twig_escape_filter($this->env, (isset($context["currentClass"]) ? $context["currentClass"] : $this->getContext($context, "currentClass")), "html", null, true);
                echo "\">
                ";
                // line 30
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "
            </li>
        ";
            } else {
                // line 33
                echo "            ";
                $context["rParams"] = twig_array_merge(array("page" => $context["page"], "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
                // line 34
                echo "            <li>
                <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 38
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <!-- NEXT -->
    ";
        // line 41
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
            // line 42
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["nextPage"]) ? $context["nextPage"] : $this->getContext($context, "nextPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 43
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["nextEnabledClass"]) ? $context["nextEnabledClass"] : $this->getContext($context, "nextEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["nextPageText"]) ? $context["nextPageText"] : $this->getContext($context, "nextPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 47
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["nextDisabledClass"]) ? $context["nextDisabledClass"] : $this->getContext($context, "nextDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["nextPageText"]) ? $context["nextPageText"] : $this->getContext($context, "nextPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 51
        echo "
    <!-- LAST -->
    ";
        // line 53
        if (((isset($context["currentPage"]) ? $context["currentPage"] : $this->getContext($context, "currentPage")) < (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")))) {
            // line 54
            echo "        ";
            $context["rParams"] = twig_array_merge(array("page" => (isset($context["lastPage"]) ? $context["lastPage"] : $this->getContext($context, "lastPage")), "paginatorId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), (isset($context["routeParams"]) ? $context["routeParams"] : $this->getContext($context, "routeParams")));
            // line 55
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["lastEnabledClass"]) ? $context["lastEnabledClass"] : $this->getContext($context, "lastEnabledClass")), "html", null, true);
            echo "\">
            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["rParams"]) ? $context["rParams"] : $this->getContext($context, "rParams"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["lastPageText"]) ? $context["lastPageText"] : $this->getContext($context, "lastPageText")), "html", null, true);
            echo "</a>
        </li>
    ";
        } else {
            // line 59
            echo "        <li class=\"";
            echo twig_escape_filter($this->env, (isset($context["lastDisabledClass"]) ? $context["lastDisabledClass"] : $this->getContext($context, "lastDisabledClass")), "html", null, true);
            echo "\">
            ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["lastPageText"]) ? $context["lastPageText"] : $this->getContext($context, "lastPageText")), "html", null, true);
            echo "
        </li>
    ";
        }
        // line 63
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "IdeupSimplePaginatorBundle:Paginator:simple-paginator-list-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 63,  190 => 60,  185 => 59,  177 => 56,  172 => 55,  169 => 54,  167 => 53,  163 => 51,  157 => 48,  152 => 47,  144 => 44,  139 => 43,  136 => 42,  134 => 41,  130 => 39,  124 => 38,  116 => 35,  113 => 34,  110 => 33,  104 => 30,  99 => 29,  96 => 28,  92 => 27,  88 => 25,  82 => 22,  77 => 21,  69 => 18,  64 => 17,  62 => 16,  58 => 15,  54 => 13,  48 => 10,  43 => 9,  35 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
