<?php
	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		$lead_id = md5(uniqid(rand(), true));
		$gender = $_POST['sex'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$dob_day = $_POST['dob_day'];
		$dob_month = $_POST['dob_month'];
		$dob_year = $_POST['dob_year'];
	}
?>

<html lang="en"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/topten.css">
<style type="text/css">
.icon-money:before, .icon-0:before {
				content: "\e911" !important;
		}
</style>
<title>Just Another Demo Site | #websitename</title>
</head>
<body>
<div class="header">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1 style="
    color: #fff;
">Application Page 2</h1>
			</div>
		</div>
	</div>
</div>
	<div class="banner banner-small">
		<div class="banner-overlay">
			<div class="gradient"></div>
		</div>
	</div>
<div class="container">
	<div class="row">
		
	</div>
	<div class="row">
		<div class="col-12">
			<div class="panels text-center">
				<form action="details.php" method="post">
					<input type="hidden" name="lead_id" value="<?php echo($lead_id); ?>">
					<input type="hidden" name="sex" value="<?php echo($gender); ?>">
					<input type="hidden" name="firstname" value="<?php echo($firstname); ?>">
					<input type="hidden" name="lastname" value="<?php echo($lastname); ?>">
					<input type="hidden" name="email" value="<?php echo($email); ?>">
					<input type="hidden" name="dob_day" value="<?php echo($dob_day); ?>">
					<input type="hidden" name="dob_month" value="<?php echo($dob_month); ?>">
					<input type="hidden" name="dob_year" value="<?php echo($dob_year); ?>">
					<button id="select-all" data-action="select-all" type="button" class="btn btn-gold">Select all</button>
											<div class="panel" data-active="1">
							<div class="row align-items-center no-gutters">
								<div class="col-md-3 p-5">
									<img class="mt-4 mt-md-0 img-fluid" src="https://hub.trckd.link/storage/panels/71c77d90-e461-11e9-811e-a91b8742a251.jpg">
								</div>
								<div class="col-md-6 text-left">
									<div class="row no-gutters align-items-center">
										<div class="col-md-8">
											<div class="panel-content">
												<ul>
<li>Opinion World offer many exciting rewards</li>
<li>Be rewarded for taking surveys &amp; other online activities</li>
<li>Choose to be paid with Cash or Gift Cards</li>
</ul>
											</div>
											
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="panels[]" value="71c77d90-e461-11e9-811e-a91b8742a251">
									<button class="select-panel" type="button" data-select="Select" data-selected="Selected">Select</button>
								</div>
							</div>
							<div class="terms">
								<h2>Dynata, LLC (f/k/a Survey Sampling International, LLC)</h2>
<h2>Terms &amp; Conditions</h2>
<p><a name="1"></a>&nbsp;</p>
<p>1.&nbsp;Applicability; Agreement.</p>
<p>These Terms and Conditions (these “&nbsp;Terms”) govern and apply to your use of Dynata’s services, including, without limitation, (1) membership with an Dynata panel or subpanel, including, without limitation, Survey Spot Research Panel, OpinionWorld Research Panels, Choozz Research Panels, Opinion Outpost Research Panels and YourVoice Research Panels (individually a “&nbsp;Panel” and collectively the “&nbsp;Panels”), (2) use of and/or access to any Panel website (individually a “&nbsp;Website” and collectively the “&nbsp;Websites”), (3) participation in any survey or study offered, provided, hosted or administered by or through Dynata, and (4) your eligibility for, and/or redemption of, rewards, incentives and prizes offered for certain actions and activities, including, without limitation, successfully completing surveys (collectively, the “&nbsp;Services”).</p>
<p>All references in these terms to “&nbsp;Dynata” include Dynata, LLC and its parents, subsidiaries and affiliates. All references in these Terms to “&nbsp;us” or “&nbsp;we” refer to Dynata.</p>
<p>By accessing, using and/or participating in the Services you hereby expressly agree to comply with, and be bound by, these Terms.</p>
<p>Dynata reserves the right to refuse, restrict, prohibit or reject your access to, use of, and/or participation in the Services, at any time and for any reason. &nbsp;&nbsp;</p>
<p><a name="2"></a>&nbsp;</p>
<p>2.&nbsp;Membership Eligibility.</p>
<p>Panel membership is generally open to individuals who satisfy the requirements for membership, including, without limitation, the minimum age requirement and geographic location requirement. The requirements for Panel membership may vary for each Panel. We only allow one member per unique email address. Dynata may refuse to provide the Services to anyone, at any time and for any reason or no reason.</p>
<p>&nbsp;</p>
<p>3.&nbsp;Use of the Services.</p>
<p>The Services are for personal, non-commercial use. You may use the Services only when and as available. Dynata reserves the right to change, modify or eliminate, and/or restrict or block access to, all or any part of the Services, without notice, at any time, for any reason or no reason.</p>
<p>Dynata provides Panel members and non-Panel members with the opportunity to participate in surveys. Participation in surveys is voluntary. By agreeing to become a Panel member, you agree to receive invitations to participate in surveys. Additionally, Dynata may provide Panel members with the opportunity to communicate with other Panel members and/or Dynata. You may unsubscribe from Panel membership at any time, see Section 10 "Opt Out Policy" below.</p>
<p><a name="3"></a>&nbsp;</p>
<p>4.&nbsp;Panel Registration; Passwords.</p>
<p>You may access any Website(s) as a visitor without registering for membership with the Panel associated with the Website(s) and without providing or disclosing personal information. &nbsp;</p>
<p>In order to register as a Panel member, you must register with or for the Panel and provide certain personal information. Panel members and non-Panel members are required to truthfully provide all information. Dynata reserves the right to restrict or prohibit your use of, access to and/or participation in the Services if you provide, or Dynata reasonably suspects that you have provided, information that is untrue, inaccurate, not current or incomplete.</p>
<p>&nbsp;</p>
<p>Dynata will either: (i) issue a user name and password to a Panel member, or (ii) permit a Panel member to create his/her own user name and password. Panel members are solely responsible for the security of their user names and passwords and will be solely liable and responsible for any use, whether authorised or unauthorised, of their membership accounts. Dynata strongly recommends against the use of a social security number, financial account number, or any other identification or account number, as a user name or password.</p>
<p><a name="4"></a>&nbsp;</p>
<p>Panel membership is specific to the individual who registers for membership with the Panel. &nbsp;</p>
<p>You acknowledge that you are accessing, using and/or participating in the Services in the capacity of an independent contractor, and no agency, partnership, joint venture, employee-employer or franchisor-franchisee relationship is intended or created by this agreement.&nbsp;</p>
<p>&nbsp;</p>
<p>5.&nbsp;Unauthorised Uses.</p>
<p>You agree not to: (i) use spiders, robots or other automated data mining techniques to catalogue, download, store, or otherwise reproduce or distribute data or content available in connection with the Services, or to manipulate the results of any survey, prize draw or contest; (ii) take any action to interfere with any Website(s) or an individual’s use of any Website, including, without limitation, by overloading, “flooding”, “mail bombing” or “crashing” any Website; (iii) send or transmit any viruses, corrupted data, or any other harmful, disruptive or destructive code, file or information, including, without limitation, spyware; (iv) collect any personally identifiable information of or about any other user of the Services; (v) send unsolicited emails, including, without limitation, promotions and/or advertising of products or services; (vi) open, use or maintain more than one (1) membership account with a Panel; (vii) Forge or mask your true identity; (viii) frame a portion(s) of any Website within another website or alter the appearance of any Website; (ix)&nbsp;&nbsp; establish links from any other website to any page of, on or located within any Website or to the Services, without the prior express written permission of Dynata; (x) post or transmit any threatening, libellous, defamatory, obscene, pornographic, lewd, scandalous or inflammatory material or content or any material or content that could otherwise violate Applicable Laws (as defined herein); (xi) engage in any fraudulent activity, including, without limitation, speeding through surveys, taking the same survey more than once, masking or forging your identity, submitting false information during the registration process, submitting false or untrue survey data, redeeming or attempting to redeem rewards, prizes and/or incentives through false or fraudulent means, and tampering with surveys; (xii) reverse engineer any aspect of the Services or do or take any act that might reveal or disclose the source code, or bypass or circumvent measurers or controls utilised to prohibit, restrict or limit access to any webpage, content or code, except as expressly permitted by Applicable Laws; (xiii) engage in any criminal or illegal act(s); (xiv) use Restricted Content (as defined herein) in violation or breach of these Terms; or (xv) encourage and/or advise any individual, including, without limitation, any Dynata employee, to commit any act(s) prohibited hereunder.</p>
<p>You acknowledge and agree that Dynata will fully cooperate with all legal disclosure request(s) (e.g. court order or subpoena).</p>
<p><a name="5"></a>&nbsp;</p>
<p>6.&nbsp;Restricted Content.</p>
<p>In connection with your use of, access to and/or participation in the Services, you may have the opportunity to review or access confidential and proprietary information, materials, products and content (“&nbsp;Restricted Content”) belonging to Dynata and/or Dynata’s clients, partners and/or licensers. Restricted Content is and shall remain the sole and exclusive property of the owner of the Restricted Content. In no event shall you obtain or receive any right, title and/or interest in or to any Restricted Content. You agree to protect the confidentiality and secrecy of the Restricted Content and you agree not to modify, copy, reproduce, republish, display, transmit, distribute, reverse engineer, create derivative works of, decompile, or otherwise use, alter or transfer Restricted Content without the prior express written consent of Dynata. You acknowledge and agree that Restricted Content may be subject to, and protected by, intellectual property laws, regulations and codes. You further acknowledge and agree that if you breach or otherwise violate the restrictions, limitations and prohibitions contained in this Section, in addition to any other rights or remedies available to Dynata, Dynata reserves the right to terminate, prohibit or restrict your use of, access to and/or participation in the Services. &nbsp;&nbsp;&nbsp;</p>
<p><a name="6"></a>&nbsp;</p>
<p>7.&nbsp;User Content.</p>
<p>You are solely liable and responsible for all content, materials, information and comments you use, upload, post or submit in connection with the Services (“&nbsp;User Content”). You are solely responsible for all third party approvals, consents and/or authorisations required for User Content. If you submit User Content, the User Content may become publicly available and may be shared with third parties including, without limitation, Dynata’s clients, clients of Dynata’s clients and third party service providers. User Content should only include audio, video, images, or the likeness of the individual submitting the User Content and should not contain copyrighted or trademarked content or material of any third party. User Content should not include audio, video, images or the likeness of anyone other than the user. You will not receive compensation for any User Content. If you would like information about the identity of the sponsor of a survey in which you submit photos or videos, please contact Dynata as set forth in Dynata’s Privacy Policy. In order to identify the specific survey, you will need to provide Dynata with your email address and information on the specific survey (e.g., survey number, survey topic or subject matter, date you completed the survey, etc.).</p>
<p>By using, uploading, posting or submitting User Content in connection with the Services, you hereby grant to Dynata a perpetual, irrevocable, unlimited, transferrable, sub-licensable, world-wide, royalty free, right and licence to edit, copy, transmit, publish, display, create derivative works of, reproduce, modify, distribute and otherwise use, modify or distribute your User Content in any manner, without compensation or notice. &nbsp;&nbsp;</p>
<p>You are solely responsible for the User Content, Dynata does not and cannot review all User Content and Dynata is not responsible for the User Content. Dynata reserves the right to delete, move or edit User Content, that is, in Dynata’s sole discretion, deemed to: (i) violate these Terms, (ii) violate copyright or trademark laws, or (iii) be abusive, defamatory, obscene or otherwise unacceptable.</p>
<p>&nbsp;</p>
<p>8.&nbsp;Rewards Programme.</p>
<p>1. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In connection with your use of the Services, you may have the opportunity to accumulate rewards, incentives, and entries into prize draws or sweepstakes. Information, official rules, and terms and conditions for rewards, incentives, and prize draws or sweepstakes may be available in these Terms, on the Website for a Panel, at the beginning or end of a survey, in survey invitations, on the website(s) or webpage(s) for redeeming rewards, incentives, and prizes, and/or may be described in any newsletter or other communication distributed or published by Dynata.&nbsp;<br>&nbsp;<br>2. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;All points posted to a Panel member’s account expire one (1) year following posting, unless the points are forfeited or cancelled earlier due to membership or account inactivity or as otherwise set forth in these Terms. &nbsp;Panel member accounts are not actual bank or financial accounts and do not accrue or accumulate interest of any kind.&nbsp;<br>3. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Points posted in connection with the Services do not constitute property of the Panel member, cannot be transferred during or after the Panel member’s life, by operation of law or otherwise, and have no value until presented by the Panel member for redemption in accordance with these Terms.<br><br>4. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In the event that any points or incentive have been erroneously posted to a Panel member’s account, Dynata may remove them from the Panel member’s account.<br><br>5. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Points will be deducted from the Panel member's account at the time the redemption request is made.<br><br>6. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;All redemptions are final and rewards may not be returned for credit except as otherwise provided in these Terms or as otherwise agreed to in writing by an authorized representative of Dynata. &nbsp;<br>&nbsp;<br>7. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;In order to redeem under Dynata’s reward program, the minimum threshold of 250 points must be satisfied. If you do not satisfy the foregoing threshold, you will not have a redemption option under Dynata’s rewards program. &nbsp;<br>&nbsp;<br>8. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dynata may modify, alter, delete or add new terms and conditions for its rewards program or the Services at any time without notice. For Dynata this includes, without limitation, modifying, altering, adding or deleting point values, redemption levels, conversion ratios, conditions for status, conditions for membership, and conditions for earning incentives or rewards, at any time without notice. In addition, Dynata may terminate or cease offering any incentive or reward in connection with Dynata’s rewards program, at any time without notice. &nbsp;<br>&nbsp;<br>9. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;You may not combine your points with points belonging to any other member, including, without limitation, any family member or friend.<br><br>10. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dynata make no representations or warranties of any kind, express or implied, regarding any product or service received in connection with Dynata’s rewards program, including, without limitation, any warranty of merchantability or fitness for a particular purpose. Dynata is not, and will not be, liable or &nbsp;responsible for the performance of, or for the failure of the performance of, any product or service for which points, incentives, or rewards are redeemed for. In addition, Dynata is not and will not be responsible or liable for any cost, damage, accident, delay, injury, loss, expense, or inconvenience that may arise in connection with the use of, or defect in, any product or service for which points, incentives, or rewards are redeemed for. &nbsp;Dynata will not replace any lost, stolen, misplaced, or damaged incentives or rewards.<br><br>11. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;YOU HEREBY EXPRESSLY ACKNOWLEDGE AND AGREE THAT THE POINTS, INCENTIVES, OR REWARDS EARNED THROUGH THE SERVICES MAY BE SUBJECT TO TAX, WHICH IS THE SOLE RESPONSIBILITY OF THE PANEL MEMBER. Dynata may provide you and/or the appropriate government agency or taxing authority with information related to any payments or incentives you earn in connection with your use of Dynata's services. You agree to provide Dynata with all required information to assist Dynata in complying with its reporting or withholding obligations. Dynata may withhold any tax from any incentive or reward as required by applicable law.<br><br>12. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Every month Dynata donates $10,000 to American Red Cross. This donation is separate to the incentives you receive for surveys, and does not come from your points balance. This does not constitute a donation on your behalf so is not tax deductible for you, and is not dependent on the number of surveys members participate in, but is one way Dynata is aiming to give back to the global community.<br><br>13. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dynata uses reasonable efforts to ensure that points are credited and debited appropriately; however, panelists should review their account to ensure that their account correctly identifies the posted points, incentives, or rewards, and reflects all of the appropriate redemption transactions. If you feel that your account was not credited or debited correctly or reflects incorrect redemption transactions, please send an email to helpdesk@opinionworld.co.nz. Any email sent to Dynata should include the panelist's name, email address and specific information on the subject matter. Dynata will use reasonable efforts to investigate the matter and to respond back to the panelist promptly. Dynata's decision is final and binding.&nbsp;<br>&nbsp;<br>14. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;The suppliers or providers of the products or services offered in connection with Dynata’s rewards program, and/or the owners or operators of the website(s)/webpage(s) on which redemption transactions occur, may have their own terms and conditions; please review these terms and conditions carefully.<br><br>15. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Personal information may have to be collected, processed, and/or disclosed in connection with Dynata’s rewards program and/or any request to redeem a reward or incentive. By agreeing to these Terms, you hereby agree to the collection, processing, and/or disclosure of your personal information for such purpose(s) and all such personal information shall be subject to the terms set forth in Dynata’s privacy policy.&nbsp;<br>&nbsp;<br>16. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;If a Panel member elects to donate points to one of the charities approved by Dynata, Dynata will donate said points to the selected charity. The donation is not made by or on behalf of Dynata and Dynata does not and will not match any donation. Please note that the donation option is not available on every panel owned and/or operated by or on behalf of Dynata, please check the redemption options available for the panel to which you belong.</p>
<p><a name="7"></a>&nbsp;</p>
<p>9.&nbsp;Profile Updates.</p>
<p>Panel members agree to promptly notify Dynata of any changes in or to information contained in their member profile. Panel members agree to review and update, as necessary, membership profiles no less frequently than once every six (6) months. A Panel member may update, correct and/or delete information contained in his or her membership profiles by: (i) accessing his or her Panel membership account; or (ii) sending an email to the appropriate Panel member services team for the appropriate Panel.</p>
<p><a name="8"></a>&nbsp;</p>
<p>10.&nbsp;Opt-Out Policy.</p>
<p>Panel members may opt-out from using the Services (including, without limitation, from receiving newsletters or communications), at any time, by: (i) following the unsubscribe procedures described on the applicable Website(s) or contained in any email received from Dynata; or (ii) by sending an email to the Panel member services team. Dynata shall use reasonable efforts to read and respond to each email request within a reasonable period of time after receipt. Upon termination, a Panel member’s contact information will be removed from any further communication or contact lists. Please allow a few days for the complete removal of contact information from Dynata’s communication or contact lists for the applicable Panel; during which period the member may receive communications which were created or compiled prior to termination. Please see&nbsp;<a href="https://opinionworld.co.nz/OpinionWorld-APAC/policies/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>&nbsp; for information on how Dynata handles information and data following an unsubscribe, termination or opt-out request (“&nbsp;Dynata’s Privacy Policy”).</p>
<p><a name="9"></a>&nbsp;</p>
<p>11.&nbsp;Links.</p>
<p>In connection with your use of the Services, you may be able to voluntarily link or connect to websites maintained and/or operated by third parties (“&nbsp;Third Party Websites”). Dynata does not endorse any Third Party Website nor any products, services and/or opportunities advertised, offered and/or sold by, through or in connection with any Third Party Website (“&nbsp;Third Party Information”). Dynata does not make any representations or warranties regarding the Third Party Websites and/or the Third Party Information. Please carefully review all policies and terms applicable to the Third Party Websites and the Third Party Information.&nbsp;</p>
<p><a name="10"></a>&nbsp;</p>
<p>12.&nbsp;Communications with Dynata.</p>
<p>All communications (excluding personal information) and User Content submitted or transmitted by You to Dynata, by electronic mail or otherwise, shall be treated as non-confidential and non-proprietary information, unless specifically indicated by You either prior to, or contemporaneously with, the submission or transmission of such communications and User Content. You agree that any such communications and User Content may be used by Dynata for any legal reason.&nbsp;&nbsp;</p>
<p><a name="11"></a>&nbsp;</p>
<p>13.&nbsp;Privacy.</p>
<p>Dynata takes your privacy very seriously. For information about Dynata’s privacy practices, please review&nbsp;<a href="https://opinionworld.co.nz/OpinionWorld-APAC/policies/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>.</p>
<p><a name="12"></a>&nbsp;</p>
<p>14.&nbsp;Disclaimer.</p>
<p>THE SERVICES, INCLUDING ALL INFORMATION, SURVEYS, CONTENT, MATERIAL, COMMENTARY AND SERVICES MADE AVAILABLE ON, OR THROUGH, THE SERVICES, ARE PROVIDED “AS IS”. Dynata DOES NOT MAKE ANY REPRESENTATIONS OR WARRANTIES OF ANY KIND WHATSOEVER IN CONNECTION WITH ANY INFORMATION, CONTENT, MATERIAL, COMMENTARY, SURVEYS, PRODUCTS OR SERVICES MADE AVAILABLE ON, OR THROUGH, THE SERVICES, INCLUDING, WITHOUT LIMITATION, ANY USER CONTENT. FURTHER, Dynata HEREBY DISCLAIMS ANY AND ALL WARRANTIES, WHETHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF NON-INFRINGEMENT, MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. Dynata DOES NOT WARRANT THAT THE TOOLS, TECHNOLOGY OR FUNCTIONS CONTAINED IN THE SERVICES OR ANY CONTENT, MATERIAL, COMMENTARY, INFORMATION AND/OR SERVICES CONTAINED THEREIN, WILL BE UNINTERRUPTED OR ERROR FREE, THAT DEFECTS WILL BE CORRECTED, THAT THE SYSTEMS OR THE SERVER(S) THAT SUPPORT THE SERVICES AND MAKE THE SERVICES AVAILABLE WILL BE CORRECTED, OR THAT THE SERVICES AND/OR THE SYSTEMS AND/OR THE SERVER(S) THAT SUPPORT THE SERVICES ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. Dynata DOES NOT PROVIDE ACCESS OR CONNECTION TO THE INTERNET AND IS NOT AND SHALL NOT BE RESPONSIBLE OR LIABLE FOR THE ACTIONS OR OMISSIONS OF THIRD PARTIES THAT INTERFERE WITH, LIMIT, RESTRICT OR PREVENT ACCESS OR CONNECTION TO, OR USE OF, THE SERVICES.</p>
<p><a name="13"></a>&nbsp;</p>
<p>15.&nbsp;Changes.</p>
<p>Dynata hereby reserves the right, in Dynata’s sole discretion, to make changes to these Terms. Dynata encourages you to review these Terms on an ongoing basis. Dynata will obtain your consent prior to changes that are of such nature that consent is needed or required. For changes that do not require consent, your continued use of, access to and/or participation in the Services does and will constitute your acceptance of these Terms as amended.&nbsp;</p>
<p><a name="14"></a>&nbsp;</p>
<p>16.&nbsp;Indemnification.</p>
<p>You agree to indemnify, defend and hold harmless Dynata and its parent, affiliated and subsidiary companies and its and their respective members, managers, shareholders, directors, officers, employees and agents from and against any and all claims, liabilities, losses, judgments, awards, fines, penalties and costs and/or expenses of any kind, including, without limitation, reasonable lawyers’ fees and court costs, arising out of, resulting from, or caused by, whether directly or indirectly,: (i) your breach or violation of these Terms; and/or (ii) your use of, participation in and/or access to the Services.&nbsp;</p>
<p><a name="15"></a>&nbsp;</p>
<p>17.&nbsp;Limitation of Liability.</p>
<p>EXCEPT TO THE EXTENT PROHIBITED BY APPLICABLE LAWS, YOU ACKNOWLEDGE AND AGREE THAT IN NO EVENT WILL Dynata BE LIABLE, OR OTHERWISE RESPONSIBLE, TO YOU FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL AND/OR PUNITIVE DAMAGES, FOR ANY REASON(S) OR FOR ANY CAUSE(S), REGARDLESS OF WHETHER Dynata IS INFORMED OF THE POSSIBILITY THE SUCH DAMAGES MAY EXIST.</p>
<p><a name="16"></a>&nbsp;</p>
<p>ANY CLAIM OR CAUSE OF ACTION ARISING OUT OF OR RELATED TO USE OF THE SERVICES AND/OR THESE TERMS MUST BE FILED WITHIN ONE (1) YEAR AFTER SUCH CLAIM OR CAUSE OF ACTION AROSE.</p>
<p>&nbsp;</p>
<p>18.&nbsp;Compliance with Applicable Laws.</p>
<p>You acknowledge and agree that you will comply with all applicable international, national, Federal, state and/or local laws, codes, regulations, rules and/or requirements (“&nbsp;Applicable Laws”) regarding your use of, participation, in and/or access to the Services.</p>
<p><a name="17"></a>&nbsp;</p>
<p>19.&nbsp;Suspension; Termination; De-Activation of Panel Membership Accounts.</p>
<p>Either party may terminate your membership with a Panel at any time, with or without cause, for any reason or no reason, and without liability for the termination.&nbsp;<br><br>In addition to any and all other available remedies, Dynata may, without notice, suspend and/or terminate your use of, access to, and/or participation in the Services if you are in breach or violation of these Terms. If Dynata terminates your membership due to your breach or violation of these Terms: (i) you forfeit all rights, title, and interest in and/or to all unredeemed rewards, incentives, and/or prizes, effective immediately upon termination; (ii) your membership will immediately be canceled; and (iii) your access to, participation in, and use of the Services (including, without limitation, the participation in survey projects) will immediately cease.&nbsp;<br>In the event that a non-Panel member breaches or otherwise violates these Terms, such non-Panel member hereby agrees that: (a) all rights, title, and interest in and/or to all unredeemed rewards, incentives, and/or prizes (if any), will be forfeit effective immediately upon termination; and (b) access to, use of, and participation in the Services will immediately cease.&nbsp;<br><br>In addition, Dynata reserves the right to de-activate your Panel membership account: (a) if your membership account does not remain Active (as defined herein); (b) if Dynata receives a hard bounce or delivery failure notice in regards to email communications sent by Dynata to your email account; or (c) if Dynata receives a “mailbox full” reply notice three (3) times in regards to email communications sent by Dynata to your email account. For the purpose of these Terms, “Active” means that you: (i) participate in a survey, at least, once every six (6) months; or (ii) update your profile or member information, at least, once every six (6) months.<br><br>In the event of deactivation, termination by you, or termination by Dynata (other than for your breach or violation of these Terms), Dynata shall maintain a record of the posted, unredeemed rewards, incentives, and/or prizes and shall allow you to redeem such rewards, incentives, and/or prizes for a period of thirty (30) days following the effective date of the termination or deactivation of your account.</p>
<div>&nbsp;</div>
<p>20.&nbsp;Dynata Employees.</p>
<p>A. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Restriction. Dynata employees and their Immediate Family Member(s) (as defined herein) are not eligible to receive any payments, prizes or incentives for using, participating in, or accessing the Services. For the purpose of this Section 20, the term “&nbsp;Immediate Family Member(s)” includes parents, spouses, children or significant others (i.e. girlfriends/boyfriends, domestic partners and spousal equivalents).</p>
<p>B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Procedures. Dynata’s employees may use, access or participate in the Services, only after receiving written permission from their respective manager, and only for the sole purpose of improving Dynata’s products and/or services. Dynata’s employees must always be honest and report accurate information in connection with using, accessing or participating in the Services. If altered, false or untrue information or data must be used, prior consent and approval must be received from Dynata’s Chief Executive Officer.</p>
<p>C.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Improper Conduct. Unless authorised pursuant to these Terms or otherwise approved in writing by Dynata’s Chief Executive Officer, the violation of the terms of this Section 20 by an Dynata employee and/or its Immediate Family Member(s) is a violation of Dynata’s standards of conduct and any such violation may subject the employee to discipline, including, without limitation, termination of employment.</p>
<p><a name="19"></a>&nbsp;</p>
<p>21.&nbsp;Notices.</p>
<p>A.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Notice From You to Dynata. Except as otherwise set forth herein, or as required by Applicable Laws, all notices to be sent or provided to Dynata should: (i) be correctly addressed to the applicable business address, and shall be sufficiently delivered if delivered: (a) by Federal Express, Express Mail or other nationally or internationally recognised overnight courier service (in which case notice shall be effective one (1) business day following dispatch); or (b) by certified mail, return receipt requested, postage prepaid (in which case notice shall be effective six (6) days following deposit in mail); or (ii) be sent via email to the appropriate member services team for the appropriate Panel.</p>
<p>B.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Notice From Dynata to You. Except as otherwise required by Applicable Laws, you agree that Dynata may provide &nbsp;notices to you: (i) via the email address provided by you to Dynata (in which case notice shall be effective one (1) day following the date the email was sent, provided that Dynata did not receive an error message stating that delivery of the email was delayed, that the email address was invalid, or that the email otherwise could not be delivered); (ii) by certified mail, return receipt requested, postage prepaid addressed to the address provided by you to Dynata (in which case notice shall be effective six (6) days following deposit in mail); or (iii) by posting notices on the applicable Website(s). You agree to check the applicable Website(s) frequently for notices and to keep your personal information up-to-date.</p>
<p>C.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Legal Notice. All questions regarding these Terms and all legal notices should be sent, in accordance with Section 21.A. of these Terms, to:</p>
<p>&nbsp;</p>
<p>Dynata, LLC</p>
<p>6 Research Drive</p>
<p>Shelton, Connecticut 06484, USA.</p>
<p>Attn: Legal Department</p>
<p>&nbsp;</p>
<p>or via email to:&nbsp;<a href="mailto:privacy@dynata.com">privacy@dynata.com</a></p>
<p><a name="20"></a>&nbsp;</p>
<p>22.&nbsp;Severability.</p>
<p>If any term or provision of these Terms shall be held or declared to be invalid or unenforceable for any reason by any court of competent jurisdiction, such term or provision shall be deemed null and void and shall not affect the application and/or interpretation of these Terms. The remaining terms or provisions of these Terms shall continue in full force and effect, as if the invalid or unenforceable term or provision was not a part of these Terms.</p>
<p><a name="21"></a>&nbsp;</p>
<p>23.&nbsp;Governing Laws; Jurisdiction and Venue.</p>
<p>These Terms and your access to, use of, or participation in the Services shall be governed by and construed in accordance with the laws of the state of Connecticut, USA, without regard to any portion of any choice of law principles (whether those of Connecticut or any other jurisdiction) that might provide for application of a different jurisdiction’s laws. All claims or disputes arising in connection with these Terms and/or your access to, use of or participation in the Services, shall be subject to the exclusive jurisdiction of the state or Federal courts located in Fairfield County, Connecticut, USA.</p>
<p><a name="22"></a>&nbsp;</p>
<p>24.&nbsp;Miscellaneous Terms.</p>
<p>The headings contained in these Terms are for reference only and shall have no effect on the interpretation and/or application of these Terms. Dynata’s failure to enforce a breach by you of these Terms shall not waive or release you from such breach and shall not waive, release or prevent Dynata from enforcing any subsequent breach by you of these Terms. These Terms, any rules, terms or policies referenced herein or incorporated herein, and any Panel specific requirements, represent the entire understanding and agreement between Dynata and you with respect to the subject matter hereof.</p>
<p>&nbsp;</p>
<p>Last Updated: 13-09-2019</p>
<p>&nbsp;</p>
							</div>
							<div class="policy">
								<p>Dynata [Opinion Outpost, SurveySpot, QuickThoughts, OpinionWorld, Centro De Opinion, ProOpinion, It Influencers, iPoll, Opinion Miles Club, Miles for Thoughts, Save With Surveys, Survey Points Club, Que Crees, Points for Surveys, Opinion Rewards Panel, Opinions Take Flight, Opinion Check In, Club Opinions, Your Voice, Smile City, MyOpinions] Privacy Policy for Residents of Every Country Except EU Countries and Mexico</p>
