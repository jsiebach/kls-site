<?php

namespace App;

trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */

    private function plain_html()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'content',
            'label' => 'Content',
            'type' => 'wysiwyg',
            'placeholder' => 'Your content here',
        ]);
    }

    private function home()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);
        $this->crud->addField([ // image
            'label' => "Headline",
            'name' => "headline",
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // image
            'label' => "Subheadline",
            'name' => "subheadline",
            'type' => 'text',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'bio',
            'label' => 'Bio',
            'type' => 'wysiwyg',
            'placeholder' => 'Bio',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'intro',
            'label' => 'Intro',
            'type' => 'wysiwyg',
            'placeholder' => 'Intro',
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([ // Table
            'name' => 'social_links',
            'label' => 'Social Links',
            'type' => 'table',
            'entity_singular' => 'link', // used on the "Add X" button
            'columns' => [
                'icon' => 'Icon',
                'title' => 'Title',
                'link' => 'Link',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([ // Table
            'name' => 'press_links',
            'label' => 'Press Links',
            'type' => 'table',
            'entity_singular' => 'link', // used on the "Add X" button
            'columns' => [
                'title' => 'Title',
                'link' => 'Link',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    private function publications()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);
    }

    private function outreach()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);

        $this->crud->addField([
            'name' => 'intro',
            'type' => 'textarea',
            'label' => 'Intro',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'cta',
            'type' => 'textarea',
            'label' => 'Call to Action',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'selected_examples',
            'label' => 'Selected Examples of Recent Talks',
            'type' => 'table',
            'entity_singular' => 'talk', // used on the "Add X" button
            'columns' => [
                'description' => 'Description',
                'date' => 'Date',
                'link' => 'Link',
	            'feature' => 'Featured?'
            ],
            'max' => 1000, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);

        $this->crud->addField([ // Table
            'name' => 'teaching_experience',
            'label' => 'Teaching Experience',
            'type' => 'table',
            'entity_singular' => 'experience', // used on the "Add X" button
            'columns' => [
                'description' => 'Description',
                'link' => 'Link',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'adtl_experience',
            'label' => 'Additional Experience',
            'type' => 'table',
            'entity_singular' => 'experience', // used on the "Add X" button
            'columns' => [
                'description' => 'Description',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

    private function photography()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);

    }

    private function cv()
    {
        $this->crud->addField([   // CustomHTML
            'name' => 'metas_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Metas</h2><hr>',
        ]);
        $this->crud->addField([
            'name' => 'meta_title',
            'label' => 'Meta Title',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_description',
            'label' => 'Meta Description',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([
            'name' => 'meta_keywords',
            'type' => 'textarea',
            'label' => 'Meta Keywords',
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([   // CustomHTML
            'name' => 'content_separator',
            'type' => 'custom_html',
            'value' => '<br><h2>Content</h2><hr>',
        ]);
        $this->crud->addField([ // Table
            'name' => 'cv',
            'label' => 'CV Upload',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
        ]);
        $this->crud->addField([ // Table
            'name' => 'education',
            'label' => 'Education',
            'type' => 'table',
            'entity_singular' => 'education', // used on the "Add X" button
            'columns' => [
                'info' => 'School'
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'achievements',
            'label' => 'Achievements and Honors',
            'type' => 'table',
            'entity_singular' => 'honor', // used on the "Add X" button
            'columns' => [
                'description' => 'Description',
                'date' => 'Date',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'talks',
            'label' => 'Academic Talks',
            'type' => 'table',
            'entity_singular' => 'talk', // used on the "Add X" button
            'columns' => [
                'info' => 'Talk'
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'experience',
            'label' => 'Professional Experience',
            'type' => 'table',
            'entity_singular' => 'experience', // used on the "Add X" button
            'columns' => [
                'description' => 'Description',
                'date' => 'Date',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'memberships',
            'label' => 'Professional Memberships',
            'type' => 'table',
            'entity_singular' => 'membership', // used on the "Add X" button
            'columns' => [
                'info' => 'Membership'
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
        $this->crud->addField([ // Table
            'name' => 'skills',
            'label' => 'Technical Skills',
            'type' => 'table',
            'entity_singular' => 'skill', // used on the "Add X" button
            'columns' => [
                'category' => 'Category',
                'skills' => 'Skills',
            ],
            'max' => 100, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }

	private function lab(  ) {
		$this->crud->addField([   // CustomHTML
			'name' => 'metas_separator',
			'type' => 'custom_html',
			'value' => '<br><h2>Metas</h2><hr>',
		]);
		$this->crud->addField([
			'name' => 'meta_title',
			'label' => 'Meta Title',
			'fake' => true,
			'store_in' => 'extras',
		]);
		$this->crud->addField([
			'name' => 'meta_description',
			'label' => 'Meta Description',
			'fake' => true,
			'store_in' => 'extras',
		]);
		$this->crud->addField([
			'name' => 'meta_keywords',
			'type' => 'textarea',
			'label' => 'Meta Keywords',
			'fake' => true,
			'store_in' => 'extras',
		]);
		$this->crud->addField([   // CustomHTML
			'name' => 'content_separator',
			'type' => 'custom_html',
			'value' => '<br><h2>Content</h2><hr>',
		]);
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Content',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
		]);
        $this->crud->addField([ // Table
            'name' => 'team_members',
            'label' => 'Team Members',
            'type' => 'table',
            'entity_singular' => 'team member', // used on the "Add X" button
            'columns' => [
                'name' => 'Name',
                'bio' => 'Bio',
                'image' => 'Image',
            ],
            'max' => 10, // maximum rows allowed in the table
            'min' => 0, // minimum rows allowed in the table
            'fake' => true,
            'store_in' => 'extras',
        ]);
    }
}
