<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // akina_immobilier_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'akina_immobilier_homepage');
            }

            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'akina_immobilier_homepage',);
        }

        // akina_
        if ('/accueil' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::listAction',  '_route' => 'akina_',);
        }

        // disponi
        if ('/add' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::addAction',  '_route' => 'disponi',);
        }

        if (0 === strpos($pathinfo, '/res')) {
            // Reserve
            if (0 === strpos($pathinfo, '/reserve') && preg_match('#^/reserve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reserve')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::ReserveAction',));
            }

            // Resultat
            if ('/resultat' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::listAction',  '_route' => 'Resultat',);
            }

            // Res
            if ('/res' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::listAction',  '_route' => 'Res',);
            }

            if (0 === strpos($pathinfo, '/rese')) {
                // poni
                if ('/reserv' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::listResAction',  '_route' => 'poni',);
                }

                // paiement
                if ('/rese' === $pathinfo) {
                    return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::paiementAction',  '_route' => 'paiement',);
                }

            }

        }

        // search
        if ('/search' === $pathinfo) {
            return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::searchAction',  '_route' => 'search',);
        }

        if (0 === strpos($pathinfo, '/tes')) {
            // tes
            if ('/test' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\FrontController::testAction',  '_route' => 'tes',);
            }

            // teste
            if ('/tes' === $pathinfo) {
                return array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::testeAction',  '_route' => 'teste',);
            }

        }

        // disponibilite
        if (0 === strpos($pathinfo, '/list') && preg_match('#^/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'disponibilite')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::disponibiliteAction',));
        }

        if (0 === strpos($pathinfo, '/detail')) {
            // detail
            if (preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::DetailAction',));
            }

            // detailBien
            if (0 === strpos($pathinfo, '/detailB') && preg_match('#^/detailB/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailBien')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::detailBienAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/con')) {
            // contrat
            if (0 === strpos($pathinfo, '/contrat') && preg_match('#^/contrat/(?P<id>[^/]++)/(?P<bien>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::contratAction',));
            }

            // valide
            if (preg_match('#^/con/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'valide')), array (  '_controller' => 'Akina\\ImmobilierBundle\\Controller\\AdminController::valideAction',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
