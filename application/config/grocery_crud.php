<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// For view all the languages go to the folder assets/grocery_crud/languages/
$config['grocery_crud_default_language'] = 'english';

// There are only three choices: "uk-date" (dd/mm/yyyy), "us-date" (mm/dd/yyyy) or "sql-date" (yyyy-mm-dd)
$config['grocery_crud_date_format'] = 'uk-date';

// The default per page when a user firstly see a list page
$config['grocery_crud_default_per_page'] = 10;

$config['grocery_crud_file_upload_allow_file_types'] = 'gif|jpeg|jpg|svg|png|tiff|doc|docx|txt|odt|xls|xlsx|pdf|ppt|pptx|pps|ppsx|mp3|m4a|ogg|wav|mp4|m4v|mov|wmv|flv|avi|mpg|ogv|3gp|3g2';
$config['grocery_crud_file_upload_max_file_size'] = '2000MB'; 

// You can choose 'ckeditor','tinymce' or 'markitup'
$config['grocery_crud_default_text_editor'] = 'ckeditor';
// You can choose 'minimal' or 'full'
$config['grocery_crud_text_editor_type'] = 'full';

// The character limiter at the list page
$config['grocery_crud_character_limiter'] = 30;

// All the forms are opening with dialog forms without refreshing the page once again.
$config['grocery_crud_dialog_forms'] = true;

// Paging options
$config['grocery_crud_paging_options'] = array('10','25','50','100');

// ✅ Default theme (set to bootstrap instead of flexigrid)
$config['grocery_crud_default_theme'] = 'bootstrap';

// Environment
$config['grocery_crud_environment'] = 'production';

// Turn XSS clean into true in case you are exposing your CRUD into public
$config['grocery_crud_xss_clean'] = false;
