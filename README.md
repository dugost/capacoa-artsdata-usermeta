# capacoa-artsdata-usermeta

This is a Wordpress plugin that adds additional fields to the WP REST User API so CAPACOA member organizations can be uploaded to Artsdata.

This plug-is for CAPACOA only.

Here is an example call to get a list of 50 users:

`GET /wp-json/wp/v2/users?per_page=50`

Here is an example JSON output for user id: "25" in the test environment http://test.capacoa.ca
```
"usermeta": {
      "operating_name1": "The Test Arts Centre",
      "operating_name1_language": "en",
      "operating_name2": "Le Centre des arts bidon",
      "operating_name2_language": "fr",
      "legal_name": "THIS IS NOT REAL INC.",
      "legal_name_language": "en",
      "also_known_as": "TTAC",
      "business_number": "123456789",
      "legal_form": "Municipal corporation",
      "charitable_status": "Not a charitable organization",
      "primary_activity": "Presenting/promoting live performances",
      "discipline_genre": [
        "Circus"
      ],
      "presenting_format": "",
      "website_official": "http://nowhere.ca",
      "events_page": "http://nowhere.ca/events",
      "wikidata_id": "Q20390140293",
      "venue_name": "Nowhere Theatre",
      "venue_relationship": "Manager/Operator",
      "wikidata_id_venue": "Q200917923",
      "venue_other_name": "",
      "venue_other_relationship": "",
      "wikidata_id_venue_other": "",
      "terms_conditions_v1_0": "agree and disclose (v1.0)",
      "pmpro_bcountry": "CA",
      "pmpro_bcity": "Gatineau",
      "pmpro_bstate": "QC"
    }
