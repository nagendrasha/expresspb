
@include('Admin.Base.Header')
<body id="sherah-dark-light">
		<div class="sherah-body-area">
			@include('Admin.Base.Sidebar')
			@include('Admin.Base.Navbar')
			<section class="sherah-adashboard sherah-show">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="sherah-body">
								<!-- Dashboard Inner -->
								<div class="sherah-dsinner">
									<div class="row">
										<div class="col-12">
											<div class="sherah-breadcrumb mg-top-30">
												<h2 class="sherah-breadcrumb__title">About us</h2>
												<ul class="sherah-breadcrumb__list">
													<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
													<li class="active"><a>About us</a></li>
												</ul>
											</div>
										</div>
									</div>
                                    <div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table class="sherah-table__main sherah-table__main-v3">
                                            <!-- sherah Table Head -->
                                            <tbody class="sherah-table__body">
                                                <tr>
                                                    <td><div class="sherah-table__status__group">
															<a href="{{route('about-us.index')}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
                                                            <p>Default</p>
														</div>
                                                    </td>
                                                @foreach($languages as $index => $language)
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															<a href="{{route('about.language.edit',[$language->lang_code])}}" class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
                                                            <p>{{$language->name}}</p>
														</div>
                                                    </td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                        @if(!empty($translate_aboutus))
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>{{$selected_language->name}}</strong></a>
                                        </div>
                                        @else
                                        <div class="alert alert-success" role="alert">
                                            Your edditing mood :  <a href="javascript:;" class="alert-link"><strong>Default</strong></a>
                                        </div>
                                        @endif
									</div>
                                    @if(!empty($translate_aboutus))
                                    <div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('about.language-update',$translate_aboutus->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">About-us Information</h4>
                                                        <div class="row">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Experience</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="title" value="{{$translate_aboutus?->title}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Main Heading</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$translate_aboutus->main_title}}" name="main_title" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">About-Us Description</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input summernote"  row="20" placeholder="Type here" type="text" name="about_us">{{$translate_aboutus->description}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Customers</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" type="text" value="{{$translate_aboutus->customer}}" name="customer" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Text-1</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" type="text" value="{{$translate_aboutus->text_1}}" name="text_1" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Branch</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" type="text" value="{{$translate_aboutus->branch}}" name="branch" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Text-2</label>
                                                                    <div class="form-group__input">
                                                                        <input class="sherah-wc__form-input" type="text" value="{{$translate_aboutus->text_2}}" name="text_2" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Info -->
                                                </div>
                                            </div>

                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Update</button>
                                            </div>
                                        </form>
									</div>
                                    @else
									<div class="sherah-page-inner sherah-border sherah-basic-page sherah-default-bg mg-top-25 p-0">
                                        <form class="sherah-wc__form-main" action="{{route('AboutUs.update',$about_us->id)}}" method="POST" enctype= multipart/form-data >
                                        @csrf
                                        @method('PUT')
                                            <div class="row">
                                                <div class="col-12">
                                                    <!-- Product Info -->
                                                    <div class="product-form-box sherah-border mg-top-30">
                                                        <h4 class="form-title m-0">About Us page information</h4>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">Existing Image</label>
                                                                    <div class="form-group__input">
                                                                        <img id="preview-img" class
                                                                        ="about-form-img" src="{{asset($about_us->banner_image)}}" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">New Image</label>
                                                                    <div class="form-group__input">
                                                                        <input name="banner_image" onchange="previewThumnailImage(event)" type="file">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Experience</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" placeholder="Type here" type="text" name="title" value="{{$about_us->aboutus_translate?->title}}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Main Heading</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$about_us->aboutus_translate?->main_title}}" name="main_title" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="sherah-wc__form-label">About-Us Description</label>
                                                                    <div class="form-group__input">
                                                                        <textarea class="sherah-wc__form-input summernote" type="text" name="about_us">{{$about_us->aboutus_translate?->description}}</textarea>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Customers</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$about_us->aboutus_translate?->customer}}" name="customer" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Text-1</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$about_us->aboutus_translate?->text_1}}" name="text_1" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Branch</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$about_us->aboutus_translate?->branch}}" name="branch" >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="sherah-wc__form-label">Text-2</label>
                                                                        <div class="form-group__input">
                                                                            <input class="sherah-wc__form-input" type="text" value="{{$about_us->aboutus_translate?->text_2}}" name="text_2" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                                    <!-- End Product Info -->
                                                </div>
                                            </div>
                                            <div class=" mg-top-40 sherah-dflex sherah-dflex-gap-30 justify-content-end">
                                                <button type="submit" class="sherah-btn sherah-btn__primary">Update Now</button>
                                            </div>
                                        </form>
									</div>
                                    @endif
								</div>
								<!-- End Dashboard Inner -->
							</div>
						</div>


					</div>
				</div>
			</section>
			<!-- End sherah Dashboard -->

		</div>
@include('Admin.Base.Footer')

<script>
    "use strict"
    function previewThumnailImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview-img');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
