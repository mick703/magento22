<?php
/**
 * Created by PhpStorm.
 * User: mingyan
 * Date: 11/8/18
 * Time: 9:09 PM
 */

namespace Myan\ApiDemo\Api;

/**
 * Interface CustomerManagementInterface
 * @package Myan\ApiDemo\Api
 * @api
 */
interface CustomerManagementInterface
{
  /**
   * @param string $email
   * @return \Myan\ApiDemo\Api\Data\CustomerInterface
   */
  public function getCustomerByEmail($email);
}