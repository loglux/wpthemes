<?php
/*
<?php
/**
 * @package WordPress
 * @subpackage Flash_Royal_Theme
	Template Name: View Form
 */


get_header(); ?>
        <div id="empty"></div>
	<div id="content">
	
	<div id="main">
        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'royal_flash') . '</p>'); ?>

                       	</div>

<div class="ss-form-container">


    <div class="ss-form">
    
    <script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe" style="display:none;" onload="if(submitted) {window.location='http://www.mycavalier.lv/confirmation/';}"></iframe>
<form action="https://docs.google.com/a/mycavalier.lv/spreadsheet/formResponse?formkey=1HLdpBIv7MrOXXs3wWx-MhAB7lWypp1ttMdyINTnau3g" method="POST" target="hidden_iframe" onsubmit="submitted=true;" id="ss-form" name="ss-form">
<!-- https://docs.google.com/forms/d/1HLdpBIv7MrOXXs3wWx-MhAB7lWypp1ttMdyINTnau3g/formResponse -->
    <!-- https://docs.google.com/a/mycavalier.lv/spreadsheet/formResponse?formkey=dFFEYU1rN3RDWjg1S0JKOHB2UGlSMXc6MQ&amp;ifq -->
    <!--<form action="https://docs.google.com/a/okeydokey.lv/spreadsheet/formResponse?formkey=dE9ITG0xU0lELXBUMExJbEVkemVqbHc6MQ&amp;ifq" method="POST" id="ss-form">-->

<!--https://docs.google.com/a/mycavalier.lv/spreadsheet/formResponse?formkey=1HLdpBIv7MrOXXs3wWx-MhAB7lWypp1ttMdyINTnau3g -->
<!-- 0 -->
<br>
<!--div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
        <label class="ss-q-title" for="entry_348416398x"><?php _e('Full Name', 'royal_flash');  ?>
            <span class="ss-required-asterisk">*</span></label>
        <label class="ss-q-help" for="entry_348416398x"></label>
        <input type="text" name="entry.348416398x" value="" class="required ss-q-short" id="entry_348416398x">
</div></div></div-->

<div class="ss-form-question errorbox-good">
<div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry">
	<label aria-hidden class="ss-q-item-label aria-todo" for="entry_348416398"><div class="ss-q-title">Full Name
</div>
<div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
	<input type="text" name="entry.348416398" value="" class="ss-q-short" id="entry_348416398" dir="auto" aria-label="Full Name  " title="">
<div class="error-message"></div>
<div class="required-message">This is a required question</div>

</div></div></div> 


 
<!--1--> 
<br> 

    <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text">
    <div class="ss-form-entry"><label class="ss-q-title" for="entry_1"><?php _e('Street Address (where the puppy will live)', 'royal_flash');  ?><span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_1"></label>
<input type="text" name="entry.1.single" value="" class="required ss-q-short" id="entry_1">
    </div></div></div>

 <!--2--> 
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_2"><?php _e('City', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_2"></label>
<input type="text" name="entry.2.single" value="" class="required ss-q-short" id="entry_2"></div></div></div>

 <!--3--> 
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_3"><?php _e('Country', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_3"></label>
<input type="text" name="entry.3.single" value="" class="required ss-q-short" id="entry_3"></div></div></div>

 <!--4--> 
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_4"><?php _e('Zip Code', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_4"></label>
<input type="text" name="entry.4.single" value="" class="required ss-q-short" id="entry_4"></div></div></div>

<!--5-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_5"><?php _e('Phone Number', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_5"></label>
<input type="text" name="entry.5.single" value="" class="required intlphone ss-q-short" id="entry_5"></div></div></div>

<!--6-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_6"><?php _e('Email', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_6"></label>
<input type="text" name="entry.6.single" value="" class="required email ss-q-short" id="entry_6"></div></div></div>

<!--7-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_7"><?php _e('Please list the primary caregiver for this Cavalier', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_7"></label>
<input type="text" name="entry.7.single" value="" class="required ss-q-short" id="entry_7"></div></div></div>

<!--8-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_8"><?php _e('Do you have a fenced yard?', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_8"></label>
<input type="text" name="entry.8.single" value="" class="required ss-q-short" id="entry_8"></div></div></div>

<!--9-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_9"><?php _e('How will your puppy be exercised?', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_9"></label>
<textarea name="entry.9.single" rows="8" cols="75" class="ss-q-long" id="entry_9"></textarea></div></div></div>

