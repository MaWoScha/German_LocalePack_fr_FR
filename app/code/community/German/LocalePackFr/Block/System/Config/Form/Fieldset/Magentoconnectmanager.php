<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha
 * @developer MaWoScha
 * @version   0.3.0
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
        $html .= "<ol style='list-style-position: outside; list-style-type: decimal; margin-left:18px;'>";
        $html .= "<li>".$helper->__('In your Magento root directory in the subfolder "%s" rename the folder "%s" into "%s".',
                "/downloader",
                "template",
                "template_original" );
        $html .= "</li>";
        $html .= "<li>".$helper->__("The directory");
        $html .= "<ul style='list-style-position: outside; list-style-type: disc; margin-left:18px;'>";
        $html .= '<li>"template_fr" '.$helper->__("or").'</li>';
        $html .= '<li>"'.$helper->__("from").' Magento 1.5.x "template_fr_1.5" '.$helper->__("or").'</li>';
        $html .= '<li>"'.$helper->__("from").' Magento 1.7.x "template_fr_1.7"</li></ul>';
        $html .= $helper->__('rename into "template"').'.</li>';
        $html .= "</ol>";
        $html .= "<p>".$helper->__("The Magento Connect Manager should be changed to French now.")."</p>";
        $html .= "<p><strong style='font-weight: bold; color:red; margin-top:20pt;'>";
        $html .= $helper->__("Please note:")."</strong> ".$helper->__('If Magento is updated, in particular the module "Mage_Downloader", the settings of the Connect Manager will be overwritten!')."<br />";
        $html .= $helper->__('The same applies to the TinyMCE editor. Run in the case a "Reinstall" the language pack and repeat the described steps.')."</p>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
