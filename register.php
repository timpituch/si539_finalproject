<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-form-helpers.min.css" rel="stylesheet" media="screen">
		<link href="css/timsformstyle.css" rel="stylesheet" type="text/css">
		<title> Member Registration Form</title>
	</head>

	<body>
		<h1 id="title"> Membership Registration Form </h1>
		<form name="application" action="process.php" autocomplete="off" method="post" onsubmit="return validateAll()">

<!-- Bootstrap Accordion -->
<div class="panel-group" id="accordion">

	<div class="panel panel-default">

    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
    <div class="panel-heading">
      <h4 class="panel-title"><u>Basic Information</u></h4>
    </div>
	</a>

    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body pageOne">
      	<!-- Content -->
       <fieldset>
			<legend>Personal Information:</legend>
			<label for="fname"> First name: * <input type="text" name="fname" id="fname" onchange="validateName(this)" required="" placeholder="Jason" autofocus=""></label>
			<br>
		  	<label for="lname"> Last name: * <input type="text" name="lname" id="lname" required="" onchange="validateName(this)" placeholder="Smith"></label>
			<br>

		</fieldset><br>

		<fieldset>
			<legend>Contact Information:</legend>

			<label> Phone Number: <input type="text" name="numba" id="numba" onchange="validateNumber(this)" placeholder="252-621-5858"> </label>
			<br> 
			<label> Email: *<input type="email" name="email" id="email_1" required="" placeholder="jsmith@umich.edu" ></label>
			<br><br>
			<label> Enter Email Again: * <input type="email" name="email" id="email_2" required="" placeholder="jsmith@umich.edu" onchange="match(this)"></label>
			<br><br>
		</fieldset> <br>
		<fieldset>
			<legend> Background and Current Residence:</legend>
		<label>Country of Citizenship: <select id="country" class="bfh-countries" data-country="US"><option value="">Choose:</option><option value="AF">Afghanistan</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="VG">British Virgin Islands</option><option value="BN">Brunei</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="CI">Côte d'Ivoire</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="CD">Democratic Republic of the Congo</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="TP">East Timor</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FO">Faeroe Islands</option><option value="FK">Falkland Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="MK">Former Yugoslav Republic of Macedonia</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard and Mc Donald Islands</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Laos</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macau</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="KP">North Korea</option><option value="MP">Northern Marianas</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn Islands</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="ST">São Tomé and Príncipe</option><option value="SH">Saint Helena</option><option value="PM">St. Pierre and Miquelon</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="VC">Saint Vincent and the Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="KR">South Korea</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen Islands</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syria</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="BS">The Bahamas</option><option value="GM">The Gambia</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="VI">US Virgin Islands</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VA">Vatican City</option><option value="VE">Venezuela</option><option value="VN">Vietnam</option><option value="WF">Wallis and Futuna Islands</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select><br></label><br>
		<label> Ethnicity: <input type="text" name="ethnicity" size="20" placeholder="Mexican"></label> <br>
		<label> City: <input type="text" name="city" size="10" placeholder="Ann Arbor"></label> <!-- Put validateName function here? -->
		<label> State: <input type="text" name="state" size="2" placeholder="MI"></label>
		</fieldset><br>
      </div>
    </div>
	</div>

	<div class="panel panel-default">

	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
    <div class="panel-heading">
      <h4 class="panel-title"><u>Education and Work Experience</u></h4>
    </div>
     </a>

    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
      <div class="panel-body pageTwo">
        <fieldset> 
		 <legend>Educational Information:</legend>
		    <div id="education"><label> Degree Currently Seeking:
		  <select name="degree">
				<option value="BS">B.S</option>
				<option value="BA">B.A</option>
				<option value="Meng">M.Eng</option>
				<option value="MA">M.A</option>
				<option value="MS">M.S</option>
				<option value="PhD">PhD</option>
		  </select></label><br>
		  <label> Area(s) of Study: <input type="text" name="area_of_study" placeholder="Information"></label><br>
		  </div>
		</fieldset> 

			<fieldset>
			
			<legend>Relevant Extracurricular Activities:</legend>
		<div id="work">
				<label>Organization Name: <input type="text" name="name" placeholder="Entertainment Media Club"></label><br>
				<label>Position: <input type="text" name="title" placeholder="President"></label><br>
				<label>Join Date: <input type="date" name="join_date"></label><br>
				<label>End Date: <input type="date" name="end_date"></label><br>

			</div>
				<!-- Adds another "Add Activity" fieldset -->
				<button id="addWork">Add Activity</button>
		</fieldset>
			<br>

      </div>
    </div>
  </div>

<div class="panel panel-default">

        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
    <div class="panel-heading">
      <h4 class="panel-title"><u>Position</u></h4>
    </div>
    </a>

    <div id="collapseThree" class="panel-collapse collapse" style="height: 0;">
      <div class="panel-body pageThree">
       <fieldset>
            <legend> Officer Positions </legend>

             Are you interested in an officer position?<br/>            
              <button type="button" onclick="openMe()">Yes</button>
            <button type="button"  onclick="closeMe()">No</button>
     
 
            <div id = "officerPosition" class ="gone">
              What are you interested in applying for?<br>
                <label><input type="checkbox" name="position" value="Treasurer"> Treasurer </label><br>
                <label><input type="checkbox" name="position" value="Secretary"> Secretary </label><br>
                <label><input type="checkbox" name="position" value="Historian"> Historian </label><br>
            </div>
        </fieldset>
			<br>
			<!-- Resume (required) and cover letter (optional) -->

			<!-- <fieldset>
			<legend>Resume and Cover Letter:</legend>
			<label>Upload Resume: *<input type="file" name="resume" accept="application/pdf" required=""></label><br>
			<label>Upload Cover Letter: <input type="file" name="coverletter" accept="application/pdf"></label><br>
			</fieldset>	-->
			
      </div>
    </div>
  </div>
	
	<button id="action_button" class="form_buttons" type="submit">Submit</button>
	<button class="form_buttons" type="reset">Reset</button>

</div>
	</form>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
    <script src="./membershipform_files/jquery.min.js"></script>
    <script src="./membershipform_files/bootstrap.min.js"></script>
    <script src="./membershipform_files/bootstrap-formhelpers.min.js"></script>
	
	<script>
function match(input) {
  if (input.value != document.getElementById('email_1').value) {
    input.setCustomValidity('Error: The two email addresses must match.');
  } else {
    input.setCustomValidity('');
  }
}

function closeMe(){
   x=document.getElementById("officerPosition"); // Find the element
   x.className="gone";
}

function openMe(){
   x=document.getElementById("officerPosition"); // Find the element
   x.className="back";
}

$(document).ready(function(){

		$("#addWork").click(function(){
			$('#work').clone().insertAfter("#work");	
		});
	});

	onlyletters = /^[A-Za-z]+$/;	//Regular Expression that checks for only letters
	var error = false;	//Global variable used for checking if there is any error in the form
	
function validateName(flname){
		if(!onlyletters.test(flname.value)){
			flname.setCustomValidity('Your name can only contain alphabets!');
		}else{
			flname.setCustomValidity('');
		}
	}

function validateNumber(numba){
		checknumbers = /^[0-9]+$/;
	
		if(!checknumbers.test(numba.value)){
				numba.setCustomValidity('Your phone number can only have numbers!');
		}
		else if(numba.value.length !== 10){
				numba.setCustomValidity('Your phone number needs to be 9 digits!');
		}
		else{
				numba.setCustomValidity('');
}}

	function validateAll(){
		if(error){
			alert("Please check your error(s).");
			return false;
		}
	}
</script>
	
</body>
</html>