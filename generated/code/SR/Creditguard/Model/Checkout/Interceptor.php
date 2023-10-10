<?php
namespace SR\Creditguard\Model\Checkout;

/**
 * Interceptor class for @see \SR\Creditguard\Model\Checkout
 */
class Interceptor extends \SR\Creditguard\Model\Checkout implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Checkout\Helper\Data $checkoutData, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \SR\Creditguard\Model\Api\Type\Factory $apiTypeFactory, \SR\Creditguard\Gateway\Config\Config $config, \Magento\Sales\Model\ResourceModel\Order $orderResource, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, \Magento\Vault\Api\PaymentTokenManagementInterface $paymentTokenManager, \Magento\Framework\Event\ManagerInterface $eventManager, \SR\Creditguard\Helper\Form\Field\Installments $installmentsFormFieldHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($dataObjectHelper, $checkoutData, $checkoutSession, $customerSession, $quoteManagement, $quoteRepository, $apiTypeFactory, $config, $orderResource, $orderSender, $paymentTokenManager, $eventManager, $installmentsFormFieldHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getIframeFormSrc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIframeFormSrc');
        return $pluginInfo ? $this->___callPlugins('getIframeFormSrc', func_get_args(), $pluginInfo) : parent::getIframeFormSrc();
    }

    /**
     * {@inheritdoc}
     */
    public function placeWithRegularFlow($transId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeWithRegularFlow');
        return $pluginInfo ? $this->___callPlugins('placeWithRegularFlow', func_get_args(), $pluginInfo) : parent::placeWithRegularFlow($transId);
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeOrder');
        return $pluginInfo ? $this->___callPlugins('placeOrder', func_get_args(), $pluginInfo) : parent::placeOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutMethod() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutMethod');
        return $pluginInfo ? $this->___callPlugins('getCheckoutMethod', func_get_args(), $pluginInfo) : parent::getCheckoutMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrderBefore(\Magento\Quote\Model\Quote $quote) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeOrderBefore');
        $pluginInfo ? $this->___callPlugins('placeOrderBefore', func_get_args(), $pluginInfo) : parent::placeOrderBefore($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrderAfter(\Magento\Sales\Model\Order $order) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeOrderAfter');
        $pluginInfo ? $this->___callPlugins('placeOrderAfter', func_get_args(), $pluginInfo) : parent::placeOrderAfter($order);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareTerminalType(string $defaultType = 'regular') : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareTerminalType');
        return $pluginInfo ? $this->___callPlugins('prepareTerminalType', func_get_args(), $pluginInfo) : parent::prepareTerminalType($defaultType);
    }

    /**
     * {@inheritdoc}
     */
    public function getNumberOfPayments() : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNumberOfPayments');
        return $pluginInfo ? $this->___callPlugins('getNumberOfPayments', func_get_args(), $pluginInfo) : parent::getNumberOfPayments();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote() : \Magento\Quote\Model\Quote
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        return $pluginInfo ? $this->___callPlugins('getQuote', func_get_args(), $pluginInfo) : parent::getQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function areInstallmentsAvailable() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'areInstallmentsAvailable');
        return $pluginInfo ? $this->___callPlugins('areInstallmentsAvailable', func_get_args(), $pluginInfo) : parent::areInstallmentsAvailable();
    }

    /**
     * {@inheritdoc}
     */
    public function prepareQuote(array $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareQuote');
        return $pluginInfo ? $this->___callPlugins('prepareQuote', func_get_args(), $pluginInfo) : parent::prepareQuote($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditType() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreditType');
        return $pluginInfo ? $this->___callPlugins('getCreditType', func_get_args(), $pluginInfo) : parent::getCreditType();
    }

    /**
     * {@inheritdoc}
     */
    public function calculatePaymentInstallments() : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calculatePaymentInstallments');
        $pluginInfo ? $this->___callPlugins('calculatePaymentInstallments', func_get_args(), $pluginInfo) : parent::calculatePaymentInstallments();
    }

    /**
     * {@inheritdoc}
     */
    public function canCcBeSaved($storeId = null) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCcBeSaved');
        return $pluginInfo ? $this->___callPlugins('canCcBeSaved', func_get_args(), $pluginInfo) : parent::canCcBeSaved($storeId);
    }
}
