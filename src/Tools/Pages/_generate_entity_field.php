<?php
declare(strict_types=1);

use TMCms\Files\FileSystem;
use TMCms\Orm\TableStructure;

defined('INC') or exit;

if (!$_POST['module_name']) {
    error('Module name require');
}

$module_name = $_POST['module_name'];

if (!$_POST['entity_name']) {
    error('Entity name require');
}

$entity_name = $_POST['entity_name'];

if (!$_POST['field_type']) {
    error('Field type require');
}

$field_type = TableStructure::FIELD_TYPES_AVAILABLE[$_POST['field_type']];

if (!$_POST['field_name']) {
    error('Field name require');
}

$field_name = $_POST['field_name'];

// TODO 

back();
