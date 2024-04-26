<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
	<title>Uena - Admin Dashboard  </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">

	<meta name="keywords" content="	admin dashboard, admin template, administration, analytics, bootstrap, cafe admin, elegant, food, health, kitchen, modern, responsive admin dashboard, restaurant dashboard">
	<meta name="description" content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">

	<meta property="og:title" content="Uena - Admin Dashboard ">
	<meta property="og:description" content="Boost your Restaurant business with Uena Bootstrap 5 HTML Dashboard Template. Our professionally designed admin templates cater specifically to the needs of Food, admin and cafe business, offering visually stunning and functional designs. Choose from a variety of Uena website templates that are perfect for showcasing your menu, promoting your services, and attracting Factory  customers. Partner with DexignZone to create an impressive online presence for your Restaurant. Start driving more traffic and growing your business today">
	<meta property="og:image" content="../social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link class="main-css" href="css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect width="64" height="64" rx="2" fill="#FFF0E4" class="svg-logo-rect"/>
					<path  class="svg-logo-path" d="M31.5785 19.6842C31.5785 22.0351 30.765 26.0526 29.1379 31.7368C27.5109 37.386 26.6973 41 26.6973 42.5789C26.6973 44.1228 27.378 44.8947 28.7395 44.8947C30.1341 44.8947 32.0268 43.8246 34.4176 41.6842C34.5172 39.8947 34.7995 37.7544 35.2644 35.2632C36.659 27.4386 38.3525 21.7719 40.3448 18.2632C42.3372 14.7544 44.6616 13 47.318 13C48.8787 13 50.0409 13.4912 50.8046 14.4737C51.6015 15.4211 52 16.6842 52 18.2632C52 23.2456 48.7791 29.9474 42.3372 38.3684C42.2375 39.7368 42.1877 41.1228 42.1877 42.5263C42.1877 45.4386 42.6526 46.8947 43.5824 46.8947C44.1469 46.8947 44.6284 46.8246 45.0268 46.6842L45.7739 48.6842C43.7152 50.2281 41.6564 51 39.5977 51C36.6092 51 34.8991 49.1579 34.4674 45.4737C30.4828 49.1579 27.0792 51 24.2567 51C22.5632 51 21.1852 50.4561 20.1226 49.3684C19.0932 48.2456 18.5785 46.6316 18.5785 44.5263C18.5785 43.2982 18.9604 41.3158 19.7241 38.5789C20.5211 35.807 20.9859 34.1754 21.1188 33.6842C15.7063 31.3333 13 28.0702 13 23.8947C13 21.0175 14.2618 18.4912 16.7854 16.3158C19.3091 14.1053 22.1149 13 25.2031 13C29.4534 13 31.5785 15.2281 31.5785 19.6842ZM22.0651 29.8947C23.2273 25.614 23.8084 22.4211 23.8084 20.3158C23.8084 18.2105 23.0945 17.1579 21.6667 17.1579C20.272 17.1579 18.9936 17.8246 17.8314 19.1579C16.6692 20.4912 16.0881 21.9649 16.0881 23.5789C16.0881 25.1579 16.6692 26.4912 17.8314 27.5789C18.9936 28.6316 20.4049 29.4035 22.0651 29.8947ZM49.0115 18.1579C49.0115 17.2105 48.6794 16.7368 48.0153 16.7368C46.5543 16.7368 44.8774 22.0702 42.9847 32.7368C44.4789 30.6667 45.857 28.193 47.1188 25.3158C48.3806 22.4035 49.0115 20.0175 49.0115 18.1579Z" fill="#FF720D"/>
				</svg>
				<div class="brand-title">Uena</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="/">
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-end">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="/">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU</div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ms-auto">
												<a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <?php include"components/header.php"; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include"components/sidebar.php"; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-3 col-xxl-4">
						<div class="row">
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div class="separator"></div>
										<div class="me-auto">
											<h4 class="card-title mb-2">Daily Target Income</h4>
											<p class="fs-12 mb-0">Lorem ipsum dolor sit</p>
										</div>
									</div>
									<div class="card-body  text-center">
										<div id="radialChart"></div>
										<h3 class="fs-28 text-black font-w500">$749.56</h3>
										<span class="mb-3 d-block">from $1,000</span>
										<p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
										<a href="post-details.phpss="btn btn-outline-primary">More Details</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-6 col-md-6">
								<div class="card trending-menus">
									<div class="card-header border-0">
										<div class="separator"></div>
										<div class="me-auto">	
											<h4 class="text-black fs-20">Daily Trending Menus</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor</p>
										</div>	
										
									</div>
									<div class="card-body px-0">
										<div class="dz-scroll height500 px-4" id="tredingMenus">
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#1</span>
												<div class="me-auto pe-3">
													<a href="post-details.php class="text-black fs-14 font-w500">Chicken curry special with cucumber</h2></a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-1.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#2</span>
												<div class="me-auto pe-3">
													<a href="post-details.php class="text-black fs-14 font-w500">Italiano Pizza With Garlic</h2></a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-2.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center border-bottom">
												<span class="num">#3</span>
												<div class="me-auto pe-3">
													<a href="post-details.php class="text-black fs-14 font-w500">Watermelon juice with ice</h2></a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-3.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3  tr-row align-items-center border-bottom">
												<span class="num">#4</span>
												<div class="me-auto pe-3">
													<a href="post-details.php class="text-black fs-14 font-w500">Tuna Soup spinach with himalaya salt</h2></a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-4.jpg" alt="/">
											</div>
											<div class="d-flex pb-3 mb-3 tr-row align-items-center">
												<span class="num">#5</span>
												<div class="me-auto pe-3">
													<a href="post-details.php class="text-black fs-14 font-w500">Medium Spicy Spagethi Italiano</h2></a>
													<span class="text-black font-w600 d-inline-block me-3">$5.6 </span> <span class="fs-14">Order 89x</span>
												</div>
												<img src="images/menu/Untitled-5.jpg" alt="/">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-xxl-8">
						<div class="row">
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M3.10333 12.25H4.66666V19.8333C4.66666 20.6069 4.97395 21.3487 5.52093 21.8957C6.06791 22.4427 6.80978 22.75 7.58333 22.75H8.74999C9.52354 22.75 10.2654 22.4427 10.8124 21.8957C11.3594 21.3487 11.6667 20.6069 11.6667 19.8333V12.25H13.23C13.7436 12.25 14.2362 12.0459 14.5994 11.6827C14.9626 11.3195 15.1667 10.8269 15.1667 10.3133C15.1683 9.94246 15.0608 9.57933 14.8575 9.26914L10.4533 2.41498C10.2072 2.03206 9.86883 1.71709 9.4693 1.49895C9.06977 1.28082 8.62186 1.1665 8.16666 1.1665C7.71146 1.1665 7.26355 1.28082 6.86401 1.49895C6.46448 1.71709 6.12613 2.03206 5.87999 2.41498L1.47583 9.26914C1.27256 9.57933 1.16504 9.94246 1.16666 10.3133C1.16666 10.8269 1.3707 11.3195 1.7339 11.6827C2.09709 12.0459 2.58969 12.25 3.10333 12.25Z" fill="#FF720D"/>
												<path d="M24.8966 15.75H23.3333V8.16667C23.3333 7.39312 23.026 6.65125 22.479 6.10427C21.932 5.55729 21.1902 5.25 20.4166 5.25H19.25C18.4764 5.25 17.7346 5.55729 17.1876 6.10427C16.6406 6.65125 16.3333 7.39312 16.3333 8.16667V15.75H14.77C14.5156 15.75 14.2638 15.8001 14.0288 15.8974C13.7939 15.9947 13.5804 16.1374 13.4005 16.3172C13.2207 16.4971 13.078 16.7106 12.9807 16.9455C12.8834 17.1805 12.8333 17.4323 12.8333 17.6867C12.8317 18.0575 12.9392 18.4206 13.1425 18.7308L17.5466 25.585C17.7928 25.9679 18.1311 26.2829 18.5307 26.501C18.9302 26.7192 19.3781 26.8335 19.8333 26.8335C20.2885 26.8335 20.7364 26.7192 21.1359 26.501C21.5355 26.2829 21.8738 25.9679 22.12 25.585L26.5241 18.7308C26.7274 18.4206 26.8349 18.0575 26.8333 17.6867C26.8333 17.4323 26.7832 17.1805 26.6859 16.9455C26.5886 16.7106 26.4459 16.4971 26.2661 16.3172C26.0862 16.1374 25.8727 15.9947 25.6378 15.8974C25.4028 15.8001 25.151 15.75 24.8966 15.75Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">892 <span class="text-success fs-18 font-w500">+2,7%</span></h2>
												<p class="mb-0 text-black font-w500">Orders</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart1" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-6 col-sm-6">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4608 12.0692C17.0158 9.47919 16.835 5.09253 14.0816 2.72419C11.5733 0.56586 7.67079 0.711693 5.32579 3.12086C3.06246 5.44253 2.95163 9.12919 4.87079 11.5442C7.15746 14.4259 11.7716 14.7875 14.4608 12.0692Z" fill="#FF720D"/>
													<path d="M4.08329 26.8334H15.75C17.78 26.8334 18.6958 25.025 18.7191 23.2342C18.7541 20.615 17.7216 17.9259 15.7091 16.1992C12.0866 13.0025 6.55663 13.3409 3.35996 16.9634C1.60996 18.9467 1.16663 21.3559 1.16663 23.9167C1.16663 25.5267 2.47329 26.8334 4.08329 26.8334Z" fill="#FF720D"/>
													<path d="M25.0833 7.58333C25.0891 2.94 19.5999 0.145831 15.8374 2.85833C18.0541 5.6175 18.0541 9.54916 15.8374 12.3083C15.7849 12.3725 16.9983 12.9092 17.0916 12.9442C20.7024 14.4433 25.0774 11.5208 25.0833 7.58333Z" fill="#FF720D"/>
													<path d="M19.25 13.4167C17.8908 13.4167 16.555 13.79 15.3825 14.4842C15.5983 14.3559 16.9808 15.7909 17.15 15.9775C18.8416 17.78 19.8333 20.2592 19.8333 22.75V23.9167C19.8333 24.7508 19.5766 25.5675 19.0983 26.25H23.9166C25.5266 26.25 26.8333 24.9433 26.8333 23.3333C26.8333 21.2625 26.9383 19.2617 25.9175 17.3833C25.0891 15.8609 23.7358 14.6475 22.1375 13.9825C21.2216 13.6092 20.2358 13.4167 19.25 13.4167Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">9,334 <span class="text-danger fs-18 font-w500">-0,5%</span></h2>
												<p class="mb-0 text-black font-w500">Customers</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart2" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-12">
								<div class="card">
									<div class="card-header media border-0 pb-0">
										<div class="media-body d-flex">
											<div class="me-4 mt-1">
												<svg class="card-ico" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M23.9167 10.5H4.08335C2.47252 10.5 1.16669 11.8058 1.16669 13.4167V14.5833C1.16669 16.1942 2.47252 17.5 4.08335 17.5H23.9167C25.5275 17.5 26.8334 16.1942 26.8334 14.5833V13.4167C26.8334 11.8058 25.5275 10.5 23.9167 10.5Z" fill="#FF720D"/>
													<path d="M23.9167 19.8334H4.08335C2.47252 19.8334 1.16669 21.1392 1.16669 22.75V23.9167C1.16669 25.5275 2.47252 26.8334 4.08335 26.8334H23.9167C25.5275 26.8334 26.8334 25.5275 26.8334 23.9167V22.75C26.8334 21.1392 25.5275 19.8334 23.9167 19.8334Z" fill="#FF720D"/>
													<path d="M23.9167 1.16669H4.08335C2.47252 1.16669 1.16669 2.47252 1.16669 4.08335V5.25002C1.16669 6.86085 2.47252 8.16669 4.08335 8.16669H23.9167C25.5275 8.16669 26.8334 6.86085 26.8334 5.25002V4.08335C26.8334 2.47252 25.5275 1.16669 23.9167 1.16669Z" fill="#FF720D"/>
												</svg>
											</div>
											<div>
												<h2 class="text-black fs-32 font-w600 mb-0">524</h2>
												<p class="mb-0 text-black font-w500">Menu</p>
											</div>	
										</div>
									</div>
									<div class="card-body p-0">
										<div id="widgetChart3" class="dashboard-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header pb-0 flex-wrap border-0">
										<div class="separator mb-3"></div>
										<div class="me-auto mb-3">
											<h4 class="text-black fs-20">Customer Map</h4>
											<p class="fs-13 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>	
										
										<div class="d-flex mb-3">
											<div class="custom-control form-check form-switch toggle-switch text-sm-end me-sm-4 me-2">
												<input type="checkbox" class="form-check-input" id="customSwitch11">
												<label class="form-check-label fs-14 text-black" for="customSwitch11">Number</label>
											</div>
											<div class="custom-control form-check form-switch toggle-switch text-sm-end me-sm-4 me-2">
												<input type="checkbox" class="form-check-input" id="customSwitch12">
												<label class="form-check-label fs-14 text-black" for="customSwitch12">Analytics</label>
											</div>
										</div>
										<div class="card-tabs mb-3">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#Monthly" role="tab">
														Monthly	
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link " data-bs-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">
														Today
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content pb-0">
										<div class="tab-pane fade active show" id="Monthly">
											<div id="customerMap" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Weekly">
											<div id="customerMap2" class="customer-chart"></div>
										</div>
										<div class="tab-pane fade" id="Today">
											<div id="customerMap3" class="customer-chart"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 flex-wrap pb-0">
										<div class="d-flex mb-3">
											<div class="separator"></div>
											<div class="me-auto">
												<h4 class="text-black fs-20">Recent Order Request</h4>
												<p class="fs-13 mb-0">Lorem ipsum dolor</p>
											</div>	
										</div>
										<select class="form-control style-1 default-select mb-3">
											<option>Newest</option>
											<option>Oldest</option>
										</select>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table order-request">
												<tbody class="loadmore-content" id="orderRequestContent">
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87" src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.phpet Cheezy Pizza for Kids Meal (Small Size)</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Peter Parkur</h5>
															<p class="mb-0">South Corner st41256 london</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning" href="javascript:void(0);">PENDING</a>
																<div class="dropdown ms-auto">
																	<a class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</a>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87" src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.phpa soup spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">South Corner St.41256 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x3</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-warning" href="javascript:void(0);">PENDING</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87" src="images/card/Untitled-3.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.phpreme Deluxe Pizza Mozarella with Garlic</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success" href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87" src="images/card/Untitled-1.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.phparella Pizza With Random Topping</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Cindy Alexa</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">$8.2</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-light" href="javascript:void(0);">CANCELED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media align-items-center">
																<img class="me-3 " width="87" src="images/card/Untitled-2.jpg" alt="DexignZone">
																<div class="media-body">
																	<h5 class="mt-0 mb-2"><a class="text-black" href="ecom-product-detail.phpa soup spinach with himalaya salt</a></h5>
																	<p class="mb-0 text-primary">#0010235</p>
																</div>
															</div>
														</td>
														<td>
															<h5 class="mb-2 text-black wspace-no">Jimmy Kueai</h5>
															<p class="mb-0">Blue Ocean St.41551 London</p>
														</td>
														<td>
															<div class="d-flex align-items-center justify-content-center">
																<h4 class="mb-0 me-3 fs-20 text-black d-inline-block">$7.4</h4>
																<p class="mb-0 fs-20 d-inline-block">x1</p>
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<a class="btn text-success" href="javascript:void(0);">DELIVERED</a>
																<div class="dropdown ms-auto">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="12" cy="5" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="19" r="2"></circle></g></svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-end">
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Accept order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		Reject order
																		</a>
																		<a class="dropdown-item text-black" href="javascript:void(0);">
																		View Details
																		</a>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="card-footer border-0 pt-0 text-center">
												<a href="javascript:void(0);" class="btn btn-outline-primary dz-load-more" id="orderRequest" rel="ajax/order-request.phpw More</a>
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
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php require("components/footer.php");?>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-2.js"></script>

    <script src="js/custom.min.js"></script>
	
    
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},1000)
			jQuery(window).on('resize',function(){
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
				jQuery('.dz-theme-mode').addClass('active');
			});
		});
	</script>
</body>

</html>