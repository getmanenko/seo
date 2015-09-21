<?php
/**
 * Created by PhpStorm.
 * User: molodyko
 * Date: 20.09.2015
 * Time: 12:45
 */

namespace samson\cms\seo\schema;

/**
 * Class Main
 * Store all common fields between schemas and is main structure of seo module
 * @package samson\cms\seo\schema
 */
class Main extends Schema{

    /** @var string Name of structure */
    public $structureName = 'SEO';

    /** @var string Url of structure */
    public $structureUrl = '_seo_structure';

    /** @var array Unique fields of schema */
    public $fields = array(
        array(
            'Name' => '__SEO_Title',
            'Description' => 'Заголовок',
            'Type' => '0',
        ),
        array(
            'Name' => '__SEO_Description',
            'Description' => 'Описание',
            'Type' => '0',
        ),
        array(
            'Name' => '__SEO_Image',
            'Description' => 'Картинка',
            'Type' => '1',
        ),
        array(
            'Name' => '__SEO_Url',
            'Description' => 'Url',
            'Type' => '0',
        ),
        array(
            'Name' => '__SEO_SiteName',
            'Description' => 'Имя сайта',
            'Type' => '0',
        ),
        array(
            'Name' => '__SEO_Creator',
            'Description' => 'Автор',
            'Type' => '0',
        ),
    );
}