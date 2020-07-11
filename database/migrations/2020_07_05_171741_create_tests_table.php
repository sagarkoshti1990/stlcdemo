<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Sagartakle\Laracrud\Models\Module;
use Sagartakle\Laracrud\Models\FieldType;
use Sagartakle\Laracrud\Models\Field;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate('Tests', 'tests', 'address', 'fa-smile-o', [
            [
				'name' => 'address',
				'label' => 'Address',
				'field_type' => 'Address',
				'required' => true,
				'nullable_required' => false,
				'show_index' => true
			],[
				'name' => 'checkbox',
				'label' => 'Checkbox',
				'field_type' => 'Checkbox',
				'nullable_required' => false,
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'ckeditor',
				'label' => 'CKEditor',
				'field_type' => 'CKEditor',
				'nullable_required' => false,
			],[
				'name' => 'currency',
				'label' => 'Currency',
				'field_type' => 'Currency',
				'nullable_required' => false,
			],[
				'name' => 'date_picker',
				'label' => 'Date Picker',
				'field_type' => 'Date_picker',
			],[
				'name' => 'date_range',
				'label' => 'Date Range',
				'field_type' => 'Date_range',
				'nullable_required' => false,
			],[
				'name' => 'datetime',
				'label' => 'Datetime',
				'field_type' => 'Datetime',
			],[
				'name' => 'datetime_picker',
				'label' => 'Datetime Picker',
				'field_type' => 'Datetime_picker',
			],[
				'name' => 'email',
				'label' => 'Email',
				'field_type' => 'Email',
			],[
				'name' => 'file',
				'label' => 'File',
				'field_type' => 'File',
			],[
				'name' => 'files',
				'label' => 'Files',
				'field_type' => 'Files',
			],[
				'name' => 'image',
				'label' => 'Image',
				'field_type' => 'Image',
			],[
				'name' => 'json',
				'label' => 'Json',
				'field_type' => 'Json',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'month',
				'label' => 'Month',
				'field_type' => 'Month',
			],[
				'name' => 'multiselect',
				'label' => 'Multiselect',
				'field_type' => 'Multiselect',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'number',
				'label' => 'Number',
				'field_type' => 'Number',
			],[
				'name' => 'phone',
				'label' => 'Phone',
				'field_type' => 'Phone',
				'maxlength' => '10',
			],[
				'name' => 'context',
				'label' => 'Polymorphic',
				'field_type' => 'Polymorphic_select',
				'required' => true,
				'nullable_required' => false,
				'show_index' => true,
				'json_values' => ["Employees","Client"]
			],[
				'name' => 'sport_id',
				'label' => 'Polymorphic',
				'field_type' => 'Polymorphic_multiple',
				'required' => true,
				'nullable_required' => false,
				'show_index' => true,
				'json_values' => '@Sportables'
			],[
				'name' => 'attribute_id',
				'label' => 'Polymorphic',
				'field_type' => 'Polymorphic_multiple',
				'required' => true,
				'nullable_required' => false,
				'show_index' => true,
				'json_values' => '@Attributeables'
			],[
				'name' => 'radio',
				'label' => 'Radio',
				'field_type' => 'Radio',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'select',
				'label' => 'Select',
				'field_type' => 'Select',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'select2',
				'label' => 'Select2',
				'field_type' => 'Select2',
				'json_values' => '@Employees'
			],[
				'name' => 'select2json',
				'label' => 'Select2 json',
				'field_type' => 'Select2',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'select2_multiple',
				'label' => 'Select2 Multiple',
				'field_type' => 'Select2_multiple',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'select2_from_ajax',
				'label' => 'Select2 from ajax',
				'field_type' => 'Select2_from_ajax',
				'json_values' => '@Employees'
			],[
				'name' => 'select2_tags',
				'label' => 'Select2 Tags',
				'field_type' => 'Select2_tags',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'select2_multiple_tags',
				'label' => 'Select2 multiple Tags',
				'field_type' => 'Select2_multiple_tags',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'table_field',
				'label' => 'Table field',
				'field_type' => 'Table',
				'json_values' => ["Employee","Client"]
			],[
				'name' => 'text',
				'label' => 'Text',
				'field_type' => 'Text',
			],[
				'name' => 'textarea',
				'label' => 'Textarea',
				'field_type' => 'Textarea',
				'show_index' => true
			]
        ]);
        
        /*
        Module::generate('Tests' 'tests', 'name', 'fa-smile-o', [
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
        if(Schema::hasTable('tests')) {
            Schema::drop('tests');
        }
    }
}
