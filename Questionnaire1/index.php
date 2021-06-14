
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Background Questionnaire</title>
<script language="Javascript" src="Questionnaire1/form.js"></script>
<link rel="stylesheet" type="text/css" href="Questionnaire1/style.css">
</head>

<body bgcolor="#f3f3f3" topmargin="40" marginheight="20">

<div align="center"><br>
  <br>
  <p class="title"><strong>SIMILARITY OF LANGUAGES 1:  CONSENT  AND  QUESTIONNAIRE</strong></p>
        <FORM METHOD="post" ACTION="/MTurk/Pros/univ/trial/Questionnaire1/done.php">

          <div class="disclaimer">This study is being conducted by researchers at the Massachusetts Institute of Technology.</div>
          <br>

          <div class="warning"> <b style="color:red"> Please only complete this study "Similarity of Languages 1" once </b>. You will not be paid for retakes. If you have already completed this study and submit it again, all submissions but the first will be rejected, and you will only be paid for the first submission. Having a submission rejected is detrimental to your reputation on Prolific, and may prevent you from participating in studies in the future.</div>

          <p>This study should take you around 30 minutes. <b>If you cannot dedicate 30 minutes, please don't do this study. You will not get paid for an incomplete study. </b></p>


          <p><b>Technical requirements:</b></p>
          <script>
                document.write("The experiment should run properly for you. Please contact tamarr@mit.edu if you do not see the experiment after submitting this questionnaire.")
          </script>

         <noscript>
                <div><b style="color:red">Your browser seems to be blocking JavaScript, which will prevent the experiment from running.</b> Please take this experiment in Google Chrome incognito mode, which will disable adblockers and custom settings. (To active incognito mode in Chrome, for Macs, press Command, Shift and "N" simultaneously. For others, press Control, Shift and "N" simultaneously.) In this incognito window, you need to sign into Prolific again and in a new tab, paste this page's URL to continue (you can copy paste the URL). Please contact tamarr@mit.edu if you need assistance with this step or still see these instructions after following these steps.</div>
        </noscript>

          <br>

          <p><b>Consent statement:</b> </p><p>You are participating in a study being performed by cognitive scientists in the MIT Department of Brain and Cognitive Science. If you have questions about this research, please use the "Contact Researcher" feature in Prolific or contact Tamar Regev at tamarr@mit.edu. Your participation in this research is voluntary. You may decline to answer any or all of the following questions. You may decline further participation, at any time, without adverse consequences. Your anonymity is assured; the researchers who have requested your participation will not receive any personal information about you. Please consent by typing in your Prolific ID in the box below and then proceed to the questionnaire below to continue. Otherwise, please exit the study at this time.</p>
          </b>
          <br>

          <label for="idn">Prolific ID Number</label>
          <input type="text" name="idn" id="idn" required></p>
          <input id="cols" name="cols" type="hidden" value="1" />

          <hr>

          <div id="demog">

          	<p>If you are willing, please answer the background questions below. The only condition for being paid is following the instructions of the study, which will be presented after the questionnaire. Payment is NOT dependent on your answers to the following background questions on country, language, sex/gender, ethnicity, and race.</p>

          	<p>What country are you from? <input name="country" type="radio" value="USA" /><span class="answertext">USA </span>&nbsp;&nbsp;&nbsp; <input name="country" type="radio" value="CAN" /><span class="answertext">Canada</span>&nbsp; &nbsp; <input name="country" type="radio" value="UK" /><span class="answertext">UK &nbsp; &nbsp; </span><input name="country" type="radio" value="AUS" />Australia / New Zealand &nbsp;&nbsp;&nbsp;&nbsp;<input name="country" type="radio" value="IND" /><span class="answertext">India&nbsp; &nbsp; </span><input name="country" type="radio" value="OTHER" /><span class="answertext">Other&nbsp;&nbsp;</span></p>

          	<p>Is English your first language? <input name="english" type="radio" value="yes" /><span class="answertext"> Yes </span>&nbsp;&nbsp;&nbsp;<input name="english" type="radio" value="no" /><span class="answertext">No</span></p>

          	<p>Age: <input name="age" size="20" type="text" /></p>

          	<p>Gender: <input name="gender" type="radio" value="Male" /><span class="answertext">Male </span>&nbsp;&nbsp;&nbsp; <input name="gender" type="radio" value="Female" /><span class="answertext">Female</span>&nbsp; &nbsp; <input name="gender" type="radio" value="Other" /><span class="answertext">Other </span></p>

          	<p>Ethnicity: <input name="ethnicity" type="radio" value="Hispanic or Latino" /><span class="answertext">Hispanic or Latino </span>&nbsp;&nbsp;&nbsp; <input name="ethnicity" type="radio" value="Not Hispanic or Latino" /><span class="answertext">Not Hispanic or Latino</span></p>

          	<p>Race (select one or more): <input name="race[]" type="checkbox" value="American Indian or Alaska Native" /><span class="answertext">American Indian or Alaska Native </span> &nbsp;&nbsp;&nbsp; <input name="race[]" type="checkbox" value="Asian" /><span class="answertext">Asian</span>&nbsp; &nbsp;<input name="race[]" type="checkbox" value="Black or African American" /><span class="answertext">Black or African American </span> &nbsp;&nbsp;&nbsp; <input name="race[]" type="checkbox" value="Native Hawaiian or Other Pacific Islander" /><span class="answertext">Native Hawaiian or Other Pacific Islander </span> &nbsp;&nbsp;&nbsp; <input name="race[]" type="checkbox" value="White" /><span class="answertext">White </span> &nbsp;&nbsp;&nbsp; <input name="race[]" type="checkbox" value="NA" /><span class="answertext">Check here if none of these categories apply </span> &nbsp;&nbsp;&nbsp;</p>
          </div>


          <hr>

          <div id="music">

            <p>Are you <input name="handedness[]" type="checkbox" value="Right"/><span class="answertext">right-handed </span> &nbsp;&nbsp;and/or&nbsp;&nbsp; <input name="handedness" type="checkbox" value="Left"/><span class="answertext">left-handed </span> ?</p>

            <p>Did you ever play any musical instruments? <input name="playinstrument" type="radio" value="yes" required/><span class="answertext"> Yes </span>&nbsp;&nbsp;&nbsp;<input name="playinstrument" type="radio" value="no" required/><span class="answertext">No</span></p>

            <table id="instruments">
              <tr>
                <td><b>Instrument</b></td>
                <td><b>Start year</b></td>
                <td><b>End year</b></td>
              </tr>
              <tr>
                <td><input type="text" name="instr[]" id="" size="20"/></td>
                <td><input type="text" name="instrsy[]" id="" size="15"/></td>
                <td><input type="text" name="instrey[]" id="" size="15"/></td>
              </tr>
              <tr>
                <td><input type="text" name="instr[]" id="" size="20"/></td>
                <td><input type="text" name="instrsy[]" id="" size="15"/></td>
                <td><input type="text" name="instrey[]" id="" size="15"/></td>
              </tr>
              <tr>
                <td><input type="text" name="instr[]" id="" size="20"/></td>
                <td><input type="text" name="instrsy[]" id="" size="15"/></td>
                <td><input type="text" name="instrey[]" id="" size="15"/></td>
              </tr>
              <tr>
                <td><input type="text" name="instr[]" id="" size="20"/></td>
                <td><input type="text" name="instrsy[]" id="" size="15"/></td>
                <td><input type="text" name="instrey[]" id="" size="15"/></td>
              </tr>
              <tr>
                <td><input type="text" name="instr[]" id="" size="20"/></td>
                <td><input type="text" name="instrsy[]" id="" size="15"/></td>
                <td><input type="text" name="instrey[]" id="" size="15"/></td>
              </tr>

            </table>

          <br>
          <p>Did you ever sing in a choir? <input name="choir" type="radio" value="yes" required/><span class="answertext"> Yes </span>&nbsp;&nbsp;&nbsp;<input name="choir" type="radio" value="no" required/><span class="answertext">No</span></p>

          <p>If yes, from which time period? From <input type="text" name="choirt[]" id="" size="10"/> to <input type="text" name="choirt[]" id="" size="10"/></p>
          <br>
          <p>Have you had any formal training in music theory? <input name="mtheory" type="radio" value="yes" required /><span class="answertext"> Yes </span>&nbsp;&nbsp;&nbsp;<input name="mtheory" type="radio" value="no" required/><span class="answertext">No</span></p>

          <p>If yes, from which time period? From <input type="text" name="mtyears[]" id="" size="10"/> to <input type="text" name="mtyears[]" id="" size="10"/></p>
          <br>
          <p>How much music do you listen to currently (hours per day)? <input type="text" name="hourslisten" id="" size="10" required/></p>

          <p>What style(s) of music do you listen to? (e.g. classical, rock) <input type="text" name="musiclisten" id="" size="30" required/></p>

          <p>Anything else we should know about your musical background?</br><textarea name="musicother" id="" rows="3" cols="75"></textarea></p>

        </div>

        <hr>
        <div id="education">
            <label for="degree">Highest degree obtained:</label>

            <select name="deg" id="degree" required>
              <option value=""></option>
              <option value="middle">Middle School</option>
              <option value="high">High School</option>
              <option value="associate">Associate's</option>
              <option value="bachelor">Bachelor's</option>
              <option value="master">Master's</option>
              <option value="doctoral">Doctoral (PhD, JD, MD, etc.)</option>
            </select>

            <p>What was your major, if applicable? <input type="text" name="major" id="" size="20"/></p>
        </div>

        <hr>

          <div id="lang">
            <p>Please rank the  languages that you have <em>any</em> knowledge  of (no matter how rudimentary) in the order of proficiency (1=most proficient):<br />
  		        </p>
            <input name="go" type="button" value="Add Another Language" onClick="AddLanguage()"/>

      		  <table id="langList">
      		    <tr>
      		      <td>1.</td>
      		      <td><input type="text" name="lang[0]" id="lang[0]" onkeyup="copyTo(this,'l1a','l1b')" required /></td>
      	        </tr>
      	      </table>

                </p>
      		  <p>What percent of time do  you currently use each language? (Percentages  must add up to 100%.)</p>
      		  <table id="langPercents">
      		    <tr>
      		      <td><label id="l1a"></label></td>
      		      <td><input type="text" name="langp[0]" id="" size="5" required /></td>
      	        </tr>
      	      </table>

                <p>For each language (including English), please  provide the following information:</p>
                <table id="centerjust" border="1">
                  <tr id="lbR">
                    <td id="rightjust"><b>LANGUAGE</b></td>
                    <td><b><label id="l1b"></label></b></td>
                  </tr>
                  <tr id="aofeR">
                    <td id="rightjust"><b>Age of first exposure</b></td>
                    <td><input type="text" name="aofe[0]" id="" size="15" required /></td>
                  </tr>
                  <tr id="noyeR">
                    <td id="rightjust"><b>Number of years of exposure</b></td>
                    <td><input type="text" name="noye[0]" id="" size="15" required /></td>
                  </tr>
                  <tr>
                    <td id="rightjust"><b>Type(s) of exposure (check all that apply):</b></td>
                  </tr>
                  <tr id="exposureR1">
                    <td id="rightjust">one parent speaks</td>
                    <input type="hidden" name="exposure1[0]" value="no" />
                    <td><input type="checkbox" name="exposure1[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR2">
                    <td id="rightjust">both parents speak</td>
                    <input type="hidden" name="exposure2[0]" value="no" />
                    <td><input type="checkbox" name="exposure2[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR3">
                    <td id="rightjust">one or more other relatives speak (e.g., grandparents)</td>
                    <input type="hidden" name="exposure3[0]" value="no" />
                    <td><input type="checkbox" name="exposure3[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR4">
                    <td id="rightjust">classes at school</td>
                    <input type="hidden" name="exposure4[0]" value="no" />
                    <td><input type="checkbox" name="exposure4[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR5">
                    <td id="rightjust">classes at college</td>
                    <input type="hidden" name="exposure5[0]" value="no" />
                    <td><input type="checkbox" name="exposure5[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR6">
                    <td id="rightjust">other classes</td>
                    <input type="hidden" name="exposure6[0]" value="no" />
                    <td><input type="checkbox" name="exposure6[0]" value="yes" /></td>
                  </tr>
                  <tr id="exposureR7">
                    <td id="rightjust"><b>Do you currently speak the language on a regular basis?</b></td>
                    <input type="hidden" name="exposure7[0]" value="no" />
                    <td><input type="checkbox" name="exposure7[0]" value="yes" /></td>
                  <tr>
                  <tr id="yicR">
                    <td id="rightjust">living in a country where the language is the native language for x years</td>
                    <td><input type="text" name="yic[0]" id="" size="15" required /></td>
                  </tr>
                    <td><b>Proficiency SPEAKING</b></td>
                  </tr>
                  <tr id="profSpeakR5">
                    <td id="rightjust">excellent (native-like)</td>
                    <td><input type="radio" name="profSpeak[0]" value="5" required /></td>
                  </tr>
                  <tr id="profSpeakR4">
                    <td id="rightjust">good</td>
                    <td><input type="radio" name="profSpeak[0]" value="4" required /></td>
                  </tr>
                  <tr id="profSpeakR3">
                    <td id="rightjust">ok</td>
                    <td><input type="radio" name="profSpeak[0]" value="3" required /></td>
                  </tr>
                  <tr id="profSpeakR2">
                    <td id="rightjust">beginner</td>
                    <td><input type="radio" name="profSpeak[0]" value="2" required /></td>
                  </tr>
                  <tr id="profSpeakR1">
                    <td id="rightjust">none</td>
                    <td><input type="radio" name="profSpeak[0]" value="1" required /></td>
                  </tr>
                  <tr>
                    <td><b>Proficiency WRITING</b></td>
                  </tr>
                  <tr id="profWriteR5">
                    <td id="rightjust">excellent (native-like)</td>
                    <td><input type="radio" name="profWrite[0]" value="5" required /></td>
                  </tr>
                  <tr id="profWriteR4">
                    <td id="rightjust">good</td>
                    <td><input type="radio" name="profWrite[0]" value="4" required /></td>
                  </tr>
                  <tr id="profWriteR3">
                    <td id="rightjust">ok</td>
                    <td><input type="radio" name="profWrite[0]" value="3" required /></td>
                  </tr>
                  <tr id="profWriteR2">
                    <td id="rightjust">beginner</td>
                    <td><input type="radio" name="profWrite[0]" value="2" required /></td>
                  </tr>
                  <tr id="profWriteR1">
                    <td id="rightjust">none</td>
                    <td><input type="radio" name="profWrite[0]" value="1" required /></td>
                  </tr>
                  <tr>
                    <td><b>Proficiency UNDERSTANDING SPOKEN LANG.</b></td>
                  </tr>
                  <tr id="profUSpeakR5">
                    <td id="rightjust">excellent (native-like)</td>
                    <td><input type="radio" name="profUSpeak[0]" value="5" required /></td>
                  </tr>
                  <tr id="profUSpeakR4">
                    <td id="rightjust">good</td>
                    <td><input type="radio" name="profUSpeak[0]" value="4" required /></td>
                  </tr>
                  <tr id="profUSpeakR3">
                    <td id="rightjust">ok</td>
                    <td><input type="radio" name="profUSpeak[0]" value="3" required /></td>
                  </tr>
                  <tr id="profUSpeakR2">
                    <td id="rightjust">beginner</td>
                    <td><input type="radio" name="profUSpeak[0]" value="2" required /></td>
                  </tr>
                  <tr id="profUSpeakR1">
                    <td id="rightjust">none</td>
                    <td><input type="radio" name="profUSpeak[0]" value="1" required /></td>
                  </tr>
                  <tr>
                    <td><b>Proficiency UNDERSTANDING WRITTEN LANG.</b></td>
                  </tr>
                  <tr id="profUWriteR5">
                    <td id="rightjust">excellent (native-like)</td>
                    <td><input type="radio" name="profUWrite[0]" value="5" required /></td>
                  </tr>
                  <tr id="profUWriteR4">
                    <td id="rightjust">good</td>
                    <td><input type="radio" name="profUWrite[0]" value="4" required /></td>
                  </tr>
                  <tr id="profUWriteR3">
                    <td id="rightjust">ok</td>
                    <td><input type="radio" name="profUWrite[0]" value="3" required /></td>
                  </tr>
                  <tr id="profUWriteR2">
                    <td id="rightjust">beginner</td>
                    <td><input type="radio" name="profUWrite[0]" value="2" required /></td>
                  </tr>
                  <tr id="profUWriteR1">
                    <td id="rightjust">none</td>
                    <td><input type="radio" name="profUWrite[0]" value="1" required /></td>
                  </tr>
                </table>

          </div>

          <br>

          <p>Press "Submit" to continue to the experiment</p>

          <input name="submit" type="submit" value="Submit" />
        </FORM>

</div>
</body>
</html>
