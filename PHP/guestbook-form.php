<form id="guestBookForm" method="post" action="confirm.php">
    <fieldset class="form-group">
        <legend>Contact Info</legend>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            <span class="err" id="errFname">Please enter a first name</span>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
            <span class="err" id="errLname">Please enter a last name</span>
        </div>
        <div class="form-group">
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" id="jobTitle">
        </div>
        <div class="form-group">
            <label for="Company">Company</label>
            <input type="text" class="form-control" id="Company" >
        </div>
        <div class="form-group">
            <label for="linkedInURL">LinkedIn URL</label>
            <input type="text" class="form-control" id="linkedInURL" name="linkedInURL">
            <span class="err" id="errLinkedin">Please enter a valid Linkedin URL </span>
        </div>
        <div class="form-group">
            <label for="emailAddress">Email Address</label>
            <input type="text" class="form-control" id="emailAddress" name="emailAddress">
            <span class="err" id="errValidEmail">Please enter a valid email</span>
            <span class="err" id="errEmail">Please enter an email address for the mailing list</span>
        </div>
    </fieldset>

    <fieldset id="form-group">
        <legend>How we met</legend>

        <select class="form-control" id="howMet" name="howMet">
            <option value="none">Select</option>
            <option value="meetUp">Meetup</option>
            <option value="jobFair">Job Fair</option>
            <option value="linkedIn">LinkedIn</option>
            <option value="other">Other</option>
            <option value="haventMet">Haven't met yet</option>
        </select>
        <span class="err" id="errMet">Please enter how we met</span>
        <div class="form-group">
            <label for="otherBox">If other, please specify</label>
            <textarea class="form-control" id="otherBox" rows="3"></textarea>
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
    </fieldset>

    <fieldset class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox"
                   id="email" name="email" onchange="showType()">
            <label class="form-check-label" for="email">
                Please add me yo your mailing list!
            </label>
        </div>
        <div id="mailType">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method"
                       id="HTML" value="HTML" checked>
                <label class="form-check-label" for="HTML">
                    HTML
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method"
                       id="Text" value="Text">
                <label class="form-check-label" for="Text">
                    Text
                </label>
            </div>
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>