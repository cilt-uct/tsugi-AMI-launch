
AMI Iframe
-------------------

Request for African Management Institute (AMI) integration with Vula as the current website does not provide LTI integration.

## Required Paramaters

| Paramater | Description |
|-----------|-------------|
| api_key | APi key for this particular course |
| academy_id | The academic id of the university |

This constructs a url based on the `api_key`, `academic_id`, and user email to launch a iframe that logs the user into the AMI system.

Based on https://github.com/tsugitools/iframe
