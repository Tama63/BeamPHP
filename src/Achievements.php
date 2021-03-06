<?php
/**
 * Achievements is part of the Beam API Library for PHP
 *
 * Achievements provides an interface for the /achievements/ endpoint of the Beam API
 *
 * @author Chris Ireland
 * @license MIT <http://opensource.org/licenses/MIT>
 */

namespace Tama63\Beam;


class Achievements extends Helper\Api
{

    const ACHIEVEMENTS_API = '/achievements/';

    /**
     * Return a list of all the achievements on Beam
     * <https://developer.beam.pro/api/achievement/find>
     *
     * @return mixed
     * @throws \Exception
     */
    public function find()
    {
        return $this->query(self::ACHIEVEMENTS_API);
    }

}