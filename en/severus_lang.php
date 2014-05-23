<?php
/*
@language: English
*/
// Buttons
$lang['button_login'] = "Login";
$lang['button_logout'] = "Logout";
$lang['button_forgot'] = "Forgot password";
$lang['button_reset'] = "Reset";
$lang['button_add_new_server'] = "Add new server";
$lang['button_force'] = "Force Check Now";
$lang['button_download_connector'] = "Download Connector";
$lang['button_download_connector_script'] = "Download connector script";
$lang['button_edit'] = "Edit";
$lang['button_view'] = "View";
$lang['button_remove'] = "Remove";
$lang['button_edit_server'] = "Edit server";
$lang['button_add_server'] = "Add server";
$lang['button_delete_server'] = "Delete server";
$lang['button_register_server'] = "Register server now";
$lang['button_add_service'] = "Add service";
$lang['button_edit_user'] = "Edit User";
$lang['button_save'] = "Save";
$lang['button_install'] = "Install";
$lang['button_save_new_password'] = "Save New Password";
$lang['button_delete'] = "Delete";
$lang['button_save_settings'] = "Save settings";
$lang['button_delete_user'] = "Delete User";
$lang['button_set_schedule'] = "Set Schedule";
$lang['button_yes_install'] = "Yes, add a server now";
$lang['button_no_later'] = "No, i\'ll do it later";
$lang['button_yes_delete'] = "Yes, delete this server";
$lang['button_cancel'] = "Cancel";

// Text field placeholders (all should be lowercase)
$lang['placeholder_hostname'] = "hostname";
$lang['placeholder_database'] = "database";
$lang['placeholder_name'] = "your name";

$lang['placeholder_username'] = "username";
$lang['placeholder_password'] = "password";
$lang['placeholder_confirm_password'] = "confirm password";
$lang['placeholder_email'] = "email address";
$lang['placeholder_path'] = "path to script";
$lang['placeholder_service_name'] = "service name";
$lang['placeholder_port'] = "port";
$lang['placeholder_script_path'] = "script path";
$lang['placeholder_server_description'] = "enter server description";

// First install
$lang['first_install1'] = "First time setup";
$lang['first_install2'] = "You have just completed installing the system and currently have no servers, would you like to add one now?";

$lang['first_install3'] = "The install directory still exists, please delete it or you could lose data";

// Titles
$lang['title_install'] = "Install Severus";
$lang['title_database_setup'] = "Database settings";
$lang['title_admin_setup'] = "Admin settings";
$lang['title_drive_space'] = "Drive Space";
$lang['title_used'] = "Used";
$lang['title_free'] = "Free";
$lang['title_response_time'] = "Response Time (ms)";


$lang['title_login'] = "Login to"; // for the "Login to severus" page
$lang['title_reset'] = "Reset Password?";
$lang['title_services'] = "Services";
$lang['title_add_server'] = "Add Server";
$lang['title_connector_script'] = "Connector script";
$lang['title_settings'] = "Settings";
$lang['title_edit_user'] = "Edit user";
$lang['title_description'] = "Description";
$lang['title_confirm_delete'] = "Delete this server?";

// Messages
$lang['message_setup1'] = "The database configuration file could not be written, please chmod application/config/database.php file to 777";
$lang['message_setup2'] = "The database could not be created, please verify your settings.";
$lang['message_setup3'] = "The database tables could not be created, please verify your settings.";
$lang['message_setup4'] = "Not all fields have been filled in correctly. The host, username, password, and database name are required as are all Admin settings fields.";
$lang['message_setup5'] = "Please make the application/config/database.php file writable.";
$lang['message_setup6'] = "Example: chmod 777 application/config/database.php - For windows servers make sure it's writable by IUSR";
$lang['message_setup7'] = "Please use a valid email address.";

$lang['message_reset1'] = "Reset Password?";
$lang['message_reset2'] = "You have successfully reset your password.";
$lang['message_reset3'] = "Thank you. We have sent you an email with further instructions on how to reset your password.";

