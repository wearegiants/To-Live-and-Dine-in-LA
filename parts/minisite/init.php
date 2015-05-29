<?php

if( function_exists('register_field_group') ):

register_field_group(array (
  'key' => 'group_556775e29565a',
  'title' => 'Mini-site General Sections',
  'fields' => array (
    array (
      'key' => 'field_556775ec75d1f',
      'label' => 'Navigation',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'left',
    ),
    array (
      'key' => 'field_55677b18ef673',
      'label' => 'Navigation',
      'name' => 'navigation',
      'prefix' => '',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'block',
      'button_label' => 'Add Link',
      'sub_fields' => array (
        array (
          'key' => 'field_55677b22ef674',
          'label' => 'Nav Label',
          'name' => 'nav_label',
          'prefix' => '',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 50,
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_55677b38ef675',
          'label' => 'Nav URL',
          'name' => 'nav_url',
          'prefix' => '',
          'type' => 'url',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 50,
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
        ),
      ),
    ),
    array (
      'key' => 'field_55677c0382a10',
      'label' => 'Social Sharing',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'left',
    ),
    array (
      'key' => 'field_55677c0d82a11',
      'label' => 'Twitter Copy',
      'name' => 'share_twitter',
      'prefix' => '',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => 140,
      'rows' => 2,
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55677c2582a12',
      'label' => 'Facebook Copy',
      'name' => 'share_facebook',
      'prefix' => '',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => 140,
      'rows' => 2,
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_5567819a9a6e1',
      'label' => 'Email Copy',
      'name' => 'share_email',
      'prefix' => '',
      'type' => 'textarea',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => 2,
      'new_lines' => 'wpautop',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_5567761975d20',
      'label' => 'Main',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_55677c86eb720',
      'label' => 'Main Logo',
      'name' => 'main_logo',
      'prefix' => '',
      'type' => 'image',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => 20,
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => '',
      'min_height' => '',
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => '',
    ),
    array (
      'key' => 'field_55677c9feb721',
      'label' => 'Main Copy',
      'name' => 'main_copy',
      'prefix' => '',
      'type' => 'wysiwyg',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => 80,
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'tabs' => 'text',
      'toolbar' => 'full',
      'media_upload' => 0,
    ),
    array (
      'key' => 'field_5567762675d21',
      'label' => 'Events',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_556776da6cf15',
      'label' => 'Section Title',
      'name' => 'section_title_events',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_55677d0dc21b0',
      'label' => 'Events',
      'name' => 'events',
      'prefix' => '',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'block',
      'button_label' => 'Add Event',
      'sub_fields' => array (
        array (
          'key' => 'field_55677d5bc21b3',
          'label' => 'Date',
          'name' => 'event_date',
          'prefix' => '',
          'type' => 'date_picker',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 40,
            'class' => '',
            'id' => '',
          ),
          'display_format' => 'm d',
          'return_format' => 'm d',
          'first_day' => 1,
        ),
        array (
          'key' => 'field_55677d34c21b2',
          'label' => 'TItle',
          'name' => 'event_title',
          'prefix' => '',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 40,
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_55677e7e82284',
          'label' => 'Tall',
          'name' => 'event_tall',
          'prefix' => '',
          'type' => 'true_false',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 10,
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_55677e9082285',
          'label' => 'Wide',
          'name' => 'event_wide',
          'prefix' => '',
          'type' => 'true_false',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => 10,
            'class' => '',
            'id' => '',
          ),
          'message' => '',
          'default_value' => 0,
        ),
        array (
          'key' => 'field_55677d1fc21b1',
          'label' => 'Image',
          'name' => 'event_image',
          'prefix' => '',
          'type' => 'image',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'return_format' => 'array',
          'preview_size' => 'thumbnail',
          'library' => 'all',
          'min_width' => '',
          'min_height' => '',
          'min_size' => '',
          'max_width' => '',
          'max_height' => '',
          'max_size' => '',
          'mime_types' => '',
        ),
      ),
    ),
    array (
      'key' => 'field_556777076cf1a',
      'label' => 'Publish Section',
      'name' => 'publish_section_events',
      'prefix' => '',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If this is ticked, the section won\'t be visible to the public.',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_5567763275d22',
      'label' => 'Essays',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_556776e36cf16',
      'label' => 'Section Title',
      'name' => 'section_title_essays',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_5567804636f00',
      'label' => 'Essays',
      'name' => 'essays',
      'prefix' => '',
      'type' => 'repeater',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'min' => '',
      'max' => '',
      'layout' => 'block',
      'button_label' => 'Add Essay',
      'sub_fields' => array (
        array (
          'key' => 'field_5567805236f01',
          'label' => 'Essay Title',
          'name' => 'essay_title',
          'prefix' => '',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'maxlength' => '',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_5567805d36f02',
          'label' => 'Essay Teaser',
          'name' => 'essay_teaser',
          'prefix' => '',
          'type' => 'textarea',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => '',
          'maxlength' => '',
          'rows' => 3,
          'new_lines' => 'wpautop',
          'readonly' => 0,
          'disabled' => 0,
        ),
        array (
          'key' => 'field_5567806a36f03',
          'label' => 'Full Essay',
          'name' => 'full_essay',
          'prefix' => '',
          'type' => 'wysiwyg',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array (
            'width' => '',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'tabs' => 'visual',
          'toolbar' => 'full',
          'media_upload' => 0,
        ),
      ),
    ),
    array (
      'key' => 'field_556777206cf1b',
      'label' => 'Publish Section',
      'name' => 'publish_section_essays',
      'prefix' => '',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If this is ticked, the section won\'t be visible to the public.',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_5567765575d24',
      'label' => 'Rec. Reading',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
    array (
      'key' => 'field_556776ed6cf17',
      'label' => 'Section Title',
      'name' => 'section_title_rr',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_556777296cf1c',
      'label' => 'Publish Section',
      'name' => 'publish_section_rr',
      'prefix' => '',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If this is ticked, the section won\'t be visible to the public.',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_5567766375d25',
      'label' => '#Hashtag',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'left',
    ),
    array (
      'key' => 'field_556777566cf1f',
      'label' => 'Section Title',
      'name' => 'section_title_hash',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_556777bd6cf20',
      'label' => 'Publish Section',
      'name' => 'publish_section_hash',
      'prefix' => '',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If this is ticked, the section won\'t be visible to the public.',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_5567768675d26',
      'label' => 'Thanks Yous',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'left',
    ),
    array (
      'key' => 'field_556776ff6cf19',
      'label' => 'Section Title',
      'name' => 'section_title_thanks',
      'prefix' => '',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
      'readonly' => 0,
      'disabled' => 0,
    ),
    array (
      'key' => 'field_556777376cf1e',
      'label' => 'Publish Section',
      'name' => 'publish_section_thanks',
      'prefix' => '',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'If this is ticked, the section won\'t be visible to the public.',
      'default_value' => 0,
    ),
    array (
      'key' => 'field_556776a075d27',
      'label' => 'Footer',
      'name' => '',
      'prefix' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page',
        'operator' => '==',
        'value' => '6',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
));

endif;