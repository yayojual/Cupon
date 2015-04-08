<?php

/* UsuarioBundle:Default:cajaLogin.html.twig */
class __TwigTemplate_fafb70be7763eab7636d1d1792a122e9685cda4b5d2ecfbd5d722f1760984ea8 extends Twig_Template
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
        // line 2
        if ($this->env->getExtension('security')->isGranted("ROLE_USUARIO")) {
            // line 3
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["tipo"] => $context["mensajes"]) {
                // line 4
                echo "\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["mensajes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
                    // line 5
                    echo "\t\t<p class=\"flash-";
                    echo twig_escape_filter($this->env, $context["tipo"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["mensaje"], "html", null, true);
                    echo "</p>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 7
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tipo'], $context['mensajes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "\t<p>Conectado como ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</p>
\t<a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("usuario_perfil");
            echo "\">Ver mi perfil</a>
\t<a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("usuario_logout");
            echo "\">Cerrar sesión</a>
";
        } else {
            // line 13
            echo "<a class=\"boton\" href=\"";
            echo $this->env->getExtension('routing')->getPath("usuario_registro");
            echo "\">Regístrate</a>
<h2>Accede a tu cuenta</h2>
<form action=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("usuario_login_check");
            echo "\" method=\"post\">
\t";
            // line 16
            if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
                // line 17
                echo "\t<div>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
                echo "</div>
\t";
            }
            // line 19
            echo "
\t<label for=\"login_user\">Email</label>
\t<input id=\"login_user\" type=\"text\" name=\"_username\"
\t\tvalue=\"";
            // line 22
            echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "")) : ("")), "html", null, true);
            echo "\" />
\t<label for=\"login_pass\">Contraseña</label>
\t<input id=\"login_pass\" type=\"password\" name=\"_password\" />
\t<input type=\"submit\" value=\"Entrar\" />
\t<input type=\"checkbox\" id=\"no_cerrar\" name=\"_remember_me\" checked />
\t<label for=\"no_cerrar\">No cerrar sesión</label>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "UsuarioBundle:Default:cajaLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  80 => 19,  74 => 17,  72 => 16,  68 => 15,  62 => 13,  57 => 10,  53 => 9,  48 => 8,  42 => 7,  31 => 5,  26 => 4,  21 => 3,  19 => 2,);
    }
}
