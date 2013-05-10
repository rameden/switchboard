<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>PSU Switchboard</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script src="{$base_url}/js/bootstrap-dropdown.js"></script>
    <script src="{$base_url}/js/chosen.jquery.js"></script>
		<script src="{$base_url}/js/bootstrap-tab.js"></script>
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/main.css" />
    <link rel="stylesheet" type="text/css" href="{$base_url}/css/chosen.css" />
    {* <link rel="stylesheet" type="text/css" href="fixedMenu_style1.css" /> *}
    <link rel="shortcut icon" href="{$base_url}/img/favicon.ico">
<!-- Chosen Script -->
		<script src="{$base_url}/js/behavior.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
		<body>
		{include file='_nav.tpl'}
		<div class="container-fluid">
		<div class="row-fluid">
       	
	<div class="span12">
  	<div class="hero-unit">
  		<div class="hero-unit">
				<div id = "wrapper">
        	<div id="header">
    				<blockquote><h1 class="lead">Switchboard</h1>
    					<small>Plymouth State University</small>
    				</blockquote>
    			</div>       
				 
						<div id="search">    
               <!--creating drop down items-->
               <select data-placeholder="Click to Start Search" class="chzn-select" tabindex="2" style="width:350px;">
               <option value=""></option>  
	
							 {foreach from=$options item=option}
									{foreach from=$option item=op}
										<option value=""></option>
										<optgroup label="{$op["main"]["leading_letter"]}">
										{foreach from=$op["options"] item=ops}
											<option>{$ops->department} {$ops->phone_number}</option>
										{/foreach}
										</optgroup>
									{/foreach}
								{/foreach}							 
								 {*
                 <option value=""></option>
                 <optgroup label="A">
                         <option>Academic Affairs  5-2230</option>
                         <option>Academic Deans 5-3500</option>
                         <option>Accounts Payable 5-2429</option>
                         <option>Admissions 5-2237</option>
                         <option>Advancement/Allumni 5-2589</option>
                         <option>Art Department 5-2201</option>
                         <option>Atmospheric/Science Center 5-2325</option>
                         <option>Athletics/P.E. Center 5-2770</option>
                  </optgroup>
                  
                  <option value=""></option>
                  <optgroup label="B">
                         <option>Bagely Ctr/Career Services 5-2336</option>
                         <option>Belknap Res Hall 5-2283</option>
                         <option>Bookstore 5-2266</option>
                         <option>Bursars Office 5-2215</option>
                         <option>Biology Dept 5-3198</option>
                         <option>Blair Res Hall 5-2878</option>
                         <option>Buisness Dept 5-2610</option>
                         <option>Business Office 5-2989</option>
                    </optgroup>
                    
                    <option value=""></option>
                    <optgroup label="C">
                         <option>Campus Ministry 5-2327</option>
                         <option>Campus Services 5-2462</option>
                         <option>Campus Stores 5-2403</option>
                         <option>Campus Police 5-2330</option>
                         <option>Center for the Environment 5-3179</option>
                         <option>Center for Rural Partnetship 5-3271 </option>
                         <option>Central Reviving Cell # 412-2025</option>
                         <option>Center Lodge/Res North 5-2320</option>
                         <option>Child Dev & Family Center 5-2299</option>
                         <option>Classroom Technology 5-2903 </option>
                         <option>Clock 5-2279</option>
                         <option>Co-Generation Plant 536-4718</option>
                         <option>Collections 5-2462</option>
                         <option>College of Grad Studies 5-2636 </option>
                         <option>COGS Registrar 5-2001</option>
                         <option>Colleges of University Studies 5-2626</option>
                         <option>Communication/Media Studies 5-2867</option>
                         <option>Commintiy Service Ctr 5-3026</option>
                         <option>Computer Science & Tech Dept 5-2533</option>
                         <option>Computer Repair Shop 5-3499 </option>
                         <option>Conference/Special Events 5-2722</option>
                         <option>Copying 5-2268</option>
                         <option>Counseling Center 5-2461</option>
                         <option>Criminal Justice Dept 5-2233</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="D">
                         <option>Dredrup Gallery 5-2614</option>
                         <option>Dept of Elementary ED & Childhood Studies 5-2285</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="E">
                         <option>ELS Language Center 5-2295</option>
                         <option>English Dept 5-2746</option>
                         <option>Environmental Science & Policy 5-3198</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="F">
                         <option>Finance & Administration 5-2746</option>
                         <option>Financial Aid 5-2338 </option>
                         <option>Friends of the Arts 536-1182</option>
                         <option>Frost School of Cont ED 5-2822</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="H">
                    	 <option>Human Resources 5-2250 </option>
                         <option>HUB Fitness Room 5-2956</option>
                         <option>HUB Info Booth 5-2623</option>
                         <option>Health and Human Performace 5-2293</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="I">
                         <option>Ice Arena (Skating Tickets) 5-2758</option>
                         <option>Infirmary (Health Services) 5-2350</option>
                         <option>Institute for NH studies 5-2364</option>
                         <option>Institutional Research 5-3315</option>
                         <option>International Student Services 5-2932</option>
                         <option>I.T.S Buiness Services 5-2342</option>
                         <option> I.T.S Help Desk 5-2929</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="L">
                         <option>Languages & Linguistics 5-2304</option>
												<option>Langdon Woods 5-3297 </option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="M">
                         <option>Mail Center 5-2223</option>
                         <option>Mail (Bulk) 5-2393</option>
                         <option>Mary Lyon Res Hall 5-2557</option>
                         <option>MBA Program 5-3053</option>
                         <option>Math Activities Center 5-2819</option>
                         <option>Math Department 5-2233</option>
                         <option>Music Theater & Dance 5-2334</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="N">
                         <option>Nursing Department 5-2703</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="O">
                         <option>Outdoor Center 5-2622</option>
                         <option>Orientation 5-2376</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="P">
                         <option>Panther Print Shop 5-2273</option>
                         <option>PASS Office 5-2270</option>
                         <option>Payroll 5-2553</option>
                         <option>P.E. Center 5-2770</option>
                         <option>Pemi Res Hall 5-2567</option>
                         <option>Philosophy/History 5-3071</option>
                         <option>Physical Plant/Maintenance 5-2254</option>
                         <option>Provost's Office 5-2230</option>
                         <option>Psychology Department 5-2203</option>
                         <option>Public Relation ( OPR ) 5-2276</option>
                         <option>Purchasing 5-2429</option>
                         <option>President's Office 5-2210 </option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="R">
                         <option>Residential Life 5-2260</option>
                         <option>Registrar 5-2345 </option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="S">
                         <option>Sage Center 5-2387</option>
                         <option>Samuel Reed Hall Res Hall 5-2878</option>
                         <option>Silver Box Office ( Theatre Tickets ) 5-2787</option>
                         <option>Silver Center (House Mgr) 5-2672</option>
                         <option>Small Business Inst. 5-2921</option>
                         <option>Small Business Support Ctr 5-2523</option>
                         <option>Smith Res Hall 5-2354</option>
                         <option>Social Science Department 5-3071</option>
                         <option>Social Work Deptartment/Nursing 5-2703</option>
                         <option>Sodexo 5-2710 ( Dining Services )/option>
                         <option>Sponsored Programs 5-2871</option>
                         <option>Storm Line 5-3535</option>
                         <option>Student Activities 5-3014</option>
                         <option>Student Affairs 5-2206</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="T">
                         <option>Teacher Cert. 5-2224</option>
                         <option>Transcripts 5-2345</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="U">
                         <option>Undergrad Advising 5-3065</option>
                         <option>University Relations 5-2722</option>
                         <option>University Advancement (Alumni) 5-2217</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="V">
                         <option>Veterans Service Ctr. 5-2371</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="W">
                         <option>WPCR Radio Station 5-2242</option>
                         <option>Wellness Center 5-2853</option>
                         <option>Writing Center 5-2831</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="Y">
                         <option>Year Book 5-2236</option>
                         </optgroup>
                         
                    <option value=""></option>
                    <optgroup label="MISC">
                         <option>Concord Campus 223-0625</option>
                         <option>Angela Adams 5-3097</option>
                         <option>Justin L'Italien 5-2813</option>
                         <option>Lisa Dalzell 5-2734</option>
                         <option>New Student Orientation 5-3215</option>
                         <option>Ted Wisniewski 5-2661</option>
                         <option>Museum of White Mtns 5-2646</option>
                         <option>Building and Grounds 5-2254</option>
                         <option>Transcript Info 5-2847</option>          
                	 </optgroup>
									 *}
								</select>
								<br></br>
							</div>
						</div>
					</div> 
				</div> 
<div class="row">
{include file='news.tpl'}
</div>
</html>
	<div id="footer">
		<div class="containerfoot">
        <p class="muted">This site is not endorsed by Plymouth State University 2012-2013</p>
			</div>
		</div>
	</body>			
</html>
