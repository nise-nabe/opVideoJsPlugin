<?php

/**
 * videoComponents
 *
 * @package    OpenPNE
 * @subpackage components
 * @author     Yuya Watanabe <watanabe@openpne.jp>
 */
class videoComponents extends sfComponents
{
  /**
   * play
   *
   * example:
   *   include_component('video', 'play', array('filePath' => '/video.mp4'))
   */
  public function executePlay()
  {
    if (!isset($this->filePath))
    {
      $this->getLogger()->alert('no filePath was set.');
    }

    if ($this->filePath instanceof sfOutputEscaper)
    {
      $this->filePath = $this->filePath->getRawValue();
    }
  }
}
