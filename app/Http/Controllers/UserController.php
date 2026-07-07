<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {

        $countries = $this->getCountries();
        $prefill = [
            'name'  => $request->query('name'),
            'email' => $request->query('email'),
            'phone' => $request->query('phone'),
        ];
        return view('admin.users.create', compact('countries', 'prefill'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'regex:/^[^@\s]+@gmail\.com$/i'],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['nullable', 'string', 'min:8'],
            'country' => ['required', 'string'],
            'duration' => ['required'],
            'status' => ['required'],
        ], [
            'email.regex' => 'Premium accounts must use a Gmail address — this is the email the user will also use to sign in for free tests on the writing site.',
        ]);

        // Users log into the Writing site with Google first (free tier) before
        // ever paying — if that row already exists, upgrade it to paid instead
        // of creating a duplicate account for the same person.
        $existingUser = User::where('email', $validated['email'])->first();

        $generatedPassword = null;
        if (!empty($validated['password'])) {
            $plainPassword = $validated['password'];
        } else {
            $plainPassword = Str::random(12);
            $generatedPassword = $plainPassword;
        }

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($plainPassword),
            'country' => $validated['country'],
            'duration' => $validated['duration'],
            'status' => $validated['status'],
            'is_user_paid' => true,
            'access_given_at' => now(),
        ];

        if ($existingUser) {
            $existingUser->update($data);
            $user = $existingUser;
        } else {
            $user = User::create($data);
        }

        if (!$user->hasRole('User')) {
            $user->assignRole('User');
        }

        $redirect = redirect()->route('admin.user.index');

        if ($generatedPassword) {
            $redirect->with('generated_password', [
                'email' => $user->email,
                'password' => $generatedPassword,
            ]);
        }

        return $redirect;
    }

    public function index()
    {
        $users = User::get();
        return view('admin.users.index', compact('users'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'regex:/^[^@\s]+@gmail\.com$/i', 'unique:users,email,' . $request->user_id],
            'phone' => ['required', 'string', 'max:20'],
            'password' => ['nullable', 'string', 'min:8'],
            'country' => ['required', 'string'],
            'duration' => ['required'],
            'status' => ['required'],
        ], [
            'email.regex' => 'Premium accounts must use a Gmail address — this is the email the user will also use to sign in for free tests on the writing site.',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'country' => $validated['country'],
            'duration' => $validated['duration'],
            'status' => $validated['status'],
            'is_user_paid' => true,
            'access_given_at' => now(),
        ];

        if (!empty($validated['password'])) {
            $data['password'] = Hash::make($validated['password']);
        }

        User::findOrFail($validated['user_id'])->update($data);
      
        // $role = "User";
        // if ($role) {
        //     $user = User::findOrFail($request->user_id);
        //     $user->assignRole($role);
        // }

        return redirect()->route('admin.user.index');
    }
    public function edit($id)
    {

        $countries = $this->getCountries();
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('countries', 'user'));
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user.index');
    }
    public function getCountries()
    {



        return [
            "Afghanistan",
            "Albania",
            "Algeria",
            "American Samoa",
            "Andorra",
            "Angola",
            "Anguilla",
            "Antarctica",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Aruba",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas",
            "Bahrain",
            "Bangladesh",
            "Barbados",
            "Belarus",
            "Belgium",
            "Belize",
            "Benin",
            "Bermuda",
            "Bhutan",
            "Bolivia",
            "Bosnia and Herzegovina",
            "Botswana",
            "Bouvet Island",
            "Brazil",
            "British Indian Ocean Territory",
            "Brunei Darussalam",
            "Bulgaria",
            "Burkina Faso",
            "Burundi",
            "Cambodia",
            "Cameroon",
            "Canada",
            "Cape Verde",
            "Cayman Islands",
            "Central African Republic",
            "Chad",
            "Chile",
            "China",
            "Christmas Island",
            "Cocos (Keeling) Islands",
            "Colombia",
            "Comoros",
            "Congo",
            "Congo, the Democratic Republic of the",
            "Cook Islands",
            "Costa Rica",
            "Cote d'Ivoire",
            "Croatia (Hrvatska)",
            "Cuba",
            "Cyprus",
            "Czech Republic",
            "Denmark",
            "Djibouti",
            "Dominica",
            "Dominican Republic",
            "East Timor",
            "Ecuador",
            "Egypt",
            "El Salvador",
            "Equatorial Guinea",
            "Eritrea",
            "Estonia",
            "Ethiopia",
            "Falkland Islands (Malvinas)",
            "Faroe Islands",
            "Fiji",
            "Finland",
            "France",
            "France, Metropolitan",
            "French Guiana",
            "French Polynesia",
            "French Southern Territories",
            "Gabon",
            "Gambia",
            "Georgia",
            "Germany",
            "Ghana",
            "Gibraltar",
            "Greece",
            "Greenland",
            "Grenada",
            "Guadeloupe",
            "Guam",
            "Guatemala",
            "Guinea",
            "Guinea-Bissau",
            "Guyana",
            "Haiti",
            "Heard and Mc Donald Islands",
            "Holy See (Vatican City State)",
            "Honduras",
            "Hong Kong",
            "Hungary",
            "Iceland",
            "India",
            "Indonesia",
            "Iran (Islamic Republic of)",
            "Iraq",
            "Ireland",
            "Israel",
            "Italy",
            "Jamaica",
            "Japan",
            "Jordan",
            "Kazakhstan",
            "Kenya",
            "Kiribati",
            "Korea, Democratic People's Republic of",
            "Korea, Republic of",
            "Kuwait",
            "Kyrgyzstan",
            "Lao People's Democratic Republic",
            "Latvia",
            "Lebanon",
            "Lesotho",
            "Liberia",
            "Libyan Arab Jamahiriya",
            "Liechtenstein",
            "Lithuania",
            "Luxembourg",
            "Macau",
            "Macedonia, The Former Yugoslav Republic of",
            "Madagascar",
            "Malawi",
            "Malaysia",
            "Maldives",
            "Mali",
            "Malta",
            "Marshall Islands",
            "Martinique",
            "Mauritania",
            "Mauritius",
            "Mayotte",
            "Mexico",
            "Micronesia, Federated States of",
            "Moldova, Republic of",
            "Monaco",
            "Mongolia",
            "Montserrat",
            "Morocco",
            "Mozambique",
            "Myanmar",
            "Namibia",
            "Nauru",
            "Nepal",
            "Netherlands",
            "Netherlands Antilles",
            "New Caledonia",
            "New Zealand",
            "Nicaragua",
            "Niger",
            "Nigeria",
            "Niue",
            "Norfolk Island",
            "Northern Mariana Islands",
            "Norway",
            "Oman",
            "Pakistan",
            "Palau",
            "Panama",
            "Papua New Guinea",
            "Paraguay",
            "Peru",
            "Philippines",
            "Pitcairn",
            "Poland",
            "Portugal",
            "Puerto Rico",
            "Qatar",
            "Reunion",
            "Romania",
            "Russian Federation",
            "Rwanda",
            "Saint Kitts and Nevis",
            "Saint LUCIA",
            "Saint Vincent and the Grenadines",
            "Samoa",
            "San Marino",
            "Sao Tome and Principe",
            "Saudi Arabia",
            "Senegal",
            "Seychelles",
            "Sierra Leone",
            "Singapore",
            "Slovakia",
            "Slovenia",
            "Solomon Islands",
            "Somalia",
            "South Africa",
            "South Georgia and the South Sandwich Islands",
            "Spain",
            "Sri Lanka",
            "St. Helena",
            "St. Pierre and Miquelon",
            "Sudan",
            "Suriname",
            "Svalbard and Jan Mayen Islands",
            "Swaziland",
            "Sweden",
            "Switzerland",
            "Syrian Arab Republic",
            "Taiwan, Province of China",
            "Tajikistan",
            "Tanzania, United Republic of",
            "Thailand",
            "Togo",
            "Tokelau",
            "Tonga",
            "Trinidad and Tobago",
            "Tunisia",
            "Turkey",
            "Turkmenistan",
            "Turks and Caicos Islands",
            "Tuvalu",
            "Uganda",
            "Ukraine",
            "United Arab Emirates",
            "United Kingdom",
            "United States",
            "United States Minor Outlying Islands",
            "Uruguay",
            "Uzbekistan",
            "Vanuatu",
            "Venezuela",
            "Viet Nam",
            "Virgin Islands (British)",
            "Virgin Islands (U.S.)",
            "Wallis and Futuna Islands",
            "Western Sahara",
            "Yemen",
            "Serbia",
            "Zambia",
            "Zimbabwe"
            // Add more countries as needed
        ];

        // You can now use the `countriesArray` in your JavaScript code.

    }
}