$lang['message_cron1'] = "Could not automatically delete cron job, please delete it manually";
$lang['message_cron2'] = "Scheduled updates successfully disabled";
$lang['message_cron3'] = "Entry exists in cron job, but the time interval could not be updated, please update your cron job manually it manually";
$lang['message_cron4'] = "Schedule has been successfully updated";
$lang['message_cron5'] = "Could not automatically update cron job, please update it manually";
$lang['message_cron6'] = "Automatically scheduling tasks currently only works on linux, to manually schedule a task on windows create a new scheduled task and get it to run ";
$lang['message_cron7'] = "Afterwards set the interval time below to match the scheduled task as this is used to determine when the next server check will run";
$lang['message_cron8'] = "Unable to automatically schedule a task, you need to create a cron job that runs ";
$lang['message_cron9'] = "The schedule time below needs to match the cron job interval time as this is used to determine when the next server check will run";
$lang['message_cron10'] = "Scheduled updates successfully disabled";
$lang['message_cron11'] = "Scheduled updates successfully disabled";
$lang['message_cron12'] = "Scheduled updates successfully disabled";

$lang['message_home1'] = "Your username and/or password is incorrect.";
$lang['message_home2'] = "Reset your Password.";
$lang['message_home3'] = "To reset your password please click the link below and follow the instructions:";
$lang['message_home4'] = "If you did not request to reset your password then please just ignore this email and no changes will occur.";
$lang['message_home5'] = "Note: This reset code will expire after";
$lang['message_home6'] = "We couldn\'t find that email address in our system.";

$lang['message_server1'] = "Could not register the server, the connector script has the wrong key, download the connector script again and re-upload it";
$lang['message_server2'] = "Could not register the server, the most likely cause of this is the address you supplied is incorrect, double check the path details";
$lang['message_server3'] = "There was an error registering the server";
$lang['message_server4'] = "Error: A server with this IP address already exists, to view this server";
$lang['message_server5'] = "click here";
$lang['message_server6'] = "The server was successfully registered, "; // part of "The server was successfully registered, click here to view/configure it or add another server below"
$lang['message_server7'] = "to view/configure it or add another server below"; // see above comment
$lang['message_server8'] = "Error: There was a problem adding the server to the database";

$lang['message_settings1'] = "Settings updated";
$lang['message_settings2'] = "General";
$lang['message_settings3'] = "Items";

$lang['message_users1'] = "User successfully created";
$lang['message_users2'] = "User successfully updated";
$lang['message_users3'] = "You do not have permission to edit that user";
$lang['message_users4'] = "User deleted";

// Navigation
$lang['nav_dashboard'] = "Dashboard";
$lang['nav_servers'] = "Servers";
$lang['nav_users'] = "Users";
$lang['nav_settings'] = "Settings";
$lang['nav_services'] = "Services";
$lang['nav_schedule'] = "Schedule";
$lang['nav_support'] = "Support";

// Home
$lang['home_total'] = "Total";
$lang['home_online'] = "Servers";
$lang['home_online2'] = "Online";
$lang['home_master'] = "Master Server";
$lang['home_last_check'] = "Last Server Check";


// Server page / options
$lang['server_online'] = "Online";
$lang['server_offline'] = "Offline";
$lang['server_available'] = "Available";
$lang['server_cached'] = "Cached";
$lang['server_unknown'] = "Unknown";
$lang['server_replace'] = "Replace connector script";
$lang['server_never'] = "Never";
$lang['server_server'] = "Server";
$lang['server_load'] = "Load";
$lang['server_response'] = "Response";
$lang['server_model'] = "Model";
$lang['server_processes'] = "Processes";
$lang['server_memory'] = "Memory";
$lang['server_ip'] = "IP Address";
$lang['server_services'] = "Services";
$lang['server_tab_all'] = "All Servers";
$lang['server_tab_add'] = "Add New";
$lang['server_add_script1'] = "The first thing you need to do is download the connector script by clicking the button below and upload it to your website.";
$lang['server_add_script2'] = "Note: trying to hit the connector script directly yourself will 404 this is normal and expected.";
$lang['server_settings_text'] = "When you have uploaded the connector script to your server set the web address to the script (i.e. http://domain.com/connector_script.php)";
$lang['server_currently_none'] = "There are currently no servers attached";
$lang['server_currently_no_attention'] = "There are currently no servers requiring attention";
$lang['server_no_description'] = "No description set";
$lang['server_confirm_delete'] = "Please confirm you want to delete this server, if you do, all data for this server will be deleted";


// Users page
$lang['users_tab_all'] = "All Users";
$lang['users_tab_add'] = "Add New";
$lang['users_last_login'] = "Last Login";
$lang['users_label_name'] = "Name";
$lang['users_label_username'] = "Username";
$lang['users_label_password'] = "Password";
$lang['users_label_blank'] = "leave blank to keep current";
$lang['users_label_email'] = "Email";
$lang['users_label_active'] = "Active";
$lang['users_option_enabled'] = "Enabled";
$lang['users_option_disabled'] = "Disabled";

