<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer prismal-search__k__1MCYzfcZN-outer prismal-local-603-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner prismal-search__k__1MCYzfcZN-inner prismal-local-603-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container prismal-search__k__baLWB4dRKjp-container prismal-local-604-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-2 gutters-row-v-2" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner prismal-search__k__baLWB4dRKjp-inner prismal-local-604-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-2 gutters-col-v-2">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container prismal-search__k__kxeqsSpdy-n-container prismal-local-605-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner prismal-search__k__kxeqsSpdy-n-inner prismal-local-605-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align prismal-search__k__kxeqsSpdy-n-align prismal-local-605-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container prismal-search__k__CtKC_EuIZL-container prismal-local-606-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container prismal-search__k__vrf0UGkWrN-container prismal-local-607-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-3 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner prismal-search__k__vrf0UGkWrN-inner prismal-local-607-inner h-row">
										<?php prismal_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(prismal_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container prismal-search__k__vD7AVCTELY-container prismal-local-617-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner prismal-search__k__vD7AVCTELY-inner prismal-local-617-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container prismal-search__k__tBYU0uM8Xx-container prismal-local-618-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner prismal-search__k__tBYU0uM8Xx-inner prismal-local-618-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align prismal-search__k__tBYU0uM8Xx-align prismal-local-618-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(prismal_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing prismal-search__k__ELgmeRXRD--spacing prismal-local-619-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer prismal-search__k__ELgmeRXRD--outer prismal-local-619-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link prismal-search__k__ELgmeRXRD--link prismal-local-619-link h-w-100 h-global-transition" href="<?php prismal_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text prismal-search__k__ELgmeRXRD--text prismal-local-619-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'prismal'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container prismal-search__k__P2OarhUKUK-container prismal-local-620-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner prismal-search__k__P2OarhUKUK-inner prismal-local-620-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align prismal-search__k__P2OarhUKUK-align prismal-local-620-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer prismal-search__k__tRiQFlrj8q-outer prismal-local-621-outer" data-kubio="kubio/pagination-numbers">
														<?php prismal_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container prismal-search__k__tBYU0uM8Xx-container prismal-local-622-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner prismal-search__k__tBYU0uM8Xx-inner prismal-local-622-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align prismal-search__k__tBYU0uM8Xx-align prismal-local-622-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<?php if(prismal_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing prismal-search__k__ELgmeRXRD--spacing prismal-local-623-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer prismal-search__k__ELgmeRXRD--outer prismal-local-623-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link prismal-search__k__ELgmeRXRD--link prismal-local-623-link h-w-100 h-global-transition" href="<?php prismal_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text prismal-search__k__ELgmeRXRD--text prismal-local-623-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'prismal'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
