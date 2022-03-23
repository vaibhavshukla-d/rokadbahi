<x-guest-layout>



    <x-jet-authentication-card >
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <div class="text-dark">
        <form method="POST" action="{{ route('register') }}" >
            @csrf

            <div class="dropdown mb-3">                
                <select class="btn btn-info btn-block dropdown-toggle" id="type_of_customer" class="block mt-1 w-full" type="type_of_customer" name="type_of_customer" :value="old('type_of_customer')" required>
                  <option class="drodropdown-item text-white font-weight-bold " >Type of Customer</option>
                  <option class="drodropdown-item text-white font-weight-bold " >Individual</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Partnership Firm</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Company</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Partnership Firm LLP</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Proprietorship</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Society</option>
                  <option class="drodropdown-item text-white font-weight-bold" >Trust/AOP</option>
                </select>                 
              </div>
              
              <div class="dropdown mb-3">
                <select class="btn btn-info btn-block dropdown-toggle" id="type_of_business" class="block mt-1 w-full" type="type_of_business" name="type_of_business" :value="old('type_of_business')" required>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Type of Business</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Sale/Purchase</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Service Provider</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Membership/clubs/Gym</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Hospital</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Manufacturer</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Courier</option>
                  <option class="drodropdown-item text-white font-weight-bold" href="#">Professionals</option>
                </select>
              </div>


            <div class="row text-dark">
                <div class=" col">
                    <x-jet-label for="name" value="{{ __('First Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="first_name" />
                </div> 
    
                <div class="col">
                    <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
                    <x-jet-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" />
                </div>   
            </div>

            <div class="row text-dark mt-4">
                <div class=" col">
                    <x-jet-label for="date_of_birth" value="{{ __('DOB') }}" />
                    <x-jet-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth" />
                </div> 
    
                <div class="col ">
                    <x-jet-label for="gender" value="{{ __('Gender') }}" />
                    <select class="block mt-1 w-full shadow-md  sm:rounded-lg" id="gender"   name="gender" :value="old('gender')" required autofocus autocomplete="gender">
                        <option></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>   
            </div>


            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>


            <div class="row mt-4">
                <div class=" col">
                    <x-jet-label for="pan_no" value="{{ __('Pan Number') }}" />
                    <x-jet-input id="pan_no" class="block mt-1 w-full" type="text" name="pan_no" :value="old('pan_no')" required autofocus autocomplete="pan_no" />
                </div> 
    
                <div class="col">
                    <x-jet-label for="gst_no" value="{{ __('Gst Number') }}" />
                    <x-jet-input id="gst_no" class="block mt-1 w-full" type="text" name="gst_no" :value="old('gst_no')" required autofocus autocomplete="gst_no" />
                </div>   
            </div>

            <div class="mt-4">
                <x-jet-label for="company_name" value="{{ __('Compnay Name') }}" />
                <x-jet-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required />
            </div>

            <div class="row mt-4">
                <div class=" col">
                    <x-jet-label for="pf_number" value="{{ __('PF Number') }}" />
                    <x-jet-input id="pf_number" class="block mt-1 w-full" type="text" name="pf_number" :value="old('pf_number')"  />
                </div> 
    
                <div class="col">
                    <x-jet-label for="father_name" value="{{ __('Father Name') }}" />
                    <x-jet-input id="father_name" class="block mt-1 w-full" type="text" name="father_name" :value="old('father_name')" required autofocus autocomplete="father_name" />
                </div>   
            </div>

            <div class="row mt-4">
                <div class=" col">
                    <x-jet-label for="phone_no" value="{{ __('Phone Number') }}" />
                    <x-jet-input id="phone_no" class="block mt-1 w-full" type="number" name="phone_no" :value="old('phone_no')" required autofocus autocomplete="phone_no"  />
                </div> 
                <div class="col">
                    <x-jet-label for="landline_no" value="{{ __('Landline (optional)') }}" />
                    <x-jet-input id="landline_no" class="block mt-1 w-full" type="number" name="landline_no" :value="old('landline_no')"  />
                </div>   
            </div>

            <div class="row mt-4">
                <div class=" col">
                    <x-jet-label for="address" value="{{ __('Company Address') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
                </div> 
            </div>
            <div class="row mt-4">
                <div class="col">
                    <x-jet-label for="pincode" value="{{ __('Pincode') }}" />
                    <x-jet-input id="pincode" class="block mt-1 w-full" type="number" name="pincode" :value="old('pincode')" required autofocus autocomplete="pincode" />
                </div>   
            </div>

            <div class="row mt-4">
                <div class="col">
                    <x-jet-label for="city" value="{{ __('city') }}" />
                    <select class="block mt-1 w-full shadow-md  sm:rounded-lg" id="city"  type="city" name="city" :value="old('city')" required > 
                        <option value=""></option> 
                        <option value="Adilabad">Adilabad</option> 
                        <option value="Agra">Agra</option>
                         <option value="Ahmedabad">Ahmedabad</option> 
                         <option value="Ahmednagar">Ahmednagar</option>
                          <option value="Aizawl">Aizawl</option> 
                          <option value="Ajitgarh(Mohali)">Ajitgarh (Mohali)</option>
                           <option value="Ajmer">Ajmer</option> <option value="Akola">Akola</option> <option value="Alappuzha">Alappuzha</option> <option value="Aligarh">Aligarh</option> <option value="Alirajpur">Alirajpur</option> <option value="Allahabad">Allahabad</option> <option value="Almora">Almora</option> <option value="Alwar">Alwar</option> <option value="Ambala">Ambala</option> <option value="AmbedkarNagar">Ambedkar Nagar</option> <option value="Amravati">Amravati</option> <option value="Amrelidistrict">Amreli district</option> <option value="Amritsar">Amritsar</option> <option value="Anand">Anand</option> <option value="Anantapur">Anantapur</option> <option value="Anantnag">Anantnag</option> <option value="Angul">Angul</option> <option value="Anjaw">Anjaw</option> <option value="Anuppur">Anuppur</option> <option value="Araria">Araria</option> <option value="Ariyalur">Ariyalur</option> <option value="Arwal">Arwal</option> <option value="AshokNagar">Ashok Nagar</option> <option value="Auraiya">Auraiya</option> <option value="Aurangabad">Aurangabad</option> <option value="Aurangabad">Aurangabad</option> <option value="Azamgarh">Azamgarh</option> <option value="Badgam">Badgam</option> <option value="Bagalkot">Bagalkot</option> <option value="Bageshwar">Bageshwar</option> <option value="Bagpat">Bagpat</option> <option value="Bahraich">Bahraich</option> <option value="Baksa">Baksa</option> <option value="Balaghat">Balaghat</option> <option value="Balangir">Balangir</option> <option value="Balasore">Balasore</option> <option value="Ballia">Ballia</option> <option value="Balrampur">Balrampur</option> <option value="Banaskantha">Banaskantha</option> <option value="Banda">Banda</option> <option value="Bandipora">Bandipora</option> <option value="BangaloreRural">Bangalore Rural</option> <option value="BangaloreUrban">Bangalore Urban</option> <option value="Banka">Banka</option> <option value="Bankura">Bankura</option> <option value="Banswara">Banswara</option> <option value="Barabanki">Barabanki</option> <option value="Baramulla">Baramulla</option> <option value="Baran">Baran</option> <option value="Bardhaman">Bardhaman</option> <option value="Bareilly">Bareilly</option> <option value="Bargarh(Baragarh)">Bargarh (Baragarh)</option> <option value="Barmer">Barmer</option> <option value="Barnala">Barnala</option> <option value="Barpeta">Barpeta</option> <option value="Barwani">Barwani</option> <option value="Bastar">Bastar</option> <option value="Basti">Basti</option> <option value="Bathinda">Bathinda</option> <option value="Beed">Beed</option> <option value="Begusarai">Begusarai</option> <option value="Belgaum">Belgaum</option> <option value="Bellary">Bellary</option> <option value="Betul">Betul</option> <option value="Bhadrak">Bhadrak</option> <option value="Bhagalpur">Bhagalpur</option> <option value="Bhandara">Bhandara</option> <option value="Bharatpur">Bharatpur</option> <option value="Bharuch">Bharuch</option> <option value="Bhavnagar">Bhavnagar</option> <option value="Bhilwara">Bhilwara</option> <option value="Bhind">Bhind</option> <option value="Bhiwani">Bhiwani</option> <option value="Bhojpur">Bhojpur</option> <option value="Bhopal">Bhopal</option> <option value="Bidar">Bidar</option> <option value="Bijapur">Bijapur</option> <option value="Bijapur">Bijapur</option> <option value="Bijnor">Bijnor</option> <option value="Bikaner">Bikaner</option> <option value="Bilaspur">Bilaspur</option> <option value="Bilaspur">Bilaspur</option> <option value="Birbhum">Birbhum</option> <option value="Bishnupur">Bishnupur</option> <option value="Bokaro">Bokaro</option> <option value="Bongaigaon">Bongaigaon</option> <option value="Boudh(Bauda)">Boudh (Bauda)</option> <option value="Budaun">Budaun</option> <option value="Bulandshahr">Bulandshahr</option> <option value="Buldhana">Buldhana</option> <option value="Bundi">Bundi</option> <option value="Burhanpur">Burhanpur</option> <option value="Buxar">Buxar</option> <option value="Cachar">Cachar</option> <option value="CentralDelhi">Central Delhi</option> <option value="Chamarajnagar">Chamarajnagar</option> <option value="Chamba">Chamba</option> <option value="Chamoli">Chamoli</option> <option value="Champawat">Champawat</option> <option value="Champhai">Champhai</option> <option value="Chandauli">Chandauli</option> <option value="Chandel">Chandel</option> <option value="Chandigarh">Chandigarh</option> <option value="Chandrapur">Chandrapur</option> <option value="Changlang">Changlang</option> <option value="Chatra">Chatra</option> <option value="Chennai">Chennai</option> <option value="Chhatarpur">Chhatarpur</option> <option value="ChhatrapatiShahujiMaharajNagar"> Chhatrapati Shahuji Maharaj Nagar </option> <option value="Chhindwara">Chhindwara</option> <option value="Chikkaballapur">Chikkaballapur</option> <option value="Chikkamagaluru">Chikkamagaluru</option> <option value="Chirang">Chirang</option> <option value="Chitradurga">Chitradurga</option> <option value="Chitrakoot">Chitrakoot</option> <option value="Chittoor">Chittoor</option> <option value="Chittorgarh">Chittorgarh</option> <option value="Churachandpur">Churachandpur</option> <option value="Churu">Churu</option> <option value="Coimbatore">Coimbatore</option> <option value="CoochBehar">Cooch Behar</option> <option value="Cuddalore">Cuddalore</option> <option value="Cuttack">Cuttack</option> <option value="DadraandNagarHaveli"> Dadra and Nagar Haveli </option> <option value="Dahod">Dahod</option> <option value="DakshinDinajpur">Dakshin Dinajpur</option> <option value="DakshinaKannada">Dakshina Kannada</option> <option value="Daman">Daman</option> <option value="Damoh">Damoh</option> <option value="Dantewada">Dantewada</option> <option value="Darbhanga">Darbhanga</option> <option value="Darjeeling">Darjeeling</option> <option value="Darrang">Darrang</option> <option value="Datia">Datia</option> <option value="Dausa">Dausa</option> <option value="Davanagere">Davanagere</option> <option value="Debagarh(Deogarh)">Debagarh (Deogarh)</option> <option value="Dehradun">Dehradun</option> <option value="Deoghar">Deoghar</option> <option value="Deoria">Deoria</option> <option value="Dewas">Dewas</option> <option value="Dhalai">Dhalai</option> <option value="Dhamtari">Dhamtari</option> <option value="Dhanbad">Dhanbad</option> <option value="Dhar">Dhar</option> <option value="Dharmapuri">Dharmapuri</option> <option value="Dharwad">Dharwad</option> <option value="Dhemaji">Dhemaji</option> <option value="Dhenkanal">Dhenkanal</option> <option value="Dholpur">Dholpur</option> <option value="Dhubri">Dhubri</option> <option value="Dhule">Dhule</option> <option value="DibangValley">Dibang Valley</option> <option value="Dibrugarh">Dibrugarh</option> <option value="DimaHasao">Dima Hasao</option> <option value="Dimapur">Dimapur</option> <option value="Dindigul">Dindigul</option> <option value="Dindori">Dindori</option> <option value="Diu">Diu</option> <option value="Doda">Doda</option> <option value="Dumka">Dumka</option> <option value="Dungapur">Dungapur</option> <option value="Durg">Durg</option> <option value="EastChamparan">East Champaran</option> <option value="EastDelhi">East Delhi</option> <option value="EastGaroHills">East Garo Hills</option> <option value="EastKhasiHills">East Khasi Hills</option> <option value="EastSiang">East Siang</option> <option value="EastSikkim">East Sikkim</option> <option value="EastSinghbhum">East Singhbhum</option> <option value="Eluru">Eluru</option> <option value="Ernakulam">Ernakulam</option> <option value="Erode">Erode</option> <option value="Etah">Etah</option> <option value="Etawah">Etawah</option> <option value="Faizabad">Faizabad</option> <option value="Faridabad">Faridabad</option> <option value="Faridkot">Faridkot</option> <option value="Farrukhabad">Farrukhabad</option> <option value="Fatehabad">Fatehabad</option> <option value="FatehgarhSahib">Fatehgarh Sahib</option> <option value="Fatehpur">Fatehpur</option> <option value="Fazilka">Fazilka</option> <option value="Firozabad">Firozabad</option> <option value="Firozpur">Firozpur</option> <option value="Gadag">Gadag</option> <option value="Gadchiroli">Gadchiroli</option> <option value="Gajapati">Gajapati</option> <option value="Ganderbal">Ganderbal</option> <option value="Gandhinagar">Gandhinagar</option> <option value="Ganganagar">Ganganagar</option> <option value="Ganjam">Ganjam</option> <option value="Garhwa">Garhwa</option> <option value="GautamBuddhNagar">Gautam Buddh Nagar</option> <option value="Gaya">Gaya</option> <option value="Ghaziabad">Ghaziabad</option> <option value="Ghazipur">Ghazipur</option> <option value="Giridih">Giridih</option> <option value="Goalpara">Goalpara</option> <option value="Godda">Godda</option> <option value="Golaghat">Golaghat</option> <option value="Gonda">Gonda</option> <option value="Gondia">Gondia</option> <option value="Gopalganj">Gopalganj</option> <option value="Gorakhpur">Gorakhpur</option> <option value="Gulbarga">Gulbarga</option> <option value="Gumla">Gumla</option> <option value="Guna">Guna</option> <option value="Guntur">Guntur</option> <option value="Gurdaspur">Gurdaspur</option> <option value="Gurgaon">Gurgaon</option> <option value="Gwalior">Gwalior</option> <option value="Hailakandi">Hailakandi</option> <option value="Hamirpur">Hamirpur</option> <option value="Hamirpur">Hamirpur</option> <option value="Hanumangarh">Hanumangarh</option> <option value="Harda">Harda</option> <option value="Hardoi">Hardoi</option> <option value="Haridwar">Haridwar</option> <option value="Hassan">Hassan</option> <option value="Haveridistrict">Haveri district</option> <option value="Hazaribag">Hazaribag</option> <option value="Hingoli">Hingoli</option> <option value="Hissar">Hissar</option> <option value="Hooghly">Hooghly</option> <option value="Hoshangabad">Hoshangabad</option> <option value="Hoshiarpur">Hoshiarpur</option> <option value="Howrah">Howrah</option> <option value="Hyderabad">Hyderabad</option> <option value="Hyderabad">Hyderabad</option> <option value="Idukki">Idukki</option> <option value="ImphalEast">Imphal East</option> <option value="ImphalWest">Imphal West</option> <option value="Indore">Indore</option> <option value="Jabalpur">Jabalpur</option> <option value="Jagatsinghpur">Jagatsinghpur</option> <option value="JaintiaHills">Jaintia Hills</option> <option value="Jaipur">Jaipur</option> <option value="Jaisalmer">Jaisalmer</option> <option value="Jajpur">Jajpur</option> <option value="Jalandhar">Jalandhar</option> <option value="Jalaun">Jalaun</option> <option value="Jalgaon">Jalgaon</option> <option value="Jalna">Jalna</option> <option value="Jalore">Jalore</option> <option value="Jalpaiguri">Jalpaiguri</option> <option value="Jammu">Jammu</option> <option value="Jamnagar">Jamnagar</option> <option value="Jamtara">Jamtara</option> <option value="Jamui">Jamui</option> <option value="Janjgir-Champa">Janjgir-Champa</option> <option value="Jashpur">Jashpur</option> <option value="Jaunpurdistrict">Jaunpur district</option> <option value="Jehanabad">Jehanabad</option> <option value="Jhabua">Jhabua</option> <option value="Jhajjar">Jhajjar</option> <option value="Jhalawar">Jhalawar</option> <option value="Jhansi">Jhansi</option> <option value="Jharsuguda">Jharsuguda</option> <option value="Jhunjhunu">Jhunjhunu</option> <option value="Jind">Jind</option> <option value="Jodhpur">Jodhpur</option> <option value="Jorhat">Jorhat</option> <option value="Junagadh">Junagadh</option> <option value="JyotibaPhuleNagar">Jyotiba Phule Nagar</option> <option value="Kabirdham(formerlyKawardha)"> Kabirdham (formerly Kawardha) </option> <option value="Kadapa">Kadapa</option> <option value="Kaimur">Kaimur</option> <option value="Kaithal">Kaithal</option> <option value="Kakinada">Kakinada</option> <option value="Kalahandi">Kalahandi</option> <option value="Kamrup">Kamrup</option> <option value="KamrupMetropolitan">Kamrup Metropolitan</option> <option value="Kanchipuram">Kanchipuram</option> <option value="Kandhamal">Kandhamal</option> <option value="Kangra">Kangra</option> <option value="Kanker">Kanker</option> <option value="Kannauj">Kannauj</option> <option value="Kannur">Kannur</option> <option value="Kanpur">Kanpur</option> <option value="KanshiRamNagar">Kanshi Ram Nagar</option> <option value="Kanyakumari">Kanyakumari</option> <option value="Kapurthala">Kapurthala</option> <option value="Karaikal">Karaikal</option> <option value="Karauli">Karauli</option> <option value="KarbiAnglong">Karbi Anglong</option> <option value="Kargil">Kargil</option> <option value="Karimganj">Karimganj</option> <option value="Karimnagar">Karimnagar</option> <option value="Karnal">Karnal</option> <option value="Karur">Karur</option> <option value="Kasaragod">Kasaragod</option> <option value="Kathua">Kathua</option> <option value="Katihar">Katihar</option> <option value="Katni">Katni</option> <option value="Kaushambi">Kaushambi</option> <option value="Kendrapara">Kendrapara</option> <option value="Kendujhar(Keonjhar)"> Kendujhar (Keonjhar) </option> <option value="Khagaria">Khagaria</option> <option value="Khammam">Khammam</option> <option value="Khandwa(EastNimar)">Khandwa (East Nimar)</option> <option value="Khargone(WestNimar)"> Khargone (West Nimar) </option> <option value="Kheda">Kheda</option> <option value="Khordha">Khordha</option> <option value="Khowai">Khowai</option> <option value="Khunti">Khunti</option> <option value="Kinnaur">Kinnaur</option> <option value="Kishanganj">Kishanganj</option> <option value="Kishtwar">Kishtwar</option> <option value="Kodagu">Kodagu</option> <option value="Koderma">Koderma</option> <option value="Kohima">Kohima</option> <option value="Kokrajhar">Kokrajhar</option> <option value="Kolar">Kolar</option> <option value="Kolasib">Kolasib</option> <option value="Kolhapur">Kolhapur</option> <option value="Kolkata">Kolkata</option> <option value="Kollam">Kollam</option> <option value="Koppal">Koppal</option> <option value="Koraput">Koraput</option> <option value="Korba">Korba</option> <option value="Koriya">Koriya</option> <option value="Kota">Kota</option> <option value="Kottayam">Kottayam</option> <option value="Kozhikode">Kozhikode</option> <option value="Krishna">Krishna</option> <option value="Kulgam">Kulgam</option> <option value="Kullu">Kullu</option> <option value="Kupwara">Kupwara</option> <option value="Kurnool">Kurnool</option> <option value="Kurukshetra">Kurukshetra</option> <option value="KurungKumey">Kurung Kumey</option> <option value="Kushinagar">Kushinagar</option> <option value="Kutch">Kutch</option> <option value="LahaulandSpiti">Lahaul and Spiti</option> <option value="Lakhimpur">Lakhimpur</option> <option value="LakhimpurKheri">Lakhimpur Kheri</option> <option value="Lakhisarai">Lakhisarai</option> <option value="Lalitpur">Lalitpur</option> <option value="Latehar">Latehar</option> <option value="Latur">Latur</option> <option value="Lawngtlai">Lawngtlai</option> <option value="Leh">Leh</option> <option value="Lohardaga">Lohardaga</option> <option value="Lohit">Lohit</option> <option value="LowerDibangValley">Lower Dibang Valley</option> <option value="LowerSubansiri">Lower Subansiri</option> <option value="Lucknow">Lucknow</option> <option value="Ludhiana">Ludhiana</option> <option value="Lunglei">Lunglei</option> <option value="Madhepura">Madhepura</option> <option value="Madhubani">Madhubani</option> <option value="Madurai">Madurai</option> <option value="MahamayaNagar">Mahamaya Nagar</option> <option value="Maharajganj">Maharajganj</option> <option value="Mahasamund">Mahasamund</option> <option value="Mahbubnagar">Mahbubnagar</option> <option value="Mahe">Mahe</option> <option value="Mahendragarh">Mahendragarh</option> <option value="Mahoba">Mahoba</option> <option value="Mainpuri">Mainpuri</option> <option value="Malappuram">Malappuram</option> <option value="Maldah">Maldah</option> <option value="Malkangiri">Malkangiri</option> <option value="Mamit">Mamit</option> <option value="Mandi">Mandi</option> <option value="Mandla">Mandla</option> <option value="Mandsaur">Mandsaur</option> <option value="Mandya">Mandya</option> <option value="Mansa">Mansa</option> <option value="Marigaon">Marigaon</option> <option value="Mathura">Mathura</option> <option value="Mau">Mau</option> <option value="Mayurbhanj">Mayurbhanj</option> <option value="Medak">Medak</option> <option value="Meerut">Meerut</option> <option value="Mehsana">Mehsana</option> <option value="Mewat">Mewat</option> <option value="Mirzapur">Mirzapur</option> <option value="Moga">Moga</option> <option value="Mokokchung">Mokokchung</option> <option value="Mon">Mon</option> <option value="Moradabad">Moradabad</option> <option value="Morena">Morena</option> <option value="MumbaiCity">Mumbai City</option> <option value="Mumbaisuburban">Mumbai suburban</option> <option value="Munger">Munger</option> <option value="Murshidabad">Murshidabad</option> <option value="Muzaffarnagar">Muzaffarnagar</option> <option value="Muzaffarpur">Muzaffarpur</option> <option value="Mysore">Mysore</option> <option value="Nabarangpur">Nabarangpur</option> <option value="Nadia">Nadia</option> <option value="Nagaon">Nagaon</option> <option value="Nagapattinam">Nagapattinam</option> <option value="Nagaur">Nagaur</option> <option value="Nagpur">Nagpur</option> <option value="Nainital">Nainital</option> <option value="Nalanda">Nalanda</option> <option value="Nalbari">Nalbari</option> <option value="Nalgonda">Nalgonda</option> <option value="Namakkal">Namakkal</option> <option value="Nanded">Nanded</option> <option value="Nandurbar">Nandurbar</option> <option value="Narayanpur">Narayanpur</option> <option value="Narmada">Narmada</option> <option value="Narsinghpur">Narsinghpur</option> <option value="Nashik">Nashik</option> <option value="Navsari">Navsari</option> <option value="Nawada">Nawada</option> <option value="Nawanshahr">Nawanshahr</option> <option value="Nayagarh">Nayagarh</option> <option value="Neemuch">Neemuch</option> <option value="Nellore">Nellore</option> <option value="NewDelhi">New Delhi</option> <option value="Nilgiris">Nilgiris</option> <option value="Nizamabad">Nizamabad</option> <option value="North24Parganas">North 24 Parganas</option> <option value="NorthDelhi">North Delhi</option> <option value="NorthEastDelhi">North East Delhi</option> <option value="NorthGoa">North Goa</option> <option value="NorthSikkim">North Sikkim</option> <option value="NorthTripura">North Tripura</option> <option value="NorthWestDelhi">North West Delhi</option> <option value="Nuapada">Nuapada</option> <option value="Ongole">Ongole</option> <option value="Osmanabad">Osmanabad</option> <option value="Pakur">Pakur</option> <option value="Palakkad">Palakkad</option> <option value="Palamu">Palamu</option> <option value="Pali">Pali</option> <option value="Palwal">Palwal</option> <option value="Panchkula">Panchkula</option> <option value="Panchmahal">Panchmahal</option> <option value="PanchsheelNagardistrict(Hapur)"> Panchsheel Nagar district (Hapur) </option> <option value="Panipat">Panipat</option> <option value="Panna">Panna</option> <option value="PapumPare">Papum Pare</option> <option value="Parbhani">Parbhani</option> <option value="PaschimMedinipur">Paschim Medinipur</option> <option value="Patan">Patan</option> <option value="Pathanamthitta">Pathanamthitta</option> <option value="Pathankot">Pathankot</option> <option value="Patiala">Patiala</option> <option value="Patna">Patna</option> <option value="PauriGarhwal">Pauri Garhwal</option> <option value="Perambalur">Perambalur</option> <option value="Phek">Phek</option> <option value="Pilibhit">Pilibhit</option> <option value="Pithoragarh">Pithoragarh</option> <option value="Pondicherry">Pondicherry</option> <option value="Poonch">Poonch</option> <option value="Porbandar">Porbandar</option> <option value="Pratapgarh">Pratapgarh</option> <option value="Pratapgarh">Pratapgarh</option> <option value="Pudukkottai">Pudukkottai</option> <option value="Pulwama">Pulwama</option> <option value="Pune">Pune</option> <option value="PurbaMedinipur">Purba Medinipur</option> <option value="Puri">Puri</option> <option value="Purnia">Purnia</option> <option value="Purulia">Purulia</option> <option value="Raebareli">Raebareli</option> <option value="Raichur">Raichur</option> <option value="Raigad">Raigad</option> <option value="Raigarh">Raigarh</option> <option value="Raipur">Raipur</option> <option value="Raisen">Raisen</option> <option value="Rajauri">Rajauri</option> <option value="Rajgarh">Rajgarh</option> <option value="Rajkot">Rajkot</option> <option value="Rajnandgaon">Rajnandgaon</option> <option value="Rajsamand">Rajsamand</option> <option value="RamabaiNagar(KanpurDehat)"> Ramabai Nagar (Kanpur Dehat) </option> <option value="Ramanagara">Ramanagara</option> <option value="Ramanathapuram">Ramanathapuram</option> <option value="Ramban">Ramban</option> <option value="Ramgarh">Ramgarh</option> <option value="Rampur">Rampur</option> <option value="Ranchi">Ranchi</option> <option value="Ratlam">Ratlam</option> <option value="Ratnagiri">Ratnagiri</option> <option value="Rayagada">Rayagada</option> <option value="Reasi">Reasi</option> <option value="Rewa">Rewa</option> <option value="Rewari">Rewari</option> <option value="RiBhoi">Ri Bhoi</option> <option value="Rohtak">Rohtak</option> <option value="Rohtas">Rohtas</option> <option value="Rudraprayag">Rudraprayag</option> <option value="Rupnagar">Rupnagar</option> <option value="Sabarkantha">Sabarkantha</option> <option value="Sagar">Sagar</option> <option value="Saharanpur">Saharanpur</option> <option value="Saharsa">Saharsa</option> <option value="Sahibganj">Sahibganj</option> <option value="Saiha">Saiha</option> <option value="Salem">Salem</option> <option value="Samastipur">Samastipur</option> <option value="Samba">Samba</option> <option value="Sambalpur">Sambalpur</option> <option value="Sangli">Sangli</option> <option value="Sangrur">Sangrur</option> <option value="SantKabirNagar">Sant Kabir Nagar</option> <option value="SantRavidasNagar">Sant Ravidas Nagar</option> <option value="Saran">Saran</option> <option value="Satara">Satara</option> <option value="Satna">Satna</option> <option value="SawaiMadhopur">Sawai Madhopur</option> <option value="Sehore">Sehore</option> <option value="Senapati">Senapati</option> <option value="Seoni">Seoni</option> <option value="SeraikelaKharsawan">Seraikela Kharsawan</option> <option value="Serchhip">Serchhip</option> <option value="Shahdol">Shahdol</option> <option value="Shahjahanpur">Shahjahanpur</option> <option value="Shajapur">Shajapur</option> <option value="Shamli">Shamli</option> <option value="Sheikhpura">Sheikhpura</option> <option value="Sheohar">Sheohar</option> <option value="Sheopur">Sheopur</option> <option value="Shimla">Shimla</option> <option value="Shimoga">Shimoga</option> <option value="Shivpuri">Shivpuri</option> <option value="Shopian">Shopian</option> <option value="Shravasti">Shravasti</option> <option value="Sibsagar">Sibsagar</option> <option value="Siddharthnagar">Siddharthnagar</option> <option value="Sidhi">Sidhi</option> <option value="Sikar">Sikar</option> <option value="Simdega">Simdega</option> <option value="Sindhudurg">Sindhudurg</option> <option value="Singrauli">Singrauli</option> <option value="Sirmaur">Sirmaur</option> <option value="Sirohi">Sirohi</option> <option value="Sirsa">Sirsa</option> <option value="Sitamarhi">Sitamarhi</option> <option value="Sitapur">Sitapur</option> <option value="Sivaganga">Sivaganga</option> <option value="Siwan">Siwan</option> <option value="Solan">Solan</option> <option value="Solapur">Solapur</option> <option value="Sonbhadra">Sonbhadra</option> <option value="Sonipat">Sonipat</option> <option value="Sonitpur">Sonitpur</option> <option value="South24Parganas">South 24 Parganas</option> <option value="SouthDelhi">South Delhi</option> <option value="SouthGaroHills">South Garo Hills</option> <option value="SouthGoa">South Goa</option> <option value="SouthSikkim">South Sikkim</option> <option value="SouthTripura">South Tripura</option> <option value="SouthWestDelhi">South West Delhi</option> <option value="SriMuktsarSahib">Sri Muktsar Sahib</option> <option value="Srikakulam">Srikakulam</option> <option value="Srinagar">Srinagar</option> <option value="Subarnapur(Sonepur)"> Subarnapur (Sonepur) </option> <option value="Sultanpur">Sultanpur</option> <option value="Sundergarh">Sundergarh</option> <option value="Supaul">Supaul</option> <option value="Surat">Surat</option> <option value="Surendranagar">Surendranagar</option> <option value="Surguja">Surguja</option> <option value="Tamenglong">Tamenglong</option> <option value="TarnTaran">Tarn Taran</option> <option value="Tawang">Tawang</option> <option value="TehriGarhwal">Tehri Garhwal</option> <option value="Thane">Thane</option> <option value="Thanjavur">Thanjavur</option> <option value="TheDangs">The Dangs</option> <option value="Theni">Theni</option> <option value="Thiruvananthapuram">Thiruvananthapuram</option> <option value="Thoothukudi">Thoothukudi</option> <option value="Thoubal">Thoubal</option> <option value="Thrissur">Thrissur</option> <option value="Tikamgarh">Tikamgarh</option> <option value="Tinsukia">Tinsukia</option> <option value="Tirap">Tirap</option> <option value="Tiruchirappalli">Tiruchirappalli</option> <option value="Tirunelveli">Tirunelveli</option> <option value="Tirupur">Tirupur</option> <option value="Tiruvallur">Tiruvallur</option> <option value="Tiruvannamalai">Tiruvannamalai</option> <option value="Tiruvarur">Tiruvarur</option> <option value="Tonk">Tonk</option> <option value="Tuensang">Tuensang</option> <option value="Tumkur">Tumkur</option> <option value="Udaipur">Udaipur</option> <option value="Udalguri">Udalguri</option> <option value="UdhamSinghNagar">Udham Singh Nagar</option> <option value="Udhampur">Udhampur</option> <option value="Udupi">Udupi</option> <option value="Ujjain">Ujjain</option> <option value="Ukhrul">Ukhrul</option> <option value="Umaria">Umaria</option> <option value="Una">Una</option> <option value="Unnao">Unnao</option> <option value="UpperSiang">Upper Siang</option> <option value="UpperSubansiri">Upper Subansiri</option> <option value="UttarDinajpur">Uttar Dinajpur</option> <option value="UttaraKannada">Uttara Kannada</option> <option value="Uttarkashi">Uttarkashi</option> <option value="Vadodara">Vadodara</option> <option value="Vaishali">Vaishali</option> <option value="Valsad">Valsad</option> <option value="Varanasi">Varanasi</option> <option value="Vellore">Vellore</option> <option value="Vidisha">Vidisha</option> <option value="Viluppuram">Viluppuram</option> <option value="Virudhunagar">Virudhunagar</option> <option value="Visakhapatnam">Visakhapatnam</option> <option value="Vizianagaram">Vizianagaram</option> <option value="Vyara">Vyara</option> <option value="Warangal">Warangal</option> <option value="Wardha">Wardha</option> <option value="Washim">Washim</option> <option value="Wayanad">Wayanad</option> <option value="WestChamparan">West Champaran</option> <option value="WestDelhi">West Delhi</option> <option value="WestGaroHills">West Garo Hills</option> <option value="WestKameng">West Kameng</option> <option value="WestKhasiHills">West Khasi Hills</option> <option value="WestSiang">West Siang</option> <option value="WestSikkim">West Sikkim</option> <option value="WestSinghbhum">West Singhbhum</option> <option value="WestTripura">West Tripura</option> <option value="Wokha">Wokha</option> <option value="Yadgir">Yadgir</option> <option value="YamunaNagar">Yamuna Nagar</option> <option value="Yanam">Yanam</option> <option value="Yavatmal">Yavatmal</option> <option value="Zunheboto">Zunheboto</option> </select>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col">
                    <x-jet-label for="state" value="{{ __('State') }}" />
                    <select class="block mt-1 w-full shadow-md  sm:rounded-lg" id="state"  type="state" name="state" :value="old('state')" required > 
                        <option value=""></option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                         <option value="AP">Andhra Pradesh</option> 
                         <option value="AR">Arunachal Pradesh</option> 
                         <option value="AS">Assam</option>
                          <option value="BR">Bihar</option>
                           <option value="CH">Chandigarh</option>
                            <option value="CT">Chhattisgarh</option>
                             <option value="DN">Dadra and Nagar Haveli</option>
                              <option value="DD">Daman and Diu</option>
                               <option value="DL">Delhi</option>
                                <option value="GA">Goa</option>
                                 <option value="GJ">Gujarat</option>
                                  <option value="HR">Haryana</option>
                                   <option value="HP">Himachal Pradesh</option>
                                    <option value="JK">Jammu and Kashmir</option> <option value="JH">Jharkhand</option> <option value="KA">Karnataka</option> <option value="KL">Kerala</option> <option value="LA">Ladakh</option> <option value="LD">Lakshadweep</option> <option value="MP">Madhya Pradesh</option> <option value="MH">Maharashtra</option> <option value="MN">Manipur</option> <option value="ML">Meghalaya</option> <option value="MZ">Mizoram</option> <option value="NL">Nagaland</option> <option value="OR">Odisha</option> <option value="PY">Puducherry</option> <option value="PB">Punjab</option> <option value="RJ">Rajasthan</option> <option value="SK">Sikkim</option> <option value="TN">Tamil Nadu</option> <option value="TG">Telangana</option> <option value="TR">Tripura</option> <option value="UP">Uttar Pradesh</option> <option value="UT">Uttarakhand</option> <option value="WB">West Bengal</option> </select>
                </div>  
                <div class="col">
                    <x-jet-label for="country" value="{{ __('Country') }}" />
                    <select class="block mt-1 w-full shadow-md  sm:rounded-lg" id="country"  type="country" name="country" :value="old('country')" required >
                        <option value=""></option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form> 
        </div>

    </x-jet-authentication-card>


</x-guest-layout>
