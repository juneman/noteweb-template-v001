<?php
include ("header.php");
?>

<?php
include ("top-bar.php");
?>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="page-content">

			<div class="caf-navbar">
				<div class="caf-navbar-inner">
					<ul class="unstyled caf-nav">
						<li>
							<a href="/home.php"><i class="icon-home "></i>&nbsp;Home</a>
						</li>
						<li >
							<a href="/plan.php"><i class="icon-tasks  "></i>&nbsp;Plans</a>
						</li>
						<li class="active">
							<a href="/page.php"><i class="icon-paper-clip "></i>&nbsp;Pages</a>
						</li>
						<li>
							<a href="/circle"><i class="icon-group "></i>&nbsp;Circles</a>
						</li>
						<li>
							<a href="/ask"><i class="icon-question-sign "></i>&nbsp;Asks</a>
						</li>

						<li class="pull-right">
							<div class="caf-nav-search-bar">
								<span class="input-icon">
									<input type="search" class="input-large nav-search-input" placeholder="Seraching ..." />
									<i class="icon-search nav-search-icon"></i> </span>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

</div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="page-content">
			<div class="content-body span8">

				<div class="user-post-content">
					<div class="user-post-main">
						<label for="post-content"><i class="icon-edit"></i> Post a comment</label>
						<textarea class="span12 limited" id="post-content" data-maxlength="350" maxlength="350" placeholder="Post your comments ..."></textarea>
					</div>
					<div class="user-post-action">
						<button class="btn btn-mini btn-primary  pull-right" >
							<i class="icon-ok bigger-110"></i>
							Submit
						</button>
					</div>
				</div>

				<div class="filter-wrap">
					<div class="filter-category">
						<ul class="unstyled">
							<li>
								<a href="#">我关注的</a>
							</li>

							<li>
								<a href="#">和我有关</a>
							</li>

							<li class="active">
								<a href="#">最新</a>
							</li>

							<li>
								<a href="#">所有</a>
							</li>
							<li>
								<a href="#">单词</a>
							</li>
							<li>
								<a href="#">短语</a>
							</li>
							<li>
								<a href="#">句式</a>
							</li>
							<li>
								<a href="#">文章</a>
							</li>
							<li>
								<a href="#">书籍</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="space-20"></div>

				<div class="caf-pages" id="my-tracking">

					<div class="page-item page-item-word">
						<div class="comments">
							<div class="itemdiv commentdiv">
								<div class="user tooltip-info" data-rel="tooltip" data-placement="bottom"
								title="" data-original-title="Ding Dong Dong" id="user-avatar-">
									<a href="/user/1213"><img alt="Ding Dong Dong's Avatar" src="/assets/avatars/avatar.png"></a>
								</div>

								<div class="body">
									<div class="name">
										<a href="/words/14434" class="blue inline">Hello</a>
										<span> <small class="light-grey">单词相关用法</small> </span>
										<span> <small class="light-grey">所属: 四级</small> </span>
									</div>

									<div class="text">
										Hello 表示打招呼,nihao,,,,,,
									</div>

									<div class="info ">
										<span class="smaller light-grey">2012年09月22日</span>
										<div class="vspace-20"></div>
										<span class="smaller light-grey"></span>
										<div class="vspace-20"></div>
										<span class="smaller light-grey"></span>

										<div class="page-item-tools pull-right">
											<button class="btn btn-minier btn-info tooltip-info" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Sharing to friends">
												<i class="icon-only icon-share-alt "></i> +3
											</button>
											<button class="btn btn-minier btn-success tooltip-success" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Posting comment">
												<i class="icon-only icon-comments-alt "></i> +3
											</button>
											<button class="btn btn-minier btn-primary tooltip-info" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Like">
												<i class="icon-only icon-thumbs-up "></i> +55</a>
												<button class="btn btn-minier btn-pink tooltip-inner" data-rel="tooltip" data-placement="top"
												title="" data-original-title="Dont like">
													<i class="icon-only icon-thumbs-down "></i> -12
												</button>
												<button class="btn btn-minier btn-danger tooltip-error" data-rel="tooltip" data-placement="top"
												title="" data-original-title="Delete it NOW!">
													<i class="icon-only icon-trash "></i>
												</button>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>

					<div class="page-item page-item-word">
						<div class="comments">
							<div class="itemdiv commentdiv">
								<div class="user tooltip-info" data-rel="tooltip" data-placement="bottom"
								title="" data-original-title="Ding Dong Dong" id="user-avatar-">
									<a href="/user/1213"><img alt="Ding Dong Dong's Avatar" src="/assets/avatars/avatar.png"></a>
								</div>

								<div class="body">
									<div class="name">
										<a href="/words/14434" class="blue inline">World</a>
										<span> <small class="light-grey">单词相关用法</small> </span>
										<span> <small class="light-grey">所属: 四级</small> </span>
									</div>

									<div class="text">
										World 世界
									</div>

									<div class="info ">
										<span class="smaller light-grey">2012年09月22日</span>
										<div class="vspace-20"></div>
										<span class="smaller light-grey"></span>
										<div class="vspace-20"></div>
										<span class="smaller light-grey"></span>

										<div class="page-item-tools pull-right">
											<button class="btn btn-minier btn-info tooltip-info" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Sharing to friends">
												<i class="icon-only icon-share-alt "></i> +3
											</button>
											<button class="btn btn-minier btn-success tooltip-success" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Posting comment">
												<i class="icon-only icon-comments-alt "></i> +3
											</button>
											<button class="btn btn-minier btn-primary tooltip-info" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Like">
												<i class="icon-only icon-thumbs-up "></i> +55
											</button>
											<button class="btn btn-minier btn-pink tooltip-inner" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Dont like">
												<i class="icon-only icon-thumbs-down "></i> -12
											</button>
											<button class="disabled btn btn-minier btn-danger tooltip-error" data-rel="tooltip" data-placement="top"
											title="" data-original-title="Delete it NOW!">
												<i class="icon-only icon-trash"></i>
											</button>
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

</div>

<a href="#" id="scroll-up-btn" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a>

<?php
include ("footer.php");
?>