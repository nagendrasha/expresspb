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
								<div class="sherah-dsinner">
									<div class="row mg-top-30">
                                        <div class="col-12 sherah-flex-between">
                                            <div class="sherah-breadcrumb">
                                                <h2 class="sherah-breadcrumb__title">Product</h2>
                                                <ul class="sherah-breadcrumb__list">
                                                    <li><a href="{{route('admin.dashboard')}}">Home</a></li>
                                                    <li class="active"><a href="">Product</a></li>
                                                </ul>
                                            </div>
                                            <!-- End Sherah Breadcrumb -->
                                            <a href="{{route('product.create')}}" class="sherah-btn sherah-gbcolor">Create Product</a>
                                        </div>
                                    </div>
									<div class="sherah-table sherah-page-inner sherah-border sherah-default-bg mg-top-25">
                                        <table id="sherah-table__vendor" class="sherah-table__main sherah-table__main-v3">
                                            <!-- sherah Table Head -->
                                            <thead class="sherah-table__head">
                                                <tr>
                                                    <th class="sherah-table__column-1 sherah-table__h1">Image</th>
													<th class="sherah-table__column-2 sherah-table__h2">Name</th>
													<th class="sherah-table__column-3 sherah-table__h3">Price</th>
													<th class="sherah-table__column-4 sherah-table__h4">Is Populer</th>
                                                    <th class="sherah-table__column-5 sherah-table__h5">Status</th>
                                                    <th class="sherah-table__column-6 sherah-table__h6">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="sherah-table__body">
												@foreach($products as $index => $product)
                                                <tr>

													<td class="sherah-table__column-1 sherah-table__data-6">
														<div class="">
                                                            <img class="product_list_thumb"  src="{{asset($product['tumb_image'])}}" alt="#">
                                                        </div>
                                                    </td>

                                                    <td class="sherah-table__column-2 sherah-table__data-2">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$product->translate_product?->name}}</p>
														</div>
                                                    </td>
                                                    <td class="sherah-table__column-3 sherah-table__data-3">
														<div class="sherah-table__product-content">
															<p class="sherah-table__product-desc">{{$product->price}}</p>
														</div>
                                                    </td>
                                                    @if($product->is_populer == 1)
													<td class="sherah-table__column-6 sherah-table__data-4">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<button class="btn btn-success rounded-circle">Yes</button>
														</div>
													</td>
												  @else
												  <td class="sherah-table__column-6 sherah-table__data-4">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<button class="btn btn-danger rounded-circle">No</button>
														</div>
													</td>
												  @endif

													@if($product->status == 'active')
													<td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																  <input id="status" onclick="changeCategoryStatus({{ $product->id }})" type="checkbox" checked="">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @else
												  <td class="sherah-table__column-6 sherah-table__data-6">
														<div class="sherah-ptabs__notify-switch sherah-ptabs__notify-switch--two">
															<label class="sherah__item-switch">
																<input onclick="changeCategoryStatus({{ $product->id }})" type="checkbox">
																<span class="sherah__item-switch--slide sherah__item-switch--round"></span>
															</label>
														</div>
													</td>
												  @endif
													<td class="sherah-table__column-8 sherah-table__data-8">
														<div class="sherah-table__status__group">
															<a href="{{route('product.edit',$product->id)}}"  class="sherah-table__action sherah-color2 sherah-color3__bg--opactity">
																<svg class="sherah-color3__fill" xmlns="http://www.w3.org/2000/svg" width="18.29" height="18.252" viewBox="0 0 18.29 18.252">
																	<g id="Group_132" data-name="Group 132" transform="translate(-234.958 -37.876)">
																		<path id="Path_481" data-name="Path 481" d="M242.545,95.779h-5.319a2.219,2.219,0,0,1-2.262-2.252c-.009-1.809,0-3.617,0-5.426q0-2.552,0-5.1a2.3,2.3,0,0,1,2.419-2.419q2.909,0,5.818,0c.531,0,.87.274.9.715a.741.741,0,0,1-.693.8c-.3.026-.594.014-.892.014q-2.534,0-5.069,0c-.7,0-.964.266-.964.976q0,5.122,0,10.245c0,.687.266.955.946.955q5.158,0,10.316,0c.665,0,.926-.265.926-.934q0-2.909,0-5.818a.765.765,0,0,1,.791-.853.744.744,0,0,1,.724.808c.007,1.023,0,2.047,0,3.07s.012,2.023-.006,3.034A2.235,2.235,0,0,1,248.5,95.73a1.83,1.83,0,0,1-.458.048Q245.293,95.782,242.545,95.779Z" transform="translate(0 -39.652)" fill="#09ad95"/>
																		<path id="Path_482" data-name="Path 482" d="M332.715,72.644l2.678,2.677c-.05.054-.119.133-.194.207q-2.814,2.815-5.634,5.625a1.113,1.113,0,0,1-.512.284c-.788.177-1.582.331-2.376.48-.5.093-.664-.092-.564-.589.157-.781.306-1.563.473-2.341a.911.911,0,0,1,.209-.437q2.918-2.938,5.853-5.86A.334.334,0,0,1,332.715,72.644Z" transform="translate(-84.622 -32.286)" fill="#09ad95"/>
																		<path id="Path_483" data-name="Path 483" d="M433.709,42.165l-2.716-2.715a15.815,15.815,0,0,1,1.356-1.248,1.886,1.886,0,0,1,2.579,2.662A17.589,17.589,0,0,1,433.709,42.165Z" transform="translate(-182.038)" fill="#09ad95"/>
																	</g>
																</svg>
															</a>
                                                            <a href="{{route('product.destroy',$product->id)}}" onclick="confirmation(event)" class="sherah-table__action sherah-color2 sherah-color2__bg--offset blog_comment_delete">
																<svg class="sherah-color2__fill"  xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 16.247 18.252">
																	<g id="Icon" transform="translate(-160.007 -18.718)">
																		<path id="Path_484" data-name="Path 484" d="M185.344,88.136c0,1.393,0,2.786,0,4.179-.006,1.909-1.523,3.244-3.694,3.248q-3.623.007-7.246,0c-2.15,0-3.682-1.338-3.687-3.216q-.01-4.349,0-8.7a.828.828,0,0,1,.822-.926.871.871,0,0,1,1,.737c.016.162.006.326.006.489q0,4.161,0,8.321c0,1.061.711,1.689,1.912,1.69q3.58,0,7.161,0c1.2,0,1.906-.631,1.906-1.695q0-4.311,0-8.622a.841.841,0,0,1,.708-.907.871.871,0,0,1,1.113.844C185.349,85.1,185.343,86.618,185.344,88.136Z" transform="translate(-9.898 -58.597)" />
																		<path id="Path_485" data-name="Path 485" d="M164.512,21.131c0-.517,0-.98,0-1.443.006-.675.327-.966,1.08-.967q2.537,0,5.074,0c.755,0,1.074.291,1.082.966.005.439.005.878.009,1.317a.615.615,0,0,0,.047.126h.428c1,0,2,0,3,0,.621,0,1.013.313,1.019.788s-.4.812-1.04.813q-7.083,0-14.165,0c-.635,0-1.046-.327-1.041-.811s.4-.786,1.018-.789C162.165,21.127,163.3,21.131,164.512,21.131Zm1.839-.021H169.9v-.764h-3.551Z" transform="translate(0 0)" />
																		<path id="Path_486" data-name="Path 486" d="M225.582,107.622c0,.9,0,1.806,0,2.709a.806.806,0,0,1-.787.908.818.818,0,0,1-.814-.924q0-2.69,0-5.38a.82.82,0,0,1,.81-.927.805.805,0,0,1,.79.9C225.585,105.816,225.582,106.719,225.582,107.622Z" transform="translate(-58.483 -78.508)" />
																		<path id="Path_487" data-name="Path 487" d="M266.724,107.63c0-.9,0-1.806,0-2.709a.806.806,0,0,1,.782-.912.818.818,0,0,1,.818.919q0,2.69,0,5.38a.822.822,0,0,1-.806.931c-.488,0-.792-.356-.794-.938C266.721,109.411,266.724,108.521,266.724,107.63Z" transform="translate(-97.561 -78.509)" />
																	</g>
																</svg>
															</a>
                                                            <a href="{{route('product.gallery',$product->id)}}" class="sherah-table__action sherah-color2 sherah-color1__bg--offset blog_comment_delete">
																<svg xmlns="http://www.w3.org/2000/svg" width="16.247" height="18.252" viewBox="0 0 91.787 84.116">
                                                                    <g id="Group_1021" data-name="Group 1021" transform="translate(891.292 39.276)">
                                                                      <path id="Path_536" data-name="Path 536" d="M-891.292,158.124q1.434-5.442,2.867-10.884c1.3-4.961,2.586-9.926,3.9-14.884a2.8,2.8,0,0,1,2.664-2.251,2.654,2.654,0,0,1,2.763,1.848,3.929,3.929,0,0,1,.037,2q-3.073,12-6.226,23.984c-.64,2.452.088,3.739,2.533,4.394q29.033,7.775,58.067,15.543a2.893,2.893,0,0,0,3.97-2.327c.626-2.487,1.227-4.98,1.849-7.468a2.9,2.9,0,0,1,3.436-2.368,2.894,2.894,0,0,1,2.124,3.726c-.627,2.609-1.256,5.219-1.944,7.813A8.547,8.547,0,0,1-826,183.469q-29.3-7.827-58.584-15.682a8.566,8.566,0,0,1-6.552-6.853,1.264,1.264,0,0,0-.16-.3Z" transform="translate(0 -138.958)"></path>
                                                                      <path id="Path_537" data-name="Path 537" d="M-767.966,21.9c-9.648,0-19.3-.062-28.943.029a9.215,9.215,0,0,1-8.88-5.491,7.393,7.393,0,0,1-.451-3.232c-.027-14.606-.053-29.212,0-43.818a8.532,8.532,0,0,1,8.907-8.66q29.346-.008,58.693,0a8.581,8.581,0,0,1,8.877,8.872q.017,21.685,0,43.37a8.551,8.551,0,0,1-8.9,8.923C-748.432,21.915-758.2,21.9-767.966,21.9ZM-773.938.457l4.606-5.528q4.674-5.611,9.345-11.224a6.85,6.85,0,0,1,7.183-2.522c1.734.377,2.87,1.622,3.969,2.909q6.341,7.428,12.7,14.838a6.488,6.488,0,0,1,.426.631l.211-.158v-.789q0-14.429,0-28.857c0-2.179-1.125-3.294-3.316-3.295q-29.216,0-58.432,0c-2.141,0-3.277,1.115-3.278,3.25q-.008,18.865,0,37.73a5.429,5.429,0,0,0,.07.624l.239.127a5.744,5.744,0,0,1,.529-.721Q-794.05,1.826-788.4-3.808c3.131-3.127,7.065-3.129,10.21,0C-776.8-2.422-775.412-1.022-773.938.457Zm-25.649,14.9a3.316,3.316,0,0,0,2.611.808q28.949,0,57.9,0c.239,0,.478,0,.717-.005a2.828,2.828,0,0,0,2.864-2.923c.02-1.195-.052-2.393.023-3.584a2.712,2.712,0,0,0-.78-2.072q-8.569-9.946-17.1-19.927c-1.071-1.25-1.417-1.243-2.489.044q-7.71,9.264-15.424,18.523c-1.468,1.762-3.193,1.826-4.833.189q-3.076-3.071-6.147-6.147c-.963-.962-1.146-.963-2.1-.01q-6.688,6.684-13.377,13.367C-798.31,14.2-798.937,14.753-799.587,15.358Z" transform="translate(-69.752)"></path>
                                                                      <path id="Path_538" data-name="Path 538" d="M-734.635,39.893a7.657,7.657,0,0,1-7.659-7.6,7.688,7.688,0,0,1,7.7-7.667,7.682,7.682,0,0,1,7.612,7.663A7.653,7.653,0,0,1-734.635,39.893Zm-.029-5.742a1.9,1.9,0,0,0,1.938-1.906,1.934,1.934,0,0,0-1.886-1.884,1.927,1.927,0,0,0-1.936,1.92A1.9,1.9,0,0,0-734.664,34.151Z" transform="translate(-122.238 -52.421)"></path>
                                                                    </g>
                                                                </svg>
															</a>


														</div>
                                                    </td>
                                                </tr>
												@endforeach
                                            </tbody>
                                        </table>
									</div>

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
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger',
			},
			buttonsStyling: false
			})
			swalWithBootstrapButtons.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Yes, delete it!',
			cancelButtonText: 'No, cancel!',
			reverseButtons: true
			}).then((result) => {
			if (result.isConfirmed) {
				swalWithBootstrapButtons.fire(
				'Deleted!',
				'Your file has been deleted.',
				'success'
				)
				window.location.href = urlToRedirect;
			} else if (
				/* Read more about handling dismissals below */
				result.dismiss === Swal.DismissReason.cancel
			) {
				swalWithBootstrapButtons.fire(
				'Cancelled',
				'Your imaginary file is safe :)',
				'error'
				)
			}
			})
    }
</script>

<script>
    "use strict"
    function changeCategoryStatus(Id)
    {

    $.ajax({
        type:"GET",
        data: { _token : '{{ csrf_token() }}' },
        url: "{{ route('product.item.status.change', ':catId') }}".replace(':catId',Id),
        dataType: "json",
        success: function(response){
			if(response.status = 200) {
				toastr.success(response.message);
			}
        }
    });
    }
</script>
