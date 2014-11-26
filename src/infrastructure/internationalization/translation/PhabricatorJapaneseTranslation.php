<?php

final class PhabricatorJapaneseTranslation
  extends PhabricatorBaseJapaneseTranslation {

  public function getName() {
    return 'Japanese';
  }

  public function getTranslations() {
    return
      PhabricatorEnv::getEnvConfig('translation.override') +
      parent::getTranslations();
  }
}
