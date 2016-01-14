<?php

namespace Asimov\Solaria\Modules\PhoneCodes\Http\Controllers;

use Asimov\Solaria\Modules\PhoneCodes\Models\PhoneCodeCity;
use Asimov\Solaria\Modules\PhoneCodes\Models\PhoneCodeCountry;
use Illuminate\Http\Request;
use Solaria\Http\Controllers\Backend\BackendController;
use Solaria\Models\User;
use Solaria\Models\Widget\Field;

class PhoneCodesController extends BackendController {

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex(){
        
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getCities(Request $request, $phone_code_country_id){
        
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postSaveCity(Request $request){
        
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function postSaveCountry(Request $request){
        
    }

    /**
     * @param Request $request
     * @param $phone_code_city_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function postDeleteCountry(Request $request, $phone_code_city_id){
        
    }

    /**
     * @param Request $request
     * @param $phone_code_city_id
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function postDeleteCity(Request $request, $phone_code_city_id){
        
    }

}