<?php

// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Core\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Core\SecurityBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $arrayUsers = array(
            array('chr_username' => 'admin', 'chr_password' => 'admin', 'int_confirmed' => 1, 'int_deleted' => 0, 'int_suspended' => 0,
                'chr_name' => 'Johnny', 'chr_lastname' => 'Huamani Palomino', 'chr_email' => 'johnny1402@gmail.com', 'chr_phone' => '987517190',
                'int_firstaccess' => 0, 'int_lastaccess' => 0, 'int_lastlogin' => 0, 'int_timecreated' => strtotime(date("Y-m-d H:i:s")),
                'int_timemodified' => 0),
            array('chr_username' => 'guest', 'chr_password' => 'guest', 'int_confirmed' => 1, 'int_deleted' => 0, 'int_suspended' => 0,
                'chr_name' => 'Guest', 'chr_lastname' => '', 'chr_email' => 'root@localhost', 'chr_phone' => '',
                'int_firstaccess' => 0, 'int_lastaccess' => 0, 'int_lastlogin' => 0, 'int_timecreated' => strtotime(date("Y-m-d H:i:s")),
                'int_timemodified' => 0)
        );
        foreach ($arrayUsers as $arrayUser) {
            $objUser = new User();
            $objUser->setChrUsername($arrayUser['chr_username']);
            $objUser->setChrPassword($arrayUser['chr_password']);
            $objUser->setIntConfirmed($arrayUser['int_confirmed']);
            $objUser->setIntDeleted($arrayUser['int_deleted']);
            $objUser->setIntSuspended($arrayUser['int_suspended']);
            $objUser->setChrName($arrayUser['chr_name']);
            $objUser->setChrLastname($arrayUser['chr_lastname']);
            $objUser->setChrEmail($arrayUser['chr_email']);
            $objUser->setChrPhone($arrayUser['chr_phone']);
            $objUser->setIntFirstaccess($arrayUser['int_firstaccess']);
            $objUser->setIntLastaccess($arrayUser['int_lastaccess']);
            $objUser->setIntLastlogin($arrayUser['int_lastlogin']);
            $objUser->setIntTimecreated($arrayUser['int_timecreated']);
            $objUser->setIntTimemodified($arrayUser['int_timemodified']);
            $manager->persist($objUser);
        }
        $manager->flush();        
//        $userAdmin = new User();
//        $userAdmin->setUsername('admin');
//        $userAdmin->setPassword('test');
//
//        $manager->persist($userAdmin);
//        $manager->flush();

        //$this->addReference('admin-user', $userAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 2; // the order in which fixtures will be loaded
    }

}
