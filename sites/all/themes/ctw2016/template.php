<?php 
function ctw2016_form_alter(&$variables, $form_state, $form_id) {
  
  if($form_id=='mailchimp_signup_subscribe_block_email_signup_form')
  {

         // Add a custom placeholder to username field.
          unset($variables['mergevars']['EMAIL']['#title']);
          unset($variables['mergevars']['FNAME']['#title']);
          $variables['mergevars']['EMAIL']['#attributes']['placeholder']=t('Email');

          $variables['mergevars']['FNAME']['#attributes']['placeholder']=t('Name');

          $variables['text'] = array(
          '#markup' => '<p>Sign up to get updates about new volunteer opportunities as well as information about the Change The World campaign!</p>',
          '#weight' => '0'
         );     
  }

  if($form_id=='opportunity_listings_node_form')
  {     
      unset($variables['title']['#title']);
      unset( $variables['field_organization']['und'][0]['value']['#title']);
      unset( $variables['field_organization_volunteer_opp']['und'][0]['value']['#title']);
      unset( $variables['field_city_town']['und'][0]['value']['#title']);
      unset( $variables['field_how_to_apply']['und'][0]['value']['#title']);
      unset( $variables['field_contact_name']['und'][0]['value']['#title']);
      unset( $variables['field_contact_email']['und'][0]['email']['#title']);
      unset( $variables['field_contact_phone']['und'][0]['value']['#title']);
      unset( $variables['field_volunteer_roles_duties']['und'][0]['value']['#title']);
      $variables['title']['#attributes']['placeholder']=t('Volunteer Opportunity Title*');
      $variables['field_organization']['und'][0]['value']['#attributes']['placeholder']=t('Organization*');
      $variables['field_organization_volunteer_opp']['und'][0]['value']['#attributes']['placeholder']=t('Organization/Volunteer Opportunity URL');
      $variables['field_city_town']['und'][0]['value']['#attributes']['placeholder']=t('City/Town*');
      $variables['field_how_to_apply']['und'][0]['value']['#attributes']['placeholder']=t('How To apply');
      $variables['field_contact_name']['und'][0]['value']['#attributes']['placeholder']=t('Contact Name*');
      $variables['field_contact_email']['und'][0]['email']['#attributes']['placeholder']=t('Contact Email*');
      $variables['field_contact_phone']['und'][0]['value']['#attributes']['placeholder']=t('Contact Phone*');
      $variables['field_contact_phone']['und'][0]['value']['#attributes']['placeholder']=t('Contact Phone*');
      $variables['field_volunteer_roles_duties']['und'][0]['value']['#attributes']['placeholder']=t('Volunteer Roles & Duties*');
  

      $variables['actions']['submit']['#value'] = t('submit');
       unset($variables['actions']['preview']);

      $variables['#submit'][] = 'custom_submit_function';

      function custom_submit_function($variables, &$form_state) {
        drupal_set_message('Thank you for submitting your youth volunteer opportunity/ event! Once your submissions has been reviewed, it will appear on the Opportunities page.');
      }


  }
  if(arg(2) == 'opportunity-listings') {
    drupal_set_title(t('Volunteer Opportunity Form'));
  }

}


?>