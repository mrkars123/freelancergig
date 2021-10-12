@extends('my_payments')

@section("content")
	<div class="">
		<fl-card class="_nghost-webapp-c152" style="width: 77%;float: left;margin-right: 2%;">
			<fl-bit class="Card">
				<fl-bit class="CardBody">
					<fl-bit class="SpinnerOverlayContainer">
						<app-my-projects-table-employer class="ng-star-inserted">
							<fl-table class="ng-star-inserted">
								<table class="Table">
									<thead class="HeaderGroup ng-star-inserted">
										<tr class="Row HeaderRow">
											<th class="Cell-ng HeaderCell ng-star-inserted" data-grid-width="02">
												<fl-text class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Payment Method
													</div>
												</fl-text>
											</th>
											<th class="Cell HeaderCell ng-star-inserted" data-grid-width1="3">
												<fl-text class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Fee
													</div>
												</fl-text>
											</th>
											<th class="Cell-ng HeaderCell-center ng-star-inserted text-center" data-grid-width1="01">
												<fl-text class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	Action
													</div>
												</fl-text>
											</th>
											<th class="Cell-ng HeaderCell-center ng-star-inserted text-center" data-grid-width1="01">
												<fl-text class="paragraph">
													<div class="NativeElement ng-star-inserted">
													 	
													</div>
												</fl-text>
											</th>
										</tr>
									</thead>
									<tbody class="BodyGroup">
										<tr class="Row BodyRow ng-star-inserted">
											<td class="Cell BodyCell ng-star-inserted text-left" data-margin-bottom="xxsmall" data-grid-width="" style="" data-padding-new="11.5">
												<fl-bit class="ContentWrapper ng-star-inserted">
													<fl-text _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Date</div>
													</fl-text>
													<fl-text class="CellText ng-star-inserted paragraph">
														<div class="NativeElement ng-star-inserted">
															<fl-bit class="Title ng-star-inserted">
																<fl-bit class="Title-inner">
																<app-my-projects-table-cell>
																	<fl-link _nghost-webapp-c138 class="ng-star-inserted link_nghost-webapp-c138">
																		<a href="#" class="LinkElement ng-star-inserted">
																			<div class="LinkInner ng-star-inserted">
																				<div _ngcontent-webapp-c138="" class="LinkText">
																					<img src="../images/1_-_Paypal-512.png" width="35px" style="margin-right: 5px">
																					Paypal Account
																				</div>
																			</div>
																		</a>
																	</fl-link>
																</app-my-projects-table-cell>
																</fl-bit>
															</fl-bit>
														</div>
													</fl-text>
												</fl-bit>
											</td>
											<td class="Cell BodyCell ng-star-inserted text-left" data-margin-bottom="xxsmall" data-grid-width="" style="" data-height-new="15">
												<fl-bit class="ContentWrapper ng-star-inserted">
													<fl-text _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Fee</div>
													</fl-text>
													<fl-text class="CellText ng-star-inserted paragraph">
														<div class="NativeElement ng-star-inserted">
															<fl-bit class="Title ng-star-inserted">
																<fl-bit class="Title-inner">
																<app-my-projects-table-cell>
																	<fl-link _nghost-webapp-c138 class="ng-star-inserted link_nghost-webapp-c138">
																		<a href="#" class="LinkElement ng-star-inserted">
																			<div class="LinkInner ng-star-inserted">
																				<div _ngcontent-webapp-c138="" class="LinkText">
																					1.9%
																				</div>
																			</div>
																		</a>
																	</fl-link>
																</app-my-projects-table-cell>
																</fl-bit>
															</fl-bit>
														</div>
													</fl-text>
												</fl-bit>
											</td>
											<td class="Cell Cell-c BodyCell ng-star-inserted" data-margin-bottom="xxsmall" data-grid-width="" style="" data-height-new="15">
												<fl-bit class="ContentWrapper ng-star-inserted">
													<fl-text _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted">Action</div>
													</fl-text>
													<fl-text class="CellText ng-star-inserted paragraph">
														<div class="NativeElement ng-star-inserted">
															<fl-bit class="Title ng-star-inserted">
																<fl-bit class="Title-inner">
																<app-my-projects-table-cell>
																	<fl-link _nghost-webapp-c138 class="ng-star-inserted link_nghost-webapp-c138">
																		<a href="#" class="LinkElement ng-star-inserted">
																			<div class="LinkInner ng-star-inserted">
																				<div _ngcontent-webapp-c138="" class="LinkText">
																					Make defult
																				</div>
																			</div>
																		</a>
																	</fl-link>
																</app-my-projects-table-cell>
																</fl-bit>
															</fl-bit>
														</div>
													</fl-text>
												</fl-bit>
											</td>
											<td class="Cell Cell-c BodyCell ng-star-inserted text-left" data-margin-bottom="xxsmall" data-grid-width="" style="" data-height-new="11.5">
												<fl-bit class="ContentWrapper ng-star-inserted">
													<fl-text _ngcontent-webapp-c239="" class="MobileHeader paragraph ng-star-inserted" data-margin-right="xxsmall">
														<div class="NativeElement ng-star-inserted"></div>
													</fl-text>
													<fl-text class="CellText ng-star-inserted paragraph">
														<div class="NativeElement ng-star-inserted">
															<fl-bit class="Title ng-star-inserted">
																<fl-bit class="Title-inner">
																<app-my-projects-table-cell>
																	<fl-link _nghost-webapp-c138 class="ng-star-inserted link_nghost-webapp-c138">
																		<a href="#" class="LinkElement ng-star-inserted">
																			<div class="LinkInner ng-star-inserted">
																				<div _ngcontent-webapp-c138="" class="LinkText">
																					<div style="color: red;cursor: pointer;">
																							<span style="margin-right: 5px;font-weight: bold;font-size: 18px">x</span>
																							<span style="font-weight: bold;font-size: 14px">Delet</span>																													
																					</div>
																				</div>
																			</div>
																		</a>
																	</fl-link>
																</app-my-projects-table-cell>
																</fl-bit>
															</fl-bit>
														</div>
													</fl-text>
												</fl-bit>
											</td>
										</tr>
									</tbody>
								</table>

							</fl-table>
						</app-my-projects-table-employer>
					</fl-bit>
				</fl-bit>
			</fl-bit>
		</fl-card>
		<div class="all-requests-list a1234">
			<div class="gird-header row d-none d-lg-flex">
				<div class="col-lg-12">Payment Other</div>
			</div>
			<div class="underReviewrequestList d-none">
				<div class="request-row row">
					<div class="col-lg-12 col-12 request-desc-block">
						<div class="request-cats" style="text-align: center;">Nothing yet to show !
						</div>
					</div>
				</div>
			</div>
			<div class="activerequestLists">
				<div class="request-row row">
					<div class="col-lg-12 col-12 request-desc-block">
						<div class="short-desc" style="">
							<span class="" style="color: #000;margin-right: 5px;
							">
								<img src="http://localhost/done-desgin-website/images/downward.png">
							</span>
							<a href="{{ url('paymens/withdraw') }}">Withdrawal Funds</a>
						</div>
					</div>
					<div class="col-lg-12 col-12 margin-bottom-15">
					</div>
					<div class="col-lg-12 col-12 margin-bottom-15">
						<span class="fa fa-dashboard" style="color: #000;margin-right: 5px;"></span>
						<a href="{{ url('settings/payment') }}">Payment Settings</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section("scripts")

@endsection