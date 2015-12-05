<?php namespace App\Providers\Contracts\Form;
	/**
	* 	overiding default FormBuilder
	*/
	use  Illuminate\Html\FormBuilder as BaseFormBuilder;
	class FormBuilder extends BaseFormBuilder
	{
		
		/**
	 * Create a select element option.
	 *
	 * @param  string  $display
	 * @param  string  $value
	 * @param  string  $selected
	 * @return string
	 */
		protected function option($display, $value, $selected)
		{
			$selected = $this->getSelectedValue($value, $selected);

			$options = array('value' => e($value), 'selected' => $selected);
			if($value != 0){
				return '<option'.$this->html->attributes($options).'>'.e($display).'</option>';
			}else{
				return '<option>'.e($display).'</option>';
			}
		}
	}
 ?>