<?php
    ini_set('include_path', ini_get('include_path').PATH_SEPARATOR.'../lib');
    require_once 'init.php';
    require_once 'data.php';
    require_once 'lib.forms.php';
    require_once 'lib.auth.php';

     /*asks to post a new form
    creates a new message in the messages table -- data.php -- with addmessage*/
    
    session_start();
    $dbh =& get_db_connection();
    remember_user($dbh);
    
    $user = cookied_user($dbh);
    $user_id = $user['id'];
    
    if($_POST['form_url'])
    {
        $added_form = add_form($dbh, $user_id);
        
        if(!empty($_POST['form_title']))
        {
            $added_form['title'] = $_POST['form_title'];
            set_form($dbh, $added_form);
        }
        
        $message = array('action' => 'import form',
                         'url' => $_POST['form_url'],
                         'form_id' => $added_form['id']);
            
        add_message($dbh, json_encode($message));
        
        $form_url = 'http://'.get_domain_name().get_base_dir().'/form.php?id='.urlencode($added_form['id']);
        header("Location: {$form_url}");
        
        exit();
    }

    $sm = get_smarty_instance();
    
    $type = $_GET['type'] ? $_GET['type'] : $_SERVER['HTTP_ACCEPT'];
    $type = get_preferred_type($type);
    
    if($type == 'text/html') {
        header("Content-Type: text/html; charset=UTF-8");
        print $sm->fetch("add-form.html.tpl");
    
    } else {
        header('HTTP/1.1 400');
        die("Unknown type.\n");
    }

?>