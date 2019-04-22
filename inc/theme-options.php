<?php
function fusion_template(){
	
  vc_map(array(

      'name' => __('Fusion_Hero','TAIBA'),
      'description' => 'this is first Hero section Here',
      'base' => 'hero_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
      
      	array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('title','TAIBA'),
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __(' Description','TAIBA'),
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'image',
            'type' => 'attach_image',
            'heading'=> __('IMAGE','TAIBA'),
            'group'   =>'IMAGE'
           
        ),

      		
      	)
      		  

  ));

 vc_map(array(

      'name' => __('section_service','TAIBA'),
      'description' => 'this is service section Here',
      'base' => 'service_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
        array(
        
          'type'  =>'param_group',
          'heading' =>'service_2_item',
          'param_name'  =>'section_2_group',
          'params'    =>array(
        array(

            'param_name' => 'Sec_2_title',
            'type' => 'textfield',
            'heading'=> 'the section 2 title',
            'value' => 'placeholder'
        ),

        array(

            'param_name' => 'Sec_2_desc',
            'type' => 'textarea',
            'heading'=> 'the section 2 Description',
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'Sec_2_icon',
            'type' => 'textfield',
            'heading'=> 'the section 2 icon',
            'value' => 'icon name'
        ),

          
        )
          ),


        
        
      )

  ));

 //about section

 vc_map(array(

      'name' => __('Fusion_About','TAIBA'),
      'description' => 'this is first About Here',
      'base' => 'about_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
      
        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('the section Hero  title','TAIBA'),
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'title2',
            'type' => 'textfield',
            'heading'=> __('the section Hero  title 2','TAIBA'),
            'value' => 'placeholder'
        ),
          array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __('the section Hero  description','TAIBA'),
            'value' => 'placeholder'
        ),
           array(

            'param_name' => 'image',
            'type' => 'attach_image',
            'heading'=> __('the section Hero  Image','TAIBA'),
           
        ),

        

          
        )
            

  ));

  vc_map(array(

      'name' => __('Fusion AWOSOME TITLE','TAIBA'),
      'description' => 'this is Title  Here',
      'base' => 'title_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
      
        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('the section Hero  title','TAIBA'),
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'color',
            'type' => 'colorpicker',
            'heading'=> __('the section Hero  color','TAIBA'),
            'value' => 'placeholder'
        ),
        

        

          
        )
            

  ));



	

	

//awosome content
 vc_map(array(

      'name' => __('Fusion AWOSOME CONTENT','TAIBA'),
      'description' => 'this is Title  Here',
      'base' => 'content_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
      
        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('the section Hero  title','TAIBA'),
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __('the section description','TAIBA'),
            'value' => 'placeholder'
        ),
          array(

            'param_name' => 'conteny_icon',
            'type' => 'textfield',
            'heading'=> __('the section Hero  icon','TAIBA'),
            'value' => 'placeholder'
        ),
        
        

        

          
        )
            

  ));

 //awosome middle content
 vc_map(array(

      'name' => __('Fusion AWOSOME MIDDLE SEC','TAIBA'),
      'description' => 'this is Middle content for awosome  Here',
      'base' => 'middle_section',
      'category' => 'FUSION',
      'icon' => 'fa fa-map',
      'params' => array(
      
        array(

            'param_name' => 'image',
            'type' => 'attach_image',
            'heading'=> __('IMAGE','TAIBA'),
            'value' => 'placeholder'
        ),
        
        

        

          
        )
            

  ));


