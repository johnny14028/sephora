<?php

// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Core\SecurityBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Core\SecurityBundle\Entity\Config;

class LoadConfigData extends AbstractFixture implements OrderedFixtureInterface {

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager) {
        $configurations = array(
            array('chr_variable' => 'release', 'chr_value' => '1.0'),
            array('chr_variable' => 'supportName', 'chr_value' => 'Johnny Huamani Palomino'),
            array('chr_variable' => 'supportEmail', 'chr_value' => 'johnny1402@gmail.com'),
            array('chr_variable' => 'Theme', 'chr_value' => 'Default'),
        );
        foreach ($configurations as $configs) {
            $objConfig = new Config();
            $objConfig->setChrName($configs['chr_variable']);
            $objConfig->setChrValue($configs['chr_value']);
            $manager->persist($objConfig);
        }
        $manager->flush();
        //$this->addReference('admin-user', $userAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}
