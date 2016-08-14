<?php
/*
This File contains all of the shortcodes made by Media Dei
Shortcodes are styled in _media_dei_shortcodes.scss


Template for creating shortcodes:

function media_dei_shortcode($atts, $content){
  extract(shortcode_atts(array(            
    "att" => 'value',               
  ), $atts)); 
  $return_string='';
  return $return_string;
}
add_shortcode('shortcode_name', 'media_dei_shortcode');


*/


//-------------------- SHORTCODE SETTINGS ----------

//stop WP core from adding <p> and <br> tags to shortcode from WYSIWYG editor filter (wpautop)
function media_dei_shortcode_empty_paragraph_fix($content)
{   
  $array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
  );

  $content = strtr($content, $array);

  return $content;
}
add_filter('the_content', 'media_dei_shortcode_empty_paragraph_fix');

//-------------------- END SHORTCODE SETTINGS ----------





//--------------------TYPOGRAPHY SHORTCODES ----------

function media_dei_custom_heading_shortcode($atts, $content){
  extract(shortcode_atts(array(            
    'style'              => '1',//default to style 1 if not specified
    'heading_level'      => '1',//default to h1 if not specified
    'has_image'          => 'false'//default to false if not specified              
  ), $atts)); 
  $return_string='
  <h'.$heading_level.' class="custom-heading style-'.$style.'">'
   . do_shortcode($content) . 

   /*insert image
   if($has_image==='true'){
    
    }
  */

    '</h'.$heading_level.'>';
  return $return_string;
}
add_shortcode('custom_heading', 'media_dei_custom_heading_shortcode');


function media_dei_smallcaps_shortcode($atts, $content){
  $return_string='<span class="smallcaps">' . do_shortcode($content) . '</span>';
  return $return_string;
}
add_shortcode('smallcaps', 'media_dei_smallcaps_shortcode');


function media_dei_simple_dropcaps_shortcode($atts, $content){
  $return_string='<span class="simple-dropcaps">' . do_shortcode($content) . '</span>';
  return $return_string;
}
add_shortcode('simple_dropcaps', 'media_dei_simple_dropcaps_shortcode');

//--------------------END TYPOGRAPHY SHORTCODES ------



//--------------------ACCORDION SHORTCODES ----------

//wrapper for all shortcodes with css accordion functionality
function media_dei_accordion_shortcode($atts, $content){
  //increment counter for each accordion in use on this page
  $GLOBALS['accordionCount'];
  $GLOBALS['accordionCount']++;

  extract(shortcode_atts(array(            
    "style" => '1',//if not set by user in wp page wysiwyg editor, defaults to style 1               
  ), $atts));

  if($style==='1'){
    $return_string='
    <div class="accordion style-1">' 
      . do_shortcode($content) . 
    '</div>';
    return $return_string;
  }
}
add_shortcode('accordion','media_dei_accordion_shortcode');


//button for css accordion functionality
function media_dei_accordion_button_shortcode($atts, $content){
  extract(shortcode_atts(array(            
    "style" => '1',//if not set by user in wp page wysiwyg editor, defaults to style 1               
  ), $atts));

  if($style==='1'){
    $return_string='
    <span class="anchor" id="accordion-button-' . $GLOBALS['accordionCount'] .'"></span>
    <a class="accordion-button-anchor anchor-button" href="#accordion-button-' . $GLOBALS['accordionCount'] . '">
      <div class="accordion-button" role="button">
        <p class="button-text">'
          . do_shortcode($content) .
        '</p>
      </div>
    </a>';
    return $return_string;
  }
}
add_shortcode('accordion_button', 'media_dei_accordion_button_shortcode');


