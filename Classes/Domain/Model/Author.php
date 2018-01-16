<?php
namespace LO\MediaLo\Domain\Model;

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
 * Auteur
 */
class Author extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * bio
     *
     * @var string
     */
    protected $bio = '';

    /**
     * pictures
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $pictures = null;

    /**
     * Réseaux sociaux
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Social>
     * @cascade remove
     * @lazy
     */
    protected $socials = null;

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the bio
     *
     * @return string $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Sets the bio
     *
     * @param string $bio
     * @return void
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * Returns the pictures
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     */
    public function getPictures()
    {
        return $this->pictures;
    }

    /**
     * Sets the pictures
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures
     * @return void
     */
    public function setPictures(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pictures)
    {
        $this->pictures = $pictures;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->socials = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Social
     *
     * @param \LO\MediaLo\Domain\Model\Social $social
     * @return void
     */
    public function addSocial(\LO\MediaLo\Domain\Model\Social $social)
    {
        $this->socials->attach($social);
    }

    /**
     * Removes a Social
     *
     * @param \LO\MediaLo\Domain\Model\Social $socialToRemove The Social to be removed
     * @return void
     */
    public function removeSocial(\LO\MediaLo\Domain\Model\Social $socialToRemove)
    {
        $this->socials->detach($socialToRemove);
    }

    /**
     * Returns the socials
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Social> $socials
     */
    public function getSocials()
    {
        return $this->socials;
    }

    /**
     * Sets the socials
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Social> $socials
     * @return void
     */
    public function setSocials(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $socials)
    {
        $this->socials = $socials;
    }
}
