<?php
namespace Asimov\Solaria\Modules\PhoneCodes;

use Asimov\Solaria\Modules\PhoneCodes\Models\PhoneCodeCity;
use Asimov\Solaria\Modules\PhoneCodes\Models\PhoneCodeCountry;
use Solaria\Modules\SolariaModule;

class PhoneCodes implements SolariaModule {

    protected $name = 'PhoneCodes';

    protected $menu_name = 'PhoneCodes';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/phone-codes');
    }

    public function getBackendStyles() {
        return [asset('modules/phone-codes/css/phone-codes-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/phone-codes/js/phone-codes-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        // TODO: Implement render() method.
    }
}