<?php

namespace App\Request;


use App\Enums\ValidatorInterface;

class FormRequestApi extends FormRequest implements ValidatorInterface
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['popup' => true, 'popupType' => 'danger', 'message' => $validator->errors()->all()], 400));
    }//end failedValidation()
    protected function rulesNumericDefault($nullable=false){
        return [

            self::NUMERIC_CAMP,
            self::MIN_CAMP.'1',
            $nullable ? self::NULLABLE : self::REQUIRED
        ];
    }
    protected function rulesNumericDefaultWithOutMin($nullable=false){
        return [

            self::NUMERIC_CAMP,
            $nullable ? self::NULLABLE : self::REQUIRED
        ];
    }
    protected function rulesForForeignKey(string $table_name,$camp='id'){
        return [
            self::NULLABLE,
            self::INTEGER,
            self::MIN_CAMP.'1',
            self::EXISTS.$table_name.','.$camp
        ];
    }
    protected function rulesBoolean(){
        return [
            self::REQUIRED,
            self::BOOLEAN
        ];
    }
    protected function rulesBooleanSomeTimes(){
        return [
            self::SOMETIMES,
            self::BOOLEAN,
            self::NULLABLE
        ];
    }
    protected function rulesStringRequired($nullable=false){
        return [
            $nullable ? self::NULLABLE : self::REQUIRED,
            self::NULLABLE,
            self::CAMP_STRING,
            self::MIN_CAMP.'1'
        ];
    }
    protected function rulesStringOptional(){
        return [
            self::SOMETIMES,
            self::NULLABLE,
            self::CAMP_STRING,
            self::MIN_CAMP.'1'
        ];
    }
    protected function rulesInCamps(array $camps){
        return [Rule::in($camps)];

    }
    protected function rulesDate(){
        return [
            self::SOMETIMES,
            self::DATE,
            self::DATE_FORMAT_WITH_HOURS
        ];
    }


    protected function rulesDateBasic($nullable=false){
        return [
            $nullable ? self::NULLABLE : self::REQUIRED,
            self::DATE,
            self::DATE_FORMAT_FORMAT_STANDAR
        ];
    }

    protected function rulesDateRequired($nullable=false){
        return [
            $nullable ? self::NULLABLE : self::REQUIRED,
            self::DATE,
            self::DATE_FORMAT_WITH_HOURS
        ];
    }
}
