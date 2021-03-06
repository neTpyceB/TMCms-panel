<?php

namespace TMCms\Admin\Users\Entity;

use TMCms\Orm\Entity;

/**
 * Class AdminUser
 * @package TMCms\Admin\Users\Entity
 *
 * @method int getFromUserId()
 * @method string getMessage()
 * @method int getToUserId()
 * @method int getTs()
 * @method bool getSeen()
 * @method $this setFromUserId(int $user_id)
 * @method $this setMessage(string $message)
 * @method $this setNotify(int $type_number)
 * @method $this setToUserId(int $user_id)
 * @method $this setTs(int $int)
 * @method $this setSeen(bool $flag)
 */
class UsersMessageEntity extends Entity
{
    protected $db_table = 'cms_users_messages';

    protected function beforeCreate()
    {
        $this->setTs(NOW);
    }
}