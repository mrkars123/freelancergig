@extends('SellerPages.manage_sales')

@section("content")
    <div class="">
        <div class="_nghost-webapp-c152">
			<div class="Card">
				<div class="CardBody">
					<div class="SpinnerOverlayContainer">
						<div class="ng-star-inserted">
							<div class="ng-star-inserted">
								<table class="Table">
									<thead class="HeaderGroup ng-star-inserted">
										<tr class="Row HeaderRow">
											<th class="Cell-ng HeaderCell ng-star-inserted">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Buyer
													</div>
												</div>
											</th>
											<th class="Cell HeaderCell ng-star-inserted">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Order Details
													</div>
												</div>
											</th>
											<th class="Cell-ng HeaderCell ng-star-inserted text-center">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Due On
													</div>
												</div>
											</th>
											<th class="Cell-ng HeaderCell ng-star-inserted text-center">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Delivered On
													</div>
												</div>
											</th>
											<th class="Cell-ng HeaderCell ng-star-inserted text-center">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Total Price
													</div>
												</div>
											</th>
											<th class="Cell-ng pr-4 HeaderCell ng-star-inserted text-center">
												<div class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Status
													</div>
												</div>
											</th>
										</tr>
									</thead>
									<tbody class="BodyGroup">
										<tr class="Row BodyRow ng-star-inserted">
											<td class="Cell BodyCell padding-left ng-star-inserted text-left col-data" data-margin-bottom="xxsmall" data-grid-width="4" style="" data-height-new="13">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Seller</div>
													</div>
													<div class="CellText ng-star-inserted paragraph">
														<div class="NativeElement ng-star-inserted">
															<div class="Title ng-star-inserted">
																<div class="Title-inner">
																<div>
																	<div _nghost-webapp-c138="" class="ng-star-inserted link_nghost-webapp-c138">
																		<a href="#" class="LinkElement ng-star-inserted">
																			<div class="LinkInner ng-star-inserted">
																				<div _ngcontent-webapp-c138="" class="LinkText">
																					<div class="profile-reviews-wrapper" style="line-height:2px !important;">
																						<ul class="review-lit">
			
																						<span class=" user-pict-32" style="line-height:2px !important;">
																							<img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/ad3217bbe7ad98c6ab340f40bc043a63-701807461577452311.114558/57F9047B-C6CE-4799-93DD-C31C88BF748B" alt="adrincallejas" data-reload="inprogress" style="line-height:2px !important;">
																						</span>
																						<header>
																							<div class="reviewer-details">
																								<h5 class="padding-top-g0">{{ Auth::user()->name }}</h5>
																							</div>
																						</header>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</a>
																	</div>
																</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</td>
											<td class="Cell Cell-vt BodyCell ng-star-inserted" data-margin-bottom="xxsmall" data-height-new="20">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Order Details</div>
													</div>
													<div class="ng-star-inserted">
														<span class="ellipsis text-wrap">
															I Will Desgin Website i'am Profisinal working
														</span>
													</div>
												</div>
											</td>
											<td class="Cell Cell-vt BodyCell ng-star-inserted text-md-center" data-margin-bottom="xxsmall" data-height-new="20">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Due on</div>
												</div>
													<div class="ng-star-inserted">
														8 Dec
													</div>
												</div>
											</td>
											<td class="Cell Cell-vt BodyCell ng-star-inserted text-md-center" data-margin-bottom="xxsmall" data-height-new="20">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Due on</div>
												</div>
													<div class="ng-star-inserted">
														8 Dec
													</div>
												</div>
											</td>
											<td class="Cell Cell-vt BodyCell ng-star-inserted text-md-center" data-margin-bottom="xxsmall" data-height-new="20">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Total Price</div>
													</div>
													<div class="ng-star-inserted">
														$15.00
													</div>
												</div>
											</td>
											<td class="Cell pr-10 Cell-vt BodyCell ng-star-inserted text-md-center" data-margin-bottom="xxsmall" data-height-new="20">
												<div class="ContentWrapper ng-star-inserted">
													<div _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Delivered</div>
													</div>
													<div class="ng-star-inserted">
														<span style="background:#D1D1D1;padding:5px 8px;border-radius:3px;color:#000 !important;font-size:12px">Delivered</span>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection

@section("scripts")

@endsection