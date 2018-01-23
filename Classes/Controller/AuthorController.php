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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * mediaRepository
     *
     * @var \LO\MediaLo\Domain\Repository\AuthorRepository
     * @inject
     */
    protected $authorRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \LO\MediaLo\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\LO\MediaLo\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
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