//button for css accordion-staff functionality
function media_dei_accordion_staff_shortcode($atts, $content){
  extract(shortcode_atts(array(            
    "style" => '1',//if not set by user in wp page wysiwyg editor, defaults to style 1               
  ), $atts));

  if($style==='1'){//used in AFL
    $return_string='
    <span class="anchor" id="accordion-button-' . $GLOBALS['accordionCount'] .'"></span>
    <a class="accordion-button-anchor anchor-button" href="#accordion-button-' . $GLOBALS['accordionCount'] . '">
      <div class="accordion-staff" role="button">'
          . do_shortcode($content) .
      '</div>
    </a>';
    return $return_string;
  }
}
add_shortcode('accordion_staff', 'media_dei_accordion_staff_shortcode');


//accordion_staff_photo
function media_dei_accordion_staff_photo_shortcode($atts, $content){
  $return_string='
  <figure class="accordion-staff-photo">'
    . do_shortcode($content) .
  '</figure>';
  return $return_string;
}
add_shortcode('accordion_staff_photo', 'media_dei_accordion_staff_photo_shortcode');

//accordion_staff_name
function media_dei_accordion_staff_name_shortcode($atts, $content){
  $return_string='
  <p class="accordion-staff-name">'
    . do_shortcode($content) .
  '</p>';
  return $return_string;
}
add_shortcode('accordion_staff_name', 'media_dei_accordion_staff_name_shortcode');

//accordion_staff_title
function media_dei_accordion_staff_title_shortcode($atts, $content){
  $return_string='
  <p class="accordion-staff-title">'
    . do_shortcode($content) .
  '</p>';
  return $return_string;
}
add_shortcode('accordion_staff_title', 'media_dei_accordion_staff_title_shortcode');



//hidden content to go under button for css accordion functionality
//need to make the style functionality work in later projects...currently styled in theme scss files
function media_dei_accordion_hidden_content_shortcode($atts, $content){
  extract(shortcode_atts(array(            
    'for_button'           => 'false',
    'for_staff'            => 'false',
    'style'                => '1'        
  ), $atts));

  //apply appropriate classes for accordion-button widget hidden content
  if($for_button==='true'){
    //echo "for button working ";
    $return_string='
    <div class="accordion-button-' . $GLOBALS['accordionCount'] . ' accordion-button-hidden hidden-content">
      <p class="hidden-text hidden-button-content">'
        . do_shortcode($content) .
      '</p>
    </div>'; 
    $widget_style='
      <style>
      /* reveal when targeted */
        .anchor:target + .anchor-button + .accordion-button-' . $GLOBALS['accordionCount'] . ' {
          height: auto;
          padding: 30px 30px 15px;
          position: relative;
          top: -10px;
          z-index: -1;
          opacity: 1;
        }
      </style>';
    $return_string.=$widget_style;
    return $return_string;
  }

  //apply appropriate classes for accordion-staff widget hidden content
  if($for_staff==='true'){
    //echo "for staff working";
    $return_string='
    <div class="accordion-button-' . $GLOBALS['accordionCount'] . ' accordion-button-hidden hidden-content style-'.$style.'">
      <p class="hidden-text hidden-staff-content style-'.$style.'">'
        . do_shortcode($content) .
      '</p>
    </div>';
    $widget_style='
      <style>
      /* reveal when targeted */
        .anchor:target + .anchor-button + .accordion-button-' . $GLOBALS['accordionCount'] . ' {
          height: auto;
          padding: 30px 30px 15px;
          position: relative;
          top: -10px;
          //z-index: -1;
          opacity: 1;
        }
      </style>';
      $return_string.=$widget_style;
      return $return_string;
  }
}
add_shortcode('accordion_hidden_content', 'media_dei_accordion_hidden_content_shortcode');

//--------------------END ACCORDION SHORTCODES ------




//----------------------- IMG WIDGET SHORTCODES -------------


function media_dei_announcement_image_shortcode($atts, $content){
    $return_string='<div class="announcement-image" role="img"><figure>' . $content . '</figure></div>';
    return $return_string;
}
add_shortcode('announcement_image', 'media_dei_announcement_image_shortcode');



