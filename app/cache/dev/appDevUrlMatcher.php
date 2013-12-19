<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        if (0 === strpos($pathinfo, '/administrateur')) {
            // administrateur
            if (rtrim($pathinfo, '/') === '/administrateur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_administrateur;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'administrateur');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::indexAction',  '_route' => 'administrateur',);
            }
            not_administrateur:

            // administrateur_create
            if ($pathinfo === '/administrateur/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_administrateur_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::createAction',  '_route' => 'administrateur_create',);
            }
            not_administrateur_create:

            // administrateur_new
            if ($pathinfo === '/administrateur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_administrateur_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::newAction',  '_route' => 'administrateur_new',);
            }
            not_administrateur_new:

            // administrateur_show
            if (preg_match('#^/administrateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_administrateur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateur_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::showAction',));
            }
            not_administrateur_show:

            // administrateur_edit
            if (preg_match('#^/administrateur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_administrateur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateur_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::editAction',));
            }
            not_administrateur_edit:

            // administrateur_update
            if (preg_match('#^/administrateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_administrateur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateur_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::updateAction',));
            }
            not_administrateur_update:

            // administrateur_delete
            if (preg_match('#^/administrateur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_administrateur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'administrateur_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\ADMINISTRATEURController::deleteAction',));
            }
            not_administrateur_delete:

        }

        // ensat_graduate_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ensat_graduate_default_index')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/evenement')) {
            // evenement
            if (rtrim($pathinfo, '/') === '/evenement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evenement;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evenement');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::indexAction',  '_route' => 'evenement',);
            }
            not_evenement:

            // evenement_create
            if ($pathinfo === '/evenement/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_evenement_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::createAction',  '_route' => 'evenement_create',);
            }
            not_evenement_create:

            // evenement_new
            if ($pathinfo === '/evenement/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evenement_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::newAction',  '_route' => 'evenement_new',);
            }
            not_evenement_new:

            // evenement_show
            if (preg_match('#^/evenement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evenement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::showAction',));
            }
            not_evenement_show:

            // evenement_edit
            if (preg_match('#^/evenement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_evenement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::editAction',));
            }
            not_evenement_edit:

            // evenement_update
            if (preg_match('#^/evenement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_evenement_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::updateAction',));
            }
            not_evenement_update:

            // evenement_delete
            if (preg_match('#^/evenement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_evenement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\EVENEMENTController::deleteAction',));
            }
            not_evenement_delete:

        }

        if (0 === strpos($pathinfo, '/filiere')) {
            // filiere
            if (rtrim($pathinfo, '/') === '/filiere') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_filiere;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'filiere');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::indexAction',  '_route' => 'filiere',);
            }
            not_filiere:

            // filiere_create
            if ($pathinfo === '/filiere/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filiere_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::createAction',  '_route' => 'filiere_create',);
            }
            not_filiere_create:

            // filiere_new
            if ($pathinfo === '/filiere/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_filiere_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::newAction',  '_route' => 'filiere_new',);
            }
            not_filiere_new:

            // filiere_show
            if (preg_match('#^/filiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_filiere_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::showAction',));
            }
            not_filiere_show:

            // filiere_edit
            if (preg_match('#^/filiere/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_filiere_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::editAction',));
            }
            not_filiere_edit:

            // filiere_update
            if (preg_match('#^/filiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_filiere_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::updateAction',));
            }
            not_filiere_update:

            // filiere_delete
            if (preg_match('#^/filiere/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_filiere_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiere_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\FILIEREController::deleteAction',));
            }
            not_filiere_delete:

        }

        if (0 === strpos($pathinfo, '/laureat')) {
            // laureat
            if (rtrim($pathinfo, '/') === '/laureat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laureat;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'laureat');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::indexAction',  '_route' => 'laureat',);
            }
            not_laureat:

            // laureat_create
            if ($pathinfo === '/laureat/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_laureat_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::createAction',  '_route' => 'laureat_create',);
            }
            not_laureat_create:

            // laureat_new
            if ($pathinfo === '/laureat/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laureat_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::newAction',  '_route' => 'laureat_new',);
            }
            not_laureat_new:

            // laureat_show
            if (preg_match('#^/laureat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laureat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laureat_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::showAction',));
            }
            not_laureat_show:

            // laureat_edit
            if (preg_match('#^/laureat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_laureat_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laureat_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::editAction',));
            }
            not_laureat_edit:

            // laureat_update
            if (preg_match('#^/laureat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_laureat_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laureat_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::updateAction',));
            }
            not_laureat_update:

            // laureat_delete
            if (preg_match('#^/laureat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_laureat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'laureat_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\LAUREATController::deleteAction',));
            }
            not_laureat_delete:

        }

        if (0 === strpos($pathinfo, '/poste')) {
            // poste
            if (rtrim($pathinfo, '/') === '/poste') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_poste;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'poste');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::indexAction',  '_route' => 'poste',);
            }
            not_poste:

            // poste_create
            if ($pathinfo === '/poste/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_poste_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::createAction',  '_route' => 'poste_create',);
            }
            not_poste_create:

            // poste_new
            if ($pathinfo === '/poste/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_poste_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::newAction',  '_route' => 'poste_new',);
            }
            not_poste_new:

            // poste_show
            if (preg_match('#^/poste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_poste_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'poste_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::showAction',));
            }
            not_poste_show:

            // poste_edit
            if (preg_match('#^/poste/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_poste_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'poste_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::editAction',));
            }
            not_poste_edit:

            // poste_update
            if (preg_match('#^/poste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_poste_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'poste_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::updateAction',));
            }
            not_poste_update:

            // poste_delete
            if (preg_match('#^/poste/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_poste_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'poste_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\POSTEController::deleteAction',));
            }
            not_poste_delete:

        }

        if (0 === strpos($pathinfo, '/reseausocial')) {
            // reseausocial
            if (rtrim($pathinfo, '/') === '/reseausocial') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reseausocial;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reseausocial');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::indexAction',  '_route' => 'reseausocial',);
            }
            not_reseausocial:

            // reseausocial_create
            if ($pathinfo === '/reseausocial/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reseausocial_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::createAction',  '_route' => 'reseausocial_create',);
            }
            not_reseausocial_create:

            // reseausocial_new
            if ($pathinfo === '/reseausocial/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reseausocial_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::newAction',  '_route' => 'reseausocial_new',);
            }
            not_reseausocial_new:

            // reseausocial_show
            if (preg_match('#^/reseausocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reseausocial_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reseausocial_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::showAction',));
            }
            not_reseausocial_show:

            // reseausocial_edit
            if (preg_match('#^/reseausocial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reseausocial_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reseausocial_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::editAction',));
            }
            not_reseausocial_edit:

            // reseausocial_update
            if (preg_match('#^/reseausocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_reseausocial_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reseausocial_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::updateAction',));
            }
            not_reseausocial_update:

            // reseausocial_delete
            if (preg_match('#^/reseausocial/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reseausocial_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reseausocial_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\RESEAUSOCIALController::deleteAction',));
            }
            not_reseausocial_delete:

        }

        if (0 === strpos($pathinfo, '/secteur')) {
            // secteur
            if (rtrim($pathinfo, '/') === '/secteur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secteur;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'secteur');
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::indexAction',  '_route' => 'secteur',);
            }
            not_secteur:

            // secteur_create
            if ($pathinfo === '/secteur/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_secteur_create;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::createAction',  '_route' => 'secteur_create',);
            }
            not_secteur_create:

            // secteur_new
            if ($pathinfo === '/secteur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secteur_new;
                }

                return array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::newAction',  '_route' => 'secteur_new',);
            }
            not_secteur_new:

            // secteur_show
            if (preg_match('#^/secteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secteur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_show')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::showAction',));
            }
            not_secteur_show:

            // secteur_edit
            if (preg_match('#^/secteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_secteur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_edit')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::editAction',));
            }
            not_secteur_edit:

            // secteur_update
            if (preg_match('#^/secteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_secteur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_update')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::updateAction',));
            }
            not_secteur_update:

            // secteur_delete
            if (preg_match('#^/secteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_secteur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_delete')), array (  '_controller' => 'Ensat\\GraduateBundle\\Controller\\SECTEURController::deleteAction',));
            }
            not_secteur_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
