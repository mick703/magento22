<?php
/**
 * Created by PhpStorm.
 * User: mingyan
 * Date: 11/8/18
 * Time: 9:14 PM
 */

namespace Myan\ApiDemo\Api\Data;
use Magento\Framework\Api\ExtensibleDataInterface;
/**
 * Interface Customer
 * @package Myan\ApiDemo\Api\Data
 * @api
 */
interface CustomerInterface extends ExtensibleDataInterface
{
  /**
   * Constants defined for keys of the data array.
   */
  const FIRST_NAME = 'firstName';
  const LAST_NAME = 'lastName';
  const EMAIL = 'email';
  const DOB = 'dob';
  const MAGENTO_ID = 'magentoId';

  /**
   * @return string|null
   */
  public function getFirstName();

  /**
   * @return string|null
   */
  public function getLastName();

  /**
   * @return string|null
   */
  public function getEmail();

  /**
   * @return string|null
   */
  public function getDob();

  /**
   * @return string|null
   */
  public function getMagentoId();

  /**
   * @param $firstName
   * @return $this
   */
  public function setFirstName($firstName);

  /**
   * @param $lastName
   * @return $this
   */
  public function setLastName($lastName);

  /**
   * @param $email
   * @return $this
   */
  public function setEmail($email);

  /**
   * @param $dob
   * @return $this
   */
  public function setDob($dob);

  /**
   * @param $magentoId
   * @return $this
   */
  public function setMagentoId($magentoId);


}