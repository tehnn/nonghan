<?php

class UserIdentity extends CUserIdentity {

    const ERROR_USER_NOTAUTH = -1;

    private $_id;

    public function authenticate() {

        $username = strtolower($this->username);
        $user = User::model()->find('LOWER(username)=?', array($username));

        if (empty($user)) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($user->password !== $this->password) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else if ($user->role === 'wait') {
            $this->errorCode = self::ERROR_USER_NOTAUTH;
        } else {

            $this->_id = $user->username;
            //$this->username = $user->username;
            
            $this->setState('prename', $user->prename);
            $this->setState('fname', $user->fname);
            $this->setState('type', $user->type);
            $this->setState('role', $user->role);
            $this->setState('company', $user->company);



            $this->errorCode = self::ERROR_NONE;

            //Update lastvisit
            $u = User::model()->findByPK($this->_id);
            $count = $u->count_login;
            $date = date("Y-m-d H:i:s");
            User::model()->updateByPk(array($this->_id), array('last_login' => $date));
            User::model()->updateByPk(array($this->_id), array('count_login' => $count + 1));
        }
        
        return !$this->errorCode;
    }

    public function getId() {
        return $this->_id;
    }

}