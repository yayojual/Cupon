<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // pagina_estatica
        if (0 === strpos($pathinfo, '/sitio') && preg_match('#^/sitio/(?P<pagina>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_estatica');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina_estatica')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::estaticaAction',));
        }

        // ciudad_recientes
        if (preg_match('#^/(?P<ciudad>[^/]++)/recientes$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ciudad_recientes')), array (  '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::recientesAction',));
        }

        // oferta_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta_homepage')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::indexAction',));
        }

        // tienda_portada
        if (preg_match('#^/(?P<ciudad>[^/]++)/tiendas/(?P<tienda>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tienda_portada')), array (  '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::portadaAction',));
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

        if (0 === strpos($pathinfo, '/backend')) {
            // backend_portada
            if (rtrim($pathinfo, '/') === '/backend') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_portada');
                }

                return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::indexAction',  '_route' => 'backend_portada',);
            }

            if (0 === strpos($pathinfo, '/backend/c')) {
                // backend_ciudad_cambiar
                if (0 === strpos($pathinfo, '/backend/cambiar-a') && preg_match('#^/backend/cambiar\\-a\\-(?P<ciudad>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ciudad_cambiar')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\DefaultController::ciudadCambiarAction',));
                }

                if (0 === strpos($pathinfo, '/backend/ciudad')) {
                    // backend_ciudad
                    if (rtrim($pathinfo, '/') === '/backend/ciudad') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'backend_ciudad');
                        }

                        return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::indexAction',  '_route' => 'backend_ciudad',);
                    }

                    // backend_ciudad_crear
                    if ($pathinfo === '/backend/ciudad/crear') {
                        return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::crearAction',  '_route' => 'backend_ciudad_crear',);
                    }

                    // backend_ciudad_ver
                    if (0 === strpos($pathinfo, '/backend/ciudad/ver') && preg_match('#^/backend/ciudad/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ciudad_ver')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::verAction',));
                    }

                    // backend_ciudad_actualizar
                    if (0 === strpos($pathinfo, '/backend/ciudad/actualizar') && preg_match('#^/backend/ciudad/actualizar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ciudad_actualizar')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::actualizarAction',));
                    }

                    // backend_ciudad_borrar
                    if (0 === strpos($pathinfo, '/backend/ciudad/borrar') && preg_match('#^/backend/ciudad/borrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_ciudad_borrar')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\CiudadController::borrarAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/backend/oferta')) {
                // backend_oferta
                if (rtrim($pathinfo, '/') === '/backend/oferta') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_oferta');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::indexAction',  '_route' => 'backend_oferta',);
                }

                // backend_oferta_show
                if (preg_match('#^/backend/oferta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_oferta_show')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::showAction',));
                }

                // backend_oferta_new
                if ($pathinfo === '/backend/oferta/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::newAction',  '_route' => 'backend_oferta_new',);
                }

                // backend_oferta_create
                if ($pathinfo === '/backend/oferta/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::createAction',  '_route' => 'backend_oferta_create',);
                }
                not_backend_oferta_create:

                // backend_oferta_edit
                if (preg_match('#^/backend/oferta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_oferta_edit')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::editAction',));
                }

                // backend_oferta_update
                if (preg_match('#^/backend/oferta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_oferta_update')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::updateAction',));
                }
                not_backend_oferta_update:

                // backend_oferta_delete
                if (preg_match('#^/backend/oferta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_oferta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_oferta_delete')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\OfertaController::deleteAction',));
                }
                not_backend_oferta_delete:

            }

            if (0 === strpos($pathinfo, '/backend/tienda')) {
                // backend_tienda
                if (rtrim($pathinfo, '/') === '/backend/tienda') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_tienda');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::indexAction',  '_route' => 'backend_tienda',);
                }

                // backend_tienda_show
                if (preg_match('#^/backend/tienda/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_tienda_show')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::showAction',));
                }

                // backend_tienda_new
                if ($pathinfo === '/backend/tienda/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::newAction',  '_route' => 'backend_tienda_new',);
                }

                // backend_tienda_create
                if ($pathinfo === '/backend/tienda/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_tienda_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::createAction',  '_route' => 'backend_tienda_create',);
                }
                not_backend_tienda_create:

                // backend_tienda_edit
                if (preg_match('#^/backend/tienda/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_tienda_edit')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::editAction',));
                }

                // backend_tienda_update
                if (preg_match('#^/backend/tienda/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_backend_tienda_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_tienda_update')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::updateAction',));
                }
                not_backend_tienda_update:

                // backend_tienda_delete
                if (preg_match('#^/backend/tienda/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_backend_tienda_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_tienda_delete')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\TiendaController::deleteAction',));
                }
                not_backend_tienda_delete:

            }

            if (0 === strpos($pathinfo, '/backend/usuario')) {
                // backend_usuario
                if (rtrim($pathinfo, '/') === '/backend/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'backend_usuario');
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'backend_usuario',);
                }

                // backend_usuario_show
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_usuario_show')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::showAction',));
                }

                // backend_usuario_new
                if ($pathinfo === '/backend/usuario/new') {
                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::newAction',  '_route' => 'backend_usuario_new',);
                }

                // backend_usuario_create
                if ($pathinfo === '/backend/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_backend_usuario_create;
                    }

                    return array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::createAction',  '_route' => 'backend_usuario_create',);
                }
                not_backend_usuario_create:

                // backend_usuario_edit
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_usuario_edit')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::editAction',));
                }

                // backend_usuario_update
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_backend_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_usuario_update')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::updateAction',));
                }
                not_backend_usuario_update:

                // backend_usuario_delete
                if (preg_match('#^/backend/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_backend_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'backend_usuario_delete')), array (  '_controller' => 'Cupon\\BackendBundle\\Controller\\UsuarioController::deleteAction',));
                }
                not_backend_usuario_delete:

            }

        }

        // contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::contactoAction',  '_route' => 'contacto',);
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

        // oferta
        if (preg_match('#^/(?P<ciudad>[^/]++)/ofertas/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oferta')), array (  '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ofertaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
