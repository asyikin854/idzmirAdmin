@extends('layouts.authentication.master')
@section('title', 'Sign-up-wizard')

@section('css')
@endsection

@section('style')
@endsection


@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-12 p-0">
         <div>
            <div class="theme-form">
               <div class="wizard-4" id="wizard">
                  <ul>
                     <li><a class="logo text-start ps-0" href="{{ route('index') }}"><img class="img-fluid for-light" src="{{asset('assets/images/logo/logoidzmir.png')}}" style="width: 150px" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="looginpage"></a></li>
                     <li>
                        <a href="#step-1">
                           <h4>1</h4>
                           <h5>Child Information</h5>
                           <small>Details required for registration</small>
                        </a>
                     </li>
                     <li>
                        <a href="#step-2">
                           <h4>2</h4>
                           <h5>Intervention / Treatment History</h5>
                           <small>If any (optional)</small>
                        </a>
                     </li>
                     <li>
                        <a href="#step-3">
                           <h4>3</h4>
                           <h5>Parents / Guardians Information</h5>
                           <small>Details required for registration</small>
                        </a>
                     </li>
                     <li>
                        <a href="#step-4">
                           <h4>4</h4>
                           <h5>Parent's Permission</h5>
                           <small>Permission to use photographs and video of your child</small>
                        </a>
                     </li>
                     <li class="pb-0">
                        <a href="#step-5">
                           <h4>5</h4>
                           <h5>Create Account</h5>
                           <small>Parent's account for login</small>
                        </a>
                     </li>
                     <li>                          </li>
                  </ul>
                  <div id="step-1">
                     <div class="wizard-title" style="width: 90%">
                        <h2>Child Information</h2>
                        <h5 class="text-muted mb-4">Enter all details for your child</h5>
                     </div>
                     <div class="login-main" style="width: 90%">
                        <div class="theme-form">
                           <h5>Child Information</h5>
                           <div class="form-group mb-3">
                              <label for="name">Full name</label>
                              <input class="form-control" id="child_name" type="text" placeholder="Johan" required="required">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_ic">IC Number</label>
                              <input class="form-control" name="child_ic" id="child_ic" type="text" required>
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_dob">Date of Birth</label>
                              <input class="form-control" name="child_dob" id="child_dob" type="date" required>
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_passport">Passport NO</label>
                              <input class="form-control" name="child_passport" id="child_passport" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_nationality">Nationality</label>
                              @php
                $selectedNationality = '--Select Country--'; // Default value
                $arr = ['Malaysian', 'Afghan', 'Albanian', 'Algerian', 'American', 'Andorran', 'Angolan', 'Antiguans', 'Argentinean', 'Armenian', 'Australian', 'Austrian', 
                'Azerbaijani', 'Bahamian', 'Bahraini', 'Bangladeshi', 'Barbadian', 'Barbudans', 'Batswana', 'Belarusian', 'Belgian', 'Belizean', 'Beninese', 
                'Bhutanese', 'Bolivian', 'Bosnian', 'Brazilian', 'British', 'Bruneian', 'Bulgarian', 'Burkinabe', 'Burmese', 'Burundian', 'Cambodian', 
                'Cameroonian', 'Canadian', 'Cape Verdean', 'Central African', 'Chadian', 'Chilean', 'Chinese', 'Colombian', 'Comoran', 'Congolese', 'Costa Rican', 
                'Croatian', 'Cuban', 'Cypriot', 'Czech', 'Danish', 'Djibouti', 'Dominican', 'Dutch', 'East Timorese', 'Ecuadorean', 'Egyptian', 'Emirian', 
                'Equatorial Guinean', 'Eritrean', 'Estonian', 'Ethiopian', 'Fijian', 'Filipino', 'Finnish', 'French', 'Gabonese', 'Gambian', 'Georgian', 'German', 
                'Ghanaian', 'Greek', 'Grenadian', 'Guatemalan', 'Guinea-Bissauan', 'Guinean', 'Guyanese', 'Haitian', 'Herzegovinian', 'Honduran', 'Hungarian', 'Icelander', 'Indian', 'Indonesian', 'Iranian', 'Iraqi', 'Irish', 'Israeli', 'Italian', 'Ivorian', 'Jamaican', 'Japanese', 'Jordanian', 'Kazakhstani', 'Kenyan', 'Kittian and Nevisian', 'Kuwaiti', 'Kyrgyz', 'Laotian', 'Latvian', 'Lebanese', 'Liberian', 'Libyan', 'Liechtensteiner', 'Lithuanian', 'Luxembourger', 'Macedonian', 'Malagasy', 'Malawian', 'Maldivan', 'Malian', 'Maltese', 'Marshallese', 'Mauritanian', 'Mauritian', 'Mexican', 'Micronesian', 'Moldovan', 'Monacan', 'Mongolian', 'Moroccan', 'Mosotho', 'Motswana', 'Mozambican', 'Namibian', 'Nauruan', 'Nepalese', 'Netherlander', 'New Zealander', 'Ni-Vanuatu', 'Nicaraguan', 'Nigerian', 'Nigerien', 'North Korean', 'Northern Irish', 'Norwegian', 'Omani', 'Pakistani', 'Palauan', 'Panamanian', 'Papua New Guinean', 'Paraguayan', 'Peruvian', 'Polish', 'Portuguese', 'Qatari', 'Romanian', 'Russian', 'Rwandan', 'Saint Lucian', 'Salvadoran', 'Samoan', 'San Marinese', 'Sao Tomean', 'Saudi', 'Scottish', 'Senegalese', 'Serbian', 'Seychellois', 'Sierra Leonean', 'Singaporean', 'Slovakian', 'Slovenian', 'Solomon Islander', 'Somali', 'South African', 'South Korean', 'Spanish', 'Sri Lankan', 'Sudanese', 'Surinamer', 'Swazi', 'Swedish', 'Swiss', 'Syrian', 'Taiwanese', 'Tajik', 'Tanzanian', 'Thai', 'Togolese', 'Tongan', 'Trinidadian or Tobagonian', 'Tunisian', 'Turkish', 'Tuvaluan', 'Ugandan', 'Ukrainian', 'Uruguayan', 'Uzbekistani', 'Venezuelan', 'Vietnamese', 'Welsh', 'Yemenite', 'Zambian', 'Zimbabwean'];
                $name = 'child_nationality';
                $id = 'child_nationality';
                $class = 'form-select';

                $html = "<select name='$name' id='$id' class='$class'>";
                $html .= "<option value=''>--- Select Nationality ---</option>";
                foreach ($arr as $nationality) {
                    $isSelected = ($nationality == $selectedNationality) ? "selected='selected'" : "";
                    $html .= "<option value='$nationality' $isSelected>$nationality</option>";
                }
                $html .= "</select>";
                
                echo $html;
            @endphp

                           </div>
                           <div class="form-group mb-3">
                              <label for="child_race">Race</label>
                              <input class="form-control" name="child_race" id="child_race" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_bp">Birth Place</label>
                              <input class="form-control" name="child_bp" id="child_bp" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_religion">Religion</label>
                              <select name="child_religion" id="child_religion" class="form-select" required>
                                 <option value="Islam">Islam</option>
                                 <option value="Hindu">Hindu</option>
                                 <option value="Buddha">Buddha</option>
                                 <option value="Christian">Christian</option>
                                 <option value="Atheist">Atheist</option>
                                 <option value="Other">Other</option>
                              </select>
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_sex">Sex</label>
                              <select name="child_sex" id="child_sex" class="form-select">
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                              </select>
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_address">Address</label>
                              <input class="form-control" name="child_address" id="child_address" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_posscode">Posscode</label>
                              <input class="form-control" name="child_posscode" id="child_posscode" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_city">City</label>
                              <input class="form-control" name="child_city" id="child_city" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="child_address">Country</label>
                              @php
                              $selectedCountry = ''; // Default value
                              $countries = [
                                  'Malaysia', 'Afghanistan', 'Åland Islands', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan', 'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island', 'Brazil', 'British Indian Ocean Territory', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo, The Democratic Republic of The', 'Cook Islands', 'Costa Rica', 'Cote D\'ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic', 'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic', 'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia', 'Falkland Islands (Malvinas)', 'Faroe Islands', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories', 'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-bissau', 'Guyana', 'Haiti', 'Heard Island and Mcdonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary', 'Iceland', 'India', 'Indonesia', 'Iran, Islamic Republic of', 'Iraq', 'Ireland', 'Isle of Man', 'Italy', 'Jamaica', 'Japan', 'Jersey', 'Jordan', 'Kazakhstan', 'Kenya', 'Kiribati', 'Korea, Democratic People\'s Republic of', 'Korea, Republic of', 'Kuwait', 'Kyrgyzstan', 'Lao People\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macao', 'Macedonia, The Former Yugoslav Republic of', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia, Federated States of', 'Moldova, Republic of', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar', 'Namibia', 'Nauru', 'Nepal', 'Netherlands', 'Netherlands Antilles', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway', 'Oman', 'Pakistan', 'Palau', 'Palestinian Territory, Occupied', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn', 'Poland', 'Portugal', 'Puerto Rico', 'Qatar', 'Reunion', 'Romania', 'Russian Federation', 'Rwanda', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Pierre and Miquelon', 'Saint Vincent and The Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and The South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard and Jan Mayen', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic', 'Taiwan', 'Tajikistan', 'Tanzania, United Republic of', 'Thailand', 'Timor-leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu', 'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States', 'United States Minor Outlying Islands', 'Uruguay', 'Uzbekistan', 'Vanuatu', 'Venezuela', 'Viet Nam', 'Virgin Islands, British', 'Virgin Islands, U.S.', 'Wallis and Futuna', 'Western Sahara', 'Yemen', 'Zambia', 'Zimbabwe'
                              ];
                          @endphp
                          
                          <select id="child_country" name="child_country" class="form-select">
                              <option value="">--- Select Country ---</option>
                              @foreach($countries as $country)
                                  <option value="{{ $country }}" {{ $selectedCountry == $country ? 'selected' : '' }}>{{ $country }}</option>
                              @endforeach
                          </select>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="step-2">
                     <div class="wizard-title" style="width: 90%">
                        <h2>Intervention / Treatment History</h2>
                        <h5 class="text-muted mb-4">If any (optional)</h5>
                     </div>
                     <div class="login-main" style="width: 90%">
                        <div class="theme-form">
                           <div class="form-group mb-3">
                              <label for="pediatricians">Pediatricians</label>
                              <input class="form-control" name="pediatricians" id="pediatricians" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="recommend">Recommended by Hospital/Clinic (If any)</label>
                              <input class="form-control" name="recommend" id="recommend" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="deadline">Deadline Diagnose by Doctor</label>
                              <input class="form-control" name="deadline" id="deadline" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="diagnosis">Diagnosis/Condition</label>
                              <input class="form-control" name="diagnosis" id="diagnosis" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <div class="table-responsive">
                                 <table class="table table-bordered">
                                    <thead>
                                       <tr>
                                          <th>Unit</th>
                                          <th>Occupational Therapy</th>
                                          <th>Speech Therapy</th>
                                          <th>Others</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <th>Place</th>
                                       <td><input type="text" name="occ_therapy" id="occ_therapy" class="form-control"></td>
                                       <td><input type="text" name="sp_therapy" id="sp_therapy" class="form-control"></td>
                                       <td><input type="text" name="others" id="others" class="form-control"></td>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="step-3">
                     <div class="wizard-title" style="width: 90%">
                        <h2>Parents / Guardian Information</h2>
                        <h5 class="text-muted mb-4">Enter all the required information</h5>
                     </div>
                     <div class="login-main" style="width: 90%">
                        <div class="theme-form">
                           <h5>Father's Information</h5>
                           <div class="form-group mb-3">
                              <label for="father_name">Father's Name</label>
                              <input class="form-control" name="father_name" id="father_name" type="text" >
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_phone">Telephone NO</label>
                              <input class="form-control" name="father_phone" id="father_phone" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_ic">I/C Number</label>
                              <input class="form-control" maxlength="12" name="father_ic" id="father_ic" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_race">Race</label>
                              <input class="form-control" name="father_race" id="father_race" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="occupation">Occupation</label>
                              <input class="form-control" name="occupation" id="occupation" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_email">Email</label>
                              <input class="form-control" name="father_email" id="father_email" type="email">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_address">Address</label>
                              <input class="form-control" name="father_address" id="father_address" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_posscode">Posscode</label>
                              <input class="form-control" name="father_posscode" id="father_posscode" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_city">City</label>
                              <input class="form-control" name="father_city" id="father_city" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_work_address">Work Address</label>
                              <input class="form-control" name="father_work_address" id="father_work_address" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_work_posscode">Posscode</label>
                              <input class="form-control" name="father_work_posscode" id="father_work_posscode" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="father_work_city">City</label>
                              <input class="form-control" name="father_work_city" id="father_work_city" type="text">
                           </div>
                           <h5>Mother's Information</h5>
                           <div class="form-group mb-3">
                              <label for="mother_name">Mother's Name</label>
                              <input class="form-control" name="mother_name" id="mother_name" type="text" >
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_phone">Telephone NO</label>
                              <input class="form-control" name="mother_phone" id="mother_phone" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_ic">I/C Number</label>
                              <input class="form-control" maxlength="12" name="mother_ic" id="mother_ic" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_race">Race</label>
                              <input class="form-control" name="mother_race" id="mother_race" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="occupation">Occupation</label>
                              <input class="form-control" name="occupation" id="occupation" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_email">Email</label>
                              <input class="form-control" name="mother_email" id="mother_email" type="email">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_address">Address</label>
                              <input class="form-control" name="mother_address" id="mother_address" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_posscode">Posscode</label>
                              <input class="form-control" name="mother_posscode" id="mother_posscode" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_city">City</label>
                              <input class="form-control" name="mother_city" id="mother_city" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_work_address">Work Address</label>
                              <input class="form-control" name="mother_work_address" id="mother_work_address" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_work_posscode">Posscode</label>
                              <input class="form-control" name="mother_work_posscode" id="mother_work_posscode" type="number">
                           </div>
                           <div class="form-group mb-3">
                              <label for="mother_work_city">City</label>
                              <input class="form-control" name="mother_work_city" id="mother_work_city" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="step-4">
                     <div class="wizard-title" style="width: 90%">
                        <h2>Parent's Permission</h2>
                        <h5 class="text-muted mb-4">Permission to use photographs and video of your child</h5>
                     </div>
                     <div class="login-main" style="width: 90%">
                        <div class="theme-form">
                           <p>We seek for your permission to use your child's photograph and videos and/or work for the 
                              purpose of demonstration or promotion of our centres. Promotional materials may include advertisements, 
                              video, websites, collaterals and social media such as Facebook and Instagram. We hereby waive all rights to 
                              this photographs or video and give permission to the photograph or video to be published/ distribute publicly.
                              I declare that all the information given is accurate, true, and I
                              <label for="agree">Agree</label>
                              <input type="radio" name="agree_disagree" id="agree" value="agree">
                              
                              <label for="disagree">Disagree</label>
                              <input type="radio" name="agree_disagree" id="disagree" value="disagree">
                              
                              to abide by the policies and regulations of Idzmir Kids Hub.</p>
                           <div class="form-group mb-3">
                              <label for="parent_sign">Parent's Sign (Your name)</label>
                              <input class="form-control" name="parent_sign" id="parent_sign" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="sign_date">Date</label>
                              <input class="form-control" name="sign_date" id="sign_date" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="sign_name">Name</label>
                              <input class="form-control" name="sign_name" id="sign_name" type="text">
                           </div>
                           <div class="form-group mb-3">
                              <label for="sign_time">Time</label>
                              <input class="form-control" name="sign_time" id="sign_time" type="text">
                           </div>
                           </div>
                        </div>
                     </div>
                     <div id="step-5">
                        <div class="wizard-title" style="width: 90%">
                           <h2>Parent's Account</h2>
                           <h5 class="text-muted mb-4">Create account for Login</h5>
                        </div>
                        <div class="login-main" style="width: 90%">
                           <div class="theme-form">
                              <div class="form-group mb-3 m-t-15">
                                 <label for="email">Email address</label>
                                 <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required>
                              </div>
                              <div class="form-group mb-3">
                                 <label for="username">Username</label>
                                 <input class="form-control" id="username" type="text" placeholder="" required>
                              </div>
                              <div class="form-group mb-3">
                                 <label for="password">Password</label>
                                 <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
                              </div>
                              <div class="form-group mb-3">
                                 <label for="password">Confirm Password</label>
                                 <input class="form-control"  id="exampleInputcPassword1" type="password" placeholder="Enter again" required>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/form-wizard/form-wizard-five.js')}}"></script>
<script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
<script src="{{ asset('assets/js/theme-customizer/customizer.js')}}"></script>
@endsection