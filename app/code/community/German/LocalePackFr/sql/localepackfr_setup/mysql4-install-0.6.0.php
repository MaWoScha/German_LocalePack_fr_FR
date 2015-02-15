<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>  
 * @version   0.6.0.
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
$installer = $this;

$installer->startSetup();

$blockContent = <<<EOD
Si vous avez des questions, n'hésitez pas à nous contacter à l'adresse
par email <a href="mailto:{{var store_email}}">{{var store_email}}</a>,
par téléphone au <a href="tel:{{var store_phone}}">{{var store_phone}}</a>,
via <a title="Mon service-site sur Skype" href="skype:my.shop?chat" target="_blank">Skype Chat</a> (Nom d'utilisateur: my.shop)
ou sur notre Facebook <a title="Mon Fanpage dans Facebook" href="http://www.facebook.com/my.shop" target="_blank">Mon Fanpage</a>.
EOD;

$storeId = 7;

$staticBlocks = array(
    array(
        'title'         => 'eMail Template Say Hello (fr)',
        'identifier'    => 'email_template_say_hello',
        'content'       => 'Bonjour, Chère/Cher,',
        'is_active'     => 0,
        'stores'        => array($storeId)
    ),
    array(
        'title'         => 'eMail Template Contact (fr)',
        'identifier'    => 'email_template_contact',
        'content'       => $blockContent,
        'is_active'     => 0,
        'stores'        => array($storeId)
    ),
    array(
        'title'         => 'eMail Template Say Bye (fr)',
        'identifier'    => 'email_template_say_bye',
        'content'       => 'Merci encore de votre confiance!',
        'is_active'     => 0,
        'stores'        => array($storeId)
    )
);

/**
 * Insert default blocks
 */
foreach ($staticBlocks as $data) {
    try {
        Mage::getModel('cms/block')->setData($data)->save();
    } catch (Exception $e) {
        # To prevent exception "A block identifier with the same properties already exists
        # in the selected store." in "app:code:core:Mage:Cms:Model:Resource:Block.php"
#        throw new Exception("Oops, mi error in FR German LocalePack");
    }
}

$installer->endSetup();

?>