//----------------------- END IMG WIDGET SHORTCODES -------------



//----------------------- RESOURCE ITEM WIDGET SHORTCODES -------------


function media_dei_resource_item_url_shortcode($atts, $content){
  $GLOBALS['resourceUrl'];
  $GLOBALS['resourceUrl']=$content;
}
add_shortcode('resource_item_url', 'media_dei_resource_item_url_shortcode');


function media_dei_resource_item_title_shortcode($atts, $content){
  $return_string='<h2 class="resource-heading"><a href="' . $GLOBALS['resourceUrl'] . '">' . $content . '</a></h2>';
  return $return_string;
}
add_shortcode('resource_item_title', 'media_dei_resource_item_title_shortcode');


function media_dei_resource_item_text_shortcode($atts, $content){
  $return_string='<p class="resource-paragraph">' . $content . '</p>';
  return $return_string;
}
add_shortcode('resource_item_text', 'media_dei_resource_item_text_shortcode');

//----------------------- RESOURCE ITEM WIDGET SHORTCODES -------------





//----------------------- RADIO BUTTON STAFF WIDGET SHORTCODES -------------

function media_dei_staff_circles_3_shortcode($atts, $content){
  $GLOBALS['staffCounter'] = 0;
  $GLOBALS['bioCounter'] = 0;
  $GLOBALS['nameLeft'];
  $GLOBALS['nameCenter'];
  $GLOBALS['nameRight'];
  $return_string='
    <input class="radioButton" id="bio1-left" type="radio" name="bio1">
    <input class="radioButton" id="bio1-center" type="radio" name="bio1">
    <input class="radioButton" id="bio1-right" type="radio" name="bio1">
    
    <div class="wrapper">' . do_shortcode($content) . '</div>';
  return $return_string;
}
add_shortcode('staff_circles_3', 'media_dei_staff_circles_3_shortcode');



function media_dei_staff_circles_2_shortcode($atts, $content){
  $GLOBALS['staffCounter'] = 3;
  $return_string='
    <input class="radioButton" id="bio2-left" type="radio" name="bio2">
    <input class="radioButton" id="bio2-right" type="radio" name="bio2">
  
    <div class="wrapper">' . do_shortcode($content) . '</div>';
  return $return_string;
}
add_shortcode('staff_circles_2', 'media_dei_staff_circles_2_shortcode');




function media_dei_person_shortcode($atts, $content){
  $arrowPosition;
  $GLOBALS['staffCounter']++;
  if($GLOBALS['staffCounter'] > 5){
    return;
  }
  if($GLOBALS['staffCounter']===1 || $GLOBALS['staffCounter']===4){
    $position = 'left';
  }
  elseif($GLOBALS['staffCounter']===2){
    $position = 'center';
  }
  elseif($GLOBALS['staffCounter']===3 || $GLOBALS['staffCounter']===5){
    $position = 'right';
  }
  if($GLOBALS['staffCounter'] < 4){
    $return_string='
      <div class="grid-1-3">
        <div class="person">
          <label class="zoom fa fa-search" for="bio1-'. $position .'"></label>'
          . do_shortcode($content) .
          '<div class="arrow bio1-' . $position .'"></div>
        </div>
      </div>';
  }
  elseif($GLOBALS['staffCounter'] > 3){
    $return_string='
      <div class="grid-1-2">
        <div class="person">
          <label class="zoom fa fa-search" for="bio2-'. $position .'"></label>'
          . do_shortcode($content) .
          '<div class="arrow bio2-' . $position .'"></div>
        </div>
      </div>';
  }
  return $return_string;
}
add_shortcode('person', 'media_dei_person_shortcode');





function media_dei_person_photo_shortcode($atts, $content){
  $return_string='<figure>' . $content . '</figure>';
  return $return_string;
}
add_shortcode('photo', 'media_dei_person_photo_shortcode');





