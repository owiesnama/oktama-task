<?php 
use OkTamam\Companies\Models\Company;
class Cms5eeceae962bcd435222157_9ddea513ac812bc14c1a12a634d8fc03Class extends Cms\Classes\PageCode
{
public function onStart()
{
  $this['company'] = Company::where('id',$this->param('company'))->firstOrFail();
  $this['employees'] = $this['company']->employees()->paginate(1);
}
}
