<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2019 (original work) JPR;
 *               
 * 
 */

namespace Wiquid\miniext\controller;

use core_kernel_classes_Class;
use oat\generis\model\user\UserRdf;
use oat\oatbox\PhpSerializable;
use oat\tao\model\accessControl\ActionResolver;
use oat\oatbox\user\User;
use oat\taoOutcomeUi\controller\Results;
use oat\taoOutcomeUi\model\ResultsService;

//print_r(get_declared_classes());
/**
 * Sample controller
 *
 * @author JPR
 * @package miniext
 * @license GPL-2.0
 *
 */

class Miniext extends \tao_actions_CommonModule {

    /**
     * initialize the services
     */
    public function __construct(){
        parent::__construct();
    }

    /**
     * A possible entry point to tao
     */
    public function index() {
        
        
    }

    public function templateExample() {
       
        
        $class_methods = get_class_methods(\common_Session_SessionManager::getSession());
        Echo "<br>Comment avoir les methodes d'une classe ?<br>";
        foreach ($class_methods as $method_name) {
            echo "$method_name.<br>";
        }


        $user = \common_Session_SessionManager::getSession()->getUser();
        $classUri = $user->getPropertyValues(UserRdf::CLASS_URI);
        $login = $user->getPropertyValues(UserRdf::PROPERTY_LOGIN);
        $password = $user->getPropertyValues(UserRdf::PROPERTY_PASSWORD);
        $firstName = $user->getPropertyValues(UserRdf::PROPERTY_FIRSTNAME);
        $lastName = $user->getPropertyValues(UserRdf::PROPERTY_LASTNAME);
        $uilg = $user->getPropertyValues(UserRdf::PROPERTY_UILG);
        $deflg = $user->getPropertyValues(UserRdf::PROPERTY_DEFLG);
        $mail = $user->getPropertyValues(UserRdf::PROPERTY_MAIL);
        $firstName = $user->getPropertyValues(UserRdf::PROPERTY_FIRSTNAME);
        $lastName = $user->getPropertyValues(UserRdf::PROPERTY_LASTNAME);
        $role = $user->getPropertyValues(UserRdf::PROPERTY_ROLES);
        $timeZone = $user->getPropertyValues(UserRdf::PROPERTY_TIMEZONE);

        $userUri = \common_Session_SessionManager::getSession()->getUserUri();
        //var_dump($userUri);

        /* echo $logJP[0]."<br>";
        echo $FNJP[0]."<br>";
        echo $LNJP[0]."<br>"; */

        $this->setData('firstName', $firstName[0]);
        //$this->setData('classUri',$classUri[0]);
        $this->setData('login',$login[0]);
        $this->setData('password',$password[0]);
        $this->setData('firstName',$firstName[0]);
        $this->setData('lastName',$lastName[0]);
        $this->setData('uilg',$uilg[0]);
        $this->setData('deflg',$deflg[0]);
        $this->setData('mail',$mail[0]);
        $this->setData('firstName',$firstName[0]);
        $this->setData('lastName',$lastName[0]);
        $this->setData('role',$role[0]);
        $this->setData('timeZone',$timeZone[0]);
        $this->setView('Miniext/templateExample.tpl');
    }

     public function templatebis() {
       
        $this->setData('author', "Toto");
        $this->setView('Miniext/templatebis.tpl');
    }
}