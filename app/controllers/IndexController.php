<?php

class IndexController extends ControllerBase{

    public function indexAction(){
        $this->flash->success("The post was correctly saved!");

//        $this->cookies->set('remember-me', 'some value', time() + 15 * 86400);
        $this->view->welcomeWords = "Hello world!(They are come from IndexController.indexAction().....)";

        $value =null;
        //Check if the cookie has previously set
        if ($this->cookies->has('remember-me')) {
            //Get the cookie
            $rememberMe = $this->cookies->get('remember-me');
            //Get the cookie's value
            $value = $rememberMe->getValue();
        }
        $this->view->value= $value;

        //Set a session variable
        $this->session->set("user-name", "Michael");
        $name = nul;
        //Check if the variable is defined
        if ($this->session->has("user-name")) {
            //Retrieve its value
            $name = $this->session->get("user-name");
            //Remove a session variable
//            $this->session->remove("user-name");
            //Destroy the whole session
//            $this->session->destroy();
        }
        $this->view->name= $name;

    }

}

