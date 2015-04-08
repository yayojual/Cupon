<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'tienda_portada' => array (  0 =>   array (    0 => 'ciudad',    1 => 'tienda',  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\DefaultController::portadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tienda',    ),    1 =>     array (      0 => 'text',      1 => '/tiendas',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ciudad',    ),  ),  4 =>   array (  ),),
        'ciudad_recientes' => array (  0 =>   array (    0 => 'ciudad',  ),  1 =>   array (    '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::recientesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recientes',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ciudad',    ),  ),  4 =>   array (  ),),
        'oferta' => array (  0 =>   array (    0 => 'ciudad',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::ofertaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/ofertas',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ciudad',    ),  ),  4 =>   array (  ),),
        'pagina_estatica' => array (  0 =>   array (    0 => 'pagina',  ),  1 =>   array (    '_controller' => 'Cupon\\OfertaBundle\\Controller\\SitioController::estaticaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'pagina',    ),    2 =>     array (      0 => 'text',      1 => '/sitio',    ),  ),  4 =>   array (  ),),
        'portada' => array (  0 =>   array (    0 => 'ciudad',  ),  1 =>   array (    '_controller' => 'Cupon\\OfertaBundle\\Controller\\DefaultController::portadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'ciudad',    ),  ),  4 =>   array (  ),),
        '_portada' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',    'route' => 'portada',    'ciudad' => 'barcelona',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'ciudad_cambiar' => array (  0 =>   array (    0 => 'ciudad',  ),  1 =>   array (    '_controller' => 'Cupon\\CiudadBundle\\Controller\\DefaultController::cambiarAction',  ),  2 =>   array (    'ciudad' => '.+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '.+',      3 => 'ciudad',    ),    1 =>     array (      0 => 'text',      1 => '/ciudad/cambiar-a',    ),  ),  4 =>   array (  ),),
        'usuario_compras' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::comprasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/compras',    ),  ),  4 =>   array (  ),),
        'usuario_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/login',    ),  ),  4 =>   array (  ),),
        'usuario_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/login_check',    ),  ),  4 =>   array (  ),),
        'usuario_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/logout',    ),  ),  4 =>   array (  ),),
        'usuario_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/registro',    ),  ),  4 =>   array (  ),),
        'usuario_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\UsuarioBundle\\Controller\\DefaultController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/perfil',    ),  ),  4 =>   array (  ),),
        'extranet_portada' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::portadaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/',    ),  ),  4 =>   array (  ),),
        'extranet_oferta_nueva' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaNuevaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/oferta/nueva',    ),  ),  4 =>   array (  ),),
        'extranet_oferta_editar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaEditarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/extranet/oferta/editar',    ),  ),  4 =>   array (  ),),
        'extranet_oferta_ventas' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::ofertaVentasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/extranet/oferta/ventas',    ),  ),  4 =>   array (  ),),
        'extranet_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/perfil',    ),  ),  4 =>   array (  ),),
        'extranet_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Cupon\\TiendaBundle\\Controller\\ExtranetController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/login',    ),  ),  4 =>   array (  ),),
        'extranet_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/login_check',    ),  ),  4 =>   array (  ),),
        'extranet_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/extranet/logout',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