//team section
 vc_map(array(

      'name' => __('section TEAM','TAIBA'),
      'description' => 'this is team section Here',
      'base' => 'team_section',
      'category' => 'FUSION',
      'icon' => 'fas fa-user-friends',
      'params' => array(
         
        array(
        
          'type'  =>'param_group',
          'heading' =>__('team_group','TAIBA'),
          'param_name'  =>'team_group',
          'params'    =>array(
        array(

            'param_name' => 'name',
            'type' => 'textfield',
            'heading'=> __('NAME','TAIBA'),
            'value' => 'placeholder'
        ),

        array(
            'param_name' => 'degination',
            'type' => 'textfield',
            'heading'=> __('DEGINATION','TAIBA'),
            'value' => 'placeholder'
        ),
         array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __('DESCRIPTION','TAIBA'),
            'value' => 'description here name'
        ),
         array(

            'param_name' => 'image',
            'type' => 'attach_image',
            'heading'=> __('IMAGE','TAIBA'),
            'value' => 'upload image here name'
        ),
         array(
            'param_name' => 'facebook',
            'type' => 'textfield',
            'heading'=> __('facebook','TAIBA'),
            'value' => 'placeholder'
        ),
         array(
            'param_name' => 'twitter',
            'type' => 'textfield',
            'heading'=> __('Twitter','TAIBA'),
            'value' => 'placeholder'
        ),
         array(
            'param_name' => 'instagram',
            'type' => 'textfield',
            'heading'=> __('Instagram','TAIBA'),
            'value' => 'placeholder'
        ),

          
        )
          )
       


        
        
      )

  ));

 //pricing section
 vc_map(array(

      'name' => __('section PRICING','TAIBA'),
      'description' => 'this is price section Here',
      'base' => 'pricing_section',
      'category' => 'FUSION',
      'icon' => get_template_directory_uri().'/assets/img/logo.png',
      'params' => array(
         
        array(
        
          'type'  =>'param_group',
          'heading' =>__('price_group','TAIBA'),
          'param_name'  =>'price_group',
          'params'    =>array(
        array(

            'param_name' => 'icon',
            'type' => 'textfield',
            'heading'=> __('ICON','TAIBA'),
            'value' => 'ICON NAME HERE'
        ),

        array(
            'param_name' => 'price',
            'type' => 'textfield',
            'heading'=> __('PRICE','TAIBA'),
            'value' => 'input price here'
        ),
         array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('PRODUCT TITLE','TAIBA'),
            'value' => 'input product here'
        ),
         array(

            'param_name' => 'user',
            'type' => 'textfield',
            'heading'=> __('USER NUMBER','TAIBA'),
            'value' => 'input user number here'
        ),
         array(
            'param_name' => 'storage',
            'type' => 'textfield',
            'heading'=> __('storage','TAIBA'),
            'value' => 'input storage GB or Unlimited here'
        ),
         array(
            'param_name' => 'support',
            'type' => 'textfield',
            'heading'=> __('Suppoerts','TAIBA'),
            'value' => 'input support here'
        ),
         array(
            'param_name' => 'updates',
            'type' => 'textfield',
            'heading'=> __('UPDATED','TAIBA'),
            'value' => 'input updates here'
        ),

          
        )
          )
       


        
        
      )

  ));

 //pricing section
 vc_map(array(

      'name' => __('section Testimonial','TAIBA'),
      'description' => 'this is testimonialsection Here',
      'base' => 'testimonial_section',
      'category' => 'FUSION',
      'icon' => get_template_directory_uri().'/assets/img/logo.png',
      'params' => array(
         
        array(
        
          'type'  =>'param_group',
          'heading' =>__('Testimonial group','TAIBA'),
          'param_name'  =>'testimonial_group',
          'params'    =>array(
        array(

            'param_name' => 'image',
            'type' => 'attach_image',
            'heading'=> __('IMAGE','TAIBA'),
            'value' => 'IMAGE NAME HERE'
        ),

        array(
            'param_name' => 'name',
            'type' => 'textfield',
            'heading'=> __('NAME','TAIBA'),
            'value' => 'input name here'
        ),
         array(

            'param_name' => 'degi',
            'type' => 'textfield',
            'heading'=> __('DEGINATION','TAIBA'),
            'value' => 'input degination here'
        ),
         array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __('Desription','TAIBA'),
            'value' => 'input descrition here'
        ),
        

          
        )
          )
       


        
        
      )

  ));

 //call to actionsection
 vc_map(array(

      'name' => __('call_to_action','TAIBA'),
      'description' => 'this is call_to_action Here',
      'base' => 'call_to_action_section',
      'category' => 'FUSION',
      'icon' => get_template_directory_uri().'/assets/img/logo.png',
      'params' => array(
      
        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('TITLE','TAIBA'),
            'value' => 'placeholder'
        ),
        array(

            'param_name' => 'desc',
            'type' => 'textarea',
            'heading'=> __('Description','TAIBA'),
            'value' => 'placeholder'
        ),
        array(

            'param_name' => 'Link',
            'type' => 'vc_link',
            'heading'=> __('LINK','TAIBA'),
            'value' => 'placeholder',
            
        ),
        
        

        

          
        )
            

  ));

  



add_action("vc_before_init","fusion_template");

//contact from section
 vc_map(array(

      'name' => __('contact form','TAIBA'),
      'description' => 'this is contact form Here',
      'base' => 'contact_us_section',
      'category' => 'FUSION',
      'icon' => get_template_directory_uri().'/assets/img/logo.png',
      'params' => array(
      
        array(

            'param_name' => 'title',
            'type' => 'textfield',
            'heading'=> __('TITLE','TAIBA'),
            'value' => 'placeholder'
        ),
        array(

            'param_name' => 'content',
            'type' => 'textarea_html',
            'heading'=> __('contact form 7','TAIBA'),
            'value' => 'contact form 7 shortcode'
        ),
        array(

            'param_name' => 'place',
            'type' => 'textfield',
            'heading'=> __('PLACE','TAIBA'),
            'value' => 'placeholder place',
            'group' =>'gmap'
        ),
        array(

            'param_name' => 'width',
            'type' => 'textfield',
            'heading'=> __('width','TAIBA'),
            'value' => 'placeholder 100%',
            'group' =>'gmap'
        ),
        array(

            'param_name' => 'height',
            'type' => 'textfield',
            'heading'=> __('height','TAIBA'),
            'value' => 'placeholder 280',
            'group' =>'gmap'
        ),
        array(

            'param_name' => 'zoom',
            'type' => 'textfield',
            'heading'=> __('zoom','TAIBA'),
            'value' => 'placeholder 13',
            'group' =>'gmap'
        ),
        
        

        

          
        )
            

  ));

  
}


add_action("vc_before_init","fusion_template");


 ?>