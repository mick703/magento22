<?php
/**
 * Created by PhpStorm.
 * User: mingyan
 * Date: 11/8/18
 * Time: 10:15 PM
 */
namespace Myan\ApiDemo\Model\Data;
use Magento\Framework\Api\AbstractSimpleObject;
use Myan\ApiDemo\Api\Data\CustomerInterface;

class Customer extends AbstractSimpleObject implements CustomerInterface
{
  /**
   * @return string|null
   */
  public function getFirstName()
  {
    return $this->_get(self::FIRST_NAME);
  }

  /**
   * @return string|null
   */
  public function getLastName()
  {
    return $this->_get(self::LAST_NAME);
  }

  /**
   * @return string|null
   */
  public function getEmail()
  {
    return $this->_get(self::EMAIL);
  }

  /**
   * @return string|null
   */
  public function getDob()
  {
    return $this->_get(self::DOB);
  }

  /**
   * @return int|null
   */
  public function getMagentoId()
  {
    return $this->_get(self::MAGENTO_ID);
  }
  /**
   * @param $firstName
   * @return $this
   */
  public function setFirstName($firstName)
  {
    return $this->setData(self::FIRST_NAME, $firstName);
  }

  /**
   * @param $lastName
   * @return $this
   */
  public function setLastName($lastName)
  {
    return $this->setData(self::LAST_NAME, $lastName);
  }

  /**
   * @param $email
   * @return $this
   */
  public function setEmail($email)
  {
    return $this->setData(self::EMAIL, $email);
  }

  /**
   * @param $dob
   * @return $this
   */
  public function setDob($dob)
  {
    return $this->setData(self::DOB, $dob);
  }

  /**
   * @param $magentoId
   * @return $this
   */
  public function setMagentoId($magentoId)
  {
    return $this->setData(self::MAGENTO_ID, $magentoId);
  }

}
