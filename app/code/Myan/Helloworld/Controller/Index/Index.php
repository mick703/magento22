<?php
namespace Myan\Helloworld\Controller\Index;
use \Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;


class Index extends Action
{
  protected $resultJsonFactory;
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
  ) {
    $this->resultJsonFactory = $resultJsonFactory;
    parent::__construct($context);
  }

  /**
   * Execute action based on request and return result
   *
   * Note: Request will be added as operation argument in future
   *
   * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
   * @throws \Magento\Framework\Exception\NotFoundException
   */
  public function execute()
  {
    return $this->resultJsonFactory
      ->create()
      ->setData(['Hello' => 'World']);
  }
}