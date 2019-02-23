    <?php 
      get_header();

      if(is_array($au_service['section_sorter_opt']['Active']) ){
        foreach($au_service['section_sorter_opt']['Active'] as $single_section => $section_value){

          switch($single_section) {
            case 'hero':
              get_template_part('section_hero');
            break;
            case 'about':
              get_template_part('section_about');
            break;
            case 'service':
              get_template_part('section_service');
            break;
            case 'gallery':
              get_template_part('section_gallery');
            break;
            case 'counterup':
              get_template_part('section_counterup');
            break;
            case 'claient':
              get_template_part('section_claient');
            break;
            case 'testimontal':
              get_template_part('section_testimonial');
            break;
          }
        }
      }

      get_footer(); 
?>

