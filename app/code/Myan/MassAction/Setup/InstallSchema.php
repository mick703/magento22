<?php
/**
 * Created by PhpStorm.
 * User: mingyan
 * Date: 10/11/18
 * Time: 10:54 PM
 */

namespace Myan\MassAction\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{


  /**
   * Installs DB schema for a module
   *
   * @param SchemaSetupInterface $setup
   * @param ModuleContextInterface $context
   * @return void
   */
  public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
  {
    $setup->startSetup();

    $table = $setup->getConnection()->newTable(
      $setup->getTable('myan_masssaction_requests')
    )->addColumn(
      'id',
      \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
      null,
      ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
      'Request Id'
    )->addColumn(
      'staff_email',
      \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
      255,
      [],
      'Staff email'
    )->addColumn(
      'status',
      \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
      128,
      ['nullable' => false, 'default' => 'pending'],
      'request status'
    )->addColumn(
      'created_at',
      \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
      null,
      ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
      'Created at timestamp'
    )->addColumn(
      'sent_at',
      \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
      null,
      [],
      'Request sent timestamp'
    )->addColumn(
      'order_ids',
      \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
      null,
      ['nullable' => false],
      'Order ids requested'
    )->addIndex(
      $setup->getIdxName('myan_massaction_requests_status', ['status']),
      ['status']
    );

    $setup->getConnection()->createTable($table);

    $setup->endSetup();

  }
}