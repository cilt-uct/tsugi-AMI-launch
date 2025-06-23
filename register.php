<?php

$REGISTER_LTI2 = array(
"name" => "AMI Iframe",
"FontAwesome" => "fa-window-maximize",
"short_name" => "AMI Iframe",
"description" => "Request for African Management Institute (AMI) integration with Vula",
    "messages" => array("launch", "launch_grade"),
    "privacy_level" => "anonymous",  // anonymous, name_only, public
    "license" => "Apache",
    "languages" => array(
        "English"
    ),
    "analytics" => array(
        "internal"
    ),
    "source_url" => "https://github.com/cilt-uct/tsugi-AMI-launch",
    // For now Tsugi tools delegate this to /lti/store
    "placements" => array(
        /*
        "course_navigation", "homework_submission",
        "course_home_submission", "editor_button",
        "link_selection", "migration_selection", "resource_selection",
        "tool_configuration", "user_navigation"
        */
    ),
);
