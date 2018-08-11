<?php
/**
 * Created by PhpStorm.
 * User: mingyan
 * Date: 11/8/18
 * Time: 10:13 PM
 */

namespace Myan\ApiDemo\Model;

use Magento\Customer\Model\ResourceModel\CustomerRepository;
use Myan\ApiDemo\Model\Data\Customer;

class CustomerManagement implements \Myan\ApiDemo\Api\CustomerManagementInterface
{
  protected $customerRepository;

  public function __construct(
    CustomerRepository $customerRepository
  )
  {
    $this->customerRepository = $customerRepository;

  }
  /**
   * @param string $email
   * @return \Myan\ApiDemo\Api\Data\CustomerInterface
   */
  public function getCustomerByEmail($email)
  {
    $customer = new Customer();

    //Get customer by email in Magento
    $mageCustomer = $this->customerRepository->get($email, null);
    $customer->setFirstName($mageCustomer->getFirstname());
    $customer->setLastName($mageCustomer->getLastname());
    $customer->setEmail($mageCustomer->getEmail());
    $dob = $mageCustomer->getDob();
    if (!empty($dob)) {
      $customer->setDob($dob);
    }

    $customer->setMagentoId($mageCustomer->getId());

    return $customer;
  }
}