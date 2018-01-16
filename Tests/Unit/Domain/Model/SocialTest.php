<?php
namespace LO\MediaLo\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \LO\MediaLo\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \LO\MediaLo\Domain\Model\Social();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccountNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccountName()
        );
    }

    /**
     * @test
     */
    public function setAccountNameForStringSetsAccountName()
    {
        $this->subject->setAccountName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accountName',
            $this->subject
        );
    }
}
