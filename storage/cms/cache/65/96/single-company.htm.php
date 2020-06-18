<?php 
use OkTamam\Companies\Models\Company;
class Cms5eeb58f1dfe06115218394_ba2c324e2a2969f3b56f50018405e32dClass extends Cms\Classes\PageCode
{
public function onStart()
{
  $this['company'] = Company::where('id',$this->param('company'))->firstOrFail();
  $this['employees'] = $this['company']->employees()->paginate(1);
}
}
