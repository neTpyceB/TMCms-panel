<?php

use TMCms\Admin\Entity\LanguageEntity;
use TMCms\Admin\Messages;
use TMCms\Log\App;
use TMCms\Routing\Entity\PagesDomainEntity;
use TMCms\Routing\Entity\PagesDomainLanguageEntity;
use TMCms\Routing\Entity\PagesDomainLanguageEntityRepository;
use TMCms\Routing\Entity\PagesDomainUrlEntity;
use TMCms\Routing\Entity\PagesDomainUrlEntityRepository;
use TMCms\Routing\Structure;

defined('INC') or exit;

$domain = new PagesDomainEntity();
$domain->setName($_POST['name']);
$domain->save();

new PagesDomainUrlEntityRepository;
new PagesDomainLanguageEntityRepository;

if (isset($_POST['urls'])) {
    $_POST['urls'] = explode("\n", $_POST['urls']);
    foreach ($_POST['urls'] as $url) {
        $url_entity = new PagesDomainUrlEntity();
        $url_entity->setDomainId($domain->getId());
        $url_entity->setUrl($url);
        $url_entity->save();
    }
}

if (isset($_POST['languages'])) {
    foreach ($_POST['languages'] as $language) {
        $lng_entity = new PagesDomainLanguageEntity();
        $lng_entity->setDomainId($domain->getId());
        $lng_entity->setLanguage($language);
        $lng_entity->save();
    }
}

Structure::clearCache();

App::add('Domain "' . $domain->getName() . '" added');
Messages::sendGreenAlert('Domain "' . $domain->getName() . '" added');

go('?p=' . P . '&do=domains&highlight=' . $domain->getId());