<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackFr_Block_System_Config_Form_Fieldset_Magentoconnectmanager
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $helper = Mage::helper("localepackfr");

        $html  = $this->_getHeaderHtml($element);
        $html .= "<p style='font-weight:bold;'>".$helper->__("To install the translation for the Magento Connect Manager, proceed as follows:")."</p>";
        $html .= "<p>".$helper->__("Currently not available")."</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