<p>First Effective: August 15, 2013</p>
<p>This Version: Effective September 13, 2019</p>
<p>The following sets forth the privacy policy for the Dynata, LLC (f/k/a Survey Sampling International, LLC) online panel communities, the Dynata, LLC panel websites and/or the Dynata, LLC mobile applications (collectively “Application/Services”) offered by Dynata, LLC and its parent, subsidiary and affiliated companies (collectively “Dynata”).&nbsp;</p>
<p>This Privacy Policy sets forth the collection, use and disclosure of personal data or personally identifiable information (“PII”) and other information by Dynata in connection with Dynata’s Services as defined herein and other Dynata and third party activities as defined herein (“Non-Research Activities”).&nbsp; Dynata’s Services provide you with the opportunity to join a panel, participate in surveys administered by Dynata or by third parties (whether as a panel member or a non-panel member), use the websites associated with the panels, use the Application/Services associated with the panels, and receive and redeem rewards and incentives, including, without limitation, sweepstakes entries, offered in connection with panel membership and/or the completion of surveys (collectively “Services”). Non-Research Activities include, but are not limited to, Dynata marketing Dynata Services and/or third parties marketing their services to you and/or sharing individual and/or aggregate profile data with third parties to develop marketing insights and/or audience/look alike models.&nbsp; Non-Research Activities are described in more detail in this Privacy Policy.&nbsp;</p>
<p>Your use of Dynata’s Application/Services is completely voluntary and therefore Dynata’s processing of your PII in connection with the Application/Services and Non-Research Activities and this Privacy Policy is with your consent.</p>
<p>Surveys administered by third parties and the data collected in connection therewith are not subject to this Privacy Policy. Registration with, use of, and access to Dynata’s Services is subject to&nbsp;<a href="https://www.opinionworld.co.nz/en-nz/policies/terms/general">Dynata’s Terms and Conditions</a>. &nbsp; In most cases Dynata is not the sponsor of the survey and the survey instrument, and the survey results or survey data, are and will be owned by the sponsor of the survey. &nbsp;</p>
<p>All references in this Privacy Policy to “Dynata” include Dynata and its parent, subsidiary and affiliated companies. All references to “us” or “we” refer to Dynata.&nbsp; All PII is stored on servers located in the United States, where Dynata’s servers are located and accessible globally to Dynata employees and/or agents. &nbsp;For purposes of this policy, respondent shall mean any individual who participates in Dynata Services, including passive data collection and/or participates in the Non-Research Activities described herein.&nbsp; For purposes of this policy, online shall include mobile web browsing,</p>
<p>&nbsp;</p>
<p>What personal data and other information does the Application/Services collect and how is it used?</p>
<p>Dynata collects personally identifiable information (“PII”) from research participants during and after registration with a panel, including, without limitation, during participation in a survey and in connection with the receipt and redemption of rewards and incentives and/or during the Application/Services registration and download process. You will be asked to provide certain PII and demographic information, including, without limitation, your name, address(es), telephone number(s) (including home, cell, and/or business telephone numbers), email address(es), date of birth, and occupation/education, the unique panelist/respondent identification number we assign to you when you sign up for an account (individually a "UID" and collectively "UIDs"), and racial and gender information. In addition to the collection of PII mentioned above, during and subsequent to the registration process, you may be asked to voluntarily provide or disclose Sensitive Data.&nbsp;“Sensitive Data”&nbsp;means PII that discloses or reveals health and medical conditions, sexual orientation or sexual life, political opinions/views, race/ethnic origin, religious and philosophical beliefs and trade-union membership. Sensitive Data is used to target survey opportunities to you and as otherwise set forth in this Privacy Policy.&nbsp;</p>
<p>Dynata collects PII and demographic information from non-panel members prior to and during participation in a survey.</p>
<p>Dynata provides its clients and/or its advertising partners with information about your device, including but not limited to, the device’s IDFA or Advertising ID and interactions with the Application/Services with your consent. Dynata, the clients and/or ad partners may use this information to facilitate Dynata surveys, for marketing of Dynata products and services to you, for unrelated interest-based advertising, to link your device to additional data about you and/or your device available from third party data management platforms and/or to validate certain information you provide about yourself and/or your device.&nbsp;<a href="https://info.evidon.com/pub_info/1470" target="_blank" rel="noopener noreferrer">Click here</a>&nbsp;to learn more about some of our ad partners, including how to subsequently opt-out.</p>
<p>Additional information you submit.</p>
<p>You may submit, upload or transmit content or material, including, without limitation, photos, videos, and/or any other similar or related content or material which may include your PII ("User Content"), for example, when completing surveys. PII included in User Content shall be collected, used and disclosed as set forth in this Privacy Policy.&nbsp; User Content should not include audio, video, images, or the likeness of anyone other than you.</p>
<p>Information collected through automated means:</p>
<p>The Application/Services also collect certain information automatically, such as information about your device and device capabilities, including, without limitation, the device operating system, the other applications on your device, IP address, device network provider, device type, time zone, network status, browser type, browser identifier, unique device identification number (such as identifiers for analytics or advertising), network provider user ID (a number uniquely allocated to you by your network provider), Media Access Control (MAC) address, International Mobile Equipment Identity, location and other information that alone or in combination may be used to uniquely identify your device. Specific examples of this data and the technology that collects it are below:</p>
<p>Geo-location data. The Application/Services will request your permission to obtain geo-location information from your mobile device, and such geo-location information may be provided by the Application/Services at any time, whether the Application/Services is open or not. If you consent to sharing your geo-location data, in addition to the uses set forth under “Dynata’s use of information”&nbsp; below, Dynata will also use your location information to offer you the option to participate in location-based surveys and market research and/or to share such geolocation data with third party clients to demonstrate certain location and/or traffic patterns of Application/Services participants. In addition, Dynata may share your geo-location data with third party vendors to generate surveys for market research and for other research from aggregated location patterns. Please visit this&nbsp;<a href="https://sense360.com/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a>&nbsp;for a description of how our partner uses the geo-location data.</p>
<p>Geo-location data also may be used by ad networks to provide you with location-based advertising. The ad networks' use of data, and how to opt out, are described in more detail below.</p>
<p>If you no longer wish to share your geo-location data through your device, please change the privacy settings in your device for the Application/Services.</p>
<p>Application/Services and functionality. Dynata may request access to certain applications and/or functionality available on or through your device for use in connection with the Application/Services and the Services. Access shall be requested via push notification or other alerts and access will only be granted with your consent. If you consent, you may subsequently opt-out by changing your settings on the device.</p>
<p>Social media information. You may also be offered the opportunity to access the Application/Services through third party social media platforms. If you select such option, Dynata may collect certain profile information stored in your social media platform account.</p>
<p>Cookies and Similar Technology. Cookies are small files that store certain data on a device. Session cookies expire when you close your browser. Persistent cookies remain on your device until deleted or once they reach a defined expiration date. You may set your browser to notify you when you receive a cookie.</p>
<p>First party and third party cookies and other similar or related technology and device identifiers (e.g., IDFAs, AAIDs, etc.) may be placed, written, set, and/or read for several purposes including, without limitation, to provide a better survey experience, quality control, validation, to enable or facilitate survey participation, tracking of completed surveys or other completed actions, for fraud detection and/or prevention, online ad effectiveness research, website tracking and audience measurement, to develop audience insights and/or look-alike models in connection with marketing campaigns, and for the purpose of targeting advertisements and other content to individuals, subject to your consent where required by applicable law. However, for certain cookies and/or similar or related technology, if you decide not to accept cookies, you will not be able to use the Application/Services.</p>
<p>For more information on the types of cookies we use, the purposes for which we use information collected via cookies, please see our&nbsp;<a href="https://info.evidon.com/pub_info/1470" target="_blank" rel="noopener noreferrer">Cookie Consent Tool</a>.</p>
<p>Log Files&nbsp;. The Application/Services may automatically gather and store certain information, including, without limitation, data available from your web browser, including, without limitation, IP Address, browser type, internet service provider, referring/exiting pages, operating system, date/time stamp, and click stream data in log files.</p>
<p>Digital Fingerprinting. Generally, digital fingerprinting assigns a unique identifier to your device based upon the device's technical settings, characteristics, and IP Address. Dynata uses digital fingerprinting technology for quality control and validation purposes and fraud detection and/or prevention, including, without limitation, identifying duplicate or fraudulent respondents. Dynata may implement and use digital fingerprinting directly or through a third party vendor with your consent where required by applicable law.</p>
<p>Watermarking. Generally, watermarking involves placing a technology or file on your device to identify that it has previously been used to register with or access the Application/Services or the Services. Watermarking is used for quality control and validation purposes and fraud detection and/or prevention purposes. Dynata may engage in watermarking activities directly or through a third party vendor with your consent where required by applicable law.</p>
<p>In some cases, we may use information collected through automated means, along with other information, to recognize users (or households) across platforms or across devices, such as smartphones, computers, tablets or related browsers, for the purposes described in this Privacy Policy.</p>
<p>Information collected from third parties</p>
<p>Dynata may obtain PII, behavioral and/or demographic information from third parties, including, without limitation, data management platforms, ad networks, information service bureaus, other sample suppliers and/or social media platforms.&nbsp; Dynata may use the PII, behavioral and/or demographic data received from these third parties for various purposes, including, without limitation, data validation, data append, developing marketing insights, fraud detection purposes, and/or sending you a one-time email to invite you to participate in a survey and/or join a Panel.&nbsp; In addition, geolocation data, including information regarding retail and other commercial enterprises you may visit while the geolocation feature is enabled, may be appended to your panel profile and/or shared with Dynata’s clients if you elected to opt in to the geolocation services.&nbsp; &nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>How does Dynata use the information it collects?</p>
<p>Dynata's use of information:</p>
<p>In addition to the purposes described above, Dynata uses personal data collected through the Application/Services as follows: (i) to communicate with you regarding your membership with a survey panel(s) owned by Dynata; (ii) to communicate with you regarding your participation in a survey(s); (iii) to tailor survey opportunities to you and to arrange for advertisements to be displayed to you outside the Application/Services for the purposes of facilitating the completion of advertisement recall surveys; (iv) to send you notifications of survey opportunities; (v) to comply with any and all legal obligations, including, without limitation, tax obligations; (vi) to administer and manage Dynata's reward and incentive programs and fulfill your requests for rewards and incentives; (vii) to facilitate your entry into Dynata's sweepstakes and promotions and communicate with you regarding such entries; (viii) to update Dynata's records; (ix) to comply with any data suppression obligations or requirements; (x) for fraud detection and/or prevention purposes; (xi) to link your device and/or profile to additional information available about you and/or your device available from data management platforms (“DMP”); (xii) to market Dynata products/services to you; (xiii) to enable third parties to market their products/services to you; (xiv) to enable Dynata or third parties to develop marketing insights and/or audience/look alike models; (xv) to validate the profile information you provided to us; and/or (xvi) as otherwise permitted pursuant to this Policy or as otherwise authorized by you.&nbsp; Dynata may use information collected in the context of the Application/Services in connection with other survey panels that Dynata administers and/or in connection with Non-Research Activities.&nbsp; With respect to the linking of Application/Services data to third party DMP data, Dynata uses such data itself and/or permits Dynata’s clients and/or the DMP itself to use such data to provide you with survey opportunities, to measure advertising effectiveness (as described in more detail below), to segment audiences; to design advertising campaigns using “look alike” cohort groups based on survey and third party data; and/or to market such third party’s products/services to you.&nbsp;</p>
<p>Retargeting.&nbsp; Dynata may from time-to-time engage a third party or third parties to either display advertising on an Dynata website(s) or to manage Dynata’s advertising on other websites (for example on social media sites). Dynata’s third party partner(s) may use technologies such as cookies or identifying data elements. Including but not limited to your IDFA or Advertising ID to gather information about your activities on Dynata’s website(s) and/or on other websites in order to: (i) provide you with advertising about Dynata and its services and/or (ii) assist Dynata in developing marketing and advertising campaigns designed to target individuals who have a social and demographic profile similar to your social and demographic profile. If Dynata is conducting a re-targeting program and you wish to not participate in this re-targeting program, please opt-out via the applicable cookie opt-out process set forth in this Privacy Policy or in Dynata’s separate cookie notice, by modifying your IDFA or Advertising ID and/or by unsubscribing within the advertisement itself.</p>
<p>Audience Insights/Look-alikes.&nbsp; Dynata and/or third parties may use PII collected from you and/or may link PII collected from you to a third party cookie to develop audience insights and/or look-alike models in connection with marketing campaigns.&nbsp;</p>
<p>Online Advertising Effectiveness.&nbsp; In connection with Dynata’s online ad effectiveness program, you can participate in surveys regarding ads, promotions, content, campaigns, and/or websites that Dynata is testing for its clients. To facilitate the completion of these surveys, Dynata’s clients may write, set, or read cookies, locally shared/stored objects, flash cookies and/or any other related technology (each a “Third Party Technology” and collectively the “Third Party Technologies”). The Third Party Technologies may be written, set or read in various locations, including, without limitation, Dynata’s servers or systems. If you participate, your UID will be stored in or associated with the Third Party Technology to allow you to be re-contacted about the online ad or promotion and Dynata’s client will use the Third Party Technology to determine whether you have seen, clicked on, or otherwise interacted with the online ad or promotion. If you have interacted with the online ad or promotion, Dynata’s client will send your UID and the specific survey to Dynata and Dynata will provide you with the opportunity to complete the survey.</p>
<p>Audience Measurement Data. In addition to the use and sharing of Audience Measurement Data (as defined below) in connection with online advertising effectiveness research, as such research is described above, Dynata may share your UID and data previously collected by Dynata, including, without limitation, age, gender, income, number of people in your household, education/education level, and employment status, (“Audience Measurement Data”), to third parties, including, without limitation, Dynata’s subcontractors, partners, and/or clients for the purpose of audience measurement reporting on the content, advertisements, campaigns, and websites that you visit, view, and/or click on. The Audience Measurement Data will be used in connection with online advertising effectiveness research, and to assist in the creation, development, and implementation of websites, online advertisements, and other Internet and digital media features, functionality, and campaigns. Audience Measurement Data may be shared in a single summary form (i.e. individual respondent level) or aggregate summary form (i.e. group of respondents).</p>
<p>&nbsp;</p>
<p>How do advertisers/ad networks use my information?</p>
<p>Ad partners' use of information.</p>
<p>You can use the Application/Services to participate in surveys, including, without limitation, surveys regarding specific ads and promotions that Dynata is testing for its business clients. You may see these ads or promotions in several places, including, without limitation, in non-Dynata mobile apps (for example, in a gaming app), after which Dynata shall provide you with access to, or contact you to complete, a survey about the ad or promotion that you were exposed to. To facilitate the completion of surveys on ads or promotions, Dynata has partnered with ad companies that provide, measure or facilitate advertisements, including, without limitation, in many other mobile apps. The Application/Services provides these ad networks with the UID, your unique device identifier, and many or all of the other types of information described in the "Information collected through automated means" section above (including your ongoing geolocation, if your device permits the collection of geolocation). Then, when you use a mobile app that has partnered with one of the ad companies, the ad company can use your unique device identifier or other automatically collected information to recognize your device. The ad company may then show you an ad or promotion that Dynata is testing for one of our business clients. The ad company may then inform Dynata that the device associated with your UID has just received an ad or promotion, which allows Dynata to provide you with access to, or to contact you to complete, a survey regarding the ad or promotion. With your consent, the ad companies also use the information they collect about your device and your interactions with the Application/Services and other mobile apps to provide you with other in-app advertising that has been tailored to your interests and for other purposes. To learn more about some of these ad companies, including how to opt out, please visit the following:</p>
<p><a href="https://www.voicefive.com/preferences.aspx">http://www.voicefive.com/preferences.aspx</a></p>
<p><a href="https://www.insightexpressai.com/adserver/optout.aspx">https://www.insightexpressai.com/adserver/optout.aspx</a></p>
<p><a href="http://n01d01.cumulus-cloud.com/ssi/optout.php">http://n01d01.cumulus-cloud.com/ssi/optout.php</a></p>
<p><a href="http://www.nielsen-online.com/corp.jsp?section=leg_prs&amp;nav=1">http://www.nielsen-online.com/corp.jsp?section=leg_prs&amp;nav=1</a></p>
<p>&nbsp;</p>
<p>What communications will I receive through the Application/Services or relating to the Services?</p>
<p>Dynata may contact you to participate in surveys via "push" notifications or SMS/text messages if you expressly agree to receive such communications.</p>
<p>In addition, Dynata and/or its agents or vendors on behalf of Dynata will send email communications to you regarding survey invitations, survey participation, reward or incentive information, inquiries and redemption, newsletters, notices required to be provided hereunder or by law, sweepstakes or promotion entries, notice of winning a sweepstakes or promotion, and in response to inquiries from you.</p>
<p>Where you provide Dynata with your telephone number(s), Dynata, its clients and/or its Subcontractors may also contact you by telephone in relation to your account, including, without limitation: (i) surveys you have or are participating in; (ii) reward or incentive information, inquiries and redemption; (iii) sweepstakes or promotion entries and prize fulfillment; (iv) responding to your queries; (v) notices under this Privacy Policy; (v) additional survey invitations and/or opportunities; and/or (vi) to validate profile information you have provided to us.&nbsp; &nbsp;</p>
<p>&nbsp;</p>
<p>Does Dynata share personal data and other information collected through the Application/Services with third parties?</p>
<p>Pursuant to applicable law, Dynata may disclose or transfer personal data and other information collected through the Application/Services to third parties as follows:</p>
<p>(i) With your consent;</p>
<p>(ii) In response to a subpoena or an order of a court or government agency;</p>
<p>(iii) To establish, exercise, or defend legal claims of an individual or Dynata, including in order to protect the safety of an individual or to protect Dynata's rights and/or property;</p>
<p>(iv) Between various Dynata panels, if you sign up for more than one Dynata panel;</p>
<p>(v) To a parent, subsidiary, or affiliate of Dynata: (1) in the event of a reorganization or restructuring; or (2) for use and processing in accordance with this Policy or as authorized by you;</p>
<p>(vi) To authorized agents and/or subcontractors of Dynata and/or of Dynata's clients, who are providing services, including, without limitation, data append services, data validation services, fraud detection and/or prevention services, database matching services, coding services, and reward, incentive, and sweepstakes related services. In connection with the sharing of personal data and other information with subcontractors as set forth in (vi) above, such subcontractors may use such data to improve or enhance their services, in which event they are acting as data controllers or data owners and not as subcontractors engaged by Dynata. For a list of the subcontractors acting as data controllers or data owners of your data and their privacy policies, please&nbsp;<a href="https://www.rnssiprivacy.com/data-controllers/" target="_blank" rel="noopener noreferrer">click here</a>.</p>
<p>(vii) To a client for limited market research related uses including, without limitation, modeling, validation, data append, database segmentation, and reward, incentive, or sweepstakes redemption, fulfillment, and/or entry;</p>
<p>(viii) In connection with a change of ownership or control, including, without limitation, a merger or an acquisition of any or all of Dynata's business assets, provided that the party receiving or acquiring the personal data agrees to use, protect, and maintain the security, integrity, and confidentiality of personal data in accordance with this Policy;</p>
<p>(ix) to a client or to such client’s customer in the event Dynata or a third party believes that you have or may violate the intellectual property rights of a third party;</p>
<p>(x) to a client or to such client’s customer in the event Dynata or a third party believes that you have violated the Terms of Service;</p>
<p>(xi) to a third party, which shall include both Dynata research clients and third parties that engage in Non-Research Activities to enable such third party to develop marketing campaigns, audience insights, look-alike models and/or to market such third party’s products/services to you; and</p>
<p>(xi) As otherwise permitted pursuant to this Policy.</p>
<p>Please note, Dynata may allow a client to collect PII directly from respondents. The disclosure is voluntary and, prior to collection, the client is required to enter into a written agreement with Dynata, which, among other things, limits use of the PII.&nbsp;</p>
<p>Dynata may license certain PII to third parties (e.g., data brokers, data aggregators, etc.) for their own Non-Research Purposes, including, without limitation, the licensing of individual-level and/or aggregated-level data (e.g., product and/or service purchasing or usage activity, social media activity, website visitation data, internet search history, etc.) for the development of audience insights and/or look-alike models, for the purpose of sale of such data to the third party’s clients/customers for the purpose of performing analytics and providing marketing intelligence and/or to enable such third party to market its products/services to you.</p>
<p>Additionally, UIDs and information collected by automated means are provided to third parties, including, without limitation, clients, partners, agents and/or vendor for the purposes of identifying respondents for re-contact surveys or communications, fraud detection and/or prevention, database matching, data validation, data append, coding, data segmentation, and reward, incentive, and/or sweepstakes or promotion related services.</p>
<p>In connection with your survey data, Dynata or the client may associate certain demographic attributes to you.&nbsp; Dynata may share with third parties, including but not limited to clients, the geographic and/or demographic data Dynata collects from you during enrolment or through certain profile questions Dynata may ask you. Such data may be shared with third parties on an individual respondent level or aggregate summary form (i.e. a group of respondents). If you voluntarily disclose personal data in connection with your survey data and responses, and Dynata collects the survey data and responses, Dynata will transfer the survey data and responses, UID and the voluntarily disclosed personal data to the relevant Dynata client.</p>
<p>&nbsp;</p>
<p>How can I opt-out of certain data collection and/or use?</p>
<p>There are multiple opt-out options for users of this Application/Services.</p>
<p>You can stop all collection of personal data and other information by the Application/Services by uninstalling the Application/Services and/or terminating your participation in the panel(s). You may use the standard uninstall processes available as part of your mobile device or via the mobile application marketplace or network and/or you may cancel your panelist account on the panel Site.&nbsp; Please note that if you delete the Application/Services, but maintain a profile with one of Dynata's websites, we may still collect personal data and other data from you through our site(s). Uninstalling the Application/Services will not delete all information collected by Dynata prior to uninstalling the Application/Services. To delete all information collected by Dynata please contact Dynata as set forth below.</p>
<p>Six months following termination of your account, inactivity of your account and/or the date upon which you uninstall the Application/Services, Dynata may transfer your PII to a third party data broker and/or data management platform for purposes of resale/reuse by such third party.&nbsp;</p>
<p>If you do not wish for your PII to be used for Non-Research Activities and/or if you do not consent to Dynata sharing your PII with third parties after termination of your account and/or removal of the Application/Services from your device, please contact us at privacy@dynata.com</p>
<p>&nbsp;</p>
<p>For iOS Opt-out of location data</p>
<p>You may, at any time, opt-out from enabling the Application/Services to access your location data by:</p>
<ul>
<li>Touching or selecting the settings icon for the device;</li>
<li>Once in the settings icon, touch or select Location Services; and</li>
<li>Once in Location Services, you can use the individual slider for the Application/Services, to turn off location services.</li>
</ul>
<p>Note: If you turn off Location Services, you will be prompted to turn on Location Services the next time the Application/Services tries to use this feature.</p>
<p>&nbsp;</p>
<p>For Android Opt out of location data</p>
<p>You may, at any time, opt-out from enabling the Application/Services to access your location data by:</p>
<ul>
<li>Touching the ABOUT button on the top right of the navigation bar</li>
<li>Once in the ABOUT dialog, you can toggle on/off Location Services via a switch labeled: "Access to my location"</li>
</ul>
<p>&nbsp;</p>
<p>For iOS Opt-out of push notifications</p>
<p>You may opt-out of push notifications for the Application/Services by:</p>
<ul>
<li>Touching or selecting the settings icon for the device;</li>
<li>Once in the settings icon, touch or select notifications;</li>
<li>If push notifications are turned on, there will be a list of icons, touch or select the icon for the Application/Services; and</li>
<li>From this screen, you will be able to modify the push notification settings for the Application/Services.</li>
</ul>
<p>&nbsp;</p>
<p>For Android Opt-out of push notifications</p>
<ul>
<li>You may opt-out of push notifications for the Application/Services by:</li>
<li>Access the Settings for the device.</li>
<li>From within Settings, locate the Apps setting.</li>
<li>Once in Apps, locate the relevant application (QuickThoughts or iPoll), and select it.</li>
<li>Locate a checkbox labeled "Show notifications" and toggle it based on your preference.</li>
</ul>
<p>&nbsp;</p>
<p>Opt-out of email communications</p>
<p>You may opt-out of email communications by clicking the unsubscribe link in any email you receive from us or contacting us as set forth below.</p>
<p>&nbsp;</p>
<p>Opt-out of sharing social media platform profile data</p>
<p>You may opt-out of sharing social media platform profile data by changing your preference/profile settings with the social media platform regarding the sharing of data with third parties or removing the Application/Services from your social media profile.</p>
<p>&nbsp;</p>
<p>Opt out of use of the advertising identifier assigned to your smartphone/device</p>
<p>You may change the advertising identifier assigned to your device at any time.&nbsp;</p>
<p>&nbsp;</p>
<p>Ad network opt-out</p>
<p>The ad networks that collect information through the Application/Services for use in facilitating surveys and providing interest-based advertising offer certain opt-out mechanisms. To opt-out, follow the instructions for each ad network at the links provided below. If you opt-out, you will not be able to participate in our surveys about ads and promotions.</p>
<table>
<tbody>
<tr>
<td width="126">
<p>Ad network</p>
</td>
<td width="341">
<p>Opt-out information</p>
</td>
</tr>
<tr>
<td width="126">
<p>Admob by Google</p>
</td>
<td width="341">
<p><a href="https://www.google.com/ads/preferences/html/mobile-about.html">http://www.google.com/ads/preferences/html/mobile-about.html</a></p>
</td>
</tr>
<tr>
<td width="126">
<p>Flurry</p>
</td>
<td width="341">
<p><a href="https://policies.oath.com/us/en/oath/privacy/controls/index.html">https://policies.oath.com/us/en/oath/privacy/controls/index.html</a></p>
</td>
</tr>
<tr>
<td width="126">
<p>InMobi</p>
</td>
<td width="341">
<p><a href="http://www.inmobi.com/inmobi-privacy-policy/opt-out/">http://www.inmobi.com/inmobi-privacy-policy/opt-out/</a></p>
</td>
</tr>
<tr>
<td width="126">
<p>Millennial Media</p>
</td>
<td width="341">
<p><a href="https://policies.oath.com/us/en/oath/privacy/controls/index.html">https://policies.oath.com/us/en/oath/privacy/controls/index.html</a></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>Can I stop Dynata from tracking my online activities?</p>
<p>Do Not Track (“DNT”) is a preference in your browser that you can set to notify websites that you visit that you do not want the websites to collect certain information about you. Dynata does not respond to DNT signals. If you object to Dynata’s practice with regards to DNT signals, you may opt-out from participation or use of Dynata’s services as described below.</p>
<p>In connection with Dynata’s online ad effectiveness program, Dynata permits Dynata’s subcontractors, partners and/or clients to drop, set, and/or write Third Party Technologies for the purpose of facilitating audience measurement and ad recall survey activities. Dynata is not responsible for any third party’s compliance with or response to DNT signals. To learn more about Dynata’s online ad effectiveness program, please review the Cookies section of this Privacy Policy. &nbsp;</p>
<p>&nbsp;</p>
<p>How long do you keep my personal data and other information?</p>
<p>Dynata will retain personal data and other information relating to your use of the Application/Services and/or the Services for as long as you have the Application installed and/or use the Application/Services and for up to one (1) year thereafter or such other period as may be required or permissible by law.&nbsp; Six months following your inactivity with the panel Sites and/or uninstalling the Application/Services, Dynata may transfer your PII to a third party data broker and/or data management platform for purposes of resale/reuse by such third party.&nbsp;</p>
<p>&nbsp;</p>
<p>How can I access the personal data and other information the Application/Services has collected</p>
<p>about me?</p>
<p>You have the right to review, correct, and delete your personal data, subject to applicable law. You may contact us with such a request using the contact details provided below.</p>
<p>&nbsp;</p>
<p>Does the Application/Services collect data from minors under sixteen (16) years of age?</p>
<p>The Application/Services is not designed for, or intended for use by, any individual under the age of sixteen (16). We do not knowingly collect personal data from children under the age of sixteen (16), and if we became aware that we have inadvertently collected personal data from a child under the age of sixteen (16), we will undertake reasonable commercial efforts to delete such personal data.</p>
<p>&nbsp;</p>
<p>What security is available for the personal data and other information collected through the Application/Services?</p>
<p>Dynata maintains an appropriate level of technical, administrative, and physical safeguards to protect personal data and other information disclosed or collected by Dynata. Dynata reviews, monitors, and evaluates its privacy practices and protection systems on a regular basis. Despite the safeguards we implement, transmissions over the Internet and/or a mobile network are not totally secure and Dynata does not guarantee the security of online transmissions. Dynata is not responsible for any errors by individuals in submitting personal data to Dynata.</p>
<p>&nbsp;</p>
<p>Who can I contact with questions about this Policy?</p>
<p>If you wish to:</p>
<p>- receive a copy of the information we hold about you;</p>
<p>- communicate an opt-out request to Dynata;</p>
<p>- request access to, or the correction, blocking or deletion of, your personal data;</p>
<p>- make a complaint about our privacy practice;</p>
<p>-opt out of certain uses of your PII;</p>
<p>or have any questions regarding Dynata's privacy practices and/or this Policy, please contact us via email at&nbsp;<a href="mailto:privacy@dynata.com">privacy@dynata.com</a>.</p>
<p>Dynata's Legal Department is responsible for Dynata's compliance with this Policy.</p>
<p>&nbsp;</p>
							</div>
						</div>
											<div class="panel" data-active="1">
							<div class="row align-items-center no-gutters">
								<div class="col-md-3 p-5">
									<img class="mt-4 mt-md-0 img-fluid" src="https://hub.trckd.link/storage/panels/83163c00-e462-11e9-854a-910a48ad524d.jpg">
								</div>
								<div class="col-md-6 text-left">
									<div class="row no-gutters align-items-center">
										<div class="col-md-8">
											<div class="panel-content">
												<ul>
