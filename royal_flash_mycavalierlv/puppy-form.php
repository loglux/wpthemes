<?php
/*
  <?php
  /**
 * @package WordPress
 * @subpackage Flash_Royal_Theme
  Template Name: Puppy Form
 */


get_header();
?>
<div id="empty"></div>
<div id="content">

    <div id="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">

                    <div class="entry">
                        <?php the_content('<p class="serif">' . __('Read the rest of this page &raquo;', 'royal_flash') . '</p>'); ?>

                    </div>


                    <div class="ss-form-container"><div class="ss-header-image-container"><div class="ss-header-image-image"><div class="ss-header-image-sizer"></div></div></div>
                        <div class="ss-top-of-page"><div class="ss-form-heading"><!--h1 class="ss-form-title">Puppy Questionnaire</h1-->


                            </div></div>



                        <!-- start of the form -->
                        <div class="ss-form">


                            <!--form action="https://docs.google.com/forms/d/1HLdpBIv7MrOXXs3wWx-MhAB7lWypp1ttMdyINTnau3g/formResponse" method="POST" id="ss-form" target="_self" onsubmit=""-->

                            <script type="text/javascript">var submitted = false;</script>
                            <iframe name="hidden_iframe" id="hidden_iframe"
                                    style="display:none;" onload="if (submitted)
                                            {
                                                window.location = 'http://www.mycavalier.lv/confirmation/';
                                            }"></iframe>
                            <form action="https://docs.google.com/forms/d/1HLdpBIv7MrOXXs3wWx-MhAB7lWypp1ttMdyINTnau3g/formResponse" method="POST"
                                  target="hidden_iframe" onsubmit="submitted = true;" id="ss-form" name="ss-form">


                                <!--ol role="list" class="ss-question-list" style="padding-left: 0"--><!-- start of ol -->

                                <!-- 0 -->
                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Full Name', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.348416398" class="required ss-q-short" id="entry_348416398" title="" type="text">
                                            <div class="error-message" id="109519585_errorMessage"></div>
                                            <!--div class="required-message">This is a required question</div-->
                                        </div></div></div> 

                                <!-- 1 -->

                                <div class="ss-form-question errorbox-good">



                                    <div class="ss-item  ss-text"><div class="ss-form-entry">

                                            <div class="ss-q-title"><?php _e('Street Address (where the puppy will live)', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.1670963654" class="required ss-q-short" id="entry_1670963654" title="" type="text">
                                            <div class="error-message" id="1130739206_errorMessage"></div>
                                            <!--div class="required-message">This is a required question</div-->
                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">

                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('City', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.1706678631" class="required ss-q-short" id="entry_1706678631" title="" type="text">
                                            <div class="error-message" id="1138946347_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Country', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.741651205" class="required ss-q-short" id="entry_741651205" title="" type="text">
                                            <div class="error-message" id="1270166431_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Zip Code', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.720255" class="required ss-q-short" id="entry_720255" title="" type="text">
                                            <div class="error-message" id="1710644867_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Phone Number', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.2003644115" class="required intlphone ss-q-short" id="entry_2003644115" title="" type="text">
                                            <div class="error-message" id="32411394_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Email', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.385728854" class="required email ss-q-short" id="entry_385728854" title="" type="text">
                                            <div class="error-message" id="601567955_errorMessage"></div>

                                        </div></div></div> <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Please list the primary caregiver for this Cavalier', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.148370468" class="required ss-q-short" id="entry_148370468" title="" type="text">
                                            <div class="error-message" id="1918291112_errorMessage"></div>

                                        </div></div></div> <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Do you have a fenced yard?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.1466113351" class="required ss-q-short" id="entry_1466113351" title="" type="text">
                                            <div class="error-message" id="1683199265_errorMessage"></div>

                                        </div></div></div> <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('How will your puppy be exercised?', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.739055308" class="ss-q-long" id="entry_739055308"></textarea>
                                            <div class="error-message" id="466598407_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Is anyone at home during the day? If no, please tell us how long the puppy will normally be left alone.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.779241737" class="ss-q-long" id="entry_779241737"></textarea>
                                            <div class="error-message" id="1473076468_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-radio"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Where will the puppy primarily live?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices">
                                                <li class="ss-choice-item">
                                                    <span class="ss-choice-item-control goog-inline-block">
                                                        <input name="entry.585936923" value="Indoors" id="group_585936923_1" class="required ss-q-radio" type="radio">
                                                    </span>
                                                    <span class="ss-choice-label"><?php _e('Indoors', 'royal_flash'); ?></span>
                                                </li> 

                                                <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block">
                                                        <input name="entry.585936923" value="Outdoors" id="group_585936923_2" class="required ss-q-radio" type="radio">
                                                    </span>
                                                    <span class="ss-choice-label"><?php _e('Outdoors', 'royal_flash'); ?></span>
                                                </li>
                                            </ul>
                                            <div class="error-message" id="2000685819_errorMessage"></div>


                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Do any children live at this address? If so, please list their ages.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.696604054" class="ss-q-long" id="entry_696604054"></textarea>
                                            <div class="error-message" id="1195455859_errorMessage"></div>

                                        </div></div></div> <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Do you own other pets? If yes, please tell us about them.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.310628805" class="ss-q-long" id="entry_310628805"></textarea>
                                            <div class="error-message" id="610926965_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Have you ever returned a dog or other pet? Due to temperment problems or a personal change in your life? Please explain.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.938688384" class="ss-q-long" id="entry_938688384"></textarea>
                                            <div class="error-message" id="1576429612_errorMessage"></div>

                                        </div></div></div> <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-radio"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Are you prepared to make a lifetime (10-15 years) commitment to a Cavalier King Charles Spaniel? * (If for any reason you can no longer care for the dog during its lifetime, you will be contractually obligated to return it to us.)', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices"><li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block">
                                                        <input name="entry.973414646" value="yes" id="group_973414646_1" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('yes', 'royal_flash'); ?></span>
                                                </li> <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block">
                                                        <input name="entry.973414646" value="no" id="group_973414646_2" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('no', 'royal_flash'); ?></span>
                                                </li></ul>
                                            <div class="error-message" id="1389120412_errorMessage"></div>



                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-radio"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Are you prepared for the significant financial investment required to purchase and raise a quality Cavalier King Charles Spaniel Puppy?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices"><li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block">
                                                        <input name="entry.1737684603" value="yes" id="group_1737684603_1" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('yes', 'royal_flash'); ?></span>
                                                </li> <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1737684603" value="no" id="group_1737684603_2" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('no', 'royal_flash'); ?></span>
                                                </li></ul>
                                            <div class="error-message" id="1118377473_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Do you realize pet prices from responsible breeders start at 1000.00 EUR in addition to your normal costs of regular veterinary care, quality food, training and supplies?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.1700775419" class="required ss-q-short" id="entry_1700775419" title="" type="text">
                                            <div class="error-message" id="1140322624_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Why are you considering a Cavalier King Charles Spaniel?', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.1039804124" class="ss-q-long" id="entry_1039804124"></textarea>
                                            <div class="error-message" id="571999445_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-radio"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('What gender puppy do you prefer?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices"><li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1564151080" value="Male" id="group_1564151080_1" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('Male', 'royal_flash'); ?></span>
                                                </li> <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1564151080" value="Female" id="group_1564151080_2" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('Female', 'royal_flash'); ?></span>
                                                </li> <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1564151080" value="Either, I just want the best pet for my family" id="group_1564151080_3" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('Either, I just want the best pet for my family', 'royal_flash'); ?></span>
                                                </li></ul>
                                            <div class="error-message" id="312068493_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('What color Cavalier do you prefer?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <input name="entry.1152631417" class="required ss-q-short" id="entry_1152631417" title="" type="text">
                                            <div class="error-message" id="1801053312_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-checkbox"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('What age Cavalier are you looking for?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices" role="group">
                                                <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.716232381" value="Puppy 9 - 16 weeks" id="group_716232381_1" class="required ss-q-checkbox" type="checkbox"></span>
                                                    <span class="ss-choice-label"><?php _e('Puppy 9 - 16 weeks', 'royal_flash'); ?></span>
                                                </li> 
                                                <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.716232381" value="Option 2Puppy 4 months - 1 year" id="group_716232381_2" class="required ss-q-checkbox" type="checkbox"></span>
                                                    <span class="ss-choice-label"><?php _e('Puppy 4 months - 1 year', 'royal_flash'); ?></span>
                                                </li> 
                                                <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.716232381" value="Young Adult (over 1 year)" id="group_716232381_3" class="required ss-q-checkbox" type="checkbox"></span>
                                                    <span class="ss-choice-label"><?php _e('Young Adult (over 1 year)', 'royal_flash'); ?></span>
                                                </li> 
                                                <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.716232381" value="Retired Adult (Over age 3 and retired from show/breeding program)" id="group_716232381_4" class="required ss-q-checkbox" type="checkbox"></span>
                                                    <span class="ss-choice-label"><?php _e('Retired Adult (Over age 3 and retired from show/breeding program)', 'royal_flash'); ?></span>
                                                </li>
                                            </ul>
                                            <div class="error-message" id="495475810_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-radio"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Are you looking for a pet or show prospect?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices"><li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1660733388" value="Pet (limited AKC registration)" id="group_1660733388_1" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('Pet (limited AKC registration)', 'royal_flash'); ?></span>
                                                </li> <li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.1660733388" value="Show prospect" id="group_1660733388_2" class="required ss-q-radio" type="radio"></span>
                                                    <span class="ss-choice-label"><?php _e('Show prospect', 'royal_flash'); ?></span>
                                                </li></ul>
                                            <div class="error-message" id="1726679462_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('When are you looking to adopt a Cavalier?', 'royal_flash'); ?>
                                                <span class="ss-required-asterisk">*</span>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.918876830" class="required ss-q-long" id="entry_918876830"></textarea>
                                            <div class="error-message" id="955889436_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('Do you have a current veterinarian I may contact for a reference? If yes, please provide the contact information below.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.1025181969" class="ss-q-long" id="entry_1025181969"></textarea>
                                            <div class="error-message" id="1984495207_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('If there is anything else you&#39;d like us to know about yourself or the home you can offer one of our puppies, please include it here.', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.1518032772" class="ss-q-long" id="entry_1518032772"></textarea>
                                            <div class="error-message" id="1855188364_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-paragraph-text"><div class="ss-form-entry">
                                            <div class="ss-q-title"><?php _e('How did you find our website?', 'royal_flash'); ?>
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>
                                            <textarea name="entry.1601626980" class="ss-q-long" id="entry_1601626980"></textarea>
                                            <div class="error-message" id="1816950922_errorMessage"></div>

                                        </div></div></div> 

                                <div class="ss-form-question errorbox-good">
                                    <div class="ss-item  ss-checkbox"><div class="ss-form-entry">
                                            <div class="ss-q-title">
                                            </div>
                                            <div class="ss-q-help ss-secondary-text"></div>

                                            <ul class="ss-choices" role="group"><li class="ss-choice-item"><span class="ss-choice-item-control goog-inline-block"><input name="entry.2113036642" value="In checking this box, you declare all the above information is true." id="group_2113036642_1" class="required ss-q-checkbox" type="checkbox"></span>
                                                    <span class="ss-choice-label"><?php _e('In checking this box, you declare all the above information is true.', 'royal_flash'); ?>
                                                        <span class="ss-required-asterisk">*</span>
                                                    </span>
                                                </li></ul>
                                            <div class="error-message" id="254547597_errorMessage"></div>

                                        </div></div></div>
                                <input name="draftResponse" value="[,,&quot;-8577064642681922974&quot;]
                                       " type="hidden">
                                <input name="pageHistory" value="0" type="hidden">


                                <input name="fbzx" value="-8577064642681922974" type="hidden">

                                <div class="ss-item ss-navigate"><div class="ss-form-entry">
                                <!--table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons"-->
                                        <input name="submit" value="<?php _e('Submit', 'royal_flash'); ?>" id="ss-submit" class="jfk-button jfk-button-action " type="submit">

                                        <!--div class="ss-password-warning ss-secondary-text">Never submit passwords through Google Forms.</div--><!--/td-->

                                        <!--/tr></tbody></table-->

                                    </div></div>

                                <!--/ol--><!-- end of ol -->

                            </form></div>
                        <!-- end of the form -->

                        <!--script type="text/javascript" src="Puppy%20Questionnaire_files/956076340-formviewer_prd__en_gb.js"></script>
                        <script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
                                  _initFormViewer(
                                    "[100,,[]\n]\n");</script-->
                    </div>
                    <?php wp_link_pages(array('before' => '<p><strong>' . __('Pages:', 'royal_flash') . '</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <!-- -->
                <?php
            endwhile;
        endif;
        ?>
        <?php edit_post_link(__('Edit this entry.', 'royal_flash'), '<p>', '</p>'); ?>

        <?php // comments_template();    ?> 


    </div><!-- #main-->
</div><!-- #content-->


</div><!-- #wrapper -->

<?php get_footer(); ?>