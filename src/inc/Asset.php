<?php


/**
 * Project: CookieCons
 * Description: CookieCons is a simple and lightweight cookie consent manager for WordPress.
 * Version: 1.0.0
 * Version Code: 1
 * Author: Md. Ashraful Alam Shemul
 * Email: ceo@stechbd.net
 * Website: https://project.stechbd.net/cookiecons/
 * Developer: S Technologies Limited
 * Homepage: https://www.stechbd.net
 * Contact: product@stechbd.net
 * Created: June 29, 2023
 * Updated: June 30, 2023
 */


namespace STechBD\CookieCons;

/**
 * The asset loader class.
 */
class Asset
{
    public function __construct()
    {
        $this -> register();
    }
    
    public function style(): array
    {
        return 
        [
            'st-cookiecons-style'    =>    
            [
                'src'        =>    ST_COOKIECONS_SITE_CSS . 'stechbd-cookiecons.css',
                'dependency'    =>    false,
                'version'        =>    filemtime(ST_COOKIECONS_CSS . 'stechbd-cookiecons.css')
            ]
        ];
    }
    
    public function script(): array
    {
        return 
        [
            'st-cookiecons-script'    =>    
            [
                'src'        =>    ST_COOKIECONS_SITE_JS . 'stechbd-cookiecons.js',
                'dependency'    =>    'jquery',
                'version'        =>    filemtime(ST_COOKIECONS_JS . 'stechbd-cookiecons.js')
            ]
        ];
    }
    
    public function register(): void
    {
        $style = $this -> style();
        $script = $this -> script();
        
        foreach ($style as $name => $value)
        {
            wp_register_style($name, $value['src'], $value['dependency'], $value['version']);
        }
        
        foreach ($script as $name => $value)
        {
            wp_register_script($name, $value['src'], $value['dependency'], $value['version']);
        }
    }
}