function media_dei_person_name_shortcode($atts, $content){ 
  $return_string='<p>' . $content . '</p>';
  if($GLOBALS['staffCounter']===1){
    $GLOBALS['nameLeft']=$content;
  }
  elseif($GLOBALS['staffCounter']===2){
    $GLOBALS['nameCenter']=$content;
  }
  elseif($GLOBALS['staffCounter']===3){
    $GLOBALS['nameRight']=$content;
  }
  elseif($GLOBALS['staffCounter']===4){
    $GLOBALS['nameLeft']=$content;
  }
  elseif($GLOBALS['staffCounter']===5){
    $GLOBALS['nameRight']=$content;
  }
  return $return_string;
}
add_shortcode('name', 'media_dei_person_name_shortcode');





function media_dei_person_title_shortcode($atts, $content){
  $return_string='<p>' . $content . '</p>';
  return $return_string;
}
add_shortcode('title', 'media_dei_person_title_shortcode');  





function media_dei_modal_bios_shortcode($atts, $content){
  //$GLOBALS['bioCounter'] = 0;
  if($GLOBALS['staffCounter'] < 4){
    $return_string='<div class="modal-info m1">' . do_shortcode($content) . '</div>';
  }
  elseif($GLOBALS['staffCounter'] > 3){
    $return_string='<div class="modal-info m2">' . do_shortcode($content) . '</div>';
  }
  return $return_string;
}
add_shortcode('modal_bios', 'media_dei_modal_bios_shortcode');





function media_dei_person_bio_shortcode($atts, $content){
  $GLOBALS['bioCounter']++;
  $name;
  if($GLOBALS['bioCounter']===1){
    $name=$GLOBALS['nameLeft'];
  }
  elseif($GLOBALS['bioCounter']===2){
    $name=$GLOBALS['nameCenter'];
  }
  elseif($GLOBALS['bioCounter']===3){
    $name=$GLOBALS['nameRight'];
  }
  elseif($GLOBALS['bioCounter']===4){
    $name=$GLOBALS['nameLeft'];
  }
  elseif($GLOBALS['bioCounter']===5){
    $name=$GLOBALS['nameRight'];
  }
  elseif($GLOBALS['bioCounter']===6){
    return;
  }
  if($GLOBALS['bioCounter'] < 4){
    $return_string='<div class="bio1">
                      <p>' . $name . '</p>
                      <p class="p capital">' . $content . '</p>
                    </div>';
  }
  elseif($GLOBALS['bioCounter'] > 3){
    $return_string='<div class="bio2">
                      <p>' . $name . '</p>
                      <p class="p capital">' . $content . '</p>
                    </div>';
  }
  return $return_string;
}
add_shortcode('bio', 'media_dei_person_bio_shortcode');

//----------------------- END RADIO BUTTON STAFF WIDGET SHORTCODES -------------





//----------------------- ADDITIONAL STAFF WIDGET SHORTCODES -------------


function media_dei_additional_staff_members_shortcode($atts, $content){           
    $return_string='
        <h2 class="more-staff">Other Board Members</h2>
            <div class="more-staff">' . do_shortcode($content) . '</div>';
    return $return_string;
    }
add_shortcode('additional_staff_members', 'media_dei_additional_staff_members_shortcode');



function media_dei_additional_staff_member_name_shortcode($atts, $content){    
    $return_string='
      <div class="name">' . $content . '</div>';
    return $return_string;
}
add_shortcode('additional_staff_name', 'media_dei_additional_staff_member_name_shortcode');




function media_dei_additional_staff_member_title_shortcode($atts, $content){    
    $return_string='
      <div class="desc">' . $content . '</div>';
    return $return_string;
}
add_shortcode('additional_staff_title', 'media_dei_additional_staff_member_title_shortcode');

//----------------------- END ADDITIONAL STAFF WIDGET SHORTCODES -------------
//end Media Dei shortcodes

