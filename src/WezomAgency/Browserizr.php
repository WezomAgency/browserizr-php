<?php

namespace WezomAgency;


class Browserizr
{
    private static $instance = null;

    /** @return Browserizr */
    public static function detect()
    {
        if (self::$instance instanceof Browserizr) {
            return self::$instance;
        }
        self::$instance = new Browserizr();
        return self::$instance;
    }

    /** @var string */
    protected $agent = null;

    /** @param string $agent */
    public function setUserAgent($agent)
    {
        $this->agent = $agent;
    }

    /** @return string */
    public function getUserAgent()
    {
        if ($this->agent === null) {
            return $_SERVER['HTTP_USER_AGENT'];
        }
        return $this->agent;
    }


    /** @var bool */
    protected $is_android = null;

    /** @return bool */
    public function isAndroid()
    {
        if ($this->is_android === null) {
            $this->is_android = !!preg_match('/android/i', $this->getUserAgent());
        }
        return $this->is_android;
    }

    /** @var bool */
    protected $is_android3 = null;

    /** @return bool */
    public function isAndroid3()
    {
        if ($this->is_android3 === null) {
            $this->is_android3 = !!preg_match('/android 3/i', $this->getUserAgent());
        }
        return $this->is_android3;
    }

    /** @var bool */
    protected $is_android4 = null;

    /** @return bool */
    public function isAndroid4()
    {
        if ($this->is_android4 === null) {
            $this->is_android4 = !!preg_match('/android 4/i', $this->getUserAgent());
        }
        return $this->is_android4;
    }

    /** @var bool */
    protected $is_android5 = null;

    /** @return bool */
    public function isAndroid5()
    {
        if ($this->is_android5 === null) {
            $this->is_android5 = !!preg_match('/android 5/i', $this->getUserAgent());
        }
        return $this->is_android5;
    }

    /** @var bool */
    protected $is_android6 = null;

    /** @return bool */
    public function isAndroid6()
    {
        if ($this->is_android6 === null) {
            $this->is_android6 = !!preg_match('/android 6/i', $this->getUserAgent());
        }
        return $this->is_android6;
    }

    /** @var bool */
    protected $is_android7 = null;

    /** @return bool */
    public function isAndroid7()
    {
        if ($this->is_android7 === null) {
            $this->is_android7 = !!preg_match('/android 7/i', $this->getUserAgent());
        }
        return $this->is_android7;
    }

    /** @var bool */
    protected $is_android8 = null;

    /** @return bool */
    public function isAndroid8()
    {
        if ($this->is_android8 === null) {
            $this->is_android8 = !!preg_match('/android 8/i', $this->getUserAgent());
        }
        return $this->is_android8;
    }

    /** @var bool */
    protected $is_blackberry = null;

    /** @return bool */
    public function isBlackBerry()
    {
        if ($this->is_blackberry === null) {
            $this->is_blackberry = !!preg_match('/BlackBerry/i', $this->getUserAgent());
        }
        return $this->is_blackberry;
    }

    /** @var bool */
    protected $is_blackberry10 = null;

    /** @return bool */
    public function isBlackBerry10()
    {
        if ($this->is_blackberry10 === null) {
            $this->is_blackberry10 = !!preg_match('/BB10;/i', $this->getUserAgent());
        }
        return $this->is_blackberry10;
    }

    /** @var bool */
    protected $is_edge = null;

    /** @return bool */
    public function isEdge()
    {
        if ($this->is_edge === null) {
            $this->is_edge = !!preg_match('/ Edge\/\d/i', $this->getUserAgent());
        }
        return $this->is_edge;
    }

    /** @var bool */
    protected $is_edge_android = null;

    /** @return bool */
    public function isEdgeAndroid()
    {
        if ($this->is_edge_android === null) {
            $this->is_edge_android = !!preg_match('/\sEdgA\//i', $this->getUserAgent());
        }
        return $this->is_edge_android;
    }

    /** @var bool */
    protected $is_edge_ios = null;

    /** @return bool */
    public function isEdgeIOS()
    {
        if ($this->is_edge_ios === null) {
            $this->is_edge_ios = !!preg_match('/\sEdgiOS\//i', $this->getUserAgent());
        }
        return $this->is_edge_ios;
    }

    /** @var bool */
    protected $is_ie = null;

    /** @return bool */
    public function isIE()
    {
        if ($this->is_ie === null) {
            $this->is_ie = !!preg_match('/(MSIE|Trident)/i', $this->getUserAgent());
        }
        return $this->is_ie;
    }

    /** @var bool */
    protected $is_ie8 = null;

    /** @return bool */
    public function isIE8()
    {
        if ($this->is_ie8 === null) {
            $this->is_ie8 = !!preg_match('/MSIE 8\.\d/i', $this->getUserAgent());
        }
        return $this->is_ie8;
    }

    /** @var bool */
    protected $is_ie9 = null;

