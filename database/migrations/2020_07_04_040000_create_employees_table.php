<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Sagartakle\Laracrud\Models\Module;
use Sagartakle\Laracrud\Models\FieldType;
use Sagartakle\Laracrud\Models\Field;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate('Employees', 'employees', 'name', 'fa-smile-o', [
            [
				'name' => 'name',
				'label' => 'Name',
				'field_type' => 'Text',
				'unique' => true,
				'required' => true,
				'show_index' => true
			],[
				'name' => 'description',
				'label' => 'Description',
				'field_type' => 'Textarea',
				'show_index' => true
			]
        ]);
        
        /*
        Module::generate('Employees' 'employees', 'name', 'fa-smile-o', [
            [
                'name' => 'name',
                'label' => 'Name',
                'field_type' => 'Name',
                'unique' => false,
                'defaultvalue' => 'John Doe',
                'minlength' => 5,
                'maxlength' => 100,
                'required' => true,
                'nullable_required' => false,
                'show_index' => true,
                'json_values' => ['Employee', 'Client']
            ]
        ]);

        field type [
            Address,
			Checkbox,
			CKEditor,
			Color_picker,
			Color,
			Date_picker,
			Date_range,
			Date,
			Datetime_picker,
			Datetime,
			Email,
			File,
			Files,
			Hidden,
			Icon_picker,
			Image,
			Json,
			Month,
			Multiselect,
			Number,
			Password,
			Phone,
			Polymorphic_select,
			Polymorphic_multiple,
			Currency,
			Radio,
			Select,
			Select2_from_ajax,
			Select2_multiple,
			Select2_tags,
			Select2_multiple_tags,
			Select2,
			Table,
			Text,
			Textarea,

        ]

        name: Database column name. lowercase, words concatenated by underscore (_)
        label: Label of Column e.g. Name, Cost, Is Public
        field_type: It defines type of Column in more General way.
        unique: Whether the column has unique values. Value in true / false
        defaultvalue: Default value for column.
        minlength: Minimum Length of value in integer.
        maxlength: Maximum Length of value in integer.
        required: Is this mandatory field in Add / Edit forms. Value in true / false
        show_index: Is allowed to show in index page datatable.
        json_values: These are values for MultiSelect, TagInput and Radio Columns. Either connecting @tables or to list []
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('employees')) {
            Schema::drop('employees');
        }
    }
}
