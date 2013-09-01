<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * page module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         page
 * @since           2.6.0
 * @author          DuGris (aka Laurent JEN)
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

class Page extends Xoops_Module_Helper_Abstract
{
    /**
     * Init the module
     *
     * @return null|void
     */
    public function init()
    {
        $this->setDirname('page');
    }

    /**
     * @return Page
     */
    static function getInstance()
    {
        return parent::getInstance();
    }

    /**
     * @return PagePage_contentHandler
     */
    public function getContentHandler()
    {
    }

    /**
     * @return PagePage_ratingHandler
     */
    public function getRatingHandler()
    {
        return $this->getHandler('page_rating');
    }

    /**
     * @return PagePage_relatedHandler
     */
    public function getRelatedHandler()
    {
        return $this->getHandler('page_related');
    }

    /**
     * @return PagePage_relatedHandler
     */
    public function getLinkHandler()
    {
        return $this->getHandler('page_related_link');
    }

    /**
     * @return PublisherGrouppermHandler
     */
    public function getGrouppermHandler()
    {
        return $this->getHandler('groupperm');
    }

    public function getUserId()
    {
        }
        return 0;
    }
}