<!--10-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_10"><?php _e('Is anyone at home during the day? If no, please tell us how long the puppy will normally be left alone.', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_10"></label>
<textarea name="entry.10.single" rows="8" cols="75" class="ss-q-long" id="entry_10"></textarea></div></div></div>

<!--11-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-title" for="entry_11"><?php _e('Where will the puppy primarily live?', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_11"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.11.group" value="Indoors" class="required ss-q-radio" id="group_11_1">
<?php _e('Indoors', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.11.group" value="Outdoors" class="required ss-q-radio" id="group_11_2">
<?php _e('Outdoors', 'royal_flash');  ?></label></li>
</ul></div></div></div>Are you prepared to make a lifetime (10-15
<!--12-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_12"><?php _e('Do any children live at this address? If so, please list their ages.', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_12"></label>
<textarea name="entry.12.single" rows="8" cols="75" class="ss-q-long" id="entry_12"></textarea></div></div></div>

<!--13-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_13"><?php _e('Do you own other pets? If yes, please tell us about them.', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_13"></label>
<textarea name="entry.13.single" rows="8" cols="75" class="ss-q-long" id="entry_13"></textarea></div></div></div>

<!--14-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_14"><?php _e('Tell us about your prior pet ownership', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_14"></label>
<textarea name="entry.14.single" rows="8" cols="75" class="ss-q-long" id="entry_14"></textarea></div></div></div>

<!--15-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_15"><?php _e('Have you ever returned a dog or other pet? Due to temperment problems or a personal change in your life? Please explain.', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_15"></label>
<textarea name="entry.15.single" rows="8" cols="75" class="ss-q-long" id="entry_15"></textarea></div></div></div>

<!--16-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-title" for="entry_16"><?php _e('Are you prepared to make a lifetime (10-15 years) commitment to a Cavalier King Charles Spaniel? * (If for any reason you can no longer care for the dog during its lifetime, you will be contractually obligated to return it to us.)', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_16"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.16.group" value="yes" class="required ss-q-radio" id="group_16_1">
<?php _e('yes', 'royal_flash'); ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.16.group" value="no" class="required ss-q-radio" id="group_16_2">
<?php _e('no', 'royal_flash');  ?></label></li>
</ul></div></div></div>

<!--17-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-title" for="entry_17"><?php _e('Are you prepared for the significant financial investment required to purchase and raise a quality Cavalier King Charles Spaniel Puppy?', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_17"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.17.group" value="yes" class="required ss-q-radio" id="group_17_1">
<?php _e('yes', 'royal_flash'); ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.17.group" value="no" class="required ss-q-radio" id="group_17_2">
<?php _e('no', 'royal_flash');  ?></label></li>
</ul></div></div></div>

<!--18-->
<!--<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-title" for="entry_18"><?php _e('Do you realize pet prices from responsible breeders start at $2500.00 in addition to your normal costs of regular veterinary care, quality food, training and supplies?', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_18"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.18.group" value="yes" class="required ss-q-radio" id="group_18_1">
<?php _e('yes', 'royal_flash'); ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.18.group" value="no" class="required ss-q-radio" id="group_18_2">
<?php _e('no', 'royal_flash');  ?></label></li>
</ul></div></div></div>-->

<!--19-->
<br> <div class="errorbox-good">
    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_19"><?php _e('Why are you considering a Cavalier King Charles Spaniel?', 'royal_flash'); ?>
</label>
<label class="ss-q-help" for="entry_19"></label>
<textarea name="entry.19.single" rows="8" cols="75" class="ss-q-long" id="entry_19"></textarea></div></div></div>

<!--20-->
<br> <div class="errorbox-good">
    <div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_20"><?php _e('What gender puppy do you prefer?', 'royal_flash'); ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_20"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.20.group" value="Male" class="required ss-q-checkbox" id="group_20_1">
<?php _e('Male', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.20.group" value="Female" class="required ss-q-checkbox" id="group_20_2">
<?php _e('Female', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.20.group" value="Either, I just want the best pet for my family" class="required ss-q-checkbox" id="group_20_3">
<?php _e('Either, I just want the best pet for my family', 'royal_flash');  ?></label></li>
</ul></div></div></div>

<!--21-->
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_21"><?php _e('What color Cavalier do you prefer?', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_21"></label>
<input type="text" name="entry.21.single" value="" class="required ss-q-short" id="entry_21">
<!--<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="checkbox" name="entry.21.group" value="Ruby" class="required ss-q-checkbox" id="group_21_1">
<?php _e('Ruby', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.21.group" value="Black and Tan" class="required ss-q-checkbox" id="group_21_2">
<?php _e('Black and Tan', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.21.group" value="Blenheim" class="required ss-q-checkbox" id="group_21_3">
<?php _e('Blenheim', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.21.group" value="Tricolor" class="required ss-q-checkbox" id="group_21_4">
<?php _e('Tricolor', 'royal_flash');  ?></label></li></ul>-->
    </div></div></div>

<!--22-->
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_22"><?php _e('What age Cavalier are you looking for?', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_22"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.22.group" value="Puppy 9 - 16 weeks" class="required ss-q-checkbox" id="group_22_1">
<?php _e('Puppy 9 - 16 weeks', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.22.group" value="Puppy 4 months - 1 year" class="required ss-q-checkbox" id="group_22_2">
<?php _e('Puppy 4 months - 1 year', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.22.group" value="Young Adult (over 1 year)" class="required ss-q-checkbox" id="group_22_3">
<?php _e('Young Adult (over 1 year)', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="checkbox" name="entry.22.group" value="Retired Adult (Over age 3 and retired from show/breeding program)" class="required ss-q-checkbox" id="group_22_4">
<?php _e('Retired Adult (Over age 3 and retired from show/breeding program)', 'royal_flash');  ?></label></li>
</ul></div></div></div>

<!--23-->
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-title" for="entry_23"><?php _e('Are you looking for a pet or show prospect?', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_23"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label">
            <input type="radio" name="entry.23.group" value="Pet (limited AKC registration)" class="required ss-q-radio" id="group_23_1">
<?php _e('Pet (limited AKC registration)', 'royal_flash');  ?></label></li> <li class="ss-choice-item"><label class="ss-choice-label">
        <input type="radio" name="entry.23.group" value="Show prospect" class="required ss-q-radio" id="group_23_2">
<?php _e('Show prospect', 'royal_flash');  ?></label></li>
</ul></div></div></div>

<!--24-->
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_24"><?php _e('When are you looking to adopt a Cavalier?', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span></label>
<label class="ss-q-help" for="entry_24"></label>
<textarea name="entry.24.single" rows="8" cols="75" class="required ss-q-long" id="entry_24"></textarea></div></div></div>

<!--25-->
<br> <div class="errorbox-good">
<div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_25"><?php _e('Do you have a current veterinarian I may contact for a reference? If yes, please provide the contact information below.', 'royal_flash');  ?>
</label>
<label class="ss-q-help" for="entry_25"></label>
<textarea name="entry.25.single" rows="8" cols="75" class="ss-q-long" id="entry_25"></textarea></div></div></div>

<!--26-->
<br> <div class="errorbox-good">
<div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_26"><?php _e('If there is anything else you&#39;d like us to know about yourself or the home you can offer one of our puppies, please include it here.', 'royal_flash');  ?>
</label>
<label class="ss-q-help" for="entry_26"></label>
<textarea name="entry.26.single" rows="8" cols="75" class="ss-q-long" id="entry_26"></textarea></div></div></div>

<!--27-->
<br> <div class="errorbox-good">
<div class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_27"><?php _e('How did you find our website?', 'royal_flash');  ?>
</label>
<label class="ss-q-help" for="entry_27"></label>
<textarea name="entry.27.single" rows="8" cols="75" class="ss-q-long" id="entry_27"></textarea></div></div></div>

<!--28-->
<br> <div class="errorbox-good">
<div class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry"><label class="ss-q-title" for="entry_28">

        </label>
<label class="ss-q-help" for="entry_28"></label>
<ul class="ss-choices"><li class="ss-choice-item"><label class="ss-choice-label"><input type="checkbox" name="entry.28.group" value="In checking this box, you declare all the above information is true. " class="required ss-q-checkbox" id="group_28_1">
<?php _e('In checking this box, you declare all the above information is true.', 'royal_flash');  ?>
<span class="ss-required-asterisk">*</span>
        </label></li>
</ul></div></div></div>
<br>
<input type="hidden" name="pageNumber" value="0">
<input type="hidden" name="backupCache" value="">


<div class="ss-item ss-navigate"><div class="ss-form-entry">
<input type="submit" name="submit" value="<?php _e('Submit', 'royal_flash'); ?>"></div></div></form>
</div>



<?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'royal_flash') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
	<!-- -->
		<?php endwhile; endif; ?>
	<?php edit_post_link(__('Edit this entry.', 'royal_flash'), '<p>', '</p>'); ?>
	
	<?php // comments_template(); ?> 


	</div><!-- #main-->
	</div><!-- #content-->


</div><!-- #wrapper -->

<?php  get_footer(); ?>