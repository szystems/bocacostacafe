<?php
    $field_name = $_POST['name'];
    $field_job = $_POST['job'];
    $field_email = $_POST['email'];
    $field_business = $_POST['business'];
    $field_years = $_POST['years'];
    $field_locations = $_POST['locations'];
    $field_level = $_POST['level'];
    $field_volume = $_POST['volume'];
    $field_about = $_POST['about'];

    $mail_to = 'wholesale@bocacostacafe.com';

    $subject = 'Message from www.bocacostacafe.com (Wholesale): ' . $field_name;

    $body_message = 'From: '.$field_name."\n";
    $body_message .= 'Job Title: '.$field_job."\n";
    $body_message .= 'E-mail: '.$field_email."\n";
    $body_message .= 'Name of Business: '.$field_business."\n";
    $body_message .= 'Years in Business? '.$field_years."\n";
    $body_message .= 'Number of Locations? '.$field_locations."\n";
    $body_message .= 'What is your level of experience working with coffee? '.$field_level."\n";
    $body_message .= 'Volume of pounds of coffee needed per week? '.$field_volume."\n";
    $body_message .= 'How did you hear about us? '.$field_about;

    $headers = "From: $cf_email\r\n";
    $headers .= "Reply-To: $cf_email\r\n";

    $mail_status = mail($mail_to, $subject, $body_message, $headers);

    if ($mail_status) { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Thank you for the message. We will contact you shortly.');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'wholesale.html';
        </script>
    <?php
    }

    else { ?>
        <script language="javascript" type="text/javascript">
            // Print a message
            alert('Message failed. Please, send an email to info@bocacostacafe.com');
            // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com
            window.location = 'wholesale.html';
        </script>
    <?php
    }
?>