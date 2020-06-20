<?php 
use OkTamam\Companies\Models\Company;
class Cms5eeddce44cd32047904815_746b6e5f0b72c7d529af348acff039f1Class extends Cms\Classes\PageCode
{
public function onStart()
{
  $this['company'] = Company::where('id',$this->param('company'))->firstOrFail();
  $this['employees'] = $this['company']->employees()->paginate(10);
}
}