<li>Earn up to $5 per survey</li>
<li>Be rewarded with Vouchers from top brands</li>
<li>Gift cards available for Rebel Sports, Hoyts &amp; more</li>
</ul>
											</div>
											
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="panels[]" value="83163c00-e462-11e9-854a-910a48ad524d">
									<button class="select-panel" type="button" data-select="Select" data-selected="Selected">Select</button>
								</div>
							</div>
							<div class="terms">
								<h4>Terms and Conditions</h4>
<p>&nbsp;</p>
<p>Valued Opinions is a market research access panel owned and operated by Dynata Global UK Limited (f/k/a Research Now Limited).</p>
<p>As a member of the panel, you will have the opportunity to participate in market research activities including online and mobile surveys, product tests, focus groups, and more.</p>
<p>These terms are subject to change. For more information on how we use the data you provide, please see our&nbsp;<a href="https://www.valuedopinions.co.nz/privacy.html">Privacy Policy&nbsp;</a>.</p>
<p>&nbsp;</p>
<p>Definition of terms</p>
<p>Panel:&nbsp;The Valued Opinions market research access panel</p>
<p>Member:&nbsp;an individual member of the Panel</p>
<p>Panel Currency:&nbsp;the program/panel currency earned by participation in the Panel. Panel Currency has no monetary value and cannot be redeemed for cash; Panel Currency may not be auctioned, traded, bartered or sold and is not transferrable upon death, by gift, as part of a domestic relations matter, or otherwise, except by operation of law.</p>
<div>&nbsp;</div>
<h4 id="eligibility">Eligibility: Who is allowed to be part of our panel?</h4>
<div>
<p>Membership in our panel is open to residents of New Zealand above the age of 16.</p>
<p>Employees of Dynata are not permitted to claim rewards.</p>
</div>
<h4 id="registration">Registration: Your details, accuracy</h4>
<div>
<p>You may only open one account per person on our panel. Your account is not transferrable.</p>
<p>You will be asked to provide a personal email address and a password in order to register with our panel.</p>
<p>Please do not disclose your password to anyone else, you are responsible for keeping it safe.</p>
<p>We will not be liable for any unauthorised use of your account, which includes unauthorised use of your email address, password and reward redemption.</p>
<p>To receive surveys relevant to you, please fill in your profile; our systems will select your account for our activities based on the information it contains.</p>
<p>Make sure you fill in your profile accurately as your membership can be cancelled if your details are found to be incorrect.</p>
<p>Please ensure that the information you provide both when setting up your account and completing your profile is accurate. If, in our reasonable view, the information you provided was inaccurate, your account may be terminated.</p>
<p>From time to time our clients may want to survey the opinion of minors, they may only participate with parental consent, via their parent’s account.</p>
</div>
<h4 id="benefits">Benefits of Membership:</h4>
<div>
<p>Membership in the Panel is free of charge.</p>
<p>You may earn Panel Currency by participating in market research activities, which will be credited to your account. Once you have accumulated sufficient Panel Currency to reach a redemption threshold you can exchange your Panel Currency for your reward. More details concerning redemption can be found here:(&nbsp;<a href="https://www.valuedopinions.co.nz/help.html">https://www.valuedopinions.co.nz/help.html&nbsp;</a>).</p>
<p>Panel Currency has no monetary value and may not be bartered, sold or transferred.</p>
</div>
<h4 id="conduct">Conduct</h4>
<div>
<p>Valued Opinions relies on accurate data to serve its clients that reflect the true opinions of our members. As a member, you agree to provide truthful and well considered answers to our market research activities.</p>
<p>Dynata reserves the right to withhold awarding Panel Currency to a member if, in Dynata's reasonable view, a member’s survey question responses are untruthful or not well considered.</p>
</div>
<h4 id="termination">Termination</h4>
<div>
<p>You can terminate your account at any time, but in doing so you forfeit the Panel Currency in your account. If you wish to do so you can unsubscribe via this&nbsp;<a href="https://www.valuedopinions.co.nz/auth/unsubscribe" rel="nofollow">link&nbsp;</a>or email&nbsp;<a href="https://www.valuedopinions.co.nz/contact.html">Member Services&nbsp;</a>or from the unsubscribe link present in the footer in any email from us or here(&nbsp;<a href="https://www.valuedopinions.co.nz/auth/unsubscribe" rel="nofollow">https://www.valuedopinions.co.nz/auth/unsubscribe&nbsp;</a>).</p>
<p>We reserve the right to terminate your account at any time, immediately without specifying a reason, or if:</p>
<ul>
<li>You have been inactive for 365 days or more</li>
<li>You are in breach of these terms</li>
</ul>
<p>Your account termination will result in your panel currency being deleted.</p>
</div>
<h4 id="intellectual">Intellectual Property – ownership of content, assignment of rights to content</h4>
<div>
<p>When you become a member, you agree that title, ownership rights, and other intellectual property and proprietary rights in the panel shall remain in Dynata and/or its licensors and suppliers.</p>
<p>Through your membership, you acknowledge that the content of the website, the application and the panel - including but not limited to text, sound, photographs, graphics, software or other material contained in Dynata e-mail communications, services or software - is copyrighted by Dynata and/or its licensors and suppliers under United States and international copyright laws and author's rights laws, is subject to other intellectual property and proprietary rights and laws, and is owned by Dynata or its licensors and suppliers.</p>
<p>Save as otherwise provided by applicable copyright law and/or author's rights laws, such content may not be copied, modified, reproduced, republished, posted, transmitted, sold, offered for sale, or redistributed in any way without the prior written permission of Dynata and its applicable licensors or suppliers, with the sole exception that one copy of any necessary software that may be provided by Dynata may be downloaded onto a single computer for Member's personal, non-commercial use.</p>
<p>You must abide by all copyright notices, information, or restrictions contained in or attached to any such content.</p>
<p>Any and all survey responses, data and information provided by a member during your participation on the Panel including as part of a survey or study, becomes the Intellectual Property of Dynata and/or its client or partners. This includes:</p>
<ul>
<li>Survey responses</li>
<li>Images or videos</li>
<li>Response to open-ended survey questions</li>
</ul>
</div>
<h4 id="confidentiality">Confidentiality</h4>
<div>
<p>As a member of our panel, you will be exposed to some new products and innovative ideas from our clients and we ask that you do not share any of the information relating to the products or the research activity in which you participated, via any medium.</p>
<p>If Dynata has reason to believe you have shared material containing our client’s intellectual property outside the context of the research activity, your membership may be terminated.</p>
</div>
<h4 id="limitation">Limitation of liability</h4>
<div>
<p>Neither Dynata nor its officers, directors, stockholders, subsidiaries, employees, agents, licensors, affiliates, or other third-party providers shall be held liable for any damages or losses, whether direct, indirect, incidental, special, consequential or exemplary damages resulting from:</p>
<ul>
<li>The use or inability to use the panel;</li>
<li>The cost of procurement of substitute goods or services;</li>
<li>Any transaction entered into or through the panel;</li>
<li>The reliance on or use of any information, goods, services or merchandise provided on the panel;</li>
<li>Unauthorized access to or alteration of Member's transmissions or data;</li>
<li>Statements or conduct of any third party; Any claim attributable to errors, omissions or other inaccuracies in the panel and/or materials or information retrieved through the panel; or</li>
<li>Any other matter relating to the panel or these terms.</li>
</ul>
<p>If this limitation of liability provision shall be deemed unenforceable, either in whole or in part, then such parts as are unenforceable shall be deleted, the remaining parts shall remain in full force and effect and the liability of Dynata shall be limited to the greatest extent permitted by applicable law.</p>
<p>Nothing in these terms shall exclude or limit the liability of Dynata for:</p>
<ul>
<li>Death or personal injury arising from its negligence; or</li>
<li>Liability arising from fraud.</li>
</ul>
</div>
<h4 id="trademark">Trademark Information</h4>
<div>
<p>Dynata, the Dynata logo, and Valued Opinions are trademarks of Research Now Group, LLC. Other trademarks, as well as any third-party trademarks, service marks, logos and trade names appearing on the website, the application or through the panel, are the property of their respective owners.</p>
</div>
<h4 id="disclaimer">Disclaimer and Warranties</h4>
<div>
<p>To the extent permitted by applicable law:</p>
<ul>
<li>
<p>Member agrees that use of the panel and this website and/or application is solely at the risk of the member.</p>
</li>
<li>
<p>The panel and all services offered therein are provided on a strictly "as is" and "as available" basis, without representation or warranty of any kind.</p>
</li>
<li>
<p>Neither Dynata nor its third-party partners make any warranty, express or implied:</p>
<ul>
<li>
<p>With regard to any products, services, or gifts obtained by members through the panel.</p>
</li>
<li>
<p>That the panel will meet member's requirements.</p>
</li>
<li>
<p>That the panel will be uninterrupted, timely, free of errors or without defects.</p>
</li>
<li>
<p>As to the results a member may obtain by using the panel.</p>
</li>
<li>
<p>As to the accuracy or reliability of any information obtained via the panel.</p>
</li>
</ul>
</li>
<li>
<p>Dynata expressly disclaims any and all express, implied and statutory warranties regarding the panel, information, services or goods provided by or through the panel (other than those incapable of exclusion under the laws applicable to these terms), including, but not limited to:</p>
<ul>
<li>
<p>The implied warranty of merchantability;</p>
</li>
<li>
<p>The implied warranties of fitness for a particular user or purpose; and</p>
</li>
<li>
<p>Non-infringement.</p>
</li>
</ul>
</li>
<li>
<p>Dynata cannot and shall not be liable or responsible for those guarantees, warranties and representations, if any, offered by clients, partners, reward partners, manufacturers of merchandise or suppliers of services.</p>
</li>
<li>
<p>No advice or information, whether oral or written, obtained by a member from Dynata or via the panel shall create any warranty not expressly made herein.</p>
</li>
</ul>
</div>
<h4 id="jurisdiction">Jurisdiction and Governing Law</h4>
<div>
<p>These terms shall be governed by and construed according to the laws of England.</p>
<p>If any provision(s) of these terms are held by a court of competent jurisdiction to be invalid, then such provision(s) shall be construed, as nearly as possible, to reflect the intentions of the parties, and all other provisions shall remain in full force and effect. Dynata and member agree that all lawsuits or proceedings arising out of these terms, or out of member's use of the panel, shall be brought in the courts of England , and the parties hereby irrevocably submit to the exclusive personal jurisdiction of such courts for such purpose.</p>
</div>
<h4 id="indemnification">Indemnification</h4>
<div>
<p>Member agrees to pay the reasonable costs incurred by Dynata and its subsidiaries, predecessors, successors, affiliates, officers, directors, employees, agents, licensors, suppliers, co-branders, third-party providers, clients, partners, reward partners or other partners that such parties may incur as a result of, due to, or arising out of the negligent or wilful violation by member (or anyone acting under member's account or password) of these terms or the use or misuse of the panel by member (or anyone acting under member's account or password), or the violation of any rights of another by member (or anyone acting under member's account or password).</p>
</div>
<h4 id="notice">Notice provision</h4>
<div>
<p>Except as provided above with respect to modifications of these terms, Dynata may deliver notices to Member by prepaid certified mail, return receipt requested at the address in Dynata's database, or via electronic mail at the email address in Dynata's database; any such notice shall be deemed effectively given upon delivery</p>
<p>Member may give notice to Dynata by prepaid certified mail, return receipt requested at the following address: 160 Queen Victoria Street, London, EC4V 4BF, UK, and any such notice shall be effective upon receipt.</p>
</div>
<h4 id="contact">How to contact us</h4>
<div>
<p>You can contact our Member Services team via the&nbsp;<a href="https://www.valuedopinions.co.nz/contact.html">contact page&nbsp;</a>on the website&nbsp;<a href="https://www.valuedopinions.co.nz/contact.html">https://www.valuedopinions.co.nz/contact.html&nbsp;</a>.</p>
</div>
							</div>
							<div class="policy">
								<h1>Privacy Policy</h1>
<p>The following is the Valued Opinions for residents of New Zealand and is the policy of Dynata Global UK Limited (f/k/a Research Now Limited), with a registered address at 160 Queen Victoria Street, Ground Floor London, United Kingdom EC4V 4BF on behalf of itself and all members of the Research Now Group, LLC corporate family including all affiliates of Dynata, LLC (f/k/a Survey Sampling International, LLC) globally listed below (collectively “Dynata”). All such entities globally shall have access to personal data collected pursuant to this policy and may access and/or store such data outside of your country of residence including in the United States.</p>
<p>First Effective: March 1, 2007</p>
<p>This Version: Effective September 5, 2019</p>
<p>The following sets forth the privacy policy for the Dynata online panel communities, websites and/or mobile applications (collectively "Application/Services") offered by Dynata.</p>
<p>This Privacy Policy sets forth the collection, use and disclosure of personal data or personally identifiable information ("PII") and other information by Dynata in connection with Dynata's Services as defined herein and other Dynata and third party activities as defined herein ("Non-Research Activities"). Dynata's Services provide you with the opportunity to join a panel, participate in surveys administered by Dynata or by third parties (whether as a panel member or a non-panel member), use the websites associated with the panels, use the Application/Services associated with the panels, and receive and redeem rewards and incentives, including, without limitation, sweepstakes entries, offered in connection with panel membership and/or the completion of surveys (collectively "Services"). Non-Research Activities include, but are not limited to, Dynata marketing Dynata Services and/or third parties marketing their services to you and/or sharing individual and/or aggregate profile data with third parties to develop marketing insights and/or audience/look alike models. Non-Research Activities are described in more detail in this Privacy Policy.</p>
<p>Your use of Dynata's Application/Services is completely voluntary and therefore Dynata's processing of your PII in connection with the Application/Services and Non-Research Activities and this Privacy Policy is with your consent.</p>
<p>Surveys administered by third parties and the data collected in connection therewith are not subject to this Privacy Policy. Registration with, use of, and access to Dynata's Services is subject to Dynata's Terms and Conditions. In most cases Dynata is not the sponsor of the survey and the survey instrument, and the survey results or survey data will be owned by the sponsor of the survey.</p>
<p>All references in this Privacy Policy to "Dynata" include Dynata and its parent, subsidiary and affiliated companies. All references to "us" or "we" refer to Dynata. All PII is stored on servers located in the United States, where Dynata's servers are located and accessible globally to Dynata employees and/or agents. For purposes of this policy, respondent shall mean any individual who participates in Dynata Services, including passive data collection and/or participates in the Non-Research Activities described herein. For purposes of this policy, online shall include mobile web browsing,</p>
<p>&nbsp;</p>
<h2 id="information">What personal data and other information does the Application/Services collect and how is it used?</h2>
<p>Dynata collects personally identifiable information ("PII") from research participants during and after registration with a panel, including, without limitation, during participation in a survey and in connection with the receipt and redemption of rewards and incentives and/or during the Application/Services registration and download process. You will be asked to provide certain PII and demographic information, including, without limitation, your name, address(es), telephone number(s) (including home, cell, and/or business telephone numbers), email address(es), date of birth, and occupation/education, the unique panelist/respondent identification number we assign to you when you sign up for an account (individually a "UID" and collectively "UIDs"), and racial and gender information. In addition to the collection of PII mentioned above, during and subsequent to the registration process, you may be asked to voluntarily provide or disclose Sensitive Data. "Sensitive Data" means PII that discloses or reveals health and medical conditions, sexual orientation or sexual life, political opinions/views, race/ethnic origin, religious and philosophical beliefs and trade-union membership. Sensitive Data is used to target survey opportunities to you and as otherwise set forth in this Privacy Policy.</p>
<p>Dynata collects PII, Sensitive Data and demographic information from non-panel members prior to and during participation in a survey.</p>
<p>Dynata provides its clients and/or its advertising partners with information about your device, including but not limited to, the device's IDFA or Advertising ID and interactions with the Application/Services with your consent. Dynata, the clients and/or ad partners may use this information to facilitate Dynata surveys, for marketing of Dynata products and services to you, for unrelated interest-based advertising, to link your device to additional data about you and/or your device available from third party data management platforms and data providers/brokers and/or to validate certain information you provide about yourself and/or your device. Click here to learn more about some of our ad partners, including how to subsequently opt-out.</p>
<p>Additional information you submit.</p>
<p>You may submit, upload or transmit content or material, including, without limitation, photos, videos, and/or any other similar or related content or material which may include your PII ("User Content"), for example, when completing surveys. PII included in User Content shall be collected, used and disclosed as set forth in this Privacy Policy. User Content should not include audio, video, images, or the likeness of anyone other than you.</p>
<p>Information collected through automated means:</p>
<p>The Application/Services also collect certain information automatically, such as information about your device and device capabilities, including, without limitation, the device operating system, the other applications on your device, IP address, device network provider, device type, time zone, network status, browser type, browser identifier, unique device identification number (such as identifiers for analytics or advertising), network provider user ID (a number uniquely allocated to you by your network provider), Media Access Control (MAC) address, International Mobile Equipment Identity, location and other information that alone or in combination may be used to uniquely identify your device. Specific examples of this data and the technology that collects it are below:</p>
<p>Geo-location data. The Application/Services will request your permission to obtain geo-location information from your mobile device, and such geo-location information may be provided by the Application/Services at any time, whether the Application/Services is open or not. If you consent to sharing your geo-location data, in addition to the uses set forth under "Dynata's use of information" below, Dynata will also use your location information to offer you the option to participate in location-based surveys and market research and/or to share such geolocation data with third party clients to demonstrate certain location and/or traffic patterns of Application/Services participants. In addition, Dynata may share your geo-location data with third party vendors to generate surveys for market research and for other research from aggregated location patterns. Please visit this&nbsp;<a href="https://sense360.com/privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a>&nbsp;for a description of how our partner uses the geo-location data.</p>
<p>Geo-location data also may be used by ad networks to provide you with location-based advertising. The ad networks' use of data, and how to opt out, are described in more detail below.</p>
<p>If you no longer wish to share your geo-location data through your device, please change the privacy settings in your device for the Application/Services.</p>
<p>Application/Services and functionality. Dynata may request access to certain applications and/or functionality available on or through your device for use in connection with the Application/Services and the Services. Access shall be requested via push notification or other alerts and access will only be granted with your consent. If you consent, you may subsequently opt-out by changing your settings on the device.</p>
<p>Social media information. You may also be offered the opportunity to access the Application/Services through third party social media platforms. If you select such option, Dynata may collect certain profile information stored in your social media platform account.</p>
<p>Cookies and Similar Technology. Cookies are small files that store certain data on a device. Session cookies expire when you close your browser. Persistent cookies remain on your device until deleted or once they reach a defined expiration date. You may set your browser to notify you when you receive a cookie. Additional geographic and demographic data such as the Audience Measurement Data (as defined below) may be shared with third parties and associated with a cookie placed on your device.</p>
<p>First party and third party cookies and other similar or related technology and device identifiers (e.g., IDFAs, AAIDs, etc.) may be placed, written, set, and/or read for several purposes including, without limitation, to provide a better survey experience, quality control, validation, to enable or facilitate survey participation, tracking of completed surveys or other completed actions, for fraud detection and/or prevention, online ad effectiveness research, website tracking and audience measurement, to develop audience insights and/or look-alike models in connection with marketing campaigns, and for the purpose of targeting advertisements and other content to individuals, subject to your consent where required by applicable law. However, for certain cookies and/or similar or related technology, if you decide not to accept cookies, you will not be able to use the Application/Services.</p>
<p>For more information on the types of cookies we use, the purposes for which we use information collected via cookies, please see our&nbsp;<a href="https://info.evidon.com/pub_info/16776" target="_blank" rel="noopener noreferrer">Cookie Consent Tool</a>.</p>
<p>Log Files. The Application/Services may automatically gather and store certain information, including, without limitation, data available from your web browser, including, without limitation, IP Address, browser type, internet service provider, referring/exiting pages, operating system, date/time stamp, and click stream data in log files.</p>
<p>Digital Fingerprinting. Generally, digital fingerprinting assigns a unique identifier to your device based upon the device's technical settings, characteristics, and IP Address. Dynata uses digital fingerprinting technology for quality control and validation purposes and fraud detection and/or prevention, including, without limitation, identifying duplicate or fraudulent respondents. Dynata may implement and use digital fingerprinting directly or through a third party vendor with your consent where required by applicable law.</p>
<p>Watermarking. Generally, watermarking involves placing a technology or file on your device to identify that it has previously been used to register with or access the Application/Services or the Services. Watermarking is used for quality control and validation purposes and fraud detection and/or prevention purposes. Dynata may engage in watermarking activities directly or through a third party vendor with your consent where required by applicable law. In some cases, we may use information collected through automated means, along with other information, to recognize users (or households) across platforms or across devices, such as smartphones, computers, tablets or related browsers, for the purposes described in this Privacy Policy.</p>
<p>Information collected from third parties</p>
<p>Dynata may obtain PII, behavioral and/or demographic information from third parties, including, without limitation, data management platforms, ad networks, information service bureaus, other sample suppliers and/or social media platforms. Dynata may use the PII, behavioral and/or demographic data received from these third parties for various purposes, including, without limitation, data validation, data append, developing marketing insights and look alike models, fraud detection purposes, and/or sending you a one-time email to invite you to participate in a survey and/or join a Panel. In addition, geolocation data, including information regarding retail and other commercial enterprises you may visit while the geolocation feature is enabled, may be appended to your panel profile and/or shared with Dynata's clients if you elected to opt in to the geolocation services.</p>
<h3>How does Dynata use the information it collects?</h3>
<p>Dynata's use of information:</p>
<p>In addition to the purposes described above, Dynata uses personal data collected through the Application/Services as follows: (i) to communicate with you regarding your membership with a survey panel(s) owned by Dynata; (ii) to communicate with you regarding your participation in a survey(s); (iii) to tailor survey opportunities to you and to arrange for advertisements to be displayed to you outside the Application/Services for the purposes of facilitating the completion of advertisement recall surveys; (iv) to send you notifications of survey opportunities; (v) to comply with any and all legal obligations, including, without limitation, tax obligations; (vi) to administer and manage Dynata's reward and incentive programs and fulfill your requests for rewards and incentives; (vii) to facilitate your entry into Dynata's sweepstakes and promotions and communicate with you regarding such entries; (viii) to update Dynata's records; (ix) to comply with any data suppression obligations or requirements; (x) for fraud detection and/or prevention purposes; (xi) to link your device and/or profile to additional information available about you and/or your device available from data management platforms ("DMP"); (xii) to market Dynata products/services to you; (xiii) to enable third parties to market their products/services to you; (xiv) to enable Dynata or third parties to develop marketing insights and/or audience/look alike models; (xv) to validate the profile information you provided to us; and/or (xvi) as otherwise permitted pursuant to this Policy or as otherwise authorized by you. Dynata may use information collected in the context of the Application/Services in connection with other survey panels that Dynata administers and/or in connection with Non-Research Activities. With respect to the linking of Application/Services data to third party DMP data, Dynata uses such data itself and/or permits Dynata's clients and/or the DMP itself to use such data to provide you with survey opportunities, to measure advertising effectiveness (as described in more detail below), to segment audiences; to design advertising campaigns using "look alike" cohort groups based on survey and third party data; and/or to market such third party's products/services to you.</p>
<p>Retargeting. Dynata may from time-to-time engage a third party or third parties to either display advertising on an Dynata website(s) or to manage Dynata's advertising on other websites (for example on social media sites). Dynata's third party partner(s) may use technologies such as cookies or identifying data elements. Including but not limited to your IDFA or Advertising ID to gather information about your activities on Dynata's website(s) and/or on other websites in order to: (i) provide you with advertising about Dynata and its services and/or (ii) assist Dynata in developing marketing and advertising campaigns designed to target individuals who have a social and demographic profile similar to your social and demographic profile. If Dynata is conducting a re-targeting program and you wish to not participate in this re-targeting program, please opt-out via the applicable cookie opt-out process set forth in this Privacy Policy or in Dynata's separate cookie notice, by modifying your IDFA or Advertising ID and/or by unsubscribing within the advertisement itself.</p>
<p>Audience Insights/Look-alikes. Dynata and/or third parties may use PII collected from you and/or may link PII collected from you to a third party cookie to develop audience insights and/or look-alike models in connection with marketing campaigns.</p>
<p>Online Advertising Effectiveness. In connection with Dynata's online ad effectiveness program, you can participate in surveys regarding ads, promotions, content, campaigns, and/or websites that Dynata is testing for its clients. To facilitate the completion of these surveys, Dynata's clients may write, set, or read cookies, locally shared/stored objects, flash cookies and/or any other related technology (each a "Third Party Technology" and collectively the "Third Party Technologies"). The Third Party Technologies may be written, set or read in various locations, including, without limitation, Dynata's servers or systems. If you participate, your UID will be stored in or associated with the Third Party Technology to allow you to be re-contacted about the online ad or promotion and Dynata's client will use the Third Party Technology to determine whether you have seen, clicked on, or otherwise interacted with the online ad or promotion. If you have interacted with the online ad or promotion, Dynata's client will send your UID and the specific survey to Dynata and Dynata will provide you with the opportunity to complete the survey.</p>
<p>Audience Measurement Data. In addition to the use and sharing of Audience Measurement Data (as defined below) in connection with online advertising effectiveness research, as such research is described above, Dynata may share your UID and data previously collected by Dynata, including, without limitation, age, gender, income, number of people in your household, education/education level, and employment status, ("Audience Measurement Data"), to third parties, including, without limitation, Dynata's subcontractors, partners, and/or clients for the purpose of audience measurement reporting on the content, advertisements, campaigns, and websites that you visit, view, and/or click on. The Audience Measurement Data will be used in connection with online advertising effectiveness research, and to assist in the creation, development, and implementation of websites, online advertisements, and other Internet and digital media features, functionality, and campaigns. Audience Measurement Data may be shared in a single summary form (i.e. individual respondent level) or aggregate summary form (i.e. group of respondents).</p>
<h3>How do advertisers/ad networks use my information?</h3>
<p>Ad partners' use of information.</p>
<p>You can use the Application/Services to participate in surveys, including, without limitation, surveys regarding specific ads and promotions that Dynata is testing for its business clients. You may see these ads or promotions in several places, including, without limitation, in non-Dynata mobile apps (for example, in a gaming app), after which Dynata shall provide you with access to, or contact you to complete, a survey about the ad or promotion that you were exposed to. To facilitate the completion of surveys on ads or promotions, Dynata has partnered with ad companies that provide, measure or facilitate advertisements, including, without limitation, in many other mobile apps. The Application/Services provides these ad networks with the UID, your unique device identifier, and many or all of the other types of information described in the "Information collected through automated means" section above (including your ongoing geolocation, if your device permits the collection of geolocation). Then, when you use a mobile app that has partnered with one of the ad companies, the ad company can use your unique device identifier or other automatically collected information to recognize your device. The ad company may then show you an ad or promotion that Dynata is testing for one of our business clients. The ad company may then inform Dynata that the device associated with your UID has just received an ad or promotion, which allows Dynata to provide you with access to, or to contact you to complete, a survey regarding the ad or promotion. With your consent, the ad companies also use the information they collect about your device and your interactions with the Application/Services and other mobile apps to provide you with other in-app advertising that has been tailored to your interests and for other purposes. To learn more about some of these ad companies, including how to opt out, please visit the following:</p>
<p><a href="https://www.voicefive.com/preferences.aspx" target="_blank" rel="noopener noreferrer">https://www.voicefive.com/preferences.aspx</a></p>
<p><a href="https://www.insightexpressai.com/adserver/optout.aspx" target="_blank" rel="noopener noreferrer">https://www.insightexpressai.com/adserver/optout.aspx</a></p>
<p><a href="https://n01d01.cumulus-cloud.com/ssi/optout.php" target="_blank" rel="noopener noreferrer">https://n01d01.cumulus-cloud.com/ssi/optout.php</a></p>
<p><a href="http://www.nielsen-online.com/corp.jsp?section=leg_prs&amp;nav=1" target="_blank" rel="noopener noreferrer">http://www.nielsen-online.com/corp.jsp?section=leg_prs&amp;nav=1</a></p>
<h3>What communications will I receive through the Application/Services or relating to the Services?</h3>
<p>Dynata may contact you to participate in surveys via "push" notifications or SMS/text messages if you expressly agree to receive such communications.</p>
<p>In addition, Dynata and/or its agents or vendors on behalf of Dynata will send email communications to you regarding survey invitations, survey participation, reward or incentive information, inquiries and redemption, newsletters, notices required to be provided hereunder or by law, sweepstakes or promotion entries, notice of winning a sweepstakes or promotion, and in response to inquiries from you.</p>
<p>Where you provide Dynata with your telephone number(s), Dynata, its clients and/or its Subcontractors may also contact you by telephone in relation to your account, including, without limitation: (i) surveys you have or are participating in; (ii) reward or incentive information, inquiries and redemption; (iii) sweepstakes or promotion entries and prize fulfillment; (iv) responding to your queries; (v) notices under this Privacy Policy; (vi) additional survey invitations and/or opportunities; and/or (vii) to validate profile information you have provided to us.</p>
<h3>Does Dynata share personal data and other information collected through the Application/Services with third parties?</h3>
<p>Pursuant to applicable law, Dynata may disclose or transfer personal data and other information collected through the Application/Services to third parties as follows:</p>
<p>(i) With your consent;</p>
<p>(ii) In response to a subpoena or an order of a court or government agency;</p>
<p>(iii) To establish, exercise, or defend legal claims of an individual or Dynata, including in order to protect the safety of an individual or to protect Dynata's rights and/or property;</p>
<p>(iv) Between various Dynata panels, if you sign up for more than one Dynata panel;</p>
<p>(v) To a parent, subsidiary, or affiliate of Dynata: (1) in the event of a reorganization or restructuring; or (2) for use and processing in accordance with this Policy or as authorized by you;</p>
<p>(vi) To authorized agents and/or subcontractors of Dynata and/or of Dynata's clients, who are providing services, including, without limitation, data append services, data validation services, fraud detection and/or prevention services, database matching services, coding services, and reward, incentive, and sweepstakes related services. In connection with the sharing of personal data and other information with subcontractors as set forth in (vi) above, such subcontractors may use such data to improve or enhance their services, in which event they are acting as data controllers or data owners and not as subcontractors engaged by Dynata. For a list of the subcontractors acting as data controllers or data owners of your data and their privacy policies, please click&nbsp;<a href="https://www.rnssiprivacy.com/data-controllers/" target="_blank" rel="noopener noreferrer">here</a>.</p>
<p>(vii) To a client for limited market research related uses including, without limitation, modeling, validation, data append, database segmentation, and reward, incentive, or sweepstakes redemption, fulfillment, and/or entry;</p>
<p>(viii) In connection with a change of ownership or control, including, without limitation, a merger or an acquisition of any or all of Dynata's business assets, provided that the party receiving or acquiring the personal data agrees to use, protect, and maintain the security, integrity, and confidentiality of personal data in accordance with this Policy;</p>
<p>(ix) to a client or to such client's customer in the event Dynata or a third party believes that you have or may violate the intellectual property rights of a third party;</p>
<p>(x) to a client or to such client's customer in the event Dynata or a third party believes that you have violated the Terms of Service;</p>
<p>(xi) to a third party, which shall include both Dynata research clients and third parties that engage in Non-Research Activities to enable such third party to develop marketing campaigns, audience insights, look-alike models and/or to market such third party's products/services to you; and</p>
<p>(xii) As otherwise permitted pursuant to this Policy.</p>
<p>In addition to the foregoing, if you enroll through a third party with whom Dynata has a contractual relationship and/or from an email sent from a third party company proposing you to join our Application/Services (collectively "Program Partner"), Dynata may share select enrollment information with the Program Partner who invited you into the program, which can include your full name, post or zip code, and your email address. You acknowledge that our Program Partner may collect, use, and disclose that information in accordance with their privacy policy. Please note that Dynata will not be responsible for and will not be liable for our Program Partner's actions concerning your information or for any Program Partner's privacy practices when you are dealing directly with them.</p>
<p>Please note, Dynata may allow a client to collect PII directly from respondents. The disclosure is voluntary and, prior to collection, the client is required to enter into a written agreement with Dynata, which, among other things, limits use of the PII.</p>
<p>Dynata may license certain PII to third parties (e.g., data brokers, data aggregators, etc.) for their own Non-Research Purposes, including, without limitation, the licensing of individual-level and/or aggregated-level data (e.g., product and/or service purchasing or usage activity, social media activity, website visitation data, internet search history, etc.) for the development of audience insights and/or look-alike models, for the purpose of sale of such data to the third party's clients/customers for the purpose of performing analytics and providing marketing intelligence and/or to enable such third party to market its products/services to you.</p>
<p>Additionally, UIDs and information collected by automated means are provided to third parties, including, without limitation, clients, partners, agents and/or vendor for the purposes of identifying respondents for re-contact surveys or communications, fraud detection and/or prevention, database matching, data validation, data append, coding, data segmentation, and reward, incentive, and/or sweepstakes or promotion related services.</p>
<p>In connection with your survey data, Dynata or the client may associate certain demographic attributes to you. Dynata may share with third parties, including but not limited to clients, the geographic and/or demographic data Dynata collects from you during enrolment or through certain profile questions Dynata may ask you. Such data may be shared with third parties on an individual respondent level or aggregate summary form (i.e. a group of respondents). If you voluntarily disclose personal data in connection with your survey data and responses, and Dynata collects the survey data and responses, Dynata will transfer the survey data and responses, UID and the voluntarily disclosed personal data to the relevant Dynata client.</p>
<h3>How can I opt-out of certain data collection and/or use?</h3>
<p>There are multiple opt-out options for users of this Application/Services.</p>
<p>You can stop all collection of personal data and other information by the Application/Services by uninstalling the Application/Services and/or terminating your participation in the panel(s). You may use the standard uninstall processes available as part of your mobile device or via the mobile application marketplace or network and/or you may cancel your panelist account on the panel Site. Please note that if you delete the Application/Services, but maintain a profile with one of Dynata's websites, we may still collect personal data and other data from you through our site(s). Uninstalling the Application/Services will not delete all information collected by Dynata prior to uninstalling the Application/Services. To delete all information collected by Dynata please contact Dynata as set forth below.</p>
<p>Six months following termination of your account, inactivity of your account and/or the date upon which you uninstall the Application/Services, Dynata may transfer your PII to a third party data broker and/or data management platform for purposes of resale/reuse by such third party. If you do not wish for your PII to be used for Non-Research Activities and/or if you do not consent to Dynata sharing your PII with third parties after termination of your account and/or removal of the Application/Services from your device, please contact us at&nbsp;<a href="mailto:privacy@researchnow.com">privacy@dynata.com</a></p>
<p>For iOS Opt-out of location data</p>
<p>You may, at any time, opt-out from enabling the Application/Services to access your location data by:</p>
<ul>
<li>Touching or selecting the settings icon for the device;</li>
<li>Once in the settings icon, touch or select Location Services; and</li>
<li>Once in Location Services, you can use the individual slider for the Application/Services, to turn off location services.</li>
</ul>
<p>Note: If you turn off Location Services, you will be prompted to turn on Location Services the next time the Application/Services tries to use this feature.</p>
<p>For Android Opt out of location data</p>
<p>You may, at any time, opt-out from enabling the Application/Services to access your location data by:</p>
<ul>
<li>Touching the ABOUT button on the top right of the navigation bar</li>
<li>Once in the ABOUT dialog, you can toggle on/off Location Services via a switch labeled: "Access to my location"</li>
</ul>
<p>For iOS Opt-out of push notifications</p>
<p>You may opt-out of push notifications for the Application/Services by:</p>
<ul>
<li>Touching or selecting the settings icon for the device;</li>
<li>Once in the settings icon, touch or select notifications;</li>
<li>If push notifications are turned on, there will be a list of icons, touch or select the icon for the Application/Services; and</li>
<li>From this screen, you will be able to modify the push notification settings for the Application/Services.</li>
</ul>
<p>For Android Opt-out of push notifications</p>
<ul>
<li>You may opt-out of push notifications for the Application/Services by:</li>
<li>Access the Settings for the device.</li>
<li>From within Settings, locate the Apps setting.</li>
<li>Once in Apps, locate the relevant application (QuickThoughts or iPoll), and select it.</li>
<li>Locate a checkbox labeled "Show notifications" and toggle it based on your preference.</li>
</ul>
<p>Opt-out of email communications</p>
<p>You may opt-out of email communications by clicking the unsubscribe link in any email you receive from us or contacting us as set forth below.</p>
<p>Opt-out of sharing social media platform profile data</p>
<p>You may opt-out of sharing social media platform profile data by changing your preference/profile settings with the social media platform regarding the sharing of data with third parties or removing the Application/Services from your social media profile.</p>
<p>Opt out of use of the advertising identifier assigned to your smartphone/device</p>
<p>You may change the advertising identifier assigned to your device at any time.</p>
<p>Ad network opt-out</p>
<p>The ad networks that collect information through the Application/Services for use in facilitating surveys and providing interest-based advertising offer certain opt-out mechanisms. To opt-out, follow the instructions for each ad network at the links provided below. If you opt-out, you will not be able to participate in our surveys about ads and promotions.</p>
<table border="1" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th valign="middle" width="161">
<p><span lang="en-ZA">Ad network</span></p>
</th>
<th valign="middle" width="159">
<p><span lang="en-ZA">Opt-out information</span></p>
</th>
</tr>
</thead>
<tbody>
<tr>
<td valign="middle" width="161" data-label="Ad network">&nbsp;
<p><span lang="en-ZA">Admob by Google</span></p>
</td>
<td valign="middle" width="155" data-label="Opt-out information">&nbsp;
<p><span lang="en-ZA"><a href="https://www.google.com/ads/preferences/html/mobile-about.html" target="_blank" rel="noopener noreferrer">https://www.google.com/ads/preferences/html/mobile-about.html</a></span></p>
</td>
</tr>
<tr>
<td valign="middle" width="161" data-label="Ad network">&nbsp;
<p><span lang="en-ZA">Flurry</span></p>
</td>
<td valign="middle" width="155" data-label="Opt-out information">&nbsp;
<p><span lang="en-ZA"><a href="https://policies.oath.com/us/en/oath/privacy/controls/index.html" target="_blank" rel="noopener noreferrer">https://policies.oath.com/us/en/oath/privacy/controls/index.html</a></span></p>
</td>
</tr>
<tr>
<td valign="middle" width="161" data-label="Ad network">&nbsp;
<p><span lang="en-ZA">InMobi</span></p>
</td>
<td valign="middle" width="155" data-label="Opt-out information">&nbsp;
<p><span lang="en-ZA"><a href="https://www.inmobi.com/inmobi-privacy-policy/opt-out/" target="_blank" rel="noopener noreferrer">https://www.inmobi.com/inmobi-privacy-policy/opt-out/</a></span></p>
</td>
</tr>
<tr>
<td valign="middle" width="161" data-label="Ad network">&nbsp;
<p><span lang="en-ZA">Millennial Media</span></p>
</td>
<td valign="middle" width="155" data-label="Opt-out information">&nbsp;
<p><span lang="en-ZA"><a href="https://policies.oath.com/us/en/oath/privacy/controls/index.html" target="_blank" rel="noopener noreferrer">https://policies.oath.com/us/en/oath/privacy/controls/index.html</a></span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h3>Can I stop Dynata from tracking my online activities?</h3>
<p>Do Not Track ("DNT") is a preference in your browser that you can set to notify websites that you visit that you do not want the websites to collect certain information about you. Dynata does not respond to DNT signals. If you object to Dynata's practice with regards to DNT signals, you may opt-out from participation or use of Dynata's services as described below.</p>
<p>In connection with Dynata's online ad effectiveness program, Dynata permits Dynata's subcontractors, partners and/or clients to drop, set, and/or write Third Party Technologies for the purpose of facilitating audience measurement and ad recall survey activities. Dynata is not responsible for any third party's compliance with or response to DNT signals. To learn more about Dynata's online ad effectiveness program, please review the Cookies section of this Privacy Policy.</p>
<h3>How long do you keep my personal data and other information?</h3>
<p>Dynata will retain personal data and other information relating to your use of the Application/Services and/or the Services for as long as you have the Application installed and/or use the Application/Services and for up to one (1) year thereafter or such other period as may be required or permissible by law. Six months following your inactivity with the panel Sites and/or uninstalling the Application/Services, Dynata may transfer your PII to a third party data broker and/or data management platform for purposes of resale/reuse by such third party.</p>
<h3>How can I access the personal data and other information the Application/Services has collected about me?</h3>
<p>You have the right to review, correct, and delete your personal data, subject to applicable law. You may contact us with such a request using the contact details provided below.</p>
<h3>Does the Application/Services collect data from minors under sixteen (16) years of age?</h3>
<p>The Application/Services is not designed for, or intended for use by, any individual under the age of sixteen (16). We do not knowingly collect personal data from children under the age of sixteen (16), and if we became aware that we have inadvertently collected personal data from a child under the age of sixteen (18), we will undertake reasonable commercial efforts to delete such personal data.</p>
<h3>What security is available for the personal data and other information collected through the Application/Services?</h3>
<p>Dynata maintains an appropriate level of technical, administrative, and physical safeguards to protect personal data and other information disclosed or collected by Dynata. Dynata reviews, monitors, and evaluates its privacy practices and protection systems on a regular basis. Despite the safeguards we implement, transmissions over the Internet and/or a mobile network are not totally secure and Dynata does not guarantee the security of online transmissions. Dynata is not responsible for any errors by individuals in submitting personal data to Dynata.</p>
<h3>Who can I contact with questions about this Policy?</h3>
<p>If you wish to:</p>
<p>- receive a copy of the information we hold about you;</p>
<p>- communicate an opt-out request to Dynata;</p>
<p>- request access to, or the correction, blocking or deletion of, your personal data;</p>
<p>- make a complaint about our privacy practice;</p>
<p>-opt out of certain uses of your PII;</p>
<p>or have any questions regarding Dynata's privacy practices and/or this Policy, please contact us via email at&nbsp;<a href="mailto:privacy@researchnow.com">privacy@dynata.com</a></p>
<p>Dynata's Legal Department is responsible for Dynata's compliance with this Policy.</p>
<h3>Are there any companies within the Dynata Group that may collect, store and process PII?</h3>
<p>Yes, please see the list of companies here:&nbsp;<a href="https://www.rnssiprivacy.com/dynata-locations/" target="_blank" rel="noopener noreferrer">https://www.rnssiprivacy.com/dynata-locations/</a></p>
							</div>
						</div>
											<div class="panel" data-active="1">
							<div class="row align-items-center no-gutters">
								<div class="col-md-3 p-5">
									<img class="mt-4 mt-md-0 img-fluid" src="https://hub.trckd.link/storage/panels/tOERGC9OVpRULYU6xDurz3kRJX9t5oBn.jpg">
								</div>
								<div class="col-md-6 text-left">
									<div class="row no-gutters align-items-center">
										<div class="col-md-8">
											<div class="panel-content">
												<ul>
<li>Be rewarded for each survey you answer</li>
<li>Earn cash &amp; free gift cards</li>
<li>Win big in the daily Toluna lottery</li>
</ul>
											</div>
											
										</div>
										
									</div>
								</div>
								<div class="col-md-3">
									<input type="checkbox" name="panels[]" value="3d1574d0-e463-11e9-a87e-f3d938ac6b22">
									<button class="select-panel" type="button" data-select="Select" data-selected="Selected">Select</button>
								</div>
							</div>
							<div class="terms">
								<h1>TERMS OF USE AND MEMBERSHIP</h1>
<p><br>Last Updated: 11 February&nbsp;2019<br>&nbsp;</p>
<p>Welcome to Toluna.com (this "Site"). By using this Site, registering as a member of Toluna, participating in the Toluna points (“Points” or “Toluna Points”) membership program ("Toluna Points Program" or “Points Program”)&nbsp;or participating in any survey or study provided or hosted by Toluna (each, a "Survey" and collectively "Surveys"), you agree to these Terms of Use and Membership ("Terms")&nbsp;and confirm that you have read and understood our privacy policy (“Privacy Policy”).<br><br><br>Our Privacy Policy sets out how Toluna collects uses and stores your personal information and a copy can be found&nbsp;<a href="https://nz.toluna.com/Privacy">here</a>.</p>
<p>If you do not agree to the Terms and the Privacy Policy, do not use this Site.</p>
<p>Toluna reserves the right, in its sole discretion, to change, modify, add or remove portions of these Terms and/or our Privacy Policy, at any time. It is your responsibility to check these Terms and our Privacy Policy, periodically for changes. These Terms were last updated on the date at the top of these Terms. Your continued use of this Site following the posting of such changes will mean that you accept and agree to the changes. Provided you comply with these Terms, Toluna grants you a personal, non-exclusive, non-transferable, limited privilege to enter and use this Site.</p>
<h3>Eligibility</h3>
<p>Membership in any Toluna panel is free and is open to individuals only (not corporations or other business entities) that are at least fifteen&nbsp;(15) years of age or such other age as required by your geographic location. Membership in certain panels may be further restricted based on your age or geographic location. If you are less than eighteen (18) years of age and win any prize or receive any cash reward through Toluna Points or other Toluna incentive Program, then such award will be made to your legal guardian. You are permitted to have only one account.</p>
<h3>Registration and Passwords</h3>
<p>While you may access this Site without registering for membership in any Toluna panel, in order for an account to be established in your name and any Points properly credited to your account, you must complete the provided online registration form. To open a member account, you must provide Toluna with complete and valid contact information, including your full legal name, home address, valid e-mail address, and all other requested information. Your account must have a unique and valid e-mail address and password.</p>
<p>You agree to provide only accurate, current and complete registration information and to keep that information updated in order to maintain its accuracy. Toluna may terminate or suspend your membership and you may forfeit your Points if you fail to provide or keep your personal information accurate and complete.</p>
<p>You may use only one (1) password to open and access your account, and you may not use another account holder's password or allow anyone else to use your password, for any reason. You are solely responsible for the security of your user name and password and any activity that occurs under your membership account, whether authorized or unauthorized. Toluna will not be responsible for any losses incurred through the use of your password by a third party, except when unauthorized use is directly attributable to the gross negligence or fraud of Toluna. You agree to immediately notify Toluna of any unauthorized use or breach of your member account.</p>
<p>Should you forget your password, you may request an e-mail to reset your password by using your registered email address so that you can regain use of your account and an email will be sent to the e-mail address we hold in your member account.</p>
<p>By joining as a member of Toluna's panels, you agree to receive invitations to participate in Surveys via e-mail. Toluna does not guarantee that you will receive a certain minimum volume of invitations or any invitations at all. Your participation in any Survey and your disclosure of any personally-identifiable information is completely voluntary.</p>
<h3>Relationship</h3>
<p>You are responsible for providing any computer equipment and communications services necessary to connect to and access this Site. You agree that neither your membership in a Toluna panel nor your completion of any Surveys for Toluna and its clients create any agency, partnership or employment relationship, and that your completion of Surveys is strictly as an independent contractor. You also agree the Points or other incentives you receive for completing Surveys are the only compensation you will receive for your completion of Surveys.</p>
<h3>Member Code of Conduct:</h3>
<p>Toluna is an online community dedicated to making your voice heard and allowing you to tell leading providers of products and services what you think. When you use and post content to the Toluna Site or our community we ask that you observe the following rules:</p>
<ul>
<li>Be courteous and respect the opinions of others and behave in a manner that supports a safe and comfortable environment for all members.</li>
<li>Do not post any of the following:
<ul>
<li>Personal information (including any financial information).</li>
<li>Material that advocates illegal activity or political, religious or ideological beliefs.</li>
<li>Personal attacks or anything (including "jokes" that may be misconstrued) obscene, vulgar, illegal, harmful, insulting, threatening, abusive, harassing, defamatory, libelous, untrue, misleading or invasive of someone else's privacy.</li>
<li>Advertising and solicitations - Do not use any community areas to buy or solicit for goods, services, or money, or to advertise or sell products or services to others. For example, do not post any advertising, referrals, promotional materials, junk mail, "spam", chain letters, pyramid schemes or any other form of solicitation.</li>
<li>Any content that infringes any patent, copyright, trademark, trade secret or other intellectual property right of another.</li>
<li>Any statement that expresses or implies that any actions you take are endorsed by Toluna or our clients.</li>
</ul>
</li>
<li>Do not take any Survey other than in good faith, such as providing false answers or speeding through a Survey or answering each question the same way. Toluna reserves the right to withhold awarding Points to you if, in Toluna's reasonable view, your Survey responses are untruthful or not well considered.</li>
<li>Do not access or use any part of the Site for anything other than your personal, non-commercial use.</li>
<li>Do not access or use any part of the Site in any way that may violate any applicable local, or international law, regulation, or other governmental requirement and/or regulation, treaty or tariff.</li>
<li>Do not resell, barter, trade or otherwise attempt to generate income by providing access to your Toluna Points to others.</li>
<li>Do not impersonate any individual or entity, including, without limitation, a Toluna employee, agent or client, or other Toluna members or otherwise misrepresent your affiliation with any person or entity, including by "framing" any portion of this Site to make it look like you have a relationship with us or that we have endorsed you for any purpose.</li>
<li>Do not publish or make reference in any media to any Survey or Site content without our prior written permission.</li>
<li>Do not collect or store any personal information about other members.</li>
<li>Do not attempt to access any service or area of the Site that you are not authorized to access.</li>
<li>Do not use any robot, spider, scraper or other automated means or interface not provided by us to access the Site or extract data.</li>
<li>Do not send to or otherwise impact us or this Site (or anything or anyone else) with harmful, illegal, deceptive or disruptive code such as a virus, "spyware", "adware" or other code that could adversely impact this Site or any recipient or take any action, such as a denial of service attack, that might impose a significant burden on this Site's infrastructure or interfere with the ordinary operation of this Site.</li>
<li>Do not re-post on the Site any statements you receive from the Toluna help desk.</li>
<li>Do not communicate with the Toluna help desk in a manner which is obscene, vulgar, harmful, insulting, threatening, abusive, harassing, defamatory, libelous, untrue or misleading.</li>
<li>Do not engage in any other activity that the Company reasonably deems improper or abusive.</li>
</ul>
<p>Failure to comply with this Code of Conduct may result in termination of your membership account and forfeiture of any Points.</p>
<h3>Confidentiality of Surveys</h3>
<p>Toluna’s clients may disclose confidential and/or proprietary information and materials to you as part of Surveys, and such information and materials shall remain the sole and exclusive property of its owner. This confidential information may include, but is not limited to, new product ideas or concepts, packaging concepts, advertising and movie or television concepts or trailers, and the text, visual images and sounds related thereto. By becoming a member, you agree that you will keep the contents and materials disclosed to you as part of all Surveys in which you participate confidential and not disclose them to any third party or use the confidential information for any purpose except for the sole purpose of completing the Survey. If you breach this obligation, in addition to forfeiture of your Points and termination of your account, you may be liable for monetary damages to Toluna and/or our client for damages caused by the result of your breach.</p>
<h3>Member Content and License</h3>
<p>You hereby give a non-exclusive, perpetual, unlimited, worldwide, royalty-free licence to Toluna to use for any purpose any content you submit to this Site, including the right to edit, copy, transmit, publish, display, modify, distribute, create derivative works from and develop such content and to transfer such content to third parties. You, not Toluna, will have sole responsibility and liability for all content you use, upload, post or submit to the Site, including on our message boards and in any Survey in which you participate, including the obligation to obtain any necessary approvals and authorizations required to post such content.</p>
<h3>Toluna Points</h3>
<p>What are Points?</p>
<p>Toluna values our members’ opinions, and to show our appreciation, Toluna offers incentives in the form of credits called “Points,” which are credited to your account maintained by Toluna. Points are redeemable for cash, prizes or entries into sweepstakes as specified and subject to the terms below.</p>
<p>Earning Points</p>
<p>Points will be credited to your account only through your participation in activities authorised by Toluna, which include, but are not limited to, registration as a panelist, completion of demographic profiles and completion of qualitative or quantitative marketing research activities performed by Toluna, and only in accordance with the specific incentive offer disclosed for each activity.<br><br>Toluna is dedicated to providing quality data to our clients. To ensure this level of quality, please note that you might not qualify for all Surveys, in which case, the Survey will close, and you will not receive Points. The reasons you might not qualify include but are not limited to:</p>
<ul>
<li>Your profile not corresponding to our client’s target audience</li>
<li>Discrepancy in logical suite of responses</li>
<li>Untruthful responses or false answers</li>
<li>Inappropriate or abusive replies&nbsp;</li>
<li>Going too quickly through the questions to properly consider your answers</li>
<li>Lapse in attention leading to failed quality checks</li>
</ul>
<div>You may earn Points as follows:</div>
<ul>
<li>Survey Completion: Earn Points for each Survey you qualify for and complete. Points awarded vary by Survey.</li>
<li>Personal Interest Survey (Profile) Completion: Panelists can earn additional Points by completing the member Profiles. Each completed Profile is worth an additional 100 Points.</li>
</ul>
<p>In addition, you will earn entries to our daily Toluna Millionaire sweepstakes (see official rules below), when you initially join the community as well as when you answer our Surveys with 1 lucky winner a day winning 1,000,000 Points, worth $500 NZD in Points to spend.&nbsp;</p>
<p>The timing of credits for Points or sweepstakes entries depends on the Survey. For some Surveys, credits are applied within a few days; for others, the credits are applied after the Survey has closed.</p>
<p>Toluna will maintain a record of the Points credited to and debited from your account and allow you to check the status of your account online by logging in and checking the "Your Points" tab. Although Toluna makes every effort to ensure that accounts are credited correctly, it is your responsibility to verify that your Points have been credited properly. If you feel the incentive amounts credited to your account are incorrect, you must contact Toluna by email within (sixty) 60 days following our alleged error and explain in full the basis of your dispute, attaching any relevant information which offers evidence of the discrepancy. Upon receipt of your notice, we will investigate your claim and notify you of our decision to adjust or maintain the amount of Points credited to your account, as we deem appropriate, within thirty (30) days. If we need additional time to decide your claim, we will notify you and will endeavor to render a decision as soon as reasonably practicable. Any decision by us with regard to such a claim will be final</p>
<p>Redeeming Points</p>
<p>You can spend your Points at any time by going to the “Rewards Centre” underneath the “Community” tab on the main page. Points are awarded for Survey completion, Profile completion, and other participation on this Site. Points automatically convert to cash values whenever you request a payment or voucher.</p>
<p>Vouchers</p>
<p>If you request a voucher, Toluna will either send the voucher to your postal address or make the voucher code available via electronic means within 8 weeks of your request.<br><br>Electronic vouchers (e-vouchers) will either be sent to your Toluna account, or to the email address within your member profile in your account.&nbsp;<br><br>Please make sure that we have your correct postal and email address to avoid any delays in delivery. &nbsp;<br><br>Where vouchers are returned due to incorrect postal addresses any charges incurred by Toluna may be charged to you.<br><br>Any request to resend a missing voucher must be made within 3 months from when the voucher was originally sent. &nbsp;Toluna will not process any orders after expiry of this 3-month time limit.<br><br>Cash Payment</p>
<p>PayPal requests for cash payment will be credited directly to the PayPal account indicated in your account at the time you place an order. It is your sole responsibility to keep such information current.<br>All rewards are subject to change as may be necessary to comply with applicable laws or regulations and we reserve the right to void vouchers where such laws or regulations dictate that we must do so.<br>&nbsp;</p>
<p>Expiration of Points</p>
<p>When Points are credited to your account they will remain valid for one year and four months (16 months) from the date they are earned. If after this period the Points have not been used, they will automatically expire and be deleted from your account. This deduction will always occur towards the end of the month, usually on the 28th day. For example, if you earned Points on 15 March 2019, they will be removed from your account on 28 July 2020, if they are still in your account. Points cannot be redeemed after the expiration date.</p>
<p>In addition, all of your Points will immediately expire and be forfeited in the event that you cancel your account at Toluna or if your account becomes "inactive." To be an active member means that you have joined Toluna and participated in a Survey or other activity on this Site within 12 months from your initial registration or within the preceding 12 months. Toluna will not provide you with any notice of the cancellation and forfeiture of any of your Points. Toluna reserves the right to amend these cancellation and forfeiture rules in its sole discretion.</p>
<p>Misconduct, Fraud and Correcting Account Errors</p>
<p>Toluna retains the right to monitor all member activity within Toluna Points. If required by law, if you have violated our Code of Conduct above, or in the event that your account shows signs of fraud, abuse or suspicious activity, your member account may be terminated and you may forfeit all accumulated Points. If you have conducted any fraudulent activity, Toluna reserves the right to take any necessary legal action and may have grounds to confiscate any rewards redeemed as a result of such activity. In addition, you may be liable for monetary losses to Toluna, including litigation costs and damages, and you will not be allowed to participate in Toluna Points in the future.</p>
<p>If your account does not accurately reflect your Point balance, Toluna reserves the right to correct such errors. If you have been awarded Points in error or you believe that your member account has been the subject of suspicious activity, please contact Toluna immediately. If it is determined that you have been the victim of fraud, the Points you have earned will be transferred to a new member account.</p>
<p>Transferability</p>
<p>Points have no cash value, and may not be assigned, transferred and/or pledged to any third party. You have no property rights or other legal interests in any Points granted pursuant to the Toluna Points Program.</p>
<p>Program Duration &amp; Changes to Rules</p>
<p>Any revisions to the Points Program may affect your ability to use any Points you accumulate. If the Points Program is terminated or your membership is terminated by Toluna other than as a result of your breach of these Terms, you will only have 30 days from such termination date to redeem all your accumulated Points. If there is a modification to the Points Program, we will endeavor to notify you; however, Toluna will not be responsible if you do not learn of the modification. The rewards offered, and Point levels required for specific rewards are subject to change without notice. All rewards are subject to availability.</p>
<h3>Toluna Intellectual Property</h3>
<p>This Site is protected by intellectual property laws and you agree to respect them. All rights not expressly granted to you are reserved by Toluna or its licensors.</p>
<p>The TOLUNA and TOLUNA INFLUENCERS logos and the marks "TOLUNA", “TOLUNA INFLUENCERS” and "TOLUNA.com" are trademarks or registered trademarks of Toluna or its affiliates. All other trademarks, service marks, logos and trade names used on this Site are the property of Toluna or their respective owners or are owned by third parties but used by Toluna with the owner’s consent. All rights are reserved.</p>
<p>For the purposes of this paragraph, "Content" means (without limitation) all text, design, graphics, images, sound files, animation, video, interfaces, software, code and the selection and arrangement thereof appearing or included from time to time on this Site. All Content on this Site is subject to intellectual property rights, contractual or other protection. The intellectual property rights are owned by us or our licensors. No Content may be copied, distributed, republished, uploaded, posted or transmitted in any way except pursuant to the express provisions of these Terms or with our prior non-electronic consent. Modification or use of the Content for any other purpose may violate intellectual property rights. No right to use the Content is granted to users and all title and/or rights remain with us. This Site is © TOLUNA. All rights reserved.</p>
<h3>Disclaimer of Warranties</h3>
<p>By utilising the Toluna Points Program, you acknowledge and agree that Toluna is not a bank or any other kind or form of financial institution and that "Points" credited to your account are not actual cash deposits, do not earn interest, and are only account entries that entitle you to the amount of the credited Points if you redeem them in accordance with these terms of use. You further agree that you may only redeem the amounts in your account in the manner and according to the procedures described in these terms of use, which we may amend from time to time. Toluna is not responsible for the actions of any third party, such as the issuers of any gift cards, vouchers or other rewards redeemable for Points.</p>
<p>You expressly agree that your use of this Site and the Toluna Points Program is at your sole risk. You agree that this Site, all information on this Site, the services offered by this Site and the Toluna Points Program are provided by Toluna or its corporate parents or affiliates, successors or assigns, suppliers or agents, "AS IS" and "AS AVAILABLE." Toluna is not responsible for typographical errors regardless of source. In addition, Toluna does not represent or warrant that the information accessible on this Site is accurate, complete, or current. You hereby release Toluna and its affiliates and third-party providers from all liability regarding the redemption and use of any rewards, including any rewards that, after receipt, may be lost, stolen or destroyed.</p>
<p>TOLUNA DISCLAIMS ALL WARRANTIES, CONDITIONS AND DUTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING BUT NOT LIMITED TO ANY IMPLIED WARRANTIES, DUTIES OR CONDITIONS: (a) OF MERCHANTABILITY OR SATISFACTORY QUALITY, OF FITNESS FOR A PARTICULAR PURPOSE OR USE, OF RESULTS, AND OF ACCURACY OR COMPLETENESS OR WITH RESPECT TO THE PRIVACY OR SECURITY OF INFORMATION YOU SHARE ON THE SITE WITH OTHER MEMBERS; AND (b) CREATED BY TRADE USAGE, COURSE OF DEALING OR COURSE OF PERFORMANCE.</p>
<p>TOLUNA FURTHER DISCLAIMS ALL DUTIES TO YOU, IF ANY SUCH DUTIES EXIST, INCLUDING BUT NOT LIMITED TO REASONABLE CARE, WORKMANLIKE EFFORT, FREEDOM FROM COMPUTER VIRUS, AND LACK OF NEGLIGENCE. TOLUNA FURTHER MAKES NO WARRANTY IN RESPECT OF YOUR ENJOYMENT OF ANY ASPECT OF THE SITE.</p>
<h3>Limitation of Liability</h3>
<p>TO THE FULLEST EXTENT ALLOWED BY LAW, YOU AGREE THAT NEITHER TOLUNA NOR ANY OF OUR AFFILIATES OR AGENTS WILL BE LIABLE TO YOU AND/OR ANY OTHER PERSON FOR ANY SPECIAL, INCIDENTAL, PUNITIVE, CONSEQUENTIAL OR SIMILAR GENERAL DAMAGES, OR FOR DAMAGES FOR LOST PROFITS, LOSS OR IMPAIRMENT OF PRIVACY, SECURITY OF&nbsp;DATA, FAILURE TO MEET ANY DUTY (INCLUDING BUT NOT LIMITED TO ANY DUTY OF GOOD FAITH, WORKMANLIKE EFFORT OR OF LACK OF NEGLIGENCE), OR FOR ANY OTHER SIMILAR DAMAGES WHATSOEVER THAT ARISE OUT OF OR ARE RELATED TO ANY BREACH OR OTHER ASPECT OF THE ENTIRE AGREEMENT OR THIS SITE, EVEN IF TOLUNA HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES AND EVEN IN THE EVENT OF FAULT, TORT (INCLUDING NEGLIGENCE) OR STRICT OR PRODUCT LIABILITY OR MISREPRESENTATION.</p>
<p>IN NO EVENT SHALL THE LIABILITY OF TOLUNA, ITS CORPORATE PARENTS OR AFFILIATES, SUCCESSORS OR ASSIGNS, SUPPLIERS OR AGENTS EXCEED THE ACTUAL RETAIL VALUE OF AN APPLICABLE REWARD AT ISSUE, OR IF A DISPUTE RELATES GENERALLY TO YOUR USE OF THE POINTS PROGRAM, TO THE FAIR MARKET RETAIL VALUE OF THE REWARDS WHICH YOUR UNUSED, UNEXPIRED, NON-CANCELED POINTS ARE CONVERTIBLE INTO.</p>
<h3>Indemnification</h3>
<p>You agree to indemnify and hold Toluna, and its parent and affiliated companies, together with their officers, directors, owners, employees and agents harmless from any and all claims, losses, damages, suits, fines, levy's and costs (including reasonable attorney's fees and expert witness costs, including costs associated with in-house counsel), (collectively "Claims"), arising from or related to your use of this Site and any content you place on this Site, including Claims made by third parties. You agree that Toluna has the unlimited right to defend any Claim and to settle any Claim without your prior permission. You agree to provide Toluna with all reasonable assistance in the defense of any Claim.</p>
<h3>Cancelling Your Account</h3>
<p>You may cancel your account at any time by contacting Toluna at&nbsp;<a href="https://nz.toluna.com/contactus">https://nz.toluna.com/contactus</a>&nbsp;or by going to “Account” underneath your profile picture and selecting "Unsubscribe Options" on the bottom left hand corner, then completing the process by selecting the option “cancel your account”. Your account will also be cancelled if you withdraw from the Toluna panel. Immediately upon deletion or your withdrawal from the Toluna panel, your account will be closed. You understand and agree that, as noted above, upon closing your account, your right to access the Toluna Points Program will cease and all Points credited to your account at such time, however and whenever accumulated, will be forfeited. Toluna may terminate your account at any time for any reason.</p>
<h3>Tax Liability</h3>
<p>You may be required under local laws to pay taxes on prizes you receive. You acknowledge that we may supply information to taxing agencies, or withhold taxes, at the request of those agencies or as we, in our sole discretion, deem appropriate. You acknowledge and agree that you will provide Toluna with any additional personal information that Toluna needs to comply with any reporting or withholding obligations. Your failure to provide such information within 30 days of a request sent by Toluna to the email address registered at that time may result in the forfeiture of Points or the prizes you may have won.</p>
<h3>Links</h3>
<p>Toluna may provide links to third-party websites as a convenience to you, and Toluna's providing of any link does not constitute an endorsement by such site of Toluna or vice versa. You agree that Toluna is not responsible for examining or evaluating the content or accuracy and Toluna does not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third parties. You agree that you will not use any third-party materials in a manner that would infringe or violate the rights of any other party and that Toluna is not in any way responsible for any such use by you.</p>
<h3>Notices</h3>
<p>Notices to You:&nbsp;We may give you all notices that we are required to give by posting such notices on this Site. You also agree that we may give notice by email in our discretion, including notice of subpoenas or other legal processes (if any). We may provide notice to any email or other address that you provide during registration. You agree to keep your address current and to check for notices posted on the Site.</p>
<p>Notices to Us:&nbsp;We receive many emails and not all employees are trained to deal with every kind of communication, so you agree to send us notice by mailing it to Toluna SAS,5 avenue du château, 94300, Vincennes, France Attn. Panel Team. If a law requires us to accept email notice notwithstanding the foregoing, call us at +33(0)140897100 for our address established for receipt of such notices.</p>
<h3>Entire Agreement; Miscellaneous.</h3>
<p>These Terms, including items incorporated into them (e.g., the&nbsp;<a href="https://nz.toluna.com/Privacy">Privacy Policy</a>), as well as any additional terms or conditions contained on the Site for particular activities, and disclosures provided by us and consents provided by you on the Site (collectively, the "Entire Agreement"), constitute the entire agreement between us and neither party has relied on any representations made by the other that are not expressly set forth in the Entire Agreement. If any provision of the Entire Agreement is found by a court of competent jurisdiction to be invalid, the remaining provisions will remain in full force and effect, provided that the allocation of risks described herein is given effect to the fullest extent possible. Our failure to act with respect to a breach does not waive our right to act with respect to subsequent or similar breaches, and time is of the essence of the Entire Agreement.</p>
<h2>Notice of Copyright Infringement</h2>
<p>Toluna respects the intellectual property rights of others and requests that you do the same. Anyone who believes that their work has been reproduced in this Site in a way constituting copyright infringement may provide a notice to our Group General Counsel containing the following:</p>
<ul>
<li>An electronic or physical signature of the copyright owner or a person authorized to act on behalf of the owner of the copyright;</li>
<li>Identification of the copyrighted work claimed to have been infringed;</li>
<li>Identification of the material that is claimed to be infringing and information reasonably sufficient to permit us to locate the material;</li>
<li>The address, telephone number, and, if available, an e-mail address at which the complaining party may be contacted;</li>
<li>A representation that the complaining party has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law;</li>
<li>A representation that the information in the notice is accurate, and if applicable that the complaining party is authorized to act on behalf of the owner of the right that is allegedly infringed.</li>
</ul>
<p>Copyright infringement claims and notices (but not other notices) should be sent to the attention of General Counsel in the following manner:</p>
<ul>
<li>by post: Toluna UK Limited, Ealing Cross, 85 Uxbridge Road, London W5 5TH &nbsp;Attn. Group General Counsel</li>
<li>by email:&nbsp;<a href="mailto:legal@TOLUNA.com">legal@TOLUNA.com</a></li>
</ul>
<h2>Further Information</h2>
<p>If you have a complaint, you may contact us at Toluna SAS,5 avenue du château, 94300, Vincennes, France.</p>
<h2>Rules for Daily Points&nbsp;Sweepstakes</h2>
<p>Limit and Eligibility:</p>
<p>This contest is open only to legal residents of Argentina, Australia, Austria, Belgium, Brazil, Colombia, Czech Republic, Denmark, Finland, France, Germany, Greece, Hong Kong, Hungary, India, Indonesia, Ireland, Italy, Japan, Malaysia, Mexico, Netherlands, New Zealand, Norway, Poland, Portugal, Russia, Saudi Arabia, Singapore, South Africa, South Korea, Spain, Sweden, Switzerland, Taiwan, Thailand, The Philippines, Turkey, United Kingdom and United States.&nbsp;The contest is open to individuals who are 15&nbsp;years of age or older unless otherwise specified in the invitation.<br><br>To qualify and participate in the draw, members need to have at least one sweepstake entry on the day of the draw.</p>
<ul>
<li>The member receives 1 free ticket after subscribing to the Toluna website</li>
<li>The member will receive bonus tickets for completing some Surveys</li>
<li>The member can exchange 500 Points for a Prize Draw ticket (there is no limit to the number of tickets obtained)</li>
<li>Tickets are only valid during the month of the draw (E.g.: all tickets won in June 2018, are only valid for the daily draws in June 2018)</li>
</ul>
<p>To be admitted, participants are required to have a profile image and must be "active" members:</p>
<ul>
<li>The member must have answered at least 1 Survey in the 30 days preceding the draw</li>
<li>The member must have created content, which includes (but is not limited to) posting topics, polls or commenting in a discussion thread within 30 days prior to the draw.</li>
</ul>
<p>Only one winner will be accepted per household.&nbsp;<br><br>In the event that a winner is under the age of eighteen (18), the prize will be awarded in the name of the winner's parent or legal guardian. Completion and eligibility are determined solely by Toluna.&nbsp;<br><br>Toluna employees, family members of Toluna employees, and Toluna's suppliers, clients, distributors and/or sales agents, affiliates or subsidiaries, promotion, and advertising agencies are not eligible to win.&nbsp;<br><br>No purchase necessary to participate in the contest.&nbsp;<br><br>This contest is void where prohibited.<br><br>This contest is open to all our mobile app users and is not sponsored, authorized or endorsed by Apple or Google.<br>&nbsp;</p>
<p>Winners and Prizes:</p>
<p>Winners will be chosen at random from among all valid entries. The draw will be conducted by the end of every working day. Weekend winners will be announced on Monday along with the winners for that day.</p>
<div>Any applicable taxes in connection with these prizes are the sole responsibility of the prizewinner. Prizes are non-transferable, and no substitutions are allowed.<br><br>To obtain a list of winners, send a self-addressed, stamped envelope to:<br>Sponsor:<br>Toluna SAS<br>5 avenue du Château<br>94300 Vincennes<br>France<br>&nbsp;</div>
<p>Odds of Winning:</p>
<p>Remember the more tickets you have the more chances you have of winning.&nbsp;</p>
<p>Notification and Conditions:</p>
<p>All prizewinners will be notified by email of their winnings within 24 hours after the draw and should receive their Points within 24 hours after notification. Any prizewinner may be required to complete and return an Affidavit of Eligibility and/or a Liability Release to Toluna (if Toluna deems necessary). This will be made clear in the notification email. Toluna must receive this documentation within three weeks of initial notification (by email) or a prizewinner will forfeit their winnings and an alternate winner will be selected by random drawing.</p>
<p>In the event that Toluna needs additional contact information or documentation, the winner will be notified by email, and in some cases, by telephone (if necessary). The winner will be notified no longer than three days after he or she has been chosen. Unless otherwise specified, he or she must confirm and/or correct his or her contact information with a representative of Toluna by the same means in which he or she was notified—by email, and in some cases, by telephone (if necessary). If Toluna requires additional contact information and/or documentation, the winner should expect to receive his or her prize four to six weeks after Toluna receives this information. If all of the contact information and/or documentation that Toluna requires is not received within two business weeks, an alternate winner will be selected by a random drawing.</p>
<p>Release of Liability:</p>
<p>Toluna and any partners and clients affiliated with Surveys are not in any way liable for lost, late, or misdirected entries or for any damage or loss resulting from a) technical errors related to computers, servers, providers, or telephone or network lines; b) printing errors; c) errors in the administration of the sweepstakes or the processing of entries; d) late, lost, or undelivered mail; or e) injury or damage to property which may be caused, directly or indirectly, in whole or in part, from entrant's participation in the sweepstakes or receipt of any prize. Taxes and additional shipping, handling and delivery fees in excess of the prize amount, if any, are the sole responsibility of the prizewinner. By accepting the prize, the winner waives the right to assert as a cost of winning said prize, any and all costs of redemption or travel to redeem said prize and any and all liability that might arise from redeeming or seeking said prize.</p>
<p>Winner also accepts sole responsibility for any miscellaneous costs relating to the acceptance of this prize. Except where prohibited, acceptance of prize constitutes winner's consent to use his or her name, likeness, and biographical data for advertising and promotional purposes without additional compensation. If the winner does not want to authorize the use of his or her name for the likeness of advertising and promotional purposes, he or she must inform Toluna at the time of notification.</p>
<p>Conduct:</p>
<p>Toluna reserves the right, at its sole discretion, to disqualify any individual it finds to be: a) tampering or attempting to tamper with the entry process or the operation of the sweepstakes or any Toluna website; b) violating the Sweepstakes Rules; c) violating the terms of service, conditions of use and/or general rules or guidelines of any Toluna property or service; or d) acting in an unsportsmanlike or disruptive manner, or with intent to annoy, abuse, threaten or harass any other person.<br><br>This sweepstakes is void where prohibited and all applicable local laws and regulations apply.<br><br>Toluna reserves the right to cancel, suspend and/or modify the sweepstakes if fraud, technical failures or any other factors beyond the reasonable control of Toluna may impair the integrity of the sweepstakes. Participants agree to be bound by these Sweepstakes Rules and by the decisions of Toluna, which are final and binding in all respects.</p>
<p>&nbsp;</p>
							</div>
							<div class="policy">
								<div><small>Last updated: 24th September 2018</small><br>&nbsp;</div>
