<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<div style="margin-top:10%">
  	<div class="text-center">
  		<ul class="list-inline">
    		<li><a href=""><button class="btn btn-primary dropdown-toggle" id="largeButton" type="button">General</button></a></li>
    		<li><a href=""><button class="btn btn-primary dropdown-toggle" id="largeButton" type="button">My Plicks</button></a></li>
    		<li><a href=""><button id="largeButton" class="btn btn-primary dropdown-toggle" type="button">Job Search</button></a></li>
  		</ul>
  	</div>
		<br>
		<div class="form-container col-md-4">
			<h1> General Info </h1>
			<br>
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="first_name" class="form-control" />
			</div>
			<br>
			<br>
			<div class="form-group">
    		<label>Last Name</label>
    		<input type="text" name="last_name" class="form-control">
    	</div>
			<br>
			<br>
			<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control">
    	</div>
			<br>
			<br>
			<div class="form-group">
    		<label>Phone</label>
    		<input type="text" name="phone_number" class="form-control">
    	</div>
			<br>
			<br>
			<div class="form-group">
    		<label>Country</label>
    		<input type="text" name="country" class="form-control">
    	</div>
			<br>
			<br>
			<div class="form-group">
    		<label>Address</label>
    		<input type="text" name="address" class="form-control">
    	</div>
			<br>
			<br>
			<div class="form-group">
    		<label>City</label>
    		<input type="text" name="email" class="form-control">
    	</div>
		<br>
		<br>
		<p>State/Province *</p>
		<input class="form-control" type="text" name="state">
		<br>
		<br>
		<p>Zip/Postal Code *</p>
		<input class="form-control" type="text" name="postal_code">
		<br>
		<br>
		<p>Are you currently authorized to work in the United States? *</p>
		<select class="input__select" name="work_authorization">
		    <option value="" selected>- select -</option>
		        <option value="0">No</option>
		        <option value="1">Yes</option>
		</select>
		<br>
		<br>
		<p>Will your current authorization require renewal by your employer? *</p>
		<select class="form-control" name="authorization_renewal">
		    <option value="" selected>- select -</option>
		        <option value="0">No</option>
		        <option value="1">Yes</option>
		</select>

		</div>
		<br>
		<br>
		<div class="form-container" style="background-color:white; padding:50pt">
			<h1>Job Information</h1>
			<p>Current Job Position *</p>
			<input class="form-control" type="text" name="current_position0">
			<br>
			<br>
			<p>Pay</p>
			<input class="form-control" type="text" name="current_pay0">
			<br>
			<br>
			<p>Start Date</p>
			<input name="start_date0" class="form-control" type="date">
			<p>End Date</p>
			<input name="end_date0" class="form-control" type="date">
			<br>
			<br>
			<p>Responsibilities *</p>
			<textarea name="respon0" cols="100" rows="10" style="width:80%;"></textarea>
			<br>
			<br>
			<div id="container"></div>
			<button class="btn btn-primary dropdown-toggle" id="removeJob" type="button">Remove Work Experience</button>
			<button class="btn btn-primary dropdown-toggle" id="jobButton" type="button">Add Work Experience</button>
			<br>
			<br>
			<p>Skills (Up to 5)</p>
			<input class="form-control" type="text" name="skill0" style="width:200pt;">
			<br>
			<br>
			<div id="Skillcontainer"></div>
			<button class="btn btn-primary dropdown-toggle" id="removeSkill" type="button">Remove Skill</button>
			<button class="btn btn-primary dropdown-toggle" id="addSkill" type="button">Add Skill</button>
			<br>
			<br>
			<p>Any other information you would like to add:
			<textarea name="paragraph_text" cols="90" rows="10" style="width:80%;"></textarea>
		</div>



		<br>
		<br>
		<div class="form-container" style="background-color:white; padding:50pt">
		<h1>Equal Opportunity Self-Identification Form</h1>
		<h3>(Completion of this form is voluntary)</h3>
		<br>
		<p>Individuals seeking employment in the United States are considered without regards to race, color, religion, national origin, age, sex, marital status, ancestry, physical or mental disability, veteran status, gender identity, sexual orientation, or any other category protected by law. You are being given the opportunity to provide the following information in order to help us comply with federal and state Equal Employment Opportunity/Affirmative Action record keeping, reporting, and other legal requirements.</p>
		<p>Completion of the form is entirely voluntary. Whatever your decision, it will not be considered in the hiring process or thereafter. Any information that you do provide will be recorded and maintained in a confidential file.</p>
		<p>Candidates based outside of the United States should not answer the questions in this section.</p>
		<p>What is your gender? *</p>
		<select class="form-control" name="gender">
		    <option value="" selected>- select -</option>
		        <option value="0">Female</option>
		        <option value="1">Male</option>
						<option value="2">Don't wish to self identify</option>
		</select>
		<br>
		<br>
		<p>What is your race/ethnicity? *</p>
		<select class="form-control" name="race_ethnicity">
		    <option value="" selected>- select -</option>
		    <option value="1">American Indian or Alaskan Native</option>
		        <option value="2">Asian</option>
		        <option value="3">Black or African American</option>
		        <option value="4">Hispanic or Latino</option>
		        <option value="5">White</option>
		            <option value="6">Native Hawaiian or Other Pacific Islander</option>
		        <option value="7">Two or More Races</option>
		        <option value="8">Decline To Self Identify</option>
		</select>
		<br>
		<br>
		<p>Veteran status *</p>
		<select class="form-control" name="veteran_status">
		  <option value="" selected>- select -</option>
		  <option value="1">I am not a protected veteran</option>
		  <option value="2">I identify as one or more of the classifications of a protected veteran</option>
		  <option value="3">I don&#39;t wish to answer</option>
		</select>
		<br>
		<br>
		<p>Disability status *</p>
		<select class="form-control" name="disability">
		        <option value="" selected>- select -</option>
		        <option value="1">Yes, I have a disability (or previously had a disability)</option>
		        <option value="2">No, I don&#39;t have a disability</option>
		        <option value="3">I don&#39;t wish to answer</option>
		</select>
		</div>
		<br>
		<br>
		<br>
		<div class="save_container">
		<input name="save_changes" class ="button input__submit" type="submit" value="Save changes" onclick="window.alert('Your information has been saved.')"></input>
		</div>
		<br>
	</div>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['title']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go To Website</a>
		</div>
	<?php endforeach; ?>
</div>
