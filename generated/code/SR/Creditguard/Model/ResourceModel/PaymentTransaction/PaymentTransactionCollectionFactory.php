<?php
namespace SR\Creditguard\Model\ResourceModel\PaymentTransaction;

/**
 * Factory class for @see \SR\Creditguard\Model\ResourceModel\PaymentTransaction\PaymentTransactionCollection
 */
class PaymentTransactionCollectionFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\SR\\Creditguard\\Model\\ResourceModel\\PaymentTransaction\\PaymentTransactionCollection')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \SR\Creditguard\Model\ResourceModel\PaymentTransaction\PaymentTransactionCollection
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
