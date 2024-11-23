<?php

namespace Dynamic\Elements\Accordion\Model;

use DNADesign\Elemental\Forms\TextCheckboxGroupField;
use Dynamic\BaseObject\Model\BaseElementObject;
use Dynamic\Elements\Accordion\Elements\ElementAccordion;
use Exception;
use Psr\Container\NotFoundExceptionInterface;
use Sheadawson\Linkable\Forms\LinkField;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\Assets\Image;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Validation\ValidationException;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;
use SilverStripe\Security\Permission;

/**
 * Class AccordionPanel
 * @package Dynamic\Elements\Accordion\Model
 *
 * @property int $Sort
 *
 * @property int AccordionID
 * @method ElementAccordion Accordion()
 */
class AccordionPanel extends BaseElementObject
{
    /**
     * @var array
     */
    private static array $db = [
        'Sort' => 'Int',
    ];

    /**
     * @var array
     */
    private static array $has_one = [
        'Accordion' => ElementAccordion::class,
    ];

    /**
     * Show the panel $Title by default
     *
     * @var array
     */
    private static array $defaults = [
        'ShowTitle' => true,
    ];

    /**
     * @var string
     */
    private static string $default_sort = 'Sort';

    /**
     * @var string Database table name, default's to the fully qualified name
     */
    private static string $table_name = 'AccordionPanel';

    /**
     * @return FieldList
     * @throws Exception
     */
    public function getCMSFields(): FieldList
    {
        $this->beforeUpdateCMSFields(function ($fields) {
            /** @var FieldList $fields */
            $fields->removeByName([
                'Sort',
                'AccordionID',
            ]);

            $fields->dataFieldByName('Image')
                ->setFolderName('Uploads/Elements/Accordions');
        });

        return parent::getCMSFields();
    }

    /**
     * @return SiteTree|DataObject|null
     * @throws NotFoundExceptionInterface
     * @throws ValidationException
     */
    public function getPage(): DataObject|SiteTree|null
    {
        $page = null;

        if ($this->AccordionID) {
            if ($this->Accordion()->hasMethod('getPage')) {
                $page = $this->Accordion()->getPage();
            }
        }

        return $page;
    }
}
