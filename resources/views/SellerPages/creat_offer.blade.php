@extends('layouts.app')

@section('content')
	<div class="page-wrapper">
		<div id="perseus-app" class="job_page_perseus">
			<div class="main-container">
				<div class="container">
					<div class="sigle-job-additional-title post_root-page">
						<div class="root_container">
							<form id="add-edit-job-form" class="form wpj-grey-form">
								<div class="post-new-root-wrapper">
									<div class="roots_wrapper js-roots-wrapper">
										<div class="root_wrapper js-root-wrapper">
											<div class="fit-popover">
												<div class="form-group row">
													<div class="col-md-10">
														<div class="pseudo-input clearfix col-md-12">
															<label class="strong" for="Hourlie_title">I can</label>
															<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
														</div>
														<span class="more-discreet hourlie-title-example">e.g. I can design your business card for $60</span>
													</div>
													<div class="col-md-2">
														<div class="row">
															<div class="col-sm-12">
																<div>
																	<input class="col-sm-4 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																</div>
															</div>
														</div>
													</div>
												</div>
							                </div>
							                <aside class="gig-tooltip">
							                    <figure class="arr-top">
							                        <figcaption>
							                            <h4>SEO Title</h4>
							                            <p>The page's Title Tag is the most important on-page SEO factor to address on any web page. Well written page titles, which may include smart, natural and very specific keywords, can HELP your pages rank higher in Search Engine Results Pages (SERP's).</p>
							                            <ul>
							                                <li>I will design an exclusive Business Card</li>
							                                <li>I will draw you one RORSCHACH-like ink blot</li>
							                                <li>I will design a modern business logo</li>
							                            </ul>
							                        </figcaption>
							                        <div class="gig-tooltip-img gig-tooltip18"></div>
							                    </figure>
							                </aside>
											<div class="fit-popover">
												<h4>Choose a category:</h4>
												<div class="form-group row">
													<div class="col-md-6 mb-3 pull-left">
														<select required="" class="form-control no-radius-border fit-select" id="category" name="category">
															<option selected="" disabled="" value="">Select Category</option>
															<option value="programming">Programming &amp; IT</option>
															<option value="designing">Graphics &amp; Design</option>
															<option value="marketing">Digital Marketing</option>
															<option value="writing">Writing &amp; Translation</option>
															<option value="video">Video &amp; Animation</option>
															<option value="music">Music &amp; Audio</option>
															<option value="business">business</option>
															<option value="entertainment">Entertainment</option>
														</select>
													</div>
													<div class="col-md-6 mb-3 pull-right">
														<select required="" class="form-control no-radius-border fit-select disabled" id="subcategory" name="subcategory">
														</select>
													</div>
												</div>
											</div>
											<aside class="gig-tooltip">
							                    <figure class="arr-top">
							                        <figcaption>
							                            <h4>SEO Title</h4>
							                            <p>The page's Title Tag is the most important on-page SEO factor to address on any web page. Well written page titles, which may include smart, natural and very specific keywords, can HELP your pages rank higher in Search Engine Results Pages (SERP's).</p>
							                            <ul>
							                                <li>I will design an exclusive Business Card</li>
							                                <li>I will draw you one RORSCHACH-like ink blot</li>
							                                <li>I will design a modern business logo</li>
							                            </ul>
							                        </figcaption>
							                        <div class="gig-tooltip-img gig-tooltip18"></div>
							                    </figure>
							                </aside>
											<div class="fit-popover">
												<h4>Descripion</h4>
												<div class="form-group row">
													<div class="col-md-12">
														<div class="noroute" style="margin-bottom: 17px;">
															<textarea id="summernote1" name="r_desc" data-msg-required="Root description can not be blank!!" min="150" maxlength="1500" required="true" style="display: none;" aria-describedby="summernote1-error" aria-invalid="true"></textarea>
															<div class="note-editor note-frame">
																<div class="note-editing-area">
																	<div class="note-placeholder" style="display: none;">* Root Description</div>
																	<div class="note-handle">
																		<textarea class="note-codable" role="textbox" aria-multiline="true"></textarea>
																		<div class="note-editable" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" style="height: 150px;">
																			<p></p>
																		</div>
																		<div class="note-toolbar">
																			<div class="note-btn-group note-style">
																				<button type="button" class="note-btn note-btn-bold" role="button" tabindex="-1" aria-label="Bold (CTRL+B)">
																					<i class="bordered bold icon"></i>
																				</button>
																				<button type="button" class="note-btn note-btn-bold" role="button" tabindex="-1" aria-label="Bold (CTRL+B)">
																					<i class="bordered italic icon"></i>
																				</button>
																				<button type="button" class="note-btn note-btn-bold" role="button" tabindex="-1" aria-label="Bold (CTRL+B)">
																					<i class="bordered underline icon"></i>
																				</button>
																				<button type="button" class="note-btn note-btn-bold" role="button" tabindex="-1" aria-label="Bold (CTRL+B)">
																					<i class="bordered unordered list icon"></i>
																				</button>
																				<button type="button" class="note-btn note-btn-bold" role="button" tabindex="-1" aria-label="Bold (CTRL+B)">
																					<i class="bordered ordered list icon"></i>
																				</button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														<span class="more-discreet hourlie-title-example">0 / 5000 Characters</span>
														</div>
													</div>
												</div>
											</div>
											<aside class="gig-tooltip">
							                    <figure class="arr-top">
							                        <figcaption>
							                            <h4>SEO Title</h4>
							                            <p>The page's Title Tag is the most important on-page SEO factor to address on any web page. Well written page titles, which may include smart, natural and very specific keywords, can HELP your pages rank higher in Search Engine Results Pages (SERP's).</p>
							                            <ul>
							                                <li>I will design an exclusive Business Card</li>
							                                <li>I will draw you one RORSCHACH-like ink blot</li>
							                                <li>I will design a modern business logo</li>
							                            </ul>
							                        </figcaption>
							                        <div class="gig-tooltip-img gig-tooltip18"></div>
							                    </figure>
							                </aside>
											<div class="fit-popover">
												<h4> Instrutions To Buyer</h4>
												<div class="form-group row">
													<div class="col-md-12">
														<textarea id="gig_description" name="gdesc" class="form-control" rows="6" maxlength="1000"></textarea>
														<span class="more-discreet hourlie-title-example">0 / 5000 Characters</span>
													</div>
												</div>
											</div>
											<aside class="gig-tooltip">
							                    <figure class="arr-top">
							                        <figcaption>
							                            <h4>SEO Title</h4>
							                            <p>The page's Title Tag is the most important on-page SEO factor to address on any web page. Well written page titles, which may include smart, natural and very specific keywords, can HELP your pages rank higher in Search Engine Results Pages (SERP's).</p>
							                            <ul>
							                                <li>I will design an exclusive Business Card</li>
							                                <li>I will draw you one RORSCHACH-like ink blot</li>
							                                <li>I will design a modern business logo</li>
							                            </ul>
							                        </figcaption>
							                        <div class="gig-tooltip-img gig-tooltip18"></div>
							                    </figure>
							                </aside>
											<div class="fit-popover" data-toggle="tooltip" data-placement="left" data-original-title="قم بتوفير أمثلة وتحديد ما سوف تقوم به وما سوف لن تقوم به.<br/>قم أيضاً بتحديد كم وحدة, نموذج, عينة,...الخ تتضمنها خدمتك.">
												<h4>When Will You Deliver The Offer?</h4>
												<div class="form-group row">
													<div class="col-md-5">
														<select class="form-control no-radius-border fit-select" name="delivery">
															<option value="">Time to delivery</option>
															<option value="1">
															1 day </option>
															<option value="2">
															2 days </option>
															<option value="3">
															3 days </option>
															<option value="4">
															4 days </option>
															<option value="5">
															5 days </option>
															<option value="6">
															6 days </option>
															<option value="7">
															7 days </option>
															<option value="8">
															8 days </option>
															<option value="9">
															9 days </option>
															<option value="10">
															10 days </option>
															<option value="11">
															11 days </option>
															<option value="12">
															12 days </option>
															<option value="13">
															13 days </option>
															<option value="14">
															14 days </option>
															<option value="15">
															15 days </option>
															<option value="16">
															16 days </option>
															<option value="17">
															17 days </option>
															<option value="18">
															18 days </option>
															<option value="19">
															 19 days </option>
															<option value="20">
															20 days </option>
															<option value="21">
															21 days </option>
															<option value="22">
															22 days </option>
															<option value="23">
															23 days </option>
															<option value="24">
															24 days </option>
															<option value="25">
															25 days </option>
															<option value="26">
															26 days </option>
															<option value="27">
															27 days </option>
															<option value="28">
															28 days </option>
															<option value="29">
															29 days </option>
															<option value="30">
															30 days </option>
														</select>
													</div>
												</div>
											</div>
											<aside class="gig-tooltip">
							                    <figure class="arr-top">
							                        <figcaption>
							                            <h4>SEO Title</h4>
							                            <p>The page's Title Tag is the most important on-page SEO factor to address on any web page. Well written page titles, which may include smart, natural and very specific keywords, can HELP your pages rank higher in Search Engine Results Pages (SERP's).</p>
							                            <ul>
							                                <li>I will design an exclusive Business Card</li>
							                                <li>I will draw you one RORSCHACH-like ink blot</li>
							                                <li>I will design a modern business logo</li>
							                            </ul>
							                        </figcaption>
							                        <div class="gig-tooltip-img gig-tooltip18"></div>
							                    </figure>
							                </aside>
											<div class="fit-popover">
												<h4>Search Tags</h4>
												<div class="form-group">
													<input type="text" data-role="tagsinput">
												</div>
											</div>
											<div class="fit-popover">
												<p>Upload an image or video It is well designed Your service will appear professionally And increase your sales Do not use any images of other sellers</p>
												<div style="position: relative;" class="attachFiles-dropArea  promoViewMaster">
													<div class="attachFiles-normalOptions">
														<div class="attachFiles-promoView with-embed ">
															<div class="attachFiles-types attachFiles-pvFiles">
																
											                    <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" href="#" style="position:relative;z-index: 1;cursor: pointer;">
											                    	<div class="clearfix">
											                        	<span class="attach-icons attach-image"></span>
											                    	</div>
												                 	<label for="root-image-input" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
													                 	Upload<br>photos
												                 	</label>
												                 	<input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -15px;left: -140px;opacity: 0;display: inline-block;min-width: 280px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
						                                      	 </a>
															</div>
															<div class="attachFiles-types attachFiles-pvFiles left-sep">
											                    <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" href="#" style="position:relative;z-index: 1;">
													                 <div class="clearfix">
											                        	<span class="attach-icons attach-video"></span>
											                    	</div>
											                    	<label for="root-image-input1" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
													                 	Upload<br>Video
												                 	</label>
												                 	<input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -15px;left: -140px;opacity: 0;display: inline-block;min-width: 280px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
						                                       </a>
															</div>
															<div class="attachFiles-types attachFiles-pvFiles left-sep">
						                                       <a id="attachFiles-pick-1" class="attachFiles-pick _attachFiles-link call-to-action" href="#" style="position:relative;z-index: 1;">
													                 <div class="clearfix">
											                       	 	<span class="attach-icons attach-pdf"></span>
											                    	</div>
											                    	<label for="root-image-input1" class="d-md-flex" style="display: flex;width: 100%;text-align: center !important;align-items: center;justify-content: center;cursor: pointer;cursor: pointer;font-size: 12px;color: #888">
													                 	Upload<br>Pdf OR Txt
												                 	</label>
												                 	<input class="file-input" id="root-image-input" type="file" name="files[]" multiple="" style="position: absolute;top: -15px;left: -140px;opacity: 0;display: inline-block;min-width: 280px;max-width: 0;overflow: hidden;cursor: pointer;padding: 112px 0px;">
						                                       </a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="fit-popover">
												<h4>Add Url Video if you want that</h4>
												<div class="form-group">
													<div class="video-links-field video-link-1">
														<input type="text" name="r_video_link[]" value="" placeholder="Video link (YouTube)" aria-invalid="false">
													</div>
													<div class="video-links-field video-link-2" style="display: none;">
														<input type="text" name="r_video_link[]" value="" placeholder="Video link (YouTube)" aria-invalid="false">
													</div>
													<div class="video-links-field video-link-3" style="display: none;">
														<input type="text" name="r_video_link[]" value="" placeholder="Video link (YouTube)" aria-invalid="false">
													</div>
													<a href="#" class="add_more_video">+ Add More Video</a>
												</div>	
											</div>
											<div class="fit-popover">
												<h4>Add additional Features To The Services</h4>
												<section class="upcrate-box upgrades js-upgrades">
													<div class="fake-hint-wrap upgrades-per-package js-upgrades-per-package js-upgrade-additional-length-variations is-checked">
														<div class="title-wrapper">
												            <span class="">
												                <label class="fake-check-black" for="gig_gig_items_attributes_100000_checkbox">
												                    <input name="gig[gig_items_attributes][100000][checkbox]" type="hidden" value="1">
												                    <input class="js-extra-checkbox" id="gig_gig_items_attributes_100000_checkbox" name="gig[gig_items_attributes][100000][checkbox]" type="checkbox" value="checked">
												                    <span class="chk-img"></span>
												                </label>
												            </span>
												            <span class="title">Additional Revision</span>
												        </div>
												        <ul class="upgrades-per-package-list">
												        	<li class="cf">
												        		<div class="upgrades-per-package-item">
																	<div class="form-group row">
																		<div class="col-md-10 mb-2">
																			<div class="pseudo-input clearfix col-md-12">
																				<label class="strong" for="Hourlie_title">I can</label>
																				<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="row">
																				<div class="col-sm-12">
																					<div>
																						<input class="col-sm-4 col-md-12 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
												        		</div>
												        	</li>
												        </ul>
													</div>
													<div class="fake-hint-wrap upgrades-per-package js-upgrades-per-package js-upgrade-additional-length-variations is-checked">
														<div class="title-wrapper">
												            <span class="">
												                <label class="fake-check-black" for="gig_gig_items_attributes_100000_checkboxa">
												                    <input name="gig[gig_items_attributes][100000][checkbox]a" type="hidden" value="checked">
												                    <input class="js-extra-checkbox" id="gig_gig_items_attributes_100000_checkboxa" name="gig[gig_items_attributes][100000][checkbox]" type="checkbox" value="checked">
												                    <span class="chk-img"></span>
												                </label>
												            </span>
												            <span class="title">Extra fast delivery</span>
												        </div>
												        <ul class="upgrades-per-package-list">
												        	<li class="cf">
												        		<div class="upgrades-per-package-item">
																	<div class="form-group row">
																		<div class="col-md-8 mb-2">
																			<div class="pseudo-input clearfix col-md-12">
																				<label class="strong" for="Hourlie_title">I can</label>
																				<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
																			</div>
																		</div>
																		<div class="col-md-2 mb-2">
																			<div class="row">
																				<div class="col-sm-12">
																					<div>
																						<input class="col-sm-4 col-md-12 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="col-sm-4 col-md-12 col-lg-12 p-0 pull-right">
																				<div>
																					<select class="form-control no-radius-border fit-select" name="delivery">
																						<option value="1">
																						1 day </option>
																						<option value="2">
																						2 days </option>
																						<option value="3">
																						3 days </option>
																						<option value="4">
																						4 days </option>
																						<option value="5">
																						5 days </option>
																						<option value="6">
																						6 days </option>
																						<option value="7">
																						7 days </option>
																						<option value="8">
																						8 days </option>
																						<option value="9">
																						9 days </option>
																						<option value="10">
																						10 days </option>
																						<option value="11">
																						11 days </option>
																						<option value="12">
																						12 days </option>
																						<option value="13">
																						13 days </option>
																						<option value="14">
																						14 days </option>
																						<option value="15">
																						15 days </option>
																						<option value="16">
																						16 days </option>
																						<option value="17">
																						17 days </option>
																						<option value="18">
																						18 days </option>
																						<option value="19">
																						 19 days </option>
																						<option value="20">
																						20 days </option>
																						<option value="21">
																						21 days </option>
																						<option value="22">
																						22 days </option>
																						<option value="23">
																						23 days </option>
																						<option value="24">
																						24 days </option>
																						<option value="25">
																						25 days </option>
																						<option value="26">
																						26 days </option>
																						<option value="27">
																						27 days </option>
																						<option value="28">
																						28 days </option>
																						<option value="29">
																						29 days </option>
																						<option value="30">
																						30 days </option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
												        		</div>
												        	</li>
												        </ul>
													</div>
													<div class="fake-hint-wrap upgrades-per-package js-upgrades-per-package js-upgrade-additional-length-variations is-hiden open" style="display: none;">
														<div class="title-wrapper">
												            <span class="">
												                <label class="fake-check-black" for="gig_gig_items_attributes_8765_checkboxs">
												                    <input name="gig[gig_items_attributes][100000][checkbox]" type="hidden" value="1">
												                   <input class="js-extra-checkbox" id="gig_gig_items_attributes_8765_checkboxs" name="gig[gig_items_attributes][8765][checkbox]" type="checkbox" value="checked" disabled="disabled">
												                    <span class="chk-img"></span>
												                </label>
												            </span>
												            <span class="title">Extra</span>
												        </div>
												        <ul class="upgrades-per-package-list">
												        	<li class="cf">
												        		<div class="upgrades-per-package-item">
																	<div class="form-group row">
																		<div class="col-md-10 mb-2">
																			<div class="pseudo-input clearfix col-md-12">
																				<label class="strong" for="Hourlie_title">I can</label>
																				<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="row">
																				<div class="col-sm-12">
																					<div>
																						<input class="col-sm-4 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																					</div>
																				</div>
																			</div>
																		</div>

																	</div>
												        		</div>
												        	</li>
												        </ul>
													</div>
													<div class="fake-hint-wrap upgrades-per-package js-upgrades-per-package js-upgrade-additional-length-variations is-hiden open" style="display: none;">
														<div class="title-wrapper">
												            <span class="">
												                <label class="fake-check-black" for="gig_gig_items_attributes_8765_checkboxd">
												                    <input name="gig[gig_items_attributes][100000][checkbox]" type="hidden" value="1">
												                   <input class="js-extra-checkbox" id="gig_gig_items_attributes_8765_checkboxd" name="gig[gig_items_attributes][8765][checkbox]" type="checkbox" value="checked" disabled="disabled">
												                    <span class="chk-img"></span>
												                </label>
												            </span>
												            <span class="title">Extra</span>
												        </div>
												        <ul class="upgrades-per-package-list">
												        	<li class="cf">
												        		<div class="upgrades-per-package-item">
																	<div class="form-group row">
																		<div class="col-md-10 mb-2">
																			<div class="pseudo-input clearfix col-md-12">
																				<label class="strong" for="Hourlie_title">I can</label>
																				<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="row">
																				<div class="col-sm-12">
																					<div>
																						<input class="col-sm-4 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
												        		</div>
												        	</li>
												        </ul>
													</div>
													<div class="fake-hint-wrap upgrades-per-package js-upgrades-per-package js-upgrade-additional-length-variations is-hiden open" style="display: none;">
														<div class="title-wrapper">
												            <span class="">
												                <label class="fake-check-black" for="gig_gig_items_attributes_8765_checkboxf">
												                    <input name="gig[gig_items_attributes][100000][checkbox]" type="hidden" value="1">
												                   <input class="js-extra-checkbox" id="gig_gig_items_attributes_8765_checkboxf" name="gig[gig_items_attributes][8765][checkbox]f" type="checkbox" value="checked" disabled="disabled">
												                    <span class="chk-img"></span>
												                </label>
												            </span>
												            <span class="title">Extra</span>
												        </div>
												        <ul class="upgrades-per-package-list">
												        	<li class="cf">
												        		<div class="upgrades-per-package-item">
																	<div class="form-group row">
																		<div class="col-md-10 mb-2">
																			<div class="pseudo-input clearfix col-md-12">
																				<label class="strong" for="Hourlie_title">I can</label>
																				<input class="transparent-input" autocomplete="off" name="Hourlie[title]" id="Hourlie_title" type="text" maxlength="200">
																			</div>
																		</div>
																		<div class="col-md-2">
																			<div class="row">
																				<div class="col-sm-12">
																					<div>
																						<input class="col-sm-4 col-md-12 col-lg-12 pull-right price-entry strong USD" autocomplete="off" name="HourliePrice[0][price]" id="HourliePrice_0_price" type="text">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
												        		</div>
												        	</li>
												        </ul>
													</div>
													<div class="fake-hint-wrap upgrades-per-package js-no-padding js-upgrades-per-package js-upgrade-additional-length-variations is-checked">
														<div class="title-wrapper">
												            <span class="">
																<a href="#" class="add_more_extra">+ Add New Extra</a>
												            </span>
												        </div>
													</div>
												</section>
											</div>
											<div class="fit-popover">
												<div class="disclaimer-checkbox-wrapper">
													<div class="disclaimer-checkbox">
														<label class="fit-checkbox">
															<input type="checkbox" value="on">
															<span class="checkmark-box">
																<span class="fit-icon check-icon" style="width: 10px; height: 10px;">
																	<svg width="11" height="9" viewBox="0 0 11 9" xmlns="http://www.w3.org/2000/svg">
																		<path d="M3.64489 8.10164L0.158292 4.61504C-0.0511769 4.40557 -0.0511769 4.06594 0.158292 3.85645L0.916858 3.09786C1.12633 2.88837 1.46598 2.88837 1.67545 3.09786L4.02419 5.44658L9.05493 0.41586C9.2644 0.206391 9.60405 0.206391 9.81352 0.41586L10.5721 1.17445C10.7816 1.38392 10.7816 1.72355 10.5721 1.93303L4.40348 8.10166C4.19399 8.31113 3.85436 8.31113 3.64489 8.10164V8.10164Z"></path>
																	</svg>
																</span>
															</span>
															<p class="checkbox-content">I declare that these materials were created by myself or by my team and do not infringe on any 3rd party rights. I understand that the illegal use of digital assets is against Fiverr’s <a href="#" class="call-to-action">Terms of Service</a> and may result in blocking my account.</p>
														</label>
													</div>
												</div>
											</div>
											<div class="fit-popover">
												<div class="form-group">
													<div class="col-md-4 offset-md-4">
														<button type="submit" class="btn btn-block btn-lg btn-primary">Post</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection