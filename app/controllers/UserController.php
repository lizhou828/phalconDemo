<?php
    class UserController extends ControllerBase{

        public function loginAction(){
            /*
             *  防止跨站点请求伪造攻击（Cross-Site Request Forgery (CSRF) protection）
             *  每次表单提交，都要检查 securityToken
             *  html页面如下代码所示:
             *      <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>" value="<?php echo $this->security->getToken() ?>"/>
             *  php中检查securityToken代码如下所示:
             */
            if ($this->request->isPost()) {
                if ($this->security->checkToken()) {
                    //The token is ok
                }
            }
        }
        /**
         * @Cache(lifetime=86400)
         */
        public function showAllAction(){
            $this->view->users = Users::find();
        }
        /**
         * @Cache(lifetime=86400)
         */
        public function showAllMnUserAction(){
            $this->view->users = MnUsers::find();
        }

    }

?>


