<?php

    require_once 'Smarty/Smarty.class.php';

   /**
    * @return   Smarty  Locally-usable Smarty instance.
    */
    function get_smarty_instance()
    {
        $s = new Smarty();

        $s->compile_dir = join(DIRECTORY_SEPARATOR, array(dirname(__FILE__), '..', 'templates', 'cache'));
        $s->cache_dir = join(DIRECTORY_SEPARATOR, array(dirname(__FILE__), '..', 'templates', 'cache'));

        $s->template_dir = join(DIRECTORY_SEPARATOR, array(dirname(__FILE__), '..', 'templates'));
        $s->config_dir = join(DIRECTORY_SEPARATOR, array(dirname(__FILE__), '..', 'templates'));
        
        $s->assign('domain', get_domain_name());
        $s->assign('base_dir', get_base_dir());
        $s->assign('base_href', get_base_href());
        $s->assign('constants', get_defined_constants());
        $s->assign('request', array('get' => $_GET));
        
        $s->register_modifier('nice_datetime', 'nice_datetime');
        $s->register_modifier('nice_degree', 'nice_degree');
        
        return $s;
    }
    
    function get_domain_name()
    {
        if(php_sapi_name() == 'cli')
            return CLI_DOMAIN_NAME;
        
        return $_SERVER['SERVER_NAME'];
    }
    
    function get_base_dir()
    {
        if(php_sapi_name() == 'cli')
            return CLI_BASE_DIRECTORY;
        
        return rtrim(dirname($_SERVER['SCRIPT_NAME']), DIRECTORY_SEPARATOR);
    }
    
    function get_base_href()
    {
        if(php_sapi_name() == 'cli')
            return '';
        
        $query_pos = strpos($_SERVER['REQUEST_URI'], '?');
        
        return ($query_pos === false) ? $_SERVER['REQUEST_URI']
                                      : substr($_SERVER['REQUEST_URI'], 0, $query_pos);
    }
    
    function nice_datetime($ts)
    {
        return date('D, M j Y, g:ia T', $ts);
    }
    
    function nice_degree($str, $axis)
    {
        if(is_numeric($str))
        {
            $val = floatval($str);
            
            $dir = $val;
            $val = abs($val);

            $deg = floor($val);
            $val = ($val - $deg) * 60;
            
            $min = floor($val);
            $val = ($val - $min) * 60;
            
            $sec = floor($val);
            
            if($axis == 'lat') {
                $dir = ($dir >= 0) ? 'N' : 'S';
            } else {
                $dir = ($dir >= 0) ? 'E' : 'W';
            }
            
            return sprintf('%d°%02d\'%02d"%s', $deg, $min, $sec, $dir);
        }

        return $str;
    }
    
    function die_with_code($code, $message)
    {
        header("HTTP/1.1 {$code}");
        die($message);
    }

?>