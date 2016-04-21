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

        if (0 === strpos($pathinfo, '/css/c6f8163')) {
            // _assetic_c6f8163
            if ($pathinfo === '/css/c6f8163.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c6f8163',);
            }

            if (0 === strpos($pathinfo, '/css/c6f8163_')) {
                // _assetic_c6f8163_0
                if ($pathinfo === '/css/c6f8163_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c6f8163_0',);
                }

                // _assetic_c6f8163_1
                if ($pathinfo === '/css/c6f8163_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c6f8163_1',);
                }

                // _assetic_c6f8163_2
                if ($pathinfo === '/css/c6f8163_nanoscroller_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c6f8163_2',);
                }

                // _assetic_c6f8163_3
                if ($pathinfo === '/css/c6f8163_theme_styles_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c6f8163_3',);
                }

                // _assetic_c6f8163_4
                if ($pathinfo === '/css/c6f8163_jquery-jvectormap-1.2.2_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c6f8163_4',);
                }

                // _assetic_c6f8163_5
                if ($pathinfo === '/css/c6f8163_weather-icons_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_c6f8163_5',);
                }

                // _assetic_c6f8163_6
                if ($pathinfo === '/css/c6f8163_morris_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_c6f8163_6',);
                }

                // _assetic_c6f8163_7
                if ($pathinfo === '/css/c6f8163_jquery.nouislider_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_c6f8163_7',);
                }

                // _assetic_c6f8163_8
                if ($pathinfo === '/css/c6f8163_select2_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_c6f8163_8',);
                }

                // _assetic_c6f8163_9
                if ($pathinfo === '/css/c6f8163_datepicker_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_c6f8163_9',);
                }

                // _assetic_c6f8163_10
                if ($pathinfo === '/css/c6f8163_bootstrap-timepicker_11.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_c6f8163_10',);
                }

                // _assetic_c6f8163_11
                if ($pathinfo === '/css/c6f8163_hopscotch_12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6f8163',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_c6f8163_11',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/9705c18')) {
            // _assetic_9705c18
            if ($pathinfo === '/js/9705c18.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9705c18',);
            }

            if (0 === strpos($pathinfo, '/js/9705c18_')) {
                if (0 === strpos($pathinfo, '/js/9705c18_demo-')) {
                    // _assetic_9705c18_0
                    if ($pathinfo === '/js/9705c18_demo-rtl_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9705c18_0',);
                    }

                    // _assetic_9705c18_1
                    if ($pathinfo === '/js/9705c18_demo-skin-changer_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_9705c18_1',);
                    }

                }

                // _assetic_9705c18_2
                if ($pathinfo === '/js/9705c18_jquery_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_9705c18_2',);
                }

                // _assetic_9705c18_3
                if ($pathinfo === '/js/9705c18_bootstrap_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_9705c18_3',);
                }

                // _assetic_9705c18_4
                if ($pathinfo === '/js/9705c18_jquery.nanoscroller.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_9705c18_4',);
                }

                // _assetic_9705c18_5
                if ($pathinfo === '/js/9705c18_moment.min_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_9705c18_5',);
                }

                if (0 === strpos($pathinfo, '/js/9705c18_jquery-jvectormap-')) {
                    // _assetic_9705c18_6
                    if ($pathinfo === '/js/9705c18_jquery-jvectormap-1.2.2.min_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_9705c18_6',);
                    }

                    // _assetic_9705c18_7
                    if ($pathinfo === '/js/9705c18_jquery-jvectormap-world-merc-en_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_9705c18_7',);
                    }

                }

                // _assetic_9705c18_8
                if ($pathinfo === '/js/9705c18_gdp-data_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_9705c18_8',);
                }

                if (0 === strpos($pathinfo, '/js/9705c18_jquery.')) {
                    if (0 === strpos($pathinfo, '/js/9705c18_jquery.flot.')) {
                        // _assetic_9705c18_9
                        if ($pathinfo === '/js/9705c18_jquery.flot.min_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_9705c18_9',);
                        }

                        // _assetic_9705c18_10
                        if ($pathinfo === '/js/9705c18_jquery.flot.resize.min_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_9705c18_10',);
                        }

                        if (0 === strpos($pathinfo, '/js/9705c18_jquery.flot.t')) {
                            // _assetic_9705c18_11
                            if ($pathinfo === '/js/9705c18_jquery.flot.time.min_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_9705c18_11',);
                            }

                            // _assetic_9705c18_12
                            if ($pathinfo === '/js/9705c18_jquery.flot.threshold_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_9705c18_12',);
                            }

                        }

                        // _assetic_9705c18_13
                        if ($pathinfo === '/js/9705c18_jquery.flot.axislabels_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_9705c18_13',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/9705c18_jquery.s')) {
                        // _assetic_9705c18_14
                        if ($pathinfo === '/js/9705c18_jquery.slimscroll.min_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_9705c18_14',);
                        }

                        // _assetic_9705c18_15
                        if ($pathinfo === '/js/9705c18_jquery.sparkline.min_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_9705c18_15',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/9705c18_s')) {
                    // _assetic_9705c18_16
                    if ($pathinfo === '/js/9705c18_skycons_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_9705c18_16',);
                    }

                    // _assetic_9705c18_17
                    if ($pathinfo === '/js/9705c18_scripts_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_9705c18_17',);
                    }

                }

                // _assetic_9705c18_18
                if ($pathinfo === '/js/9705c18_pace.min_19.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_9705c18_18',);
                }

                // _assetic_9705c18_19
                if ($pathinfo === '/js/9705c18_jquery.easypiechart.min_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_9705c18_19',);
                }

                if (0 === strpos($pathinfo, '/js/9705c18_bootstrap-')) {
                    // _assetic_9705c18_20
                    if ($pathinfo === '/js/9705c18_bootstrap-datepicker_21.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_9705c18_20',);
                    }

                    // _assetic_9705c18_21
                    if ($pathinfo === '/js/9705c18_bootstrap-timepicker.min_22.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_9705c18_21',);
                    }

                }

                // _assetic_9705c18_22
                if ($pathinfo === '/js/9705c18_jquery.nouislider_23.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_9705c18_22',);
                }

                // _assetic_9705c18_23
                if ($pathinfo === '/js/9705c18_select2.min_24.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_9705c18_23',);
                }

                // _assetic_9705c18_24
                if ($pathinfo === '/js/9705c18_hogan_25.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_9705c18_24',);
                }

                // _assetic_9705c18_25
                if ($pathinfo === '/js/9705c18_typeahead.min_26.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_9705c18_25',);
                }

                // _assetic_9705c18_26
                if ($pathinfo === '/js/9705c18_jquery.knob_27.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_9705c18_26',);
                }

                // _assetic_9705c18_27
                if ($pathinfo === '/js/9705c18_raphael-min_28.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_9705c18_27',);
                }

                // _assetic_9705c18_28
                if ($pathinfo === '/js/9705c18_morris_29.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_9705c18_28',);
                }

                if (0 === strpos($pathinfo, '/js/9705c18_jquery.')) {
                    // _assetic_9705c18_29
                    if ($pathinfo === '/js/9705c18_jquery.min_30.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_9705c18_29',);
                    }

                    // _assetic_9705c18_30
                    if ($pathinfo === '/js/9705c18_jquery.timer_31.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '9705c18',  'pos' => 30,  '_format' => 'js',  '_route' => '_assetic_9705c18_30',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/css/0fcfcc7')) {
            // _assetic_0fcfcc7
            if ($pathinfo === '/css/0fcfcc7.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7',);
            }

            if (0 === strpos($pathinfo, '/css/0fcfcc7_')) {
                // _assetic_0fcfcc7_0
                if ($pathinfo === '/css/0fcfcc7_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_0',);
                }

                // _assetic_0fcfcc7_1
                if ($pathinfo === '/css/0fcfcc7_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_1',);
                }

                // _assetic_0fcfcc7_2
                if ($pathinfo === '/css/0fcfcc7_nanoscroller_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_2',);
                }

                // _assetic_0fcfcc7_3
                if ($pathinfo === '/css/0fcfcc7_theme_styles_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_3',);
                }

                // _assetic_0fcfcc7_4
                if ($pathinfo === '/css/0fcfcc7_jquery-jvectormap-1.2.2_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_4',);
                }

                // _assetic_0fcfcc7_5
                if ($pathinfo === '/css/0fcfcc7_weather-icons_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_5',);
                }

                // _assetic_0fcfcc7_6
                if ($pathinfo === '/css/0fcfcc7_morris_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_6',);
                }

                // _assetic_0fcfcc7_7
                if ($pathinfo === '/css/0fcfcc7_jquery.nouislider_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_7',);
                }

                // _assetic_0fcfcc7_8
                if ($pathinfo === '/css/0fcfcc7_select2_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_8',);
                }

                // _assetic_0fcfcc7_9
                if ($pathinfo === '/css/0fcfcc7_datepicker_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_9',);
                }

                // _assetic_0fcfcc7_10
                if ($pathinfo === '/css/0fcfcc7_bootstrap-timepicker_11.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_10',);
                }

                // _assetic_0fcfcc7_11
                if ($pathinfo === '/css/0fcfcc7_hopscotch_12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_11',);
                }

                // _assetic_0fcfcc7_12
                if ($pathinfo === '/css/0fcfcc7_angular_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_12',);
                }

                // _assetic_0fcfcc7_13
                if ($pathinfo === '/css/0fcfcc7_loading-bar_14.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0fcfcc7',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_0fcfcc7_13',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/0182b00')) {
            // _assetic_0182b00
            if ($pathinfo === '/js/0182b00.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0182b00',);
            }

            if (0 === strpos($pathinfo, '/js/0182b00_')) {
                if (0 === strpos($pathinfo, '/js/0182b00_demo-')) {
                    // _assetic_0182b00_0
                    if ($pathinfo === '/js/0182b00_demo-rtl_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0182b00_0',);
                    }

                    // _assetic_0182b00_1
                    if ($pathinfo === '/js/0182b00_demo-skin-changer_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_0182b00_1',);
                    }

                }

                // _assetic_0182b00_2
                if ($pathinfo === '/js/0182b00_jquery_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_0182b00_2',);
                }

                // _assetic_0182b00_3
                if ($pathinfo === '/js/0182b00_bootstrap_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_0182b00_3',);
                }

                // _assetic_0182b00_4
                if ($pathinfo === '/js/0182b00_jquery.nanoscroller.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_0182b00_4',);
                }

                // _assetic_0182b00_5
                if ($pathinfo === '/js/0182b00_demo_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_0182b00_5',);
                }

                // _assetic_0182b00_6
                if ($pathinfo === '/js/0182b00_moment.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_0182b00_6',);
                }

                if (0 === strpos($pathinfo, '/js/0182b00_jquery-jvectormap-')) {
                    // _assetic_0182b00_7
                    if ($pathinfo === '/js/0182b00_jquery-jvectormap-1.2.2.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_0182b00_7',);
                    }

                    // _assetic_0182b00_8
                    if ($pathinfo === '/js/0182b00_jquery-jvectormap-world-merc-en_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_0182b00_8',);
                    }

                }

                // _assetic_0182b00_9
                if ($pathinfo === '/js/0182b00_gdp-data_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_0182b00_9',);
                }

                if (0 === strpos($pathinfo, '/js/0182b00_jquery.')) {
                    if (0 === strpos($pathinfo, '/js/0182b00_jquery.flot.')) {
                        // _assetic_0182b00_10
                        if ($pathinfo === '/js/0182b00_jquery.flot.min_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_0182b00_10',);
                        }

                        // _assetic_0182b00_11
                        if ($pathinfo === '/js/0182b00_jquery.flot.resize.min_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_0182b00_11',);
                        }

                        if (0 === strpos($pathinfo, '/js/0182b00_jquery.flot.t')) {
                            // _assetic_0182b00_12
                            if ($pathinfo === '/js/0182b00_jquery.flot.time.min_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_0182b00_12',);
                            }

                            // _assetic_0182b00_13
                            if ($pathinfo === '/js/0182b00_jquery.flot.threshold_14.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_0182b00_13',);
                            }

                        }

                        // _assetic_0182b00_14
                        if ($pathinfo === '/js/0182b00_jquery.flot.axislabels_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_0182b00_14',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/0182b00_jquery.s')) {
                        // _assetic_0182b00_15
                        if ($pathinfo === '/js/0182b00_jquery.slimscroll.min_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_0182b00_15',);
                        }

                        // _assetic_0182b00_16
                        if ($pathinfo === '/js/0182b00_jquery.sparkline.min_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_0182b00_16',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/0182b00_s')) {
                    // _assetic_0182b00_17
                    if ($pathinfo === '/js/0182b00_skycons_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_0182b00_17',);
                    }

                    // _assetic_0182b00_18
                    if ($pathinfo === '/js/0182b00_scripts_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_0182b00_18',);
                    }

                }

                // _assetic_0182b00_19
                if ($pathinfo === '/js/0182b00_pace.min_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_0182b00_19',);
                }

                // _assetic_0182b00_20
                if ($pathinfo === '/js/0182b00_jquery.easypiechart.min_21.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_0182b00_20',);
                }

                if (0 === strpos($pathinfo, '/js/0182b00_bootstrap-')) {
                    // _assetic_0182b00_21
                    if ($pathinfo === '/js/0182b00_bootstrap-datepicker_22.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_0182b00_21',);
                    }

                    // _assetic_0182b00_22
                    if ($pathinfo === '/js/0182b00_bootstrap-timepicker.min_23.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_0182b00_22',);
                    }

                }

                // _assetic_0182b00_23
                if ($pathinfo === '/js/0182b00_jquery.nouislider_24.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_0182b00_23',);
                }

                // _assetic_0182b00_24
                if ($pathinfo === '/js/0182b00_select2.min_25.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_0182b00_24',);
                }

                // _assetic_0182b00_25
                if ($pathinfo === '/js/0182b00_hogan_26.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_0182b00_25',);
                }

                // _assetic_0182b00_26
                if ($pathinfo === '/js/0182b00_typeahead.min_27.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_0182b00_26',);
                }

                // _assetic_0182b00_27
                if ($pathinfo === '/js/0182b00_jquery.knob_28.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_0182b00_27',);
                }

                // _assetic_0182b00_28
                if ($pathinfo === '/js/0182b00_raphael-min_29.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_0182b00_28',);
                }

                // _assetic_0182b00_29
                if ($pathinfo === '/js/0182b00_morris_30.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_0182b00_29',);
                }

                // _assetic_0182b00_30
                if ($pathinfo === '/js/0182b00_hopscotch_31.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 30,  '_format' => 'js',  '_route' => '_assetic_0182b00_30',);
                }

                if (0 === strpos($pathinfo, '/js/0182b00_angular')) {
                    // _assetic_0182b00_31
                    if ($pathinfo === '/js/0182b00_angular.min_32.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 31,  '_format' => 'js',  '_route' => '_assetic_0182b00_31',);
                    }

                    if (0 === strpos($pathinfo, '/js/0182b00_angular-')) {
                        // _assetic_0182b00_32
                        if ($pathinfo === '/js/0182b00_angular-route.min_33.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 32,  '_format' => 'js',  '_route' => '_assetic_0182b00_32',);
                        }

                        // _assetic_0182b00_33
                        if ($pathinfo === '/js/0182b00_angular-animate_34.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 33,  '_format' => 'js',  '_route' => '_assetic_0182b00_33',);
                        }

                    }

                }

                // _assetic_0182b00_34
                if ($pathinfo === '/js/0182b00_loading-bar_35.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 34,  '_format' => 'js',  '_route' => '_assetic_0182b00_34',);
                }

                if (0 === strpos($pathinfo, '/js/0182b00_a')) {
                    // _assetic_0182b00_35
                    if ($pathinfo === '/js/0182b00_angular.easypiechart.min_36.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 35,  '_format' => 'js',  '_route' => '_assetic_0182b00_35',);
                    }

                    // _assetic_0182b00_36
                    if ($pathinfo === '/js/0182b00_app_37.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 36,  '_format' => 'js',  '_route' => '_assetic_0182b00_36',);
                    }

                }

                // _assetic_0182b00_37
                if ($pathinfo === '/js/0182b00_directives_38.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 37,  '_format' => 'js',  '_route' => '_assetic_0182b00_37',);
                }

                // _assetic_0182b00_38
                if ($pathinfo === '/js/0182b00_controllers_39.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0182b00',  'pos' => 38,  '_format' => 'js',  '_route' => '_assetic_0182b00_38',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/657cf0f')) {
            // _assetic_657cf0f
            if ($pathinfo === '/css/657cf0f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_657cf0f',);
            }

            if (0 === strpos($pathinfo, '/css/657cf0f_')) {
                // _assetic_657cf0f_0
                if ($pathinfo === '/css/657cf0f_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_657cf0f_0',);
                }

                // _assetic_657cf0f_1
                if ($pathinfo === '/css/657cf0f_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_657cf0f_1',);
                }

                // _assetic_657cf0f_2
                if ($pathinfo === '/css/657cf0f_nanoscroller_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_657cf0f_2',);
                }

                // _assetic_657cf0f_3
                if ($pathinfo === '/css/657cf0f_theme_styles_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_657cf0f_3',);
                }

                // _assetic_657cf0f_4
                if ($pathinfo === '/css/657cf0f_jquery-jvectormap-1.2.2_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_657cf0f_4',);
                }

                // _assetic_657cf0f_5
                if ($pathinfo === '/css/657cf0f_weather-icons_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_657cf0f_5',);
                }

                // _assetic_657cf0f_6
                if ($pathinfo === '/css/657cf0f_morris_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_657cf0f_6',);
                }

                // _assetic_657cf0f_7
                if ($pathinfo === '/css/657cf0f_jquery.nouislider_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_657cf0f_7',);
                }

                // _assetic_657cf0f_8
                if ($pathinfo === '/css/657cf0f_select2_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_657cf0f_8',);
                }

                if (0 === strpos($pathinfo, '/css/657cf0f_date')) {
                    // _assetic_657cf0f_9
                    if ($pathinfo === '/css/657cf0f_datepicker_10.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_657cf0f_9',);
                    }

                    // _assetic_657cf0f_10
                    if ($pathinfo === '/css/657cf0f_daterangepicker_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_657cf0f_10',);
                    }

                }

                // _assetic_657cf0f_11
                if ($pathinfo === '/css/657cf0f_bootstrap-timepicker_12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_657cf0f_11',);
                }

                // _assetic_657cf0f_12
                if ($pathinfo === '/css/657cf0f_hopscotch_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_657cf0f_12',);
                }

                if (0 === strpos($pathinfo, '/css/657cf0f_dataTables.')) {
                    // _assetic_657cf0f_13
                    if ($pathinfo === '/css/657cf0f_dataTables.fixedHeader_14.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_657cf0f_13',);
                    }

                    // _assetic_657cf0f_14
                    if ($pathinfo === '/css/657cf0f_dataTables.tableTools_15.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 14,  '_format' => 'css',  '_route' => '_assetic_657cf0f_14',);
                    }

                }

                // _assetic_657cf0f_15
                if ($pathinfo === '/css/657cf0f_footable.core_16.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '657cf0f',  'pos' => 15,  '_format' => 'css',  '_route' => '_assetic_657cf0f_15',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/e1a4f99')) {
            // _assetic_e1a4f99
            if ($pathinfo === '/js/e1a4f99.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e1a4f99',);
            }

            if (0 === strpos($pathinfo, '/js/e1a4f99_')) {
                if (0 === strpos($pathinfo, '/js/e1a4f99_demo-')) {
                    // _assetic_e1a4f99_0
                    if ($pathinfo === '/js/e1a4f99_demo-rtl_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_0',);
                    }

                    // _assetic_e1a4f99_1
                    if ($pathinfo === '/js/e1a4f99_demo-skin-changer_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_1',);
                    }

                }

                // _assetic_e1a4f99_2
                if ($pathinfo === '/js/e1a4f99_jquery_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_2',);
                }

                // _assetic_e1a4f99_3
                if ($pathinfo === '/js/e1a4f99_bootstrap_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_3',);
                }

                // _assetic_e1a4f99_4
                if ($pathinfo === '/js/e1a4f99_jquery.nanoscroller.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_4',);
                }

                // _assetic_e1a4f99_5
                if ($pathinfo === '/js/e1a4f99_demo_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_5',);
                }

                // _assetic_e1a4f99_6
                if ($pathinfo === '/js/e1a4f99_moment.min_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_6',);
                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_jquery-jvectormap-')) {
                    // _assetic_e1a4f99_7
                    if ($pathinfo === '/js/e1a4f99_jquery-jvectormap-1.2.2.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_7',);
                    }

                    // _assetic_e1a4f99_8
                    if ($pathinfo === '/js/e1a4f99_jquery-jvectormap-world-merc-en_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_8',);
                    }

                }

                // _assetic_e1a4f99_9
                if ($pathinfo === '/js/e1a4f99_gdp-data_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_9',);
                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_jquery.')) {
                    if (0 === strpos($pathinfo, '/js/e1a4f99_jquery.flot.')) {
                        // _assetic_e1a4f99_10
                        if ($pathinfo === '/js/e1a4f99_jquery.flot.min_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_10',);
                        }

                        // _assetic_e1a4f99_11
                        if ($pathinfo === '/js/e1a4f99_jquery.flot.resize.min_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_11',);
                        }

                        if (0 === strpos($pathinfo, '/js/e1a4f99_jquery.flot.t')) {
                            // _assetic_e1a4f99_12
                            if ($pathinfo === '/js/e1a4f99_jquery.flot.time.min_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_12',);
                            }

                            // _assetic_e1a4f99_13
                            if ($pathinfo === '/js/e1a4f99_jquery.flot.threshold_14.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_13',);
                            }

                        }

                        // _assetic_e1a4f99_14
                        if ($pathinfo === '/js/e1a4f99_jquery.flot.axislabels_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_14',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/e1a4f99_jquery.s')) {
                        // _assetic_e1a4f99_15
                        if ($pathinfo === '/js/e1a4f99_jquery.slimscroll.min_16.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_15',);
                        }

                        // _assetic_e1a4f99_16
                        if ($pathinfo === '/js/e1a4f99_jquery.sparkline.min_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_16',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_s')) {
                    // _assetic_e1a4f99_17
                    if ($pathinfo === '/js/e1a4f99_skycons_18.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_17',);
                    }

                    // _assetic_e1a4f99_18
                    if ($pathinfo === '/js/e1a4f99_scripts_19.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_18',);
                    }

                }

                // _assetic_e1a4f99_19
                if ($pathinfo === '/js/e1a4f99_pace.min_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_19',);
                }

                // _assetic_e1a4f99_20
                if ($pathinfo === '/js/e1a4f99_jquery.easypiechart.min_21.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_20',);
                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_bootstrap-')) {
                    // _assetic_e1a4f99_21
                    if ($pathinfo === '/js/e1a4f99_bootstrap-datepicker_22.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_21',);
                    }

                    // _assetic_e1a4f99_22
                    if ($pathinfo === '/js/e1a4f99_bootstrap-timepicker.min_23.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_22',);
                    }

                }

                // _assetic_e1a4f99_23
                if ($pathinfo === '/js/e1a4f99_jquery.nouislider_24.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_23',);
                }

                // _assetic_e1a4f99_24
                if ($pathinfo === '/js/e1a4f99_select2.min_25.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_24',);
                }

                // _assetic_e1a4f99_25
                if ($pathinfo === '/js/e1a4f99_hogan_26.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_25',);
                }

                // _assetic_e1a4f99_26
                if ($pathinfo === '/js/e1a4f99_typeahead.min_27.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_26',);
                }

                // _assetic_e1a4f99_27
                if ($pathinfo === '/js/e1a4f99_jquery.knob_28.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_27',);
                }

                // _assetic_e1a4f99_28
                if ($pathinfo === '/js/e1a4f99_raphael-min_29.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_28',);
                }

                // _assetic_e1a4f99_29
                if ($pathinfo === '/js/e1a4f99_hopscotch_30.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_29',);
                }

                // _assetic_e1a4f99_30
                if ($pathinfo === '/js/e1a4f99_jquery.dataTables_31.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 30,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_30',);
                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_dataTables.')) {
                    // _assetic_e1a4f99_31
                    if ($pathinfo === '/js/e1a4f99_dataTables.fixedHeader_32.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 31,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_31',);
                    }

                    // _assetic_e1a4f99_32
                    if ($pathinfo === '/js/e1a4f99_dataTables.tableTools_33.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 32,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_32',);
                    }

                }

                // _assetic_e1a4f99_33
                if ($pathinfo === '/js/e1a4f99_jquery.dataTables.bootstrap_34.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 33,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_33',);
                }

                if (0 === strpos($pathinfo, '/js/e1a4f99_footable')) {
                    // _assetic_e1a4f99_34
                    if ($pathinfo === '/js/e1a4f99_footable_35.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 34,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_34',);
                    }

                    if (0 === strpos($pathinfo, '/js/e1a4f99_footable.')) {
                        // _assetic_e1a4f99_35
                        if ($pathinfo === '/js/e1a4f99_footable.sort_36.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 35,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_35',);
                        }

                        // _assetic_e1a4f99_36
                        if ($pathinfo === '/js/e1a4f99_footable.paginate_37.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 36,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_36',);
                        }

                        // _assetic_e1a4f99_37
                        if ($pathinfo === '/js/e1a4f99_footable.filter_38.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 37,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_37',);
                        }

                    }

                }

                // _assetic_e1a4f99_38
                if ($pathinfo === '/js/e1a4f99_morris_39.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1a4f99',  'pos' => 38,  '_format' => 'js',  '_route' => '_assetic_e1a4f99_38',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/eee9b15')) {
            // _assetic_eee9b15
            if ($pathinfo === '/css/eee9b15.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'eee9b15',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_eee9b15',);
            }

            if (0 === strpos($pathinfo, '/css/eee9b15_')) {
                // _assetic_eee9b15_0
                if ($pathinfo === '/css/eee9b15_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eee9b15',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_eee9b15_0',);
                }

                // _assetic_eee9b15_1
                if ($pathinfo === '/css/eee9b15_agency_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eee9b15',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_eee9b15_1',);
                }

                // _assetic_eee9b15_2
                if ($pathinfo === '/css/eee9b15_font-awesome.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'eee9b15',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_eee9b15_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/f4dc5e0')) {
            // _assetic_f4dc5e0
            if ($pathinfo === '/js/f4dc5e0.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0',);
            }

            if (0 === strpos($pathinfo, '/js/f4dc5e0_')) {
                // _assetic_f4dc5e0_0
                if ($pathinfo === '/js/f4dc5e0_jquery-1.11.0_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_0',);
                }

                // _assetic_f4dc5e0_1
                if ($pathinfo === '/js/f4dc5e0_bootstrap.min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_1',);
                }

                // _assetic_f4dc5e0_2
                if ($pathinfo === '/js/f4dc5e0_jquery.easing.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_2',);
                }

                if (0 === strpos($pathinfo, '/js/f4dc5e0_c')) {
                    // _assetic_f4dc5e0_3
                    if ($pathinfo === '/js/f4dc5e0_classie_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_3',);
                    }

                    // _assetic_f4dc5e0_4
                    if ($pathinfo === '/js/f4dc5e0_cbpAnimatedHeader_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_4',);
                    }

                }

                // _assetic_f4dc5e0_5
                if ($pathinfo === '/js/f4dc5e0_jqBootstrapValidation_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_5',);
                }

                // _assetic_f4dc5e0_6
                if ($pathinfo === '/js/f4dc5e0_contact_me_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_6',);
                }

                // _assetic_f4dc5e0_7
                if ($pathinfo === '/js/f4dc5e0_agency_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f4dc5e0',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_f4dc5e0_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/cb236e0')) {
            // _assetic_cb236e0
            if ($pathinfo === '/css/cb236e0.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_cb236e0',);
            }

            if (0 === strpos($pathinfo, '/css/cb236e0_')) {
                // _assetic_cb236e0_0
                if ($pathinfo === '/css/cb236e0_reset_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_cb236e0_0',);
                }

                // _assetic_cb236e0_1
                if ($pathinfo === '/css/cb236e0_screen_yacht_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_cb236e0_1',);
                }

                // _assetic_cb236e0_2
                if ($pathinfo === '/css/cb236e0_fancybox_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_cb236e0_2',);
                }

                if (0 === strpos($pathinfo, '/css/cb236e0_jquery.')) {
                    // _assetic_cb236e0_3
                    if ($pathinfo === '/css/cb236e0_jquery.wysiwyg_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_cb236e0_3',);
                    }

                    // _assetic_cb236e0_4
                    if ($pathinfo === '/css/cb236e0_jquery.ui_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_cb236e0_4',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/cb236e0_visualize')) {
                    // _assetic_cb236e0_5
                    if ($pathinfo === '/css/cb236e0_visualize_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_cb236e0_5',);
                    }

                    // _assetic_cb236e0_6
                    if ($pathinfo === '/css/cb236e0_visualize-light_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'cb236e0',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_cb236e0_6',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/scripts')) {
            // _assetic_6f84f4e
            if ($pathinfo === '/scripts.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6f84f4e',);
            }

            if (0 === strpos($pathinfo, '/scripts_')) {
                if (0 === strpos($pathinfo, '/scripts_jquery')) {
                    // _assetic_6f84f4e_0
                    if ($pathinfo === '/scripts_jquery-1.7.2.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_0',);
                    }

                    if (0 === strpos($pathinfo, '/scripts_jquery.')) {
                        // _assetic_6f84f4e_1
                        if ($pathinfo === '/scripts_jquery.visualize_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_1',);
                        }

                        // _assetic_6f84f4e_2
                        if ($pathinfo === '/scripts_jquery.wysiwyg_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_2',);
                        }

                        // _assetic_6f84f4e_3
                        if ($pathinfo === '/scripts_jquery.tinymce_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_3',);
                        }

                        // _assetic_6f84f4e_4
                        if ($pathinfo === '/scripts_jquery.fancybox_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_4',);
                        }

                        // _assetic_6f84f4e_5
                        if ($pathinfo === '/scripts_jquery.idtabs_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_5',);
                        }

                        // _assetic_6f84f4e_6
                        if ($pathinfo === '/scripts_jquery.datatables_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_6',);
                        }

                        // _assetic_6f84f4e_7
                        if ($pathinfo === '/scripts_jquery.jeditable_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_7',);
                        }

                        // _assetic_6f84f4e_8
                        if ($pathinfo === '/scripts_jquery.ui_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_8',);
                        }

                        // _assetic_6f84f4e_9
                        if ($pathinfo === '/scripts_jquery.jcarousel_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_9',);
                        }

                        // _assetic_6f84f4e_10
                        if ($pathinfo === '/scripts_jquery.validate_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_10',);
                        }

                    }

                }

                // _assetic_6f84f4e_11
                if ($pathinfo === '/scripts_excanvas_12.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_11',);
                }

                // _assetic_6f84f4e_12
                if ($pathinfo === '/scripts_cufon_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_12',);
                }

                // _assetic_6f84f4e_13
                if ($pathinfo === '/scripts_script_14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f84f4e',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_6f84f4e_13',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/7081817')) {
            // _assetic_7081817
            if ($pathinfo === '/css/7081817.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 7081817,  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7081817',);
            }

            if (0 === strpos($pathinfo, '/css/7081817_jq')) {
                // _assetic_7081817_0
                if ($pathinfo === '/css/7081817_jquery.mobile-1.4.3.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7081817,  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7081817_0',);
                }

                // _assetic_7081817_1
                if ($pathinfo === '/css/7081817_jqm-demos_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 7081817,  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7081817_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/scripts')) {
            // _assetic_06b5300
            if ($pathinfo === '/scripts.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '06b5300',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_06b5300',);
            }

            if (0 === strpos($pathinfo, '/scripts_')) {
                // _assetic_06b5300_0
                if ($pathinfo === '/scripts_jquery.mobile-1.4.3.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06b5300',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_06b5300_0',);
                }

                // _assetic_06b5300_1
                if ($pathinfo === '/scripts_index_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06b5300',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_06b5300_1',);
                }

                // _assetic_06b5300_2
                if ($pathinfo === '/scripts_jquery_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06b5300',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_06b5300_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/af08fc9')) {
            // _assetic_af08fc9
            if ($pathinfo === '/js/af08fc9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_af08fc9',);
            }

            if (0 === strpos($pathinfo, '/js/af08fc9_')) {
                // _assetic_af08fc9_0
                if ($pathinfo === '/js/af08fc9_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_af08fc9_0',);
                }

                // _assetic_af08fc9_1
                if ($pathinfo === '/js/af08fc9_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_af08fc9_1',);
                }

                // _assetic_af08fc9_2
                if ($pathinfo === '/js/af08fc9_jquery.nanoscroller.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_af08fc9_2',);
                }

                // _assetic_af08fc9_3
                if ($pathinfo === '/js/af08fc9_demo_4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_af08fc9_3',);
                }

                // _assetic_af08fc9_4
                if ($pathinfo === '/js/af08fc9_moment.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_af08fc9_4',);
                }

                if (0 === strpos($pathinfo, '/js/af08fc9_jquery-jvectormap-')) {
                    // _assetic_af08fc9_5
                    if ($pathinfo === '/js/af08fc9_jquery-jvectormap-1.2.2.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_af08fc9_5',);
                    }

                    // _assetic_af08fc9_6
                    if ($pathinfo === '/js/af08fc9_jquery-jvectormap-world-merc-en_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_af08fc9_6',);
                    }

                }

                // _assetic_af08fc9_7
                if ($pathinfo === '/js/af08fc9_gdp-data_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_af08fc9_7',);
                }

                if (0 === strpos($pathinfo, '/js/af08fc9_jquery.')) {
                    if (0 === strpos($pathinfo, '/js/af08fc9_jquery.flot.')) {
                        // _assetic_af08fc9_8
                        if ($pathinfo === '/js/af08fc9_jquery.flot.min_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_af08fc9_8',);
                        }

                        // _assetic_af08fc9_9
                        if ($pathinfo === '/js/af08fc9_jquery.flot.resize.min_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_af08fc9_9',);
                        }

                        if (0 === strpos($pathinfo, '/js/af08fc9_jquery.flot.t')) {
                            // _assetic_af08fc9_10
                            if ($pathinfo === '/js/af08fc9_jquery.flot.time.min_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_af08fc9_10',);
                            }

                            // _assetic_af08fc9_11
                            if ($pathinfo === '/js/af08fc9_jquery.flot.threshold_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_af08fc9_11',);
                            }

                        }

                        // _assetic_af08fc9_12
                        if ($pathinfo === '/js/af08fc9_jquery.flot.axislabels_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_af08fc9_12',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/af08fc9_jquery.s')) {
                        // _assetic_af08fc9_13
                        if ($pathinfo === '/js/af08fc9_jquery.slimscroll.min_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_af08fc9_13',);
                        }

                        // _assetic_af08fc9_14
                        if ($pathinfo === '/js/af08fc9_jquery.sparkline.min_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_af08fc9_14',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/af08fc9_s')) {
                    // _assetic_af08fc9_15
                    if ($pathinfo === '/js/af08fc9_skycons_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_af08fc9_15',);
                    }

                    // _assetic_af08fc9_16
                    if ($pathinfo === '/js/af08fc9_scripts_17.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_af08fc9_16',);
                    }

                }

                // _assetic_af08fc9_17
                if ($pathinfo === '/js/af08fc9_pace.min_18.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_af08fc9_17',);
                }

                // _assetic_af08fc9_18
                if ($pathinfo === '/js/af08fc9_jquery.easypiechart.min_19.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_af08fc9_18',);
                }

                if (0 === strpos($pathinfo, '/js/af08fc9_bootstrap-')) {
                    // _assetic_af08fc9_19
                    if ($pathinfo === '/js/af08fc9_bootstrap-datepicker_20.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_af08fc9_19',);
                    }

                    // _assetic_af08fc9_20
                    if ($pathinfo === '/js/af08fc9_bootstrap-timepicker.min_21.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_af08fc9_20',);
                    }

                }

                // _assetic_af08fc9_21
                if ($pathinfo === '/js/af08fc9_jquery.nouislider_22.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_af08fc9_21',);
                }

                // _assetic_af08fc9_22
                if ($pathinfo === '/js/af08fc9_select2.min_23.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'af08fc9',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_af08fc9_22',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/cad465b')) {
            // _assetic_cad465b
            if ($pathinfo === '/css/cad465b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_cad465b',);
            }

            if (0 === strpos($pathinfo, '/css/cad465b_')) {
                // _assetic_cad465b_0
                if ($pathinfo === '/css/cad465b_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_cad465b_0',);
                }

                // _assetic_cad465b_1
                if ($pathinfo === '/css/cad465b_font-awesome_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_cad465b_1',);
                }

                // _assetic_cad465b_2
                if ($pathinfo === '/css/cad465b_nanoscroller_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_cad465b_2',);
                }

                // _assetic_cad465b_3
                if ($pathinfo === '/css/cad465b_theme_styles_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_cad465b_3',);
                }

                // _assetic_cad465b_4
                if ($pathinfo === '/css/cad465b_jquery-jvectormap-1.2.2_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_cad465b_4',);
                }

                // _assetic_cad465b_5
                if ($pathinfo === '/css/cad465b_weather-icons_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_cad465b_5',);
                }

                // _assetic_cad465b_6
                if ($pathinfo === '/css/cad465b_morris_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_cad465b_6',);
                }

                // _assetic_cad465b_7
                if ($pathinfo === '/css/cad465b_jquery.nouislider_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_cad465b_7',);
                }

                // _assetic_cad465b_8
                if ($pathinfo === '/css/cad465b_select2_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cad465b',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_cad465b_8',);
                }

            }

        }

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

        // hwi_oauth_service_redirect
        if (0 === strpos($pathinfo, '/connect') && preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
        }

        // hwi_oauth_connect
        if (rtrim($pathinfo, '/') === '/facebook/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
            }

            return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
        }

        if (0 === strpos($pathinfo, '/login/check-')) {
            // twitter_login
            if ($pathinfo === '/login/check-twitter') {
                return array('_route' => 'twitter_login');
            }

            // github_login
            if ($pathinfo === '/login/check-github') {
                return array('_route' => 'github_login');
            }

            // facebook_login
            if ($pathinfo === '/login/check-facebook') {
                return array('_route' => 'facebook_login');
            }

            // google_login
            if ($pathinfo === '/login/check-google') {
                return array('_route' => 'google_login');
            }

        }

        if (0 === strpos($pathinfo, '/news')) {
            // dashboard
            if ($pathinfo === '/news/calendar') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_dashboard;
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::dashboardPublicAction',  '_route' => 'dashboard',);
            }
            not_dashboard:

            // newsuser
            if (rtrim($pathinfo, '/') === '/news') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsuser;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newsuser');
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::indexAction',  '_route' => 'newsuser',);
            }
            not_newsuser:

            // more_news_user
            if (preg_match('#^/news/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/more$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_more_news_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'more_news_user')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::getMoreNewsUserAction',));
            }
            not_more_news_user:

            // news_user
            if (preg_match('#^/news/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/(?P<userId>[^/]++)/profile$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_news_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'news_user')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::getNewsUserAction',));
            }
            not_news_user:

            // newsuser_create
            if ($pathinfo === '/news/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newsuser_create;
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::createAction',  '_route' => 'newsuser_create',);
            }
            not_newsuser_create:

            // newsuser_new
            if ($pathinfo === '/news/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsuser_new;
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::newAction',  '_route' => 'newsuser_new',);
            }
            not_newsuser_new:

            // newsuser_show
            if (preg_match('#^/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsuser_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsuser_show')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::showAction',));
            }
            not_newsuser_show:

            // newsuser_edit
            if (preg_match('#^/news/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsuser_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsuser_edit')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::editAction',));
            }
            not_newsuser_edit:

            // newsuser_update
            if (preg_match('#^/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_newsuser_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsuser_update')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::updateAction',));
            }
            not_newsuser_update:

            // newsuser_delete
            if (preg_match('#^/news/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_newsuser_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsuser_delete')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::deleteAction',));
            }
            not_newsuser_delete:

            // like_create
            if (preg_match('#^/news/(?P<idNews>[^/]++)/likeCreate$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_like_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'like_create')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::likeCreateAction',));
            }
            not_like_create:

            if (0 === strpos($pathinfo, '/news/notification')) {
                // notification_event
                if ($pathinfo === '/news/notification/event') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notification_event;
                    }

                    return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::notificationEventAction',  '_route' => 'notification_event',);
                }
                not_notification_event:

                // notification_friend
                if ($pathinfo === '/news/notification/friend') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notification_friend;
                    }

                    return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::notificationFriendAction',  '_route' => 'notification_friend',);
                }
                not_notification_friend:

                // marck_view_notification_event
                if ($pathinfo === '/news/notification/event/view') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_marck_view_notification_event;
                    }

                    return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::markViewNotificationEventAction',  '_route' => 'marck_view_notification_event',);
                }
                not_marck_view_notification_event:

                // marck_view_notification_friend
                if ($pathinfo === '/news/notification/friend/view') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_marck_view_notification_friend;
                    }

                    return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::markViewNotificationFriendAction',  '_route' => 'marck_view_notification_friend',);
                }
                not_marck_view_notification_friend:

            }

            // list_notification_friend
            if ($pathinfo === '/newslist/notification/friend') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_list_notification_friend;
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::listNotificationFriendAction',  '_route' => 'list_notification_friend',);
            }
            not_list_notification_friend:

            // notification_search_event
            if (0 === strpos($pathinfo, '/newsnotification/search') && preg_match('#^/newsnotification/search/(?P<idEvent>[^/]++)/event$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_notification_search_event;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_search_event')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::createSearchEventAjaxAction',));
            }
            not_notification_search_event:

            // create_comment_newsUser
            if ($pathinfo === '/news/notification/create/newsUser') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_create_comment_newsUser;
                }

                return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::createCommentNewsUserAjaxAction',  '_route' => 'create_comment_newsUser',);
            }
            not_create_comment_newsUser:

            // comments_news_user
            if (preg_match('#^/news/(?P<idNews>[^/]++)/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/more$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comments_news_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_news_user')), array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::getCommentNewsUserAction',));
            }
            not_comments_news_user:

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event
            if (rtrim($pathinfo, '/') === '/event') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event');
                }

                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::indexAction',  '_route' => 'event',);
            }

            // event_calendar
            if ($pathinfo === '/event/calendar') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::calendarAction',  '_route' => 'event_calendar',);
            }

            // event_show
            if (preg_match('#^/event/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::showAction',));
            }

            // event_new
            if ($pathinfo === '/event/new') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::newAction',  '_route' => 'event_new',);
            }

            // event_create
            if ($pathinfo === '/event/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_event_create;
                }

                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::createAction',  '_route' => 'event_create',);
            }
            not_event_create:

            // event_edit
            if (preg_match('#^/event/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::editAction',));
            }

            // event_update
            if (preg_match('#^/event/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_event_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_update')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::updateAction',));
            }
            not_event_update:

            // event_delete
            if (preg_match('#^/event/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::deleteAction',));
            }
            not_event_delete:

            // event_past
            if ($pathinfo === '/event/participation') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventPastAction',  '_route' => 'event_past',);
            }

            // event_past_ajax
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/participation/ajax$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_past_ajax')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventPastAjaxAction',));
            }

            // event_next
            if ($pathinfo === '/event/next') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventNextAction',  '_route' => 'event_next',);
            }

            // event_next_ajax
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/next/ajax$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_next_ajax')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventNextAjaxAction',));
            }

            // event_create_punctuation
            if (preg_match('#^/event/(?P<idEvent>[^/]++)/create_punctuation$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_create_punctuation')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::createPunctuationAction',));
            }

            // event_next_all
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/event/next/ajax/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_next_all')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::nextEventAllAjaxAction',));
            }

            // event_next_all_rss
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/event/next/rss/all$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_next_all_rss')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::nextEventAllRssAction',));
            }

            // event_next_min
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/event/next/reduce$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_next_min')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::nextEventReduceAction',));
            }

            // event_next_min_sport
            if (preg_match('#^/event/(?P<idSport>[^/]++)/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/event/next/reduce$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_next_min_sport')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::nextEventBySportReduceAction',));
            }

            if (0 === strpos($pathinfo, '/event/event')) {
                // event_search
                if ($pathinfo === '/event/event/search') {
                    return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::searchEventReduceAction',  '_route' => 'event_search',);
                }

                // event_list_next
                if ($pathinfo === '/event/event/next/all') {
                    return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listNexEventAction',  '_route' => 'event_list_next',);
                }

            }

            // asigne_result
            if (0 === strpos($pathinfo, '/event/asigne') && preg_match('#^/event/asigne/(?P<idEvent>[^/]++)/(?P<idClassification>[^/]++)/result$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'asigne_result')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::asigneResultEventAction',));
            }

            // search_result
            if ($pathinfo === '/event/search/result') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::searchResultAction',  '_route' => 'search_result',);
            }

            // notificacion_result
            if ($pathinfo === '/event/notificacion/result') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::notificationResultAction',  '_route' => 'notificacion_result',);
            }

            if (0 === strpos($pathinfo, '/event/enrolled')) {
                // enrolled_update
                if (preg_match('#^/event/enrolled/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_update')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::updateEnrolledAction',));
                }

                // enrolled_new
                if (preg_match('#^/event/enrolled/(?P<idEvent>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_new')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::newEnrolledAction',));
                }

                // enrolled_edit
                if (preg_match('#^/event/enrolled/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'enrolled_edit')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::editEnrolledAction',));
                }

            }

            // list_classification
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/classification/(?P<idEvent>[^/]++)/list/(?P<tipe>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_classification')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::getClassificationByIdEventAction',));
            }

            // event_rearch_result
            if (0 === strpos($pathinfo, '/event/search') && preg_match('#^/event/search/(?P<search>[^/]++)/result/(?P<idEvent>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_rearch_result')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::searchResultByNameAndBibAction',));
            }

            // event_report_running
            if (preg_match('#^/event/(?P<userId>[^/]++)/reports/running$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_report_running')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventReportsController::generateReportUserRunningAction',));
            }

            // event_send_point
            if (preg_match('#^/event/(?P<latitude>[^/]++)/geo/(?P<longitude>[^/]++)/map/(?P<time>[^/]++)/point/(?P<user>[^/]++)/(?P<idEvent>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_send_point')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::createEventPointAction',));
            }

            // event_today
            if ($pathinfo === '/event/today') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::getToDayEventsAction',  '_route' => 'event_today',);
            }

            if (0 === strpos($pathinfo, '/event/online')) {
                // event_online_user
                if (preg_match('#^/event/online/(?P<id>[^/]++)/user/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_online_user')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::onlineEventUserAction',));
                }

                // event_online_generate
                if (preg_match('#^/event/online/(?P<idEvent>[^/]++)/generate$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_online_generate')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::generateIdOnlineAction',));
                }

            }

            // event_show_event
            if (0 === strpos($pathinfo, '/event/show/map') && preg_match('#^/event/show/map/(?P<name>[^/]++)/(?P<idEvent>[^/]++)/online$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show_event')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::showEventMapAction',));
            }

            if (0 === strpos($pathinfo, '/event/last')) {
                // event_last_result
                if (preg_match('#^/event/last/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/result$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_last_result')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::lastResultEventAction',));
                }

                if (0 === strpos($pathinfo, '/event/last/without')) {
                    // event_list_without_result
                    if ($pathinfo === '/event/last/without/result/list') {
                        return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventWithOutResultEventAction',  '_route' => 'event_list_without_result',);
                    }

                    // event_without_result
                    if (preg_match('#^/event/last/without/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/result/load$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_without_result')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::lastEventWithOutResultEventAction',));
                    }

                }

            }

            // event_result_preview
            if (preg_match('#^/event/(?P<id>[^/]++)/preview$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_event_result_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_result_preview')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::preViewResultAction',));
            }
            not_event_result_preview:

            // event_result_admin
            if (preg_match('#^/event/(?P<id>[^/]++)/result/admin$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_result_admin')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::adminResultAction',));
            }

            // event_enviar_email
            if ($pathinfo === '/event/enviaremail') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::enviarEmailEventoAction',  '_route' => 'event_enviar_email',);
            }

            // event_distance
            if (0 === strpos($pathinfo, '/event/distance/map') && preg_match('#^/event/distance/map/(?P<name>[^/]++)/(?P<idEvent>[^/]++)/online$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_distance')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::getEstadisticasEventOnlineAction',));
            }

            // event_interval
            if (0 === strpos($pathinfo, '/event/interval/map') && preg_match('#^/event/interval/map/(?P<name>[^/]++)/(?P<idEvent>[^/]++)/online$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_interval')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::getIntervalEventOnlineAction',));
            }

            // event_lastpoint
            if (0 === strpos($pathinfo, '/event/last/point') && preg_match('#^/event/last/point/(?P<name>[^/]++)/(?P<idEvent>[^/]++)/online$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_lastpoint')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::getLastPointEventAction',));
            }

            // event_around_my
            if ($pathinfo === '/event/around') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::eventAroundMyAction',  '_route' => 'event_around_my',);
            }

            // event_by_organizer
            if (preg_match('#^/event/(?P<firstResult>[^/]++)/(?P<maxResults>[^/]++)/(?P<organizer>[^/]++)/organizer$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_by_organizer')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::listEventByOrganizerAction',));
            }

            // event_show_classification
            if (0 === strpos($pathinfo, '/event/classification') && preg_match('#^/event/classification/(?P<idClassification>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show_classification')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\EventController::showClassificationAction',));
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category
            if (rtrim($pathinfo, '/') === '/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category');
                }

                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
            }

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::showAction',));
            }

            // category_new
            if ($pathinfo === '/category/new') {
                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }

            // category_create
            if ($pathinfo === '/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_category_create;
                }

                return array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
            }
            not_category_create:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::editAction',));
            }

            // category_update
            if (preg_match('#^/category/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_category_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::updateAction',));
            }
            not_category_update:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'Amateur\\EventBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // users
            if ($pathinfo === '/user/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::usersAction',  '_route' => 'users',);
            }
            not_users:

            // friends
            if ($pathinfo === '/user/friends') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_friends;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::friendsAction',  '_route' => 'friends',);
            }
            not_friends:

            // know_friends
            if ($pathinfo === '/user/know') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_know_friends;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::knowUserAction',  '_route' => 'know_friends',);
            }
            not_know_friends:

            // user_interaction
            if ($pathinfo === '/user/user/interaction') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_interaction;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::listInteractioAction',  '_route' => 'user_interaction',);
            }
            not_user_interaction:

            // friends_ajax
            if ($pathinfo === '/user/friends/ajax') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_friends_ajax;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::friendsAjaxAction',  '_route' => 'friends_ajax',);
            }
            not_friends_ajax:

            // max_friends_user
            if ($pathinfo === '/user/max/friends/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_max_friends_user;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::maxFriendsUserAction',  '_route' => 'max_friends_user',);
            }
            not_max_friends_user:

            // add_registration
            if (preg_match('#^/user/(?P<idEvent>[^/]++)/(?P<tiempo>[^/]++)/(?P<distancia>[^/]++)/addRegistration$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_add_registration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_registration')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::addRegistrationAction',));
            }
            not_add_registration:

            // show_enrolled
            if (0 === strpos($pathinfo, '/user/enrolled') && preg_match('#^/user/enrolled/(?P<idErolled>[^/]++)/(?P<userID>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_show_enrolled;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'show_enrolled')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::showEnrolledAction',));
            }
            not_show_enrolled:

            // user_create
            if ($pathinfo === '/user/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // send_request_friend
            if (0 === strpos($pathinfo, '/user/send_request_friend') && preg_match('#^/user/send_request_friend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_send_request_friend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_request_friend')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::addNotificationFriendAction',));
            }
            not_send_request_friend:

            // add_friend
            if (0 === strpos($pathinfo, '/user/add_friend') && preg_match('#^/user/add_friend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_add_friend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_friend')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::addFriendAction',));
            }
            not_add_friend:

            // delete_friend
            if (0 === strpos($pathinfo, '/user/delete_friend') && preg_match('#^/user/delete_friend/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_delete_friend;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_friend')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::deleteFriendAction',));
            }
            not_delete_friend:

            // add_follower
            if (0 === strpos($pathinfo, '/user/add_follower') && preg_match('#^/user/add_follower/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_add_follower;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_follower')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::addFollowerAction',));
            }
            not_add_follower:

            // user_new
            if ($pathinfo === '/user/registration') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_update_first_time
            if (preg_match('#^/user/(?P<id>[^/]++)/firstTime$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_update_first_time;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update_first_time')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::updateFirstTimeAction',));
            }
            not_user_update_first_time:

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // users_top
            if ($pathinfo === '/user/users/top') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users_top;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::getUserOrdenByFriendAction',  '_route' => 'users_top',);
            }
            not_users_top:

            if (0 === strpos($pathinfo, '/user/admin')) {
                // admin_dashboard
                if ($pathinfo === '/user/admin/dashboard') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_dashboard;
                    }

                    return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::showDashboardAction',  '_route' => 'admin_dashboard',);
                }
                not_admin_dashboard:

                if (0 === strpos($pathinfo, '/user/admin/cant')) {
                    // admin_dashboard_cant_user
                    if ($pathinfo === '/user/admin/cant/user') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dashboard_cant_user;
                        }

                        return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::getCantUsersAction',  '_route' => 'admin_dashboard_cant_user',);
                    }
                    not_admin_dashboard_cant_user:

                    // admin_dashboard_cant_events
                    if ($pathinfo === '/user/admin/cant/events') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dashboard_cant_events;
                        }

                        return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::getCantEventsAction',  '_route' => 'admin_dashboard_cant_events',);
                    }
                    not_admin_dashboard_cant_events:

                    // admin_dashboard_cant_comments
                    if ($pathinfo === '/user/admin/cant/comments') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dashboard_cant_comments;
                        }

                        return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::getCantCommentsAction',  '_route' => 'admin_dashboard_cant_comments',);
                    }
                    not_admin_dashboard_cant_comments:

                    // admin_dashboard_cant_visit
                    if ($pathinfo === '/user/admin/cant/visit') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_dashboard_cant_visit;
                        }

                        return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::getCantVisitAction',  '_route' => 'admin_dashboard_cant_visit',);
                    }
                    not_admin_dashboard_cant_visit:

                }

            }

            // activity_logs_user
            if ($pathinfo === '/user/logs/activity') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_activity_logs_user;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::createLogsUserAction',  '_route' => 'activity_logs_user',);
            }
            not_activity_logs_user:

            // organizer_new
            if ($pathinfo === '/user/new/organizer') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_organizer_new;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::newOrganizerAction',  '_route' => 'organizer_new',);
            }
            not_organizer_new:

            // organizer_create
            if ($pathinfo === '/user/organizer/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_organizer_create;
                }

                return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::createOrganizerAction',  '_route' => 'organizer_create',);
            }
            not_organizer_create:

            // organizer_update
            if (0 === strpos($pathinfo, '/userorganizer') && preg_match('#^/userorganizer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_organizer_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'organizer_update')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::updateOrganizerAction',));
            }
            not_organizer_update:

            if (0 === strpos($pathinfo, '/user/organizer')) {
                // organizer_edit
                if (preg_match('#^/user/organizer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_organizer_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'organizer_edit')), array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::editOrganizerAction',));
                }
                not_organizer_edit:

                // organizer_list
                if ($pathinfo === '/user/organizer/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_organizer_list;
                    }

                    return array (  '_controller' => 'Amateur\\UserBundle\\Controller\\UserController::listOrganizerAction',  '_route' => 'organizer_list',);
                }
                not_organizer_list:

            }

        }

        if (0 === strpos($pathinfo, '/admin/role')) {
            // admin_role
            if ($pathinfo === '/admin/role') {
                return array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::indexAction',  '_route' => 'admin_role',);
            }

            // admin_role_show
            if (preg_match('#^/admin/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_show')), array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::showAction',));
            }

            // admin_role_new
            if ($pathinfo === '/admin/role/new') {
                return array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::newAction',  '_route' => 'admin_role_new',);
            }

            // admin_role_create
            if ($pathinfo === '/admin/role/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_role_create;
                }

                return array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::createAction',  '_route' => 'admin_role_create',);
            }
            not_admin_role_create:

            // admin_role_edit
            if (preg_match('#^/admin/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_edit')), array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::editAction',));
            }

            // admin_role_update
            if (preg_match('#^/admin/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_role_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_update')), array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::updateAction',));
            }
            not_admin_role_update:

            // admin_role_delete
            if (preg_match('#^/admin/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_role_delete')), array (  '_controller' => 'Xtending\\RoleBundle\\Controller\\RoleController::deleteAction',));
            }
            not_admin_role_delete:

        }

        // _login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_login');
            }

            return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::dashboardPublicAction',  '_route' => '_login',);
        }

        // login_enviar_email
        if (0 === strpos($pathinfo, '/login/enviaremail') && preg_match('#^/login/enviaremail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_enviar_email')), array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::enviarEmailAction',));
        }

        // login
        if ($pathinfo === '/calendario') {
            return array (  '_controller' => 'Amateur\\NewsUserBundle\\Controller\\NewsUserController::dashboardPublicAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login_redirect
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::loginAction',  '_route' => 'login_redirect',);
            }

            // login_cambio
            if (0 === strpos($pathinfo, '/login/cambio') && preg_match('#^/login/cambio/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_cambio')), array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::cambioAction',));
            }

            // login_recuperar_password
            if ($pathinfo === '/login/recuperarpassword') {
                return array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::recuperarPasswordAction',  '_route' => 'login_recuperar_password',);
            }

            // login_informacion
            if ($pathinfo === '/login/informacion') {
                return array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::informacionAction',  '_route' => 'login_informacion',);
            }

            if (0 === strpos($pathinfo, '/login/co')) {
                // login_codigo
                if (0 === strpos($pathinfo, '/login/codigo') && preg_match('#^/login/codigo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'login_codigo')), array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::codigoPasswordAction',));
                }

                // login_contacto
                if ($pathinfo === '/login/contacto') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_login_contacto;
                    }

                    return array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::contactoAction',  '_route' => 'login_contacto',);
                }
                not_login_contacto:

            }

        }

        // timeout_aviso
        if ($pathinfo === '/timeout') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'dashboard',  '_route' => 'timeout_aviso',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // public
        if ($pathinfo === '/public') {
            return array (  '_controller' => 'Xtending\\SecurityXtendingBundle\\Controller\\SecurityXtendingController::publicDataAction',  '_route' => 'public',);
        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|es|pt)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'ServicesBundle:Default:index',  '_locale' => 'en',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