// Settings page
$lang['settings_label_public'] = "Public page";
$lang['settings_label_additional'] = "Additional";
$lang['settings_public_text'] = "If you enable the public page then an overview of the servers will be visible without logging in, otherwise the login page will be displayed";
$lang['settings_label_high_load_linux'] = "High load value (linux)";
$lang['settings_high_load_linux_text'] = "Set the server load value that will trigger a server to show up in the warning list.";
$lang['settings_label_high_load_windows'] = "High load value (windows)";
$lang['settings_high_load_windows_text'] = "Windows servers don't have a load value like linux servers so set the CPU percent value.";
$lang['settings_public_enabled'] = "Enable public page";
$lang['settings_public_disabled'] = "Disable public page";
$lang['settings_label_email_notification'] = "Email Notification";
$lang['settings_text_email_notification'] = "Leave blank to disable or enter you email address to receive emails when a server goes offline";
$lang['settings_label_language'] = "Default laguage";
$lang['settings_language_text'] = "Select the default language to be displayed on the site";


// Services page
$lang['services_current_services'] = "Current Services";
$lang['services_add_new_service'] = "Add new service";
$lang['services_add_new_adv_service'] = "Add new advanced service";
$lang['services_advanced_text'] = "Advanced services allow you to return the state of an external script, the script must return 1 for ok and 0 for critical.  Set the path relative to the connector script";
$lang['services_none'] = "No services configured";
$lang['services_add'] = "Add services";


// Schedule page
$lang['schedule_server_checks'] = "Schedule server checks";
$lang['schedule_text'] = "Scheduling allows server checks to be run automatically without any intervention, you can still manually force a check whenever you want, in some cases we may not be able to create the job automatically.";
$lang['schedule_option1'] = "Disable automatic checks";
$lang['schedule_option2'] = "Every minute";
$lang['schedule_option_2'] = "Every 2 minutes";
$lang['schedule_option_3'] = "Every 3 minutes";
$lang['schedule_option_4'] = "Every 4 minutes";
$lang['schedule_option_5'] = "Every 5 minutes";
$lang['schedule_option_10'] = "Every 10 minutes";
$lang['schedule_option_15'] = "Every 15 minutes";
$lang['schedule_option_20'] = "Every 20 minutes";
$lang['schedule_option_25'] = "Every 25 minutes";
$lang['schedule_option_30'] = "Every 30 minutes";
$lang['schedule_option_45'] = "Every 45 minutes";
$lang['schedule_option_60'] = "Every 60 minutes";

// Support page
$lang['support_title'] = "Support";
$lang['support_text1'] = "We have worked hard to make Severus as simple and intuitive to use as possible, however, if you are still struggling to get something working please contact us on the CodeCanyon discussion board and we will do our best to help you.";
$lang['support_text2'] = "Rate us";
$lang['support_text3'] = "Please rate us on the CodeCanyon marketplace. If you are going to rate us less than 4 stars, please contact us first and let us know why, and how we could improve the app to get a higher rating.";
$lang['support_text4'] = "FAQs";
$lang['support_text5'] = "How do I set which services are on my server";
$lang['support_text6'] = "When you edit a server, a list of all the possible services are available, to enable a service, just input the port (or leave at the default), tick the checkbox and click save.";
$lang['support_text7'] = "I've change the services but they don't show up";
$lang['support_text8'] = "Services will be updated at the next server check, if you want it to be applied immediately click the force server check button on the dashboard.";
$lang['support_text9'] = "I want to schedule checks for an interval not listed, how do I do it?";
$lang['support_text10'] = "The easiest way to do this is disable the schedule, then in an ssh session with your server type \"crontab -e\" and the command you need to execute is";
$lang['support_text11'] = "an example for a weekly cron would be";
$lang['support_text12'] = "check every 4 hours";
$lang['support_text13'] = "doing it this way will mean you don't have a countdown to the next check however, however, if you are comfortable editing the database you can go to the settings table and edit the \"setting_heartbeat_interval\" to the value you picked in seconds, so if you have a check running every 4 hours set this value as ";
$lang['support_text14'] = "My server is showing up as \"replace connector script\", what does that mean?";
$lang['support_text15'] = "It could mean you have reinstalled the master server but haven't updated the remote connector script. When the master server is installed it creates a unique key it uses to communicate with the remote server, when you download the script it embeds this code, so if you re-install the code will no longer match without re-uploading the connector script";