    /** @return bool */
    public function isIE9()
    {
        if ($this->is_ie9 === null) {
            $this->is_ie9 = !!preg_match('/MSIE 9\.\d/i', $this->getUserAgent());
        }
        return $this->is_ie9;
    }

    /** @var bool */
    protected $is_ie10 = null;

    /** @return bool */
    public function isIE10()
    {
        if ($this->is_ie10 === null) {
            $this->is_ie10 = !!preg_match('/MSIE 10\.\d/i', $this->getUserAgent());
        }
        return $this->is_ie10;
    }

    /** @var bool */
    protected $is_ie11 = null;

    /** @return bool */
    public function isIE11()
    {
        if ($this->is_ie11 === null) {
            $this->is_ie11 = !!preg_match('/Trident.*rv[ :]*11\./', $this->getUserAgent());
        }
        return $this->is_ie11;
    }

    /** @var bool */
    protected $is_ipad = null;

    /** @return bool */
    public function isIPad()
    {
        if ($this->is_ipad === null) {
            $this->is_ipad = !!preg_match('/iPad/i', $this->getUserAgent());
        }
        return $this->is_ipad;
    }

    /** @var bool */
    protected $is_ipod = null;

    /** @return bool */
    public function isIPod()
    {
        if ($this->is_ipod === null) {
            $this->is_ipod = !!preg_match('/iPod/i', $this->getUserAgent());
        }
        return $this->is_ipod;
    }

    /** @var bool */
    protected $is_iphone = null;

    /** @return bool */
    public function isIPhone()
    {
        if ($this->is_iphone === null) {
            $this->is_iphone = !!preg_match('/iPhone/i', $this->getUserAgent());
        }
        return $this->is_iphone;
    }

    /** @var bool */
    protected $is_windows_phone = null;

    /** @return bool */
    public function isWindowsPhone()
    {
        if ($this->is_windows_phone === null) {
            $this->is_windows_phone = !!preg_match('/Windows\sPhone/i', $this->getUserAgent());
        }
        return $this->is_windows_phone;
    }

    /** @var bool */
    protected $is_moz = null;

    /** @return bool */
    public function isMoz()
    {
        if ($this->is_moz === null) {
            $this->is_moz = !!preg_match('/ Firefox\//i', $this->getUserAgent());
        }
        return $this->is_moz;
    }

    /** @var bool */
    protected $is_opera = null;

    /** @return bool */
    public function isOpera()
    {
        if ($this->is_opera === null) {
            $this->is_opera = !!preg_match('/Opera|OPR\//i', $this->getUserAgent());
        }
        return $this->is_opera;
    }

    /** @var bool */
    protected $is_safari = null;

    /** @return bool */
    public function isSafari()
    {
        if ($this->is_safari === null) {
            $chromeAgent = !!preg_match('/ Chrome\/\d/', $this->getUserAgent());
            $this->is_safari = !!preg_match('/ Safari\/\d/', $this->getUserAgent()) && !$chromeAgent;
        }
        return $this->is_safari;
    }

    /** @var bool */
    protected $is_chrome = null;

    /** @return bool */
    public function isChrome()
    {
        if ($this->is_chrome === null) {
            $chromeAgent = !!preg_match('/ Chrome\/\d/', $this->getUserAgent());
            $this->is_chrome = (
                $chromeAgent &&
                !$this->isOpera() &&
                !$this->isSafari() &&
                !$this->isEdgeIOS() &&
                !$this->isEdgeAndroid() &&
                !$this->isEdgeIOS()
            );
        }
        return $this->is_chrome;
    }

    /** @var bool */
    protected $is_mobile = null;

    /** @return bool */
    public function isMobile()
    {
        if ($this->is_mobile === null) {
            $this->is_mobile = (
                $this->isAndroid() ||
                $this->isBlackBerry() ||
                $this->isBlackBerry10() ||
                $this->isIPad() ||
                $this->isIPod() ||
                $this->isIPhone() ||
                $this->isEdgeAndroid() ||
                $this->isEdgeIOS() ||
                $this->isWindowsPhone()
            );
        }
        return $this->is_mobile;
    }

    /** @var bool */
    protected $is_desktop = null;

    /** @return bool */
    public function isDesktop()
    {
        if ($this->is_desktop === null) {
            $this->is_desktop = !$this->isMobile();
        }
        return $this->is_desktop;
    }


    /**
     * Create array with CSS classes
     * @param string[] $tests
     * @param string $cssPrefix
     * @param bool $toString
     * @return string|string[]
     */
    public function cssClasses($tests, $cssPrefix = '', $toString = true)
    {
        $classes = [];
        foreach ($tests as $test) {
            $key = 'is' . $test;
            $prefix = $this->$key ? 'is-' : 'is-not-';
            array_push($classes, $cssPrefix . $prefix . strtolower($test));
        }

        if ($toString) {
            return implode(' ', $classes);
        }

        return $classes;
    }
}
