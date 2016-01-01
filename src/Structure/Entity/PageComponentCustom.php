<?php

namespace TMCms\Admin\Structure\Entity;

defined('INC') or exit;

use TMCms\Orm\Entity;

/**
 * Class PageComponentCustom
 * @package TMCms\Admin\Structure\Entity
 *
 * @method $this setComponent(string $component)
 * @method $this setName(string $name)
 * @method $this setOrder(int $order)
 * @method $this setPageId(int $id)
 * @method $this setTab(string $tab)
 * @method $this setValue(string $value)
 */
class PageComponentCustom extends Entity
{
    protected $db_table = 'cms_pages_components_custom';
}