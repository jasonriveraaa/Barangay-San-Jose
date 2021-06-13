<?php
$message = '';
$captcha_message = '';

if (isset($_POST['btn_submit_Bpermit'])) {

    if (!isset($_POST['agree']) || empty($_POST['agree'])) {
        $message = 'Please certify that the information are true and correct';
    } else {

        if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {

            $captcha_message = "reCAPTHCA verification failed, please try again.";
        } else {
            $secret = '6Lejc48aAAAAABP5lrLDRNqu4UKU3-hx_YQYf3PH';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response);

            if ($response->success) {

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $timestamp = isset($_SESSION['form_submitted_ts'])
                        ? $_SESSION['form_submitted_ts']
                        : null;
                    if (is_null($timestamp) || (time() - $timestamp) > 10 * 60) {
                        if (isset($_POST)) {

                            $business_lname = $_POST['form_permit_lname'];
                            $business_fname = $_POST['form_permit_fname'];
                            $business_mname = $_POST['form_permit_mname'];
                            $business_suffix = $_POST['form_permit_suffix'];
                            $business_owner_address = $_POST['form_permit_owner_address'];
                            $business_name = $_POST['form_permit_name'];
                            $business_address = $_POST['form_permit_address'];
                            $release_date = Date('y:m:d', strtotime('+2 days'));

                            $sql = "INSERT INTO tbl_business (business_lname,business_fname,business_mname,business_suffix,business_owner_address,business_name,business_address,business_date,business_appointment_date) VALUE ('$business_lname','$business_fname','$business_mname','$business_suffix','$business_owner_address','$business_name','$business_address',now(),'$release_date')";

                            $result = mysqli_query($con, $sql);

                            if ($result) {
                                $_SESSION['form_submitted_ts'] = time();
                                header("location: req_success.php");
                            } else {
                                echo "Query Failed";
                            }
                        }
                    } else {
                        // Form submitted in last 10 minutes.  Perhaps send HTTP 403 header.
                        header("location: req_failed.php");
                    }
                }
            } else {
            }
        }
    }
}

?>

<div class="container">
    <div class="indigency-content">
        <div class="indigency-guide">
            <h1>BUSINESS PERMIT REQUEST FORM</h1>
        </div>
        <form class="row g-3" action="" method="POST" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="lname" class="col-sm-2 col-form-label-sm">Last Name <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="lname" name="form_permit_lname" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="fname" class="col-sm-2 col-form-label-sm">First Name <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="fname" name="form_permit_fname" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="mname" class="col-sm-2 col-form-label-sm">Middle Name <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="mname" name="form_permit_mname" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="suffix" class="col-sm-2 col-form-label-sm">Suffix (e.g. Jr)</label>
                <div class="col-sm-5">
                    <select class="form-select" id="suffix" name="form_permit_suffix">
                        <option value="">--SELECT SUFFIX--</option>
                        <option value="Jr.">Jr.</option>
                        <option value="Sr.">Sr.</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="owners_adress" class="col-sm-2 col-form-label-sm">Address <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="owners_adress" name="form_permit_owner_address" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="business-name" class="col-sm-2 col-form-label-sm">Business Name <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="business-name" name="form_permit_name" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="row mb-3">
                <label for="business-address" class="col-sm-2 col-form-label-sm">Business Address <span class="required">*</span></label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="business-address" name="form_permit_address" required onkeyup="this.value = this.value.toUpperCase()">
                </div>
            </div>

            <div class="indigency-guide">
                <p class="security">Security</p>
            </div>

            <div class="g-recaptcha" data-sitekey="6Lejc48aAAAAAD1nvVNkRqZQyZ03jjkHG2j8UAKx"></div>
            <p class="required"><?php echo $captcha_message ?></p>

            <div class="">
                <div class="form-check">
                    <label class="form-check-label" for="agree">
                        <input class="form-check-input" type="checkbox" id="agree" name="agree">I certify that above information are true and correct.</label>
                    <p class="required"><?php echo $message ?></p>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="btn_submit_Bpermit">Submit</button>
            </div>

        </form>
    </div>
</div>