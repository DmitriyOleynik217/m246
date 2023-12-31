<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace SR\Base\Model\Config\Source;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class ColorPicker extends Field
{
    /**
     * @param AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        $html = $element->getElementHtml();

        $html .= '<script type="text/x-magento-init">
                {
                    "#' . $element->getHtmlId() . '": {
                        "SR_Base/js/color-picker": {
                            "color":"' . $element->getData("value") . '"
                        }
                    }
                }
                </script>';

        return $html;
    }
}
