<?php

namespace WezomAgency;


class Browserizr
{
    /** @var string */
    private static $agent = '';

    /** @var bool */
    public static $is_android = false;
    /** @var bool */
    public static $is_android3 = false;
    /** @var bool */
    public static $is_android4 = false;
    /** @var bool */
    public static $is_android5 = false;
    /** @var bool */
    public static $is_android6 = false;
    /** @var bool */
    public static $is_android7 = false;
    /** @var bool */
    public static $is_android8 = false;
    /** @var bool */
    public static $is_blackberry = false;
    /** @var bool */
    public static $is_blackberry10 = false;
    /** @var bool */
    public static $is_edge = false;
    /** @var bool */
    public static $is_edge_android = false;
    /** @var bool */
    public static $is_edge_ios = false;
    /** @var bool */
    public static $is_ie = false;
    /** @var bool */
    public static $is_ie8 = false;
    /** @var bool */
    public static $is_ie9 = false;
    /** @var bool */
    public static $is_ie10 = false;
    /** @var bool */
    public static $is_ie11 = false;
    /** @var bool */
    public static $is_ipad = false;
    /** @var bool */
    public static $is_ipod = false;
    /** @var bool */
    public static $is_iphone = false;
    /** @var bool */
    public static $is_windows_phone = false;
    /** @var bool */
    public static $is_moz = false;
    /** @var bool */
    public static $is_opera = false;
    /** @var bool */
    public static $is_safari = false;
    /** @var bool */
    public static $is_chrome = false;
    /** @var bool */
    public static $is_mobile = false;
    /** @var bool */
    public static $is_desktop = false;

    /**
     * Create string with CSS classes
     * @param string[] $tests
     * @param string $css_prefix
     * @return string
     */
    public static function add_classes($tests, $css_prefix = '')
    {
        $classes = [];
        foreach ($tests as $test) {
            $key = 'is_' . $test;
            $prefix = self::$$key ? 'is-' : 'is-not-';
            array_push($classes, $css_prefix . $prefix . $test);
        }

        if (count($classes)) {
            return implode(' ', $classes);
        }
        return '';
    }

    /**
     * Checkout/re-checkout all detections
     */
    public static function detect()
    {
        self::$agent = $_SERVER['HTTP_USER_AGENT'] ?: '';

        self::$is_android = !!preg_match('/android/i', self::$agent);
        self::$is_android3 = !!preg_match('/android 3/i', self::$agent);
        self::$is_android4 = !!preg_match('/android 4/i', self::$agent);
        self::$is_android5 = !!preg_match('/android 5/i', self::$agent);
        self::$is_android6 = !!preg_match('/android 6/i', self::$agent);
        self::$is_android7 = !!preg_match('/android 7/i', self::$agent);
        self::$is_android8 = !!preg_match('/android 8/i', self::$agent);
        self::$is_blackberry = !!preg_match('/BlackBerry/i', self::$agent);
        self::$is_blackberry10 = !!preg_match('/BB10;/i', self::$agent);
        self::$is_edge = !!preg_match('/ Edge\/\d/i', self::$agent);
        self::$is_edge_android = !!preg_match('/\sEdgA\//i', self::$agent);
        self::$is_edge_ios = !!preg_match('/\sEdgA\//i', self::$agent);
        self::$is_ie = !!preg_match('/(MSIE|Trident)/i', self::$agent);
        self::$is_ie8 = !!preg_match('/MSIE 8\.\d/i', self::$agent);
        self::$is_ie9 = !!preg_match('/MSIE 9\.\d/i', self::$agent);
        self::$is_ie10 = !!preg_match('/MSIE 10\.\d/i', self::$agent);
        self::$is_ie11 = !!preg_match('/Trident.*rv[ :]*11\./', self::$agent);
        self::$is_ipad = !!preg_match('/iPad/i', self::$agent);
        self::$is_ipod = !!preg_match('/iPod/i', self::$agent);
        self::$is_iphone = !!preg_match('/iPhone/i', self::$agent);
        self::$is_windows_phone = !!preg_match('/Windows\sPhone/i', self::$agent);

        self::$is_moz = !!preg_match('/ Firefox\//i', self::$agent);
        self::$is_opera = !!preg_match('/Opera|OPR\//i', self::$agent);

        $_chromeAgent = !!preg_match('/ Chrome\/\d/', self::$agent);
        $_edgeAgent = !!preg_match('/ Edg[e|A|i]\/\d/i', self::$agent);
        self::$is_safari = !!preg_match('/ Safari\/\d/', self::$agent) && !$_chromeAgent;
        self::$is_chrome = ($_chromeAgent && !self::$is_opera && !self::$is_safari) && !$_edgeAgent;

        self::$is_mobile = (
            self::$is_android ||
            self::$is_blackberry ||
            self::$is_blackberry10 ||
            self::$is_edge_android ||
            self::$is_edge_ios ||
            self::$is_ipad ||
            self::$is_ipod ||
            self::$is_iphone ||
            self::$is_windows_phone
        );
        self::$is_desktop = !self::$is_mobile;
    }
}

// initial checkout
Browserizr::detect();
