<?php
/**
 * Created by user: virgil
 * on Date: 3/18/2016 and time: 1:38 PM
 */

namespace OnlineAdv\UsersBundle\Entity;

use FOS\UserBundle\Model\Group as BaseGroup;
use Doctrine\ORM\Mapping as ORM;

class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

}