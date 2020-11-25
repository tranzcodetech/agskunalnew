
    <h1>
</br>
</br>
</h1>

<?php

$title = "WELCOME TO THE AGRAGAMEE SANGHA, SILIGURI" ;

include 'includes/header.php';
    echo '</br>';
    echo '<h2 class="text-center"><u>'. "ONLINE REGISTRATION FORM FOR TRAINEES" .'</u></h2>';
    echo '</br>';

    echo' <p class="text-justify">
    TERMS AND CONDITIONS SESSION : APRIL TO MARCH 
    1) Admission form may be obtained at Rs. 10-(Ten) each  
    2) Admission fee Rs 2000-Two Thousand) only 
    3) Admission fee shall be paid while enrolling ones name as Student Trainee 
    4) Subscription Rs 300 per month 12 months ie Rs 3500/- is payable at a time  <p/>';
    //echo '</br>';
 //5) Students / Trainees are to submit three copies of recent passport size colour photographs along with the admission form duly filled in  Admission fee and subscription shall have to be paid by the Student / Trainee or by his Guardian before joining 6) Renewal fee is Rs. 3600/- shall have to pay by the Student / Guardian within 15th April every year
  //  7) Renewal fee for Students Trainees admitted during the period April to December shall have to renew their Registration positively within 15th April every year. However, in such cases who gets admission in December shall pay Rs 1200/- only towards Renewed of Registration and Similarly admitted in January & February shall pay Rs 900/- & 600 respectively 8) Identity Card stating full particulars of the Student / Trainee will be issued after acceptance of his candidature only 9) In case of loss or damage the identity card an application along with Rs. 50/- (Fifty) for first time, Rs. 100- for second time & Rs. 200- for third & last time towards duplicate fee shall have to be deposited 10) Irregular Students / Trainees will be suspended and the admission fee, subscription deposited will be forfeited thereof 11) Guardians of the Students / Trainees (Below 10years) are requested to take back their children trom the Coaching Centre at 06:0 pm. on submision of their identity Cards 12) Students / Trainees are requested to bring their own kits (Bat, Gloves, Pad, Abdomen Guards. Helmetee) while attending the Coaching Centre 10. Xerox Copy Birth Registration Certificate (solt Attented) should be enclosed -->
    echo '<h4 class="text-center"><STRONG>'. "READ THE TERMS & FILL UP THE FORM CAREFULLY" .'</STRONG></h4>';

?>
        <!--Full Name of the Trainee -->
        <!-- Phone Number -->
        <!-- Email Address -->
        <!-- Date of Birth --> 
        <!-- Address -->
        <!-- Coaching Selection 1) Cricket 2) Table Tennis -->
        

        
        <form>
        <div class="form-group">
            <label for="name">Full Name of the Trainee</label>
            <input type="text" class="form-control" id="name" >
           
        </div>
        <div class="form-group">
            <label for="mobile">Phone Number</label>
            <input type="text" class="form-control" id="mobile" >
           
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" id="email" >
           
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="Date" class="form-control" id="dob" >
           
        </div>

        
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" >

            
           
        </div>

        <div class="form-group">
            <label for="coachin">Coaching Selection</label>
            <select class="form-control" id="coaching">
            <option>Cricket</option>
            <option>Table Tennis</option>
            <option>Cricket & Table Tennis</option>
                        </select>
        </div>

        
        
        <button type="submit" class="btn btn-primary btn-block">SUBMIT YOUR APPLICATION</button>
        </form>
<!-- <button type="button" class="btn btn-primary">SUBMIT</button> -->


<?php
include 'includes/footer.php';

?>
