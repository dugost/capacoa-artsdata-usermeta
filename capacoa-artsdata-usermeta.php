<?php

/*
Plugin Name: CAPACOA Usermeta for Artsdata.ca
Version: 2.2.1
Description: This is a Wordpress plugin that enables WP meta data so CAPACOA member organizations can be uploaded to Artsdata.
Author: Culture Creates
Author URI: https://culturecreates.com/
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: artsdata
*/

/** Unlock users that have no WP posts **/
add_filter('rest_user_query', 'remove_has_published_posts_from_api_user_query', 10, 2);
function remove_has_published_posts_from_api_user_query($prepared_args, $request)
{
	unset($prepared_args['has_published_posts']);

	return $prepared_args;
}

/** Add metadata fields to WP REST Users API **/
function get_user_meta_for_restapi($user, $field_name, $request) {
	  $userObj = get_userdata( $user['id'] );
    return array (
		'operating_name1' => $userObj->operating_name1,
		'operating_name1_language' => $userObj->operating_name1_language,
		'operating_name2' => $userObj->operating_name2,
		'operating_name2_language' => $userObj->operating_name2_language,
		'legal_name' => $userObj->legal_name,
		'legal_name_language' => $userObj->legal_name_language,
		'also_known_as' => $userObj->also_known_as,
		'business_number' => $userObj->business_number,
		'legal_form' => $userObj->legal_form,
		'charitable_status' => $userObj->charitable_status,
		'primary_activity' => $userObj->primary_activity,
		'discipline_genre' => $userObj->discipline_genre,
		'presenting_format' => $userObj->presenting_format,
		'occupation' => $userObj->occupation,
		'website_official' => $userObj->website_official,
		'events_page' => $userObj->events_page,
		'artsdata_id' => $userObj->artsdata_id,
		'wikidata_id' => $userObj->wikidata_id,
		'venue_name' => $userObj->venue_name,
		'venue_relationship' => $userObj->venue_relationship,
		'wikidata_id_venue' => $userObj->wikidata_id_venue,
		'venue_other_name' => $userObj->venue_other_name,
		'venue_other_relationship' => $userObj->venue_other_relationship,
		'wikidata_id_venue_other' => $userObj->wikidata_id_venue_other,
		'terms_conditions' => $userObj->terms_conditions,
		'pmpro_bcountry' => $userObj->pmpro_bcountry,
		'pmpro_bcity' => $userObj->pmpro_bcity,
		'pmpro_bstate' => $userObj->pmpro_bstate,
	  	'MemberTerminationDate' => $userObj->MemberTerminationDate,
	  	'type' => $userObj->type,
		'description' => $userObj->description,
		'description_fr' => $userObj->description_fr,
    );
}

function create_restapi_user_obj_field() {
     register_rest_field('user', 'usermeta', array(
        'get_callback'    => 'get_user_meta_for_restapi',
        'schema'          => null,
    ));

}
add_action('rest_api_init', 'create_restapi_user_obj_field');

?>