<h2>Toluna Influencers Panel Privacy Notice</h2>
<p>&nbsp;</p>
<h3>Who are we?</h3>
<p>We are Toluna Group Limited, part of the ITWP Acquisitions Limited worldwide group (“We” “Our” “Us” or “Toluna”). You can see who our group members are by clicking on the link below:<br><a href="http://www.toluna-group.com/en-gb/search-results/contact-us-main">http://www.toluna-group.com/en-gb/search-results/contact-us-main</a><br><br>Toluna is an online data collection group focused on providing high-quality market research data to its clients who are in various business sectors, including other market research agencies and other global and corporate clients of all sizes. We also build and maintain large online consumer panels, providing real-time digital consumer insights to our clients via our market research surveys and analytics platforms.&nbsp;</p>
<div>&nbsp;</div>
<h3>What is our Privacy Commitment to you?</h3>
<div>We respect your privacy and are committed to protecting your personal data. This privacy notice describes how we collect, use, share and secure personal data you provide on http://www.toluna.com (our “site”) when you become a member of our influencers panel and participate in surveys and/or research studies that we conduct for and on behalf of our clients (“surveys”). It also explains your privacy rights and how laws that are applicable to you may protect you.<br>[This privacy notice is provided in a layered format, so you can click through to the specific areas set out below. Please also use the Glossary to understand the meaning of some of the terms used in this privacy notice.]</div>
<p>&nbsp;</p>
<h4>Frequently asked questions:</h4>
<div>
<ul>
<li><a>Who are we?</a></li>
<li><a>What is our Privacy Commitment to you?</a></li>
<li><a>What personal data do we collect about you and how do we use your personal data?</a></li>
<li><a>Who do we share your personal data with?</a></li>
<li><a>Do we transfer your personal data to other countries?</a></li>
<li><a>What other ways can you become a member of our influencers panel? – Our mobile app</a></li>
<li><a>What Cookies do we use on our site?</a></li>
<li><a>What other Tracking Technologies do we use for surveys you participate in and for other purposes?</a></li>
<li><a>How do you access your information; use the member services area and/or update, correct or delete your information?</a></li>
<li><a>How do you terminate your influencers panel membership?</a></li>
<li><a>How do you ask a question or make a complaint?</a></li>
<li><a>What is our winner’s policy?</a></li>
<li><a>What security measures do we undertake to protect your personal data?</a></li>
<li><a>How do you opt out from your influencers panel membership?</a></li>
<li><a>What are our data retention and destruction policies?</a></li>
<li><a>Business Transfers</a></li>
<li><a>Links</a></li>
<li><a>Children’s privacy</a></li>
<li><a>Your legal rights if you are in the EEA</a></li>
<li><a>What are the legal bases we rely on when using your personal data?</a></li>
<li><a>Who is the data controller?</a></li>
<li><a>Changes to the privacy notice and your duty to inform us of changes</a></li>
<li><a>Privacy contact details</a></li>
</ul>
</div>
<div>&nbsp;</div>
<p>&nbsp;</p>
<h3>What personal data do we collect about you and how do we use your personal data?</h3>
<div>&nbsp;</div>
<h4>Influencers Panel Members</h4>
<div>When you agree to become a member of our influencers panel (“Member”), you are able to participate in our surveys. We will ask you to complete the registration form on our site or via links displayed on our partners’ websites. &nbsp;As part of your registration, you will provide us with your Identity data and Contact data and we will through your participation in the Surveys obtain certain other data about you, such as; Demographic/Profile data, Technical data, and Pseudonymised data.<br><br>We use your Identity data and Contact data for:<br>&nbsp;</div>
<ul>
<li>
<p>Contacting you&nbsp;for any reason connected with your influencers panel membership;<br>&nbsp;</p>
</li>
<li>
<p>Incentive fulfilment&nbsp;- when you earn incentive points through your participation in the surveys, the points are deposited into your account. When you wish to redeem them, we will use your Identity data and Contact data to send you your rewards.&nbsp;<br>&nbsp;</p>
</li>
<li>
<p>Sending you invitations for your participation in surveys&nbsp;- to ask you if you are interested in participating in our upcoming surveys. &nbsp;We may also make you aware via your online influencers panel membership account of surveys you may be suitable to participate in, based on our knowledge of your personal data</p>
</li>
</ul>
<div><br>We may from time to time ask you to provide us with Special Categories of personal data about yourself for specific surveys and if required by applicable law, we will ask you for your consent before processing such Special Categories of personal data.&nbsp;</div>
<div><br>We use your Demographic/Profile data for matching you with appropriate surveys to see if you qualify for particular surveys and your birth date is automatically updated so that we may ensure we select individuals, based on their age as may be required for the relevant survey.&nbsp;<br>&nbsp;</div>
<h4>Non-members of our Influencers Panel</h4>
<div>If you are not a Member of our influencers panel (“non-member”) but take a survey with us and provide us with your personal data, the only personal data we will preserve about you is your email address, gender, age, zip/postal code, machine ID and IP address. We do this so we may:<br>&nbsp;</div>
<ul>
<li>
<p>contact you if you have won a prize or are entitled to an incentive, in which case, we will collect and maintain such personal data, to the extent required by any applicable law or regulation (e.g. for tax reasons, if applicable);<br>&nbsp;</p>
</li>
<li>
<p>to match you against the survey you are taking; and&nbsp;<br>&nbsp;</p>
</li>
<li>
<p>improve the user experience.&nbsp;<br>&nbsp;</p>
</li>
</ul>
<div>We will not contact you for any other reason.&nbsp;<br>&nbsp;</div>
<h4>Public forums and blogs</h4>
<p>Our website offers publicly accessible blogs or community forums. You should be aware that any information you provide in these areas may be read, collected, and used by others who access them.<br>We display personal testimonials of satisfied customers on our site in addition to other endorsements. With your consent, we may post your testimonial along with your username. If you wish to update or delete your testimonial, you can contact us&nbsp;<a href="https://www.toluna.com/contactus">here</a>.<br><br>You should be aware that any personal data you choose to make public on the site, in the Community area (under a public message on your wall, as an opinion, topic, battle, thumb it, or any other public area or forum) can be read, collected, stored and/or used by other users and could be used to send you unsolicited messages.&nbsp;We strongly discourage you from disclosing any of your personal data in any public forum or community area that you may find on the site and/or providing your personal data as we cannot guarantee that third parties who may collect and process your personal data from those public forums or community areas will keep them secure. Please be aware that we are not responsible for the personal data you choose to submit or make public. In addition, we are not responsible for the content you publicly post on the site that can be found via web-based search engines.&nbsp;<br>Toluna would never ask you to provide your Contact data or Identity data as part of a survey, so please do not transfer such data to a third party as we cannot guarantee the security of such data.<br><br>Personal data, means any information about an individual from which that person can be identified. It does not include data where the identity has been removed (anonymous data).<br><br>We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:<br>&nbsp;</p>
<p>(A)&nbsp;Identity data&nbsp;– name (includes first, last, maiden and married names), date of birth, marital status, gender, panellist id, and username.<br>&nbsp;</p>
<p>(B)&nbsp;Contact data&nbsp;– postal address, email address and telephone number.<br>&nbsp;</p>
<p>(C)&nbsp;Special categories of personal data&nbsp;– ethnic/racial origin, health, genetics, political opinion, religion, sexual orientation and sex life and biometrics (used for ID purposes).&nbsp;<br>&nbsp;</p>
<p>(D)&nbsp;Biometrics&nbsp;means personal data resulting from specific technical processing relating to the physical, physiological, or behavioural characteristics of a natural person, which allow or confirm the unique identification of that natural person, such as facial images or fingerprint data.<br>&nbsp;</p>
<p>(E)&nbsp;Demographic/Profile data&nbsp;- interests, preferences, feedback and survey responses and including, but not limited to; age, marital status, gender, birthday, household size, income, education and employment status.<br>&nbsp;</p>
<p>(F)&nbsp;Technical data&nbsp;includes internet protocol (IP) addresses, login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices you use to access this website.<br>&nbsp;</p>
<p>(G)&nbsp;“Pseudonymised data” is identifiable data as unique identifiers such as panellist ID’s are used, however direct identifiers, such as; name and Contact data are removed.</p>
<p><br>&nbsp;</p>
<h3>Who do we share your personal data with?</h3>
<p>All of the responses we collect from you via our surveys are provided to our clients in aggregate or pseudonymised form. This means that information is provided about groups of individuals and not on an individual level but may include Pseudonymised data. &nbsp;<br><br>Identity data or Contact data about you would only be provided to our clients in specific surveys for the purposes of research and we would never provide such data to our clients unless we have first received your consent and confirmed with them that their use is in accordance with applicable law.<br><br>From time to time we may engage third parties to issue you with cheques or processing the delivery of your rewards and they will need to use your Identity data and Contact data for those purposes. &nbsp;We may also transfer your personal data to third parties for the purposes of those parties providing us or our clients with services such as; data processing or analytics services or to append data they previously collected about you. &nbsp;Such third parties are not allowed to use your personal data for any other reason and we enter into contracts with those third parties to ensure your personal data is kept secure and erased in accordance with our data retention and destruction policies.<br><br>From time to time, Toluna may use third-party software for email list management and email distribution or may use third-party list management providers to match our Members to members of other lists or panels or to validate the accuracy of personal data you provide.&nbsp;<br>Though we make every effort to preserve your privacy, we may be required to disclose your personal data in response to lawful requests by public authorities, including to meet national security or law enforcement requirements; or to comply with a subpoena or other legal process, when we believe in good faith that disclosure is necessary to protect our rights, to protect your safety or the safety of others, to investigate fraud or breaches of our site terms, or to respond to a government request.<br><br>&nbsp;</p>
<h3>Do we transfer your personal data to other countries?</h3>
<p>From time to time your personal data is transferred from an EEA country to a member of the ITWP group of companies and our trusted service providers, which may be located in a country that has not been recognised as providing equivalent protection. Toluna has put in place transfer agreements using the standard model contracts for the transfer of personal data to third parties in non-adequate countries as decreed by the European Commission.&nbsp; See in the attached list of all the ITWP companies:&nbsp;<a href="https://www.toluna-group.com/search-results/contact-us-main">https://www.toluna-group.com/search-results/contact-us-main</a>&nbsp;&nbsp;<br><br>Toluna USA Inc., - The EU-U.S. Privacy Shield Framework<br><br>Our global back-up and hosting service centre is located in the USA. &nbsp;Toluna USA Inc., (“Toluna USA”) is a member of the ITWP group of companies and all data we use are transferred to Toluna USA for those purposes. Toluna USA recognises that the EEA has established strict protections regarding the handling of personal data from the EEA, including requirements to provide adequate protection for such personal data transferred outside of the EEA. Toluna ensures that it provides adequate protection for the processing of certain EEA personal data about all individuals (including about you).&nbsp;<br><br>Toluna USA participates in and has certified its compliance with the EU-US Privacy Shield Framework administered by the U.S. Department of Commerce ("Privacy Shield") in respect of the collection, use and retention (processing) of personal data transferred from the EEA to the U.S.A. &nbsp;<br>Toluna USA is responsible for the processing of personal data it receives, under the Privacy Shield and subsequently transfers to a third party acting as an agent on its behalf. Toluna USA complies with and has certified to the U.S. Department of Commerce that it adheres to the Privacy Shield Principles of Notice, Choice, Security, Data Integrity and Purpose Limitation, Access, and Recourse, Enforcement, Liability and including in particular, the Accountability for Onward Transfers when transferring personal data to its third party service providers and agents. If there is any conflict between the terms of this privacy notice and the Privacy Shield Principles, the Privacy Shield Principles shall govern. &nbsp;To learn more about the Privacy Shield framework and view the Toluna USA certification, please visit&nbsp;<a href="https://www.privacyshield.gov/list">https://www.privacyshield.gov/list</a>.<br><br>For purposes of enforcing compliance with the Privacy Shield, Toluna is subject to the investigatory and enforcement authority of the US Federal Trade Commission. For more information about the Privacy Shield, see the US Department of Commerce's Privacy Shield website located at&nbsp;<a href="https://www.privacyshield.gov/">https://www.privacyshield.gov</a>. In certain circumstances, we may be required to disclose personal data in response to lawful requests by public authorities, including to meet national security or law enforcement requirements.<br><br>In compliance with the Privacy Shield Principles, Toluna USA commits to resolve complaints about its collection or use of your personal data. EEA individuals with enquiries or complaints regarding our Privacy Shield policy should first contact the Data Protection Officer via the&nbsp;<a href="https://au.toluna.com/contactus">Contact Us</a>&nbsp;form.<br>You may have the option to select binding arbitration for the resolution of your complaint under certain circumstances, provided you have taken the following steps: (1) raised your complaint directly with Toluna and provided us the opportunity to resolve the issue; (2) made use of the independent dispute resolution mechanism identified under the&nbsp;<a>How do you ask a question or make a complaint?</a>&nbsp;paragraph below; and (3) raised the issue through the relevant data protection authority and allowed the US Department of Commerce an opportunity to resolve the complaint at no cost to you. For more information on binding arbitration, see the US Department of Commerce Privacy Shield Framework: Annex 1 (Binding Arbitration) at&nbsp;<a href="https://www.privacyshield.gov/EU-US-Framework">https://www.privacyshield.gov/EU-US-Framework.</a><br>&nbsp;</p>
<div>&nbsp;</div>
<h3>What other ways can you become a member of our influencers panel? – Our mobile app</h3>
<div>&nbsp;</div>
<h4>Mobile Applications</h4>
<p>You may choose to become a Member by using our mobile application (app). &nbsp;When you download and use our mobile app, we automatically collect system and performance information on the type of device you use, operating system version, device identifier and hardware usage statistics such as CPU, RAM, storage, and app version. We will use the information we collect via our mobile app in accordance with the terms of this Privacy notice and the provisions set out below.<br><br>We send you push notifications from time-to-time in order to notify you about surveys and ask you if you would like to participate in certain marketing research studies in accordance with this Privacy Notice. If you no longer wish to receive these types of communications, you may turn them off at the device level. To ensure you receive proper notifications, we will need to collect certain information about your device such as operating system and user identification information.</p>
<h5>&nbsp;</h5>
<h4>Mobile Analytics</h4>
<p>We use mobile analytics software to allow us to better understand the functionality of our mobile application on your phone. This software may record information such as how often you use the application, the events that occur within the application, aggregated usage, performance data, and where the application was downloaded from. We do not link the information we store within the analytics software to any personally identifiable information you submit within the mobile application.</p>
<h5>&nbsp;</h5>
<h4>Geo Location</h4>
<p>We collect your location-based information for the purpose of calculating user country, so we can route a visitor to the correct country site. We share this information with our third-party service providers and clients for the sole purpose of market research services for our clients and for fraud and quality purposes.</p>
<h5>&nbsp;</h5>
<h4>SMS</h4>
<p>We may make available a service either directly or through third parties by which you can receive messages on your wireless device via short message service ("SMS Service"). Your provider's standard data and messaging rates apply to all SMS correspondence. All charges are billed by and payable to your mobile service provider. You represent that you are the owner or authorised user of the wireless device on which messages will be received and that you are authorised to approve the applicable charges. Personal data obtained from you in connection with this SMS Service may include your Identity data and Contact data, your provider's name, and the date, time, and content of your messages. The use of this information will be in accordance with this Privacy notice. If fees are charged to your wireless account invoice, we may be required to provide your carrier with your Identity data and Contact data in connection therewith. Your wireless carrier and other service providers may also collect data about your wireless device usage, and their practices are governed by their own policies. You acknowledge and agree that the SMS Service is provided via wireless systems which use radios (and other means) to transmit communications over complex networks. We will not be liable for any delays in the receipt of any SMS messages, as delivery is subject to effective transmission from your network operator. SMS message services are provided on an as-is basis. We do not guarantee that your use of the SMS Service will be private or secure, and we are not liable to you for any lack of privacy or security you may experience. You are fully responsible for taking precautions and providing security measures best suited for your situation and intended use of the SMS Service. You can opt-out from this service at any time by going to your&nbsp;<a href="https://www.toluna.com/YourZone">account page</a>&nbsp;and unticking the option “I agree to receive invitations to surveys by SMS” in the Personal Details tab. &nbsp;If available in your country, you may also be able opt out by text by following the instructions given to you in the SMS we send you.</p>
<h5>&nbsp;</h5>
<h4>Single Sign-On</h4>
<p>You can log in to our site using sign-in services such as Facebook Connect or an Open ID provider. These services will authenticate your identity and provide you the option to become a Member. &nbsp;Services like Facebook Connect give you the option to post information about your activities on this site to your profile page to share with others within your network. &nbsp;</p>
<h4><br>Referral</h4>
<p>If you choose to use our referral service to tell a friend about our site, you may pass your unique referral link to your friend and if your friend becomes a Member, we will provide you with Toluna points as a reward.&nbsp;<br><br>&nbsp;</p>
<h3>What Cookies do we use on our site?</h3>
<p>Our site uses cookies to distinguish you from other users of our site&nbsp;and estimates visits and click-throughs for specific campaigns. This helps us to provide you with a good experience when you browse our site and also allows us to improve our site. These cookies expire when your browsing session ends. &nbsp;By continuing to browse the site, you are agreeing to our use of cookies. &nbsp;A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer's hard drive.<br>For detailed information on the cookies we use and the purposes for which we use them. &nbsp;You can see our Cookie policy at&nbsp;<a href="https://uk.toluna.com/cookies">https://www.toluna.com/cookies</a>&nbsp;<br><br>&nbsp;</p>
<h3>What other Tracking Technologies do we use for surveys you participate in and for other purposes?</h3>
<div>&nbsp;</div>
<h4>Other Technologies</h4>
<p>Technologies such as cookies, web beacons/web bugs, scripts, and tags are used by Toluna and its clients, partners, affiliates, or analytics and service providers. These technologies are used in analysing trends, administering the site, tracking users’ movements around the site and the Internet, and to gather demographic information about our user base as a whole. Our clients may combine your survey responses, demographic information, and web surfing behaviour with those of others to produce “aggregated” reports. They may also create scientific reports based upon modelled information. “Modelled information” is data developed based upon demographic and behavioural characteristics (like your gender, age, and websites visited) to predict what people with similar or matching characteristics would watch or buy. We may receive reports based on the use of these technologies by these companies on an individual as well as aggregated basis.<br>We use Local Shared Objects, such as HTML5, to store content information and preferences. We partner with third parties to provide certain features on our site or to display advertising based upon your web browsing activity and we also use HTML5 to collect and store information. Various browsers may offer their own management tools for removing HTML5.&nbsp;</p>
<div>
<div>&nbsp;</div>
Enabled</div>
<h5>&nbsp;</h5>
<p>&nbsp;</p>
<h4>Log Files</h4>
<p>As is true of most websites, we gather certain information automatically and store it in log files. This information may include Internet protocol (IP) addresses, browser type, internet service provider (ISP), referring/exit pages, operating system, date/time stamp, and/or clickstream data. We may combine this automatically collected log information with other information we collect about you. We do this to improve services we offer you, to improve analytics, marketing, and site functionality.</p>
<h4><br>Advertising</h4>
<p>We partner with third parties to either display advertising on our site or to manage our advertising on other sites. Our third-party partners may use technologies such as cookies to gather information about your activities on their site and other sites in order to provide you advertising based on your browsing activities and interests. If you wish to not have this information used for the purpose of serving you interest-based ads, you may opt-out by clicking&nbsp;<a href="https://preferences-mgr.truste.com/">here&nbsp;</a>(or if you are located in the EEA click&nbsp;<a href="http://www.youronlinechoices.eu/">here</a>). Please note this does not opt you out of being served ads. You will continue to receive generic ads.&nbsp;</p>
<h5>&nbsp;</h5>
<h4>Digital Fingerprinting</h4>
<p>In general, digital Fingerprinting technologies assign a unique identifier or "Machine-ID" to a user's computer to identify and track your computer. We will not use digital fingerprinting technology (the “Technology”) to collect your personal data, or track your online activities; and will not disrupt or interfere with the use or control of your computer or alter, modify or change its settings or functionality. Occasionally, in specific market research programs, we will use the Technology to assist our clients in ensuring the integrity of survey results. The Technology will analyse publicly available information and data obtained from your computer's web browser and from other publicly available data points, including the technical settings of your computer, the characteristics of your computer, and its IP Address, to create a unique identifier, which will be assigned to your computer. The unique identifier will be an alpha-numeric ID In order to assist our clients in protecting and ensuring the integrity of survey results, we may; (a) link or associate your unique identifier to you and any of your personal data; (b) share your unique identifier with our clients and with other sample or panel providers; and (c) receive or obtain a unique identifier linked to you from a third party, including without limitation a sample or panel provider or our client, however we will only provide such information to any third parties (including our clients) on an aggregated and anonymised or pseudonymised basis. In addition, any unique identifier(s) received or obtained by us and linked to you will be protected in accordance with this privacy notice and if required by law, we will ask for your consent in advance.<br><br>We shall do everything we can to ensure that the Technology is safe, secure and does not cause undue privacy or data security risks and we shall use and distribute the Technology in a professional and ethical manner and in accordance with (a) this privacy notice, (b) any other statements and/or disclosures made by us to you and (c) applicable laws and market research codes of practice.<br>In the event that we discover or learn of any unethical conduct in connection with the use of the Technology, or that the Technology is being used in a manner that is inconsistent with the statements and/or disclosures made by us to you or is in breach of applicable laws and the market research codes of conduct, we will take immediate action to prohibit such unethical conduct and to ensure the proper administration of the Technology.</p>
<h5>&nbsp;</h5>
<h4>Social Media Widgets</h4>
<p>Our site includes Social Media Features, such as the Facebook Like button (and Widgets, such as the Share This Button or interactive mini-programs that run on our site). These Features may collect your IP address; which page you are visiting on our site; and may set a cookie to enable the Feature to function properly. Social Media Features and Widgets are either hosted by a third party or hosted directly on our site. Your interactions with these Features are governed by the privacy notice of the company providing it.<br>&nbsp;</p>
<h3><br>How do you access your information; use the member services area and/or update, correct or delete your information?</h3>
<p>Upon request, Toluna will provide you with information about whether we hold any of your personal data. &nbsp;If you are based in the EEA, you should refer to the section entitled&nbsp;<a>Your legal rights if you are in the EEA</a>&nbsp;to understand more about your rights. &nbsp;You may access, correct, or request deletion of your personal data, or terminate your membership by logging into your Member Account. By following the appropriate directions, your information should be automatically updated in our database. For these purposes, and if you are unable to correct your personal data yourself via the&nbsp;<a href="https://www.toluna.com/YourZone">Account</a>, you may write to us at the postal address found at the end of this Privacy Notice, or contact us&nbsp;<a href="https://www.toluna.com/contactus">here</a>. We will respond to all requests within a reasonable timeframe.<br>&nbsp;</p>
<h3><br>How do you terminate your influencers panel membership?</h3>
<p>If you are a Member and terminate your membership, we will no longer use your personal data for any purposes, but in accordance with our backup procedures, we will retain your personal data until your personal data is eventually destroyed in accordance with our policies and we will continue to employ the security procedures and technologies to keep your personal data safe.<br>&nbsp;</p>
<h3><br>How do you ask a question or make a complaint?</h3>
<p>You can direct any questions or complaints about the use or disclosure of your personal data to our&nbsp;<a>Privacy Contact</a>. We will investigate and attempt to resolve any complaints or disputes regarding the use or disclosure of your personal data within 30 days of receiving your complaint.&nbsp;<br>If you are based outside the EEA and have an unresolved privacy or data use concern that we have not addressed satisfactorily, please contact our U.S.-based third-party dispute resolution provider (free of charge) at&nbsp;<a href="https://feedback-form.truste.com/watchdog/request">https://feedback-form.truste.com/watchdog/request</a>. Under certain conditions, more fully described on the Privacy Shield website [<a href="https://www.privacyshield.gov/article?id=How-to-Submit-a-Complaint">https://www.privacyshield.gov/article?id=How-to-Submit-a-Complaint</a>], you may invoke binding arbitration when other dispute resolution procedures have been exhausted.&nbsp;<br><br>If you are based in the EEA and have an unresolved privacy or data use concern that we have not addressed satisfactorily, then please refer to your rights to make a complaint under the section entitled&nbsp;<a>Your legal rights if you are in the EEA</a>.</p>
<h3><br>What is our winner’s policy?</h3>
<p>Members and others who take our surveys are randomly selected to win prizes for participation in surveys, polls, and other promotions. All winners are notified by email of their winnings. For more information, please visit our&nbsp;<a href="https://www.toluna.com/terms">Terms and Conditions</a>&nbsp;page. Cash and other prizes awarded to non-members will be awarded directly. Toluna shall post the usernames of winners on our site and on our own blogs and newsletters.<br>&nbsp;</p>
<h3><br>What security measures do we undertake to protect your personal data?</h3>
<p>We have put in place appropriate security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know. They will only process your personal data on our instructions and they are subject to a duty of confidentiality.&nbsp;<br><br>We have put in place procedures to deal with any suspected personal data breach and will notify you and any applicable regulatory or supervisory authority of a breach where we are legally required to do so.<br>&nbsp;</p>
<h3><br>How do you opt out from your influencers panel membership?</h3>
<p>If you choose to end your membership with Toluna or to require us to cease processing your personal data, you may discontinue your membership by going to “Account” and selecting “Unsubscribe Options” on the bottom left-hand corner, then “<a href="https://www.toluna.com/Home/Unsubscribe">Cancel your account</a>”. By following the appropriate directions, your record will be marked as "do not contact", and you will no longer receive invites to participate in future Surveys from Toluna. In addition, you will forfeit any incentive balance that has not been requested as of the time you opt out. In most cases it will take 2 to 3 days to process this change, but please allow up to two full weeks for your status to be finalised. In the meantime, you may receive emails from us. As an alternative, you may send an email directly using the&nbsp;<a href="https://www.toluna.com/contactus">Contact us</a>&nbsp;com requesting to be removed. Email links are provided on the site so that you may contact us directly with any questions or concerns you may have. Each email we receive is read and responded to individually; please allow two to three business days for us to get back to you.</p>
<h3><br><br>What are our data retention and destruction policies?</h3>
<div>&nbsp;</div>
<h5>How long will you use my personal data for?</h5>
<p>We will only retain your personal data for as long as necessary to fulfil the purposes we collected it for, including for the purposes of satisfying any legal, accounting, or reporting requirements.<br><br>To determine the appropriate retention period for personal data, we consider the amount, nature, and sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your personal data, the purposes for which we process your personal data and whether we can achieve those purposes through other means, and the applicable legal requirements.<br><br>If you are a citizen or resident of the EEA, or we are processing your personal data in the EEA, in some circumstances you can ask us to delete your data: see the section entitled&nbsp;<a>Your legal rights if you are in the EEA</a>&nbsp;below for further information.<br><br>As the results of the surveys and other aggregated or Pseudonymised data are used for research and/or statistical purposes, we and our clients or other third parties may use this information in accordance with the terms indefinitely without further notice to you.&nbsp;</p>
<p>&nbsp;</p>
<h3>Business Transfers</h3>
<p>As we continue to develop our business, we might sell or buy additional assets. In such transactions, Toluna's right to contact you as a Member and the information you have voluntarily provided in your user profile would generally be one of the transferred business assets. Any sale or transfer of Toluna or substantially all of its business assets, which included our influencer panel, would be to an entity that agreed to comply with all of the material terms of our privacy notice. You will be notified via email and/or a prominent notice on our site of any change in ownership.<br>&nbsp;</p>
<p>&nbsp;</p>
<h3>Links</h3>
<p>From time to time we may offer visitors the ability to voluntarily link to other sites. Toluna does not review, and is not responsible for, the content or effect of the privacy policies of these sites. &nbsp;<br><br>&nbsp;</p>
<h3>Children’s privacy</h3>
<p>Toluna will not knowingly collect any information from any child under the age of 16 without permission from his/her parents, legal guardian or an adult responsible for the care of the child. Eligible ‘young people’ (individuals aged between 16 and 17) may be invited to participate in our Teens panel from time to time. We comply with COPPA, the EU “Safer Internet programme”, the General Data Protection Regulations and the ESOMAR guidelines in relation to surveys concerning children and young people.&nbsp;<br><br>&nbsp;</p>
<h3>Your legal rights if you are in the EEA</h3>
<p>If you have signed up with a Toluna company that is located in Europe or you are a resident or citizen of a country in the EEA, you have rights under data protection laws in relation to your personal data. If you wish to exercise any of the rights set out above, please contact us.&nbsp;<br>You have the right to:<br>&nbsp;</p>
<ul>
<li>
<p>request access&nbsp;to your personal data and we may conduct ID checks before we can respond to your request.<br>&nbsp;</p>
</li>
<li>
<p>have your personal data erased, corrected or restricted&nbsp;if it is inaccurate or requires updating. You may also have the right under certain circumstances to request deletion of your personal data; however, this is not always possible due to legal requirements and other obligations and factors. You can update your account information via your Account or by contacting us at the address given below.<br>&nbsp;</p>
</li>
<li>
<p>object to the processing your personal data&nbsp;if we are not using your personal data for the purposes set out in this privacy policy.<br>&nbsp;</p>
</li>
<li>
<p>have your personal data transferred to you or to a third party from 25th May 2018. We will provide to you, or a third party you have chosen, your personal data in a structured, commonly used, machine-readable format. Note that this right only applies to automated information which you initially provided consent for us to use or where we used the information to perform a contract with you.&nbsp;<br>&nbsp;</p>
</li>
<li>
<p>make a complaint at any time to a data protection regulator.&nbsp;A list of National Data Protection Authorities can be found here:&nbsp;<a href="http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm">http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>. We would, however, appreciate the chance to deal with your concerns before you approach the data protection regulator so please contact us in the first instance.</p>
</li>
</ul>
<p><br>&nbsp;</p>
<h3>What are the legal bases we rely on when using your personal data?</h3>
<p>The law on data protection in the EEA sets out a number of different reasons for which a company that is processing personal data may collect and process such personal data, including:<br>&nbsp;</p>
<ul>
<li>
<p>Consent&nbsp;– In certain cases, we collect and process your personal data with your consent e.g. when you participate in surveys, we will ask you if you wish to participate.<br>&nbsp;</p>
</li>
<li>
<p>Contractual obligations&nbsp;– In some circumstances, we need to process your personal data to comply with a contractual obligation e.g. when we use your personal data to send you your rewards.<br>&nbsp;</p>
</li>
<li>
<p>Legal compliance&nbsp;– If the law requires us to, we may need to collect and process your personal data in response to lawful requests by public authorities or if e.g. we believe in good faith that disclosure is necessary to protect our rights, to protect your safety or the safety of others, to investigate fraud or breaches of our site terms, or to respond to a government request.<br>&nbsp;</p>
</li>
<li>
<p>Legitimate interest&nbsp;– means the interest of our business in conducting and managing our business to enable us to give you the best service/product and the best and most secure experience. We make sure we consider and balance any potential impact on you (both positive and negative) and your rights before we process your personal data for our legitimate interests. We do not use your personal data for activities where our interests are overridden by the impact on you (unless we have your consent or are otherwise required or permitted to by law).</p>
</li>
</ul>
<h3><br>Who is the data controller?</h3>
<p>The Toluna company with whom you registered with as a Member is the controller and responsible for your personal data.<br><br>We have appointed a data protection officer (DPO) who is responsible for overseeing questions in relation to this privacy notice. If you have any questions about this privacy notice, including any requests to exercise your legal rights, please contact the DPO using the details set out below.&nbsp;<br><br>&nbsp;</p>
<h3>Changes to the privacy notice and your duty to inform us of changes</h3>
<p>This version was last updated on the date at the top of this privacy policy.<br><br>If we decide to change our privacy notice, we will post those changes to this privacy statement on the homepage, or other places we deem appropriate so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we disclose it.<br><br>We reserve the right to modify this privacy statement at any time, so please review it frequently. If we make material changes to this policy, we will notify you here, by email, or by means of a notice on our home page prior to the change becoming effective.<br><br>It is important that the personal data we hold about you is accurate and current. Please keep your Account details updated if your personal data changes during your relationship with us.<br><br>&nbsp;</p>
<h3>Privacy contact details</h3>
<p>You may contact us by writing to:<br><br>The Data Protection Officer<br>Toluna SAS<br>5, avenue du Château<br>94300 Vincennes<br>France</p>
							</div>
						</div>
										<div class="row justify-content-center">
						<div class="col-md-4">
							<button data-action="select-all" type="button" class="btn btn-primary btn-gold btn-block mb-4" data-selectall="Select all" data-selectedall="Selected all">Select all</button>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-4">
							<input id="submit-btn" class="btn btn-primary btn-block disableonclick" type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer text-center">
	<div class="container">
		
		<div class="row">
			<div class="col-12 copyright">
				<ul>
					<li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
					<li><a href="privacy-policy.html">Privacy Policy</a></li>
				</ul>
				
				
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="panelModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$('body').on('click touch', '[data-action="open-terms"]', function() {
		panelModal("Terms & Conditions", $(this).parents('.panel').find('.terms').html());
	});

	$('body').on('click touch', '[data-action="open-policy"]', function() {
		panelModal('Privacy Policy', $(this).parents('.panel').find('.policy').html());
	});

	$('body').on('submit', 'form', function() {

		var panelselected = false;

		$('[name="panels[]"]').each(function() {

			if ($(this).is(':checked')) {
				panelselected = true;
			}

		});

		if ($('.panel .select-panel.selected').length == 0 || panelselected == false) {
			alert('You must select at least one company.');
			return false;
		}

	});

});

const panelModal = (title, content) => {

	const modal = $('#panelModal');

	$('.modal-title', modal).text(title);
	$('.modal-body', modal).html(content);

	modal.modal('show');

}
</script>

<style>.tb_button {padding:1px;cursor:pointer;border-right: 1px solid #8b8b8b;border-left: 1px solid #FFF;border-bottom: 1px solid #fff;}.tb_button.hover {borer:2px outset #def; background-color: #f8f8f8 !important;}.ws_toolbar {z-index:100000} .ws_toolbar .ws_tb_btn {cursor:pointer;border:1px solid #555;padding:3px}   .tb_highlight{background-color:yellow} .tb_hide {visibility:hidden} .ws_toolbar img {padding:2px;margin:0px}</style></body></html>