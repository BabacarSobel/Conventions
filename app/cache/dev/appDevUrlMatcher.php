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
        $context = $this->context;
        $request = $this->request;

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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // error_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'error_homepage')), array (  '_controller' => 'PC\\ErrorBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/40')) {
            // error_403
            if ($pathinfo === '/403') {
                return array (  '_controller' => 'PC\\ErrorBundle\\Controller\\DefaultController::error403Action',  '_route' => 'error_403',);
            }

            // error_404
            if ($pathinfo === '/404') {
                return array (  '_controller' => 'PC\\ErrorBundle\\Controller\\DefaultController::error404Action',  '_route' => 'error_404',);
            }

        }

        // pc_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pc_home');
            }

            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\HomeController::homeAction',  '_route' => 'pc_home',);
        }

        // pc_precedent
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pc_precedent');
            }

            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\HomeController::backwardAction',  '_route' => 'pc_precedent',);
        }

        if (0 === strpos($pathinfo, '/action')) {
            // action
            if (rtrim($pathinfo, '/') === '/action') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'action');
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::indexAction',  '_route' => 'action',);
            }

            // action_show
            if (preg_match('#^/action/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'action_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::showAction',));
            }

            // action_new
            if ($pathinfo === '/action/new') {
                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::newAction',  '_route' => 'action_new',);
            }

            // action_create
            if ($pathinfo === '/action/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_action_create;
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::createAction',  '_route' => 'action_create',);
            }
            not_action_create:

            // action_edit
            if (preg_match('#^/action/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'action_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::editAction',));
            }

            // action_update
            if (preg_match('#^/action/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_action_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'action_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::updateAction',));
            }
            not_action_update:

            // action_delete
            if (preg_match('#^/action/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_action_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'action_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ActionController::deleteAction',));
            }
            not_action_delete:

        }

        if (0 === strpos($pathinfo, '/loca')) {
            if (0 === strpos($pathinfo, '/location')) {
                // location
                if (rtrim($pathinfo, '/') === '/location') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'location');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::indexAction',  '_route' => 'location',);
                }

                // location_show
                if (preg_match('#^/location/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::showAction',));
                }

                // location_new
                if ($pathinfo === '/location/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::newAction',  '_route' => 'location_new',);
                }

                // location_create
                if ($pathinfo === '/location/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_location_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::createAction',  '_route' => 'location_create',);
                }
                not_location_create:

                // location_edit
                if (preg_match('#^/location/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::editAction',));
                }

                // location_update
                if (preg_match('#^/location/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_location_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::updateAction',));
                }
                not_location_update:

                // location_delete
                if (preg_match('#^/location/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_location_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocationController::deleteAction',));
                }
                not_location_delete:

            }

            if (0 === strpos($pathinfo, '/local')) {
                // local
                if (rtrim($pathinfo, '/') === '/local') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'local');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::indexAction',  '_route' => 'local',);
                }

                // local_show
                if (preg_match('#^/local/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::showAction',));
                }

                // local_new
                if ($pathinfo === '/local/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::newAction',  '_route' => 'local_new',);
                }

                // local_create
                if ($pathinfo === '/local/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_local_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::createAction',  '_route' => 'local_create',);
                }
                not_local_create:

                // local_edit
                if (preg_match('#^/local/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::editAction',));
                }

                // local_update
                if (preg_match('#^/local/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_local_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::updateAction',));
                }
                not_local_update:

                // local_delete
                if (preg_match('#^/local/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_local_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\LocalController::deleteAction',));
                }
                not_local_delete:

            }

        }

        if (0 === strpos($pathinfo, '/fiche')) {
            if (0 === strpos($pathinfo, '/fiche/departement')) {
                // departement
                if (rtrim($pathinfo, '/') === '/fiche/departement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'departement');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::indexAction',  '_route' => 'departement',);
                }

                // departement_show
                if (preg_match('#^/fiche/departement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::showAction',));
                }

                // departement_new
                if ($pathinfo === '/fiche/departement/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::newAction',  '_route' => 'departement_new',);
                }

                // departement_create
                if ($pathinfo === '/fiche/departement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_departement_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::createAction',  '_route' => 'departement_create',);
                }
                not_departement_create:

                // departement_edit
                if (preg_match('#^/fiche/departement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::editAction',));
                }

                // departement_update
                if (preg_match('#^/fiche/departement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_departement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::updateAction',));
                }
                not_departement_update:

                // departement_delete
                if (preg_match('#^/fiche/departement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_departement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'departement_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DepartementController::deleteAction',));
                }
                not_departement_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/soustype')) {
                // soustype
                if (rtrim($pathinfo, '/') === '/fiche/soustype') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'soustype');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::indexAction',  '_route' => 'soustype',);
                }

                // soustype_show
                if (preg_match('#^/fiche/soustype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soustype_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::showAction',));
                }

                // soustype_new
                if ($pathinfo === '/fiche/soustype/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::newAction',  '_route' => 'soustype_new',);
                }

                // soustype_create
                if ($pathinfo === '/fiche/soustype/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_soustype_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::createAction',  '_route' => 'soustype_create',);
                }
                not_soustype_create:

                // soustype_edit
                if (preg_match('#^/fiche/soustype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soustype_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::editAction',));
                }

                // soustype_update
                if (preg_match('#^/fiche/soustype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_soustype_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soustype_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::updateAction',));
                }
                not_soustype_update:

                // soustype_delete
                if (preg_match('#^/fiche/soustype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_soustype_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'soustype_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\SousTypeController::deleteAction',));
                }
                not_soustype_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/type')) {
                // type
                if (rtrim($pathinfo, '/') === '/fiche/type') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'type');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::indexAction',  '_route' => 'type',);
                }

                // type_show
                if (preg_match('#^/fiche/type/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::showAction',));
                }

                // type_new
                if ($pathinfo === '/fiche/type/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::newAction',  '_route' => 'type_new',);
                }

                // type_create
                if ($pathinfo === '/fiche/type/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_type_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::createAction',  '_route' => 'type_create',);
                }
                not_type_create:

                // type_edit
                if (preg_match('#^/fiche/type/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::editAction',));
                }

                // type_update
                if (preg_match('#^/fiche/type/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_type_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::updateAction',));
                }
                not_type_update:

                // type_delete
                if (preg_match('#^/fiche/type/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_type_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'type_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TypeController::deleteAction',));
                }
                not_type_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/autre')) {
                // autre
                if (rtrim($pathinfo, '/') === '/fiche/autre') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'autre');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::indexAction',  '_route' => 'autre',);
                }

                // autre_show
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::showAction',));
                }

                // autre_new
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::newAction',));
                }

                // autre_export
                if ($pathinfo === '/fiche/autre/export') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::exportAction',  '_route' => 'autre_export',);
                }

                // autre_new_fichier
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::addFichierAction',));
                }

                // autre_new_avenant
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::addAvenantAction',));
                }

                // autre_new_alert
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::addAlertAction',));
                }

                // autre_edit
                if (0 === strpos($pathinfo, '/fiche/autre/edit') && preg_match('#^/fiche/autre/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::editAction',));
                }

                // autre_update
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_autre_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::updateAction',));
                }
                not_autre_update:

                // autre_delete
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::deleteAction',));
                }

                // autre_action
                if (preg_match('#^/fiche/autre/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::createActionAction',));
                }

            }

            if (0 === strpos($pathinfo, '/fiche/fichier')) {
                // fichier
                if (rtrim($pathinfo, '/') === '/fiche/fichier') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fichier');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::indexAction',  '_route' => 'fichier',);
                }

                // fichier_show
                if (preg_match('#^/fiche/fichier/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichier_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::showAction',));
                }

                // fichier_new
                if ($pathinfo === '/fiche/fichier/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::newAction',  '_route' => 'fichier_new',);
                }

                // fichier_create
                if ($pathinfo === '/fiche/fichier/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fichier_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::createAction',  '_route' => 'fichier_create',);
                }
                not_fichier_create:

                // fichier_edit
                if (preg_match('#^/fiche/fichier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichier_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::editAction',));
                }

                // fichier_update
                if (preg_match('#^/fiche/fichier/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_fichier_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichier_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::updateAction',));
                }
                not_fichier_update:

                // fichier_delete
                if (preg_match('#^/fiche/fichier/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_fichier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichier_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FichierController::deleteAction',));
                }
                not_fichier_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/avenant')) {
                // avenant
                if (rtrim($pathinfo, '/') === '/fiche/avenant') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'avenant');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::indexAction',  '_route' => 'avenant',);
                }

                // avenant_show
                if (preg_match('#^/fiche/avenant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::showAction',));
                }

                // avenant_pdf
                if (preg_match('#^/fiche/avenant/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_avenant_pdf;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::pdfAction',));
                }
                not_avenant_pdf:

                // avenant_new
                if ($pathinfo === '/fiche/avenant/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::newAction',  '_route' => 'avenant_new',);
                }

                // avenant_create
                if ($pathinfo === '/fiche/avenant/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_avenant_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::createAction',  '_route' => 'avenant_create',);
                }
                not_avenant_create:

                // avenant_edit
                if (0 === strpos($pathinfo, '/fiche/avenant/edit') && preg_match('#^/fiche/avenant/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::editAction',));
                }

                // avenant_update
                if (preg_match('#^/fiche/avenant/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_avenant_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::updateAction',));
                }
                not_avenant_update:

                // avenant_delete
                if (preg_match('#^/fiche/avenant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_avenant_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::deleteAction',));
                }
                not_avenant_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/template')) {
                // template
                if (rtrim($pathinfo, '/') === '/fiche/template') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'template');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::indexAction',  '_route' => 'template',);
                }

                // template_show
                if (preg_match('#^/fiche/template/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::showAction',));
                }

                // template_new
                if ($pathinfo === '/fiche/template/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::newAction',  '_route' => 'template_new',);
                }

                // template_create
                if ($pathinfo === '/fiche/template/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_template_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::createAction',  '_route' => 'template_create',);
                }
                not_template_create:

                // template_edit
                if (preg_match('#^/fiche/template/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::editAction',));
                }

                // template_update
                if (preg_match('#^/fiche/template/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_template_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::updateAction',));
                }
                not_template_update:

                // template_delete
                if (preg_match('#^/fiche/template/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_template_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::deleteAction',));
                }
                not_template_delete:

                // template_pscati
                if (preg_match('#^/fiche/template/(?P<id>[^/]++)/pscati$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_pscati')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\TemplateController::pscatiAction',));
                }

            }

            if (0 === strpos($pathinfo, '/fiche/alerte')) {
                // alerte
                if (rtrim($pathinfo, '/') === '/fiche/alerte') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'alerte');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::indexAction',  '_route' => 'alerte',);
                }

                // alerte_show
                if (preg_match('#^/fiche/alerte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::showAction',));
                }

                // alerte_new
                if ($pathinfo === '/fiche/alerte/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::newAction',  '_route' => 'alerte_new',);
                }

                // alerte_create
                if ($pathinfo === '/fiche/alerte/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_alerte_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::createAction',  '_route' => 'alerte_create',);
                }
                not_alerte_create:

                // alerte_edit
                if (0 === strpos($pathinfo, '/fiche/alerte/edit') && preg_match('#^/fiche/alerte/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::editAction',));
                }

                // alerte_update
                if (preg_match('#^/fiche/alerte/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_alerte_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::updateAction',));
                }
                not_alerte_update:

                // alerte_delete
                if (preg_match('#^/fiche/alerte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_alerte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'alerte_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AlerteController::deleteAction',));
                }
                not_alerte_delete:

            }

            if (0 === strpos($pathinfo, '/fiche/p')) {
                if (0 === strpos($pathinfo, '/fiche/pscati')) {
                    // pscati
                    if (rtrim($pathinfo, '/') === '/fiche/pscati') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'pscati');
                        }

                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::indexAction',  '_route' => 'pscati',);
                    }

                    // pscati_show
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::showAction',));
                    }

                    // pscati_new_alert
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::addAlertAction',));
                    }

                    // pscati_new
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::newAction',));
                    }

                    // pscati_create
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pscati_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::createAction',));
                    }
                    not_pscati_create:

                    // pscati_edit
                    if (0 === strpos($pathinfo, '/fiche/pscati/edit') && preg_match('#^/fiche/pscati/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::editAction',));
                    }

                    // pscati_update
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_pscati_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::updateAction',));
                    }
                    not_pscati_update:

                    // pscati_delete
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_pscati_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::deleteAction',));
                    }
                    not_pscati_delete:

                    // pscati_action
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::createActionAction',));
                    }

                    // pscati_word
                    if (preg_match('#^/fiche/pscati/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::wordAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/fiche/pife')) {
                    if (0 === strpos($pathinfo, '/fiche/pifelaboratoire')) {
                        // pifelaboratoire
                        if (rtrim($pathinfo, '/') === '/fiche/pifelaboratoire') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'pifelaboratoire');
                            }

                            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::indexAction',  '_route' => 'pifelaboratoire',);
                        }

                        // pifelaboratoire_show
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::showAction',));
                        }

                        // pifelaboratoire_new_fichier
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::addFichierAction',));
                        }

                        // pifelaboratoire_new_avenant
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::addAvenantAction',));
                        }

                        // pifelaboratoire_new_alert
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::addAlertAction',));
                        }

                        // pifelaboratoire_new
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::newAction',));
                        }

                        // pifelaboratoire_create
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_pifelaboratoire_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::createAction',));
                        }
                        not_pifelaboratoire_create:

                        // pifelaboratoire_edit
                        if (0 === strpos($pathinfo, '/fiche/pifelaboratoire/edit') && preg_match('#^/fiche/pifelaboratoire/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::editAction',));
                        }

                        // pifelaboratoire_update
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_pifelaboratoire_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::updateAction',));
                        }
                        not_pifelaboratoire_update:

                        // pifelaboratoire_delete
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_pifelaboratoire_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::deleteAction',));
                        }
                        not_pifelaboratoire_delete:

                        // pifelaboratoire_action
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::createActionAction',));
                        }

                        // pifelaboratoire_word
                        if (preg_match('#^/fiche/pifelaboratoire/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::wordAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/fiche/pifeclassique')) {
                        // pifeclassique
                        if (rtrim($pathinfo, '/') === '/fiche/pifeclassique') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'pifeclassique');
                            }

                            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::indexAction',  '_route' => 'pifeclassique',);
                        }

                        // pifeclassique_show
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::showAction',));
                        }

                        // pifeclassique_word
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::wordAction',));
                        }

                        // pifeclassique_new_fichier
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::addFichierAction',));
                        }

                        // pifeclassique_new_alert
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::addAlertAction',));
                        }

                        // pifeclassique_new_avenant
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::addAvenantAction',));
                        }

                        // pifeclassique_new
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::newAction',));
                        }

                        // pifeclassique_create
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_pifeclassique_create;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::createAction',));
                        }
                        not_pifeclassique_create:

                        // pifeclassique_edit
                        if (0 === strpos($pathinfo, '/fiche/pifeclassique/edit') && preg_match('#^/fiche/pifeclassique/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::editAction',));
                        }

                        // pifeclassique_update
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_pifeclassique_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::updateAction',));
                        }
                        not_pifeclassique_update:

                        // pifeclassique_delete
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_pifeclassique_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::deleteAction',));
                        }
                        not_pifeclassique_delete:

                        // pifeclassique_action
                        if (preg_match('#^/fiche/pifeclassique/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::createActionAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/fiche/mad')) {
                if (0 === strpos($pathinfo, '/fiche/madsalles')) {
                    // madsalles
                    if (rtrim($pathinfo, '/') === '/fiche/madsalles') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'madsalles');
                        }

                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::indexAction',  '_route' => 'madsalles',);
                    }

                    // madsalles_show
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::showAction',));
                    }

                    // madsalles_new_fichier
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addFichierAction',));
                    }

                    // madsalles_new_avenant
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addAvenantAction',));
                    }

                    // madsalles_new_alert
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addAlertAction',));
                    }

                    // madsalles_new
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::newAction',));
                    }

                    // madsalles_edit
                    if (0 === strpos($pathinfo, '/fiche/madsalles/edit') && preg_match('#^/fiche/madsalles/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::editAction',));
                    }

                    // madsalles_update
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_madsalles_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::updateAction',));
                    }
                    not_madsalles_update:

                    // madsalles_delete
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_madsalles_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::deleteAction',));
                    }
                    not_madsalles_delete:

                    // madsalles_action
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::createActionAction',));
                    }

                    // madsalles_word
                    if (preg_match('#^/fiche/madsalles/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::wordAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/fiche/madevenementgratuit')) {
                    // madevenementgratuit
                    if (rtrim($pathinfo, '/') === '/fiche/madevenementgratuit') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'madevenementgratuit');
                        }

                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::indexAction',  '_route' => 'madevenementgratuit',);
                    }

                    // madevenementgratuit_show
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::showAction',));
                    }

                    // madevenementgratuit_new_fichier
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addFichierAction',));
                    }

                    // madevenementgratuit_new_avenant
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addAvenantAction',));
                    }

                    // madevenementgratuit_new_alert
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addAlertAction',));
                    }

                    // madevenementgratuit_new
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::newAction',));
                    }

                    // madevenementgratuit_create
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_madevenementgratuit_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::createAction',));
                    }
                    not_madevenementgratuit_create:

                    // madevenementgratuit_edit
                    if (0 === strpos($pathinfo, '/fiche/madevenementgratuit/edit') && preg_match('#^/fiche/madevenementgratuit/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::editAction',));
                    }

                    // madevenementgratuit_update
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_madevenementgratuit_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::updateAction',));
                    }
                    not_madevenementgratuit_update:

                    // madevenementgratuit_delete
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_madevenementgratuit_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::deleteAction',));
                    }
                    not_madevenementgratuit_delete:

                    // madevenementgratuit_action
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::createActionAction',));
                    }

                    // madevenementgratuit_word
                    if (preg_match('#^/fiche/madevenementgratuit/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::wordAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/fiche/export')) {
                // export
                if (rtrim($pathinfo, '/') === '/fiche/export') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'export');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ExportController::indexAction',  '_route' => 'export',);
                }

                // export_chooseColumns
                if (preg_match('#^/fiche/export/(?P<parentId>[^/]++)/(?P<id>[^/]++)/exportStep3$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_export_chooseColumns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'export_chooseColumns')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ExportController::chooseColumnToExportAction',));
                }
                not_export_chooseColumns:

                if (0 === strpos($pathinfo, '/fiche/export/export')) {
                    // export_all
                    if ($pathinfo === '/fiche/export/exportAll') {
                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ExportController::exportAllAction',  '_route' => 'export_all',);
                    }

                    // export_choices
                    if ($pathinfo === '/fiche/export/exportChoices') {
                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ExportController::exportChoicesAction',  '_route' => 'export_choices',);
                    }

                }

                // export_chooseSubType
                if (preg_match('#^/fiche/export/(?P<id>[^/]++)/exportStep2$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_export_chooseSubType;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'export_chooseSubType')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ExportController::chooseSubTypeAction',));
                }
                not_export_chooseSubType:

            }

            if (0 === strpos($pathinfo, '/fiche/chartepartenariat')) {
                // chartepartenariat
                if (rtrim($pathinfo, '/') === '/fiche/chartepartenariat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chartepartenariat');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::indexAction',  '_route' => 'chartepartenariat',);
                }

                // chartepartenariat_show
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::showAction',));
                }

                // chartepartenariat_export
                if ($pathinfo === '/fiche/chartepartenariat/export') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::exportAction',  '_route' => 'chartepartenariat_export',);
                }

                // chartepartenariat_new
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::newAction',));
                }

                // chartepartenariat_new_fichier
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::addFichierAction',));
                }

                // chartepartenariat_new_avenant
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::addAvenantAction',));
                }

                // chartepartenariat_new_alert
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/new_alert$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new_alert')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::addAlertAction',));
                }

                // chartepartenariat_create
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chartepartenariat_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::createAction',));
                }
                not_chartepartenariat_create:

                // chartepartenariat_edit
                if (0 === strpos($pathinfo, '/fiche/chartepartenariat/edit') && preg_match('#^/fiche/chartepartenariat/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::editAction',));
                }

                // chartepartenariat_update
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chartepartenariat_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::updateAction',));
                }
                not_chartepartenariat_update:

                // chartepartenariat_delete
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chartepartenariat_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::deleteAction',));
                }
                not_chartepartenariat_delete:

                // chartepartenariat_action
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/new_action$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_action')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::createActionAction',));
                }

                // chartepartenariat_word
                if (preg_match('#^/fiche/chartepartenariat/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_word')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::wordAction',));
                }

            }

            // fiche
            if (rtrim($pathinfo, '/') === '/fiche') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fiche');
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::indexAction',  '_route' => 'fiche',);
            }

            // fiche_show
            if (preg_match('#^/fiche/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::showAction',));
            }

            // fiche_pdf
            if ($pathinfo === '/fiche/pdf') {
                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::pdfAction',  '_route' => 'fiche_pdf',);
            }

            if (0 === strpos($pathinfo, '/fiche/export')) {
                // fiche_export
                if ($pathinfo === '/fiche/export') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::exportAction',  '_route' => 'fiche_export',);
                }

                // fiche_export_all
                if ($pathinfo === '/fiche/exportAll') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::exportAllAction',  '_route' => 'fiche_export_all',);
                }

            }

            // fiche_download
            if (0 === strpos($pathinfo, '/fiche/download') && preg_match('#^/fiche/download/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_download')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::downloadAction',));
            }

            // fiche_new
            if ($pathinfo === '/fiche/new') {
                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::newAction',  '_route' => 'fiche_new',);
            }

            // fiche_create
            if ($pathinfo === '/fiche/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fiche_create;
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::createAction',  '_route' => 'fiche_create',);
            }
            not_fiche_create:

            // fiche_edit
            if (preg_match('#^/fiche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::editAction',));
            }

            // fiche_update
            if (preg_match('#^/fiche/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_fiche_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::updateAction',));
            }
            not_fiche_update:

            // fiche_delete
            if (preg_match('#^/fiche/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_fiche_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::deleteAction',));
            }
            not_fiche_delete:

            // fiche_choosesubype
            if (preg_match('#^/fiche/(?P<id>[^/]++)/choose$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_choosesubype')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheController::chooseSubTypeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/demande')) {
            if (0 === strpos($pathinfo, '/demande/fichemessage')) {
                // fichemessage
                if (rtrim($pathinfo, '/') === '/demande/fichemessage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fichemessage');
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::indexAction',  '_route' => 'fichemessage',);
                }

                // fichemessage_show
                if (preg_match('#^/demande/fichemessage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichemessage_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::showAction',));
                }

                // fichemessage_new
                if ($pathinfo === '/demande/fichemessage/new') {
                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::newAction',  '_route' => 'fichemessage_new',);
                }

                // fichemessage_create
                if ($pathinfo === '/demande/fichemessage/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fichemessage_create;
                    }

                    return array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::createAction',  '_route' => 'fichemessage_create',);
                }
                not_fichemessage_create:

                // fichemessage_edit
                if (preg_match('#^/demande/fichemessage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichemessage_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::editAction',));
                }

                // fichemessage_update
                if (preg_match('#^/demande/fichemessage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_fichemessage_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichemessage_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::updateAction',));
                }
                not_fichemessage_update:

                // fichemessage_delete
                if (preg_match('#^/demande/fichemessage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_fichemessage_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fichemessage_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\FicheMessageController::deleteAction',));
                }
                not_fichemessage_delete:

            }

            if (0 === strpos($pathinfo, '/demande/a')) {
                if (0 === strpos($pathinfo, '/demande/autre')) {
                    // autre_download
                    if (0 === strpos($pathinfo, '/demande/autre/download') && preg_match('#^/demande/autre/download/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_download')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::downloadAction',));
                    }

                    // autre_new_fichierrequest
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::addFichierToRequestAction',));
                    }

                    // autre_new_avenantrequest
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::addAvenantToRequestAction',));
                    }

                    // autre_create
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_autre_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::createAction',));
                    }
                    not_autre_create:

                    // autre_showrequest
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::showrequestAction',));
                    }

                    // autre_request
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::requestAction',));
                    }

                    // autre_createrequest
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_autre_createrequest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::createRequestAction',));
                    }
                    not_autre_createrequest:

                    // autre_sendfichemessage
                    if (preg_match('#^/demande/autre/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'autre_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AutreController::sendFicheMessageAction',));
                    }

                }

                // avenant_showrequest
                if (0 === strpos($pathinfo, '/demande/avenant') && preg_match('#^/demande/avenant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'avenant_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\AvenantController::showrequestAction',));
                }

            }

            if (0 === strpos($pathinfo, '/demande/p')) {
                if (0 === strpos($pathinfo, '/demande/pscati')) {
                    // pscati_export
                    if ($pathinfo === '/demande/pscati/export') {
                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::exportAction',  '_route' => 'pscati_export',);
                    }

                    // pscati_pdf
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::pdfAction',));
                    }

                    // pscati_new_fichier
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/new_fichier$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new_fichier')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::addFichierAction',));
                    }

                    // pscati_new_avenant
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/new_avenant$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new_avenant')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::addAvenantAction',));
                    }

                    // pscati_new_fichierrequest
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::addFichierToRequestAction',));
                    }

                    // pscati_new_avenantrequest
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::addAvenantToRequestAction',));
                    }

                    // pscati_request
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::requestAction',));
                    }

                    // pscati_showrequest
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::showrequestAction',));
                    }

                    // pscati_createrequest
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pscati_createrequest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::createRequestAction',));
                    }
                    not_pscati_createrequest:

                    // pscati_sendfichemessage
                    if (preg_match('#^/demande/pscati/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pscati_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PSCatiController::sendFicheMessageAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/demande/pife')) {
                    if (0 === strpos($pathinfo, '/demande/pifelaboratoire')) {
                        // pifelaboratoire_export
                        if ($pathinfo === '/demande/pifelaboratoire/export') {
                            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::exportAction',  '_route' => 'pifelaboratoire_export',);
                        }

                        // pifelaboratoire_pdf
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::pdfAction',));
                        }

                        // pifelaboratoire_new_fichierrequest
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::addFichierToRequestAction',));
                        }

                        // pifelaboratoire_new_avenantrequest
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::addAvenantToRequestAction',));
                        }

                        // pifelaboratoire_request
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::requestAction',));
                        }

                        // pifelaboratoire_showrequest
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::showrequestAction',));
                        }

                        // pifelaboratoire_createrequest
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_pifelaboratoire_createrequest;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::createRequestAction',));
                        }
                        not_pifelaboratoire_createrequest:

                        // pifelaboratoire_sendfichemessage
                        if (preg_match('#^/demande/pifelaboratoire/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifelaboratoire_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFELaboratoireController::sendFicheMessageAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/demande/pifeclassique')) {
                        // pifeclassique_export
                        if ($pathinfo === '/demande/pifeclassique/export') {
                            return array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::exportAction',  '_route' => 'pifeclassique_export',);
                        }

                        // pifeclassique_pdf
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::pdfAction',));
                        }

                        // pifeclassique_new_fichierrequest
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::addFichierToRequestAction',));
                        }

                        // pifeclassique_new_avenantrequest
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::addAvenantToRequestAction',));
                        }

                        // pifeclassique_request
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::requestAction',));
                        }

                        // pifeclassique_showrequest
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::showrequestAction',));
                        }

                        // pifeclassique_createrequest
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_pifeclassique_createrequest;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::createRequestAction',));
                        }
                        not_pifeclassique_createrequest:

                        // pifeclassique_sendfichemessage
                        if (preg_match('#^/demande/pifeclassique/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pifeclassique_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\PIFEClassiqueController::sendFicheMessageAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/demande/mad')) {
                if (0 === strpos($pathinfo, '/demande/madsalles')) {
                    // madsalles_export
                    if ($pathinfo === '/demande/madsalles/export') {
                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::exportAction',  '_route' => 'madsalles_export',);
                    }

                    // madsalles_pdf
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::pdfAction',));
                    }

                    // madsalles_new_fichierrequest
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addFichierToRequestAction',));
                    }

                    // madsalles_new_avenantrequest
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addAvenantToRequestAction',));
                    }

                    // madsalles_request
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::requestAction',));
                    }

                    // madsalles_create
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_madsalles_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_create')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::createAction',));
                    }
                    not_madsalles_create:

                    // madsalles_showrequest
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::showrequestAction',));
                    }

                    // madsalles_createrequest
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_madsalles_createrequest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::createRequestAction',));
                    }
                    not_madsalles_createrequest:

                    // madsalles_sendfichemessage
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::sendFicheMessageAction',));
                    }

                    // madsalles_add_local
                    if (preg_match('#^/demande/madsalles/(?P<id>[^/]++)/addLocal$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not_madsalles_add_local;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madsalles_add_local')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADSallesController::addLocalAction',));
                    }
                    not_madsalles_add_local:

                }

                if (0 === strpos($pathinfo, '/demande/madevenementgratuit')) {
                    // madevenementgratuit_export
                    if ($pathinfo === '/demande/madevenementgratuit/export') {
                        return array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::exportAction',  '_route' => 'madevenementgratuit_export',);
                    }

                    // madevenementgratuit_pdf
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::pdfAction',));
                    }

                    // madevenementgratuit_new_fichierrequest
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addFichierToRequestAction',));
                    }

                    // madevenementgratuit_new_avenantrequest
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addAvenantToRequestAction',));
                    }

                    // madevenementgratuit_request
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::requestAction',));
                    }

                    // madevenementgratuit_showrequest
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::showRequestAction',));
                    }

                    // madevenementgratuit_createrequest
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_madevenementgratuit_createrequest;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::createRequestAction',));
                    }
                    not_madevenementgratuit_createrequest:

                    // madevenementgratuit_sendfichemessage
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::sendFicheMessageAction',));
                    }

                    // madevenementgratuit_add_local
                    if (preg_match('#^/demande/madevenementgratuit/(?P<id>[^/]++)/addLocal$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('POST', 'GET', 'HEAD'));
                            goto not_madevenementgratuit_add_local;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'madevenementgratuit_add_local')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\MADEvenementGratuitController::addLocalAction',));
                    }
                    not_madevenementgratuit_add_local:

                }

            }

            if (0 === strpos($pathinfo, '/demande/chartepartenariat')) {
                // chartepartenariat_download
                if (0 === strpos($pathinfo, '/demande/chartepartenariat/download') && preg_match('#^/demande/chartepartenariat/download/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_download')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::downloadAction',));
                }

                // chartepartenariat_pdf
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/pdf$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_pdf')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::pdfAction',));
                }

                // chartepartenariat_request
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/demande$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_request')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::requestAction',));
                }

                // chartepartenariat_new_fichierrequest
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/new_fichierrequest$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new_fichierrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::addFichierToRequestAction',));
                }

                // chartepartenariat_new_avenantrequest
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/new_avenantrequest$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_new_avenantrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::addAvenantToRequestAction',));
                }

                // chartepartenariat_showrequest
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/showrequest$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_showrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::showrequestAction',));
                }

                // chartepartenariat_createrequest
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/createrequest$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chartepartenariat_createrequest;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_createrequest')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::createRequestAction',));
                }
                not_chartepartenariat_createrequest:

                // chartepartenariat_sendfichemessage
                if (preg_match('#^/demande/chartepartenariat/(?P<id>[^/]++)/new_message$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chartepartenariat_sendfichemessage')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\ChartePartenariatController::sendFicheMessageAction',));
                }

            }

            // demande
            if (rtrim($pathinfo, '/') === '/demande') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'demande');
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::indexAction',  '_route' => 'demande',);
            }

            // demande_show
            if (preg_match('#^/demande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_show')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::showAction',));
            }

            // demande_new
            if ($pathinfo === '/demande/new') {
                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::newAction',  '_route' => 'demande_new',);
            }

            // demande_create
            if ($pathinfo === '/demande/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_demande_create;
                }

                return array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::createAction',  '_route' => 'demande_create',);
            }
            not_demande_create:

            // demande_edit
            if (preg_match('#^/demande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_edit')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::editAction',));
            }

            // demande_update
            if (preg_match('#^/demande/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_demande_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_update')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::updateAction',));
            }
            not_demande_update:

            // demande_delete
            if (preg_match('#^/demande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_demande_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_delete')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::deleteAction',));
            }
            not_demande_delete:

            // demande_choosesubype
            if (preg_match('#^/demande/(?P<id>[^/]++)/choose$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'demande_choosesubype')), array (  '_controller' => 'PC\\FicheBundle\\Controller\\DemandeController::chooseSubTypeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'PC\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'PC\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'PC\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'PC\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // genemu_upload
        if ($pathinfo === '/genemu_upload') {
            return array (  '_controller' => 'Genemu\\Bundle\\FormBundle\\Controller\\UploadController::uploadAction',  '_route' => 'genemu_upload',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'PCUserBundle:User:index',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'PCUserBundle:User:show',));
            }

            // user_new
            if ($pathinfo === '/user/new') {
                return array (  '_controller' => 'PCUserBundle:User:new',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'PCUserBundle:User:create',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'PCUserBundle:User:edit',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'PCUserBundle:User:update',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'PCUserBundle:User:delete',));
            }
            not_user_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
                // admin_pc_user_user_list
                if ($pathinfo === '/admin/utilisateurs/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_list',  '_route' => 'admin_pc_user_user_list',);
                }

                // admin_pc_user_user_create
                if ($pathinfo === '/admin/utilisateurs/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_create',  '_route' => 'admin_pc_user_user_create',);
                }

                // admin_pc_user_user_batch
                if ($pathinfo === '/admin/utilisateurs/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_batch',  '_route' => 'admin_pc_user_user_batch',);
                }

                // admin_pc_user_user_edit
                if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_edit',));
                }

                // admin_pc_user_user_delete
                if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_delete',));
                }

                // admin_pc_user_user_show
                if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_show',));
                }

                // admin_pc_user_user_export
                if ($pathinfo === '/admin/utilisateurs/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_pc_user_user_export',  '_route' => 'admin_pc_user_user_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/pc/user/group')) {
                // admin_pc_user_group_list
                if ($pathinfo === '/admin/pc/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_list',  '_route' => 'admin_pc_user_group_list',);
                }

                // admin_pc_user_group_create
                if ($pathinfo === '/admin/pc/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_create',  '_route' => 'admin_pc_user_group_create',);
                }

                // admin_pc_user_group_batch
                if ($pathinfo === '/admin/pc/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_batch',  '_route' => 'admin_pc_user_group_batch',);
                }

                // admin_pc_user_group_edit
                if (preg_match('#^/admin/pc/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_edit',));
                }

                // admin_pc_user_group_delete
                if (preg_match('#^/admin/pc/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_delete',));
                }

                // admin_pc_user_group_show
                if (preg_match('#^/admin/pc/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pc_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_show',));
                }

                // admin_pc_user_group_export
                if ($pathinfo === '/admin/pc/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_pc_user_group_export',  '_route' => 'admin_pc_user_group_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        // sonata_user_impersonating
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sonata_user_impersonating');
            }

            return array (  '_controller' => 'SonataPageBundle:Page:catchAll',  '_route' => 'sonata_user_impersonating',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
