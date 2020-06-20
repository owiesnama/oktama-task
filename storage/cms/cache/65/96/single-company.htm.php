<?php 
use OkTamam\Companies\Models\Company;
class Cms5eedc82a64dea148738290_e39b3cc968defb583d3bfd9431662fadClass extends Cms\Classes\PageCode
{
public function onStart()
{
  $this['company'] = Company::where('id',$this->param('company'))->firstOrFail();
  $this['employees'] = $this['company']->employees()->paginate(10);
}
}
