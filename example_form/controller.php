<?php
namespace Concrete\Package\ExampleForm;

use Concrete\Core\Package\Package;
use BlockType;
use BlockTypeSet;
use Route;

class Controller extends Package
{
    /**
     * Package handle
     */
    protected $pkgHandle = 'example_form';
    
    /**
     * Required concrete5 version
     */
    protected $appVersionRequired = '5.7.5';
    
    /**
     * Package version
     */
    protected $pkgVersion = '0.1';
    
    /**
     * Autoload additional components
     */
    protected $pkgAutoloaderRegistries = array(
        'src/Acme' => 'Acme',
    );

    /**
     * @inherit
     */
    public function getPackageDescription()
    {
        return t('Just an example.');
    }

    /**
     * @inherit
     */
    public function getPackageName()
    {
        return t('Example Form Package');
    }

    /**
     * @inherit
     */
    public function install()
    {
        /**
         * Install a new block type via this Package
         * @var \Concrete\Package\ExampleForm\Controller $pkg
         */
        $pkg = parent::install();
        BlockType::installBlockType('form_example', $pkg);
    }
}
