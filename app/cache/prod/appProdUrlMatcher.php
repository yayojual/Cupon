<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // tienda_portada
        if (preg_match('#^/(?P<ciudad>[^/]++)/tiendas/(?P<tienda>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_portada')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::portadaAction',));
        }

        // ciudad_recientes
        if (preg_match('#^/(?P<ciudad>[^/]++)/recientes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_recientes')), array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::recientesAction',));
        }

        // oferta
        if (preg_match('#^/(?P<ciudad>[^/]++)/ofertas/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ofertaAction',));
        }

        // pagina_estatica
        if (0 === strpos($pathinfo, '/sitio') && preg_match('#^/sitio/(?P<pagina>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_estatica');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_estatica')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::estaticaAction',));
        }

        // portada
        if (preg_match('#^/(?P<ciudad>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'portada')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::portadaAction',));
        }

        // _portada
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_portada');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'portada',  'ciudad' => 'barcelona',  '_route' => '_portada',);
        }

        // ciudad_cambiar
        if (0 === strpos($pathinfo, '/ciudad/cambiar-a') && preg_match('#^/ciudad/cambiar\\-a\\-(?P<ciudad>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_cambiar')), array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::cambiarAction',));
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_compras
            if ($pathinfo === '/usuario/compras') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::comprasAction',  '_route' => 'usuario_compras',);
            }

            if (0 === strpos($pathinfo, '/usuario/log')) {
                if (0 === strpos($pathinfo, '/usuario/login')) {
                    // usuario_login
                    if ($pathinfo === '/usuario/login') {
                        return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
                    }

                    // usuario_login_check
                    if ($pathinfo === '/usuario/login_check') {
                        return array('_route' => 'usuario_login_check');
                    }

                }

                // usuario_logout
                if ($pathinfo === '/usuario/logout') {
                    return array('_route' => 'usuario_logout');
                }

            }

            // usuario_registro
            if ($pathinfo === '/usuario/registro') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::registroAction',  '_route' => 'usuario_registro',);
            }

            // usuario_perfil
            if ($pathinfo === '/usuario/perfil') {
                return array (  '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'usuario_perfil',);
            }

        }

        if (0 === strpos($pathinfo, '/extranet')) {
            // extranet_portada
            if (rtrim($pathinfo, '/') === '/extranet') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'extranet_portada');
                }

                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::portadaAction',  '_route' => 'extranet_portada',);
            }

            if (0 === strpos($pathinfo, '/extranet/oferta')) {
                // extranet_oferta_nueva
                if ($pathinfo === '/extranet/oferta/nueva') {
                    return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaNuevaAction',  '_route' => 'extranet_oferta_nueva',);
                }

                // extranet_oferta_editar
                if (0 === strpos($pathinfo, '/extranet/oferta/editar') && preg_match('#^/extranet/oferta/editar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extranet_oferta_editar')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaEditarAction',));
                }

                // extranet_oferta_ventas
                if (0 === strpos($pathinfo, '/extranet/oferta/ventas') && preg_match('#^/extranet/oferta/ventas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'extranet_oferta_ventas')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaVentasAction',));
                }

            }

            // extranet_perfil
            if ($pathinfo === '/extranet/perfil') {
                return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::perfilAction',  '_route' => 'extranet_perfil',);
            }

            if (0 === strpos($pathinfo, '/extranet/log')) {
                if (0 === strpos($pathinfo, '/extranet/login')) {
                    // extranet_login
                    if ($pathinfo === '/extranet/login') {
                        return array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::loginAction',  '_route' => 'extranet_login',);
                    }

                    // extranet_login_check
                    if ($pathinfo === '/extranet/login_check') {
                        return array('_route' => 'extranet_login_check');
                    }

                }

                // extranet_logout
                if ($pathinfo === '/extranet/logout') {
                    return array('_route' => 'extranet_logout');
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
