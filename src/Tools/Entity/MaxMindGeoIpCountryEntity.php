<?php
declare(strict_types=1);

namespace TMCms\Admin\Tools\Entity;

use TMCms\Orm\Entity;

class MaxMindGeoIpCountryEntity extends Entity
{
    protected $db_table = 'cms_maxmind_geoip_c';
}