<?php

class LoginForm extends sfForm {

    public function configure() {
        $this->setWidgets(array(
            'Username' => new sfWidgetFormInputText(array(), array(
                'name' => 'txtUsername',
                'id' => 'txtUsername',
                'placeholder' => 'User Name',
            )),
            'Password' => new sfWidgetFormInputPassword(array(), array(
                'name' => 'txtPassword',
                'id' => 'txtPassword',
                'placeholder' => 'Password',
            )),
        ));
    }

}

