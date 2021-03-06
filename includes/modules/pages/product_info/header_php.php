<?php
/**
 * product_info header_php.php
 *
 * @package page
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 18697 2011-05-04 14:35:20Z wilt $
 */

  // This should be first line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_START_PRODUCT_INFO');

  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

  // ensure navigation snapshot in case must-be-logged-in-for-price is enabled
  if (!$_SESSION['customer_id']) {
    $_SESSION['navigation']->set_snapshot();
  }

  // This should be last line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_END_PRODUCT_INFO');
