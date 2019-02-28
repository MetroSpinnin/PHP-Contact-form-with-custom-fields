<div class="form-container">
    <form name="frmContact" id="" frmContact"" method="post" action=""
        enctype="multipart/form-data"
        onsubmit="return validateContactForm()">

        <div class="input-row">
            <label style="padding-top: 20px;">Name</label> <span
                id="userName-info" class="info"></span><br /> <input
                type="text" class="input-field" name="userName"
                id="userName" />
        </div>
        <div class="input-row">
            <label>Email</label> <span id="userEmail-info" class="info"></span><br />
            <input type="text" class="input-field" name="userEmail"
                id="userEmail" />
        </div>
        <div class="input-row">
            <label>Subject</label> <span id="subject-info" class="info"></span><br />
            <input type="text" class="input-field" name="subject"
                id="subject" />
        </div>
        <div class="input-row">
            <label>Message</label> <span id="userMessage-info"
                class="info"></span><br />
            <textarea name="content" id="content" class="input-field"
                cols="60" rows="6"></textarea>
        </div>
        <div id="custom-box">
            <label>Custom Fields</label>
            <div id="custom-input-container">
                <div class="input-row">
                    <input type="text" class="custom-input-field"
                        name="custom_name[]" /> <input type="text"
                        class="custom-input-field float-right"
                        name="custom_value[]" />
                </div>
            </div>
            <input type="button" class="btn-add-more" value="Add More"
                onClick="addMore()" />
        </div>

        <div>
            <input type="submit" name="send" class="btn-submit"
                value="Send" />

            <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
        </div>
    </form>
</div>
