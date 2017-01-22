<?php
/**
 * products_new
 *
 * @package page
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: $
 */
if (MAX_DISPLAY_PRODUCTS_NEW > 0 )
{
    $qb = new ZenCart\QueryBuilder\QueryBuilder($db);
    $modelFactory = new App\Model\ModelFactory($db, $capsule);
    $box = new ZenCart\ListingQueryAndOutput\definitions\NewProductsPage($zcRequest, $modelFactory);
    $paginator = new ZenCart\Paginator\Paginator($zcRequest);
 //   $paginator->setScrollerParams(array('cmd'=>'index'));
    $builder = new ZenCart\QueryBuilder\PaginatorBuilder($zcRequest, $box->getListingQuery(), $paginator);
    $box->buildResults($qb, $db, new ZenCart\QueryBuilder\DerivedItemManager, $builder->getPaginator());
    $tplVars['listingBox'] = $box->getTplVars();
    require($template->get_template_dir('tpl_product_listing_standard.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_product_listing_standard.php');
}
