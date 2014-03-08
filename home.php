<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>YYNOTE.COM</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- css -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="assets/bootstrap/css/bootstrap_extend.css" rel="stylesheet" type="text/css">
		<link href="assets/fontawesome/css/font-awesome.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">

		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/default.css" rel="stylesheet" />

		<link href="assets/ace/css/ace-responsive.min.css" rel="stylesheet" />

		<style type="text/css">
			#content, #content span, #editor span, #content div, #editor, #editor div {
				font-family: 'Open Sans', Arial, sans-serif !important;
				font-size: 15px !important;
				font-weight: 300 !important;
				line-height: 1.7em !important;
				color: black !important;
				word-wrap: break-word;
				-webkit-line-break: after-white-space;
			}

			#content, #yy-edit-article-title {
				margin-left: 6px;
			}

		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Fav and touch icons -->
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x57-precomposed.png">
		<link rel="shortcut icon" href="favicon.ico">
	</head>

	<body>

		<div id="yy-wrapper">

			<!-- start header -->
			<header class="yy-header">
				<div class="yy-container">

					<div class="row-fluid">
						<div class="span4">
							<div class="app-logo">
								<a href="/index.php"><strong>YYNOTE.COM</strong></a>
							</div>
						</div>
						<div class="span8">
							<div class="navbar navbar-static-top">
								<div class="navigation">
									<div class="yy-menus">
										<div class="yy-menu-item">
											reading
										</div>
										<div class="yy-menu-item">
											discovery
										</div>
										<div class="yy-menu-item">
											projects
										</div>
										<div class="yy-menu-item">
											SUGGESTIONS
										</div>
									</div>
									<!-- yy-menus -->

									<div class="user-info-box dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white"> <i class="icon-user"></i>&nbsp;&nbsp;coopple</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#"><i class="icon-user"></i>&nbsp;&nbsp;Profile</a>
											</li>
											<li>
												<a href="#"><i class="icon-cog"></i>&nbsp;&nbsp;Setting</a>
											</li>
											<li>
												<a href="#"><i class="icon-signout"></i>&nbsp;&nbsp;Sign out</a>
											</li>
										</ul>
									</div>
									<!-- user-info-box -->

								</div>
							</div>
						</div>

					</div>
				</div>
			</header>
			<!-- end header -->

			<!-- sider -->
			<div class="yy-sidebar">
				<div class="row-fluid">
					<div class="span12">
						<!-- left side menu bar -->
						<div id="left-side-menu-bar" class="pull-left">
							<nav class="yy-side-nav navigation" role="navigation">
								<ul class="unstyled">
									<li class="active" data-section="1">
										<div class="yy-side-nav-menu-item">
											<span><i class="icon-book"></i>Notebooks<i class="icon-caret-down pull-right"></i></span>
										</div>
										<ul class="unstyled yy-side-nav-sub-menus" expand="true">
											<a href="#newNotebookDialog" data-toggle="modal" class="btn btn-link btn-mini btn-block"> <i class="icon-plus"></i>&nbsp;new notebook </a>
											<li class="sub-active">
												<div class="yy-side-nav-sub-menu-item">
													<span>default</span>
												</div>
											</li>
											<li >
												<div class="yy-side-nav-sub-menu-item">
													<span>ideas</span>
												</div>
											</li>
											<li>
												<div class="yy-side-nav-sub-menu-item">
													<span>English</span>
												</div>
											</li>
											<li class="">
												<div class="yy-side-nav-sub-menu-item">
													<span>New Words</span>
												</div>
											</li>
										</ul>
									</li>

									<!-- 	 not support 2013-11-03
									<li data-section="3" class="">
									<div class="yy-side-nav-menu-item">
									<span><i class="icon-heart"></i>Favorites</span>
									</div>
									</li>
									<li data-section="4" class="">
									<div class="yy-side-nav-menu-item">
									<span><i class="icon-group"></i>following</span>
									</div>
									</li>
									<li class="yy-nav-divider"></li>
									<li data-section="2" class="">
									<div class="yy-side-nav-menu-item">
									<span><i class="icon-tasks"></i> Todo</span>
									</div>
									</li>
									-->

									<li class="yy-nav-divider"></li>
									<li data-section="5" class="">
										<div class="yy-side-nav-menu-item">
											<span><i class="icon-trash"></i>trash</span>
										</div>
									</li>
								</ul>
							</nav><!-- /nav -->
						</div>
						<!-- left side menu bar -->

						<!-- list detail items -->
						<div class="pull-right" id="list-detail-items">
							<div id="yy-list-items-tool-bar">
								<input  id="yy-search" type="search" placeholder="Searching in note ..." class="search-query span12"/>

								<div id="yy-new-note-btns-group">
									<div id="btnNew" class="btn btn-mini btn-block" type="button">
										<i class="icon-plus"></i> New note
									</div>
								</div>
							</div>

							<div class="yy-list-items">
								<ul class="unstyled" id="yy-list-items-wrap">
									<li class="active" data-section="1">
										<div class="title">
											1 note
										</div>
										<div class="description">
											<span class="date">2013-10-11</span>
											<span class="summary">12321333333333333....</span>
										</div>
									</li>
									<li  data-section="2">
										<div class="title">
											2 note
										</div>
										<div class="description">
											<span class="date">2013-10-12</span>
											<span class="summary">2222Our life is important....</span>
										</div>
									</li>
									<li  data-section="3">
										<div class="title">
											3 note
										</div>
										<div class="description">
											<span class="date">2013-10-13</span>
											<span class="summary">333333333333333 life is important....</span>
										</div>
									</li>
									<li  data-section="4">
										<div class="title">
											4 note
										</div>
										<div class="description">
											<span class="date">2013-10-14</span>
											<span class="summary">4444444444444Our life is important,Our life is important ....</span>
										</div>
									</li>
									<li  data-section="5">
										<div class="title">
											5 note
										</div>
										<div class="description">
											<span class="date">2013-10-15</span>
											<span class="summary">555555555555Our life is important....</span>
										</div>
									</li>
								</ul>
							</div>
							<!-- yy-list-items -->

							<div id="yy-pagination">
								<div class="pagination pagination-right  pagination-mini">
									<ul>
										<li>
											<a href="#">&larr; Newer</a>
										</li>
										<li>
											<a href="#">Older &rarr;</a>
										</li>
									</ul>
								</div>
							</div>

						</div>
						<!-- list detail items -->
					</div>
				</div>
				<!-- end of sider -->

			</div>

			<div class="yy-content-wrapper">
				<div class="row-fluid">
					<div class="span10" id="yy-content">
						<div class="yy-edit-btns-group">
							<div id="btnEdit" class="btn"
							onclick="edit()"  >
								<i class="icon-pencil"></i> Edit
							</div>
							<div id="btnEditNew" class="btn" style="display: none;"
							onclick="editNew()"  >
								<i class="icon-plus"></i> New note
							</div>
							<div id="btnSave" class="btn" style="display: none;"
							onclick="SaveAndCloseAllEditors()"  >
								<i class="icon-save"></i> Save
							</div>
							<div id="btnDel" class="btn btn-inverse" style="display: inline-block;"
							onclick="delNote()" >
								<i class="icon-trash"></i> Delete
							</div>

							<div class="alert alert-error" id="alert-msg">
								Please input new note's title!
							</div>

						</div>
						<div id="yy-edit-article-title">
							<div id="title-in-view-mode">
								<p id="title0">
									Hello world, start first blog
								</p>
							</div>
							<div id="title-in-edit-mode" >
								<input id="yy-note-title-input" type="text" value="">
							</div>
						</div>

						<div id="yy-wysiwyg-editor">
							<div class="wysiwyg-editor" id="editor" contenteditable="true"></div>
						</div>

						<!-- start of content -->
						<div id="content">
							<ol>
								<li>
									<span >A Halloween apple bob may seem as homespun as a hayride, but that shiny red apple has a steamy past. It was once a powerful symbol of fertility and im &nbsp;</span>
									<br>
								</li>
								<li>
									<span>&nbsp;pple bobbing and eating candy apples are "the fossilized remnants of beliefs that ultimately go back to prehistory," British apple expert and fruit&nbsp;</span>
									<br>
								</li>
								<li>
									<span>&nbsp;storian, Joan Morgan, tells the Salt.</span>
									<br>
								</li>
							</ol>
							<div>
								<ul>
									<li>
										<span>dfadsf</span>
										<br>
									</li>
									<li>
										<span>dasfadsfa</span>
										<br>
									</li>
								</ul>
							</div>
						</div>
						<!-- end of content -->

					</div>
				</div>

			</div>
		</div>
		<div id="scroll-up">
			<a href="#" id="scroll-up-btn" class="btn-scroll-up btn btn-small btn-inverse"> <i class="icon-double-angle-up icon-only bigger-110"></i> </a>
		</div>

		<div id="newNotebookDialog" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="newNotebookDialogLabel" aria-hidden="true" style="display: none;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					×
				</button>
				<h6 id="newNotebookDialogLabel">Create a new <strong>notebook</strong></h6>
			</div>
			<div class="modal-body">
				<div class="form-horizontal">
					<div class="control-group">
						<label class="control-label" for="inputNotebookName">New notebook name</label>
						<div class="controls">
							<input type="text" id="inputNotebookName" placeholder="give new notebook name">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button  class="btn yy-submit-btn">
								Sumbit
							</button>
							<button class="btn btn-link yy-cancle-btn">
								Cancle
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- javascript ================================================== -->
		<script src="assets/js/jquery-1.10.1.min.js"></script>
		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>

		<!--
		<script src="assets/editor/innovaeditor.js"></script>
		<link href="assets/editor/innovaeditor.css" rel="stylesheet" type="text/css">

		<script src="assets/editor/nlslightbox.js"></script>
		<script src="assets/editor/nlsanimation.js"></script>

		<script src="assets/editor/dialog.js"></script>
		<script src="assets/editor/istoolbar.js"></script>
		<link href="assets/editor/istoolbar.css" rel="stylesheet" type="text/css">
		<script src="assets/editor/editor.js"></script>
		<script src="assets/editor/editor_lang.js"></script>

		<script src="assets/editor/innovamanager.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js" type="text/javascript"></script>
		<script src="assets/editor/webfont.js"></script>
		-->
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>

		<script src="assets/ace/js/ace-elements.min.js"></script>
		<script src="assets/ace/js/ace.min.js"></script>

		<script src="assets/js/app.js"></script>

		<script type="text/javascript">
			jQuery(function($) {

				function showErrorAlert(reason, detail) {
					var msg = '';
					if (reason === 'unsupported-file-type') {
						msg = "Unsupported format " + detail;
					} else {
						console.log("error uploading file", reason, detail);
					}
					$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' + '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
				}

				//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

				//but we want to change a few buttons colors for the third style
				$('#editor').ace_wysiwyg({
					toolbar : ['font', null, 'fontSize', null, {
						name : 'bold',
					}, {
						name : 'italic',

					}, {
						name : 'strikethrough',

					}, {
						name : 'underline',

					}, null, {
						name : 'insertunorderedlist',
					}, {
						name : 'insertorderedlist',
					}, {
						name : 'outdent',
					}, {
						name : 'indent',
					}, null, {
						name : 'justifyleft',
					}, {
						name : 'justifycenter',
					}, {
						name : 'justifyright',
					}, {
						name : 'justifyfull',
					}, null, {
						name : 'createLink',
					}, {
						name : 'unlink',
					}, null, 'foreColor', null, {
						name : 'undo',
					}, {
						name : 'redo',
					}],
					speech_button : false,
				}).prev().addClass('wysiwyg-style1');

				//Add Image Resize Functionality to Chrome and Safari
				//webkit browsers don't have image resize functionality when content is editable
				//so let's add something using jQuery UI resizable
				//another option would be opening a dialog for user to enter dimensions.
				if ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase())) {

					var lastResizableImg = null;
					function destroyResizable() {
						if (lastResizableImg == null)
							return;
						lastResizableImg.resizable("destroy");
						lastResizableImg.removeData('resizable');
						lastResizableImg = null;
					}

					var enableImageResize = function() {
						$('.wysiwyg-editor').on('mousedown', function(e) {
							var target = $(e.target);
							if (e.target instanceof HTMLImageElement) {
								if (!target.data('resizable')) {
									target.resizable({
										aspectRatio : e.target.width / e.target.height,
									});
									target.data('resizable', true);

									if (lastResizableImg != null) {//disable previous resizable image
										lastResizableImg.resizable("destroy");
										lastResizableImg.removeData('resizable');
									}
									lastResizableImg = target;
								}
							}
						}).on('click', function(e) {
							if (lastResizableImg != null && !(e.target instanceof HTMLImageElement)) {
								destroyResizable();
							}
						}).on('keydown', function() {
							destroyResizable();
						});
					}
					enableImageResize();
				}

			});
		</script>

		<script type="text/javascript">
		
		</script>

	</body>
</html>