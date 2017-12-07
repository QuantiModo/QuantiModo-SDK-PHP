# Variable

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_array** | [**\QuantiModo\Client\Model\TrackingReminderNotificationActionArray[]**](TrackingReminderNotificationActionArray.md) |  | [optional] 
**alias** | **string** | Example: | [optional] 
**available_units** | [**\QuantiModo\Client\Model\Unit[]**](Unit.md) |  | [optional] 
**cause_only** | **bool** | A value of 1 indicates that this variable is generally a cause in a causal relationship.  An example of a causeOnly variable would be a variable such as Cloud Cover which would generally not be influenced by the behaviour of the user | [optional] 
**charts** | **object** | An object with various chart properties each property contain and svg and Highcharts configuration | [optional] 
**charts_link_dynamic** | **string** | Example: https://local.quantimo.do/ionic/Modo/www/#/app/charts/Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29?variableName&#x3D;Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png | [optional] 
**charts_link_email** | **string** | Example: mailto:?subject&#x3D;Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21&amp;body&#x3D;See%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20history%20at%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%0A%0AHave%20a%20great%20day! | [optional] 
**charts_link_facebook** | **string** | Example: https://www.facebook.com/sharer/sharer.php?u&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png | [optional] 
**charts_link_google** | **string** | Example: https://plus.google.com/share?url&#x3D;https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png | [optional] 
**charts_link_static** | **string** | Example: https://local.quantimo.do/api/v2/charts?variableName&#x3D;Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29&amp;userId&#x3D;230&amp;pngUrl&#x3D;https%3A%2F%2Fapp.quantimo.do%2Fionic%2FModo%2Fwww%2Fimg%2Fvariable_categories%2Ftreatments.png | [optional] 
**charts_link_twitter** | **string** | Example: https://twitter.com/home?status&#x3D;Check%20out%20my%20Trader%20Joes%20Bedtime%20Tea%20%2F%20Sleepytime%20Tea%20%28any%20Brand%29%20data%21%20https%3A%2F%2Flocal.quantimo.do%2Fapi%2Fv2%2Fcharts%3FvariableName%3DTrader%2520Joes%2520Bedtime%2520Tea%2520%252F%2520Sleepytime%2520Tea%2520%2528any%2520Brand%2529%26userId%3D230%26pngUrl%3Dhttps%253A%252F%252Fapp.quantimo.do%252Fionic%252FModo%252Fwww%252Fimg%252Fvariable_categories%252Ftreatments.png%20%40quantimodo | [optional] 
**child_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**client_id** | **string** | clientId | [optional] 
**combination_operation** | **string** | Example: MEAN | [optional] 
**common_alias** | **string** | Example: Anxiety / Nervousness | [optional] 
**common_tagged_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**common_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**common_variable_most_common_connector_id** | **int** | Example: 51 | [optional] 
**common_variable_updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-02-07 23:43:39 | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | When the record was first created. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format | [optional] 
**unit_abbreviated_name** | **string** | Example: count | [optional] 
**unit_category_id** | **int** | Example: 6 | [optional] 
**unit_category_name** | **string** | Example: Miscellany | [optional] 
**unit_id** | **int** | ID of unit to use for this variable | [optional] 
**unit_name** | **string** | Example: Count | [optional] 
**description** | **string** | Example: negative | [optional] 
**duration_of_action** | **int** | The amount of time over which a predictor/stimulus event can exert an observable influence on an outcome variable value. For instance, aspirin (stimulus/predictor) typically decreases headache severity for approximately four hours (duration of action) following the onset delay. | [optional] 
**duration_of_action_in_hours** | **int** | Example: 168 | [optional] 
**earliest_filling_time** | **int** | Earliest filling time | [optional] 
**earliest_measurement_time** | **int** | Earliest measurement time | [optional] 
**earliest_source_time** | **int** | Earliest source time | [optional] 
**error_message** | **string** | error_message | [optional] 
**experiment_end_time** | [**\DateTime**](\DateTime.md) | Latest measurement start_time to be used in analysis. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format | [optional] 
**experiment_end_time_seconds** | **int** | Example: 1893477600 | [optional] 
**experiment_end_time_string** | [**\DateTime**](\DateTime.md) | Example: 2030-01-01 06:00:00 | [optional] 
**experiment_start_time** | [**\DateTime**](\DateTime.md) | Earliest measurement start_time to be used in analysis. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format | [optional] 
**experiment_start_time_seconds** | **int** | Example: 1269307902 | [optional] 
**experiment_start_time_string** | [**\DateTime**](\DateTime.md) | Example: 2010-03-23 01:31:42 | [optional] 
**filling_type** | **string** | 0 -&gt; No filling, 1 -&gt; Use filling-value | [optional] 
**filling_value** | **float** | When it comes to analysis to determine the effects of this variable, knowing when it did not occur is as important as knowing when it did occur. For example, if you are tracking a medication, it is important to know when you did not take it, but you do not have to log zero values for all the days when you haven&#39;t taken it. Hence, you can specify a filling value (typically 0) to insert whenever data is missing. | [optional] 
**icon_icon** | **string** | Example: ion-sad-outline | [optional] 
**id** | **int** | Example: 95614 | 
**image_url** | **string** |  | [optional] 
**informational_url** | **string** | Example: | [optional] 
**ingredient_of_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**ingredient_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**input_type** | **string** | Example: value | [optional] 
**ion_icon** | **string** |  | [optional] 
**joined_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**join_with** | **int** | The Variable this Variable should be joined with. If the variable is joined with some other variable then it is not shown to user in the list of variables | [optional] 
**kurtosis** | **float** | Kurtosis | [optional] 
**last_original_unit_id** | **int** | ID of last original Unit | [optional] 
**last_original_value** | **int** | Last original value which is stored | [optional] 
**last_processed_daily_value** | **double** | Example: 500 | [optional] 
**last_successful_update_time** | [**\DateTime**](\DateTime.md) | When this variable or its settings were last updated | [optional] 
**last_unit_id** | **int** | ID of last Unit | [optional] 
**last_value** | **float** | Last Value | [optional] 
**latest_filling_time** | **int** | Latest filling time | [optional] 
**latest_measurement_time** | **int** | Latest measurement time | [optional] 
**latest_source_time** | **int** | Latest source time | [optional] 
**latest_user_measurement_time** | **int** | Example: 1501383600 | [optional] 
**latitude** | **float** | Latitude | [optional] 
**location** | **string** | Location | [optional] 
**longitude** | **float** | Longitude | [optional] 
**manual_tracking** | **bool** | Example: 1 | [optional] 
**maximum_allowed_value** | **float** | The maximum allowed value for measurements. While you can record a value above this maximum, it will be excluded from the correlation analysis. | [optional] 
**maximum_recorded_daily_value** | **float** | Maximum recorded daily value of this variable | [optional] 
**maximum_recorded_value** | **double** | Example: 1 | [optional] 
**mean** | **float** | Mean | [optional] 
**measurements_at_last_analysis** | **int** | Number of measurements at last analysis | [optional] 
**median** | **float** | Median | [optional] 
**minimum_allowed_value** | **float** | The minimum allowed value for measurements. While you can record a value below this minimum, it will be excluded from the correlation analysis. | [optional] 
**minimum_recorded_value** | **float** | Minimum recorded value of this variable | [optional] 
**most_common_connector_id** | **int** | Example: 51 | [optional] 
**most_common_original_unit_id** | **int** | Example: 23 | [optional] 
**most_common_unit_id** | **int** | Most common Unit ID | [optional] 
**most_common_value** | **float** | Most common value | [optional] 
**name** | **string** | Example: Trader Joes Bedtime Tea / Sleepytime Tea (any Brand) | 
**number_of_aggregate_correlations_as_cause** | **int** | Example: 1 | [optional] 
**number_of_aggregate_correlations_as_effect** | **int** | Example: 310 | [optional] 
**number_of_changes** | **int** | Number of changes | [optional] 
**number_of_correlations** | **int** | Number of correlations for this variable | [optional] 
**number_of_processed_daily_measurements** | **int** | Number of processed measurements | [optional] 
**number_of_raw_measurements** | **int** | Example: 295 | [optional] 
**number_of_tracking_reminders** | **int** | Example: 1 | [optional] 
**number_of_unique_daily_values** | **float** | Number of unique daily values | [optional] 
**number_of_unique_values** | **int** | Example: 2 | [optional] 
**number_of_user_correlations_as_cause** | **int** | Example: 115 | [optional] 
**number_of_user_correlations_as_effect** | **int** | Example: 29014 | [optional] 
**number_of_user_variables** | **int** | Example: 2 | [optional] 
**onset_delay** | **int** | The amount of time in seconds that elapses after the predictor/stimulus event before the outcome as perceived by a self-tracker is known as the onset delay. For example, the onset delay between the time a person takes an aspirin (predictor/stimulus event) and the time a person perceives a change in their headache severity (outcome) is approximately 30 minutes. | [optional] 
**onset_delay_in_hours** | **double** | Example: 0.5 | [optional] 
**outcome** | **bool** | Outcome variables (those with &#x60;outcome&#x60; &#x3D;&#x3D; 1) are variables for which a human would generally want to identify the influencing factors. These include symptoms of illness, physique, mood, cognitive performance, etc.  Generally correlation calculations are only performed on outcome variables | [optional] 
**outcome_of_interest** | **int** | Example: 1 | [optional] 
**parent** | **string** | Example: | [optional] 
**parent_id** | **int** | ID of the parent variable if this variable has any parent | [optional] 
**parent_user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**png_path** | **string** | Example: img/variable_categories/treatments.png | [optional] 
**png_url** | **string** | Example: https://app.quantimo.do/ionic/Modo/www/img/variable_categories/treatments.png | [optional] 
**predictor_of_interest** | **int** | Example: 0 | [optional] 
**price** | **double** | Example: 95.4 | [optional] 
**product_url** | **string** | Example: | [optional] 
**public** | **int** | Is variable public | [optional] 
**raw_measurements_at_last_analysis** | **int** | Example: 131 | [optional] 
**second_most_common_value** | **double** | Example: 1 | [optional] 
**second_to_last_value** | **double** | Example: 250 | [optional] 
**share_user_measurements** | **bool** | Example: 1 | [optional] 
**skewness** | **float** | Skewness | [optional] 
**sources** | **string** | Comma-separated list of source names to limit variables to those sources | [optional] 
**standard_deviation** | **double** | Standard deviation Example: 0.46483219855434 | [optional] 
**status** | **string** | status | [optional] 
**subtitle** | **string** | Based on sort filter and can be shown beneath variable name on search list | [optional] 
**svg_url** | **string** | Example: https://app.quantimo.do/ionic/Modo/www/img/variable_categories/treatments.svg | [optional] 
**third_most_common_value** | **double** | Example: 6 | [optional] 
**third_to_last_value** | **double** | Example: 250 | [optional] 
**unit** | [**\QuantiModo\Client\Model\Unit**](Unit.md) |  | [optional] 
**upc** | **string** | Universal product code or similar | [optional] 
**updated** | **int** | updated | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | When the record in the database was last updated. Use UTC ISO 8601 &#x60;YYYY-MM-DDThh:mm:ss&#x60;  datetime format | [optional] 
**updated_time** | [**\DateTime**](\DateTime.md) | Example: 2017-07-30 14:58:26 | [optional] 
**user_id** | **int** | User ID | 
**user_tagged_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**user_tag_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) |  | [optional] 
**user_variable_unit_abbreviated_name** | **string** | Example: count | [optional] 
**user_variable_unit_category_id** | **int** | Example: 6 | [optional] 
**user_variable_unit_category_name** | **string** | Example: Miscellany | [optional] 
**user_variable_unit_id** | **int** | Example: 23 | [optional] 
**user_variable_unit_name** | **string** | Example: Count | [optional] 
**user_variable_filling_value** | **double** | Example: -1 | [optional] 
**user_variable_most_common_connector_id** | **int** | Example: 51 | [optional] 
**user_variable_updated_at** | [**\DateTime**](\DateTime.md) | Example: 2017-07-30 14:58:26 | [optional] 
**user_variable_valence** | **string** | Example: | [optional] 
**user_variable_variable_category_id** | **int** | Example: 13 | [optional] 
**user_variable_variable_category_name** | **string** | Example: Treatments | [optional] 
**user_variable_wikipedia_title** | **string** | Example: | [optional] 
**variable_category** | [**\QuantiModo\Client\Model\VariableCategory**](VariableCategory.md) |  | [optional] 
**data_source** | [**\QuantiModo\Client\Model\DataSource**](DataSource.md) |  | [optional] 
**joined_variables** | [**\QuantiModo\Client\Model\Variable[]**](Variable.md) | Array of Variables that are joined with this Variable | [optional] 
**last_source** | **int** | Last source | [optional] 
**last_unit** | **string** | Last unit | [optional] 
**most_common_unit** | **string** | Most common unit | [optional] 
**valence** | **string** | Example: positive | [optional] 
**variable_category_id** | **int** | Example: 6 | [optional] 
**variable_category_image_url** | **string** | Example: https://maxcdn.icons8.com/Color/PNG/96/Household/sleeping_in_bed-96.png | [optional] 
**variable_category_name** | **string** | Variable category like Mood, Sleep, Physical Activity, Treatment, Symptom, etc. | [optional] 
**variable_filling_value** | **double** | Example: -1 | [optional] 
**variable_id** | **int** | Example: 96380 | 
**variable_name** | **string** | Example: Sleep Duration | [optional] 
**variance** | **double** | Example: 115947037.40816 | [optional] 
**wikipedia_title** | **string** | Example: | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

