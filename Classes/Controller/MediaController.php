<?php
namespace LO\MediaLo\Controller;

/***
 *
 * This file is part of the "Media LO" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mediaRepository
     *
     * @var \LO\MediaLo\Domain\Repository\MediaRepository
     * @inject
     */
    protected $mediaRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \LO\MediaLo\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\LO\MediaLo\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action recommand
     *
     * @return void
     */
    public function recommandAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
