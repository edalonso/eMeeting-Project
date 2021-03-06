<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_db0f246' => true,
       '_assetic_db0f246_0' => true,
       '_assetic_db0f246_1' => true,
       '_assetic_db0f246_2' => true,
       '_assetic_db0f246_3' => true,
       '_assetic_db0f246_4' => true,
       '_assetic_db0f246_5' => true,
       '_assetic_db0f246_6' => true,
       '_assetic_db0f246_7' => true,
       '_assetic_db0f246_8' => true,
       '_assetic_db0f246_9' => true,
       '_assetic_db0f246_10' => true,
       '_assetic_db0f246_11' => true,
       '_assetic_db0f246_12' => true,
       '_assetic_db0f246_13' => true,
       '_assetic_db0f246_14' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'wizard' => true,
       'wizard_metadata' => true,
       'wizard_metadata_submit' => true,
       'wizard_date' => true,
       'wizard_date_submit' => true,
       'wizard_users' => true,
       'wizard_users_submit' => true,
       'wizard_persist' => true,
       'wizard_error' => true,
       'wizard_end' => true,
       'meeting' => true,
       'meeting_show' => true,
       'meeting_new' => true,
       'meeting_create' => true,
       'meeting_edit' => true,
       'meeting_update' => true,
       'meeting_delete' => true,
       'cmar_meeting_middleware_index' => true,
       'index' => true,
       'index_recording' => true,
       'index_public_recording' => true,
       'safe_title_recording' => true,
       'index_immediate' => true,
       'magic_meeting' => true,
       'can_record' => true,
       'change_nickname' => true,
       'update_rank' => true,
       'addusers_meeting' => true,
       'updateviewsalt_meeting' => true,
       'updatesecretsalt_meeting' => true,
       'index_cancel' => true,
       'index_edit' => true,
       'index_update' => true,
       'index_search_meeting' => true,
       'index_historical' => true,
       'index_month' => true,
       'change_password' => true,
       'recording_list' => true,
       'locked_recording' => true,
       'recording_public_list' => true,
       'locked_meeting' => true,
       'user_form' => true,
       'ado_test' => true,
       'user_list' => true,
       'minimized_meeting' => true,
       'admin' => true,
       'admin_bars' => true,
       'indexgroup' => true,
       'indexgroup_recording' => true,
       'indexgroup_immediate' => true,
       'indexgroup_cancel' => true,
       'indexgroup_delete' => true,
       'indexgroup_edit' => true,
       'indexgroup_update' => true,
       'indexgroup_historical' => true,
       'indexgroup_month' => true,
       'recording' => true,
       'recording_show' => true,
       'recording_new' => true,
       'recording_create' => true,
       'recording_edit' => true,
       'recording_update' => true,
       'recording_delete' => true,
       'index_personal' => true,
       'user' => true,
       'user_show' => true,
       'user_new' => true,
       'user_create' => true,
       'user_edit' => true,
       'user_update' => true,
       'user_delete' => true,
       'index_room' => true,
       'index_secretroom' => true,
       'index_secretroom_cas' => true,
       'index_noanonymousroom' => true,
       'index_noanonymoussecretroom' => true,
       'group' => true,
       'group_show' => true,
       'group_new' => true,
       'group_create' => true,
       'group_edit' => true,
       'group_update' => true,
       'group_delete' => true,
       'logout_cas' => true,
       'index_welcome' => true,
       'mail_sent' => true,
       'recover' => true,
       'recover_error' => true,
       'recover_update' => true,
       'login' => true,
       'login_check' => true,
       'logout' => true,
       'noaccess' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_db0f246RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246.js',  ),));
    }

    private function get_assetic_db0f246_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_0-jquery-1.7.1.min_1.js',  ),));
    }

    private function get_assetic_db0f246_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_1-jquery-ui-1.8.18.custom.min_2.js',  ),));
    }

    private function get_assetic_db0f246_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_2-jquery.tipTip_3.js',  ),));
    }

    private function get_assetic_db0f246_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_2-js_4.js',  ),));
    }

    private function get_assetic_db0f246_4RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 4,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_2-tabla_5.js',  ),));
    }

    private function get_assetic_db0f246_5RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 5,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_3-addbox_6.js',  ),));
    }

    private function get_assetic_db0f246_6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 6,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_4-autocomplete_7.js',  ),));
    }

    private function get_assetic_db0f246_7RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 7,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_5-modal_dialog_8.js',  ),));
    }

    private function get_assetic_db0f246_8RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 8,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_6-desplegable_9.js',  ),));
    }

    private function get_assetic_db0f246_9RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 9,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_7-jquery.tokeninput_10.js',  ),));
    }

    private function get_assetic_db0f246_10RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 10,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_8-filter_meeting_11.js',  ),));
    }

    private function get_assetic_db0f246_11RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 11,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_88-bootstrap_12.js',  ),));
    }

    private function get_assetic_db0f246_12RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 12,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_9-jquery.karmicgraphs_13.js',  ),));
    }

    private function get_assetic_db0f246_13RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 13,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_99-anonymous_14.js',  ),));
    }

    private function get_assetic_db0f246_14RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'db0f246',  'pos' => 14,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/js/db0f246_part_1_onTop_15.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getwizardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/',  ),));
    }

    private function getwizard_metadataRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::metadataAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/metadata',  ),));
    }

    private function getwizard_metadata_submitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::metadataSubmitAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/wizard/metadata_submit',  ),));
    }

    private function getwizard_dateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::dateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/date',  ),));
    }

    private function getwizard_date_submitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::dateSubmitAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/wizard/date_submit',  ),));
    }

    private function getwizard_usersRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::usersAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/users',  ),));
    }

    private function getwizard_users_submitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::usersSubmitAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/wizard/users_submit',  ),));
    }

    private function getwizard_persistRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::persistAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/persist',  ),));
    }

    private function getwizard_errorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::errorAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/error',  ),));
    }

    private function getwizard_endRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\WizardController::endAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/wizard/end',  ),));
    }

    private function getmeetingRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/meeting/',  ),));
    }

    private function getmeeting_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/meeting',  ),));
    }

    private function getmeeting_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/meeting/new',  ),));
    }

    private function getmeeting_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/meeting/create',  ),));
    }

    private function getmeeting_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/meeting',  ),));
    }

    private function getmeeting_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/meeting',  ),));
    }

    private function getmeeting_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MeetingController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/meeting',  ),));
    }

    private function getcmar_meeting_middleware_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\MiddlewareController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/middleware',  ),));
    }

    private function getindexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getindex_recordingRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/recording_private',  ),));
    }

    private function getindex_public_recordingRouteInfo()
    {
        return array(array (  0 => 'secretsalt',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingPublicAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'secretsalt',  ),  1 =>   array (    0 => 'text',    1 => '/recording',  ),));
    }

    private function getsafe_title_recordingRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::safeTitleRecordingAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/safe_title_recording',  ),));
    }

    private function getindex_immediateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::immediateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/immediate',  ),));
    }

    private function getmagic_meetingRouteInfo()
    {
        return array(array (  0 => 'magic',  1 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changeToMagic',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'magic',  ),  2 =>   array (    0 => 'text',    1 => '/magic',  ),));
    }

    private function getcan_recordRouteInfo()
    {
        return array(array (  0 => 'canrecord',  1 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changeToRecord',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'canrecord',  ),  2 =>   array (    0 => 'text',    1 => '/canrecord',  ),));
    }

    private function getchange_nicknameRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changenickName',), array (), array (  0 =>   array (    0 => 'text',    1 => '/changenick',  ),));
    }

    private function getupdate_rankRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::updateRank',), array (), array (  0 =>   array (    0 => 'text',    1 => '/updaterank',  ),));
    }

    private function getaddusers_meetingRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::addUsersAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/addusers',  ),));
    }

    private function getupdateviewsalt_meetingRouteInfo()
    {
        return array(array (  0 => 'id',), array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::UpdateSalt',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/updateviewsalt',  ),));
    }

    private function getupdatesecretsalt_meetingRouteInfo()
    {
        return array(array (  0 => 'id',), array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::UpdateSalt',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/updatesecretsalt',  ),));
    }

    private function getindex_cancelRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::cancelAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/cancel',  ),));
    }

    private function getindex_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::editAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/edit',  ),));
    }

    private function getindex_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/update',  ),));
    }

    private function getindex_search_meetingRouteInfo()
    {
        return array(array (  0 => 'meeting_id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingsAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'meeting_id',  ),  1 =>   array (    0 => 'text',    1 => '/recordings',  ),));
    }

    private function getindex_historicalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::historicalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/historical',  ),));
    }

    private function getindex_monthRouteInfo()
    {
        return array(array (  0 => 'string_month',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::historicalAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'string_month',  ),  1 =>   array (    0 => 'text',    1 => '/historical',  ),));
    }

    private function getchange_passwordRouteInfo()
    {
        return array(array (  0 => 'email',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::changePasswordAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'email',  ),  1 =>   array (    0 => 'text',    1 => '/change_password',  ),));
    }

    private function getrecording_listRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingListAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/r_list',  ),));
    }

    private function getlocked_recordingRouteInfo()
    {
        return array(array (  0 => 'locked',  1 => 'secretsalt',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::lockedRecordingAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'secretsalt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'locked',  ),  2 =>   array (    0 => 'text',    1 => '/locked_record',  ),));
    }

    private function getrecording_public_listRouteInfo()
    {
        return array(array (  0 => 'secretsalt',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::recordingPublicListAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'secretsalt',  ),  1 =>   array (    0 => 'text',    1 => '/r_public_list',  ),));
    }

    private function getlocked_meetingRouteInfo()
    {
        return array(array (  0 => 'locked',  1 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::lockedAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'locked',  ),  2 =>   array (    0 => 'text',    1 => '/locked',  ),));
    }

    private function getuser_formRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::userFormAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/u_form',  ),));
    }

    private function getado_testRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::adoTestAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/adobe_test',  ),));
    }

    private function getuser_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/u_list',  ),));
    }

    private function getminimized_meetingRouteInfo()
    {
        return array(array (  0 => 'id_meeting',  1 => 'id_user',  2 => 'minimized',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::minimizedAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'minimized',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id_user',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id_meeting',  ),  3 =>   array (    0 => 'text',    1 => '/minimized',  ),));
    }

    private function getadminRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::adminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getadmin_barsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserController::adminActionBars',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin_bars',  ),));
    }

    private function getindexgroupRouteInfo()
    {
        return array(array (  0 => 'key',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'key',  ),  1 =>   array (    0 => 'text',    1 => '/group',  ),));
    }

    private function getindexgroup_recordingRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::recordingAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/group/recording',  ),));
    }

    private function getindexgroup_immediateRouteInfo()
    {
        return array(array (  0 => 'key',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::immediateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'key',  ),  1 =>   array (    0 => 'text',    1 => '/group/immediate',  ),));
    }

    private function getindexgroup_cancelRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::cancelAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/group/cancel',  ),));
    }

    private function getindexgroup_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::deleteAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/group/delete',  ),));
    }

    private function getindexgroup_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::editAction',), array (  'id' => '\\d+',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '\\d+',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/group/edit',  ),));
    }

    private function getindexgroup_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/group/update',  ),));
    }

    private function getindexgroup_historicalRouteInfo()
    {
        return array(array (  0 => 'key',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::historicalAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'key',  ),  1 =>   array (    0 => 'text',    1 => '/group/historical',  ),));
    }

    private function getindexgroup_monthRouteInfo()
    {
        return array(array (  0 => 'key',  1 => 'string_month',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupController::historicalAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'string_month',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'key',  ),  2 =>   array (    0 => 'text',    1 => '/group/historical',  ),));
    }

    private function getrecordingRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/recording/',  ),));
    }

    private function getrecording_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/recording',  ),));
    }

    private function getrecording_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/recording/new',  ),));
    }

    private function getrecording_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/recording/create',  ),));
    }

    private function getrecording_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/recording',  ),));
    }

    private function getrecording_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/recording',  ),));
    }

    private function getrecording_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RecordingController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/recording',  ),));
    }

    private function getindex_personalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\PersonalController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/personal/',  ),));
    }

    private function getuserRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/useradmin/',  ),));
    }

    private function getuser_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/useradmin',  ),));
    }

    private function getuser_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/useradmin/new',  ),));
    }

    private function getuser_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/useradmin/create',  ),));
    }

    private function getuser_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/useradmin',  ),));
    }

    private function getuser_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/useradmin',  ),));
    }

    private function getuser_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\UserAdminController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/useradmin',  ),));
    }

    private function getindex_roomRouteInfo()
    {
        return array(array (  0 => 'salt',), array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'salt',  ),  1 =>   array (    0 => 'text',    1 => '/room',  ),));
    }

    private function getindex_secretroomRouteInfo()
    {
        return array(array (  0 => 'salt',), array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'salt',  ),  1 =>   array (    0 => 'text',    1 => '/secretroom',  ),));
    }

    private function getindex_secretroom_casRouteInfo()
    {
        return array(array (  0 => 'salt',), array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'salt',  ),  1 =>   array (    0 => 'text',    1 => '/secretroomcas',  ),));
    }

    private function getindex_noanonymousroomRouteInfo()
    {
        return array(array (  0 => 'salt',), array (  'secret' => false,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'salt',  ),  1 =>   array (    0 => 'text',    1 => '/noanonymousroom',  ),));
    }

    private function getindex_noanonymoussecretroomRouteInfo()
    {
        return array(array (  0 => 'salt',), array (  'secret' => true,  '_controller' => 'Cmar\\MeetingBundle\\Controller\\RoomController::roomAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'salt',  ),  1 =>   array (    0 => 'text',    1 => '/noanonymoussecretroom',  ),));
    }

    private function getgroupRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupadmin/',  ),));
    }

    private function getgroup_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupadmin',  ),));
    }

    private function getgroup_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/groupadmin/new',  ),));
    }

    private function getgroup_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/groupadmin/create',  ),));
    }

    private function getgroup_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupadmin',  ),));
    }

    private function getgroup_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupadmin',  ),));
    }

    private function getgroup_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\GroupAdminController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/groupadmin',  ),));
    }

    private function getlogout_casRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getindex_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::welcomeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/welcome',  ),));
    }

    private function getmail_sentRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::mailSentAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/mail/sent',  ),));
    }

    private function getrecoverRouteInfo()
    {
        return array(array (  0 => 'email',  1 => 'hash',), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'hash',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'email',  ),  2 =>   array (    0 => 'text',    1 => '/recover',  ),));
    }

    private function getrecover_errorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverHashErrorAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/recover/error',  ),));
    }

    private function getrecover_updateRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::recoverUpdateAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/recover/update',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Cmar\\MeetingBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getnoaccessRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'CmarMeetingBundle:Security:noaccess.html.twig',), array (), array (  0 =>   array (    0 => 'text',    1 => '/noaccess',  ),));
    }
}
