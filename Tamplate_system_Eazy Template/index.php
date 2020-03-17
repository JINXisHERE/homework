<?php
        //requier important files
        require_once('template.class.php');
        define('TEMPLATE_PATH', 'template');

        //instanciate a new onject
        $template = new Template(TEMPLATE_PATH.'/tpl.html');

        //file import... if there are any
        $what = file_get_contents('src/what.txt');
        $howto = file_get_contents('src/howTo.txt');
        $download = file_get_contents('src/Download.txt');


        //assign valuse
        $template->assign('title','Easy Template');
        $template->assign('text1',$what );
        $template->assign('text2',$howto);
        $template->assign('text3', $download);

        //show
        $template->show();
