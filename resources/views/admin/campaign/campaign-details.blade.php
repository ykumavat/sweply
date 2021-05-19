<?php
	//print_r($data);
	//die();
?>
<style>
	.hide{display:none!important;}
</style>
@extends('admin.layout.master')     
@section('main_content')
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="preview-ad-section ad-prive-details-bx-main">
            <div class="breadcrem-section">
                <h2>Snapchat Ad Details</h2>
                <div class="brea-bx">
                    <ul>
                        <li><a href="#">Home <i class="fal fa-angle-right"></i></a></li>                        
                        <li><a href="#">Snapchat </a></li>                       
                    </ul>
                </div>
                <div class="clearfix"></div>               
            </div>
			<div class="ad-prive-bx ad-prive-details-bx">
				<div class="row">
					<div class="col-sm-8 col-md-8 col-lg-8">
						<ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Ads Information</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="true">Ads Media</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab" aria-controls="messages-just" aria-selected="false">Ads Budget</a> 
							</li>						
						</ul>

						<!-- Tab panes -->
						<div class="tab-content pt-1">
							<div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
								<div class="row">
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												User Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Email
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['email']: '-'; ?>
												
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Mobile Number
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_user'])? $data['get_user']['contact_number']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Business Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['get_business'])? $data['get_business']['business_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Camping Name
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_name'])? $data['campaign_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Campgain target
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_target'])? $data['campaign_target']: '-'; 
												$web = $app = 'hide';
													if($data['campaign_target'] != 'Visit Website'){
														$web = 'hide';
													}else if($data['campaign_target'] != 'App install'){
														$app = 'hide';
													}else{
														$web = $app = '';
													}
												?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $web; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												Website Url 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['website'])? $data['website']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												App Name 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['app_name'])? $data['app_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												Android Link 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['android_url'])? $data['android_url']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6 <?php echo $app; ?>">
										<div class="info-main-section">
											<div class="info-main-header">
												iOS Link 
											</div>
											<div class="info-main-content">
												<?php echo isset($data['ios_url'])? $data['ios_url']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Upload Type
											</div>
											<div class="info-main-content">
												<?php echo isset($data['upload_type'])? $data['upload_type']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>					
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Heading
											</div>
											<div class="info-main-content">
												<?php echo isset($data['heading'])? $data['heading']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Brand Name
											</div>
											<div class="info-main-content">
												
												<?php echo isset($data['brand_name'])? $data['brand_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Caption
											</div>
											<div class="info-main-content">
												<?php echo isset($data['brand_name'])? $data['brand_name']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Call to action Tap
											</div>
											<div class="info-main-content">
												<?php echo isset($data['call_to_action'])? $data['call_to_action']: '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Gender
											</div>
											<div class="info-main-content">
												<?php echo isset($data['gender'])? $data['gender']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Age
											</div>
											<div class="info-main-content">
												<?php echo isset($data['age'])? $data['age']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Area of target audience
											</div>
											<div class="info-main-content">
												Riyadh
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Note
											</div>
											<div class="info-main-content">
												<?php echo isset($data['note'])? $data['age']: '-'; ?>	
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Start Date
											</div>
											<div class="info-main-content">
												<?php echo isset($data['start_date'])? date('d-m-Y',strtotime($data['start_date'])): '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												End Date
											</div>
											<div class="info-main-content">
												<?php echo isset($data['end_date'])? date('d-m-Y',strtotime($data['end_date'])): '-'; ?>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Budget
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_budget'])? "SAR ".number_format($data['campaign_budget'],2): '-'; ?> 
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="info-main-section">
											<div class="info-main-header">
												Budget - Daily / Life Time
											</div>
											<div class="info-main-content">
												<?php echo isset($data['campaign_budget_type'])? $data['campaign_budget_type']: '-'; ?> 
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
								<div class="details-uploaded-section">								
									<div class="info-main-section">
										<div class="info-main-header">
											Uploaded Image
										</div>
										<div class="info-main-content">
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['original_image']; ?>">
												</div>
												Original <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button>
											</div>
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['post_image']; ?>">												
												</div>
												Croped <button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button>
											</div>
											<?php 
											if(isset($data['app_icon']) && $data['app_icon']!=""){ ?>
											<div class="uploaded-img-main">
												<div class="uploaded-img">
													<img id="original_file_display" src="<?php echo $data['app_icon']; ?>">
													<button class="uploaded-img-download" Type="button"><i class="fal fa-download"></i></button>
												</div>
												App Icon
											</div>
										<?php } ?>
										</div>
										<div class="clearfix"></div>
									</div>								
								</div>
							</div>
							<div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
								<div class="estamations-from-bx prive-estamations-calculation">
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Estamated Reach</div>
										<div class="reach-click"><i class="feather icon-users"></i><?php echo $data['estimeted_reach']; ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Sub Budget </div>
										<div class="reach-click subtotal"> SAR <?php echo number_format($data['sub_budget'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Service fees </div>
										<div class="reach-click "> SAR <?php echo number_format($data['service_amount'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">VAT 15%</div>
										<div class="reach-click vat_15"> SAR <?php echo number_format($data['vat_amount'],2); ?></div>
										<div class="clearfix"></div>
									</div>
									<div class="Estamations-left-right-bx">
										<div class="reach-people">Total Budget</div>
										<div class="reach-click total_amount"> SAR <?php echo number_format($data['total_budget'],2); ?></div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>						
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="ad-prive-bx preview-ads-mobile" id="preview-section-bx">  
							<img src="<?php echo $data['screen_shot']; ?>" alt="" />
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
    @endsection
    