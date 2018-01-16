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
 * Media
 */
class Media extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $image = null;

    /**
     * datePublicatio
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datePublicatio = null;

    /**
     * files
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $files = null;

    /**
     * avis
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Review>
     * @cascade remove
     * @lazy
     */
    protected $reviews = null;

    /**
     * Auteur
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Author>
     */
    protected $author = null;

    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Category>
     * @cascade remove
     */
    protected $categoies = null;

    /**
     * type
     *
     * @var \LO\MediaLo\Domain\Model\Type
     */
    protected $type = null;

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
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the datePublicatio
     *
     * @return \DateTime $datePublicatio
     */
    public function getDatePublicatio()
    {
        return $this->datePublicatio;
    }

    /**
     * Sets the datePublicatio
     *
     * @param \DateTime $datePublicatio
     * @return void
     */
    public function setDatePublicatio(\DateTime $datePublicatio)
    {
        $this->datePublicatio = $datePublicatio;
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
        $this->files = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->author = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categoies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Review
     *
     * @param \LO\MediaLo\Domain\Model\Review $review
     * @return void
     */
    public function addReview(\LO\MediaLo\Domain\Model\Review $review)
    {
        $this->reviews->attach($review);
    }

    /**
     * Removes a Review
     *
     * @param \LO\MediaLo\Domain\Model\Review $reviewToRemove The Review to be removed
     * @return void
     */
    public function removeReview(\LO\MediaLo\Domain\Model\Review $reviewToRemove)
    {
        $this->reviews->detach($reviewToRemove);
    }

    /**
     * Returns the reviews
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Review> $reviews
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Sets the reviews
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Review> $reviews
     * @return void
     */
    public function setReviews(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Adds a Author
     *
     * @param \LO\MediaLo\Domain\Model\Author $author
     * @return void
     */
    public function addAuthor(\LO\MediaLo\Domain\Model\Author $author)
    {
        $this->author->attach($author);
    }

    /**
     * Removes a Author
     *
     * @param \LO\MediaLo\Domain\Model\Author $authorToRemove The Author to be removed
     * @return void
     */
    public function removeAuthor(\LO\MediaLo\Domain\Model\Author $authorToRemove)
    {
        $this->author->detach($authorToRemove);
    }

    /**
     * Returns the author
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Author> $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Author> $author
     * @return void
     */
    public function setAuthor(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $author)
    {
        $this->author = $author;
    }

    /**
     * Adds a Category
     *
     * @param \LO\MediaLo\Domain\Model\Category $categoie
     * @return void
     */
    public function addCategoie(\LO\MediaLo\Domain\Model\Category $categoie)
    {
        $this->categoies->attach($categoie);
    }

    /**
     * Removes a Category
     *
     * @param \LO\MediaLo\Domain\Model\Category $categoieToRemove The Category to be removed
     * @return void
     */
    public function removeCategoie(\LO\MediaLo\Domain\Model\Category $categoieToRemove)
    {
        $this->categoies->detach($categoieToRemove);
    }

    /**
     * Returns the categoies
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Category> $categoies
     */
    public function getCategoies()
    {
        return $this->categoies;
    }

    /**
     * Sets the categoies
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LO\MediaLo\Domain\Model\Category> $categoies
     * @return void
     */
    public function setCategoies(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categoies)
    {
        $this->categoies = $categoies;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function addFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->files->attach($file);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove The FileReference to be removed
     * @return void
     */
    public function removeFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fileToRemove)
    {
        $this->files->detach($fileToRemove);
    }

    /**
     * Returns the files
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Sets the files
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $files
     * @return void
     */
    public function setFiles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $files)
    {
        $this->files = $files;
    }

    /**
     * Returns the type
     *
     * @return \LO\MediaLo\Domain\Model\Type $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \LO\MediaLo\Domain\Model\Type $type
     * @return void
     */
    public function setType(\LO\MediaLo\Domain\Model\Type $type)
    {
        $this->type = $type;
    }
}
